<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{

    public function loginForm(){

        return view('login');
    }

    public function registerForm(){

        return view('register');
    }

    public function login(Request $request){
        
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required',],
        ]);
        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            
            $request->session()->regenerate();

            if(Auth::user()->roles === 1){

                return redirect()->route('admin.admin')->with('success', "Welcome, " . Auth::user()->name . " !");

            } else {

                return redirect()->route('account.home')->with('success', "Welcome, " . Auth::user()->name . " !");
        
            }
        } else {
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
                //'password' => 'The provided credentials do not match our records.',
            ]);
        
        }
    }

    public function register(Request $request){

        $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'confirmed', 'min:3'],
        ]);

        $user = User::create($request->all());
        Auth::login($user);

        return redirect()->route('home');
    }

    public function logout(){

        Auth::logout();

        return redirect()->route('home');
    }

}
