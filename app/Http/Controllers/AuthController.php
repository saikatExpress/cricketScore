<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct(){

    }


    public function register() : mixed {
        return view('frontend/register');
    }

    public function login() : mixed {
        return view('frontend/login');
    }

    public function registationCreate(Request $request) : mixed {
        return 'I am Saikat';
    }

    public function logout() {
        Auth::logout();
        return redirect('/');
    }

}