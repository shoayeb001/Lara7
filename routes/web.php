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
//Route::get('peoplentech',function(){
//    return view('peoplentechView');
//});
//Route::get('peoplentech/about',function(){
//    return view('about');
//});
//Route::get('peoplentech','peoplentechController@index');
//Route::get('about','peoplentechController@about');
//Route::get('peoplentech/about/form','peoplentechController@form')->name('about.form');
//Route::post('peoplentech/about/preview','peoplentechController@preview')->name('about.preview');
//GET-data nia asa, showing data, place data,data face kore nia asa from server
//POST-to send data in server
//PUT-data update in server
//DELETE-delete data from server
Route::get('author/index','AuthorController@index')->name('author.index');
Route::get('author/create','AuthorController@create')->name('author.create');
Route::post('author/store','AuthorController@store')->name('author.store');
Route::get('author/edit/{id}','AuthorController@edit')->name('author.edit');
Route::put('author/update/{id}','AuthorController@update')->name('author.update');
Route::delete('author/delete/{id}','AuthorController@destroy')->name('author.destroy');
//Route::get('author/edit/{id}','AuthorController@edit')->name('author.edit');
//Route::get('author/update/{id}','AuthorController@update')->name('author.update');
//Route::get('');
