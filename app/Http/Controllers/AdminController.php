<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function dashboard()
{
    return view('backend.dashboard');
}
    public function product()
{
    return view('backend.productlist');
}
    public function createproduct()
{
    return view('backend.createproduct');
}
}
