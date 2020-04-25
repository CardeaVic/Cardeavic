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

Route::get('/landing', 'PagesController@landing');

Route::get('/', function(){
    return view('pages.password');
});


Route::get('welcome', function(){
    return view('pages.welcome');
});

Route::get('/assessment', function(){
    return view('pages.assessment');
});


Route::post('/assessment/result', ['as' => 'assessment.result', 'uses' => 'PagesController@submitForm']);

Route::get('/about-cardea', function(){
    return view('pages.about-cardea');
})-> name('about-cardea');

Route::get('/test', function(){
    return view('pages.test');
});

Route::get('/dashboard', function(){
    return view('pages.dashboard');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
