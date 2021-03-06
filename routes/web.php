
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

Route::group(['middleware' => 'auth'], function () {

	Route::resource('user', 'UserController', ['except' => ['show']]);

	Route::get('updatepay/{id}', 'CostsController@updatepay');
	Route::get('updatetopay/{id}', 'CostsController@updatetopay');
	Route::post('deletecost/{id}', 'CostsController@deletepay');


	Route::put('costs', ['as' => 'costs.update', 'uses' => 'CostsController@update']);
	Route::get('costs', ['as' => 'costs.show', 'uses' => 'CostsController@show']);
	Route::post('costs', ['as' => 'costs.insert','uses' => 'CostsController@insert']);

	Route::post('addcosts',['as' => 'costs.insert','uses' => 'CostsController@store']);
	Route::get('addcosts',['as' => 'costs.create','uses' => 'CostsController@create']);

	Route::resource('user', 'UserController', ['except' => ['show']]);

	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);

	Route::get('{page}', ['as' => 'page.index', 'uses' => 'PageController@index']);

});

