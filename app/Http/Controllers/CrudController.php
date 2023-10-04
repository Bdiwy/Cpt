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

//    specific select table with elecount and query builder

//  $gettingData= User::select('id','name','email','password')->find($Userid);//   elecount specific select code

$gettingData=DB::table('users')->where('id',$Userid)->first();   //                 QueryBuilder specific select code
    return view('edit',['data'=>$gettingData]);

}

public function update (Request $request )
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

//    update table with elecount and query builder

// $find= User::find($userId);//   elecount update code
//$find -> update($request->all());

DB::table('users')->where('id',$userId)->update($form);   //     QueryBuilder update code
return redirect("/edit/$userId")->with('message','success update');	

}



public function delete(Request $request){
    $userId= $request->id;


//    specific delete table with elecount and query builder

/*    //   elecount delete code
$find= User::find($userId);
    if($find)
    {$find -> delete();
        return redirect('/test');
    }else{
    return redirect('/test');

*/  

    DB::table("users")->where('id',$userId)->delete();//                 QueryBuilder Delete code     
    // DB::table("users")->truncate();//                 QueryBuilder delete all and resset the id's table to 0      
    return redirect('/test');
    
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

   

    $form = $request->validate([
        // 'photo' =>'required',
        'name' => ['required','min:3', 'max:100',Rule::unique('users', 'name')],
        'email' => ['required', 'email',Rule::unique('users', 'email')],
        'password' => ['required', 'min:8', 'max:100'],
        // 'photo' => ['nullable','image','mimes:jpeg,jpg,png,gif'],
    ]);

    //    insert into database with elecount and query builder

    User::create([
    'name' => $request->name,
    'email' => $request->email,
    'password' =>$request->password,
    'photo' =>  $this->save_photo($request->photo,'images/users') , ]);   //                           elecount insert code
    // DB::table('users')->insert([
    //     'photo' => $filename ,  
    // ]);  //                 QueryBuilder insert code

    return redirect('/Signup')->with('message', 'Registerd successfully!');

} 


protected function save_photo($photo,$path) {

    $file = $photo;
    $file_ex =$file->getClientOriginalExtension();
    $filename = time().rand(1,99).'.'.$file_ex;
    $file->move(public_path($path),$filename);
    return $filename;
}
}
