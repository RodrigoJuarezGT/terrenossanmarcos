<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PropertyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'tittle' => 'required',
            'address' => 'required',
            'price' => 'required|integer',
            'dimensions' => 'required',
            'description' => 'required',
            'image1' => 'image',
            'image2' => 'image',
            'image3' => 'image',
            'image4' => 'image',
            'image5' => 'image',
            'image6' => 'image',
            'image7' => 'image',
            'image8' => 'image',
            'video' => 'mimetypes:video/x-ms-asf,video/x-flv,video/mp4,application/x-mpegURL,video/MP2T,video/3gpp,video/quicktime,video/x-msvideo,video/x-ms-wmv,video/avi'

        ];
    }
}
