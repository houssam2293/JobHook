@extends('layouts.master')
@Section('content')

	<section class="manage-resume gray">
		<div class="container">
			<div class="col-md-12 col-sm-12">
				<div class="full-card">

					<div class="row row-bottom mrg-0">
						<h2 class="detail-title">Job title</h2>
						<div class="col-md-12 col-sm-12">
							<input type="text" class="form-control" placeholder="Title, e.g. Network Engineer">
						</div>
					</div>

					<div class="row row-bottom mrg-0">
						<h2 class="detail-title">Add Education</h2>
						<div class="extra-field-box">
							<div class="multi-box">
								<div class="dublicat-box">
									<div class="col-md-12 col-sm-12">
										<input type="text" class="form-control" placeholder="School Name, e.g. Master Of Technology">
									</div>

									<div class="col-md-12 col-sm-12">
										<input type="text" class="form-control" placeholder="Qualification, e.g. Master Of Arts">
									</div>

									<div class="col-xs-6 col-md-6 col-sm-6">
										<div class="input-group">
											<span class="input-group-addon">From</span>
											<input type="text" id="edu-start" data-lang="en" data-large-mode="true" data-min-year="2017" data-max-year="2020" data-disabled-days="08/17/2017,08/18/2017" data-id="datedropper-0" data-theme="my-style" class="form-control" readonly="">
										</div>
									</div>

									<div class="col-xs-6 col-md-6 col-sm-6">
										<div class="input-group">
											<span class="input-group-addon">To</span>
											<input type="text" id="edu-end" data-lang="en" data-large-mode="true" data-min-year="2017" data-max-year="2020" data-disabled-days="08/17/2017,08/18/2017" data-id="datedropper-0" data-theme="my-style" class="form-control" readonly="">
										</div>
									</div>


									<button type="button" class="add-field">Add field</button>
									<button type="button" class="btn remove-field">Remove</button>
								</div>
							</div>

						</div>
					</div>

					<div class="row row-bottom mrg-0">
						<h2 class="detail-title">Add Experience</h2>
						<div class="extra-field-box">
							<div class="multi-box">
								<div class="dublicat-box">
									<div class="col-md-12 col-sm-12">
										<input type="text" class="form-control" placeholder="Position, e.g. Web Designer">
									</div>
									<div class="col-md-12 col-sm-12">
										<input type="text" class="form-control" placeholder="Employer">
									</div>

									<div class="col-md-6 col-sm-6">
										<div class="input-group">
											<span class="input-group-addon">From</span>
											<input type="text" id="exp-start" data-lang="en" data-large-mode="true" data-min-year="2017" data-max-year="2020" data-disabled-days="08/17/2017,08/18/2017" data-id="datedropper-0" data-theme="my-style" class="form-control" readonly="">
										</div>
									</div>

									<div class="col-md-6 col-sm-6">
										<div class="input-group">
											<span class="input-group-addon">To</span>
											<input type="text" id="exp-end" data-lang="en" data-large-mode="true" data-min-year="2017" data-max-year="2020" data-disabled-days="08/17/2017,08/18/2017" data-id="datedropper-0" data-theme="my-style" class="form-control" readonly="">
										</div>
									</div>

									<div class="col-md-12 col-sm-12 ">
										<textarea class="form-control " placeholder="Notes"></textarea>
									</div>

									<button type="button" class="btn remove-field">Remove</button>
								</div>
							</div>
							<button type="button" class="add-field">Add field</button>
						</div>
					</div>

					<div class="row row-bottom mrg-0">
						<h2 class="detail-title">Add Skills</h2>
						<div class="extra-field-box">
							<div class="multi-box">
								<div class="dublicat-box">

									<div class="col-md-12 col-sm-12">
										<input type="text" class="form-control" placeholder="Skills, e.g. Css, Html...">
									</div>
									<button type="button" class="btn remove-field">Reset</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row bottom-mrg extra-mrg">
					<form>
						<div class="col-md-12">
							<button class="btn btn-success btn-primary small-btn">Submit your resume</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
@endsection
