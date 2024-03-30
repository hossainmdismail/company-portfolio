<?php

use App\Http\Controllers\Api\BlogController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\ServiceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('/services',[ServiceController::class, 'services']);
Route::get('/services/{slugs}',[ServiceController::class, 'services_view']);
Route::get('/categories',[CategoryController::class, 'categories']);
Route::get('/categories/{id}',[CategoryController::class, 'categories_view']);
Route::get('/blogs',[BlogController::class, 'blogs']);
Route::get('/blogs/{slugs}',[BlogController::class, 'blogs_view']);
Route::get('/products',[ProductController::class, 'products']);
Route::get('/projects',[ProjectController::class, 'projects']);
Route::get('/projects/{slugs}',[ProjectController::class, 'projects_view']);

