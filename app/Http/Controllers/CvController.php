<?php
// author: Aboura Sid-Ahmed
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\cv;
use DB;
use app\Domaine;
use app\Formation;
use app\Http\Controllers\FormationController;
use app\Experience;
use app\Http\Controllers\ExperienceController;
use app\Http\Controllers\DiverController;
use app\Http\Controllers\ListCompetencesCandidatController;

class CvController extends Controller
{
    public function create(){
		return view('candidate_create');
	}

	public function store(Request $request){

			$cv=new Cv();
            $cv->titre=$request->input('titre');
            $cv->description=$request->input('Resumer');
            $cv->candidatId=1;
			$cv->save();

            if ($request->input('diplome')) {
            app('App\Http\Controllers\FormationController')->store($request,$cv->id);
              }

            if ($request->input('intitule')) {
                app('App\Http\Controllers\ExperienceController')->store($request,$cv->id);
            }
            
            if ($request->input('intitileDiver')) {
                app('App\Http\Controllers\DiverController')->store($request,$cv->id);
            }
            
            
            if ($request->input('competences')) {
                 app('App\Http\Controllers\ListCompetencesCandidatController')->store($request,$cv->id);
             } 
		return redirect('profile_modify');
    }
/*
	public function edit($id){
        $cv = Cv::find($id);
        return view('cv.edit',['cv' => $cv]);
    

	public function update(Request $request,$id){
        $cv = Cv::find($id);
        $cv->titre=$request->input('titre');
        $cv->save();
        return redirect('cvs');
    }

    public function destroy(Request $request,$id){
        $cv = Cv::find($id);
    	$cv->delete();
    	return redirect('cvs');
    }

	public function show($id){
        return view('cv.show',['id' => $id]);

    }
*/
}
