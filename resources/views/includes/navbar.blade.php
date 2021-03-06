<nav class="navbar navbar-default navbar-fixed navbar-light white bootsnav">

  <div class="container">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
      <i class="fa fa-bars"></i>
    </button>
    <!-- Start Header Navigation -->
    <div class="navbar-header">
      <a class="navbar-brand" href="/">
        <img src="{{ asset('assets/img/logo-white.png')}} " class="logo logo-scrolled" alt="">
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
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

    </div><!-- /.navbar-collapse -->
  </div>
</nav>
