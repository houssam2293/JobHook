@extends('layouts.master')
@Section('content')

			<!-- Title Header Start -->
			<section class="inner-header-title" style="background-image:url(assets/img/banner-10.jpg);">
				<div class="container">
					<h1>Rechercher les offres!</h1>
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
							<form>
								<div class="col-md-4 col-sm-4">
									<input type="text" class="form-control" placeholder="Keyword: Name, Tag">
								</div>
								<div class="col-md-3 col-sm-3">
									<input type="text" class="form-control" placeholder="Location: City, State, Zip">
								</div>
								<div class="col-md-3 col-sm-6">
							<select class="form-control">
							  <option>By Category</option>
							  <option>Information Technology</option>
							  <option>Mechanical</option>
							  <option>Hardware</option>
							</select>
						</div>
								<div class="col-md-2 col-sm-2">
									<button type="submit" class="btn btn-primary">Filtrer</button>
								</div>
							</form>
						</div>
					</div>
					<!-- Company Searrch Filter End -->
					@foreach ($offers as $offer)
					
					<div class="item-click">
						<article>
							<div class="brows-job-list">
								<div class="col-md-1 col-sm-2 small-padding">
									<div class="brows-job-company-img">
										<a href="{{('job-details')}}"><img src="{{$offer->logo}}" class="img-responsive" alt="" /></a>
									</div>
								</div>
								<div class="col-md-6 col-sm-5">
									<div class="brows-job-position">
										<a href="{{('job-details')}}">
											<h3 style="float: left">{{$offer->intitule}}</h3><br>
											<h5 style="float: center">&nbsp;&nbsp; {{$offer->domain}}</h5>
											<hr/></a>
										<p>
											<span><strong>{{$offer->nom}}</strong></span>
											<span class="brows-job-sallery"><i class="fa fa-money"></i>{{$offer->remuneration}}</span>
											@switch($offer->type)
											    @case('Full time')
											        <span class="job-type cl-success bg-trans-success">{{$offer->type}}</span>
											        @break
											    @case('Part time')
											       <span class="job-type bg-trans-warning cl-warning">{{$offer->type}}</span>
											        @break

											@endswitch
											{{-- <span class="job-type cl-success bg-trans-success">{{$offer->type}}</span> --}}
										</p>
									</div>
								</div>
								<div class="col-md-3 col-sm-3">
									<div class="brows-job-location">
										<p><i class="fa fa-map-marker"></i>{{$offer->lieu}}</p>
									</div>
								</div>
								<div class="col-md-2 col-sm-2">
									<div class="brows-job-link">
										<div class="col-md-7 col-sm-7">
											<div class="detail-pannel-footer-btn pull-right">
												<a href="{{('profile_modify')}}" class="footer-btn grn-btn" title="">Apply Now</a>	
											</div>
										</div>
									</div>
								</div>
							</div>
							<span class="tg-themetag tg-featuretag">Premium</span>
						</article>
					</div>

					@endforeach
					
					
					
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
