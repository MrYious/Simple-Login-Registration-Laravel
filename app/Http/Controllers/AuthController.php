<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function index()
    {
        return view('login');
    }

    function register()
    {
        return view('register');
    }

    function validate_register(Request $request)
    {
        $request->validate([
            'name'              =>   'required',
            'email'             =>   'required|email|unique:users',
            'password'          =>   'required|min:6',
            'confirmPassword'   =>   'required|min:6'
        ]);

        $data = $request->all();

        if($data['password'] == $data['confirmPassword']){
            User::create([
                'name'  =>  $data['name'],
                'email' =>  $data['email'],
                'password' => Hash::make($data['password'])
            ]);

            return redirect('')->with('message', 'Registration Successful');
        }

        return redirect('new')->with('message', 'Passwords does not match');
    }

    function validate_login(Request $request)
    {
        $request->validate([
            'email'         =>  'required',
            'password'      =>  'required'
        ]);

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials))
        {
            return redirect('dashboard');
        }

        return redirect('')->with('message', 'Incorrect email or password');
    }

    function dashboard()
    {
        if(Auth::check())
        {
            return view('dashboard');
        }

        return redirect('')->with('message', 'Unauthorized Access. Login first');
    }

    function logout()
    {
        Auth::logout();
        return redirect('');
    }
}
