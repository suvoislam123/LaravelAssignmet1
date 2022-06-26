<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    //
    public function login()
    {
        return view('backend.admin_auth.login');
    }
    public function register()
    {
        return view('backend.admin_auth.register');
    }
}
