<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RecruteurController extends Controller
{
  public function __construct() {

       $this->middleware('recruteur');
       $this->middleware('auth');
  }

//lister les cvs
  public function index() {

      return view('recruteur.index');
  }
}
