@extends('layouts.master')
@Section('content')


			<!-- Start Navigation -->

			<!-- End Navigation -->
			<div class="clearfix"></div>

			<!-- Title Header Start -->
			<section class="login-plane-sec">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<div class="login-panel panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Inscription - Candidat</h3>
								</div>
								<div class="panel-body">
									<img src="assets/img/logo.png" class="img-responsive" />
									<form role="form">
										<fieldset>
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Nom" autofocus>
											</div>
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Prenom">
											</div>
                      <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email">
                      </div>
                      <div class="form-group">
												<input type="password" class="form-control" placeholder="Mot de passe">
											</div>
                      <div class="form-group">
												<input type="password" class="form-control" placeholder="Confirmez le mot de passe">
											</div>
											<!-- Change this to a button or input when using this as a form -->
											<a href="" class="btn btn-login">Inscription</a>
										</fieldset>
									</form>
									<ul class="social-login">
										<li class="facebook-login"><a href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
										<span>OU</span>
										<li class="google-plus-login"><a href="#"><i class="fa fa-google-plus"></i>Google</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
@endsection
