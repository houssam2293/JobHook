<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Offre;
use App\Cv;
use App\Candidat;
use Auth;

class OffreController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      Carbon::setlocale('fr');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      if (Auth::check()) {
        $userid = Auth::user()->id;
        $nom = \App\Recruteur::where('user_id', $userid)->firstOrFail()->nom;
        $domains = \App\Domaine::all();
        return view('offre.add_offer_recruiter', compact('domains'));
      }else {
        return abort(404);
      }

    }

    public function index_offer_list()
    {
      $offers = \App\Offre::all();
      return view('recruiter_jobs-list', compact('offers'));
    }

    public function showJobDetail($offreID){
      $offer = \App\Offre::where('id', $offreID)->firstOrFail();
      $domains = \App\Domaine::all();
      return view('recruter_job_detail', compact('offer','domains'));
    }
    public function store()
    {

       $data = request()->validate([
         'intitule' => 'required',
         'domaine' => 'required',
         'type' => 'required',
         'lieu' => 'required',
         'description' => 'required',
         'diplomeRequis' => 'required',
         'anneeExperience' => 'required',
         'duree' => 'required',
         'remuneration' => 'required',
         'competences' => 'required',
         'dateDebut' =>'required'

      ]);
      $userid = Auth::user()->id;
      $id = \App\Recruteur::where('user_id', $userid)->firstOrFail()->id;
      $offre = new \App\Offre();
      $offre->intitule=request('intitule');
      $offre->type=request('type');
      $offre->domaine_id=request('domaine');
      $offre->lieu=request('lieu');
      $offre->diplomeRequis=request('diplomeRequis');
      $offre->anneeExperience=request('anneeExperience');
      $offre->remuneration=request('remuneration');
      $offre->duree=request('duree');
      $offre->status="1";
      $offre->competences= request('competences');
      $offre->recruteur_id=$id;
      $offre->dateDepot=Carbon::now();
      $offre->dateDebut=Carbon::parse(request('dateDebut'))->format('y-m-d');
      $offre->description=request('description');
      $offre->save();
      app('App\Http\Controllers\ListeCompetencesRecruteurController')->store($offre->competences,$offre->id);
      return redirect('/jobs-list');
    }
    static function updateStatus($offreID)
    {
      $offre = \App\Offre::where('id', $offreID)->firstOrFail();

        if(request('sw'))
          $offre->status="1";
        else
          $offre->status="0";
        $offre->save();
        return redirect()->back();
    }

    public function edit($offreID)
    {
      $offer = \App\Offre::where('id', $offreID)->firstOrFail();
      $domains = \App\Domaine::all();
      return view('offre.modifier_offre_recruiter', compact('domains','offer'));
    }
    public function update($offreID)
    {
      $offre = \App\Offre::where('id', $offreID)->firstOrFail();
      $data = request()->validate([
        'intitule' => 'required',
        'domaine' => 'required',
        'type' => 'required',
        'lieu' => 'required',
        'description' => 'required',
        'diplomeRequis' => 'required',
        'anneeExperience' => 'required',
        'duree' => 'required',
        'remuneration' => 'required',
        'competences' => 'required',
        'dateDebut' =>'required'

     ]);
     $userid = Auth::user()->id;
     $id = \App\Recruteur::where('user_id', $userid)->firstOrFail()->id;
     $offre->intitule=request('intitule');
     $offre->type=request('type');
     $offre->domaine_id=request('domaine');
     $offre->lieu=request('lieu');
     $offre->diplomeRequis=request('diplomeRequis');
     $offre->anneeExperience=request('anneeExperience');
     $offre->remuneration=request('remuneration');
     $offre->duree=request('duree');
     $offre->status="1";
     $offre->competences= request('competences');
     $offre->recruteur_id=$id;
     $offre->dateDepot=Carbon::now();
     $offre->dateDebut=Carbon::parse(request('dateDebut'))->format('y-m-d');
     $offre->description=request('description');
     $offre->save();
     app('App\Http\Controllers\ListeCompetencesRecruteurController')->update($offre->competences,$offre->id);
     return redirect('/jobs-list');
    }

    public function showDetail($cvID)
    {
      $cv = Cv::findOrFail($cvID);
      return view('offre.candidat_details',compact('cv'));
    }
    public function showCandidatsList($offreID)
    {
        $offre = Offre::findOrFail($offreID);
        //dd($offre->postulers);
        $postulers=$offre->postulers;
      return view('offre.list-candidat',compact('postulers'));
    }
    public function searchJobDetaille($id){

        $offer = \App\Offre::where('id', $id)
        ->join('recruteurs', 'offres.recruteur_id', '=', 'recruteurs.id')
        ->join('domaines', 'offres.domaine_id', '=', 'domaines.id')
        ->select('offres.id','offres.intitule','offres.diplomeRequis','offres.remuneration','offres.lieu','offres.description','domaines.nom as domain','offres.type','recruteurs.logo', 'recruteurs.nom','offres.updated_at','offres.anneeExperience','recruteurs.type as comptype','recruteurs.adresse','recruteurs.telephone','recruteurs.email','recruteurs.siteWeb')
        ->get();
        $offer = $offer[0];
       // $competences = ListCompetencesCandidats::where('cvId',$id)->join('competences', 'listCompetencesCandidats.competenceId', '=', 'competences.competenceId')->get();
        //dd($candidats[0]->cvs);

        //dd($offer->listcompetencesoffres);
        Carbon::setlocale('fr');
     return view('candidate_search-job-details',['offer' => $offer]);
   }
    public function destroy($id)
    {
      \App\Offre::destroy($id);
      app('App\Http\Controllers\ListeCompetencesRecruteurController')->destroy($id);
      return redirect('/jobs-list');
    }

}
