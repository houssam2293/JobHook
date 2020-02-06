@extends('layouts.master')
@Section('content')

<link href="{{ asset('assets/css/all.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/css/freelancer.css')}}" rel="stylesheet">

<div class="clearfix"></div>
<br/>
<br/>
<br/>

<section class="page-section portfolio" id="portfolio">
  <div class="container">

    <!-- Portfolio Section Heading -->
    <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Dashboard</h2>

    <!-- Icon Divider -->
    <div class="divider-custom">
      <div class="divider-custom-line"></div>
      <div class="divider-custom-icon">

      </div>
      <div class="divider-custom-line"></div>
    </div>

<div class="row">

  <!-- Portfolio Item 1 -->


  <!-- Portfolio Item 2 -->
  <div class="col-md-6 col-lg-6">
    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
      <a href="{{ url('candidats/modify') }}"><div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
        <div class="portfolio-item-caption-content text-center text-white">

        </div>
      </div></a>
      <img class="img-fluid" src="{{ asset('assets/img/cake.png') }}" alt="">
    </div>
  </div>

  <!-- Portfolio Item 3 -->
  <div class="col-md-6 col-lg-6">
    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
      <a href="{{ url('candidat-jobs-list') }}"><div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
        <div class="portfolio-item-caption-content text-center text-white">

        </div>
      </div></a>
      <img class="img-fluid" src="{{ asset('assets/img/circus.png')}}" alt="">
    </div>
  </div>



</div>
</div>
</section>
@endsection
