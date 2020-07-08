<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    
    public function dashboard()
    {

        if (Auth::check() === true) {
            return view('Site.home');
        }

            return view('Login.login');

    }
    

    public function login(Request $request)
    {
        if(!filter_var($request->email, FILTER_VALIDATE_EMAIL)){
            return redirect()->back()->withInput()->withErrors(['E-mail Informado não é valido ']);
        }
    
     $credentials = $request->only('email','password');

      if (Auth::attempt($credentials)) {
          return view('Site.home');
      }  

      return redirect()->back()->withInput()->withErrors(['Os Dados não conferem']);


    }


    public function logout()
    {

        Auth::logout();

        return redirect()->route('login');



    }
}
