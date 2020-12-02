<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use \App\Http\Requests\AuthRequest;

class LoginController extends Controller
{
    public function authenticate(AuthRequest $request)
    {
        $credentials = $request->validated();

        if(Auth::attempt($credentials)) {
            return redirect()->intended('/');
        } else {
            dd('não deu');
        }
    }

    public function logout() {
        Auth::logout();

        return redirect()->route('home');
    }
}
