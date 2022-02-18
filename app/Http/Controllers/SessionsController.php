<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{

    public function create(){
        return view('sessions.create');
    }

    public function store(){
        $attributes = request()->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required'
        ]);

        if(auth()->attempt($attributes)){
            session()->regenerate();
            return redirect('/')->with('success','Welcome Back!');
        }
        return back()
            ->withInput()
            ->withErrors(['email'=>'Your provided credentials cannot be verified']);
    }

    public function destroy(){
        auth()->logout();
        return redirect('/')->with('success','Successful Logout');
    }
}
