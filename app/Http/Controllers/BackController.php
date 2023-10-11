<?php

namespace App\Http\Controllers;
use App\Models\chat;

use App\Events\VedioViewer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\CrudController;
use App\Models\UserR;

class BackController extends Controller
{
    public function index(){        
        return view('pages.index');   

    }



    public function Services(){

        return response(view('pages.servicesPage'));

    }

    public function sub(){

        return response(view('pages.sub'));

    }

    public function login(){

        return response(view('pages.login'));

    }


    public function Signup(){

        return response(view('pages.Signup'));

    }

    public function vedio(){
        $num=chat::first(); 
        event(new VedioViewer($num));   
        return response(view('youtube',['num'=>$num]));

    }
public function crud (){
    $data=chat::get(); 
    return response(view('crud',['data'=>$data]));
}

public function log(){


    $data=UserR::onlyTrashed()->get(); 
    return response(view('log',compact('data')));

}


public function registeredata(){
    return view('reg');
}
}
