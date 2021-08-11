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


Route::prefix('home')->group(function () {
    Route::get('/', 'HomeController@index')->name('home');

});

// Route::get('/personagens/{nome}', function ($nome) {
//     return view('personagens/{nome}');
    
// });

Route::get('/personagem/{id?}', 'HomeController@personagens')->name('personagens');
Route::get('/episodio/{id?}', 'HomeController@episodio')->name('episodio');
Route::get('/serie/{id?}', 'HomeController@serie')->name('serie');
Route::get('/quiz', 'HomeController@quiz')->name('quiz');

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
    
    Route::get('personagem/apagar/{id}', 'PersonagemController@destroy')->name('admin.personagem.apagar');

    /* SÉRIE */
    Route::get('serie/', 'SerieController@index')->name('serie.index');
    Route::get('serie/criar/', 'SerieController@create')->name('admin.serie.criar');
    Route::post('serie/criar/', 'SerieController@store')->name('admin.serie.store');

    Route::get('serie/{id}/editar', 'SerieController@edit')->name('admin.serie.editar');
    Route::post('serie/atualizar/{id}', 'SerieController@update')->name('admin.serie.atualizar');
    Route::get('serie/apagar/{id}', 'SerieController@destroy')->name('admin.serie.apagar');


    /* EPISÓDIO */
    Route::get('episodio/', 'EpisodioController@index')->name('episodio.index');
    Route::get('episodio/criar/', 'EpisodioController@create')->name('admin.episodio.criar');
    Route::post('episodio/criar/', 'EpisodioController@store')->name('admin.episodio.store');

    Route::get('episodio/{id}/editar', 'EpisodioController@edit')->name('admin.episodio.editar');
    Route::post('episodio/atualizar/{id}', 'EpisodioController@update')->name('admin.episodio.atualizar');
    Route::get('episodio/apagar/{id}', 'EpisodioController@destroy')->name('admin.episodio.apagar');


    Route::prefix('question')->group(function () {
        /* QUESTION */ 
        Route::get('/', 'QuestionController@index')->name('question.index');
        Route::get('criar/', 'QuestionController@create')->name('admin.question.criar');
        Route::post('criar/', 'QuestionController@store')->name('admin.question.store');

        Route::get('{id}/editar', 'QuestionController@edit')->name('admin.question.editar');
        Route::post('atualizar/{id}', 'QuestionController@update')->name('admin.question.atualizar');
        Route::get('apagar/{id}', 'QuestionController@destroy')->name('admin.question.apagar'); 

        
        Route::prefix('{id_question}/options')->group(function () {
            /* OPTIONS */ 
            Route::get('', 'OptionController@index')->name('options.index');
            Route::get('create/', 'OptionController@create')->name('options.create');
            Route::post('', 'OptionController@store')->name('options.store');
            
            Route::get('{id}/edit', 'OptionController@edit')->name('options.edit');
            Route::put('{id}', 'OptionController@update')->name('options.update');
            Route::delete('{id}', 'OptionController@destroy')->name('options.destroy');
             
        });
    });

   
  });
