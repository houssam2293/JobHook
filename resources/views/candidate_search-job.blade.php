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
							<form>
								<div class="col-md-4 col-sm-4">
									<input type="text" class="form-control" placeholder="Keyword: Name, Tag">
								</div>
								<div class="col-md-3 col-sm-3">
									<input type="text" class="form-control" placeholder="Location: City, State, Zip">
								</div>
								<div class="col-md-3 col-sm-3">
									<select class="selectpicker form-control" multiple title="All Categories">
									  <option>Information Technology</option>
									  <option>Mechanical</option>
									  <option>Hardware</option>
									</select>

								</div>
								<div class="col-md-2 col-sm-2">
									<button type="submit" class="btn btn-primary">Filter</button>
								</div>
							</form>
						</div>
					</div>
					<!-- Company Searrch Filter End -->
					
					<div class="item-click">
						<article>
							<div class="brows-job-list">
								<div class="col-md-1 col-sm-2 small-padding">
									<div class="brows-job-company-img">
										<a href="{{('job-details')}}"><img src="assets/img/com-1.jpg" class="img-responsive" alt="" /></a>
									</div>
								</div>
								<div class="col-md-6 col-sm-5">
									<div class="brows-job-position">
										<a href="job-apply-detail.html"><h3>Digital Marketing Manager</h3></a>
										<p>
											<span>Autodesk</span><span class="brows-job-sallery"><i class="fa fa-money"></i>$750 - 800</span>
											<span class="job-type cl-success bg-trans-success">Full Time</span>
										</p>
									</div>
								</div>
								<div class="col-md-3 col-sm-3">
									<div class="{{('job-details')}}">
										<p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
									</div>
								</div>
								<div class="col-md-2 col-sm-2">
									<div class="brows-job-link">
										<a href="{{('job-details')}}" class="btn btn-default">Apply Now</a>
									</div>
								</div>
							</div>
							<span class="tg-themetag tg-featuretag">Premium</span>
						</article>
					</div>
				
					<div class="item-click">
						<article>
							<div class="brows-job-list">
								<div class="col-md-1 col-sm-2 small-padding">
									<div class="brows-job-company-img">
										<a href="job-detail.html"><img src="assets/img/com-2.jpg" class="img-responsive" alt="" /></a>
									</div>
								</div>
								<div class="col-md-6 col-sm-5">
									<div class="brows-job-position">
										<a href="{{('job-details')}}"><h3>Compensation Analyst</h3></a>
										<p>
											<span>Google</span><span class="brows-job-sallery"><i class="fa fa-money"></i>$810 - 900</span>
											<span class="job-type bg-trans-warning cl-warning">Part Time</span>
										</p>
									</div>
								</div>
								<div class="col-md-3 col-sm-3">
									<div class="brows-job-location">
										<p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
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
					
					<div class="item-click">
						<article>
							<div class="brows-job-list">
								<div class="col-md-1 col-sm-2 small-padding">
									<div class="brows-job-company-img">
										<a href="{{('job-details')}}"><img src="assets/img/com-3.jpg" class="img-responsive" alt="" /></a>
									</div>
								</div>
								<div class="col-md-6 col-sm-5">
									<div class="brows-job-position">
										<a href="job-apply-detail.html"><h3>Investment Banker</h3></a>
										<p>
											<span>Honda</span><span class="brows-job-sallery"><i class="fa fa-money"></i>$800 - 910</span>
											<span class="job-type bg-trans-primary cl-primary">Freelancer</span>
										</p>
									</div>
								</div>
								<div class="col-md-3 col-sm-3">
									<div class="brows-job-location">
										<p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
									</div>
								</div>
								<div class="col-md-2 col-sm-2">
									<div class="brows-job-link">
										<a href="job-apply-detail.html" class="btn btn-default">Apply Now</a>
									</div>
								</div>
							</div>
							<span class="tg-themetag tg-featuretag">Premium</span>
						</article>
					</div>
					
					<div class="item-click">
						<article>
							<div class="brows-job-list">
								<div class="col-md-1 col-sm-2 small-padding">
									<div class="brows-job-company-img">
										<a href="job-detail.html"><img src="assets/img/com-3.jpg" class="img-responsive" alt="" /></a>
									</div>
								</div>
								<div class="col-md-6 col-sm-5">
									<div class="brows-job-position">
										<a href="job-apply-detail.html"><h3>Financial Analyst</h3></a>
										<p>
											<span>Microsoft</span><span class="brows-job-sallery"><i class="fa fa-money"></i>$580 - 600</span>
											<span class="job-type bg-trans-success cl-success">Full Time</span>
										</p>
									</div>
								</div>
								<div class="col-md-3 col-sm-3">
									<div class="brows-job-location">
										<p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
									</div>
								</div>
								<div class="col-md-2 col-sm-2">
									<div class="brows-job-link">
										<a href="job-apply-detail.html" class="btn btn-default">Apply Now</a>
									</div>
								</div>
							</div>
						</article>
					</div>
					
					<div class="item-click">
						<article>
							<div class="brows-job-list">
								<div class="col-md-1 col-sm-2 small-padding">
									<div class="brows-job-company-img">
										<a href="job-detail.html"><img src="assets/img/com-4.jpg" class="img-responsive" alt="" /></a>
									</div>
								</div>
								<div class="col-md-6 col-sm-5">
									<div class="brows-job-position">
										<a href="job-apply-detail.html"><h3>Service Representative</h3></a>
										<p>
											<span>Autodesk</span><span class="brows-job-sallery"><i class="fa fa-money"></i>$800 - 900</span>
											<span class="job-type bg-trans-denger cl-danger">Enternship</span>
										</p>
									</div>
								</div>
								<div class="col-md-3 col-sm-3">
									<div class="brows-job-location">
										<p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
									</div>
								</div>
								<div class="col-md-2 col-sm-2">
									<div class="brows-job-link">
										<a href="job-apply-detail.html" class="btn btn-default">Apply Now</a>
									</div>
								</div>
							</div>
							<span class="tg-themetag tg-featuretag">Premium</span>
						</article>
					</div>
					
					<div class="item-click">
						<article>
							<div class="brows-job-list">
								<div class="col-md-1 col-sm-2 small-padding">
									<div class="brows-job-company-img">
										<a href="job-detail.html"><img src="assets/img/com-5.jpg" class="img-responsive" alt="" /></a>
									</div>
								</div>
								<div class="col-md-6 col-sm-5">
									<div class="brows-job-position">
										<a href="job-apply-detail.html"><h3>Chief Executive Officer</h3></a>
										<p>
											<span>Google</span><span class="brows-job-sallery"><i class="fa fa-money"></i>$510 - 700</span>
											<span class="job-type bg-trans-success cl-success">Full Time</span>
										</p>
									</div>
								</div>
								<div class="col-md-3 col-sm-3">
									<div class="brows-job-location">
										<p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
									</div>
								</div>
								<div class="col-md-2 col-sm-2">
									<div class="brows-job-link">
										<a href="job-apply-detail.html" class="btn btn-default">Apply Now</a>
									</div>
								</div>
							</div>
						</article>
					</div>
					
					<div class="item-click">
						<article>
							<div class="brows-job-list">
								<div class="col-md-1 col-sm-2 small-padding">
									<div class="brows-job-company-img">
										<a href="job-detail.html"><img src="assets/img/com-6.jpg" class="img-responsive" alt="" /></a>
									</div>
								</div>
								<div class="col-md-6 col-sm-5">
									<div class="brows-job-position">
										<a href="job-apply-detail.html"><h3>Administrative Manager</h3></a>
										<p>
											<span>Honda</span><span class="brows-job-sallery"><i class="fa fa-money"></i>$700 - 800</span>
											<span class="job-type bg-trans-warning cl-warning">Part Time</span>
										</p>
									</div>
								</div>
								<div class="col-md-3 col-sm-3">
									<div class="brows-job-location">
										<p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
									</div>
								</div>
								<div class="col-md-2 col-sm-2">
									<div class="brows-job-link">
										<a href="job-apply-detail.html" class="btn btn-default">Apply Now</a>
									</div>
								</div>
							</div>
							<span class="tg-themetag tg-featuretag">Premium</span>
						</article>
					</div>
					
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
