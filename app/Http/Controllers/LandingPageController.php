<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    function landingPage (){
        return view('pages.landing-page');
    }
}
