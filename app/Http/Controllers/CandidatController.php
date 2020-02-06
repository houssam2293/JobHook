<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Candidat;
use Auth;
use Carbon\Carbon;
class CandidatController extends Controller
{
  public function __construct() {
       $this->middleware('candidat');
       $this->middleware('auth');
  }
  public function dashboard(){
    return view('candidat.dashboard');
  }
//afficher profile
  public function index() {
      $id = Auth::user()->id;
      $candidats = Candidat::where('user_id', $id)->get();

      Carbon::setlocale('fr');
      return view('candidat.edit', ['candidat' => $candidats[0]]);
  }
  //permet de modifier un candidat
  public function update(Request $request, $id) {
      $candidat = Candidat::find($id);
      //$this->authorize('update', $cv);
      $candidat->nom = $request->input('nom');
      $candidat->prenom = $request->input('prenom');
      $candidat->civilite = $request->input('civilite');
      $candidat->email = $request->input('email');
      $candidat->telephone = $request->input('telephone');
      $candidat->adresse = $request->input('adresse');
      //$candidat->dateNaissance = $request->input('dateNaissance');
      $candidat->linkedin = $request->input('linkedin');
       if($request->hasFile('photo')) {
        $candidat->photo = substr($request->photo->store('public'), 7);
      }
      $candidat->save();
      return redirect('candidats');
  }
}
