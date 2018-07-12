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
//     return view('home.welcome');
// });
Route::post('registerUser','user\RegisterController@register');
Route::post('login', 'user\LoginController@loginall');

Route::get('login',[
        'uses' => 'user\LoginController@login',
        'as' => 'project.login'
    ]);
Route::get('/',[
		'uses' => 'user\LoginController@homepage',
		'as' => 'project.homepage'
	]);
Route::get('logout',[
		'uses' => 'user\LoginController@logout',
		'as' => 'project.logout'
	]);
Route::get('/register', function () {
    return view('user.register');
});


Route::resource('welcome','WelcomeController');
