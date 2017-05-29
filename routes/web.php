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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('about', function() {
// 	return 'no error';
// });

Route::get('about',function () {
	$vincent = ['this','is','vincent'];
	// return view('about', ['vincent'=>$vincent]);
	// return view ('about')->with(['vincent'=>$vincent]);
	// return view ('about')->withvincent($vincent);
	return view('about', compact('vincent'));
});

Route::get('contact', function () {
	return view('contact');
});

Route::resource('songs', 'SongsController');
