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
									<h3 class="panel-title">Inscription - Recruteur</h3>
								</div>
								<div class="panel-body">
									<img src="assets/img/logo.png" class="img-responsive" />
									<form method="POST" action="{{ route('register') }}">
										@csrf
										<fieldset>
											<div class="form-group">
												<input type="hidden" value="R" name="type">
												<input type="text" value="{{ old('nom') }}" name="nom"
															class="form-control @error('nom') is-invalid @enderror" placeholder="Nom de compagnie" required
															autocomplete="nom" autofocus>
													@error('nom')
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
											<button type="submit" class="btn btn-login">Inscription</a>
										</fieldset>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
@endsection
