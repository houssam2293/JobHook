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

Route::get('show-resume', function(){
    return view('candidate_show-resume');
 });

Route::get('create_resume/create','CvController@create');
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

//titre et desc
Route::put('updateTitre/{titre}/{cv}','CvController@updateTitre');
Route::put('updateDescription/{description}/{cv}','CvController@updateDescription');

//update ompetence
Route::put('updateCompetences/{titre}/{cv}','ListCompetencesCandidatController@updateCompetences');

//ADD CV
Route::get('create_resume','CvController@index');

Route::post('create_resume','CvController@store');


Route::get('modify_resume', function(){
    return view('candidate_modify-resume');
});




Route::get('candidate_signup', function(){
    return view('candidate_signup');
})->middleware('guest');
Route::get('company_signup', function(){
    return view('company_signup');
})->middleware('guest');
// Route::get('profile_modify', function(){
//     return view('candidate_modify-profile');
// });
Route::get('company_modify', function(){
    return view('recruiter_modify-company');
});
Route::get('acceuil', function(){
    return view('acceuil');
});
Route::get('search', 'SearchController@search');

Route::get('candidats-list', function(){
    return view('list-candidat');
});
Route::get('create-job-offer', function(){
    return view('offre.add_offer_recruiter');
});
Route::get('modify-job-offer', function(){
    return view('offre.modifier_offre_recruiter');
});
Route::get('search-job', function(){
    return view('candidate_search-job');
});
Route::get('job-details', function () {
    return view('candidate_search-job-details');
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

Route::get('/candidats','CandidatController@index');
Route::put('/candidats/{id}','CandidatController@update');

Route::get('/recruteurs','recruteurController@index');
Route::put('/recruteurs/{id}','recruteurController@update');

Route::get('logout', 'Auth\LoginController@logout', function () {
    return abort(404);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/candidats', 'CandidatController@index')->name('candidats')->middleware('candidat');
//Route::get('/recruteur', 'RecruteurController@index')->name('recruteur')->middleware('recruteur');
