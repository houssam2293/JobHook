@extends('layouts.master')
@Section('content')



			<!-- Title Header Start -->
			<section class="inner-header-title" style="background-image:url(assets/img/banner-10.jpg);">
				<div class="container">
					<h1>Cv Detaillé</h1>
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- Title Header End -->
			
			<!-- Resume Detail Start -->
			<section class="detail-desc">
				<div class="container white-shadow">
					<div class="row mrg-0">
						{{-- <div class="detail-pic">
							<img src="assets/img/client-1.jpg" class="img" alt="" />
							<a href="#" class="detail-edit" title="edit" ><i class="fa fa-pencil"></i></a>
						</div> --}}
						<div class="detail-status">
							<span>{{ucfirst($cv[0]->updated_at->diffForHumans())}}</span> 
						</div> {{-- derniére fois le cv est mis a jours --}}
					</div>
					<div class="row bottom-mrg mrg-0">
						<div class="col-md-8 col-sm-8">
							<div class="detail-desc-caption">
								<h3 class="designation">{{$cv[0]->titre}}</h3>
								<p>{{$cv[0]->description}}</p>
							</div>

							<div class="detail-desc-skill" style="padding-bottom: 15px">
								@foreach ($competences as $competence)
									<span>{{$competence->nom}}</span>
								@endforeach
								

							</div>
						</div>
						{{-- <div class="col-md-4 col-sm-4">
								<div class="get-touch">
									<h4>Get in Touch</h4>
									<ul>
										<li><i class="fa fa-map-marker"></i><span>Menlo Park, CA</span></li>
										<li><i class="fa fa-envelope"></i><span>danieldax704@gmail.com</span></li>
										<li><i class="fa fa-phone"></i><span>0 123 456 7859</span></li>
										<li><i class="fa fa-money"></i><span>$52/Hour</span></li>
									</ul>
								</div>
							 </div>
 --}}					</div>
				</div>
			</section>

			<!-- Resume Detail End -->
			
			<section class="full-detail-description full-detail">
				<div class="container">
					@if($formations->count()>0)
					@foreach ($formations as $formation)
						<div class="row row-bottom mrg-0">
						<h2 class="detail-title">Formation (Education)
						</h2>
						<ul class="detail-list">
							<li>{{"Diplome: ".$formation->diplome}}</li>
							<li>{{"Lieu: ".$formation->lieu}}</li>
							<li>{{"Domaine: ".$formation->nom}}</li>
							<li>{{"Date de debut: ".$formation->dateDebut}}</li>
							<li>{{"Date de fin: ".$formation->dateFin}}</li>
							
						</ul>
					</div>
					@endforeach
					@else
					<div class="row row-bottom mrg-0">
						<h2 class="detail-title">Aucun formation.
						</h2>
					@endif

					@if($experiences->count()>0)
					@foreach ($experiences as $experience)
						<div class="row row-bottom mrg-0">
						<h2 class="detail-title">Experience
						</h2>
						<ul class="detail-list">
							<li>{{"Intitule: ".$experience->intitule}}.</li>
							<li>{{"Lieu: ".$experience->lieu}}.</li>
							<li>{{"Description: ".$experience->description}}.</li>
							<li>{{"Date de debut: ".$experience->dateDebut}}.</li>
							<li>{{"Date de fin: ".$experience->datefin}}.</li>

							
						</ul>
					</div>
					@endforeach
					@else
					<div class="row row-bottom mrg-0">
						<h2 class="detail-title">Aucun experience.
						</h2>
					@endif
					
					@if($divers->count()>0)
					@foreach ($divers as $diver)
						<div class="row row-bottom mrg-0">
						<h2 class="detail-title">Divers
						</h2>
						<ul class="detail-list">
							<li>{{"Intitule: ".$diver->intitule}}.</li>
							<li>{{"Type: ".$diver->nom}}.</li>
							<li>{{"lieu:".$diver->lieu}}.</li>
							<li>{{"Date de debut: ".$diver->dateDebut}}.</li>
							<li>{{"Date de fin: ".$diver->datefin}}.</li>
							
						</ul>
					</div>
					@endforeach
					@else
					<div class="row row-bottom mrg-0">
						<h2 class="detail-title">Aucun diver.
						</h2>
					@endif
					
				</div>
			</section>
@endsection

