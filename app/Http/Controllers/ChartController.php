<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Charts\OfferPerYear;


class ChartController extends Controller
{
    public function index()
    {
      $borderColors = [
            "rgba(255, 99, 132, 1.0)",
            "rgba(22,160,133, 1.0)",
            "rgba(255, 205, 86, 1.0)",
            "rgba(51,105,232, 1.0)",
            "rgba(244,67,54, 1.0)",
            "rgba(34,198,246, 1.0)",
            "rgba(153, 102, 255, 1.0)",
            "rgba(255, 159, 64, 1.0)",
            "rgba(233,30,99, 1.0)",
            "rgba(205,220,57, 1.0)",
            "rgba(222,35,99, 1.0)",
            "rgba(205,100,70, 1.0)"
        ];
        $fillColors = [
            "rgba(255, 99, 132, 0.5)",
            "rgba(22,160,133, 0.5)",
            "rgba(255, 205, 86, 0.5)",
            "rgba(51,105,232, 0.5)",
            "rgba(244,67,54, 0.5)",
            "rgba(34,198,246, 0.5)",
            "rgba(153, 102, 255, 0.5)",
            "rgba(255, 159, 64, 0.5)",
            "rgba(233,30,99, 0.5)",
            "rgba(205,220,57, 0.5)",
            "rgba(33,35,99, 0.5)",
            "rgba(90,100,70, 0.5)"

        ];
      // TODO: finish this asap and take care of display candidat Details
      $offreWilaya = new OfferPerYear;
      $offreWilaya->title('Users by Months', 30, "rgb(255, 99, 132)", true, 'Helvetica Neue');
      $offreWilaya->labels(['Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre',
                       'Octobre', 'Novembre', 'Desembre']);
      $offreWilaya->dataset('My dataset', 'pie', [100, 25, 30, 44,50,369,50,80,40,69,30,11])->color($borderColors)
            ->backgroundcolor($fillColors)
            ->fill(false);
      $offreWilaya->height(300);
      $offreWilaya->width(500);

      return view('charts.offer_per_year', compact('offreWilaya'));
    }
}
