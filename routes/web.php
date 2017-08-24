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

Auth::routes();

//Route::get('/', ['as' => 'root', 'uses' => '\App\Http\Controllers\DashboardController@index']);

Route::get('/', function() {
   return redirect('/dashboard');
});

//Route::get('login', ['as' => 'root', 'uses' => '\App\Http\Controllers\Auth\LoginController@login']);
Route::get('dashboard', ['as' => 'samples', 'uses' => '\App\Http\Controllers\DashboardController@index']);
Route::get('forms', ['as' => 'forms', 'uses' => '\App\Http\Controllers\FormsController@index']);
Route::get('tables', ['as' => 'tables', 'uses' => '\App\Http\Controllers\TablesController@index']);


Route::group(['prefix' => 'users'], function () {

    Route::get('/', ['as' => 'users', 'uses' => '\App\Http\Controllers\UsersController@index']);
    Route::get('create', ['as' => 'create.user', 'uses' => '\App\Http\Controllers\UsersController@createUser']);
    Route::get('logout', ['as' => 'logout.user', 'uses' => '\App\Http\Controllers\UsersController@logoutUser']);

});

Route::group(['prefix' => 'vendors'], function () {

    Route::get('/', ['as' => 'vendors', 'uses' => '\App\Http\Controllers\VendorsController@index']);
    Route::get('create', ['as' => 'create.vendor', 'uses' => '\App\Http\Controllers\VendorsController@createVendor']);
    Route::post('save', ['as' => 'save.vendor', 'uses' => '\App\Http\Controllers\VendorsController@saveVendor']);

});

Route::group(['prefix' => 'jobs'], function () {

    Route::get('/', ['as' => 'jobs', 'uses' => '\App\Http\Controllers\JobsController@index']);
    Route::get('api', ['as' => 'api', 'uses' => '\App\Http\Controllers\JobsController@api']);

});

Route::group(['prefix' => 'driver_logs'], function () {

    Route::get('/', ['as' => 'driver_logs', 'uses' => '\App\Http\Controllers\DriverLogsController@index']);
    Route::post('save', ['as' => 'save.driver_log', 'uses' => '\App\Http\Controllers\DriverLogsController@saveDriverLog']);
});




//Route::get('/home', 'HomeController@index')->name('home');
