<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Candidat;
use Auth;

class OfferController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      Carbon::now()->locale('fr_FR');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      $domains = \App\Domaine::all();
      return view('offre.add_offer_recruiter', compact('domains'));
    }

    public function index_offer_list()
    {
      $offers = \App\Offer::all();
      return view('recruiter_jobs-list', compact('offers'));
    }

    public function showJobDetail($offreID){
      $offer = \App\Offer::where('id', $offreID)->firstOrFail();
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
      $offre = new \App\Offer();
      $offre->intitule=request('intitule');
      $offre->type=request('type');
      $offre->domaineId=request('domaine');
      $offre->lieu=request('lieu');
      $offre->diplomeRequis=request('diplomeRequis');
      $offre->anneeExperience=request('anneeExperience');
      $offre->remuneration=request('remuneration');
      $offre->duree=request('duree');
      $offre->status="online";
      $offre->competences= request('competences');
      $offre->recruteurId=1;
      $offre->dateDepot=Carbon::now();
      $offre->dateDebut=Carbon::parse(request('dateDebut'))->format('y-m-d');
      $offre->description=request('description');
      $offre->save();
      app('App\Http\Controllers\ListeCompetencesRecruteurController')->store($offre->competences,$offre->id);
      return redirect('/jobs-list');
    }

    public function edit($offreID)
    {
      $offer = \App\Offer::where('id', $offreID)->firstOrFail();
      $domains = \App\Domaine::all();
      return view('offre.modifier_offre_recruiter', compact('domains','offer'));
    }
    public function update($offreID)
    {
      $offre = \App\Offer::where('id', $offreID)->firstOrFail();
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
     $offre->intitule=request('intitule');
     $offre->type=request('type');
     $offre->domaineId=request('domaine');
     $offre->lieu=request('lieu');
     $offre->diplomeRequis=request('diplomeRequis');
     $offre->anneeExperience=request('anneeExperience');
     $offre->remuneration=request('remuneration');
     $offre->duree=request('duree');
     $offre->status="online";
     $offre->competences= request('competences');
     $offre->recruteurId=1;
     $offre->dateDepot=Carbon::now();
     $offre->dateDebut=Carbon::parse(request('dateDebut'))->format('y-m-d');
     $offre->description=request('description');
     $offre->save();
     app('App\Http\Controllers\ListeCompetencesRecruteurController')->update($offre->competences,$offre->id);
     return redirect('/jobs-list');
    }


    public function searchJobDetaille($id){

        $offer = \App\Offre::find($id);

        $idCond = Auth::user()->id;
        $candidats = Candidat::where('user_id', $idCond)->get();
        $idCond = $candidats[0]->id;
        //TO DO join offer avec domain,skil...
        // ->join('recruteurs', 'offres.recruteurId', '=', 'recruteurs.recruteurId')
        // ->join('domaines', 'offres.domaineId', '=', 'domaines.domaineId')
        // ->select('offres.offreId','offres.intitule','offres.diplomeRequis','offres.remuneration','offres.lieu','offres.description','domaines.nom as domain','offres.type','recruteurs.logo', 'recruteurs.nom','offres.updated_at','offres.anneeExperience','recruteurs.type as comptype','recruteurs.adresse','recruteurs.telephone','recruteurs.email','recruteurs.siteWeb')
        // ->get();
        // $offer = $offer[0];
       // $competences = ListCompetencesCandidats::where('cvId',$id)->join('competences', 'listCompetencesCandidats.competenceId', '=', 'competences.competenceId')->get();
        //dd($candidats[0]->cvs);

        //dd($offer->listcompetencesoffres);
        Carbon::setlocale('fr');
     return view('candidate_search-job-details',compact('offer','idCond','candidats'));
    }
    public function destroy($id)
    {
      \App\Offer::destroy($id);
      app('App\Http\Controllers\ListeCompetencesRecruteurController')->destroy($id);
      return redirect('/jobs-list');
    }

}
