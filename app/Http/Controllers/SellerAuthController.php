<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Seller;

class SellerAuthController extends Controller
{
    public function index()
    {
        return view('auth.sellersignin', ['title'=>'Sign In as a Seller']);
    }

    public function signup()
    {
        return view('auth.sellersignup', ['title'=>'Sign Up as a Seller']);
    }
}
