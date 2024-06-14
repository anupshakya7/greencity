<!-- Navbar Menu Start -->
<header class="greencity-header header-sticky">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-lg-6 col-xl-2 col-md-6 col-6">
          <div class="logo">
            <a href="{{route('home')}}">
              <img class="lozad logo-light" data-src="{{Voyager::image(setting('site.logo'))}}" alt="{{setting('site.title')}}" />
            </a>
          </div>
        </div>
        <div class="col-lg-8 d-none d-xl-block">
          <nav class="mainmenu-nav d-none d-lg-block">
            <ul class="mainmenu">
              <li>
                <a href="{{route('home')}}" class="active">Home</a>
              </li>
              <li>
                <a href="about.html">About Us</a>
              </li>

              <li class="has-droupdown">
                <a href="service.html">Our Services</a>
                <ul class="submenu">
                  <li><a href="Service-1.html">Service 1</a></li>
                  <li><a href="Service-2.html">Service 2</a></li>
                  <li><a href="Service-3.html">Service 3</a></li>
                  <li><a href="Service-4.html">Service 4</a></li>
                  <li><a href="Service-5.html">Service 5</a></li>
                  <li><a href="Service-5.html">Service 6</a></li>
                  <li><a href="Service-5.html">Service 7</a></li>
                </ul>
              </li>
              <li>
                <a href="#">Testimonials</a>
              </li>
              </li>
              <li>
                <a href="#">Our projects</a>
              </li>
              </li>
              <li>
                <a href="#">Gallery</a>
              </li>
            </ul>
          </nav>
        </div>
        <div class="col-xl-2 col-6">
          <div class="header-right d-flex justify-content-end">
            <div class="header-img">
              <img src="img/36-years.png" alt="">
              <div class="hamberger d-block d-xl-none">
                <button class="hamberger-button">
                  <i class="fas fa-bars"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</header>
<!-- Navbar Menu End -->