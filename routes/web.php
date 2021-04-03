<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;


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

// Route::get('/hello', function () {
//     // return view('welcome');
//     return '<h1>Hellow World</h1>';
// });
// Route::get('/user/{id}/{name}', function ($id, $name) { 
//     return 'This is the user '.$name.' with an id of '.$id ;
// });


Route::get('/', 'App\Http\Controllers\PagesController@index');

Route::get('/about', 'App\Http\Controllers\PagesController@about');

Route::get('/services', 'App\Http\Controllers\PagesController@services');


Route::resource('posts', 'App\Http\Controllers\PostController');
Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);
