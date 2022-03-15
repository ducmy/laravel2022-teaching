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


Route::get('/', function () {
    return view('welcome');
});


// Path Prefixes
Route::prefix('dashboard')->group(function() {
    Route::get('/', function() {
        return 'dashboard/';
    });

    Route::get('/users', function() {
        return '/dashboard/user';
    });

    Route::get('/message',function(){
        return '/dashboard/message';
    });


});
