<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\Admin\AdminController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[AppController::class,'index'])->name('index');
Route::get('/about-us',[AppController::class,'aboutus'])->name('about-us');
Route::get('/contact-us',[AppController::class,'contactus'])->name('contact-us');


Route::get('/blogs',[AppController::class,'blogs'])->name('blogs');
Route::get('/blog/{slug}',[AppController::class,'blog'])->name('blog');

## Admin routes
Route::group(['prefix' => 'admin'], function (){
    Route::get('dashbord',[AdminController::class,'dashbord']);
    Route::get('catogries',[AdminController::class,'catogries']);
});

