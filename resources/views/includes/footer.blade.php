<div class="clearfix"></div>

<!-- Footer Section Open -->
<footer>
    <div class="main_footer">
      <div class="container">
        <div class="row g-2 g-md-5">
          <div class="col-lg-4">
            <div class="logo">
              <a href="{{route('home')}}">
                <img src="{{Voyager::image(setting('site.logo'))}}" alt="{{setting('site.title')}}">
              </a>
            </div>
            <p>Our Mission, is to retain consistency in the provision of our high quality cleaning services.</p>
            <ul class="social_icons">
              @if(!empty(setting('site.facebook')))
              <li class="facebook">
                <a href="{{setting('site.facebook')}}" target="_blank"><i class="fab fa-facebook-f"></i></a>
              </li>
              @endif
              @if(!empty(setting('site.twitter')))
              <li class="twitter">
                <a href="{{setting('site.twitter')}}" target="_blank"><i class="fab fa-twitter"></i></a>
              </li>
              @endif
              @if(!empty(setting('site.instagram')))
              <li class="instagram">
                <a href="{{setting('site.instagram')}}" target="_blank"><i class="fab fa-instagram"></i></a>
              </li>
              @endif
              @if(!empty(setting('site.youtube')))
              <li class="youtube">
                <a href="{{setting('site.instagram')}}" target="_blank"><i class="fab fa-youtube"></i></a>
              </li>
              @endif
            </ul>
          </div>
          <div class="col-lg-4 offset-xl-2 col-sm-6">
            <h4>Contact info</h4>
            <div class="contact_details">
              @if(!empty(setting('site.address')))
              <p><a href><i class="fas fa-map-marker-alt"></i>{{setting('site.address')}}</a></p>
              @endif
              @if(!empty(setting('site.contact')))
              <p>
                <a href="tel:{{setting('site.contact')}}">
                  <i class="fas fa-phone-alt"></i>
                  {{setting('site.contact')}}
                </a>
                @if(!empty(setting('site.contact2')))
                ,
                <a href="tel:{{setting('site.contact2')}}">
                  {{setting('site.contact2')}}
                </a>
                @endif
                
              </p>
              @endif
              @if(!empty(setting('site.email')))
              <p><a href="mailto:{{setting('site.email')}}"><i class="far fa-envelope"></i>{{setting('site.email')}}</a></p>
              @endif
            </div>
          </div>
          <div class="col-lg-4 col-xl-2 col-sm-6">
            <h4>Quick Links</h4>
            {{menu('quick_links')}}
          </div>
        </div>
      </div>
    </div>
    <div class="secondary_footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <p class="copyright">Copyright © <?php echo date('Y') ?> | Green City Estates. All rights reserved.</p>
          </div>
          <div class="col-sm-6">
            <p class="link">Developed by <a href="">Krizmatic</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer Section Close -->

</div>

<div class="rn-progress-parent">
  <svg class="rn-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
    <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
  </svg>
</div>
@include('includes.footer-link')
@yield('js')
</body>
</html>