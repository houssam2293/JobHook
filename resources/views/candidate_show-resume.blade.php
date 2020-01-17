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
									<button class="btn btn-sm"><i class="fa fa-edit" style="font-size:30px;color:green"></i></button>
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
									<button class="btn btn-success" @click="open = true">Ajouter</button>
								</div>
							</div>

						{{-- debut div djout --}}
						<div class="row row-bottom mrg-0" v-if="open">
						<div class="extra-field-box">
							<div class="multi-box">
								<div class="dublicat-box">
									<div class="col-md-12 col-sm-12">
										<input name="intitule" type="text" class="form-control" placeholder="Position, e.g. Designeur du WEB" v-model="experience.intitule">
									</div>
									<div class="col-md-12 col-sm-12">
										<input name="exp_lieu" type="text" class="form-control" placeholder="Lieu, eg Sonelgaz" v-model="experience.lieu"> 
									</div>

									<div class="col-md-6 col-sm-6">
										<div class="input-group">
											<span class="input-group-addon">Debut</span>
											<input name="exp_date_debut" type="text" id="exp-start" data-lang="en" data-large-mode="true" data-min-year="2017" data-max-year="2020" data-disabled-days="08/17/2017,08/18/2017" data-id="datedropper-0" data-theme="my-style" class="form-control" v-model="experience.dateDebut">
										</div>
									</div>

									<div class="col-md-6 col-sm-6">
										<div class="input-group">
											<span class="input-group-addon">Fin</span>
											<input name="ex_date_fin" type="text" id="exp-end" data-lang="en" data-large-mode="true" data-min-year="2017" data-max-year="2020" data-disabled-days="08/17/2017,08/18/2017" data-id="datedropper-0" data-theme="my-style" class="form-control" v-model="experience.datefin">
										</div>
									</div>

									<div class="col-md-12 col-sm-12 ">
										<textarea name="description" class="form-control" style="margin-top: 15px" placeholder="Remarques" v-model="experience.description"></textarea>
									</div>

									<button type="button" class="btn remove-field" v-on:click="open = false">Supprimer</button>
								</div>
							</div>
							<button v-if="edit" type="button" class="add-field" style="background-color: red;" v-on:click="updateExperiences">Modifier</button>

							<button v-else type="button" class="add-field" v-on:click="addExperiences">Ajouter expérience</button>
						</div>
					</div>

					{{-- fin div djout --}}
							<ul class="detail-list" v-for="experience in experiences">
								<div class="pull-right" >
									<button class="btn btn-sm" v-on:click="deleteExperience(experience)"><i class="fa fa-trash-o" style="font-size:30px;color:red"></i></button>
								</div>
								<div class="pull-right">
									<button class="btn btn-sm" v-on:click="editExperience(experience)"><i class="fa fa-edit" style="font-size:30px;color:green"></i></button>
								</div>
								<li><strong>@{{ experience.intitule}}.</strong></li>
								<ul>
									<li>"Lieu: " @{{experience.lieu}}.</li>
									<li>Date: @{{experience.dateDebut}} / @{{experience.datefin}}
									</li>
									<li>"Description: " @{{experience.description}}.</li>
								</ul>
							</ul>
						
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
									<button class="btn btn-sm"><i class="fa fa-edit" style="font-size:30px;color:green"></i></button>
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
			 <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
     		<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
     <script type="text/javascript">
     		
     		window.Laravel={!! json_encode([
           	'csrfToken' 	=> csrf_token(),
            'idCv'  => $cv[0]->cvId,
            'url' 			=>url('/')]) !!} ;
     </script>

<script>


	var app = new Vue({
       el: '#app',
       data: {
       	 message: 'Vue JS',
       	 experiences: [],
       	 open: false,
       	 experience: {
       	 	id: 0,
       	 	cvId: window.Laravel.idCv,
       	 	intitule: '',
       	 	lieu: '',
       	 	dateDebut: '',
       	 	datefin: '',
       	 	description: ''
       	 },
       	 edit: false
       },
       methods:{
       	getExperiences: function(){
       		axios.get(window.Laravel.url+'/getExperiences/'+window.Laravel.idCv)
	       		.then(response => {
	       			this.experiences = response.data;
	       		})
	       		.catch(error => {
	       			console.log("error");
	       		})
	       	},
	    addExperiences: function(){

	    	axios.post(window.Laravel.url+'/addExperiences',this.experience)
	       		.then(response => {

	       			console.log(response.data);
	       			if(response.data.etat){
	       				this.open=false;
	       				this.experience.id = response.data.id;
	       				this.experiences.unshift(this.experience);
	       				this.experience = {
	       					id: 0,
				       	 	cvId: window.Laravel.idCv,
				       	 	intitule: '',
				       	 	lieu: '',
				       	 	dateDebut: '',
				       	 	datefin: '',
				       	 	description: ''
	       				}
	       			}
	       		})
	       		.catch(error => {
	       			console.log(error);
	       		})
	       	},
	    editExperience: function(experience){
	    	this.open = true;
	    	this.edit = true;
	    	this.experience = experience;
		},
		updateExperiences: function(){
			
	    	axios.put(window.Laravel.url+'/updateExperiences',this.experience)
	       		.then(response => {
	       			console.log(response.data);
	       			if(response.data.etat){
	       				this.open=false;
	       				this.experiences = {
	       					id: 0,
				       	 	cvId: window.Laravel.idCv,
				       	 	intitule: '',
				       	 	lieu: '',
				       	 	dateDebut: '',
				       	 	datefin: '',
				       	 	description: ''
	       					}
	       				this.edit = false;
	       			}
	       		})
	       		.catch(error => {
	       			console.log(error);
	       		})
	       	},
	    deleteExperience: function(experience){
	    	console.log("id est:"+this.experience.id);
	    	axios.delete(window.Laravel.url+'/deleteExperiences/'+experience.id)
	       		.then(response => {
	       			if(response.data.etat){
	       				var Position = this.experiences.indexOf(experience);
	       				this.experiences.splice(Position,1);
	       			}
	       		})
	       		.catch(error => {
	       			console.log(error);
	       		})
		}
	    
       },

       mounted:function(){
       	this.getExperiences();
       }

	});

</script>
	
@endsection

@section('javascripts')
    

@endsection