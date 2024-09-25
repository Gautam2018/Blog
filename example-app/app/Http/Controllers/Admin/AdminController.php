<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashbord(){
        return view('admin.dashbord');
    }


    public function catogries(){
        return view('admin.catgories.showCategories');
    }

    public function addCatogries(){
        return view('admin.catgories.add');
    }


    public function blogs(){
        return view('admin.blogs.showBlogs');
    }

    public function addBlogs(){
        return view('admin.blogs.addBlogs');
    }
}
