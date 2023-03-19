<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    function aboutUs (){
return view('pages.about-us');
    }
}
