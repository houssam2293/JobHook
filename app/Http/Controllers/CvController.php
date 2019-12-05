<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\cv;
class CvController extends Controller
{
    public function create(){
		return view('candidate_create-resume');
	}

	public function store(Request $request){

			$cv=new Cv();
			$cv->titre=$request->input('titre');
			$cv->save();
		return redirect('candidate_modify-profie');
    }
/*
	public function edit($id){
        $cv = Cv::find($id);
        return view('cv.edit',['cv' => $cv]);
    }

	public function update(Request $request,$id){
        $cv = Cv::find($id);
        $cv->titre=$request->input('titre');
        $cv->presentation=$request->input('presentation');
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
