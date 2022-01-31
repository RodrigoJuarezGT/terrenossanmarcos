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
        'whatsapp_link',
        'messenger',
        'telephone',
        'slogan',
        'slogan_text',
        'home_image',
        'video_company',
    ];

    public function getGetImageAttribute(){
        if($this->home_image){
            return url("storage/$this->home_image");
        }
    }
    public function getGetVideoAttribute(){
        if($this->video_company){
            return url("storage/$this->video_company");
        }
    }

    public function getGetWhatsappAttribute(){
        return $this->whatsapp_link ?
            $this->whatsapp_link :
            "https://api.whatsapp.com/send?phone=502$this->whatsapp";
    }

}
