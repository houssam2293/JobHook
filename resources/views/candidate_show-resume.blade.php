@extends('layouts.master')
@Section('content')

<section id="app">
	@if(Session::has('message'))
	<h2 class="alert-info" style="align-content: center;">{{ Session::get('message')}}</h2>
	@endif
							<!-- Title Header Start -->
			<section class="inner-header-title" style="background-image:url(assets/img/banner-10.jpg);">
				<div class="container">
					<h1>Cv Detaillé</h1><h1>@{{ message }}</h1>
				</div>
				
			</section>
			<div class="clearfix"></div>
			<!-- Title Header End -->
			
			<!-- Resume Detail Start -->
			<section class="detail-desc">
				<div class="container white-shadow">
					<div class="row mrg-0">
						
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
					</div>
				</div>
			</section>

			<!-- Resume Detail End -->
			
			<section class="full-detail-description full-detail">
				<div class="container">
					@if($formations->count()>0)
						<div class="row row-bottom mrg-0">
							<div class="row">
								<div class="col-md-10"><h2 class="detail-title">Formation (Education)
						 			</h2></div>
								<div class="col-md-2 text-right">
									<button class="btn btn-success">Ajouter</button>
								</div>
							</div>
						@foreach ($formations as $formation)
							<ul class="detail-list">
								<div class="pull-right">
									<button class="btn btn-sm"><i class="fa fa-trash-o" style="font-size:30px;color:red"></i></button>
								</div>
								<div class="pull-right">
									<button class="btn btn-sm"><i class="fa fa-edit" style="font-size:30px;color:red"></i></button>
								</div>
								
								<li><strong>{{$formation->diplome." ".$formation->nom}}</strong></li>
								<ul>
							<li>{{"Lieu: ".$formation->lieu}}</li>
							<li>{{"Date: ".$formation->dateDebut." / ".$formation->dateFin}}</li>
						</ul> 
								
							</ul>
						@endforeach

						</div>
					@else
					<div class="row row-bottom mrg-0">
						<h2 class="detail-title">Aucun formation.
						</h2>
					@endif

					@if($experiences->count()>0)
						<div class="row row-bottom mrg-0">
							
							<div class="row">
								<div class="col-md-10"><h2 class="detail-title">Experience
							</h2></div>
								<div class="col-md-2 text-right">
									<button class="btn btn-success">Ajouter</button>
								</div>
							</div>
						@foreach ($experiences as $experience)
							<ul class="detail-list">
								<div class="pull-right">
									<button class="btn btn-sm"><i class="fa fa-trash-o" style="font-size:30px;color:red"></i></button>
								</div>
								<div class="pull-right">
									<button class="btn btn-sm"><i class="fa fa-edit" style="font-size:30px;color:red"></i></button>
								</div>
								<li><strong>{{$experience->intitule}}.</strong></li>
								<ul>
									<li>{{"Lieu: ".$experience->lieu}}.</li>
									<li>{{"Date: ".$experience->dateDebut." / ".$experience->datefin}}.</li>
									<li>{{"Description: ".$experience->description}}.</li>
								</ul>
							</ul>
						@endforeach
					</div>
					@else
					<div class="row row-bottom mrg-0">
						<h2 class="detail-title">Aucun experience.
						</h2>
					@endif
					
					@if($divers->count()>0)
					
						<div class="row row-bottom mrg-0">
							
							<div class="row">
								<div class="col-md-10"><h2 class="detail-title">Divers
							</h2></div>
								<div class="col-md-2 text-right">
									<button class="btn btn-success">Ajouter</button>
								</div>
							</div>
						@foreach ($divers as $diver)
							<ul class="detail-list">
								<div class="pull-right">
									<button class="btn btn-sm"><i class="fa fa-trash-o" style="font-size:30px;color:red"></i></button>
								</div>
								<div class="pull-right">
									<button class="btn btn-sm"><i class="fa fa-edit" style="font-size:30px;color:red"></i></button>
								</div>
								<li><strong>{{$diver->intitule}}.</strong></li>
								<ul>
									<li>{{"Type: ".$diver->nom}}.</li>
									<li>{{"lieu:".$diver->lieu}}.</li>
								<li>{{"Date: ".$diver->dateDebut." / ".$diver->datefin}}.
									</li>
								</ul>
							</ul>
						@endforeach
					</div>
					@else
					<div class="row row-bottom mrg-0">
						<h2 class="detail-title">Aucun diver.
						</h2>
					@endif
					
				</div>
			</section>
			</section>
@endsection

@section('javascripts')
     <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

<script>


	var app = new Vue({
       el: '#app',
       data: {
       	 message: 'Vue JS'
       }
	});

</script>

@endsection