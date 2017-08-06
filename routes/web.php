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

/*Route::get('/', function () {
    return view('welcome');
});*/


//Route::get('ezlogin', ['as' => 'ezlogin', 'uses' => '\App\Http\Controllers\EZLoginController@index']);

Route::get('/', ['as' => 'root', 'uses' => '\App\Http\Controllers\Auth\LoginController@login']);
Route::get('dashboard', ['as' => 'samples', 'uses' => '\App\Http\Controllers\DashboardController@index']);
Route::get('forms', ['as' => 'forms', 'uses' => '\App\Http\Controllers\FormsController@index']);
Route::get('tables', ['as' => 'tables', 'uses' => '\App\Http\Controllers\TablesController@index']);
Route::get('users', ['as' => 'users', 'uses' => '\App\Http\Controllers\UsersController@index']);

Route::group(['prefix' => 'vendors'], function () {

    Route::get('/', ['as' => 'vendors', 'uses' => '\App\Http\Controllers\VendorsController@index']);
    Route::get('create', ['as' => 'create.vendor', 'uses' => '\App\Http\Controllers\VendorsController@createVendor']);
    Route::post('save', ['as' => 'save.vendor', 'uses' => '\App\Http\Controllers\VendorsController@saveVendor']);

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
