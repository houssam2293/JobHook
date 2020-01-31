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
Route::get('show-resume/{id}','CvController@show');
Route::get('show-resume', function(){
    return view('candidate_show-resume');
 });

Route::get('create_resume/create','CvController@create');
Route::post('create_resume','CvController@store');


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
Route::get('company_modify', function(){
    return view('recruiter_modify-company');
});
Route::get('acceuil', function(){
    return view('acceuil');
});


Route::get('candidats-list', function(){
    return view('list-candidat');
});
Route::get('search-job', function(){
    return view('candidate_search-job');
});

Route::get('/', function () {
    return view('acceuil');
});
Route::get('/add-offre','OfferController@index');
Route::post('/add-offre','OfferController@store');
Route::get('/jobs-list','OfferController@index_offer_list');
Route::get('/job-details/{offreID}','OfferController@showJobDetail');
Route::get('/job-details/{offreID}/edit','OfferController@edit');
Route::patch('/job-details/{offreID}','OfferController@update');
Route::get('/job-details/{offreID}/delete','OfferController@destroy');
Route::get('/detail-candidat','OfferController@showDetail');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
