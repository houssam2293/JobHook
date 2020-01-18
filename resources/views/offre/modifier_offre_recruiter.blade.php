@extends('layouts.master')
@Section('content')

<!-- Header Title Start -->
<div class="wrapper">
			<section class="inner-header-title blank">
				<div class="container">
					<h1>Modifier Offre</h1>
				</div>

			</section>
			<div class="clearfix"></div>
			<!-- Header Title End -->

			<!-- General Detail Start -->
			<form action="/job-details/{{$offer->id}}" method="post" class="add-feild" >
				@method('PATCH')
				@csrf
						<!-- General Detail Start -->
						<div class="detail-desc section">
							<div class="container white-shadow">
								<div class="row">
													<div class="detail-pic"><img src="{{URL::asset('assets/img/can-16.png')}}" class="img" onerror="if (this.src != '{{URL::asset('assets/img/default.png')}}') this.src = '{{URL::asset('assets/img/default.png')}}';" alt="" />
														<a href="#" class="detail-edit" title="edit"><i class="fa fa-pencil"></i></a>
													</div>
								</div>
								<div class="row bottom-mrg">

										<div class="col-md-6 col-sm-6">
											<div class="input-group">
												<input type="text" class="form-control" name="intitule" placeholder="Nom de l'offre" value="{{$offer->intitule}}">
												<p style="color: red">@error('intitule') {{$message}} @enderror</p>
												@csrf
											</div>
										</div>

										<div class="col-md-6 col-sm-6">
											<div class="input-group">
												<select class="form-control input-lg" name="domaine">
													<option disabled>Domaine</option>
													@forelse($domains as $Domaine)
													@if ($offer->domaineId === "{{$Domaine->domaineId}}")
													<option value="{{$Domaine->domaineId}}" selected>{{$Domaine->nom}}</option>
													@else
													<option value="{{$Domaine->domaineId}}">{{$Domaine->nom}}</option>
													@endif
													@empty
													<option>No Data</option>
													@endforelse
												</select>
												<p style="color: red">@error('domaine') {{$message}} @enderror</p>
											</div>
										</div>

										<div class="col-md-6 col-sm-6">
											<div class="input-group">
												<input type="text" class="form-control" placeholder="Location,e.g. London Quel Mark" name="lieu" value="{{$offer->lieu}}">
												<p style="color: red">@error('lieu') {{$message}} @enderror</p>
											</div>
										</div>

										<div class="col-md-6 col-sm-6">
											<div class="input-group">
												<select class="form-control input-lg" name="type">
													@if($offer->type === "CDI")
													<option disabled>Type d'emploi</option>
													<option value="CDI" selected>CDI</option>
													<option value="CDD">CDD</option>
													<option value="ANEM">ANEM</option>
													<option value="STAGE">STAGE</option>
													@elseif ($offer->type === "CDD")
													<option disabled>Type d'emploi</option>
													<option value="CDI">CDI</option>
													<option value="CDD" selected>CDD</option>
													<option value="ANEM">ANEM</option>
													<option value="STAGE">STAGE</option>
													@elseif ($offer->type === "ANEM")
													<option disabled>Type d'emploi</option>
													<option value="CDI">CDI</option>
													<option value="CDD">CDD</option>
													<option value="ANEM" selected>ANEM</option>
													<option value="STAGE">STAGE</option>
													@elseif ($offer->type === "STAGE")
													<option disabled>Type d'emploi</option>
													<option value="CDI">CDI</option>
													<option value="CDD">CDD</option>
													<option value="ANEM">ANEM</option>
													<option value="STAGE" selected>STAGE</option>
													@else
													<option disabled selected>Type d'emploi</option>
													<option value="CDI">CDI</option>
													<option value="CDD">CDD</option>
													<option value="ANEM">ANEM</option>
													<option value="STAGE">STAGE</option>
													@endif
												</select>
												<p style="color: red">@error('type') {{$message}} @enderror</p>
											</div>
										</div>



										<div class="col-md-12 col-sm-12">
											<textarea class="form-control" placeholder="Job Description" name="description">{{$offer->description}}</textarea>
											<p style="color: red">@error('description') {{$message}} @enderror</p>
										</div>

								</div>

								<div class="row no-padd">
										<div class="detail pannel-footer">
											<div class="col-md-12 col-sm-12">
												<div class="detail-pannel-footer-btn pull-right">
													<a href="#" class="footer-btn choose-cover">Choose Cover Image</a>
												</div>
											</div>
										</div>
									</div>

							</div>
						</div>
						<!-- General Detail End -->


						<!-- Basic Full Detail Form Start -->
						<section class="full-detail">
							<div class="container">
								<div class="row bottom-mrg extra-mrg">
									<h2 class="detail-title">Job Details</h2>

									<div class="col-md-6 col-sm-6">
											<div class="input-group">
												<label for="dateDebut">Date de Debut:</label>
											</div>
											<div class="input-group">
												<input type="text" name="dateDebut" value="{{$offer->dateDebut}}" id="company-dob" data-lang="en" data-large-mode="true" data-min-year="<?php
			         echo date('Y');
			     ?>" data-max-year="2030" data-disabled-days="08/17/2017,08/18/2017" data-id="datedropper-0" data-theme="my-style" class="form-control" readonly="">
					 							<p style="color: red">@error('dateDebut') {{$message}} @enderror</p>
											</div>
										</div>

										<div class="col-md-6 col-sm-6">
											<div class="input-group">
												<label for="remuneration">Remuneration:</label>
											</div>
											<div class="input-group">
												<input type="text" class="form-control" placeholder="46000-80000$" name="remuneration" value="{{$offer->remuneration}}">
												<p style="color: red">@error('remuneration') {{$message}} @enderror</p>
											</div>
										</div>

										<div class="col-md-6 col-sm-6">
											<div class="input-group">
												<label for="duree">Annee D'experience Requis (Max=15):</label>
											</div>
												<div class="input-group">
														<input type="number" name="anneeExperience" min="0" max="15" value="{{$offer->anneeExperience}}">
														<p style="color: red">@error('anneeExperience') {{$message}} @enderror</p>
													</div>
										</div>

										<div class="col-md-6 col-sm-6">
											<div class="input-group">
												<label for="duree">Duree de contrat :</label>
											</div>
												<div class="input-group">
														<input type="number" name="duree" min="1" value="{{$offer->duree}}">
														<p style="color: red">@error('duree') {{$message}} @enderror</p>
													</div>
										</div>

								</div>
								<div class="row bottom-mrg extra-mrg">
										<h2 class="detail-title">Job Requirement</h2>
										<div class="col-md-12 col-sm-12">
											<label for="diplomeRequis">Diplôme requis pour cette offre</label>
											<input class="form-control" placeholder="Diplôme requis" name="diplomeRequis" value="{{$offer->diplomeRequis}}"></input>
											<p style="color: red">@error('diplomeRequis') {{$message}} @enderror</p>
										</div>
										<div class="col-md-12 col-sm-12">
											<label for="diplomeRequis">Competences requis pour cette offre (separer par des ',')</label>
											<input class="form-control" placeholder="Compétences requises" name="competences" value="{{$offer->competences}}"></input>
											<p style="color: red">@error('competences') {{$message}} @enderror</p>
										</div>

										<div class="col-md-12 col-sm-12">
											<button class="btn btn-success btn-primary small-btn">Submit your job offer</button>
										</div>
									</form>
								</div>
							</div>
						</section>
			<!-- Basic Full Detail Form End -->
			<!-- Scripts
				================================================== -->
				<script type="text/javascript" src="assets/plugins/js/jquery.min.js"></script>
				<script type="text/javascript" src="assets/plugins/js/viewportchecker.js"></script>
				<script type="text/javascript" src="assets/plugins/js/bootstrap.min.js"></script>
				<script type="text/javascript" src="assets/plugins/js/bootsnav.js"></script>
				<script type="text/javascript" src="assets/plugins/js/select2.min.js"></script>
				<script type="text/javascript" src="assets/plugins/js/wysihtml5-0.3.0.js"></script>
				<script type="text/javascript" src="assets/plugins/js/bootstrap-wysihtml5.js"></script>
				<script type="text/javascript" src="assets/plugins/js/datedropper.min.js"></script>
				<script type="text/javascript" src="assets/plugins/js/dropzone.js"></script>
				<script type="text/javascript" src="assets/plugins/js/loader.js"></script>
				<script type="text/javascript" src="assets/plugins/js/owl.carousel.min.js"></script>
				<script type="text/javascript" src="assets/plugins/js/slick.min.js"></script>
				<script type="text/javascript" src="assets/plugins/js/gmap3.min.js"></script>
				<script type="text/javascript" src="assets/plugins/js/jquery.easy-autocomplete.min.js"></script>
				<!-- Date dropper js-->
				<script src="#"></script>

				<!-- Custom Js -->
				<script src="assets/js/custom.js"></script>

				<script>
					$('#company-dob').dateDropper();
				</script>
				<script src="assets/js/jQuery.style.switcher.js"></script>
				<script type="text/javascript">
					$(document).ready(function() {
						$('#styleOptions').styleSwitcher();
					});
				</script>
</div>

@endsection
