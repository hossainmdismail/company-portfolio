<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SociallinkController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\WebinfoController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactCotroller;
use App\Http\Controllers\FronProjectController;
use App\Http\Controllers\FrontBlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OurServiceController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TalkController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


//UI Routes
Route::middleware(['check_users_exist'])->group(function () {
    Auth::routes(['register' => true]); // Enable registration
});

//Site map
Route::get('/generate-sitemap', [SitemapController::class, 'index'])->name('sitemap');


//========= BackEnd Controllers =========//

Route::group(['middleware' => 'auth'], function () {

    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::resources([
        'user'          => UserController::class,
        'category'      => CategoryController::class,
        'blog'          => BlogController::class,
        'team'          => TeamController::class,
        'service'       => ServiceController::class,
        'sociallink'    => SociallinkController::class,
        'webinfo'       => WebinfoController::class,
        'product'       => ProductController::class,
        'project'       => ProjectController::class,
        'testimonial'   => TestimonialController::class,
    ]);
});



//============== Front End ==============//

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'link'])->name('about');
Route::get('/portfolio/{slugs}', [FronProjectController::class, 'link'])->name('portfolio');
Route::get('/grid/portfolio', [FronProjectController::class, 'portfolio'])->name('portfolio.grid');
Route::get('/front/blog/{slugs}', [FrontBlogController::class, 'link'])->name('frontBlog');
Route::get('/list/blog', [FrontBlogController::class, 'list'])->name('blog.list');
Route::get('/blog/list/{$id}', [FrontBlogController::class, 'category'])->name('blog.category');
// Route::get('/our-service/{slugs}', [OurServiceController::class, 'index'])->name('our.service');
Route::get('/contact-us', [ContactCotroller::class, 'index'])->name('contact');

Route::get('/talk', [TalkController::class, 'index'])->name('talk');
Route::post('/talk/store', [TalkController::class, 'store'])->name('talk.store');
Route::get('/privacy-policy', [PrivacyController::class, 'index'])->name('privacy');
