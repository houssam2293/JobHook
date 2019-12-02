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
Route::get('create_resume', function(){
    return view('candidate_create-resume');
});
Route::get('candidate_signup', function(){
    return view('candidate_signup');
});
Route::get('company_signup', function(){
    return view('company_signup');
});
Route::get('profile_modify', function(){
    return view('candidate_modify-profile');
});
Route::get('jobs-list', function(){
    return view('recruiter_jobs-list');
});
Route::get('create-job-offer', function(){
    return view('add_offer_recruiter');
});
Route::get('/', function () {
    return view('acceuil');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
