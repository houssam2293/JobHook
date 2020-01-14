<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;


class OfferController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //code
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

    public function modifyView($offreId){
      $offers = \App\Offer::where('offreId', $offreId)->first();
      $domains = \App\Domaine::all();
      return view('offre.modifier_offre_recruiter', compact('domains','offers'));
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

    public function modify()
    {

      redirect('/jobs-list');
    }
    public function showDetail()
    {
      return view('candidat_details');
    }

}
