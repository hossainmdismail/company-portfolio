<?php

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SociallinkController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\WebinfoController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProjectController;
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
    'team'          => TeamController::class,
    'service'       => ServiceController::class,
    'sociallink'    => SociallinkController::class,
    'webinfo'       => WebinfoController::class,
    'product'       => ProductController::class,
    'project'       => ProjectController::class,
]);
