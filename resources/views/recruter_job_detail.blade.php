@extends('layouts.master')
@Section('content')
			<!-- Title Header Start -->
			<section class="inner-header-title" style="background-image:url(assets/img/banner-10.jpg);">
				<div class="container">
					<h1>Detail d'emploie</h1>
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- Title Header End -->
			<!-- Job Detail Start -->
			<section class="detail-desc">
				<div class="container white-shadow">

					<div class="row">

						<div class="detail-pic">
<<<<<<< HEAD
							<img src="assets/img/com-2.jpg" class="img" alt="" />
							<a href="#" class="detail-edit" title="edit" ><i class="fa fa-pencil"></i></a>
=======
							<img src="{{URL::asset('assets/img/com-2.jpg')}}" class="img" alt="" />
>>>>>>> f1033ee7e93760fe79efccd77c7af975a4f4ddd3
						</div>

						<div class="detail-status">
							<span>il y a 2 jour </span>
						</div>

					</div>

					<div class="row bottom-mrg">
						<div class="col-md-8 col-sm-8">
							<div class="detail-desc-caption">
								<h4>Google</h4>
								<span class="designation">Software Development Company</span>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
								<ul>
									<li><i class="fa fa-briefcase"></i><span>Temps complet</span></li>
									<li><i class="fa fa-flask"></i><span>3 Anné d'xperience</span></li>
								</ul>
							</div>
						</div>

						<div class="col-md-4 col-sm-4">
							<div class="get-touch">
								<h4>Infos</h4>
								<ul>
									<li><i class="fa fa-map-marker"></i><span>Menlo Park, CA</span></li>
									<li><i class="fa fa-envelope"></i><span>danieldax704@gmail.com</span></li>
									<li><i class="fa fa-globe"></i><span>google.com</span></li>
									<li><i class="fa fa-phone"></i><span>0 123 456 7859</span></li>
									<li><i class="fa fa-money"></i><span>$1000 -$1200/Month</span></li>
								</ul>
							</div>
						</div>

					</div>

					<div class="row no-padd">
						<div class="detail pannel-footer">
							<div class="col-sm-2 col-md-2">
									<div class="row">
										<div class="col-sm-5 col-md-5">
										 <div class="input-group">
										 	<label for="switch">Status</label>
										 </div>
										</div>
									  <div class="col-sm-3 col-md-3">
											<label class="switch">
											<input type="checkbox" name="switch">
											<span class="slider round"></span>
											</label>
									  </div>
									</div>
							</div>

							<div class="col-md-10 col-sm-10">
								<form class="" action="{{url('/job-details/'.$offer->id)}}" method="post">
									@csrf
									@method('DELETE')
									<div class="detail-pannel-footer-btn pull-right">
											<a href="{{url('/job-details/'.$offer->id.'/delete')}}" class="footer-btn red-btn" title="">Supprimer </a>
									</div>

								<div class="detail-pannel-footer-btn pull-right">
									<a href="/job-details/{{$offer->id}}/edit" class="footer-btn grn-btn" title="">Modifier</a>
								</div>
									</form>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Job Detail End -->

			<!-- Job full detail Start -->
			<section class="full-detail-description full-detail">
				<div class="container">
					<div class="row row-bottom">
						<h2 class="detail-title">Responsibilité du poste</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					</div>

					<div class="row row-bottom">
						<h2 class="detail-title">Compétences requises</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						<ul class="detail-list">
							<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</li>

						</ul>
					</div>

					<div class="row row-bottom">
						<h2 class="detail-title">Diplôme requis</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						<ul class="detail-list">
							<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</li>

						</ul>
					</div>

				</div>
			</section>
			<!-- Job full detail End -->


@endsection
