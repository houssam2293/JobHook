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
									<form method="POST" action="{{ route('register') }}">
										@csrf

										<fieldset>
											<div class="form-group">
												<input type="hidden" value="R" name="type">
												<!-- <input type="text" value="{{ old('name') }}" name="name"
															class="form-control @error('name') is-invalid @enderror" placeholder="Nom" required
															autocomplete="name" autofocus> -->
													@error('name')
															<span class="invalid-feedback" role="alert">
																	<p>{{ $message }}</p>
															</span>
													@enderror
											</div>
											<div class="form-group">
												<!-- <input type="text" value="{{ old('name') }}"  name="prenom"
															class="form-control @error('name') is-invalid @enderror" placeholder="Prenom" required
															autocomplete="name" autofocus> -->
															@error('prenom')
																	<span class="invalid-feedback" role="alert">
																			<p>{{ $message }}</p>
																	</span>
															@enderror
											</div>
                      <div class="form-group">
												<input id="email" type="email" placeholder="Email"
																	class="form-control @error('email') is-invalid @enderror" name="email"
																	value="{{ old('email') }}" required autocomplete="email">
												@error('email')
														<span class="invalid-feedback" role="alert">
															<p>{{ $message }}</p>
														</span>
												@enderror
                      </div>
                      <div class="form-group">
												<input id="password" name="password" type="password" placeholder="Mot de passe" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

												@error('password')
														<span class="invalid-feedback" role="alert">
																<p>{{ $message }}</p>
														</span>
												@enderror
											</div>
                      <div class="form-group">
												<input type="password" name="password_confirmation" class="form-control" placeholder="Confirmez le mot de passe" required autocomplete="new-password">
											</div>
											<!-- Change this to a button or input when using this as a form -->

											<button type="submit" class="btn btn-login">
													Inscription
											</button>
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
