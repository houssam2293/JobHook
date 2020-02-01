@extends('layouts.master')
@Section('content')

<section id="app">
	@if(Session::has('message'))
	<h2 class="alert-info" style="align-content: center;">{{ Session::get('message')}}</h2>
	@endif
							<!-- Title Header Start -->
			<section class="inner-header-title" style="background-image:url({{ URL::to('assets/img/banner-10.jpg') }});">
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
                           <button v-if="edittitre" class="btn btn-sm" v-on:click="updateTitre"><i class="fa fa-check" style="font-size:30px;"></i></button>

							<span>{{ucfirst($cv->created_at->diffForHumans())}}</span> 
							<br>
							<button v-if="editdescription" class="btn btn-sm" v-on:click="updateDescription"><i class="fa fa-check" style="font-size:30px;"></i></button>

							<br>
							<button v-if="editcompetences" class="btn btn-sm" v-on:click="updateCompetences"><i class="fa fa-check" style="font-size:30px;"></i></button>
						</div> {{-- derniére fois le cv est mis a jours --}}
					</div>
					<div class="row bottom-mrg mrg-0">
						<div class="col-md-8 col-sm-8">
							<div class="detail-desc-caption">
								<h3 v-if="!edittitre" class="designation" @click="editTitre">@{{titre}}</h3>
								
								<input v-if="edittitre" name="titre" type="text" class="form-control" v-model="titre" required style="margin-top: 10px" required>
								


								<p v-if="!editdescription" @click="editDescription">@{{description}}</p>
								<textarea v-if="editdescription" type="text" class="form-control" style="margin-top: 15px" v-model="description"></textarea>

                           
							</div>

							<div class="detail-desc-skill" style="padding-bottom: 15px">
								<div v-if="!editcompetences" @click="editCompetences">
								<span v-for="competence in competences">@{{competence.nom}}
									{{-- &nbsp;<i class="fa fa-trash-o" style="font-size:20px;color:red"></i> --}}
								</span>
								</div>
								<div v-if="editcompetences">
								<input  id="tags" name="competences" type="text" class="form-control" v-model="mesCompetences" placeholder="Competence, e.g. Css, Html...">
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
							<div class="row">
								<div class="col-md-10">
									<h2 class="detail-title" v-if="formations.length > 0">Formation (Education)</h2>
									<h2 class="detail-title" v-else>Aucun Formation.</h2>
						 		</div>
								<div class="col-md-2 text-right">
									<button class="btn btn-success" @click="openformation = true">Ajouter</button>
								</div>
							</div>
						{{-- debut div d'ajoute de formation --}}

						<div class="row row-bottom mrg-0" v-if="openformation">
						<div class="extra-field-box">
							<div class="multi-box">
								<div class="dublicat-box">
									<div class="col-md-12 col-sm-12">
										<input name="diplome" type="text" class="form-control" placeholder="diplôme, e.g. Master de Biologiee" v-model="formation.diplome">
									</div >

									<div class="col-md-12 col-sm-12">
										<input name="lieu" type="text" class="form-control" placeholder="Nom de l'institu, e.g. Ecole sup de l'informatique" v-model="formation.lieu">
									</div>

									
									<div class="col-md-12 col-sm-12">
										<input name="domain" type="text" class="form-control" placeholder="domain, e.g. Informatique" v-model="formation.nom">
									</div>

									<div class="col-xs-6 col-md-6 col-sm-6">
										<div class="input-group">
											<span class="input-group-addon">De</span>
											<input name="date_debut" type="text" id="edu-start" data-lang="en" data-large-mode="true" data-min-year="1990" data-max-year="2020" data-disabled-days="08/17/1990,08/18/2020" data-id="datedropper-0" data-theme="my-style" class="form-control" placeholder="date comme: 2012-12-12" v-model="formation.dateDebut">
										</div>
									</div>

									<div class="col-xs-6 col-md-6 col-sm-6">
										<div class="input-group">
											<span class="input-group-addon">Jusqu'a</span>
											<input name="date_fin" type="text" id="edu-end" data-lang="en" data-large-mode="true" data-min-year="1990" data-max-year="2020" data-disabled-days="08/17/1990,08/18/2020"data-id="datedropper-0" data-theme="my-style" class="form-control" placeholder="date comme: 2012-12-12" v-model="formation.dateFin">
										</div>
									</div>

									
									<button type="button" class="btn remove-field" @click="openformation = false">Supprimer </button>

									<button v-if="editformation" type="button" class="add-field" style="background-color: red;" v-on:click="updateFormation(formation)">Modifier</button>

									<button v-else type="button" class="add-field" v-on:click="addFormation">Ajouter education</button>
								</div>
							</div>

						</div>
					</div>


						{{-- fin div d'ajout de formation--}}
							<ul class="detail-list" v-for="formation in formations">
								<div class="pull-right">
									<button class="btn btn-sm" v-on:click="deleteFormation(formation)"><i class="fa fa-trash-o" style="font-size:30px;color:red"></i></button>
								</div>
								<div class="pull-right">
									<button class="btn btn-sm" v-on:click="editFormation(formation)"><i class="fa fa-edit" style="font-size:30px;color:green"></i></button>
								</div>
								
								<li><strong>@{{formation.diplome}} @{{formation.nom}}</strong></li>
								<ul>
									<li>Lieu: @{{formation.lieu}}</li>
									<li>Date: @{{formation.dateDebut}}/@{{formation.dateFin}}</li>
								</ul> 
								
							</ul>
						
						</div>
					
					
						<div class="row row-bottom mrg-0" >
							
							<div class="row">
								<div class="col-md-10">
									<h2 class="detail-title" v-if="experiences.length > 0">Experience</h2>
									<h2 class="detail-title" v-else> aucun Experience</h2>
								</div>
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
					
					
					
					
					
						<div class="row row-bottom mrg-0">
							
							<div class="row">
								<div class="col-md-10">
									<h2 class="detail-title" v-if="divers.length > 0">Divers</h2>
									<h2 class="detail-title" v-else>Aucun diver</h2>
								</div>
								<div class="col-md-2 text-right">
									<button class="btn btn-success" @click="opendivers = true">Ajouter</button>
								</div>
							</div>

						
						{{-- debut div d'ajout diver--}}

						<div class="row row-bottom mrg-0" v-if="opendivers">
						<div class="extra-field-box">
							<div class="multi-box">
								<div class="dublicat-box">
									<div class="col-md-12 col-sm-12">
										<input name="intitileDiver" type="text" class="form-control" placeholder="intitule" v-model="diver.intitule">
									</div>
									<div class="col-md-12 col-sm-12">
										<input name="typeDiver" type="text" class="form-control" placeholder="Type..eg Bénévol" v-model="diver.nom">
									</div>
									<div class="col-md-12 col-sm-12">
										<input name="diver_lieu" type="text" class="form-control" placeholder="Lieu..eg Centre de soin" v-model="diver.lieu">
									</div>

									<div class="col-md-6 col-sm-6">
										<div class="input-group">
											<span class="input-group-addon">Debut</span>
											<input name="diver_date_debut" type="text" id="exp-start" data-lang="en" data-large-mode="true" data-min-year="2017" data-max-year="2020" data-disabled-days="08/17/2017,08/18/2017" data-id="datedropper-0" data-theme="my-style" class="form-control" v-model="diver.dateDebut">
										</div>
									</div>

									<div class="col-md-6 col-sm-6">
										<div class="input-group">
											<span class="input-group-addon">Fin</span>
											<input name="diver_date_fin" type="text" id="exp-end" data-lang="en" data-large-mode="true" data-min-year="2017" data-max-year="2020" data-disabled-days="08/17/2017,08/18/2017" data-id="datedropper-0" data-theme="my-style" class="form-control" v-model="diver.datefin">
										</div>
									</div>
									{{-- 
									<div class="col-md-12 col-sm-12 ">
										<textarea name="diver_description" class="form-control " placeholder="Remarques" style="margin-top: 15px 
										"></textarea>
									</div> --}}

									<button type="button" class="btn remove-field" @click="opendivers = false">Supprimer</button>
								</div>
							</div>
							<button v-if="editdivers" type="button" class="add-field" style="background-color: red;" v-on:click="updateDiver">Modifier</button>
							<button v-else type="button" class="add-field" @click="addDivers">Ajouter Divers</button>
						</div>
					</div>




						{{-- fin div d'ajout diver--}}



							<ul class="detail-list" v-for="diver in divers">
								<div class="pull-right">
									<button class="btn btn-sm" v-on:click="deleteDiver(diver)"><i class="fa fa-trash-o" style="font-size:30px;color:red"></i></button>
								</div>
								<div class="pull-right">
									<button class="btn btn-sm" v-on:click="editDiver(diver)"><i class="fa fa-edit" style="font-size:30px;color:green"></i></button>
								</div>
								<li><strong>@{{diver.intitule}}.</strong></li>
								<ul>
									<li>"Type: @{{diver.nom}}.</li>
									<li>"lieu: @{{diver.lieu}}.</li>
								<li>Date: @{{diver.dateDebut}} / @{{diver.datefin}}.
									</li>
								</ul>
							</ul>
						
					</div>
					
					
				</div>
			</section>
			</section>

	<script src="{{ asset('js/vue.js') }}"></script>
	<script src="{{ asset('js/axios.js') }}"></script>
	<script src="{{ asset('js/sweetalert.js') }}"></script>

     <script type="text/javascript">
     		
     		window.Laravel={!! json_encode([
           	'csrfToken' 	=> csrf_token(),
            'idCv'  => $cv->id,
            'description' => $cv->description, 
            'titre' => $cv->titre, 
            'competences'  => $competences,
            'url' 			=>url('/')]) !!} ;
     </script> 

<script>


	var app = new Vue({
       el: '#app',
       data: {
       	 competences: window.Laravel.competences,
       	 titre: window.Laravel.titre,
       	 description: window.Laravel.description,
       	 cvId: window.Laravel.idCv,
       	 message: 'Vue JS',
       	 mesCompetences: '',
       	 experiences: [],
       	 formations: [],
       	 divers: [],
       	 open: false,
       	 openformation: false,
       	 opendivers: false,
       	 experience: {
       	 	id: 0,
       	 	cvId: window.Laravel.idCv,
       	 	intitule: '',
       	 	lieu: '',
       	 	dateDebut: '',
       	 	datefin: '',
       	 	description: ''
       	 },
       	 formation: {
       	 	id: 0,
       	 	cvId: window.Laravel.idCv,
       	 	diplome: '',
       	 	lieu: '',
       	 	dateDebut: '',
       	 	dateFin: '',
       	 	nom: ''
       	 },
       	 diver: {
       	 	id: 0,
       	 	cvId: window.Laravel.idCv,
       	 	intitule: '',
       	 	lieu: '',
       	 	dateDebut: '',
       	 	datefin: '',
       	 	nom: ''
       	 },
       	 edit: false,
       	 editdivers: false,
       	 editformation: false,
       	 edittitre: false,
       	 editdescription: false,
       	 editcompetences: false
       },
       methods:{
       	getExperiences: function(){
       		axios.get(window.Laravel.url+'/getExperiences/'+window.Laravel.idCv)
	       		.then(response => {
	       			this.experiences = response.data;
	       			//console.log(this.experiences);
	       	
	       		})
	       		.catch(error => {
	       			console.log("error");
	       			
	       		})
	       	},
	    addExperiences: function(){

	    	axios.post(window.Laravel.url+'/addExperiences',this.experience)
	       		.then(response => {

	       			//console.log(response.data);
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
	       				this.experience = {
	       					id: 0,
				       	 	cvId: window.Laravel.idCv,
				       	 	intitule: '',
				       	 	lieu: '',
				       	 	dateDebut: '',
				       	 	datefin: '',
				       	 	description: ''
	       					}
	       				this.editdivers = false;
	       			}
	       		})
	       		.catch(error => {
	       			console.log(error);
	       		})
	       	},
	    deleteExperience: function(experience){
	    	this.experience = experience;
	    	Swal.fire({
				  title: 'Etes-vous sur?',
				  text: "Vous ne pourrez pas revenir sur cela!",
				  icon: 'warning',
				  showCancelButton: true,
				  confirmButtonColor: '#3085d6',
				  cancelButtonColor: '#d33',
				  cancelButtonText: 'Annuler',
				  confirmButtonText: 'Oui, Supprimer!'
				}).then((result) => {
				  if (result.value) {
				  	axios.delete(window.Laravel.url+'/deleteExperiences/'+this.experience.id)
					       		.then(response => {
					       			if(response.data.etat){
					       				var Position = this.experiences.indexOf(experience);
					       				this.experiences.splice(Position,1);
					       			}
					       		})
					       		.catch(error => {
					       			console.log(error);
					       		})
				    Swal.fire(
				      'Suprimmer!',
				      'success'
				    )
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
	    	
		},
		getFormations: function(){
       		axios.get(window.Laravel.url+'/getFormations/'+window.Laravel.idCv)
	       		.then(response => {
	       			this.formations = response.data;
	       			
	       		})
	       		.catch(error => {
	       			console.log("error");
	       		})
	       	},
	    addFormation: function(){
	    	axios.post(window.Laravel.url+'/addFormations',this.formation)
	       		.then(response => {

	       			console.log(response.data);
	       			if(response.data.etat){
	       				this.openformation=false;
	       				this.formation.id = response.data.id;
	       				this.formations.unshift(this.formation);
	       				this.formation= {
				       	 	id: 0,
				       	 	cvId: window.Laravel.idCv,
				       	 	diplome: '',
				       	 	lieu: '',
				       	 	dateDebut: '',
				       	 	dateFin: '',
				       	 	nom: ''
				       	 }
	       			}
	       		})
	       		.catch(error => {
	       			console.log(error);
	       		})
	       	},

	    editFormation: function(formation){
	    	this.openformation = true;
	    	this.editformation = true;
	    	this.formation = formation;
		},
		updateFormation: function(){
			console.log(this.formation);
	    	axios.put(window.Laravel.url+'/updateFormations',this.formation)
	       		.then(response => {
	       			console.log(response.data);
	       			if(response.data.etat){
	       				this.openformation=false;
	       				this.formation= {
				       	 	id: 0,
				       	 	cvId: window.Laravel.idCv,
				       	 	diplome: '',
				       	 	lieu: '',
				       	 	dateDebut: '',
				       	 	dateFin: '',
				       	 	nom: ''
				       	 }
	       				this.editformation = false;
	       			}
	       		})
	       		.catch(error => {
	       			console.log(error);
	       		})
	       	},
	     deleteFormation: function(formation){
	    	this.formation = formation;
	    	Swal.fire({
				  title: 'Etes-vous sur?',
				  text: "Vous ne pourrez pas revenir sur cela!",
				  icon: 'warning',
				  showCancelButton: true,
				  confirmButtonColor: '#3085d6',
				  cancelButtonColor: '#d33',
				  cancelButtonText: 'Annuler',
				  confirmButtonText: 'Oui, Supprimer!'
				}).then((result) => {
				  if (result.value) {
				  	axios.delete(window.Laravel.url+'/deleteFormation/'+this.formation.id)
					       		.then(response => {
					       			if(response.data.etat){
					       				var Position = this.formations.indexOf(formation);
					       				this.formations.splice(Position,1);
					       			}
					       		})
					       		.catch(error => {
					       			console.log(error);
					       		})
				    Swal.fire(
				      'Suprimmer!',
				      'success'
				    )
				    this.formation= {
				       	 	id: 0,
				       	 	cvId: window.Laravel.idCv,
				       	 	diplome: '',
				       	 	lieu: '',
				       	 	dateDebut: '',
				       	 	dateFin: '',
				       	 	nom: ''
				       	 }

				  }
				})
	    	
		},
       
		getDivers: function(){
       		axios.get(window.Laravel.url+'/getDivers/'+window.Laravel.idCv)
	       		.then(response => {
	       			this.divers = response.data;
	       		})
	       		.catch(error => {
	       			console.log("error");
	       		})
	       	},
	    addDivers: function(){
	    	axios.post(window.Laravel.url+'/addDivers',this.diver)
	       		.then(response => {

	       			console.log(response.data);
	       			if(response.data.etat){
	       				this.opendivers=false;
	       				this.diver.id = response.data.id;
	       				this.divers.unshift(this.diver);
	       				this.diver= {
				       	 	id: 0,
				       	 	cvId: window.Laravel.idCv,
				       	 	intitule: '',
				       	 	lieu: '',
				       	 	dateDebut: '',
				       	 	datefin: '',
				       	 	nom: ''
       						 }
	       			}
	       		})
	       		.catch(error => {
	       			console.log(error);
	       		})
	       	},

	    editDiver: function(diver){
	    	this.opendivers = true;
	    	this.editdivers = true;
	    	this.diver = diver;
		},
		updateDiver: function(){
			console.log(this.diver);
	    	axios.put(window.Laravel.url+'/updateDiver',this.diver)
	       		.then(response => {
	       			console.log(response.data);
	       			if(response.data.etat){
	       				this.openformation=false;
	       				this.diver= {
				       	 	id: 0,
				       	 	cvId: window.Laravel.idCv,
				       	 	intitule: '',
				       	 	lieu: '',
				       	 	dateDebut: '',
				       	 	datefin: '',
				       	 	nom: ''
       						 }
	       				this.editdivers = false;
	       				this.opendivers = false;
	       			}
	       		})
	       		.catch(error => {
	       			console.log(error);
	       		})
	       	},
	     deleteDiver: function(diver){
	    	this.diver = diver;

	    	Swal.fire({
				  title: 'Etes-vous sur?',
				  text: "Vous ne pourrez pas revenir sur cela!",
				  icon: 'warning',
				  showCancelButton: true,
				  confirmButtonColor: '#3085d6',
				  cancelButtonColor: '#d33',
				  cancelButtonText: 'Annuler',
				  confirmButtonText: 'Oui, Supprimer!'
				}).then((result) => {
				  if (result.value) {
				  	axios.delete(window.Laravel.url+'/deleteDiver/'+this.diver.id)
					       		.then(response => {
					       			if(response.data.etat){
					       				var Position = this.divers.indexOf(diver);
					       				this.divers.splice(Position,1);
					       			}
					       		})
					       		.catch(error => {
					       			console.log(error);
					       		})
				    Swal.fire(
				      'Suprimmer!',
				      'success'
				    )
				    this.diver= {
				       	 	id: 0,
				       	 	cvId: window.Laravel.idCv,
				       	 	intitule: '',
				       	 	lieu: '',
				       	 	dateDebut: '',
				       	 	datefin: '',
				       	 	nom: ''
       						 }
				  }
				})
	    	
		},
	    editTitre: function(){
	    	this.edittitre = true;
		},
		updateTitre: function(){
	    	axios.put(window.Laravel.url+'/updateTitre/'+this.titre+'/'+this.cvId)
	       		.then(response => {
	       			console.log(response.data);
	       			
	       		})
	       		.catch(error => {
	       			console.log(error);
	       		})
	    	this.edittitre = false;
	    },
		editDescription: function(){
	    	this.editdescription = true;
	    	console.log("description clicker");
		},
		updateDescription: function(){
	    	axios.put(window.Laravel.url+'/updateDescription/'+this.description+'/'+this.cvId)
	       		.then(response => {
	       			console.log(response.data);
	       			
	       		})
	       		.catch(error => {
	       			console.log(error);
	       		})
	    	this.editdescription = false;
	    },

		editCompetences: function(){
	    	this.editcompetences = true;
	    	console.log("editcompetences clicker");
		},
		updateCompetences: function(){
			console.log("test");
	    	axios.put(window.Laravel.url+'/updateCompetences/'+this.mesCompetences+'/'+this.cvId)
	       		.then(response => {
	       			console.log(response.data.competences);
	       			this.competences=response.data.competences;
	       			this.editcompetences = false;
	       			
	       		})
	       		.catch(error => {
	       			console.log(error);
	       		})
	       		//console.log(this.mesCompetences);appel to get comp
	       		// this.mesCompetences.forEach(competence => this.mesCompetences +=competence.nom + ",");
	       		
	    	
	    },

       },
       
       mounted:function(){
       	this.getExperiences();
       	this.getFormations();
       	this.getDivers();
        this.competences.forEach(competence => this.mesCompetences +=competence.nom + ",");
        console.log(this.mesCompetences);
        if(this.mesCompetences == ''){
        	this.editcompetences = true;
        }
       }

	});

</script>
	
@endsection

@section('javascripts')
    

@endsection
