<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth;

class LoginController extends Controller
{

    public function loginform()
    {
        return view('auth.login');
    }
  
    public function logout()
    {
        Auth::logout();
        return redirect('/');

    }

    public function login()
    {

        $credentials = $this->validate(request(), [

            'name' => 'required|string',
            'password' => 'required|string',

        ]);

        if (Auth::Attempt($credentials)) {

            return redirect()->route('home');

        } else {

            return back()
                ->withErrors(['name' => trans('auth.failed')])
                ->withInput(request(['name']));

        }

    }

}
