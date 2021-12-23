<?php

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
Route::middleware(['locale'])->group(function () {
    
Route::get('/', function () {
    return view('home');
});

Route::get('our-vision', function () {
    return view('our-vision')->name('our-vision');
});
Route::get('lang/{locale}', function ($locale) {
    //app language
    if (in_array($locale, config('app.locales'))) {
        session()->put('locale', $locale);
        return redirect()->back();
    }
    return redirect()->back();
});

});