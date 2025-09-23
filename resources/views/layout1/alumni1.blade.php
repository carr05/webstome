<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Alumni - College Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: College
  * Template URL: https://bootstrapmade.com/college-bootstrap-education-template/
  * Updated: Jun 19 2025 with Bootstrap v5.3.6
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="alumni-page">

  @include('layout1.navbar.main')

  <main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Alumni</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Alumni</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Alumni Section -->
    <section id="alumni" class="alumni section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row mb-5">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="alumni-intro">
              <h2>Our Alumni Network</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.</p>
              <div class="alumni-stats d-flex flex-wrap">
                <div class="stat-item">
                  <span class="stat-number">25k+</span>
                  <span class="stat-label">Alumni Worldwide</span>
                </div>
                <div class="stat-item">
                  <span class="stat-number">118</span>
                  <span class="stat-label">Countries</span>
                </div>
                <div class="stat-item">
                  <span class="stat-number">65+</span>
                  <span class="stat-label">Years of Excellence</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="alumni-image">
              <img src="assets/img/education/campus-8.webp" alt="Alumni gathering" class="img-fluid rounded">
            </div>
          </div>
        </div>

        <div class="row mb-5">
          <div class="col-12 text-center mb-4" data-aos="fade-up" data-aos-delay="200">
            <h3>Success Stories</h3>
            <p class="lead">Meet some of our distinguished alumni making a difference around the world</p>
          </div>

          <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
            <div class="alumni-card">
              <div class="alumni-image">
                <img src="assets/img/person/person-m-4.webp" alt="Alumni" class="img-fluid">
              </div>
              <div class="alumni-content">
                <h4>Dr. Michael Roberts</h4>
                <p class="alumni-class">Class of 2007</p>
                <p class="alumni-position">Chief Medical Officer, Global Health Initiative</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Sed tempus justo ac magna auctor, vel volutpat nisl mollis.</p>
                <a href="#" class="read-more">Read full story <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
            <div class="alumni-card">
              <div class="alumni-image">
                <img src="assets/img/person/person-f-6.webp" alt="Alumni" class="img-fluid">
              </div>
              <div class="alumni-content">
                <h4>Sarah Chen, Ph.D.</h4>
                <p class="alumni-class">Class of 2010</p>
                <p class="alumni-position">Senior Researcher at NASA</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Sed tempus justo ac magna auctor, vel volutpat nisl mollis et pulvinar dapibus leo.</p>
                <a href="#" class="read-more">Read full story <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="500">
            <div class="alumni-card">
              <div class="alumni-image">
                <img src="assets/img/person/person-m-9.webp" alt="Alumni" class="img-fluid">
              </div>
              <div class="alumni-content">
                <h4>James Wilson</h4>
                <p class="alumni-class">Class of 2012</p>
                <p class="alumni-position">Founder &amp; CEO, GreenTech Solutions</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Sed tempus justo ac magna auctor, vel volutpat nisl mollis et pulvinar.</p>
                <a href="#" class="read-more">Read full story <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>

          <div class="col-12 text-center mt-3" data-aos="fade-up" data-aos-delay="600">
            <a href="#" class="btn btn-primary">View More Success Stories</a>
          </div>
        </div>

        <div class="row mb-5 alumni-events-section">
          <div class="col-12 mb-4 text-center" data-aos="fade-up" data-aos-delay="200">
            <h3>Upcoming Alumni Events</h3>
            <p class="lead">Connect with fellow graduates at these exciting events</p>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="event-card">
              <div class="event-date">
                <span class="event-day">15</span>
                <span class="event-month">MAR</span>
              </div>
              <div class="event-details">
                <h4>Annual Alumni Reunion</h4>
                <p><i class="bi bi-geo-alt"></i> Main Campus, Grand Hall</p>
                <p><i class="bi bi-clock"></i> 6:00 PM - 10:00 PM</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. In hac habitasse platea dictumst.</p>
                <a href="#" class="btn btn-outline-primary">Register Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="event-card">
              <div class="event-date">
                <span class="event-day">22</span>
                <span class="event-month">APR</span>
              </div>
              <div class="event-details">
                <h4>Career Networking Night</h4>
                <p><i class="bi bi-geo-alt"></i> Downtown Convention Center</p>
                <p><i class="bi bi-clock"></i> 7:00 PM - 9:30 PM</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. In hac habitasse platea dictumst. Mauris eu risus sed.</p>
                <a href="#" class="btn btn-outline-primary">Register Now</a>
              </div>
            </div>
          </div>

          <div class="col-12 text-center mt-4" data-aos="fade-up" data-aos-delay="500">
            <a href="#" class="btn btn-link">View All Events <i class="bi bi-calendar-check"></i></a>
          </div>
        </div>

        <div class="row get-involved-section">
          <div class="col-12 text-center mb-4" data-aos="fade-up" data-aos-delay="200">
            <h3>Get Involved</h3>
            <p class="lead">Ways to stay connected and give back to your alma mater</p>
          </div>

          <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
            <div class="involvement-card">
              <div class="involvement-icon">
                <i class="bi bi-hand-thumbs-up"></i>
              </div>
              <h4>Mentor a Student</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Sed nec justo ac magna auctor, vel volutpat nisl mollis.</p>
              <a href="#" class="btn btn-sm btn-outline-primary mt-2">Learn More</a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
            <div class="involvement-card">
              <div class="involvement-icon">
                <i class="bi bi-award"></i>
              </div>
              <h4>Scholarship Fund</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Sed nec justo ac magna auctor, vel volutpat nisl mollis.</p>
              <a href="#" class="btn btn-sm btn-outline-primary mt-2">Donate Now</a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="500">
            <div class="involvement-card">
              <div class="involvement-icon">
                <i class="bi bi-people"></i>
              </div>
              <h4>Alumni Association</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Sed nec justo ac magna auctor, vel volutpat nisl mollis.</p>
              <a href="#" class="btn btn-sm btn-outline-primary mt-2">Join Today</a>
            </div>
          </div>

          <div class="col-12 mt-4" data-aos="fade-up" data-aos-delay="600">
            <div class="donation-banner">
              <div class="row align-items-center">
                <div class="col-lg-8 mb-3 mb-lg-0">
                  <h3>Support the Future Generation</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Aenean sollicitudin, lorem quis bibendum auctor.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                  <a href="#" class="btn btn-primary btn-lg">Make a Donation</a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Alumni Section -->

  </main>

 @include('layout1.footer.main')

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>