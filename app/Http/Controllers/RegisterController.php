<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {

        return view('register',[
         'tittle'=>'register',
        ]);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:225',
            'username' => 'required|max:225|',
            'email' => 'required|email|unique:users',
            'password' => 'required|max:225',
            'level' => 'required|string|max:225',

        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        $request->session()->flash('succes', 'Registration successful! please login');

        return redirect('/login');
        
    }
}

