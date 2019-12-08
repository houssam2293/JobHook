<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Candidat;
use Auth;

class CandidatController extends Controller
{
  public function __construct() {
       $this->middleware('candidat');
       $this->middleware('auth');
  }

//lister les cvs
  public function index() {
      $id = Auth::user()->id;
      $candidats = Candidat::where('accountId', $id)->get();
      return view('candidat.index', ['candidats' => $candidats]);
  }
  public function store(cvRequest $request) {

       $cv = new Cv();

       $cv->titre = $request->input('titre');
       $cv->presentation = $request->input('presentation');
       $cv->user_id = Auth::user()->id;

        if($request->hasFile('photo')) {
          $cv->photo = $request->photo->store('image');
        }

       $cv->save();

       session()->flash('success', 'Le cv à été bien enregistré !!');

       return redirect('cvs');
    }
  //permet de récupérer un cv puis de le mettre dans un le formulaire
  public function edit($id) {

     $candidat = Candidat::find($id);

     return view('candidat.edit', ['candidat' => $candidat]);
  }

  //permet de modifier un cv
  public function update(cvRequest $request, $id) {

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
        $cv->photo = $request->photo->store('image');
      }

      $cv->save();

      return redirect('cvs');
  }


  public function show($id) {

    return view('cv.show', ['id' => $id]);
  }

  //permet de supprimer un cv
  public function destroy(Request $request, $id) {

     $cv = Cv::find($id);

     $this->authorize('delete', $cv);

     $cv->delete();

     return redirect('cvs');
  }
}
