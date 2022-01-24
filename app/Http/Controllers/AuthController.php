<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function signin()
    {
        return view('auth.index', ['title'=>'Sign In']);
    }

    public function storesignin(Request $r)
    {
        $credentials = $r->validate([
            'username' => ['required'],
            'password' => ['required']
        ]);
        if (Auth::attempt($credentials)) {
            $r->session()->regenerate();
            return redirect()->intended('home');
        }
        return back()->with('error', 'Sorry, your username or password was incorrect.');
    }

    public function signup()
    {
        return view('auth.signup', ['title'=>'Sign Up']);
    }

    public function storesignup(Request $r)
    {
        $validatedData = $r->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|unique:users',
            'email' => 'required|email|unique:users',
            'phone' => 'required|max:16|min:7',
            'password' => 'required|min:5|max:255'
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);
        return redirect('/signin')->with('success', 'Registration successful! Please sign in.');
    }

    public function signout(Request $r)
    {
        Auth::logout();
        $r->session()->invalidate();
        $r->session()->regenerateToken();
        return redirect('/');
    }
}
