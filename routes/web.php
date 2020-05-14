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

// Route for landing page
Route::get('/landing', 'PagesController@landing');

// Initial password protection route
Route::get('/', function () {
    return view('pages.password');
});

//Welcomepage
Route::get('welcome', function () {
    return view('pages.welcome');
});

//Assessment Page
Route::get('/assessment', function () {
    return view('pages.assessment');
});

//Assessment Result
Route::post('/assessment/result', ['as' => 'assessment.result', 'uses' => 'PagesController@submitForm']);

//About Cardea
Route::get('/about-cardea', function () {
    return view('pages.about-cardea');
})->name('about-cardea');

//Authentication Routes
Auth::routes();


// After login taking to dashboard
Route::get('/home', 'HomeController@index')->name('home');


//Logbook Route
Route::get('/logbook', function () {
    return view('pages.logbook');
});

Route::resource('daily-activities', 'DailyActivitiesController');

//Report routes
Route::prefix('report')->group(function () {
    Route::get('index', ['as' => 'report.index', 'uses' => 'WeeklyreportController@index']);
    Route::post('view', ['as' => 'report.view', 'uses' => 'WeeklyreportController@viewReport']);
});
