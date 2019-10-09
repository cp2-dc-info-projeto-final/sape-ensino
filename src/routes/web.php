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
        //PROFESSOR ROUTES

        //DIRETOR ROUTES
        Route::group(['middleware' => 'roles:Diretor'], function(){

                Route::post('regEscola', 'ControladorEscola@getInsert')->name('regEscola')->middleware('roles:Diretor');

        });
       

        //PROFESSOR & ALUNO ROUTES
        Route::group(['middleware' => 'roles:Professor,Aluno'], function(){

                Route::post('entrarEscola', 'ControladorEscola@entrarEscola')->name('entrarEscola');

        });


        //ControladorIndex
        Route::get('/', 'ControladorIndex@index')->name('index')->middleware('guest');
        
        //ControladorEscola
        Route::get('mural/{eid}', 'ControladorEscola@showmural')->name('Smural');
        Route::get('escolas', 'ControladorEscola@showescolas')->name('Sescolas');


        //ControladorPerfil
        Route::get('perfil', 'ControladorPerfil@showperfil')->name('perfil');
        Route::patch('perfil', 'ControladorPerfil@update')->name('editar'); //EDITAR PERFIL
        
        //ControladorTurmas
        












        //Authentication
        Route::get('login', 'Auth\LoginController@showLoginForm')->name('Slogin');
        Route::post('login', 'Auth\LoginController@login')->name('login');
        Route::get('logout', 'Auth\LoginController@logout')->name('logout');
        Route::get('register/{tipo}', 'Auth\RegisterController@showRegistrationForm')->name('Sregister');
        Route::post('register', 'Auth\RegisterController@register')->name('register');

        // !!!!--------------------      RESET PASSWORD        -----------------------!!!!// 
        Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
        Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
        Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
        Route::post('password/reset', 'Auth\ResetPasswordController@reset');


        //Others


