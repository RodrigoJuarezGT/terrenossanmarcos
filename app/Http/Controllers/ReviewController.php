<?php


namespace App\Http\Controllers;

use App\Models\review;
use Illuminate\Http\Request;
use App\Http\Requests\ReviewRequest;
use Illuminate\Support\Facades\Storage;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = review::latest()->get();
        return view('admin.review.index', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.review.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReviewRequest $request)
    {
        $review = review::Create($request->all());

        if($request->file('image')){
            $review->image = $request->file('image')->store('review','public');
            $review->save();
        }

        return back()->with('status', 'Comentario Creado');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(review $review)
    {
        return view('admin.review.edit', compact('review'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, review $review)
    {
        $old_photo = $review->image;
        $review->update($request->all());

        if($request->file('image')){
            Storage::disk('public')->delete($old_photo);
            $review->image = $request->file('image')->store('review', 'public');
            $review->save();
        }
        return back()->with('status', 'Comentario Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(review $review)
    {
        Storage::disk('public')->delete($review->image);
        $review->delete();
        return back()->with('status', 'Comentario Eliminado');
    }
}
