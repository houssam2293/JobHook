@extends('layouts.master')
@Section('content')

<div class="clearfix"></div>

			<!-- Header Title Start -->
			<section class="inner-header-title blank">
				<div class="container">
					<h1>Modifier votre compagnie</h1>
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- Header Title End -->

			<!-- General Detail Start -->
			<div class="section detail-desc">
				<div class="container white-shadow">

					<div class="row">
						<div class="detail-pic js">
							<div class="box">
								<input type="file" name="upload-pic[]" id="upload-pic" class="inputfile" />
								<label for="upload-pic"><i class="fa fa-user" aria-hidden="true"></i><span></span></label>
							</div>
						</div>
					</div>

					<div class="row bottom-mrg">
						<form class="add-feild">
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Nom de compagnie">
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<select class="form-control input-lg">
										<option>Type</option>
										<option>Public</option>
										<option>Privé</option>
									</select>
								</div>
							</div>

						</form>
					</div>

					<!-- <div class="row no-padd">
						<div class="detail pannel-footer">
							<div class="col-md-12 col-sm-12">
								<div class="detail-pannel-footer-btn pull-right">
									<a href="#" class="footer-btn choose-cover">Choose Cover Image</a>
								</div>
							</div>
						</div>
					</div> -->

				</div>
			</div>
			<!-- General Detail End -->

			<!-- full detail SetionStart-->
			<section class="full-detail">
				<div class="container">
					<div class="row bottom-mrg extra-mrg">
						<form>
							<h2 class="detail-title">Information Generale</h2>

							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
									<input type="text" class="form-control" placeholder="Email">
								</div>
							</div>

							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-phone"></i></span>
									<input type="text" class="form-control" placeholder="Numero de telephone">
								</div>
							</div>

							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-globe"></i></span>
									<input type="text" class="form-control" placeholder="Site Web">
								</div>
							</div>

							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
									<input type="text" class="form-control" placeholder="Adresse: Algeria DZ, Tlemcen..">
								</div>
							</div>

							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-birthday-cake"></i></span>
									<input type="text" id="dob" data-lang="en" data-large-mode="true" data-disabled-days="08/17/2017,08/18/2017" data-id="datedropper-0" data-theme="my-style" class="form-control" readonly="">
								</div>
							</div>
						</form>
					</div>

					<div class="row bottom-mrg extra-mrg">
						<form>
							<div class="col-md-12">
								<button class="btn btn-success btn-primary small-btn">Sauvegarder les modifications</button>
							</div>
						</form>
					</div>
					<div class="row bottom-mrg extra-mrg" >
						<form>
							<h2 class="detail-title">Information du Contact</h2>
							<div class="col-md-12 col-sm-12">

							</div>

						</form>
					<div class="row">
						<div class="col-md-12">
							<article>
								<div class="mng-resume" style="border-left: 3px solid #07b107;">
									<!-- <div class="col-md-2 col-sm-2">
										<div class="mng-resume-pic">
											<img src="assets/img/client-1.jpg" class="img-responsive" alt="" />
										</div>
									</div> -->
									<div class="col-md-3 col-sm-3">
										<div class="mng-resume-name">
											<h4><span class="cand-designation">Mohammed Alla</span></h4>
											<span class="cand-status">Tlemcen, Algerie</span>
										</div>
									</div>
									<div class="col-md-4 col-sm-4">
										<div class="per-hour-rate">
											<!-- <p><i class="fa fa-money"></i></p> -->
											<p>CEO/Consultant</p>
										</div>
									</div>
									<!-- <div class="col-md-2 col-sm-2">
										<div class="per-hour-rate">
											 <p><i class="fa fa-money"></i></p>
										</div>
									</div> -->
									<div class="col-md-4 col-sm-4">
										<div class="mng-employee-skill">
											<span>05 12 34 56 78</span>
											<span>mohammed.alla@gmail.com</span>
										</div>
									</div>
									<div class="col-md-1 col-sm-1">
										<div class="mng-resume-action">
											<a href="#" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>
											<a href="#" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i></a>
										</div>
									</div>
								</div>
							</article>
						</div>
					</div>

				</div>
				</div>
			</section>
      @endsection
