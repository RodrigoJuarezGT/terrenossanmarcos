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

    public function getGetImageAttribute(){
        if($this->image1){
            return url("storage/$this->image1");
        }
    }

    public function PropertyCategory(){
        return $this->belongsTo(PropertyCategory::class);
    }
}
