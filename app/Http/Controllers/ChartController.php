<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Charts\OfferPerYear;
use App\Offre;
use Carbon\Carbon;
use App\Postuler;
use App\Postulerspontane;
use Auth;

class ChartController extends Controller
{
    public function index()
    {
        $borderColors = [];
        $fillColors = [];
        $id = Auth::user()->recruteur->id;
        $offres = Offre::where('recruteur_id', $id)->get();
        $cdi = Offre::where('type',"CDI")->where('recruteur_id', $id)->get();
        $cdd = Offre::where('type',"CDD")->where('recruteur_id', $id)->get();
        $anem = Offre::where('type',"ANEM")->where('recruteur_id', $id)->get();
        $stage = Offre::where('type',"STAGE")->where('recruteur_id', $id)->get();
        $postuleN = Postuler::all();
        $postuleS = Postulerspontane::all();

        $postuleNVal = [0,0,0,0,0,0,0,0,0,0,0,0];
        $postuleSVal = [0,0,0,0,0,0,0,0,0,0,0,0];
        $cdiVal =[0,0,0,0,0,0,0,0,0,0,0,0];
        $cddVal =[0,0,0,0,0,0,0,0,0,0,0,0];
        $anemVal =[0,0,0,0,0,0,0,0,0,0,0,0];
        $stageVal =[0,0,0,0,0,0,0,0,0,0,0,0];
        foreach ($cdi as $v) {
            for ($x = 0; $x <= 11; $x++) {
                if($v->created_at->month==$x+1){
                  $cdiVal[$x]++;
                }
            }

          }
          foreach ($cdd as $v) {
              for ($x = 0; $x <= 11; $x++) {
                  if($v->created_at->month==$x+1){
                    $cddVal[$x]++;
                  }
              }

            }
            foreach ($anem as $v) {
                for ($x = 0; $x <= 11; $x++) {
                    if($v->created_at->month==$x+1){
                      $anemVal[$x]++;
                    }
                }

              }
              foreach ($stage as $v) {
                  for ($x = 0; $x <= 11; $x++) {
                      if($v->created_at->month==$x+1){
                        $stageVal[$x]++;
                      }
                  }

                }

                foreach ($postuleN as $v) {
                    for ($x = 0; $x <= 11; $x++) {
                        if($v->created_at->month==$x+1){
                          $postuleNVal[$x]++;
                        }
                    }

                  }
                  foreach ($postuleS as $v) {
                      for ($x = 0; $x <= 11; $x++) {
                          if($v->created_at->month==$x+1){
                            $postuleSVal[$x]++;
                          }
                      }

                    }


      $wilayas =[];
      foreach ($offres as $o) {
        $r=rand(1,255);
        $g=rand(1,255);
        $b=rand(1,255);
        array_push($wilayas,$o->lieu);

        array_push($borderColors,"rgba(".$r.",".$g.",".$b.","."1.0)");
        array_push($fillColors,"rgba(".$r.",".$g.",".$b.","."0.5)");
      }
      $wilayas=array_unique($wilayas);
      $vals =[];
      foreach ($wilayas as $w ) {
        array_push($vals,Offre::where('lieu', $w)->where('recruteur_id', $id)->count());

      }
      $offreWilaya = new OfferPerYear;
      $offreWilaya->title('Offre Par Wilaya', 30, "rgb(255, 99, 132)", true, 'Helvetica Neue');
      $offreWilaya->labels($wilayas);
      $offreWilaya->displayLegend(true);
      $offreWilaya->dataset('Offres', 'pie', $vals)->color($borderColors)
            ->backgroundcolor($fillColors)
            ->fill(false);
      $offreWilaya->height(300);
      $offreWilaya->width(500);

      $offreperM = new OfferPerYear;
      $offreperM->title('Nombre D\'offre', 30, "rgb(255, 99, 132)", true, 'Helvetica Neue');
      $offreperM->labels(['Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre',
                       'Octobre', 'Novembre', 'Desembre']);
      $years =[];
      $yearVal = [0,0,0,0,0,0,0,0,0,0,0,0];
      foreach ($offres as $offre) {
        array_push($years,$offre->created_at->year);
        }
        $years=array_unique($years);
        foreach ($years as $year) {
            $r=rand(1,255);
            $g=rand(1,255);
            $b=rand(1,255);
            $data = Offre::where('created_at','LIKE',$year.'%')->where('recruteur_id', $id)->get();
            foreach ($data as $v) {
                for ($x = 0; $x <= 11; $x++) {
                    if($v->created_at->month==$x+1){
                      $yearVal[$x]++;
                    }
                }

              }
            $offreperM->dataset($year, 'line', $yearVal)->color("rgba(".$r.",".$g.",".$b.","."1.0)")
                  ->backgroundcolor("rgba(".$r.",".$g.",".$b.","."0.5)")
                  ->fill(false);
        }

      $offreperM->height(300);
      $offreperM->width(500);

      $offreperT = new OfferPerYear;
      $offreperT->title('Offre Par Type Contrat', 30, "rgb(255, 99, 132)", true, 'Helvetica Neue');
      $offreperT->labels(['Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre',
                       'Octobre', 'Novembre', 'Desembre']);
      $offreperT->dataset('CDD', 'bar', $cddVal)->color("rgba(255, 99, 132, 1.0)")
            ->backgroundcolor("rgba(255, 99, 132, 0.5)")
            ->fill(false);
      $offreperT->dataset('CDI','bar',$cdiVal)->color("rgba(255, 205, 86, 1.0)")
            ->backgroundcolor("rgba(255, 205, 86, 0.5)")
            ->fill(false);
      $offreperT->dataset('ANEM','bar',$anemVal)->color("rgba(51,105,232, 1.0)")
            ->backgroundcolor("rgba(51,105,232, 0.5)")
            ->fill(false);
      $offreperT->dataset('STAGE','bar',$stageVal)->color("rgba(34,198,246, 1.0)")
            ->backgroundcolor("rgba(34,198,246, 0.5)")
            ->fill(false);
      $offreperT->height(300);
      $offreperT->width(500);

      $offreperP = new OfferPerYear;
      $offreperP->title('Offre Par Type(Postuler)', 30, "rgb(255, 99, 132)", true, 'Helvetica Neue');
      $offreperP->labels(['Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre',
                       'Octobre', 'Novembre', 'Desembre']);
      $offreperP->dataset('Potusler Normal', 'bar', $postuleNVal)->color("rgba(255, 99, 132, 1.0)")
            ->backgroundcolor("rgba(255, 99, 132,1.0)")
            ->fill(false);
      $offreperP->dataset('Postuler Spontane', 'bar', $postuleSVal)->color("rgba(34,198,246, 1.0)")
            ->backgroundcolor("rgba(34,198,246, 1.0)")
            ->fill(false);
      $offreperP->height(300);
      $offreperP->width(500);

      return view('charts.offer_per_year', compact('offreWilaya','offreperM','offreperT','offreperP'));
    }


}
