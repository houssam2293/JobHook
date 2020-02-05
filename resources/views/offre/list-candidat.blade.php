@extends('layouts.master')
@Section('content')
<section class="inner-header-title" style="background-image:url(assets/img/banner-2.jpg);">
  <div class="container">
  <h1> </h1>
</div>
      </section>
<!-- Employee list start -->
			<section class="manage-employee gray">
				<div class="container">
					<!-- search filter -->
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="search-filter">

								<div class="col-md-4 col-sm-5">
									<div class="filter-form">
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Search…">
											<span class="input-group-btn">
												<button type="button" class="btn btn-default">Go</button>
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

					<!-- Manage Employee -->
					<div class="row">
            @forelse($postulers as $postuler)
						<div class="col-md-4 col-sm-6">
							<div class="jn-employee">
								<a href="#" class="mail-form"><i class="fa fa-envelope"></i></a>
								<div class="pull-right">
									<div class="btn-group action-btn">
										<button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<i class="fa fa-ellipsis-v"></i>
										</button>
										<ul class="dropdown-menu pull-right" role="menu">
											<li><a href="#">Préférée</a>
											</li>
											<li><a href="#">Supprimer</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="employee-caption">
                  <a href="/detail-candidat/{{$postuler->cv->id}}">
									<div class="employee-caption-pic">
										<img src="{{URL::asset($postuler->cv->candidat->photo)}}" class="img-responsive" onerror="if (this.src != '{{URL::asset('assets/img/default-1.png')}}') this.src = '{{URL::asset('assets/img/default-1.png')}}';" alt="" />
									</div>
									<h4>{{$postuler->cv->candidat->nom}} {{$postuler->cv->candidat->prenom}}</h4>
									<span class="designation">{{$postuler->cv->titre}}</span>
                </a>
									<ul class="employee-social">
										<li><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
										<li><a href="#" title=""><i class="fa fa-twitter"></i></a></li>
										<li><a href="#" title=""><i class="fa fa-google-plus"></i></a></li>
										<li><a href="#" title=""><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#" title=""><i class="fa fa-instagram"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
            @empty
            <h4>Aucun condidat n'a postuler</h4>
            @endforelse

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
			<!-- Employee List End -->


@endsection
