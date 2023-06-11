<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function loginaffich()
    {
        return view('login');
    }

    public function processLogin(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'EmailDent' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::guard('dentiste')->attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboardpage');
        }

        return back()
            ->withErrors([
                'EmailDent' => 'Email ou le mot de passe fourni est incorrect',
            ])
            ->onlyInput('EmailDent');
    }

    public function logout()
    {
        Session::flush();

        Auth::guard('dentiste')->logout();

        return to_route('login.affich');
    }
}
