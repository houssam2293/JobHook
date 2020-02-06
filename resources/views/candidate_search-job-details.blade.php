@extends('layouts.master')
@Section('content')
<section id="app">
			<!-- Title Header Start -->
			<section class="inner-header-title" style="background-image:url({{ URL::to('assets/img/banner-10.jpg') }});">
				<div class="container">
					<h1>@{{ message }}</h1>
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- Title Header End -->
			<!-- Job Detail Start -->
			<section class="detail-desc">
				<div class="container white-shadow">

					<div class="row">

						<div class="detail-pic">
							<img src="{{ asset('storage/'.$offer->recruteur->logo)}}" class="img-responsive" alt="" />

						</div>

						<div class="detail-status">
							<span>{{ucfirst($offer->updated_at->diffForHumans())}}</span>
						</div>

					</div>

					<div class="row bottom-mrg">
						<div class="col-md-8 col-sm-8">
							<div class="detail-desc-caption">
								<a href="{{url('/company/'.$offer->recruteur->id)}}"><h4>{{$offer->recruteur->nom}}</h4></a>
								<span class="designation">{{$offer->intitule}}</span>
								<p>{{$offer->description}}</p>
								<ul>
									<li><i class="fa fa-graduation-cap"></i><span>{{$offer->diplomeRequis}}</span></li>
									<li><i class="fa fa-flask"></i><span>{{$offer->anneeExperience}} Anné d'xperience</span></li>
									<li><i class="fa fa-briefcase"></i><span>{{$offer->type}}</span></li>
								</ul>
							</div>
						</div>

						<div class="col-md-4 col-sm-4">
							<div class="get-touch">
								<h4>Infos</h4>
								<ul>
									<li><i class="fa fa-map-marker"></i><span>{{$offer->recruteur->adresse}}</span></li>
									<li><i class="fa fa-envelope"></i><span>{{$offer->recruteur->email}}</span></li>
									<li><i class="fa fa-globe"></i><span>{{$offer->recruteur->siteWeb}}</span></li>
									<li><i class="fa fa-phone"></i><span>{{$offer->recruteur->telephone}}</span></li>
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
									<button class="add-field" v-on:click="postuler">Appliquer mtn</button>
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
						<h2 class="detail-title">Description</h2>
						<p>{{$offer->description}}</p>
					</div>

					<div class="row row-bottom">
						<h2 class="detail-title">Compétences requises</h2>

						<ul class="detail-list">
							@foreach ($offer->listcompetencesoffres as $element)
								<li>{{$element->competence->nom}}</li>
							@endforeach


						</ul>
					</div>

				</div>


				</section>

			</section>
			<!-- Job full detail End -->

				 <script src="{{ asset('js/vue.js') }}"></script>
             <script src="{{ asset('js/axios.js') }}"></script>
             <script src="{{ asset('js/sweetalert.js') }}"></script>

     <script type="text/javascript">

     		window.Laravel={!! json_encode([
           	'csrfToken' 	=> csrf_token(),
           	'cvs' => Auth::user()->candidat->cvs,
           	'offreId' => $offer->id,
            'url' 			=>url('/')]) !!} ;
     </script>

<script>


	var app = new Vue({
       el: '#app',
       data: {
       	 message: "Detail d'emploie",
       	 cvs: window.Laravel.cvs,
       	 offreId: window.Laravel.offreId

  	},
    methods:{
    	postuler: function(){
    		(async () => {

				/* inputOptions can be an object or Promise */
				a = this.cvs.length;
				var obj ={};
				for(i = 0; i < a; i++){

		       		var name = this.cvs[i].titre;
		       		var id = this.cvs[i].id;
		       		obj[id] = name;

		       	}
				const inputOptions = obj;
				const { value: cv } = await Swal.fire({
				  title: 'Selectionner le cv que vous vouler postuler avec',
				  input: 'radio',
				  inputOptions: inputOptions,
				  inputValidator: (value) => {
				    if (!value) {
				      return 'Tu dois selectionner un cv!'
				    }
				  }
				})
				console.log("cv est "+cv+" L'offre  est:"+this.offreId);
				axios.post(window.Laravel.url+'/addPostuler/'+cv+'/'+this.offreId)
	       		.then(response => {

	       			console.log(response.data);
	       			if(response.data.etat){

	       			}
	       		})
	       		.catch(error => {
	       			console.log(error);
	       			cv = false;
	       		})

				if (cv) {
				  Swal.fire({ html: `<b>Vous avez postuler avec</b>: ${name}` })
				}
				else {
					Swal.fire({ html: `<b>Vous avez pas postuler error*	</b>` })
				}

				})()
		}

    },
   mounted:function(){
   //	console.log(this.offreId);
       }
})

</script>

@endsection
