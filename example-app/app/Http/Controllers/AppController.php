<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppController extends Controller
{
    ##index page
    public function index(){
        return view('index');
        
    }

    ##aboutus page
    public function aboutus(){
        
        return view('aboutus');
        
    }

    ##contactus page
    public function contactus(){
        
        return view('contactus');
        
    }

    ##blogs page
    public function blogs(){
        return 'Hell blogs';
        
    }

    ##blogs page
    public function blog($slug){
        
        return view('singleblog');
    }
}
