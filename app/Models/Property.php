<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'property_category_id',
        'active',
        'tittle',
        'address',
        'price',
        'dimensions',
        'description',
        'slug',
        'floors',
        'street',
        'bottom',
        'rooms',
        'facebook_link',
        'map_route_link',
        'coordinates',
        'video',
        'image1',
        'image2',
        'image3',
        'image4',
        'image5',
        'image6',
        'image7',
        'image8',
    ];

    public function ShowImage($number){ //a los getAttribute no se les puede pasar parametros
        if($this['image' . $number]){
            $image_link = $this['image' . $number];
            return url("storage/" . $image_link);
        } else {
            return null;
        }
    }

    public function getgetImageAttribute(){
        if($this->image1){
            return url("storage/$this->image1");
        }
    }

    public function getgetVideoAttribute(){
        if($this->video){
            return url("storage/$this->video");
        }else{
            return null;
        }
    }

    public function PropertyCategory(){
        return $this->belongsTo(PropertyCategory::class);
    }


    public function similars(){
        return $this->where('property_category_id', $this->property_category_id)->where('id', '!=', $this->id)->take(3)->inRandomOrder()->get();
    }


}
