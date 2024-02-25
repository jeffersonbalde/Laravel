<?php

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
    return 'shit';
});

// Route::get('/', function() {
//     return 'shit';
// });

// Route::match(['get','post'], '/', function() {
//     return 'test';
// });

// Route::view('/', 'welcome');

if(Route::get("/") == 'shit'){
    Route::redirect('/test2', function() {
        return "ohh";
    });
} 

Route::redirect('/test', '/');