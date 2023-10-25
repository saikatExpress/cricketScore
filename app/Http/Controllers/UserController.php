<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    public function loginCreate(Request $request) {
        $uri = $request->path();
        $host = $request->httpHost();

        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials) && $uri == 'login/create'){
            return redirect()->route('admin.home');
        }

        return redirect()->route('custom.us')->withErrors(['email' => 'Invalid email or password']);
    }
}