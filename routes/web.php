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


Route::get('search-job','OfferController@searchJob'); //recherche tous les offres
Route::get('job-details/{id}','OfferController@searchJobDetaille');//recherche offre avec detaille

Route::get('edit-resume/{id}','CvController@edit');
Route::get('delete-resume/{id}','CvController@destroy');

Route::get('show-resume/{id}','CvController@show');
// EXPERIENCE
Route::get('getExperiences/{id}','ExperienceController@getExperiences'); //vu js show cv affich experience
Route::POST('/addExperiences','ExperienceController@addExperiences'); //vu js add experience in show cv blade
Route::put('/updateExperiences','ExperienceController@updateExperiences'); //vu js edit experience in show cv blade
Route::delete('deleteExperiences/{id}','ExperienceController@deleteExperiences'); //vu js suprimer experience in show cv blade

//FORMATION
Route::get('getFormations/{id}','FormationController@getFormations'); //vu js show cv affich Formations
Route::POST('/addFormations','FormationController@addFormations'); //vu js add Formations in show cv blade
Route::put('/updateFormations','FormationController@updateFormations'); //vu js edit Formations in show cv blade
Route::delete('deleteFormation/{id}','FormationController@deleteFormation'); //vu js suprimer experience in show cv blade

//Divers
Route::get('getDivers/{id}','DiverController@getDivers'); //vu js show cv affich Divers
Route::POST('/addDivers','DiverController@addDivers'); //vu js add Divers in show cv blade
Route::put('/updateDiver','DiverController@updateDiver'); //vu js edit Divers in show cv blade
Route::delete('deleteDiver/{id}','DiverController@deleteDiver'); //vu js suprimer Divers in show cv blade



//ADD CV
Route::get('create_resume','CvController@index');
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
Route::get('jobs-list', function(){
    return view('recruiter_jobs-list');
});

Route::get('candidats-list', function(){
    return view('list-candidat');
});
Route::get('create-job-offer', function(){
    return view('add_offer_recruiter');
});
Route::get('modify-job-offer', function(){
    return view('modifier_offre_recruiter');
});
Route::get('show-detail', function(){
    return view('candidat_details');
});


Route::get('/', function () {
    return view('acceuil');
});
Route::get('/candidats-list','OfferController@index');
Route::get('/offer-modification','OfferController@modify');
Route::get('/detail-candidat','OfferController@showDetail');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
