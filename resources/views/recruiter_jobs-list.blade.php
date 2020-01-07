@extends('layouts.master')
@Section('content')


			<!-- Title Header End -->
			<section class="inner-header-title" style="background-image:url(assets/img/banner-2.jpg);">
				<div class="container">
				<h1> </h1>
			</div>
						</section>

			<!-- Manage Company List Start -->
			<section class="manage-company gray">
				<div class="container">

					<!-- search filter -->
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="search-filter">
								<div class="col-md-4 col-sm-5">
									<div class="filter-form">
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Recherche">
											<span class="input-group-btn">
												<button type="button" class="btn btn-default">Trouver</button>
											</span>
										</div>
									</div>
								</div>
								<div class="col-md-8 col-sm-7">
									<div class="short-by pull-right">
										Trier par
										<div class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu déroulant <i class="fa fa-angle-down" aria-hidden="true"></i></a>
										<ul class="dropdown-menu">
											<li><a href="#">Trier par date</a></li>
											<li><a href="#">Trier par vues</a></li>
											<li><a href="#">Trier par popularite</a></li>
										</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- search filter End -->

					<div class="row">
						<div class="col-md-12">
							<article>
								<div class="mng-company">
									<a href="/job-details">

									<div class="col-md-6 col-sm-6">
										<div class="mng-company-name">
											<h4>Autodesk <span class="cmp-tagline">(Software Company)</span></h4>
											<span class="cmp-time">Il y a 10 heures</span>
										</div>
									</div>
									<div class="col-md-5 col-sm-5">
										<div class="mng-company-location">
											<p><i class="fa fa-map-marker"></i> Street #210, Make New London</p>
										</div>
									</div>
									</a>
									<div class="col-md-1 col-sm-1">
										<div class="mng-company-action">
											<a href="{{ URL::action('OfferController@modify') }}" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>
											<a href="#" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i></a>
										</div>
									</div>
								</div>
							</article>

							<article>
								<div class="mng-company">
									<a href="{{ URL::action('OfferController@index') }}">

									<div class="col-md-6 col-sm-6">
										<div class="mng-company-name">
											<h4>Google <span class="cmp-tagline">(Software Company)</span></h4>
											<span class="cmp-time">Il y a 10 heures</span>
										</div>
									</div>
									<div class="col-md-5 col-sm-5">
										<div class="mng-company-location">
											<p><i class="fa fa-map-marker"></i> Street #210, Make New London</p>
										</div>
									</div>
									</a>
									<div class="col-md-1 col-sm-1">
										<div class="mng-company-action">
											<a href="{{ URL::action('OfferController@modify') }}" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>
											<a href="#" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i></a>
										</div>
									</div>
								</div>
							</article>

							<article>
								<div class="mng-company">
									<a href="{{ URL::action('OfferController@index') }}">

									<div class="col-md-6 col-sm-6">
										<div class="mng-company-name">
											<h4>Honda <span class="cmp-tagline">(Motor Agency)</span></h4>
											<span class="cmp-time">Il y a 10 heures</span>
										</div>
									</div>
									<div class="col-md-5 col-sm-5">
										<div class="mng-company-location">
											<p><i class="fa fa-map-marker"></i> Street #210, Make New London</p>
										</div>
									</div>
									</a>
									<div class="col-md-1 col-sm-1">
										<div class="mng-company-action">
											<a href="{{ URL::action('OfferController@modify') }}" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>
											<a href="#" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i></a>
										</div>
									</div>
								</div>
							</article>

							<article>
								<div class="mng-company">
									<a href="{{ URL::action('OfferController@index') }}">

									<div class="col-md-6 col-sm-6">
										<div class="mng-company-name">
											<h4>Microsoft <span class="cmp-tagline">(Software Company)</span></h4>
											<span class="cmp-time">Il y a 10 heures</span>
										</div>
									</div>
									<div class="col-md-5 col-sm-5">
										<div class="mng-company-location">
											<p><i class="fa fa-map-marker"></i> Street #210, Make New London</p>
										</div>
									</div>
									</a>
									<div class="col-md-1 col-sm-1">
										<div class="mng-company-action">
											<a href="{{ URL::action('OfferController@modify') }}" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>
											<a href="#" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i></a>
										</div>
									</div>
								</div>
							</article>

							<article>
								<div class="mng-company">
									<a href="{{ URL::action('OfferController@index') }}">

									<div class="col-md-6 col-sm-6">
										<div class="mng-company-name">
											<h4>Skype <span class="cmp-tagline">(Software Company)</span></h4>
											<span class="cmp-time">Il y a 10 heures</span>
										</div>
									</div>
									<div class="col-md-5 col-sm-5">
										<div class="mng-company-location">
											<p><i class="fa fa-map-marker"></i> Street #210, Make New London</p>
										</div>
									</div>
									</a>
									<div class="col-md-1 col-sm-1">
										<div class="mng-company-action">
											<a href="{{ URL::action('OfferController@modify') }}" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>
											<a href="#" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i></a>
										</div>
									</div>
								</div>
							</article>

							<article>
								<div class="mng-company">
									<a href="{{ URL::action('OfferController@index') }}">

									<div class="col-md-6 col-sm-6">
										<div class="mng-company-name">
											<h4>Virtue <span class="cmp-tagline">(Development Company)</span></h4>
											<span class="cmp-time">Il y a 10 heures</span>
										</div>
									</div>
									<div class="col-md-5 col-sm-5">
										<div class="mng-company-location">
											<p><i class="fa fa-map-marker"></i> Street #210, Make New London</p>
										</div>
									</div>
									</a>
									<div class="col-md-1 col-sm-1">
										<div class="mng-company-action">
											<a href="{{ URL::action('OfferController@modify') }}" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>
											<a href="#" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i></a>
										</div>
									</div>
								</div>
							</article>

							<article>
								<div class="mng-company">
									<a href="{{ URL::action('OfferController@index') }}">

									<div class="col-md-6 col-sm-6">
										<div class="mng-company-name">
											<h4>Twitter <span class="cmp-tagline">(Social Media Company)</span></h4>
											<span class="cmp-time">Il y a 10 heures</span>
										</div>
									</div>
									<div class="col-md-5 col-sm-5">
										<div class="mng-company-location">
											<p><i class="fa fa-map-marker"></i> Street #210, Make New London</p>
										</div>
									</div>
									</a>
									<div class="col-md-1 col-sm-1">
										<div class="mng-company-action">
											<a href="{{ URL::action('OfferController@modify') }}" data-toggle="tooltip" title="Edit"><i class="fa fa-edit"></i></a>
											<a href="#" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i></a>
										</div>
									</div>
								</div>
							</article>

						</div>
					</div>

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
			<!-- Manage Company List End -->

@endsection
