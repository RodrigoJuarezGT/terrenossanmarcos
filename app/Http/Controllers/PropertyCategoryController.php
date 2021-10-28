<?php

namespace App\Http\Controllers;

use App\Models\PropertyCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\PropertyCategoryRequest;

class PropertyCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $PropertyCategories = PropertyCategory::latest()->paginate(15);

        return view('admin.PropertyCategory.index', compact('PropertyCategories'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.PropertyCategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PropertyCategoryRequest $request)
    {
        $PropertyCategory = PropertyCategory::create( $request->all() );

        if($request->file('image')){
            $PropertyCategory->image = $request->file('image')->store('propertycategories','public');
            $PropertyCategory->save();
        }

        return back()->with('status','Tipo de propiedad creado'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PropertyCategory  $propertyCategory
     * @return \Illuminate\Http\Response
     */
    public function show(PropertyCategory $propertyCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PropertyCategory  $propertyCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(PropertyCategory $PropertyCategory)
    {
        return view('admin.PropertyCategory.edit', compact('PropertyCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PropertyCategory  $propertyCategory
     * @return \Illuminate\Http\Response
     */
    public function update(PropertyCategoryRequest $request, PropertyCategory $PropertyCategory)
    {
        $img_actual = $PropertyCategory->image;

        $PropertyCategory->update( $request->all() );

        if($request->file('image')){

            Storage::disk('public')->delete($img_actual);
            
            $PropertyCategory->image = $request->file('image')->store('propertycategories','public');
            $PropertyCategory->save();
        }

        return back()->with('status','Tipo de propiedad creado'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PropertyCategory  $propertyCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(PropertyCategory $PropertyCategory)
    {
        Storage::disk('public')->delete($PropertyCategory->image);

        $PropertyCategory->delete();

        return back()->with('status', 'Tipo de Inmueble Eliminado');
    }
}
