<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{



// public function pass(Request $request){
//     // $form = $request->validate([
//     //     'email' => ['required', 'email',Rule::unique('users', 'email')],
//     //     'password' => ['required', 'min:8', 'max:100'],
//     // ]);
//     // User::select('email',  'password')->where('email','password')->get();

//     // return redirect('/Signup')->with('message', 'Registerd successfully!');

//     $formFields = $request->validate([
//         'email' => ['required', 'email'],
//         'password' => 'required'
//     ],[]);

//     if(auth()->attempt($formFields)) {
//         $request->session()->regenerate();

//         return redirect('/')->with('message', 'You are now logged in!');
//     }

//     return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
// }




 } 

