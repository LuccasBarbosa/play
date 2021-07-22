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

Route::prefix('admin')->group(function () {
    Route::get('/', 'AdminController@index')->name('admin.index');
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

    Route::get('personagem/{id}/editar', 'PersonagemController@edit')->name('admin.personagem.editar');
    Route::post('personagem/atualizar/{id}', 'PersonagemController@update')->name('admin.personagem.atualizar');
    
    Route::delete('personagem/apagar/{id}', 'PersonagemController@destroy')->name('admin.personagem.apagar');

    /* EPISÓDIO */
    Route::get('episodio/', 'EpisodioController@index')->name('episodio.index');
    Route::get('episodio/criar/', 'EpisodioController@create')->name('admin.episodio.criar');
    Route::post('episodio/criar/', 'EpisodioController@store')->name('admin.episodio.store');

    Route::get('episodio/{id}/editar', 'EpisodioController@edit')->name('admin.episodio.editar');
    Route::post('episodio/atualizar/{id}', 'EpisodioController@update')->name('admin.episodio.atualizar');
    Route::get('episodio/apagar/{id}', 'EpisodioController@destroy')->name('admin.episodio.apagar');


    /* EIXOS */ 
    Route::get('eixos/', 'EixoController@index')->name('eixos.index');
    Route::get('eixos/criar/', 'EixoController@create')->name('admin.eixos.criar');
    Route::post('eixos/criar/', 'EixoController@store')->name('admin.eixos.store');

    Route::get('eixos/{id}/editar', 'EixoController@edit')->name('admin.eixos.editar');
    Route::post('eixos/atualizar/{id}', 'EixoController@update')->name('admin.eixos.atualizar');
    Route::get('eixos/apagar/{id}', 'EixoController@destroy')->name('admin.eixos.apagar');   
  });
