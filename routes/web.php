<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


//============== Front End ==============//

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');





//========= BackEnd Controllers =========//

// Route::group(['middleware' => 'auth'], function () {
//     Route::get('/dashboard', [HomeController::class, 'index'])->name('index');

    //Code Will Be Execute

// });

Route::resources([
    'category'      => CategoryController::class,
    'blog'          => BlogController::class,

]);