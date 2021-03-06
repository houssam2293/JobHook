@extends('layouts.master')
@Section('content')

	<section class="manage-resume gray">
		<div class="container">
			<form action="{{('profile_modify')}}">
			<div class="col-md-12 col-sm-12">
				<div class="full-card">

					<div class="row row-bottom mrg-0">
						<h2 class="detail-title">Titre du job</h2>
						<div class="col-md-12 col-sm-12">
							<input type="text" class="form-control" placeholder="Web Developer">
						</div>
					</div>

					<div class="row row-bottom mrg-0">
						<h2 class="detail-title">Ajoutez Education</h2>
						<div class="extra-field-box">
							<div class="multi-box">
								<div class="dublicat-box">
									<div class="col-md-12 col-sm-12">
										<input type="text" class="form-control" placeholder="UABTTlemcen">
									</div>

									<div class="col-md-12 col-sm-12">
										<input type="text" class="form-control" placeholder="Master 2 devloppeur web">
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


									<button type="button" class="add-field">Ajouter education</button>
									<button type="button" class="btn remove-field">Supprimer </button>
								</div>
							</div>

						</div>
					</div>

					<div class="row row-bottom mrg-0">
						<h2 class="detail-title">Ajouter Experience</h2>
						<div class="extra-field-box">
							<div class="multi-box">
								<div class="dublicat-box">
									<div class="col-md-12 col-sm-12">
										<input type="text" class="form-control" placeholder="Position, e.g. Designeur du WEB">
									</div>
									<div class="col-md-12 col-sm-12">
										<input type="text" class="form-control" placeholder="Employer">
									</div>

									<div class="col-md-6 col-sm-6">
										<div class="input-group">
											<span class="input-group-addon">Debut</span>
											<input type="text" id="exp-start" data-lang="en" data-large-mode="true" data-min-year="2017" data-max-year="2020" data-disabled-days="08/17/2017,08/18/2017" data-id="datedropper-0" data-theme="my-style" class="form-control" readonly="">
										</div>
									</div>

									<div class="col-md-6 col-sm-6">
										<div class="input-group">
											<span class="input-group-addon">Fin</span>
											<input type="text" id="exp-end" data-lang="en" data-large-mode="true" data-min-year="2017" data-max-year="2020" data-disabled-days="08/17/2017,08/18/2017" data-id="datedropper-0" data-theme="my-style" class="form-control" readonly="">
										</div>
									</div>

									<div class="col-md-12 col-sm-12 ">
										<textarea class="form-control " placeholder="Remarques"></textarea>
									</div>

									<button type="button" class="btn remove-field">Supprimer</button>
								</div>
							</div>
							<button type="button" class="add-field">Ajouter expérience</button>
						</div>
					</div>

					<div class="row row-bottom mrg-0">
						<h2 class="detail-title">Ajouter Skills</h2>
						<div class="extra-field-box">
							<div class="multi-box">
								<div class="dublicat-box">

									<div class="col-md-12 col-sm-12">
										<input type="text" class="form-control" placeholder="html,css,laravel,bootstrap">
									</div>
									<input type="Reset" class="btn btn-success btn-primary small-btn" ></input>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row bottom-mrg extra-mrg">
					
						<div class="col-md-12">
							<input type="Submit" class="btn btn-success btn-primary small-btn"></input>
						</div>
					
				</div>
			</div>
			</form>
		</div>
	</section>
@endsection
