@extends('layout.web')
@section('content')
 <!-- Slider Section Start -->
 <section class="slider">
    @foreach($banners as $banner)
    <div class="slider-bg equal_height" style="background-image:url({{Voyager::image($banner->banner)}});">
      <div class="container">
        <div class="inner"  data-sal-delay="150" data-sal="slide-up" data-sal-duration="1000">
          <h1> {!! $banner->title !!}</h1>
          @if(!empty($banner->links))
          <a href="{{$banner->links}}" class="btn">ENQuIRE NOW</a>
          @endif
        </div>
      </div>
    </div>
    @endforeach
  </section>
  <!-- Slider Section End -->
  <div class="clearfix"></div>

  <div class="clearfix"></div>
  <!-- About Section Start -->
  <section class="block_content m-60">
    <div class="container-fluid">
      <div class="row align-items-center g-0">
        <div class="col-sm-3">
          <div class="inner_box equal_height" data-sal-delay="150" data-sal="slide-up" data-sal-duration="1000">
            <h3>Experience</h3>
            <p>36 years of experience, 25+ completed projects and 3 upcoming projects our journey has been a glorious
              one till now. We are proud to cater to 11000+ happy customers and bring their dream spaces to reality by
              delivering what we promised and stood true to being the Signature of Trust.</p>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="inner_box equal_height" data-sal-delay="250" data-sal="slide-up" data-sal-duration="1000">
            <h3>Cost Effective
            </h3>
            <p>GREEN CITY Estates seeks to provide their clients with real value for their money with a profit sufficient to ensure the well-being of their employees.</p>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="inner_box equal_height" data-sal-delay="350" data-sal="slide-up" data-sal-duration="1000">
            <h3>Honest & Dependable</h3>
            <p>GREEN CITY Estates was founded upon integrity, strong work ethic, our abilities, our people and our partners to provide our clients with the highest standards of building workmanship.</p>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="inner_box equal_height" data-sal-delay="450" data-sal="slide-up" data-sal-duration="1000">
            <h3>Important Principles</h3>
            <ul class="icon">
              <li> Strategic Choice of the Project Location</li>
              <li>Clear Title Properties</li>
              <li>Quality in the Layout Development</li>
              <li>Service from Trusted Promoters</li>
              <li>Maintain customer confidence</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- About Section End -->
  <div class="clearfix"></div>
  <!-- Projects Section Start -->
  <section class="our_projects m-60">
    <div class="container-fluid">
      <div class="title_section" data-sal-delay="150" data-sal="slide-up" data-sal-duration="2000">
        <p class="title_head">OUR PROJECTS</p>
        <h2>36+ years’ experience</h2>
      </div>
      <div class="row g-2 g-md-5">
        <div class="col-md-3 col-sm-6" data-sal-delay="150" data-sal="slide-up" data-sal-duration="1000">
          <div class="project_inner">
            <a href="#">
              <img data-src="img/fortune.jpg" class="lozad equal_height" alt="">
              <div class="project_details">
                <p>Ongoing Projects</p>
                <h3>Fortune Retreat</h3>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-3 col-sm-6" data-sal-delay="300" data-sal="slide-up" data-sal-duration="1000">
          <div class="project_inner">
            <a href="#">
              <img data-src="img/model-county.jpg" class="lozad equal_height" alt="">
              <div class="project_details">
                <p>Ongoing Projects</p>
                <h3>Fortune Retreat</h3>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-3 col-sm-6" data-sal-delay="450" data-sal="slide-up" data-sal-duration="1000">
          <div class="project_inner">
            <a href="#">
              <img data-src="img/pic3.jpg" class="lozad equal_height" alt="">
              <div class="project_details">
                <p>Ongoing Projects</p>
                <h3>Fortune Retreat</h3>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-3 col-sm-6" data-sal-delay="600" data-sal="slide-up" data-sal-duration="1000">
          <div class="project_inner">
            <a href="#">
              <img src="img/fortune.jpg" class="equal_height" alt="">
              <div class="project_details">
                <p>Ongoing Projects</p>
                <h3>Fortune Retreat</h3>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Projects Section Close -->
  <div class="clearfix"></div>
  <!-- feature Section Open -->
  <section class="feature m-60" style="background-image:url(img/bg1.jpg); background-size: cover;">
    <div class="container">
      <div class="title_section" data-sal-delay="150" data-sal="slide-up" data-sal-duration="2000">
        <h2 class="text-white">ADVANTAGES &amp; FEATURES</h2>
        <p class="text-white">Several prestigious layouts were designed and built with recreation facilities and
          greenery in 30 years.</p>
      </div>
      <div class="row g-4">
        <div class="col-md-4 col-lg-2 col-6" data-sal-delay="150" data-sal="zoom-in" data-sal-duration="1000">
          <div class="icon-box equal_height">
            <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" width="300" height="300" version="1.1"
              xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev/svgjs">
              <g transform="matrix(1,0,0,1,0,0)">
                <g id="line">
                  <path
                    d="m90.9082 378.6035a9.55389 9.55389 0 0 0 -12.84765 4.123v.001a9.53833 9.53833 0 1 0 12.84765-4.124z"
                    fill="#4d8e35ff" data-original-color="#000000ff" stroke="none" />
                  <path
                    d="m115.22266 394.2661a9.54228 9.54228 0 1 0 12.00781 6.17724 9.54615 9.54615 0 0 0 -12.00781-6.17724z"
                    fill="#4d8e35ff" data-original-color="#000000ff" stroke="none" />
                  <path
                    d="m249.1123 244.8784a8.00119 8.00119 0 0 0 12.165.19629c2.36133-2.67627 57.95411-65.89648 68.36426-96.39844 12.03613-35.2666 9.749-64.085-6.79785-85.65478-18.85543-24.58106-51.77144-32.01367-68.09957-30.91747-30.83594 2.0625-53.332 13.33935-66.8623 33.51709-15.68067 23.38379-15.49024 55.41553-8.34571 76.78711 10.15039 30.36034 67.1543 99.54003 69.57617 102.4702zm-47.9414-170.34619c10.625-15.8457 29.00976-24.74951 54.64158-26.46387 16.42182-1.10039 41.40885 7.83826 54.33693 24.69141 13.08594 17.05908 14.54883 40.86231 4.34961 70.74854-6.90625 20.23535-40.666 62.31591-59.02929 83.835-18.80762-23.40577-53.93164-69.58692-60.75977-90.00782-4.40527-13.17826-8.00196-41.23539 6.46094-62.80326z"
                    fill="#4d8e35ff" data-original-color="#000000ff" stroke="none" />
                  <path
                    d="m453.63452 309.0703c-158.081-70.4457-129.30664-57.46728-158.27514-70.9375a7.99979 7.99979 0 1 0 -6.7461 14.50781l6.15045 2.85986-38.69787 19.88062-40.33441-20.72144 6.25683-2.9331a7.99979 7.99979 0 1 0 -6.79-14.48731l-157.0518 71.92876a8.04753 8.04753 0 0 0 -4.67871 7.27784v56.73877a8 8 0 0 0 16 0v-43.63531l176.34668 90.59509v38.751l-93.75-48.162a7.99966 7.99966 0 1 0 -7.31054 14.23145l105.40527 54.15039a8.07912 8.07912 0 0 0 7.24609.0332l196.71778-98.81494a8.0002 8.0002 0 0 0 4.40918-7.14892v-56.73878a8.06983 8.06983 0 0 0 -4.89771-7.37549zm-199.77905 97.21728-45.472-23.36035 47.80872-24.56091 45.91028 23.68591zm-108.79553-55.89184 47.94287-24.62989 45.72019 23.58789-47.84588 24.57984zm168.15234-86.38574 49.07019 21.86744-42.89282 22.03526-45.81757-23.5382zm-57.14642 29.35816 45.81756 23.53808-45.67535 23.46485-45.72028-23.58789zm63.71771 79.80249-46.10632-23.78687 45.7124-23.48388 46.71875 24.001zm64.02783-32.16235-46.9154-24.10207 44.13549-22.6737 50.81714 22.64587zm-145.25177-56.63368-45.541 23.396-43.77851-22.586 48.1366-21.96692zm-107.83655 9.26013 44.81055 23.11853-47.98 24.649-47.74992-24.53071zm131.09137 165.39368v-38.83356l180.71778-90.77787v38.83349z"
                    fill="#4d8e35ff" data-original-color="#000000ff" stroke="none" />
                  <path
                    d="m256 147.89061a33.396 33.396 0 1 0 -33.39551-33.396 33.4338 33.4338 0 0 0 33.39551 33.396zm0-50.792a17.396 17.396 0 1 1 -17.39551 17.396 17.41546 17.41546 0 0 1 17.39551-17.39599z"
                    fill="#4d8e35ff" data-original-color="#000000ff" stroke="none" />
                </g>
              </g>
            </svg>
            <h4 class="title">Clear Title</h4>
          </div>
        </div>
        <div class="col-md-4 col-lg-2 col-6" data-sal-delay="300" data-sal="zoom-in" data-sal-duration="1000">
          <div class="icon-box equal_height">
            <svg id="Layer_1" enable-background="new 0 0 512 512" viewBox="0 0 512 512"
              xmlns="http://www.w3.org/2000/svg" width="300" height="300" version="1.1"
              xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev/svgjs">
              <g transform="matrix(1,0,0,1,0,0)">
                <path
                  d="m460.681 33.862h-14.961c-6.919 0-12.795 4.513-14.864 10.747-35.664-2.468-59.872-12.06-84.714-25.611-6.046-3.299-12.744-4.3-19.156-3.006-.125-.143-.24-.291-.37-.43-4.571-4.874-15.457-10.288-37.78 6.217-5.966-13.089-15.577-20.782-26.227-20.782s-20.26 7.692-26.226 20.782c-22.325-16.509-33.208-11.091-37.779-6.218-9.465 10.091-3.777 30.548 14.074 51.501-3.97 2.69-6.585 7.236-6.585 12.383v6.824c0 3.134.974 6.043 2.629 8.448-15.078 12.006-28.958 27.061-40.248 43.701-14.113-13.584-33.27-21.963-54.358-21.963-43.264 0-78.462 35.198-78.462 78.461s35.198 78.461 78.462 78.461c10.295 0 20.124-2.013 29.141-5.634 6.834 24.787 20.756 43.82 41.517 56.628 20.148 12.431 46.337 18.734 77.837 18.734 80.133 0 124.264-40.697 124.264-114.594 0-15.205-2.792-30.933-8.13-46.516h16.169c13.175 0 26.178-3.508 37.604-10 2.784 4.362 7.656 7.269 13.204 7.269h14.961c8.639 0 15.666-7.027 15.666-15.666v-114.07c-.002-8.639-7.03-15.666-15.668-15.666zm-251.192-7.995c.918-.517 7.436-.393 20.406 9.829 3.084 2.432 7.212 3.248 11.048 2.18 3.737-1.04 6.641-3.653 7.964-7.167 3.37-8.938 8.748-14.713 13.701-14.713s10.331 5.775 13.702 14.713c1.325 3.516 4.229 6.128 7.967 7.167 3.834 1.067 7.963.251 11.043-2.179 12.971-10.223 19.489-10.347 20.35-9.88 1.816 2.21-.509 15.939-16.506 33.762-1.517 1.691-3.091 3.335-4.696 4.918h-63.718c-1.604-1.582-3.179-3.227-4.698-4.919-15.995-17.82-18.32-31.549-16.563-33.711zm11.604 60.402-.005-6.771 83.038-.053.054 6.77zm-170.44 108.648c0-34.993 28.469-63.461 63.462-63.461 34.992 0 63.46 28.469 63.46 63.461s-28.468 63.461-63.46 63.461c-34.993 0-63.462-28.469-63.462-63.461zm211.956 133.19c-41.073 0-92.118-11.872-105.717-67.467 21.46-14.017 35.683-38.233 35.683-65.723 0-16.57-5.177-31.946-13.979-44.625 12.5-19.355 28.796-36.58 46.427-49.076h68.194c-14.21 9.032-18.92 27.807-10.423 42.526 5.856 10.143 16.519 15.819 27.466 15.819 5.366 0 10.801-1.364 15.772-4.234l17.284-9.98c18.456 26.639 28.556 55.945 28.556 83.165.001 82.316-59.417 99.595-109.263 99.595zm110.187-161.111c-4.48-9.932-9.989-19.713-16.453-29.17l33.828-19.531c3.587-2.071 4.816-6.658 2.745-10.245-2.072-3.587-6.66-4.817-10.245-2.745l-64.138 37.031c-7.95 4.591-18.156 1.857-22.748-6.095-4.59-7.952-1.855-18.156 6.096-22.748l43.357-25.033c3.587-2.071 4.816-6.658 2.745-10.245-2.072-3.588-6.66-4.817-10.245-2.745l-18.612 10.746v-6.772c0-5.147-2.615-9.694-6.586-12.384 11.24-13.193 17.651-26.183 18.5-36.518 2.662-.289 5.401.249 7.918 1.622 26.65 14.537 52.645 24.815 91.095 27.423v96.242c-10.347 7.31-22.419 11.166-35.141 11.166h-22.116zm88.551-3.397c0 .348-.317.666-.666.666h-14.961c-.349 0-.667-.317-.667-.666v-114.071c0-.349.318-.666.667-.666h14.961c.349 0 .666.317.666.666zm-68.846 194.881c-7.635-2.046-15.588-1.008-22.395 2.923l-62.074 35.84c-.084-2.486-.439-4.999-1.11-7.502-4.758-17.753-23.069-28.327-40.825-23.57l-26.38 7.069c-9.7 2.6-18.646 1.422-27.342-3.599l-35.167-20.304c-14.629-8.447-29.021-3.045-45.683 3.209-8.896 3.339-18.811 7.054-30.385 9.383l-.373-1.39c-.851-3.173-2.89-5.829-5.742-7.476-2.854-1.647-6.173-2.087-9.346-1.237l-19.399 5.198c-6.561 1.758-10.469 8.526-8.711 15.089l34.768 129.754c.85 3.174 2.89 5.829 5.743 7.477 1.902 1.098 4.012 1.659 6.146 1.659 1.067 0 2.142-.14 3.199-.423l19.399-5.198c6.13-1.643 9.942-7.661 8.98-13.798 27.468-5.82 45.021-.824 68.591 5.897 4.365 1.245 8.879 2.532 13.707 3.826 4.28 1.146 8.502 1.719 12.657 1.719 8.06 0 15.861-2.156 23.305-6.453l145.561-84.043c6.807-3.929 11.682-10.296 13.727-17.929 2.044-7.632 1.006-15.584-2.924-22.392-3.927-6.807-10.294-11.683-17.927-13.729zm-286.367 136.917-33.381-124.577 14.22-3.811 33.381 124.578zm292.73-104.678c-1.008 3.762-3.399 6.894-6.736 8.82l-145.562 84.043c-7.817 4.513-15.856 5.572-24.579 3.236-4.712-1.263-9.167-2.534-13.476-3.762-24.964-7.12-45.054-12.839-76.522-5.999l-26.96-100.616c12.407-2.592 22.983-6.554 31.769-9.852 16.045-6.023 24.796-8.947 32.911-4.263l35.167 20.304c12.148 7.014 25.177 8.728 38.725 5.098l26.38-7.069c9.758-2.618 19.837 3.199 22.453 12.963 2.616 9.765-3.199 19.837-12.963 22.453l-38.576 10.336c-6.34 1.7-12.521 1.759-18.371.181-4.002-1.078-8.116 1.289-9.194 5.288-1.079 4 1.289 8.116 5.288 9.195 4.113 1.109 8.312 1.664 12.57 1.664 4.476 0 9.018-.613 13.59-1.838l38.576-10.336c7.451-1.997 13.629-6.387 17.948-12.116l76.305-44.056c3.338-1.927 7.249-2.433 11.011-1.424 3.763 1.008 6.896 3.401 8.822 6.738 1.926 3.339 2.432 7.249 1.424 11.012zm-103.934-147.863c0 14.818-10.725 27.178-24.82 29.725v8.36c0 4.142-3.357 7.5-7.5 7.5s-7.5-3.358-7.5-7.5v-8.821c-13.038-3.344-22.705-15.196-22.705-29.262 0-4.142 3.357-7.5 7.5-7.5s7.5 3.358 7.5 7.5c0 8.384 6.82 15.204 15.204 15.204h2.117c8.384 0 15.204-6.821 15.204-15.205 0-8.383-6.82-15.204-15.204-15.204h-4.233c-16.654 0-30.204-13.55-30.204-30.205 0-14.818 10.726-27.178 24.821-29.724v-8.361c0-4.142 3.357-7.5 7.5-7.5s7.5 3.358 7.5 7.5v8.823c13.039 3.344 22.704 15.195 22.704 29.262 0 4.142-3.357 7.5-7.5 7.5s-7.5-3.358-7.5-7.5c0-8.383-6.821-15.204-15.205-15.204h-2.116c-8.384 0-15.204 6.821-15.204 15.204 0 8.384 6.82 15.205 15.204 15.205h4.233c16.654-.001 30.204 13.548 30.204 30.203zm-148.615-69.533-53.794 53.794c-1.465 1.464-3.385 2.197-5.304 2.197-1.92 0-3.839-.732-5.304-2.197-2.929-2.929-2.929-7.678 0-10.606l53.794-53.794c2.928-2.928 7.676-2.93 10.607 0 2.93 2.928 2.93 7.677.001 10.606zm-34.626-2.224c0-11.796-9.597-21.393-21.393-21.393s-21.393 9.597-21.393 21.393 9.597 21.393 21.393 21.393 21.393-9.597 21.393-21.393zm-27.785 0c0-3.525 2.868-6.393 6.393-6.393s6.393 2.868 6.393 6.393-2.868 6.393-6.393 6.393-6.393-2.868-6.393-6.393zm54.029 26.243c-11.797 0-21.394 9.597-21.394 21.393 0 5.714 2.226 11.087 6.267 15.127s9.413 6.266 15.127 6.265c11.796 0 21.393-9.597 21.393-21.393s-9.597-21.392-21.393-21.392zm0 27.785c-1.708 0-3.313-.665-4.521-1.873-1.208-1.207-1.873-2.812-1.873-4.52 0-3.525 2.868-6.393 6.394-6.393 3.524 0 6.393 2.868 6.393 6.393s-2.869 6.393-6.393 6.393z"
                  fill="#4d8e35ff" data-original-color="#000000ff" stroke="none" />
              </g>
            </svg>
            <h4 class="title">Loan/EMI Options</h4>
          </div>
        </div>
        <div class="col-md-4 col-lg-2 col-6" data-sal-delay="450" data-sal="zoom-in" data-sal-duration="1000">
          <div class="icon-box equal_height">
            <svg version="1.1" id="svg5124" xml:space="preserve" width="300" height="300"
              viewBox="0 0 682.66669 682.66669" xmlns="http://www.w3.org/2000/svg"
              xmlns:svg="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
              xmlns:svgjs="http://svgjs.dev/svgjs">
              <g transform="matrix(1,0,0,1,0,0)">
                <defs id="defs5128">
                  <clipPath clipPathUnits="userSpaceOnUse" id="clipPath5138">
                    <path d="M 0,512 H 512 V 0 H 0 Z" id="path5136" fill="#4d8e35ff" data-original-color="#000000ff"
                      stroke="none" />
                  </clipPath>
                </defs>
                <g id="g5130" transform="matrix(1.3333333,0,0,-1.3333333,0,682.66667)">
                  <g id="g5132">
                    <g id="g5134" clip-path="url(#clipPath5138)">
                      <g id="g5140" transform="translate(341.0913,7.5)">
                        <path
                          d="m 0,0 h -300.585 c -9.742,0 -17.639,7.896 -17.639,17.639 v 427.013 c 0,9.743 7.897,17.639 17.639,17.639 H 0 c 9.741,0 17.638,-7.896 17.638,-17.639 V 17.639 C 17.638,7.896 9.741,0 0,0 Z"
                          style="stroke-linecap: round; stroke-linejoin: round; stroke-miterlimit: 10; stroke-dasharray: 399, 35, 1000, 0; stroke-dashoffset: 0; stroke-opacity: 1;"
                          id="path5142" fill="none" stroke="#4d8e35ff" data-original-stroke-color="#000000ff"
                          stroke-width="15" data-original-stroke-width="15" />
                      </g>
                      <g id="g5144" transform="translate(378.5742,504.5)">
                        <path
                          d="m 0,0 h -300.585 c -9.741,0 -17.638,-7.896 -17.638,-17.639 v -17.07 h 283.514 c 9.741,0 17.638,-7.896 17.638,-17.639 V -462.291 H 0 c 9.742,0 17.638,7.896 17.638,17.639 V -17.639 C 17.638,-7.896 9.742,0 0,0 Z"
                          style="stroke-linecap: round; stroke-linejoin: round; stroke-miterlimit: 10; stroke-dasharray: 504, 35, 400, 0; stroke-dashoffset: 0; stroke-opacity: 1;"
                          id="path5146" fill="none" stroke="#4d8e35ff" data-original-stroke-color="#000000ff"
                          stroke-width="15" data-original-stroke-width="15" />
                      </g>
                      <path d="m 430.289,308.768 h 58.842 V 133.386 h -58.842 z"
                        style="stroke-linecap: round; stroke-linejoin: round; stroke-miterlimit: 10; stroke-dasharray: none; stroke-opacity: 1;"
                        id="path5148" fill="none" stroke="#4d8e35ff" data-original-stroke-color="#000000ff"
                        stroke-width="15" data-original-stroke-width="15" />
                      <g id="g5150" transform="translate(430.2891,346.2891)">
                        <path
                          d="M 0,0 V -37.521 H 58.842 V 0 c 0,5.2 -4.215,9.415 -9.414,9.415 H 9.415 C 4.215,9.415 0,5.2 0,0 Z"
                          style="stroke-linecap: round; stroke-linejoin: round; stroke-miterlimit: 10; stroke-dasharray: none; stroke-opacity: 1;"
                          id="path5152" fill="none" stroke="#4d8e35ff" data-original-stroke-color="#000000ff"
                          stroke-width="15" data-original-stroke-width="15" />
                      </g>
                      <g id="g5154" transform="translate(489.1323,133.3857)">
                        <path d="m 0,0 h -58.843 l 24.611,-49.307 c 2.343,-4.696 7.278,-4.696 9.622,0 z"
                          style="stroke-linecap: round; stroke-linejoin: round; stroke-miterlimit: 10; stroke-dasharray: none; stroke-opacity: 1;"
                          id="path5156" fill="none" stroke="#4d8e35ff" data-original-stroke-color="#000000ff"
                          stroke-width="15" data-original-stroke-width="15" />
                      </g>
                      <g id="g5158" transform="translate(115.0508,47.7422)">
                        <path
                          d="m 0,0 h -41.333 c -4.418,0 -8,3.582 -8,8 v 41.333 c 0,4.419 3.582,8 8,8 H 0 c 4.418,0 8,-3.581 8,-8 V 8 C 8,3.582 4.418,0 0,0 Z"
                          style="stroke-linecap: round; stroke-linejoin: round; stroke-miterlimit: 10; stroke-dasharray: none; stroke-opacity: 1;"
                          id="path5160" fill="none" stroke="#4d8e35ff" data-original-stroke-color="#000000ff"
                          stroke-width="15" data-original-stroke-width="15" />
                      </g>
                      <g id="g5162" transform="translate(156.2915,76.4092)">
                        <path d="M 0,0 H 159.333"
                          style="stroke-linecap: round; stroke-linejoin: round; stroke-miterlimit: 10; stroke-dasharray: none; stroke-opacity: 1;"
                          id="path5164" fill="none" stroke="#4d8e35ff" data-original-stroke-color="#000000ff"
                          stroke-width="15" data-original-stroke-width="15" />
                      </g>
                      <g id="g5166" transform="translate(208.6772,276.5889)">
                        <path
                          d="m 0,0 h -132.959 c -5.523,0 -10,4.478 -10,10 v 132.96 c 0,5.522 4.477,10 10,10 H 0 c 5.523,0 10,-4.478 10,-10 V 10 C 10,4.478 5.523,0 0,0 Z"
                          style="stroke-linecap: round; stroke-linejoin: round; stroke-miterlimit: 10; stroke-dasharray: none; stroke-opacity: 1;"
                          id="path5168" fill="none" stroke="#4d8e35ff" data-original-stroke-color="#000000ff"
                          stroke-width="15" data-original-stroke-width="15" />
                      </g>
                      <g id="g5170" transform="translate(168.9663,375.7637)">
                        <path
                          d="m 0,0 c 0,-14.783 -11.985,-26.769 -26.769,-26.769 -14.784,0 -26.769,11.986 -26.769,26.769 0,14.784 11.985,26.77 26.769,26.77 C -11.985,26.77 0,14.784 0,0 Z"
                          style="stroke-linecap: round; stroke-linejoin: round; stroke-miterlimit: 10; stroke-dasharray: none; stroke-opacity: 1;"
                          id="path5172" fill="none" stroke="#4d8e35ff" data-original-stroke-color="#000000ff"
                          stroke-width="15" data-original-stroke-width="15" />
                      </g>
                      <g id="g5174" transform="translate(113.0054,303.6055)">
                        <path
                          d="m 0,0 h 58.384 v 16.197 c 0,16.123 -13.07,29.193 -29.192,29.193 v 0 C 13.07,45.39 0,32.32 0,16.197 Z"
                          style="stroke-linecap: round; stroke-linejoin: round; stroke-miterlimit: 10; stroke-dasharray: 0, 35, 600, 0; stroke-dashoffset: 0; stroke-opacity: 1;"
                          id="path5176" fill="none" stroke="#4d8e35ff" data-original-stroke-color="#000000ff"
                          stroke-width="15" data-original-stroke-width="15" />
                      </g>
                      <g id="g5178" transform="translate(249.3369,392.9326)">
                        <path d="M 0,0 H 66.288"
                          style="stroke-linecap: round; stroke-linejoin: round; stroke-miterlimit: 10; stroke-dasharray: none; stroke-opacity: 1;"
                          id="path5180" fill="none" stroke="#4d8e35ff" data-original-stroke-color="#000000ff"
                          stroke-width="15" data-original-stroke-width="15" />
                      </g>
                      <g id="g5182" transform="translate(249.3369,350.4121)">
                        <path d="M 0,0 H 66.288"
                          style="stroke-linecap: round; stroke-linejoin: round; stroke-miterlimit: 10; stroke-dasharray: none; stroke-opacity: 1;"
                          id="path5184" fill="none" stroke="#4d8e35ff" data-original-stroke-color="#000000ff"
                          stroke-width="15" data-original-stroke-width="15" />
                      </g>
                      <g id="g5186" transform="translate(249.3369,305.0586)">
                        <path d="M 0,0 H 66.288"
                          style="stroke-linecap: round; stroke-linejoin: round; stroke-miterlimit: 10; stroke-dasharray: none; stroke-opacity: 1;"
                          id="path5188" fill="none" stroke="#4d8e35ff" data-original-stroke-color="#000000ff"
                          stroke-width="15" data-original-stroke-width="15" />
                      </g>
                      <g id="g5190" transform="translate(65.7178,232.6348)">
                        <path d="M 0,0 H 249.907"
                          style="stroke-linecap: round; stroke-linejoin: round; stroke-miterlimit: 10; stroke-dasharray: none; stroke-opacity: 1;"
                          id="path5192" fill="none" stroke="#4d8e35ff" data-original-stroke-color="#000000ff"
                          stroke-width="15" data-original-stroke-width="15" />
                      </g>
                      <g id="g5194" transform="translate(65.7178,190.1152)">
                        <path d="M 0,0 H 249.907"
                          style="stroke-linecap: round; stroke-linejoin: round; stroke-miterlimit: 10; stroke-dasharray: none; stroke-opacity: 1;"
                          id="path5196" fill="none" stroke="#4d8e35ff" data-original-stroke-color="#000000ff"
                          stroke-width="15" data-original-stroke-width="15" />
                      </g>
                      <g id="g5198" transform="translate(65.7178,147.5947)">
                        <path d="M 0,0 H 249.907"
                          style="stroke-linecap: round; stroke-linejoin: round; stroke-miterlimit: 10; stroke-dasharray: none; stroke-opacity: 1;"
                          id="path5200" fill="none" stroke="#4d8e35ff" data-original-stroke-color="#000000ff"
                          stroke-width="15" data-original-stroke-width="15" />
                      </g>
                      <g id="g5202" transform="translate(69.5386,89.5703)">
                        <path d="M 0,0 18.661,-28.436 72.659,29.008"
                          style="stroke-linecap: round; stroke-linejoin: round; stroke-miterlimit: 10; stroke-dasharray: none; stroke-opacity: 1;"
                          id="path5204" fill="none" stroke="#4d8e35ff" data-original-stroke-color="#000000ff"
                          stroke-width="15" data-original-stroke-width="15" />
                      </g>
                    </g>
                  </g>
                </g>
              </g>
            </svg>
            <h4 class="title">Hassle Free Registration</h4>
          </div>
        </div>
        <div class="col-md-4 col-lg-2 col-6" data-sal-delay="600" data-sal="zoom-in" data-sal-duration="1000">
          <div class="icon-box equal_height">
            <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2"
              viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" width="300" height="300" version="1.1"
              xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev/svgjs">
              <g transform="matrix(1,0,0,1,0,0)">
                <path
                  d="m29 29s-21.98 0-26 0c-.53 0-1.039-.211-1.414-.586s-.586-.884-.586-1.414c0-3.904 0-18.096 0-22 0-1.105.895-2 2-2h8.667c.432 0 .853.14 1.2.4l3.466 2.6h9.667c1.105 0 2 .895 2 2v3h1c1.105 0 2 .895 2 2v14c0 1.104-.895 2-2 2zm-3-18v-3h-9.667c-.432 0-.853-.141-1.2-.4l-3.466-2.6h-8.667v22h2v-14c0-1.105.895-2 2-2zm-10 5h-3c-1.657 0-3 1.343-3 3v2c0 1.657 1.343 3 3 3h3c.552 0 1-.448 1-1s-.448-1-1-1c0 0-1.608 0-3 0-.552 0-1-.448-1-1v-2c0-.552.448-1 1-1h3c.552 0 1-.448 1-1s-.448-1-1-1zm4 8h3.002c1.657 0 3-1.343 3-3v-2c0-1.657-1.343-3-3-3h-3.002c-.552 0-1 .448-1 1s.448 1 1 1h3.002c.552 0 1 .448 1 1v2c0 .552-.448 1-1 1h-3.002c-.552 0-1 .448-1 1s.448 1 1 1zm-6-2.999h8c.552 0 1-.448 1-1s-.448-1-1-1h-8c-.552 0-1 .448-1 1s.448 1 1 1z"
                  fill="#4d8e35ff" data-original-color="#000000ff" stroke="none" />
              </g>
            </svg>
            <h4 class="title">Complete link Documents</h4>
          </div>
        </div>
        <div class="col-md-4 col-lg-2 col-6" data-sal-delay="750" data-sal="zoom-in" data-sal-duration="1000">
          <div class="icon-box equal_height">
            <svg id="glipy" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" width="300" height="300"
              version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev/svgjs">
              <g transform="matrix(1,0,0,1,0,0)">
                <path d="m59.00774 58h-53v-53a1 1 0 0 0 -2 0v54a1.003 1.003 0 0 0 1 1h54a1.00012 1.00012 0 0 0 0-2z"
                  fill="#4d8e35ff" data-original-color="#000000ff" stroke="none" />
                <path d="m20.008 56h10v-16.71l-.67-.42-9.33 7.75z" fill="#4d8e35ff" data-original-color="#000000ff"
                  stroke="none" />
                <path d="m34.88775 42.32-2.88-1.79v15.47h10v-15.86l-2.56 1.97a4.03511 4.03511 0 0 1 -4.56.21z"
                  fill="#4d8e35ff" data-original-color="#000000ff" stroke="none" />
                <path d="m44.00774 56h10v-25.05c-1.37152 1.04578-8.8153 6.7591-10 7.66z" fill="#4d8e35ff"
                  data-original-color="#000000ff" stroke="none" />
                <path
                  d="m29.58782 32.03986a2.07582 2.07582 0 0 0 -1.95007.45013c-2.655 2.21527-9.32147 7.73419-11.91 9.88a2.01512 2.01512 0 0 0 1.28015 3.53991c.95257.11878 2.30218-1.38074 2.99987-1.89l9.17-7.61c1.73431 1.11579 4.99609 3.09949 6.77 4.22a2.02351 2.02351 0 0 0 2.28-.11c1.36669-1.06128 4.45306-3.389 5.78-4.43006 1.10041-.84875 10.0293-7.67846 11.04-8.4599a2.00941 2.00941 0 0 0 3.93-.16015l.57-3.95984a2.00557 2.00557 0 0 0 -1.69-2.27l-3.97-.57a2.00183 2.00183 0 0 0 -1.21 3.74l-15.79 12.1c-1.75832-1.03729-5.57412-3.59625-7.29995-4.47009z"
                  fill="#4d8e35ff" data-original-color="#000000ff" stroke="none" />
                <path
                  d="m20.00774 31.5a11.51447 11.51447 0 0 0 11.5-11.5c-.6333-15.256-22.369-15.25159-23 .00006a11.51446 11.51446 0 0 0 11.5 11.49994zm7-7.5a3.0002 3.0002 0 0 1 -6-.00012 3.0002 3.0002 0 0 1 6 .00012zm-3.71-8.71a1.00429 1.00429 0 0 1 1.42 1.42l-7.99994 8a1.00434 1.00434 0 0 1 -1.42-1.42zm-7.29-2.29a3.0002 3.0002 0 0 1 -.00012 6 3.0002 3.0002 0 0 1 .00012-6z"
                  fill="#4d8e35ff" data-original-color="#000000ff" stroke="none" />
                <path d="m16.00774 17a1.0002 1.0002 0 0 0 -.00006-2 1.0002 1.0002 0 0 0 .00006 2z" fill="#4d8e35ff"
                  data-original-color="#000000ff" stroke="none" />
                <path d="m23.00774 24a1.0002 1.0002 0 0 0 2-.00006 1.0002 1.0002 0 0 0 -2 .00006z" fill="#4d8e35ff"
                  data-original-color="#000000ff" stroke="none" />
              </g>
            </svg>
            <h4 class="title">High Growth Corridors</h4>
          </div>
        </div>
        <div class="col-md-4 col-lg-2 col-6" data-sal-delay="900" data-sal="zoom-in" data-sal-duration="1000">
          <div class="icon-box equal_height">
            <svg id="Capa_1" enable-background="new 0 0 512 512" height="300" viewBox="0 0 512 512" width="300"
              xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
              xmlns:svgjs="http://svgjs.dev/svgjs">
              <g transform="matrix(1,0,0,1,0,0)">
                <g clip-rule="evenodd" fill-rule="evenodd">
                  <path
                    d="m256 379.586h88.276c4.875 0 8.828-3.952 8.828-8.828v-143.712l-79.625-50.935-17.567-11.299-97.015 62.234v143.713c0 4.875 3.952 8.828 8.828 8.828h88.275zm0-97.103c-17.763.022-32.768-13.178-35.009-30.8-2.242-17.621 8.979-34.158 26.182-38.585v-10.063c0-4.875 3.952-8.828 8.828-8.828 1.763-.018 3.488.506 4.943 1.501 2.407 1.667 3.855 4.399 3.884 7.327v10.063c15.549 4.015 26.431 18.016 26.483 34.075 0 4.875-3.952 8.828-8.828 8.828-4.875 0-8.828-3.952-8.828-8.828 0-9.751-7.904-17.655-17.655-17.655s-17.655 7.905-17.655 17.655 7.904 17.655 17.655 17.655c17.763-.022 32.768 13.178 35.009 30.8 2.242 17.621-8.979 34.158-26.182 38.585v10.063c0 4.875-3.952 8.828-8.828 8.828s-8.828-3.952-8.828-8.828v-10.063c-15.549-4.015-26.431-18.016-26.483-34.074 0-4.875 3.952-8.828 8.828-8.828 4.875 0 8.828 3.952 8.828 8.828 0 9.751 7.904 17.655 17.655 17.655s17.655-7.904 17.655-17.655-7.903-17.656-17.654-17.656z"
                    fill="#4d8e35ff" data-original-color="#000000ff" stroke="none" />
                  <path
                    d="m390.065 196.882-129.518-80.817c-1.363-.853-2.938-1.306-4.546-1.307-1.606-.001-3.18.446-4.546 1.289l-129.536 80.975c-4.03 2.517-5.345 7.773-2.975 11.891l5.041 8.739c1.203 2.096 3.212 3.606 5.559 4.18s4.827.161 6.861-1.144l110.133-70.753c5.77-3.677 13.148-3.677 18.918 0l110.177 70.621c2.039 1.308 4.525 1.72 6.877 1.141s4.363-2.099 5.561-4.204l4.988-8.748c2.348-4.116 1.027-9.353-2.994-11.863z"
                    fill="#4d8e35ff" data-original-color="#000000ff" stroke="none" />
                  <path
                    d="m344.276 123.586h-8.828c-4.875 0-8.828 3.952-8.828 8.828v4.131l26.483 16.543v-20.674c0-4.876-3.952-8.828-8.827-8.828z"
                    fill="#4d8e35ff" data-original-color="#000000ff" stroke="none" />
                  <path
                    d="m363.757 458.423c-5.002-3.217-11.273-3.748-16.745-1.419-91.79 41.611-200.109 15.738-263.186-62.864s-64.879-189.953-4.378-270.554c0 9.751 7.904 17.655 17.655 17.655s17.655-7.904 17.655-17.655v-44.138c-.029-9.739-7.917-17.626-17.655-17.655h-44.137c-9.751 0-17.655 7.904-17.655 17.655s7.904 17.655 17.655 17.655h2.383c-73.348 92.625-73.78 223.415-1.046 316.522s199.739 124.346 307.364 75.599c6.306-2.901 10.342-9.213 10.328-16.154-.151-5.945-3.236-11.43-8.238-14.647z"
                    fill="#4d8e35ff" data-original-color="#000000ff" stroke="none" />
                  <path
                    d="m459.034 414.897h-2.383c73.348-92.625 73.78-223.415 1.046-316.522s-199.739-124.347-307.363-75.6c-6.306 2.901-10.342 9.213-10.328 16.154.151 5.945 3.235 11.43 8.237 14.647s11.273 3.748 16.745 1.419c91.79-41.611 200.109-15.738 263.186 62.864s64.879 189.953 4.378 270.554c0-9.751-7.904-17.655-17.655-17.655s-17.655 7.905-17.655 17.655v44.138c.029 9.739 7.917 17.626 17.655 17.655h44.138c9.751 0 17.655-7.905 17.655-17.655s-7.905-17.654-17.656-17.654z"
                    fill="#4d8e35ff" data-original-color="#000000ff" stroke="none" />
                </g>
              </g>
            </svg>
            <h4 class="title">Resale</h4>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- feature Section Close -->
  <div class="clearfix"></div>
  <!-- About Section Open -->
  <section class="about m-60">
    <div class="container">
      <div class="row g-2 g-md-5 align-items-center">
        <div class="col-sm-6" data-sal-delay="300" data-sal="slide-right" data-sal-duration="2000">
          <img data-src="img/pic3.jpg" class="lozad" alt="">
        </div>
        <div class="col-sm-6" data-sal-delay="300" data-sal="slide-left" data-sal-duration="2000">
          <h2>Welcome to Green City Estates</h2>
          <p>Green City Estates is a leading real estate development company in Hyderabad. Being in the business for
            more than three decades, Green City Estates is a brand that customers reckon with when buying and
            investing in plots in Hyderabad.</p>
          <p>We have blossomed into a multifaceted organization specializing in well-crafted gated community plot
            developments in the most sought-after locations of the city like Gachibowli and Adibatla.</p>
          <a href="" class="btn">View More</a>

        </div>
      </div>
    </div>
  </section>
  <!-- About Section Close -->
  <div class="clearfix"></div>
  <!-- Testimonials Section Open -->
  <section class="testimonials p-40 bg-grey">
    <div class="container">
      <div class="title_section"  data-sal-delay="150" data-sal="slide-up" data-sal-duration="2000">
        <p>Feedback</p>
        <h2>Our Testimonials</h2>
      </div>
      <div class="testimonials_list"  data-sal-delay="150" data-sal="zoom-in" data-sal-duration="2000">
        @foreach($testimonials as $testimonial)
        <div class="list_item equal_height">
          <div class="inner">
            {!! $testimonial->description !!}
            <div class="testi-author">
              <img data-src="{{Voyager::image($testimonial->image)}}" class="lozad" alt="{{$testimonial->name}}">
              <div class="testi-info">
                <h6>{{$testimonial->name}}</h6><span>{{$testimonial->designation}}</span>
              </div>
            </div>
            <div class="qt-img">
              <img data-src="{{asset('img/quotation-mark.png')}}" class="lozad" alt="{{$testimonial->name}} quotation">
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  <!-- Testimonials Section Close -->
  <div class="clearfix"></div>
  <!-- Blogs Section Open -->
  <section class="blogs m-60">
    <div class="container">
      <div class="title_section" data-sal-delay="150" data-sal="slide-up" data-sal-duration="2000">
        <p>Our Blog</p>
        <h2>Our Journal</h2>
      </div>
      <div class="row g-2 g-md-5">
        <?php
          $delayTime = 150;  
        ?>
        @foreach($blogs as $blog)
        <?php
           $date = Carbon\Carbon::parse($blog->created_at);

           $day = $date->day;
           $month = $date->format('F');
           $year = $date->year;
        ?>
        <div class="col-sm-4"  data-sal-delay="{{$delayTime}}" data-sal="slide-up" data-sal-duration="2000">
          <div class="post-inner">
            <div class="post-thumbnail">
              <a href="">
                <figure>
                  <img data-src="{{Voyager::image($blog->image)}}" class="lozad" alt="{{$blog->title}}">
                </figure>
              </a>
            </div>
            <div class="post-content">
              <div class="post_date">
                <p><i class="far fa-calendar-alt"></i>{{$month}} {{$day}}, {{$year}}</p>
              </div>
              <h4><a href="">{{$blog->title}}</a></h4>
              {!! $blog->description !!}
              <a href="" class="btn_transparent">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
            </div>
          </div>
        </div>
        <?php
          $delayTime = $delayTime+150;
        ?>
        @endforeach
      </div>
    </div>
  </section>
  <!-- Blogs Section Close -->
  <div class="clearfix"></div>
  <!-- Partners Section Open -->
  <section class="parnters m-40">
    <div class="container">
      <div class="partners_list"  data-sal-delay="150" data-sal="slide-up" data-sal-duration="2000">
        <div class="partner_item">
          <img src="img/1.png" alt="">
        </div>
        <div class="partner_item">
          <img src="img/2.png" alt="">
        </div>
        <div class="partner_item">
          <img src="img/3.png" alt="">
        </div>
        <div class="partner_item">
          <img src="img/4.png" alt="">
        </div>
        <div class="partner_item">
          <img src="img/5.png" alt="">
        </div>
        <div class="partner_item">
          <img src="img/7.png" alt="">
        </div>

        <div class="partner_item">
          <img src="img/9.png" alt="">
        </div>

        <div class="partner_item">
          <img src="img/10.png" alt="">
        </div>
      </div>
    </div>
  </section>
  <!-- Partners Section Close -->
@endsection