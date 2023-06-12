<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function loginaffich()
    {
        return view('login');
    }

    public function processLogin(Request $request)
    {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if($request->guard === 'admin')
        {
            if (Auth::guard('Administrateur')->attempt($credentials)) {

                $request->session()->regenerate();

                return redirect()->to('dash');
            }
        }

        if($request->guard === 'assistant')
        {
            if (Auth::guard('Assistante')->attempt($credentials)) {

                $request->session()->regenerate();

                return redirect()->to('dash');
            }
        }

        if($request->guard === 'dentist')
        {
            if (Auth::guard('dentiste')->attempt($credentials)) {

                $request->session()->regenerate();

                return redirect()->to('dash');
            }
        }



        return back()
            ->withErrors([
                'email' => 'Email ou le mot de passe fourni est incorrect',
            ])
            ->onlyInput('email');
    }

    public function logout()
    {
        Session::flush();

        Auth::guard('dentiste')->logout();
        return redirect()->to('/');
        //return to_route('admin/login');
    }
}
