@extends('layouts.master')
@Section('content')

<div class="clearfix"></div>

<div class="wrapper">
			<!-- Header Title Start -->
			<section class="inner-header-title blank">
				<div class="container">
					<h1>Modifie Profile</h1>
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- Header Title End -->
			<form action="{{ url('candidats/'.$candidat->id) }}" method="post" enctype="multipart/form-data">
											<input type="hidden" name="_method" value="PUT">
											{{ csrf_field() }}

			<!-- General Detail Start -->
			<section class=" full-detail">
				<div class="container white-shadow">

					<div class="row">
						<div class="detail-pic js">
							<div class="box">
								<input type="file" name="photo" id="upload-pic" class="inputfile" />
								@if($candidat->photo)
										<label for="upload-pic"><img src="{{ asset('storage/'.$candidat->photo) }}" alt="logo"/><span></span></label>
								@else
										<label for="upload-pic"><i class="fa fa-user" aria-hidden="true"></i><span></span></label>
								@endif
							</div>
						</div>
					</div>

					<div class="row bottom-mrg">

							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<input name="nom" type="text" class="form-control" placeholder="Votre Nom" value="{{ $candidat->nom }}">
								</div>
							</div>

							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<input name="prenom" type="text" class="form-control" placeholder="Votre prenom" value="{{ $candidat->prenom }}">
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="input-group">
									<select name="civilite" class="form-control input-lg">
										<option {{ ($candidat->civilite == 'M.') ? "selected" : "" }}>M.</option>
										<option {{ ($candidat->civilite == 'Mme') ? "selected" : "" }}>Mme</option>
										<option {{ ($candidat->civilite == 'Mlle') ? "selected" : "" }}>Mlle</option>
									</select>
								</div>
							</div>
					</div>
				</div>
			</section>
			<!-- General Detail End -->

			<!-- full detail SetionStart-->
			<section class="full-detail">
				<div class="container">
					<div class="row bottom-mrg extra-mrg">

							<h2 class="detail-title">Informations General</h2>

							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
									<input name="email" type="text" class="form-control" placeholder="Votre Email" value="{{ $candidat->email }}">
								</div>
							</div>

							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-phone"></i></span>
									<input name="telephone" type="text" class="form-control" placeholder="Numero de Tel" value="{{ $candidat->telephone }}">
								</div>
							</div>


							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
									<input name="adresse" type="text" class="form-control" placeholder="Adresse" value="{{ $candidat->adresse }}">
								</div>
							</div>

							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-birthday-cake"></i></span>
									<input type="text" name="dateNaissance" value="{{old('dateDebut')}}" id="company-dob" data-lang="en" data-large-mode="true" data-min-year="<?php
         echo date('Y');
     ?>" data-max-year="2030" data-disabled-days="08/17/2017,08/18/2017" data-id="datedropper-0" data-theme="my-style" class="form-control" readonly="">

								</div>
							</div>
					</div>
					<div class="row bottom-mrg extra-mrg">

							<h2 class="detail-title">Social Profile</h2>
{{--
							 <div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-facebook"></i></span>
									<input type="text" class="form-control" placeholder="Profile Link" >
								</div>
							</div> --}}
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-linkedin"></i></span>
									<input name="linkedin" type="text" class="form-control" placeholder="Profile Link" value="{{ $candidat->linkedin }}">
								</div>
							</div>

					</div>
					<div class="row bottom-mrg extra-mrg">

							<div class="col-md-12">
								<button type="submit" class="btn btn-success btn-primary small-btn">Save Changes</button>
							</div>
						</form>
					</div>
					<div class="row bottom-mrg extra-mrg" >
						<form>
							<h2 class="detail-title">Vos Cvs<div class="detail-pannel-footer-btn pull-right">
								<a href="{{('/create_resume')}}"  class="footer-btn grn-btn">Ajouter</a>
							</div></h2>


							<div class="col-md-12 col-sm-12">

							</div>


						</form>
						@foreach ($candidat->cvs as $cv)






					<div class="row">
						<div class="col-md-12">
							<article>
								<div class="mng-resume" style="border-left: 3px solid #07b107;">
									<div class="col-md-3 col-sm-3">
										<div class="mng-resume-name">
											<h4><span class="cand-designation">{{ $cv->titre }}</span></h4>
											<span class="cand-status">{{ $cv->description }}</span>
										</div>
									</div>

									<div class="col-md-4 col-sm-4">

											<div class="mng-employee-skill">
												@foreach ( $cv->listcompetencescandidats as $comp)
												<span>{{ $comp->competence->nom }}</span> {{-- to fix it --}}
												@endforeach
											</div>


									</div>
									<div class="col-md-4 col-sm-4">
										<div class="per-hour-rate">
											<p>{{ucfirst($cv->created_at->diffForHumans())}}</p>
										</div>
									</div>
									<div class="col-md-1 col-sm-1">
										<div class="mng-resume-action">
											<a href="{{ ('show-resume/'.$cv->id) }}" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>
											<a href="{{ ('destroy/'.$cv->id) }}" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i></a>
										</div>
									</div>
								</div>
							</article>
						</div>
					</div>

					@endforeach
				</div>
				</div>
			</section>
			</form>

			<script type="text/javascript" src="{{asset('assets/plugins/js/jquery.min.js')}}"></script>
			<script type="text/javascript" src="{{asset('assets/plugins/js/viewportchecker.js')}}"></script>
			<script type="text/javascript" src="{{asset('assets/plugins/js/bootstrap.min.js')}}"></script>
			<script type="text/javascript" src="{{asset('assets/plugins/js/bootsnav.js')}}"></script>
			<script type="text/javascript" src="{{asset('assets/plugins/js/select2.min.js')}}"></script>
			<script type="text/javascript" src="{{asset('assets/plugins/js/wysihtml5-0.3.0.js')}}"></script>
			<script type="text/javascript" src="{{asset('assets/plugins/js/bootstrap-wysihtml5.js')}}"></script>
			<script type="text/javascript" src="{{asset('assets/plugins/js/datedropper.min.js')}}"></script>
			<script type="text/javascript" src="{{asset('assets/plugins/js/dropzone.js')}}"></script>
			<script type="text/javascript" src="{{asset('assets/plugins/js/loader.js')}}"></script>
			<script type="text/javascript" src="{{asset('assets/plugins/js/owl.carousel.min.js')}}"></script>
			<script type="text/javascript" src="{{asset('assets/plugins/js/slick.min.js')}}"></script>
			<script type="text/javascript" src="{{asset('assets/plugins/js/gmap3.min.js')}}"></script>
			<script type="text/javascript" src="{{asset('assets/plugins/js/jquery.easy-autocomplete.min.js')}}"></script>
			<!-- Date dropper js-->
			<script src="#"></script>

			<!-- Custom Js -->
			<script src="{{asset('assets/js/custom.js')}}"></script>

			<script>
				$('#company-dob').dateDropper();
			</script>
			<script src="{{asset('assets/js/jQuery.style.switcher.js')}}"></script>
			<script type="text/javascript">
				$(document).ready(function() {
					$('#styleOptions').styleSwitcher();
				});
			</script>
		</div>
      @endsection
