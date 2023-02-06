<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;




class LoginController extends Controller
{
    public function registerForm(){
        return view('auth.register');
    }

    public function register(RegisterRequest $request)
    {
        $user = new User();
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = Hash::make($request->get('password'));

        $user->save();

        Auth::login($user);

        return redirect()->route('/');
    }

    public function loginForm()
    {
        return view('auth.login');
    }


    public function login(Request $request)
    {
        $credenciales = $request->only('name', 'password');

        if(Auth::guard('web')->attemps($credenciales))
        {
            //Autenticación exitosa
            $request->session()->regenerateToken();
            return redirect()->route('users.account');
        }else{
            $error = 'Error al acceder a la aplicación';
            return view('/', compact('error'));
        }
    }

    public function logout(Request $request){
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
