<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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




}
