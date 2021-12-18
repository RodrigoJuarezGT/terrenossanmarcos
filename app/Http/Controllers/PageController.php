<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class PageController extends Controller
{
    public function inicio(){

        $company = Company::get();

        return view('frontend.inicio', compact('company'));
    }

    public function inmuebles(){
        return view('frontend.inmuebles');
    }

    public function conocenos(){
        return view('frontend.conocenos');
    }
}
