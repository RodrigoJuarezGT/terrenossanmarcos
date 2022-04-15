<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Requests\PostsRequest;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Posts::latest()->get();
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostsRequest $request)
    {
        $post = Posts::create( $request->all() );
        $post->date = date('d-m-Y');
        $post->save();

        if( $request->file('image') ){
           $post->image = $request->file('image')->store('posts', 'public');
           $post->save();
        }

        return back()->with('status', 'Post creado exitosamente.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function show(Posts $post)
    {
        $company = Company::get();

        return view('frontend.post', compact('post', 'company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function edit(Posts $post)
    {
        return view('admin.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function update(PostsRequest $request, Posts $post)
    {
        $last_image = $post->image;
        $post->update( $request->all() );

        if($request->file('image')){
            Storage::disk('public')->delete($last_image);
            $post->image = $request->file('image')->store('posts', 'public');
            $post->save();
        }

        return back()->with('status', 'Post Actualizado');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Posts $post)
    {
        Storage::disk('public')->delete($post->image);
        $post->delete();

        return back()->with('status', 'Post eliminado exitosamente');
    }
}
