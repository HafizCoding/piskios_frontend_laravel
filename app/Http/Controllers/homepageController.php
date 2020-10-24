<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homepageController extends Controller
{
    public function tampilhome(){
        return view('tampilan.home');
    }
}
