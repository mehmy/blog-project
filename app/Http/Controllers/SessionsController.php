<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{

    public function create() {
        return view('sessions.create');
    }

    public function store() {

        //validate the request
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        //try to authenticate user based on the given
        //credentials

        if (auth()->attempt($attributes)) {
            //redirect with a success message
            return redirect('/')->with('success', 'Welcome back!');
        }
        
        //auth failed
        throw ValidationException::withMessages(['email' => 'The provided credentials could not be verified']);        
    }
 
    public function destroy() {

        auth()->logout();
        return redirect('/')->with('success', 'Goodbye!');
    }
}
