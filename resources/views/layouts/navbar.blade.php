
  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:{{__('lang.system.email')}}">{{__('lang.system.email')}}</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>{{__('lang.system.phone')}}</span></i>
      </div>

      <div class="cta d-none d-md-flex align-items-center">
        <a href="{{route('donation')}}" class="scrollto">{{__('lang.menu.donate_now')}}</a>
      </div>

    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <!--<h1><a href="{{route('home')}}">{{__('lang.system.app_name')}}</a></h1>-->
        <!-- Uncomment below if you prefer to use an image logo -->
       <a href="{{route('home')}}"><img src="assets/img/logo.jpeg" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto {{ (Route::currentRouteName() =='home') ? 'active' : '' }}"
             href="{{route('home')}}">{{__('lang.menu.home')}}</a></li>
          <li><a class="nav-link scrollto" href="#about">{{__('lang.menu.about_us')}}</a></li>
          <li><a class="nav-link  {{ (Route::currentRouteName() =='our-vision') ? 'active' : '' }}" href="our-vision">{{__('lang.menu.our_vision')}}</a></li>
          <li><a class="nav-link scrollto" href="{{route('our-vision')}}">{{__('lang.menu.our_projects')}}</a></li>
          <li><a class="nav-link scrollto" href="#pricing">{{__('lang.menu.our_team')}}</a></li>
          <li><a href="#">{{__('lang.menu.blog')}}</a></li>
          <li class="dropdown"><a href="#">
            <span>{{__('lang.menu.language')}}</span>
             <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="lang/en"></span>ENGLESH</a></li>
              <li><a href="lang/fr">FRANÇAIS</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">{{__('lang.menu.contact_us')}}</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
