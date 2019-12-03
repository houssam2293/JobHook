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
Route::get('modify_resume', function(){
    return view('candidate_modify-resume');
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
Route::get('acceuil', function(){
    return view('acceuil');
});
Route::get('jobs-list', function(){
    return view('recruiter_jobs-list');
});
Route::get('search-job', function(){
    return view('candidate_search-job');
});
Route::get('search-job', function(){
    return view('candidate_search-job');
});
Route::get('job-details', function () {
    return view('candidate_search-job-details');
});
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
