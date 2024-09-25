<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashbord(){
        return view('layout.admin-app');
    }


    public function catogries(){
        return "catogries";
    }
}
