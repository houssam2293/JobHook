@extends('layouts.master')
@Section('content')
			<!-- Title Header Start -->
			<section class="inner-header-title" style="background-image:url(assets/img/banner-10.jpg);">
				<div class="container">
					<h1>Detail d'emploie</h1>
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- Title Header End -->
			<!-- Job Detail Start -->
			<section class="detail-desc">
				<div class="container white-shadow">
				
					<div class="row">
					
						<div class="detail-pic">
							<img src="{{$offer->logo}}" class="img" alt="" />
							
						</div>
						
						<div class="detail-status">
							<span>{{ucfirst($offer->updated_at->diffForHumans())}}</span>
						</div>
						
					</div>
					
					<div class="row bottom-mrg">
						<div class="col-md-8 col-sm-8">
							<div class="detail-desc-caption">
								<h4>{{$offer->nom}}</h4>
								<span class="designation">{{$offer->comptype}}</span>
								<p>NO DESCRIPTION</p>
								<ul>
									<li><i class="fa fa-briefcase"></i><span>{{$offer->type}}</span></li>
									<li><i class="fa fa-flask"></i><span>{{$offer->anneeExperience}} Anné d'xperience</span></li>
								</ul>
							</div>
						</div>
						
						<div class="col-md-4 col-sm-4">
							<div class="get-touch">
								<h4>Infos</h4>
								<ul>
									<li><i class="fa fa-map-marker"></i><span>{{$offer->adresse}}</span></li>
									<li><i class="fa fa-envelope"></i><span>{{$offer->email}}</span></li>
									<li><i class="fa fa-globe"></i><span>{{$offer->siteWeb}}</span></li>
									<li><i class="fa fa-phone"></i><span>{{$offer->telephone}}</span></li>
									<li><i class="fa fa-money"></i><span>${{$offer->remuneration}}/Month</span></li>
								</ul>
							</div>
						</div>
						
					</div>
					
					<div class="row no-padd">
						<div class="detail pannel-footer">
							{{-- <div class="col-md-5 col-sm-5">
								<ul class="detail-footer-social">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div> --}}
							
							<div class="col-md-7 col-sm-7">
								<div class="detail-pannel-footer-btn pull-right">
									<a href="#" class="footer-btn grn-btn" title="">Appliquer mtn</a>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Job Detail End -->

			<!-- Job full detail Start -->
			<section class="full-detail-description full-detail">
				<div class="container">
					<div class="row row-bottom">
						<h2 class="detail-title">Responsibilité du poste</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					</div>
					
					<div class="row row-bottom">
						<h2 class="detail-title">Compétences requises</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						<ul class="detail-list">
							<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</li>
							
						</ul>
					</div>
					
					<div class="row row-bottom">
						<h2 class="detail-title">Diplôme requis</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						<ul class="detail-list">
							<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</li>
							
						</ul>
					</div>
					
				</div>
			</section>
			<!-- Job full detail End -->


@endsection
