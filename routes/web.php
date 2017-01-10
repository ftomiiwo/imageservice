<?php

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

use Illuminate\Support\Facades\Storage;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::any('/CreateImage', 'ImageController@create');
Route::post('/StoreImage', 'ImageController@store');
Route::get('/showLists', 'ImageController@show' );

Route::get('test', function() {
	$s3 = Storage::disk('s3');

	$s3->put('file.txt', 'This is just a file', 'public');
});
