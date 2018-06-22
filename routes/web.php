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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('ekskuls','EkskulController');
Route::resource('fasilitas','FasilitasController');
Route::resource('industris','IndustriController');
Route::resource('prestasis','PrestasiController');
Route::resource('program_studis','ProgramstudiController');
Route::resource('strukturs','StrukturController');
Route::resource('Jabatans','JabatanController');
Route::resource('gurus','GuruController');

Route::get('cek', function () {
    return view('layouts.admin');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin','middleware'=>['auth','role:admin']],function (){
});

Route::group(['prefix'=>'/','middleware'=>['auth','role:member|admin']],function (){
    Route::resource('/','Indexcontroller');
});
