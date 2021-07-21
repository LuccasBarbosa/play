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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function ($id) {
    Route::get('/', 'AdminController@index')->name('admin');
    Route::get('dashboard', 'AdminController@dashboard')->name('admin.dashboard');
    Route::get('editar/{id}', 'AdminController@edit')->name('admin.editar');
    Route::post('update/{id}', 'AdminController@update')->name('admin.update');
    Route::get('register', 'AdminController@create')->name('admin.register');
    Route::post('register', 'AdminController@store')->name('admin.register.store');
    Route::get('login', 'Auth\Admin\LoginAdminController@login')->name('admin.auth.login');
    Route::post('login', 'Auth\Admin\LoginAdminController@loginAdmin')->name('admin.auth.loginAdmin');
    Route::post('logout', 'Auth\Admin\LoginAdminController@logout')->name('admin.auth.logout');

    Route::get('personagem/', 'PersonagemController@index')->name('personagem.index');
    Route::get('personagem/criar/', 'PersonagemController@create')->name('admin.personagem.criar');
    Route::post('personagem/criar/', 'PersonagemController@store')->name('admin.personagem.store');
    
    
    Route::post('personagem/{id}', 'PersonagemController@update')->name('personagem.update');
    Route::get('personagem/{id}', 'PersonagemController@destroy')->name('personagem.delete');
 
  });
