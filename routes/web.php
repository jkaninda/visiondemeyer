<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
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
Route::middleware(['locale'])->group(function () {
    Route::get('/', [HomeController::class,'index'])->name('home');
    Route::get('lang/{locale}', function ($locale) {
        //app language
        if (in_array($locale, config('app.locales'))) {
            session()->put('locale', $locale);
            return redirect()->back();
        }
        return redirect()->back();
    })->name('lang');

    //Pages
    Route::get('our-vision',[PageController::class,'ourVision'])->name('our-vision');
    Route::get('donation',[PageController::class,'donation'])->name('donation');
    Route::get('about-us',[PageController::class,'about'])->name('about-us');

    //Blog
    Route::prefix('blog')->group(function () {
        Route::get('/', [BlogController::class,'index'])->name('blog.index');
        Route::get('{slug}', [BlogController::class,'show'])->name('blog.show');

        
    });


    
    });

