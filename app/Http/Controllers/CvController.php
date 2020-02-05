<?php
// author: Aboura Sid-Ahmed
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\cv;
use DB;
use App\Domaine;
use App\Formation;
use app\Http\Controllers\FormationController;
use App\Experience;
use App\Diver;
use App\ListCompetenceCandidat;
use App\Competence;
use app\Http\Controllers\ExperienceController;
use app\Http\Controllers\DiverController;
use app\Http\Controllers\ListCompetencesCandidatController;
use Carbon\Carbon; # langue français
use Session;
use App\Candidat;
use Auth;

class CvController extends Controller
{
    public function index(){
      $competences = Competence::get();

		return view('candidate_create-resume',['competences' =>$competences]);
	}

	public function store(Request $request){

            // $data = $request->validate([
            //     'titre'=>'required'
            // ]);
             $idCond = Auth::user()->id;
             $candidats = Candidat::where('user_id', $idCond)->get();
             $idCond = $candidats[0]->id;
            $cv=new Cv();

            $cv->titre=$request->input('titre');
            $cv->description=$request->input('Resumer');
            $cv->candidat_id=$idCond ;
            $formationExist = false;
            $diverExist = false;
            $experienceExist = false;
            $competenceExist = false;
            if ($request->input('lieu')[0]) {

                $formationExist = true;               }

            if ($request->input('intitule')[0]) {
                //TO DO validate data input
                $experienceExist = true;
            }

            if ($request->input('intitileDiver')[0]) {
                //TO DO validate data input
                $diverExist = true;
            }


            if ($request->input('competences')) {
                //TO DO validate data input
                 $competenceExist = true;
             }

            $cv->save();
            //dd($cv);
            if ($formationExist) {
                app('App\Http\Controllers\FormationController')->store($request,$cv->id);
            }

             if ($experienceExist) {
                 app('App\Http\Controllers\ExperienceController')->store($request,$cv->id);
             }

             if ($diverExist) {
                app('App\Http\Controllers\DiverController')->store($request,$cv->id);
            }

            if ($competenceExist) {
              $competnces = explode(",",$request->input('competences'));

              foreach ($competnces as $co) {
                  app('App\Http\Controllers\ListCompetencesCandidatController')->store($co,$cv->id);
                  }
             }
              Session::flash('message','Votre cv a été bien ajouté');
		return redirect()->action('CvController@show',['id'=>$cv->id]);
    }

	public function edit($id){
        $cv = Cv::where('cvId',$id)->get();
       $formations = Formation::where('cvId',$id)->join('domaines', 'domaines.domaineId', '=', 'formations.domaineId')->get();
       $experiences = Experience::where('cvId',$id)->get();
       $divers = Diver::where('cvId',$id)->join('typedivers', 'typedivers.typeDiverId', '=', 'divers.typeDiverId')->get();
       $competences = ListCompetencesCandidats::where('cvId',$id)->join('competences', 'listCompetencesCandidats.competenceId', '=', 'competences.competenceId')->get();

      return view('candidate_edit-resume',['formations' => $formations,'cv'=>$cv,'experiences' =>$experiences,'divers'=>$divers,'competences' =>$competences]);
    }
/*
	public function update(Request $request,$id){
        $cv = Cv::find($id);
        $cv->titre=$request->input('titre');
        $cv->save();
        return redirect('cvs');
    }
*/
    public function destroy($id){
         
    	$cv = Cv::find($id);
       // dd($cv);
        $cv->delete();
        //Session::put('messageDelete','Votre cv a été bien suprimé');
        return redirect('candidats');
    }

	public function show($id){
       $cv = Cv::find($id);
       $competences = ListCompetenceCandidat::where('cv_id',$id)->join('competences', 'listCompetencesCandidats.competence_id', '=', 'competences.id')->get();
       Carbon::setlocale('fr');

      return view('candidate_show-resume',['cv'=>$cv,'competences' =>$competences]);

    }

    public function updateTitre(String $titre,$id){

        $cv = Cv::find($id);
        $cv->titre=$titre;
        $cv->save();

        return Response()->json(['etat'=> true]);
    }
    public function updateDescription(String $description,$id){

        $cv = Cv::find($id);
        $cv->description=$description;
        $cv->save();

        return Response()->json(['etat'=> true]);
    }


}
