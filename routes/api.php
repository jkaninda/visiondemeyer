<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//Git auto pull
Route::post('deploy', function () {
    exec('git reset --hard');
    exec('git pull origin master', $output);
    \Log::info($output);
    return response()->json(['status' => 'success']);
});
//API version
Route::get('version', function () {
    return response()->json(['version' => '1.0.0']);
});
    
