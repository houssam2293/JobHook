@extends('layouts.master')
@Section('content')

<div class="clearfix"></div>

			<!-- Header Title Start -->
			<section class="inner-header-title blank">
				<div class="container">
					<h1>Modify Profile</h1>
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
									<input type="text" class="form-control" placeholder="Your Name">
								</div>
							</div>

							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<input type="email" class="form-control" placeholder="Last Name">
								</div>
							</div>


							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<select class="form-control input-lg">
										<option>Civility</option>
										<option>M.</option>
										<option>Mme</option>
										<option>Dr.</option>
										<option>Pr.</option>
									</select>
								</div>
							</div>

						</form>
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

			<!-- full detail SetionStart-->
			<section class="full-detail">
				<div class="container">
					<div class="row bottom-mrg extra-mrg">
						<form>
							<h2 class="detail-title">General Information</h2>

							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
									<input type="text" class="form-control" placeholder="Email Address">
								</div>
							</div>

							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-phone"></i></span>
									<input type="text" class="form-control" placeholder="Phone Number">
								</div>
							</div>

							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-globe"></i></span>
									<input type="text" class="form-control" placeholder="Website Address">
								</div>
							</div>

							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
									<input type="text" class="form-control" placeholder="Location: Algeria DZ, Tlemcen..">
								</div>
							</div>

							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-birthday-cake"></i></span>
									<input type="text" id="dob" data-lang="en" data-large-mode="true" data-disabled-days="08/17/2017,08/18/2017" data-id="datedropper-0" data-theme="my-style" class="form-control" readonly="">
								</div>
							</div>

							<!-- <div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-flag"></i></span>
									<select class="form-control input-lg">
										<option>Select Region</option>
										<option>United Kingdom</option>
										<option>United State</option>
										<option>India</option>
										<option>More Other</option>
									</select>
								</div>
							</div> -->

						</form>
					</div>

					<div class="row bottom-mrg extra-mrg">
						<form>
							<h2 class="detail-title">Social Profile</h2>

							<!-- <div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-facebook"></i></span>
									<input type="text" class="form-control" placeholder="Profile Link">
								</div>
							</div>

							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-twitter"></i></span>
									<input type="text" class="form-control" placeholder="Profile Link">
								</div>
							</div> -->

							<!-- <div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-instagram"></i></span>
									<input type="text" class="form-control" placeholder="Profile Link">
								</div>
							</div> -->

							<div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-linkedin"></i></span>
									<input type="text" class="form-control" placeholder="Profile Link">
								</div>
							</div>

							<!-- <div class="col-md-6 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-dribbble"></i></span>
									<input type="text" class="form-control" placeholder="Profile Link">
								</div>
							</div> -->

						</form>
					</div>
					<div class="row bottom-mrg extra-mrg">
						<form>
							<div class="col-md-12">
								<button class="btn btn-success btn-primary small-btn">Save Changes</button>
							</div>
						</form>
					</div>
					<div class="row bottom-mrg extra-mrg" >
						<form>
							<h2 class="detail-title">Resumes List</h2>
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
											<h4><span class="cand-designation">Web Developer</span></h4>
											<span class="cand-status">Tlemcen, Algerie</span>
										</div>
									</div>
									<div class="col-md-4 col-sm-4">
										<div class="per-hour-rate">
											<!-- <p><i class="fa fa-money"></i></p> -->
											<p>Naltis - Tlemcen</p>
										</div>
									</div>
									<!-- <div class="col-md-2 col-sm-2">
										<div class="per-hour-rate">
											 <p><i class="fa fa-money"></i></p>
										</div>
									</div> -->
									<div class="col-md-4 col-sm-4">
										<div class="mng-employee-skill">
											<span>html</span><span>css</span><span>laravel</span>
											<span>bootstrap</span>
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

					<div class="row">
						<div class="col-md-12">
							<article>
								<div class="mng-resume" style="border-left: 3px solid #07b107;">
									<div class="col-md-3 col-sm-3">
										<div class="mng-resume-name">
											<h4><span class="cand-designation">Database Administrator</span></h4>
											<span class="cand-status">Algerie</span>
										</div>
									</div>
									<!-- <div class="col-md-2 col-sm-2">
										<div class="mng-resume-pic">

										</div>
									</div> -->

									<div class="col-md-4 col-sm-4">
										<div class="per-hour-rate">
											<!-- <p><i class="fa fa-money"></i></p> -->
											<p>Master Degree - University of Abou Bakr Belkaid</p>
										</div>
									</div>
									<div class="col-md-4 col-sm-4">
										<div class="mng-employee-skill">
											<span>sql</span><span>linux</span><span>oracle</span>
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
