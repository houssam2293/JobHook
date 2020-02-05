@extends('layouts.master')
@Section('content')

<!-- Title Header Start -->
			<section class="inner-header-title" style="background-image:url(assets/img/banner-10.jpg);">
				<div class="container">
					<h1>Candidat Detail</h1>
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- Title Header End -->

			<!-- Resume Detail Start -->
			<section class="detail-desc">
				<div class="container white-shadow">
					<div class="row mrg-0">
						<div class="detail-pic">
							<img src="{{URL::asset($cv->candidat->photo)}}" class="img" onerror="if (this.src != '{{URL::asset('assets/img/default-1.png')}}') this.src = '{{URL::asset('assets/img/default-1.png')}}';" alt="" />
						</div>
						<div class="detail-status">
							<span>{{$cv->postulers[0]->updated_at->diffForHumans()}}</span>
						</div>
					</div>
					<div class="row bottom-mrg mrg-0">
						<div class="col-md-8 col-sm-8">
							<div class="detail-desc-caption">
								<h4>{{$cv->candidat->nom}}</h4>
								<span class="designation">{{$cv->titre}}</span>
								<p>{{$cv->description}}</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="get-touch">
								<h4>Information</h4>
								<ul>
									<li><i class="fa fa-map-marker"></i><span>{{$cv->candidat->adresse}}</span></li>
									<li><i class="fa fa-envelope"></i><span>{{$cv->candidat->email}}</span></li>
									<li><i class="fa fa-phone"></i><span>{{$cv->candidat->telephone}}</span></li>
									<li><i class="fa fa-linkedin"></i><span>{{$cv->candidat->linkedin}}</span></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="row no-padd mrg-0">
						<div class="detail pannel-footer">
							<div class="col-md-5 col-sm-5">
								<div class="detail-desc-skill">
									@forelse($cv->listcompetencescandidats as $list)
									<span>{{$list->competence->nom}}</span>
									@empty
									<span>Competence Vide</span>
									@endforelse
									<!-- <span>HTML</span><span>css</span><span>photoshop</span>
									<span>java</span><span>php</span><span>bootstrap</span> -->
								</div>
								<!-- <ul class="detail-footer-social">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								</ul> -->
							</div>
							<div class="col-md-7 col-sm-7">
								<div class="detail-pannel-footer-btn pull-right">
									<a href="#" class="footer-btn grn-btn" title="">Embaucher</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Resume Detail End -->

			<section class="full-detail-description full-detail">
				<div class="container">
					<div class="row row-bottom mrg-0">
						<h2 class="detail-title">Formation(Education)</h2>
						<ul class="detail-list">
							@forelse ($cv->formations as $formation)
							<li>{{$formation->diplome}} {{$formation->domaine->nom}} {{$formation->dateDebut}}/{{$formation->dateFin}}</li>
							@empty
							<li>Aucune Formation trouver</li>
							@endforelse
						</ul>
					</div>
					<div class="row row-bottom mrg-0">
						<h2 class="detail-title">Experience</h2>
						<ul class="detail-list">
							@forelse ($cv->experiences as $experience)
							<li>{{$experience->intitule}} de {{$experience->dateDebut}} jusqu'a {{$experience->dateFin}} à {{$experience->lieu}}<br>
									{{$experience->description}}</li>
							@empty
							<li>Aucune Formation trouver</li>
							@endforelse
						</ul>
					</div>

					<div class="row row-bottom mrg-0">
						<h2 class="detail-title">Divers</h2>
						<ul class="detail-list">
							@forelse ($cv->divers as $diver)
							<li>{{$diver->typediver->nom}} de {{$diver->dateDebut}} jusqu'a {{$diver->dateFin}} à {{$diver->lieu}}<br>
									{{$diver->intitule}}</li>
							@empty
							<li>Aucune Formation trouver</li>
							@endforelse
						</ul>
					</div>

				</div>
			</section>
@endsection
