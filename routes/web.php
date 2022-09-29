<?php

use App\Http\Controllers\NavController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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
// Route::get('/nav',function(){
//       return view('layouts.nav');
// });
Route::get('/index',[PostController::class,'index'])->name('post.index');
Route::post('/create',[PostController::class,'create'])->name('post.create');
Route::get('/show',[PostController::class,'show'])->name('post.show');
Route::get('/edit/{id}',[PostController::class,'edit'])->name('post.edit');
Route::post('/update/{id}',[PostController::class,'update'])->name('post.update');
Route::get('/delete/{id}',[PostController::class,'delete'])->name('post.delete');

