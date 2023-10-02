<?php

namespace App\Http\Controllers;

use App\Models\chat;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CrudController extends Controller
{


public function get(){

//    Select all table with elecount and query builder

//    $data= User::get();//                           elecount Select all code

    $data=DB::table('users')->get();  //                 QueryBuilder Select all code

    return view('test',['data'=>$data]);
} 

public function edit(Request $request){
    $Userid= $request->id ;

//    Select all table with elecount and query builder

//  $gettingData= User::select('id','name','email','password')->find($Userid);//   elecount Select all code

$gettingData=DB::table('users')->where('id',$Userid)->first();   //                 QueryBuilder Select all code
    return view('edit',['data'=>$gettingData]);

}

public function update (Request $request)
{
    $form = $request->validate([
        'name' => ['required','min:3', 'max:100',Rule::unique('users', 'name')],
        'email' => ['required', 'email',Rule::unique('users', 'email')],
        'password' => ['required', 'min:8', 'max:100'],
    ]);
$userId= $request->id;
if(!$userId){
    return redirect()->back();	
}
$find= User::find($userId);
$find -> update($request->all());
return redirect("/edit/$userId")->with('message','success update');	

}



public function delete(Request $request){
    $userId= $request->id;
    $find= User::find($userId);
    if($find)
    {$find -> delete();
        return redirect('/test');
    }else{
    return redirect('/test');
}
}


// protected   function getMessages(){
//     return [
//         'name.required'=> trans("messages.username"),
//         'name.min:3'=> trans("messages.usernameMin"),
//         'name.max:100'=> trans("messages.usernameMin"),
//         'name.unique'=> trans("messages.usernameUnique"),
//         'email.required'=> trans("messages.email"),
//         'email.email'=> trans("messages.email"),
//         'password.required'=> trans("messages.password"),
//         'password.min:8'=> trans("messages.passwordMINmax"),
//         'password.max:100'=> trans("messages.passwordMINmax"),
// ];
// }


// // $v = validator::make($request->all(),$rul, $messages);
// protected function getRuls(){
//     return[
//         'name' => ['required','min:3', 'max:100',Rule::unique('users', 'name')],
//         'email' => ['required', 'email',Rule::unique('users', 'email')],
//         'password' => ['required', 'min:8', 'max:100'],
//     ];
// }

public function store(Request $request){


    
    $file = $request->file('photo');
    $file_ex ='png';
    $filename = time().rand(1,99).'.'.$file_ex;
    $path ='images/users';

    // $file->move(public_path($path),$filename);

    $form = $request->validate([
        // 'photo' =>'required',
        'name' => ['required','min:3', 'max:100',Rule::unique('users', 'name')],
        'email' => ['required', 'email',Rule::unique('users', 'email')],
        'password' => ['required', 'min:8', 'max:100'],
    ]);

    //    insert into database with elecount and query builder

    // User::create($form);   //                           elecount insert code
    DB::table('users')->insert($form);  //                 QueryBuilder insert code

    return redirect('/Signup')->with('message', 'Registerd successfully!');

} 



}
