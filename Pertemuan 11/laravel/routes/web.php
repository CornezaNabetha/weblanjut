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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/hello',function(){
// 	return 'Hello World';
// });

Route::get('/manage', 'home1Controller@manage')->name('manage');

Route::get('/article/add','home1Controller@add');

Route::post('/article/create','home1Controller@create');

Route::get('/article/edit/{id}','home1Controller@edit');

Route::post('/article/update/{id}','home1Controller@update');

Route::get('/article/delete/{id}','home1Controller@delete');

Route::get('/article/cetak_pdf', 'home1Controller@cetak_pdf');






Route::get('/','HomeController@index')->name('masakan');

Route::get('/welcome','welcomeController@welcome');

Route:: get('/about','aboutController@about');

Route:: get('/article/{page}','articlesController@article');

Route:: get('/master','masterController@master');

//Route:: get('/b','homeIndexController@index');

Route:: get('/index','home1Controller@index');

//Route:: get('masakan','home1Controller@index')->name('masakan');

Route:: get('resep','home1Controller@resep');

Route:: get('restoran','home1Controller@restoran');

Route:: get('wisata','home1Controller@wisata');



Route:: get('kontak','home1Controller@kontak');


Auth::routes();
