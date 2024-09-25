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
        
        return 'Hell aboutus';
    }

    ##contactus page
    public function contactus(){
        
        return 'Hell contactus';
    }

    ##blogs page
    public function blogs(){
        return 'Hell blogs';
        
    }

    ##blogs page
    public function blog($slug){
        
        return 'Hell blog';
    }
}
