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
Route::get('/hello',function(){
	return 'Hello World';
});

Route::get('/','HomeController@index');

Route::get('/welcome','welcomeController@welcome');

Route:: get('/about','aboutController@about');

Route:: get('/article/{page}','articlesController@article');

Route:: get('/master','masterController@master');

//Route:: get('/b','homeIndexController@index');

Route:: get('/index','home1Controller@index');

Route:: get('masakan','home1Controller@masakan');

Route:: get('resep','home1Controller@resep');

Route:: get('restoran','home1Controller@restoran');

Route:: get('wisata','home1Controller@wisata');


Route:: get('kontak','home1Controller@kontak');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/*Route::get('/home', 'HomeController@index');*/