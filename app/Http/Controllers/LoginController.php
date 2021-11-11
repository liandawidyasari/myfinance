<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function index()
    {
        return View('login.index', [
            'title' =>'Login',
            'active'=>'login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dasboard');
        }

        return back()->with('loginError', 'Upss sorry u wrong, please remember me!');
    }
    public function logout()
    {
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }
}
