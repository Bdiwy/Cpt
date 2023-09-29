<?php

namespace App\Http\Controllers;

use App\Models\chat;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CrudController extends Controller
{


public function get(){

    return chat::select('name')->get();
} 

public function store(Request $request){
    $form = $request->validate([
        'name' => ['required','min:3', 'max:100',Rule::unique('users', 'name')],
        'email' => ['required', 'email',Rule::unique('users', 'email')],
        'password' => ['required', 'min:8', 'max:100'],
    ]);
    User::create($form);

    return redirect('/Signup')->with('message', 'Registerd successfully!');

} 


public function pass(Request $request){
    $form = $request->validate([
        'name' => ['required','min:3', 'max:100',Rule::unique('users', 'name')],
        'email' => ['required', 'email',Rule::unique('users', 'email')],
        'password' => ['required', 'min:8', 'max:100'],
    ]);
    User::;

    return redirect('/Signup')->with('message', 'Registerd successfully!');

} 

}
