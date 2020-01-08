<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\offer;
use Carbon\Carbon; # langue français
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
        return view('list-candidat');
    }
    public function modify()
    {
      return view('modifier_offre_recruiter');
    }
    
    public function searchJob()
    {
        $offers = Offer::join('recruteurs', 'offres.recruteurId', '=', 'recruteurs.recruteurId')
        ->join('domaines', 'offres.domaineId', '=', 'domaines.domaineId')
        ->skip(0)->take(7)// to show onnly 7 reslut in first page
        ->select('offres.offreId','offres.intitule','offres.remuneration','offres.lieu','domaines.nom as domain','offres.type','recruteurs.logo', 'recruteurs.nom')
        ->get();
        //dd($offers);
      return view('candidate_search-job',['offers' => $offers]);
    }

    public function searchJobDetaille($id){

        $offer = Offer::where('offreId', $id)
        ->join('recruteurs', 'offres.recruteurId', '=', 'recruteurs.recruteurId')
        ->join('domaines', 'offres.domaineId', '=', 'domaines.domaineId')
        ->skip(0)->take(7)// to show onnly 7 reslut in first page
        ->select('offres.offreId','offres.intitule','offres.remuneration','offres.lieu','domaines.nom as domain','offres.type','recruteurs.logo', 'recruteurs.nom','offres.updated_at','offres.anneeExperience','recruteurs.type as comptype','recruteurs.adresse','recruteurs.telephone','recruteurs.email','recruteurs.siteWeb')
        ->get();
        $offer = $offer[0];
       

        Carbon::setlocale('fr');
     return view('candidate_search-job-details',['offer' => $offer]);
    }
}
