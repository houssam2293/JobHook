@extends('layouts.master')
@Section('content')

			<!-- Title Header Start -->
			<section class="inner-header-title" style="background-image:url(assets/img/banner-10.jpg);">
				<div class="container">
					<h1>Browse Jobs</h1>
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- Title Header End -->

			<!-- ========== Begin: Brows job Category ===============  -->
			<section class="brows-job-category">
				<div class="container">
					<!-- Company Searrch Filter Start -->
					<div class="row extra-mrg">
						<div class="wrap-search-filter">
							<form method="get" action="{{ url('search')}}">
								<div class="col-md-4 col-sm-4">
									<input name="term" type="text" class="form-control" placeholder="Domaine, Companie, Competence">
								</div>
								<div class="col-md-3 col-sm-3" >
									<select placeholder="ville" name="lieu" id="choose-city" class="form-control">
											<option>Choisissez la ville</option>
											<option>Alger</option>
											<option>Tlemcen</option>
											<option>Oran</option>
											<option>Temouchent</option>
											<option>Adrar</option>
											<option>Batna</option>
									</select>
								</div>
								<div class="col-md-3 col-sm-3">

								</div>
								<div class="col-md-2 col-sm-2">
									<button type="submit" class="btn btn-primary">Filter</button>
								</div>
							</form>
						</div>
					</div>
          @foreach($offres as $offre)
					<div class="item-click">
						<article>
							<div class="brows-job-list">
								<div class="col-md-1 col-sm-2 small-padding">
									<div class="brows-job-company-img">
										<a href="job-detail.html"><img src="{{ asset($offre->recruteur->logo) }}" class="img-responsive" alt="" /></a>
									</div>
								</div>
								<div class="col-md-6 col-sm-5">
									<div class="brows-job-position">
										<h3>{{ $offre->intitule }}</h3>
										<p>
											<span>{{ $offre->recruteur->nom }}</span><span class="brows-job-sallery"><i class="fa fa-money"></i>{{ $offre->remuneration }} DA</span>
											<span class="job-type bg-trans-warning cl-warning">{{ $offre->type }}</span>
										</p>
									</div>
								</div>
								<div class="col-md-3 col-sm-3">
									<div class="brows-job-location">
										<p><i class="fa fa-map-marker"></i>{{ $offre->lieu }}</p>
									</div>
								</div>
								<div class="col-md-2 col-sm-2">
									<div class="brows-job-link">
										<a href="{{('job-details')}}" class="btn btn-default">Apply Now</a>
									</div>
								</div>
							</div>
						</article>
					</div>
          @endforeach

					<!--  -->

					<!--/.row-->
					<div class="row">
						<ul class="pagination">
							<li><a href="#">&laquo;</a></li>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#"><i class="fa fa-ellipsis-h"></i></a></li>
							<li><a href="#">&raquo;</a></li>
						</ul>
					</div>

				</div>
			</section>
			<!-- ========== Begin: Brows job Category End ===============  -->


@endsection
