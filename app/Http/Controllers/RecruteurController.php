<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Recruteur;
use Auth;

class RecruteurController extends Controller
{
  public function __construct() {
       $this->middleware('recruteur')->except('profile');
       $this->middleware('auth');
  }

  //afficher profile
    public function profile($id) {
        $recruteur = Recruteur::find($id);
        return view('company_details', compact('recruteur'));
    }
    public function index() {
        $id = Auth::user()->id;
        $recruteurs = Recruteur::where('user_id', $id)->get();
        return view('recruteur.edit', ['recruteur' => $recruteurs[0]]);
    }
    //permet de modifier un candidat
    public function update(Request $request, $id) {
        $recruteur = Recruteur::find($id);
        //$this->authorize('update', $cv);
        $recruteur->nom = $request->input('nom');
        $recruteur->type = $request->input('type');
        $recruteur->siteWeb = $request->input('siteWeb');
        $recruteur->email = $request->input('email');
        $recruteur->telephone = $request->input('telephone');
        $recruteur->adresse = $request->input('adresse');

         if($request->hasFile('logo')) {
          $recruteur->logo = substr($request->logo->store('public'), 7);
        }
        $recruteur->save();
        return redirect('recruteurs');
    }
}
