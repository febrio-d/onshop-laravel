<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellerAuthController extends Controller
{
    public function sellersignin()
    {
        return view('auth.sellersignin', ['title'=>'Sign In as a Seller']);
    }

    public function sellersignup()
    {
        return view('auth.sellersignup', ['title'=>'Sign Up as a Seller']);
    }
}
