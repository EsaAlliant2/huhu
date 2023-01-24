<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('Auth.Login');
    }

    public function postlogin(Request $request)
    {
        $request -> validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'Email Wajib Di Isi',
            'password.required' => 'Password Wajib Di Isi',
        ]);

        $infologin =[
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($infologin)){
            return redirect('/dashboard');
        }
        return redirect('/login');
    }

    public function register()
    {
        
    }

    public function simpanRegister(Request $request)
    {

        $user = User::create([
            
        ]);

        //membuat table siswa
        
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
