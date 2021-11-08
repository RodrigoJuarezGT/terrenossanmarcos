<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use App\Http\Requests\PropertyRequest;
use App\Models\PropertyCategory;
use Illuminate\Support\Facades\Storage;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = Property::latest()->get();

        return view('admin.property.index', compact('properties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $PropertyCategories = PropertyCategory::get();

        return view('admin.property.create', compact('PropertyCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PropertyRequest $request)
    {
        $property = Property::Create( $request->all() );

        for ($i=1; $i <= 6; $i++) {
            if($request->file('image' . $i)){
                $property['image' . $i] = $request->file('image' . $i)->store('properties', 'public');
                $property->save();
            }
            if($request->file('render' . $i)){
                $property['render' . $i] = $request->file('render' . $i)->store('properties', 'public');
                $property->save();
            }
        }


        if($request->file('video')){
            $property->video = $request->file('video')->store('properties', 'public');
            $property->save();
        }

        return back()->with('status','Propiedad Creada');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property)
    {
        return 'soy show';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property)
    {
        $PropertyCategories = PropertyCategory::get();

        return view('admin.property.edit', compact('property','PropertyCategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(PropertyRequest $request, Property $property)
    {

        for ($i=1; $i <= 6; $i++) {
            if($request->file('image' . $i)){

                Storage::disk('public')->delete( $property['image' . $i] );

                $property['image' . $i] = $request->file('image' . $i)->store('properties', 'public');
                $property->save();
            }
            if($request->file('render' . $i)){

                Storage::disk('public')->delete( $property['render' . $i] );

                $property['render' . $i] = $request->file('render' . $i)->store('properties', 'public');
                $property->save();
            }
        }


        if($request->file('video')){

            Storage::disk('public')->delete( $property['video'] );

            $property->video = $request->file('video')->store('properties', 'public');
            $property->save();
        }

        $property->update( [
            'property_category_id' => $request->property_category_id,
            'tittle' => $request->tittle,
            'address' => $request->address,
            'price' => $request->price,
            'dimensions' => $request->dimensions,
            'floors' => $request->floors,
            'street' => $request->street,
            'bottom' => $request->bottom,
            'rooms' => $request->rooms,
            'description' => $request->description,
            'facebook_link' => $request->facebook_link,
            'map_route_link' => $request->map_route_link,
            'map_link' => $request->map_link
        ]);

        if(!$request->active){
            $property->update(['active' => 'off']);
        }else{
            $property->update(['active' => 'on']);
        }


        return back()->with('status', 'Inmueble Actualizado');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
        Storage::disk('public')->delete($property->video);

        for ($i=1; $i <= 6; $i++) {
            Storage::disk('public')->delete($property['image' . $i]);
            Storage::disk('public')->delete($property['render' . $i]);
        }

        $property->delete();

        return back()->with('status','Se Elimino Inmueble');
    }
}
