<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function showDetail()
    {
      return view('candidat_details');
    }
}
