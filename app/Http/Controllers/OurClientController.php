<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OurClientController extends Controller
{
    function ourClient (){
        return view('pages.our-client');
    }
}
