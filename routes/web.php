<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\MileStoneCountroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\MultipleImagesController;
use App\Http\Controllers\NewsArticlesController;
use App\Http\Controllers\StaticPageController;
use App\Http\Controllers\SubProjectController;

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

Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('getinsta',[PageController::class, 'getInsta'])->name('getInstaPosts');

Route::post('/getCareer',[PageController::class, 'getCareer'])->name('getCareer');

Route::get( 'myfile/years/{filename}', [PageController::class, 'file'])->where('filename', '.*')->middleware('admin.user');

Route::get('/trial',function(){
    return view('welcome');
});

Route::get('/oxygenfornepal',function(){
    return redirect('/projects/oxygen-for-nepal');
});

Route::get('/generateImages', [MultipleImagesController::class, 'generateImages']);

Route::get('/generateSubProject', [MultipleImagesController::class, 'generateSubProject']);

Route::get('/our-history',[MileStoneCountroller::class,'show'])->name('our-history');

Route::get('/partners',[PageController::class,'partners'])->name('partners');

Route::get('/team', [PageController::class, 'team'])->name('team');

Route::get('/about-us', [PageController::class, 'aboutus'])->name('about-us');

Route::get('/stories', [PageController::class, 'stories'])->name('stories');

Route::get('/downloads', [PageController::class,'downloads'])->name('downloads');


// For Blog
Route::get('/blog', [PageController::class, 'showBlogs'])->name('showBlogs');
Route::get('/blog/{slug}', [PageController::class, 'showBlogDetails'])->name('showBlogDetails');

// For Media
Route::get('/media',[PageController::class,'showMedia'])->name('showMedia');
Route::get('/media/{slug}', [PageController::class, 'showMediaDetails'])->name('showMediaDetails');

// for Projects
Route::get( '/projects/{slug}', [ProjectController::class, 'showProject'])->name('showProject');
Route::get('/projects/{slug}',[ProjectController::class, 'showProject'])->name('showProject');

// for new Article
Route::get('/news-articles',[PageController::class,'showArticles'])->name('showArticles');
Route::get('/news-article/{slug}', [PageController::class, 'showArticleDetails'])->name('showArticleDetails');


// static Page Controller

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    Route::get('/homepage',[HomePageController::class,'index'])->name('homepage.index')->middleware('admin.user');
    Route::post('/homepage', [HomePageController::class, 'store']);
    Route::get('/fetchData', [HomePageController::class, 'fetchData']);
    Route::get('/aboutus', [AboutUsController::class, 'index'])->name('aboutus.index')->middleware('admin.user');
    Route::post('/aboutus', [AboutUsController::class, 'store']);
    Route::get('/aboutus/fetchData', [AboutUsController::class, 'fetchData']);
    Route::post('/milestone',[MileStoneCountroller::class, 'store']);
    Route::get('/milestone', [MileStoneCountroller::class, 'fetchData']);
    Route::get('/livewire', [HomePageController::class,'trial'])->middleware('admin.user');

    Route::post('/subprojects', [SubProjectController::class, 'store']);

    // newsarticle admin section
        // fetching categories
    Route::get('/fetchPrintCoverage',[NewsArticlesController::class,'fetchPrintCoverage']);
    Route::get('/fetchOnlineCoverage', [NewsArticlesController::class, 'fetchOnlineCoverage']);
        // storing/updating datas
    Route::post('/newsArticles',[NewsArticlesController::class,'newsArticles']);
    Route::get('/fetchNewsArticles',[NewsArticlesController::class,'fetchNewsArticles']);
});


Route::get('/{slug}', [StaticPageController::class, 'index']);
