<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('users.login');
    }
    
    
    public function login(Request $request){

        $this->validate( $request, [
            'email' => 'required|email',
            'password' => 'required',
        ], [], [] );

        $attributes = $request->only('email', 'password');

        if(auth()->attempt($attributes)){
            return redirect()->route( 'contacts.index' )->with('success', 'You are logged in!');
        }

        
        return back()
        ->withInput()
        ->withErrors(['email' => 'Your credentials could not be found.', 'password' => 'Password could not be matched.']);
    }


    public function logout(){
        auth()->logout();
        return redirect()->route( 'contacts.index' )->with('success', 'You have logged out!');

    }

}
