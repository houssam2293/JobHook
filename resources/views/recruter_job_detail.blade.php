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

							<img src="{{URL::asset($offer->recruteur->logo)}}" class="img" onerror="if (this.src != '{{URL::asset('assets/img/default.png')}}') this.src = '{{URL::asset('assets/img/default.png')}}';" alt="" />

						</div>

						<div class="detail-status">
							<span>{{$offer->updated_at->diffForHumans()}}</span>
						</div>

					</div>

					<div class="row bottom-mrg">
						<div class="col-md-8 col-sm-8">
							<div class="detail-desc-caption">
								<h4>{{$offer->recruteur->nom}}</h4>
								<span class="designation">{{$offer->intitule}}</span>
								<p>{{$offer->description}}</p>
								<ul>
									<li><i class="fa fa-briefcase"></i><span>{{$offer->type}}</span></li>
									<li><i class="fa fa-flask"></i><span>{{$offer->anneeExperience}}</span></li>
								</ul>
							</div>
						</div>

						<div class="col-md-4 col-sm-4">
							<div class="get-touch">
								<h4>Informations</h4>
								<ul>
									<li><i class="fa fa-map-marker"></i><span>{{$offer->lieu}}</span></li>
									<li><i class="fa fa-envelope"></i><span>{{$offer->recruteur->email}}</span></li>
									<li><i class="fa fa-globe"></i><span>{{$offer->recruteur->siteWeb}}</span></li>
									<li><i class="fa fa-phone"></i><span>{{$offer->recruteur->telephone}}</span></li>
									<li><i class="fa fa-money"></i><span>{{$offer->remuneration}} DA</span></li>
								</ul>
							</div>
						</div>

					</div>

					<div class="row no-padd">
						<div class="detail pannel-footer">
							<div class="col-sm-2 col-md-2">
									<div class="row">
										<div class="col-sm-5 col-md-5">
										 <div class="input-group">
										 	<label for="switch">Status</label>
										 </div>
										</div>
									  <div class="col-sm-3 col-md-3">
											<form action="{{url('/update-status/'.$offer->id)}}" method="post">
												@method('PATCH')
												@csrf
											<label class="switch">
												@if($offer->status=="1")
												<input type="checkbox" name="sw" onchange="this.form.submit()" checked>
												@else
												<input type="checkbox" name="sw" onchange="this.form.submit()">
												@endif
											<span class="slider round"></span>
										</form>
											</label>
									  </div>
									</div>
							</div>

							<div class="col-md-10 col-sm-10">
								<form class="" action="{{url('/job-details/'.$offer->id)}}" method="post">
									@csrf
									@method('DELETE')
									<div class="detail-pannel-footer-btn pull-right">
											<a href="{{url('/job-details/'.$offer->id.'/delete')}}" class="footer-btn red-btn" title="">Supprimer </a>
									</div>

								<div class="detail-pannel-footer-btn pull-right">
									<a href="/job-details/{{$offer->id}}/edit" class="footer-btn grn-btn" title="">Modifier</a>
								</div>
								<div class="detail-pannel-footer-btn pull-right">
									<a href="/candidats-list/{{$offer->id}}" class="footer-btn blu-btn" title="">Candidats</a>
								</div>
									</form>
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
						<h2 class="detail-title">Compétences requises</h2>
						<p></p>
						<ul class="detail-list">
							@forelse($offer->listcompetencesoffres as $list)
							<li>{{$list->competence->nom}}</li>
							@empty
							<li>Aucune competence</li>
							@endforelse
						</ul>
					</div>

					<div class="row row-bottom">
						<h2 class="detail-title">Diplôme requis</h2>
						<p></p>
						<ul class="detail-list">
							<li>{{$offer->diplomeRequis}}</li>
						</ul>
					</div>

				</div>
			</section>
			<!-- Job full detail End -->
@endsection
