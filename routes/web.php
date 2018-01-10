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



Route::group(['prefix' => 'panitamio'], function () {
    Auth::routes();
});

Route::get('servicios-api', 'HomeController@api');
Route::get('/home', 'HomeController@index');


Route::resource('categorias', 'CategoryController');

Route::get('categorias', 'CategoryController@index')->name('categories.index');
Route::post('categorias', 'CategoryController@store')->name('categories.store');

Route::get('categorias/crear', 'CategoryController@create')->name('categories.create');
Route::get('categorias/mostrar/{id}', 'CategoryController@show')->name('categories.show');
Route::get('categorias/editar/{id}', 'CategoryController@edit')->name('categories.edit');
Route::put('categorias/editar/{id}', 'CategoryController@update')->name('categories.update');
Route::delete('categorias/eliminar/{id}', 'CategoryController@destroy')->name('categories.destroy');


Route::get('404',['as'=>'404','uses'=>'ErrorHandlerController@errorCode404']);
Route::get('405',['as'=>'405','uses'=>'ErrorHandlerController@errorCode405']);




// API ROUTES


Route::group(['prefix' => 'api/v1'], function () {
    Route::get('cantv', [
        'as' => 'profile', 'uses' => 'Controller@debtCantv'
    ]);
});
