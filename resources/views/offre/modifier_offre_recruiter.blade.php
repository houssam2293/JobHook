@extends('layouts.master')
@Section('content')

<!-- Header Title Start -->
			<section class="inner-header-title blank">
				<div class="container">
					<h1>Modifier Offre</h1>
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- Header Title End -->

			<!-- General Detail Start -->
			<div class="detail-desc section">
				<div class="container white-shadow">

          <div class="row">
                    <div class="detail-pic"><img src="assets/img/can-6.png" class="img" alt="" />
                      <a href="#" class="detail-edit" title="edit"><i class="fa fa-pencil"></i></a>
                    </div>
          </div>

					<div class="row bottom-mrg">
						<form class="add-feild">
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<input type="text" class="form-control" value="Software Developer">
								</div>
							</div>

							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<input type="text" class="form-control" value="houssam2293@gmail.com">
								</div>
							</div>

							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<select class="form-control input-lg">
										<option>Type d'emploi</option>
										<option selected>À plein temps</option>
										<option>À temps partiel</option>
										<option>Freelancer</option>
										<option>Stage</option>
									</select>
								</div>
							</div>

							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<input type="text" class="form-control" value="London Quel Mark">
								</div>
							</div>

							<div class="col-md-12 col-sm-12">
								<textarea class="form-control" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                 sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."></textarea>
							</div>

						</form>
					</div>

					<div class="row no-padd">
						<div class="detail pannel-footer">
							<div class="col-md-12 col-sm-12">
								<div class="detail-pannel-footer-btn pull-right">
									<a href="#" class="footer-btn choose-cover">Choisissez l'image de couverture</a>
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
						<form>
							<h2 class="detail-title">Informations sur la société</h2>

							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-flag"></i></span>
									<input type="text" class="form-control" value="Google">
								</div>
							</div>

							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
									<input type="text" class="form-control" value="Shearching is a way of living">
								</div>
							</div>

							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
									<input type="text" class="form-control" value="google@google.com">
								</div>
							</div>

							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
									<input type="text" class="form-control" value="It Park New">
								</div>
							</div>

							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-globe"></i></span>
									<input type="text" class="form-control" value="http://google.com/">
								</div>
							</div>

							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-birthday-cake"></i></span>
									<input type="text" id="company-dob" data-lang="en" data-large-mode="true" data-min-year="2017" data-max-year="2020" data-disabled-days="08/17/2017,08/18/2017" data-id="datedropper-0" data-theme="my-style" class="form-control" readonly="">
								</div>
							</div>

						</form>
					</div>

					<div class="row bottom-mrg extra-mrg">
						<form>
							<h2 class="detail-title">Profil social</h2>

							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-facebook"></i></span>
									<input type="text" class="form-control" value="http://facebook.com/Google">
								</div>
							</div>

							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-google-plus"></i></span>
									<input type="text" class="form-control" value="http://google.com/Google">
								</div>
							</div>

							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-twitter"></i></span>
									<input type="text" class="form-control" value="http://twitter.com/Google">
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-instagram"></i></span>
									<input type="text" class="form-control" value="http://instagram.com/Google">
								</div>
							</div>

							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-linkedin"></i></span>
									<input type="text" class="form-control" value="http://linkedin.com/Google">
								</div>
							</div>

							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-dribbble"></i></span>
									<input type="text" class="form-control" value="http://dribbble.com/Google">
								</div>
							</div>

						</form>
					</div>

					<div class="row bottom-mrg extra-mrg">
						<form>
							<h2 class="detail-title">Exigence de travail</h2>
							<div class="col-md-12 col-sm-12">
								<textarea class="form-control textarea" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.

    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do.
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do.
"></textarea>
							</div>
							<div class="col-md-12 col-sm-12">
								<button class="btn btn-success btn-primary small-btn">Soumettre des changements</button>
							</div>
						</form>
					</div>
				</div>
			</section>
			<!-- Basic Full Detail Form End -->

@endsection
