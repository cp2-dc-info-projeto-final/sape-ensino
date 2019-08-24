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

/*Rotas especificas de cargo*/
Route::group(['middleware' => 'App\Http\Middleware\AlunoMiddleware'], function(){

});

Route::group(['middleware' => 'App\Http\Middleware\ProfessorMiddleware'], function(){

});

Route::group(['middleware' => 'App\Http\Middleware\DiretorMiddleware'], function(){
    
});


//Paginas
Route::get('/', 'ControladorPage@index')->name('index');


//Authentication
Route::get('login', 'Auth\LoginController@showLoginForm')->name('Slogin');
Route::post('login', 'Auth\LoginController@login')->name('login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('register/{tipo}', 'Auth\RegisterController@showRegistrationForm')->name('Sregister');
Route::post('register', 'Auth\RegisterController@register')->name('register');

// !!!!--------------------      RESET PASSWORD        -----------------------!!!!// 
//Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
//Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
//Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
//Route::post('password/reset', 'Auth\ResetPasswordController@reset');


//Others


