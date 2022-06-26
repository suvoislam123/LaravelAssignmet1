<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    //
    public function home()
    {
        return view('frontend.homepage');
    }
    public function product()
    {
        return view('frontend.productpage');
    }
    public function computer()
    {
        return view('frontend.computer');
    }
    public function checkout()
    {
        return view('frontend.checkout');
    }
}
