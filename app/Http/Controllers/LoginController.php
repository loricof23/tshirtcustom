<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class LoginController extends Controller
{

    public function login(){
        return view('login');
    }

    public function register(){
        return view('register');
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }

    public function process(Request $request){
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard');
        }else{
            return redirect('/login')->withErrors(['error', 'Password atau Email Salah!']);;
        }
    }

    public function registerProcess(Request $request){
        if ($request->isMethod('post')) {
            $validatedData = $request->validate([
                'name' => 'required',
                'email' => 'required',
                'password' => 'required',
                'sex' => 'required',
                'date' => 'required',
                'phone' => 'required',
                'address' => 'required',
            ]);

            $user = new User;

            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->gender = $request->sex;
            $user->birthdate = $request->date;
            $user->phone = $request->phone;
            $user->address = $request->address;

            $user->save();

            return redirect('/login')->with('success', 'Register Success!');
        }else{
            return redirect('/register');
        }
    }
}
