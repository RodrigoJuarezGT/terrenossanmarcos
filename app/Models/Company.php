<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;


        /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'whatsapp',
        'messenger',
        'telephone',
        'slogan',
        'slogan_text',
        'home_image',
    ];

    public function getGetImageAttribute(){
        if($this->home_image){
            return url("storage/$this->home_image");
        }
    }

}
