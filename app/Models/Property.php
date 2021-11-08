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
        'floors',
        'street',
        'bottom',
        'rooms',
        'facebook_link',
        'map_route_link',
        'map_link',
        'video',
        'image1',
        'image2',
        'image3',
        'image4',
        'image5',
        'image6',
        'render1',
        'render2',
        'render3',
        'render4',
        'render5',
        'render6',
    ];

    public function ShowImage($number){ //a los getAttribute no se les puede pasar parametros
        if($this['image' . $number]){
            $image_link = $this['image' . $number];
            return url("storage/" . $image_link);
        }
    }

    public function ShowRender($number){
        if($this['render' . $number]){
            $render = $this['image' . $number];
            return url("storage/" . $render);
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
        }
    }

    public function PropertyCategory(){
        return $this->belongsTo(PropertyCategory::class);
    }
}
