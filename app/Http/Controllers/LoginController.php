<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


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

        return redirect()->route('inicio');
    }

    public function loginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credenciales = $request->only('name', 'password');

        if(Auth::attempt($credenciales))
        {
            //Autenticación exitosa
            $request->session()->regenerateToken();
            return redirect()->route('inicio');
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
