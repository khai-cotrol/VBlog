<?php

use App\Http\Controllers\AuthController;
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
Route::get('/', function () {
    return view('login');
});
Route::get('/login',[AuthController::class,'showFormLogin'])->name('formLogin');
Route::post('/login',[AuthController::class,'login'])->name('login');
Route::get('/register',[AuthController::class,'showFormRegister'])->name('FormRegister');
Route::post('/register',[AuthController::class,'register'])->name('Register');
Route::get('/',[AuthController::class,'logout'])->name('logout');


Route::middleware('auth')->group(function (){
    Route::get('/',[AuthController::class,'logout'])->name('logout');
    Route::get('/list',[PostController::class,'index'])->name('post.list');
    Route::get('/Post',[PostController::class,'create'])->name('post.creat');
    Route::post('/Post',[PostController::class,'store'])->name('post.store');
    Route::get('/update{id}',[PostController::class,'edit'])->name('post.edit');
    Route::post('/update{id}',[PostController::class,'update'])->name('post.update');
    Route::get('/delete{id}',[PostController::class,'destroy'])->name('post.delete');


    Route::post('/comment',[\App\Http\Controllers\CommentController::class,'comment'])->name('comment');

});

