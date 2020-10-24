<?php

namespace App\Http\Controllers\login_register_conroller;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function login()
    {
        return view('tampilan.login');
    }
}
