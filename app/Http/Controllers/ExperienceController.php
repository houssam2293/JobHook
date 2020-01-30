<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Experience;
use App\cv;
class ExperienceController extends Controller
{
    public function store(Request $request,$cv){
           $cmpte=count($request->input('lieu'));
           $i=0;
           //dd($cmpt);
            while ($i < $cmpte) {
                $experience =new Experience();
                $experience->intitule=$request->input('intitule')[$i];
                $experience->lieu=$request->input('exp_lieu')[$i];
                $experience->dateDebut=$request->input('exp_date_debut')[$i];
                $experience->dateFin=$request->input('ex_date_fin')[$i];
                $experience->cvId=$cv;
                $experience->description=$request->input('description')[$i];
                //dd($experience);    
                $experience->save();   
                $i++;        
                 }
			
		return ;
    }
    public function getExperiences($id){
        $experiences = Experience::where('cvId',$id)->get(); 
        return $experiences;
    }
    public function addExperiences(Request $request){

                $experience = new Experience();
                $experience->intitule=$request->intitule;
                $experience->lieu=$request->lieu;
                $experience->dateDebut=$request->dateDebut;
                $experience->dateFin=$request->datefin;
                $experience->cvId=$request->cvId;
                $experience->description=$request->description;
                $experience->save();           
                 return Response()->json(['etat'=> true, 'id'=>$experience->experienceId]);
    }
   public function updateExperiences(Request $request){
          $id =  $request->experienceId;
                $experience = Experience::find($id);
             // dd($id);
                $experience->experienceId=$request->experienceId;
                $experience->intitule=$request->intitule;
                $experience->lieu=$request->lieu;
                $experience->dateDebut=$request->dateDebut;
                $experience->dateFin=$request->datefin;
                $experience->description=$request->description;
              //  dd($experience);
                 $experience->save();           
                 return Response()->json(['etat'=> true]);

   }
  public function deleteExperiences($id){

        $experience = Experience::find($id);
        $experience->delete();
        return Response()->json(['etat'=> true]);
  }
}
