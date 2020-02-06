@extends('layouts.master')
@Section('content')
<script src="{{ asset('js/Chart.min.js')}}" charset="utf-8"></script>
<br>
<br>
<br>

  <div class="row">
    <div class="col-md-6 col-sm-6">
      {{ $offreWilaya->container() }}
      {{ $offreWilaya->script() }}
    </div>
    <div class="col-md-6 col-sm-6">
      {{ $offreperM->container() }}
      {{ $offreperM->script() }}
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 col-sm-6">
      {{ $offreperT->container() }}
      {{ $offreperT->script() }}
    </div>
    <div class="col-md-6 col-sm-6">
      {{ $offreperP->container() }}
      {{ $offreperP->script() }}
    </div>
  </div>
@endsection
