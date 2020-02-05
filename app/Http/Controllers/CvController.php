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


    public function destroy($id){
         
    	$cv = Cv::find($id);
       // dd($cv);
        $cv->delete();
        //Session::put('messageDelete','Votre cv a été bien suprimé');
        return redirect('candidats');
    }

	public function show($id){

       $cv = Cv::find($id);
       if(!$cv)
        {
            abort(404);
        }else{
       if($cv->candidat->user_id != Auth::user()->id){
        abort(404);
         $id = Auth::user()->id;
      $candidats = Candidat::where('user_id', $id)->get();
     
      Carbon::setlocale('fr');
      return view('candidat.edit', ['candidat' => $candidats[0]]);
       }
       else {
       
       $competences = ListCompetenceCandidat::where('cv_id',$id)->join('competences', 'listCompetencesCandidats.competence_id', '=', 'competences.id')->get();
       Carbon::setlocale('fr');

      return view('candidate_show-resume',['cv'=>$cv,'competences' =>$competences]);
      }
    }}

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
