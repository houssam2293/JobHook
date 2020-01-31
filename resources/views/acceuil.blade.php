<!doctype html>
<html lang="en">
<!-- index35:56-->
<head>
    <!-- Basic Page Needs==================================================-->
    <title>Job Hook</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSS==================================================-->
    <link rel="stylesheet" href="assets/plugins/css/plugins.css">
    <link href="assets/css/style.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" id="jssDefault" href="assets/css/colors/green-style.css">
</head>
<body>
<div class="wrapper">
    <nav class="navbar navbar-default navbar-fixed navbar-transparent white bootsnav">
        <div class="container">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"><i
                    class="fa fa-bars"></i></button>
            <div class="navbar-header"><a class="navbar-brand" href="acceuil"><img src="assets/img/logo-white.png"
                                                                                        class="logo logo-display"
                                                                                        alt=""><img
                    src="assets/img/logo-white.png" class="logo logo-scrolled" alt=""></a></div>
            <div class="collapse navbar-collapse" id="navbar-menu">
              @if (Auth::guest())
              <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                <li class="left-br"><a href="javascript:void(0)" data-toggle="modal" data-target="#signup"
                                       class="signin">Se Connecter</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                <li class="dropdown megamenu">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Inscription</a>
                  <ul class="dropdown-menu megamenu-content" role="menu">
                    <li>
                      <div class="row ">
                        <div class="col-menu ">
                          <!-- <h6 class="title">Candidat</h6> -->
                          <a class="title" href="candidate_signup">Candidat</a>
                        </div><br>
                        <div class="col-menu ">
                          <a class="title" href="company_signup">Recruteur</a>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
              @elseif (Auth::user()->type == 'R')
              <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                <li class="left-br"><a class="signin" href="{{ route('logout') }}"
                ="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Se deconnecter </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                </form></li>
              </ul>
              <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                <li class="dropdown megamenu">
                  <a href="{{ url('recruteurs')}}" class="dropdown-toggle" data-toggle="dropdown">Bienvenue {{ Auth::user()->recruteur->nom }}</a>
                </li>
              </ul>
              @elseif (Auth::user()->type == 'C')
              <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                <li class="left-br"><a class="signin" href="{{ route('logout') }}"
                ="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Se deconnecter </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                </form></li>
              </ul>
              <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                <li class="dropdown megamenu">
                  <a href="{{ url('candidats')}}" class="dropdown-toggle" data-toggle="dropdown">Bienvenue {{ Auth::user()->candidat->nom }}</a>
                </li>
              </ul>
              @endif
            </div>
        </div>
    </nav>
    <div class="clearfix"></div>
    <div class="banner" style="background-image:url(assets/img/banner-9.jpg);">
        <div class="container">
            <div class="banner-caption">
                <div class="col-md-12 col-sm-12 banner-text">
                    <h1>Plus de 8,000 Offres</h1>

                    <form class="form-horizontal" method="get" action="{{ url('search')}}">
                        <div class="col-md-5 no-padd">
                            <div class="input-group"><input value="{{ old('term') }}" name="term" type="text" class="form-control right-bor" id="joblist"
                                                            placeholder="Domaine, Competences, Companies"></div>
                        </div>
                        <div class="col-md-5 no-padd">
                            <div class="input-group">
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
                        </div>
                        <div class="col-md-2 no-padd">
                            <div class="input-group">
                                <button type="submit" class="btn btn-primary">Rechercher</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="company-brand">
            <div class="container">
                <div id="company-brands" class="owl-carousel">
                    <div class="brand-img"><img src="assets/img/microsoft-home.png" class="img-responsive" alt=""/>
                    </div>
                    <div class="brand-img"><img src="assets/img/img-home.png" class="img-responsive" alt=""/></div>
                    <div class="brand-img"><img src="assets/img/mothercare-home.png" class="img-responsive" alt=""/>
                    </div>
                    <div class="brand-img"><img src="assets/img/paypal-home.png" class="img-responsive" alt=""/></div>
                    <div class="brand-img"><img src="assets/img/serv-home.png" class="img-responsive" alt=""/></div>
                    <div class="brand-img"><img src="assets/img/xerox-home.png" class="img-responsive" alt=""/></div>
                    <div class="brand-img"><img src="assets/img/yahoo-home.png" class="img-responsive" alt=""/></div>
                    <div class="brand-img"><img src="assets/img/mothercare-home.png" class="img-responsive" alt=""/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <section>
        <div class="container">
            <div class="row">
                <div class="main-heading">
                    <p>200 Nouvelle Opportunités</p>

                    <h2>Nouveaux & Aleatoires <span>Offres</span></h2>
                </div>
            </div>
            <div class="row extra-mrg">
                <div class="col-md-3 col-sm-6">
                    <div class="grid-view brows-job-list">
                        <div class="brows-job-company-img"><img src="assets/img/com-1.jpg" class="img-responsive"
                                                                alt=""/></div>
                        <div class="brows-job-position">
                            <h3><a href="job-detail.html">Web Developer</a></h3>

                            <p><span>Google</span></p>
                        </div>
                        <div class="job-position"><span class="job-num">5 Position</span></div>
                        <div class="brows-job-type"><span class="part-time">Part Time</span></div>
                        <ul class="grid-view-caption">
                            <li>
                                <div class="brows-job-location">
                                    <p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
                                </div>
                            </li>
                            <li>
                                <p><span class="brows-job-sallery"><i class="fa fa-money"></i>$110 - 200</span></p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="grid-view brows-job-list">
                        <div class="brows-job-company-img"><img src="assets/img/com-2.jpg" class="img-responsive"
                                                                alt=""/></div>
                        <div class="brows-job-position">
                            <h3><a href="job-detail.html">Web Developer</a></h3>

                            <p><span>Google</span></p>
                        </div>
                        <div class="job-position"><span class="job-num">5 Position</span></div>
                        <div class="brows-job-type"><span class="freelanc">Freelancer</span></div>
                        <ul class="grid-view-caption">
                            <li>
                                <div class="brows-job-location">
                                    <p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
                                </div>
                            </li>
                            <li>
                                <p><span class="brows-job-sallery"><i class="fa fa-money"></i>$110 - 200</span></p>
                            </li>
                        </ul>
                        <span class="tg-themetag tg-featuretag">Premium</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="grid-view brows-job-list">
                        <div class="brows-job-company-img"><img src="assets/img/com-3.jpg" class="img-responsive"
                                                                alt=""/></div>
                        <div class="brows-job-position">
                            <h3><a href="job-detail.html">Web Developer</a></h3>

                            <p><span>Google</span></p>
                        </div>
                        <div class="job-position"><span class="job-num">5 Position</span></div>
                        <div class="brows-job-type"><span class="enternship">Enternship</span></div>
                        <ul class="grid-view-caption">
                            <li>
                                <div class="brows-job-location">
                                    <p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
                                </div>
                            </li>
                            <li>
                                <p><span class="brows-job-sallery"><i class="fa fa-money"></i>$110 - 200</span></p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="grid-view brows-job-list">
                        <div class="brows-job-company-img"><img src="assets/img/com-4.jpg" class="img-responsive"
                                                                alt=""/></div>
                        <div class="brows-job-position">
                            <h3><a href="job-detail.html">Web Developer</a></h3>

                            <p><span>Google</span></p>
                        </div>
                        <div class="job-position"><span class="job-num">5 Position</span></div>
                        <div class="brows-job-type"><span class="full-time">Full Time</span></div>
                        <ul class="grid-view-caption">
                            <li>
                                <div class="brows-job-location">
                                    <p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
                                </div>
                            </li>
                            <li>
                                <p><span class="brows-job-sallery"><i class="fa fa-money"></i>$110 - 200</span></p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="grid-view brows-job-list">
                        <div class="brows-job-company-img"><img src="assets/img/com-5.jpg" class="img-responsive"
                                                                alt=""/></div>
                        <div class="brows-job-position">
                            <h3><a href="job-detail.html">Web Developer</a></h3>

                            <p><span>Google</span></p>
                        </div>
                        <div class="job-position"><span class="job-num">5 Position</span></div>
                        <div class="brows-job-type"><span class="part-time">Part Time</span></div>
                        <ul class="grid-view-caption">
                            <li>
                                <div class="brows-job-location">
                                    <p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
                                </div>
                            </li>
                            <li>
                                <p><span class="brows-job-sallery"><i class="fa fa-money"></i>$110 - 200</span></p>
                            </li>
                        </ul>
                        <span class="tg-themetag tg-featuretag">Premium</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="grid-view brows-job-list">
                        <div class="brows-job-company-img"><img src="assets/img/com-6.jpg" class="img-responsive"
                                                                alt=""/></div>
                        <div class="brows-job-position">
                            <h3><a href="job-detail.html">Web Developer</a></h3>

                            <p><span>Google</span></p>
                        </div>
                        <div class="job-position"><span class="job-num">5 Position</span></div>
                        <div class="brows-job-type"><span class="full-time">Full Time</span></div>
                        <ul class="grid-view-caption">
                            <li>
                                <div class="brows-job-location">
                                    <p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
                                </div>
                            </li>
                            <li>
                                <p><span class="brows-job-sallery"><i class="fa fa-money"></i>$110 - 200</span></p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="grid-view brows-job-list">
                        <div class="brows-job-company-img"><img src="assets/img/com-7.jpg" class="img-responsive"
                                                                alt=""/></div>
                        <div class="brows-job-position">
                            <h3><a href="job-detail.html">Web Developer</a></h3>

                            <p><span>Google</span></p>
                        </div>
                        <div class="job-position"><span class="job-num">5 Position</span></div>
                        <div class="brows-job-type"><span class="freelanc">Freelancer</span></div>
                        <ul class="grid-view-caption">
                            <li>
                                <div class="brows-job-location">
                                    <p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
                                </div>
                            </li>
                            <li>
                                <p><span class="brows-job-sallery"><i class="fa fa-money"></i>$110 - 200</span></p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="grid-view brows-job-list">
                        <div class="brows-job-company-img"><img src="assets/img/com-1.jpg" class="img-responsive"
                                                                alt=""/></div>
                        <div class="brows-job-position">
                            <h3><a href="job-detail.html">Web Developer</a></h3>

                            <p><span>Google</span></p>
                        </div>
                        <div class="job-position"><span class="job-num">5 Position</span></div>
                        <div class="brows-job-type"><span class="enternship">Enternship</span></div>
                        <ul class="grid-view-caption">
                            <li>
                                <div class="brows-job-location">
                                    <p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
                                </div>
                            </li>
                            <li>
                                <p><span class="brows-job-sallery"><i class="fa fa-money"></i>$110 - 200</span></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <section class="video-sec dark" id="video" style="background-image:url(assets/img/banner-10.jpg);">
        <div class="container">
            <div class="row">
                <div class="main-heading">
                    <p>Comment marche JobHook</p>

                    <h2>Regardez notre <span>vidéo</span></h2>
                </div>
            </div>
            <div class="video-part"><a href="https://www.youtube.com" data-toggle="modal" data-target="#my-video" class="video-btn"><i
                    class="fa fa-play"></i></a></div>
        </div>
    </section>
    <div class="clearfix"></div>
    <section class="how-it-works">
        <div class="container">
            <div class="row" data-aos="fade-up">
                <div class="col-md-12">
                    <div class="main-heading">
                        <p>Processuss de travail</p>

                        <h2>Comment ca <span>Marche</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="working-process">
                        <span class="process-img"><img src="assets/img/step-1.png" class="img-responsive" alt=""/><span
                                class="process-num">01</span></span>
                        <h4>Creer un compte</h4>

                        <p>Post a job to tell us about your project. We'll quickly match you with the right freelancers
                            find place best.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="working-process">
                        <span class="process-img"><img src="assets/img/step-2.png" class="img-responsive" alt=""/><span
                                class="process-num">02</span></span>
                        <h4>Recherchez les offres</h4>

                        <p>Post a job to tell us about your project. We'll quickly match you with the right freelancers
                            find place best.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="working-process">
                        <span class="process-img"><img src="assets/img/step-3.png" class="img-responsive" alt=""/><span
                                class="process-num">03</span></span>
                        <h4>Enregistrer et Postulez</h4>

                        <p>Post a job to tell us about your project. We'll quickly match you with the right freelancers
                            find place best.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <section class="testimonial" id="testimonial">
        <div class="container">
            <div class="row">
                <div class="main-heading">
                    <p>Que disent nos Cliens</p>

                    <h2>Nos Histoires de <span>Succés</span></h2>
                </div>
            </div>
            <div class="row">
                <div id="client-testimonial-slider" class="owl-carousel">
                    <div class="client-testimonial">
                        <div class="pic"><img src="assets/img/client-1.jpg" alt=""></div>
                        <p class="client-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor et dolore magna aliqua.</p>

                        <h3 class="client-testimonial-title">Lacky Mole</h3>
                        <ul class="client-testimonial-rating">
                            <li class="fa fa-star-o"></li>
                            <li class="fa fa-star-o"></li>
                            <li class="fa fa-star"></li>
                        </ul>
                    </div>
                    <div class="client-testimonial">
                        <div class="pic"><img src="assets/img/client-2.jpg" alt=""></div>
                        <p class="client-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor et dolore magna aliqua.</p>

                        <h3 class="client-testimonial-title">Karan Wessi</h3>
                        <ul class="client-testimonial-rating">
                            <li class="fa fa-star-o"></li>
                            <li class="fa fa-star"></li>
                            <li class="fa fa-star"></li>
                        </ul>
                    </div>
                    <div class="client-testimonial">
                        <div class="pic"><img src="assets/img/client-3.jpg" alt=""></div>
                        <p class="client-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor et dolore magna aliqua.</p>

                        <h3 class="client-testimonial-title">Roul Pinchai</h3>
                        <ul class="client-testimonial-rating">
                            <li class="fa fa-star-o"></li>
                            <li class="fa fa-star-o"></li>
                            <li class="fa fa-star"></li>
                        </ul>
                    </div>
                    <div class="client-testimonial">
                        <div class="pic"><img src="assets/img/client-1.jpg" alt=""></div>
                        <p class="client-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor et dolore magna aliqua.</p>

                        <h3 class="client-testimonial-title">Adam Jinna</h3>
                        <ul class="client-testimonial-rating">
                            <li class="fa fa-star-o"></li>
                            <li class="fa fa-star-o"></li>
                            <li class="fa fa-star"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="download-app" style="background-image:url(assets/img/banner-7.jpg);">
        <div class="container">
            <div class="col-md-5 col-sm-5 hidden-xs"><img src="assets/img/iphone.png" alt="iphone"
                                                          class="img-responsive"/></div>
            <div class="col-md-7 col-sm-7">
                <div class="app-content">
                    <h2>Telechargez Notre Application</h2>
                    <h4>meilleurs Opportunités</h4>

                    <p>Aliquam vestibulum cursus felis. In iaculis iaculis sapien ac condimentum. Vestibulum congue
                        posuere lacus, id tincidunt nisi porta sit amet. Suspendisse et sapien varius, pellentesque dui
                        non, semper orci. Curabitur blandit, diam ut ornare ultricies.</p><a href="#"
                                                                                               class="btn call-btn"><i
                        class="fa fa-android"></i>Telechargez</a>
                </div>
            </div>
        </div>
    </section>
@include('includes.footer')
