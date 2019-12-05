<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\cv;
use DB;
use app\Domaine;
use app\Formation;
use app\Http\Controllers\FormationController;
class CvController extends Controller
{
    public function create(){
		return view('candidate_create');
	}

	public function store(Request $request){

			$cv=new Cv();
			$cv->titre=$request->input('titre');
            $cv->candidatId=1;
			$cv->save();
           app('App\Http\Controllers\FormationController')->store($request,$cv->id);
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
