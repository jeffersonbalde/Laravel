<?php

use Illuminate\Http\Request;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function() {
//     return 'shit';
// });

// Route::match(['get','post'], '/', function() {
//     return 'test';
// });

// Route::view('/', 'welcome');

Route::get('/test', function (Request $request) {
    dd($request);
});

Route::get('test2', function () {
    return response('<h1>test2</h1>', 200)
        ->header('Content-Type', 'text/html')
        ->header('jeff', 'jefferson');
});

Route::get('test3/{id}', function ($id) {
    return response($id . ' ' . ' php', 200);
});

Route::get('/test4', function () {
    $path = public_path().'/sample.txt';
    $name = "test.txt";
    $headers = array(
        'Content-type : application/text-plain'
    );

    return response()->download($path, $name, $headers);
});

Route::get('/', function () {
    return view('test', ['amira' => "gwapa"]);
});