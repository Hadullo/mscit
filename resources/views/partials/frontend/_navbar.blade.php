
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
      <div class="container d-flex justify-content-between align-items-center">

        <div class="logo">

          <!-- Uncomment below if you prefer to use an image logo -->
         <a href="index.html"><img src="assets/front/img/logo.png" alt="" class="img-fluid"></a>
        </div>

        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="active" href="{{ route('home.index')}}">Home</a></li>

            <li class="dropdown"><a href="#"><span>Projects</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="{{ route('phd.index') }}"> PHD in IT</a></li>
                <li><a href="{{ route('msc.index') }}"> Masters in IT</a></li>
                    <li><a href="{{ route('btit.index') }}">BTIT</a></li>
                    <li><a href="{{ route('bsit.index') }}">BSIT</a></li>
                    <li><a href="{{ route('bscs.index') }}">BSCS</a></li>
                    <li><a href="{{ route('dcs.index') }}">DCS</a></li>
                    <li><a href="{{ route('dict.index') }}">DICT</a></li>

              </ul>
            </li>
            <li><a href="">Contact</a></li>
            <li><a href="{{ route('register') }}">Register</a></li>
            <li><a href="{{ route('login') }}">Login</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

      </div>
    </header><!-- End Header -->
