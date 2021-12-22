
  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
      </div>

      <div class="cta d-none d-md-flex align-items-center">
        <a href="#donate" class="scrollto">{{__('lang.menu.donate_now')}}</a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.html">{{__('lang.system.app_name')}}</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">{{__('lang.menu.home')}}</a></li>
          <li><a class="nav-link scrollto" href="#about">{{__('lang.menu.about_us')}}</a></li>
          <li><a class="nav-link scrollto" href="#services">{{__('lang.menu.our_projects')}}</a></li>
          <li><a class="nav-link scrollto" href="#pricing">{{__('lang.menu.our_team')}}</a></li>
          <li><a href="blog.html">BLOG</a></li>
          <li class="dropdown"><a href="#"><span>LANGUAGE</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">ENGLISH</a></li>
              <li><a href="#">FRANÇAIS</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">{{__('lang.menu.contact_us')}}</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
