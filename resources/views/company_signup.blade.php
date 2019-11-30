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
									<h3 class="panel-title">Create Company Account</h3>
								</div>
								<div class="panel-body">
									<img src="assets/img/logo.png" class="img-responsive" />
									<form role="form">
										<fieldset>
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Company Name" autofocus>
											</div>
                      <div class="form-group">
                        <input type="email" class="form-control" placeholder="Your Email">
                      </div>
                      <div class="form-group">
												<input type="password" class="form-control" placeholder="Password">
											</div>
                      <div class="form-group">
												<input type="password" class="form-control" placeholder="Repeat your Password">
											</div>
											<!-- Change this to a button or input when using this as a form -->
											<a href="" class="btn btn-login">Sign Up</a>
										</fieldset>
									</form>								
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
@endsection