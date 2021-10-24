<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function inicio(){
        return view('frontend.inicio');
    }

    public function inmuebles(){
        return view('frontend.inmuebles');
    }

    public function conocenos(){
        return view('frontend.conocenos');
    }
}
