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
        $company = Company::get();

        return view('frontend.inmuebles', compact('company'));
    }

    public function conocenos(){
        $company = Company::get();

        return view('frontend.conocenos', compact('company'));
    }

    public function posts(){
        $company = Company::get();

        return view('frontend.posts', compact('company'));
    }
}
