<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyCategory extends Model
{
    use HasFactory;

            /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'img',
        'description',
    ];


    public function getGetImageAttribute(){
        if($this->image){
            return url("storage/$this->image");
        }
    }

    public function property(){
        return $this->hasMany(property::class);
    }

}
