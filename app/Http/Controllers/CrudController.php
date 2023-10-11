<?php

namespace App\Http\Controllers;

use App\Models\chat;
use App\Models\User;
use App\Models\UserR;
use App\Events\VedioViewer;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Requests\FormValReq;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CrudController extends Controller
{


public function get(){

//    Select all table with elecount and query builder

//    $data= User::get();//                           elecount Select all code

//    $data=UserR::Test()->get();  //                 QueryBuilder with scope condition to select specific columns
    $data=UserR::get(); //                 QueryBuilder Select all code
    return view('test',['data'=>$data]);
} 

public function edit(Request $request){
    $Userid= $request->id ;

//    specific select table with elecount and query builder

//  $gettingData= User::select('id','name','email','password')->find($Userid);//   elecount specific select code

$gettingData=DB::table('users')->where('id',$Userid)->first();   //                 QueryBuilder specific select code
    return view('edit',['data'=>$gettingData]);

}

public function update (FormValReq $request )
{

$userId= $request->id;
if(!$userId){
    return redirect()->back();	
}

//    update table with elecount and query builder

// $find= User::find($userId);//   elecount update code
//$find -> update($request->all());

DB::table('users')->where('id',$userId)->update($request->all());   //     QueryBuilder update code
return redirect("/edit/$userId")->with('message','success update');	

}



public function delete(Request $request){
    $userId= $request->id;


//    specific delete table with elecount and query builder

    //   elecount delete code
$find= UserR::find($userId);
if($find)
    {$find -> delete();
        return redirect('/test');
    }else{
    return redirect('/test');

    }

    //DB::table("user_r_s")->where('id',$userId)->delete();//                 QueryBuilder Delete code     
    // DB::table("users")->truncate();//                 QueryBuilder delete all and resset the id's table to 0      
    
    }
    public function destroyy(Request $request){
        $userId= $request->id;
        DB::table("user_r_s")->where('id',$userId)->delete();//                 QueryBuilder Delete code     
        // DB::table("users")->truncate();//                 QueryBuilder delete all and resset the id's table to 0      
        return redirect()->back();    
    }
    



public function restor($id){
    UserR::onlyTrashed()->where("id",$id)->restore();
    return redirect()->back();
}



public function store(FormValReq $request){
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

public function save(FormValReq $request){

    UserR::create([
    'name' => $request->name,
    'email' => $request->email,
    'password' =>$request->password,
    'photo' =>  $this->save_photo($request->photo,'images/users') , ]);  
    return redirect('/reg')->with('message','Done!');

} 


protected function save_photo($photo,$path) {

    $file = $photo;
    $file_ex =$file->getClientOriginalExtension();
    $filename = time().rand(1,99).'.'.$file_ex;
    $file->move(public_path($path),$filename);
    return $filename;
}


public function createdata(FormValReq $request) {

    User::create([
    'name' => $request->name,
    'email' => $request->email,
    'password' =>$request->password,
    // 'photo' =>  $this->save_photo($request->photo,'images/users') ,
]);

}
}