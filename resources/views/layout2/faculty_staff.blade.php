<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - MySchool Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ asset('assets2/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets2/img/apple-touch-icon.png') }}" rel="apple-touch-icon">  

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets2/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets2/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets2/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets2/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('assets2/css/main.css') }}" rel="stylesheet">

  


  <!-- =======================================================
  * Template Name: MySchool
  * Template URL: https://bootstrapmade.com/myschool-bootstrap-school-template/
  * Updated: Jul 28 2025 with Bootstrap v5.3.7
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  
</head>

<body class="faculty-staff-page">

   @include('layout2.navbar.main')

  <main class="main">

    <!-- Page Title -->
    <div class="page-title">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1 class="heading-title">Faculty Staff</h1>
              <p class="mb-0">
                Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo
                odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum
                debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat
                ipsum dolorem.
              </p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Faculty Staff</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Faculty  Staff Section -->
    <section id="faculty--staff" class="faculty--staff section">

      <div class="container">

        <div class="row justify-content-center mb-5">
          <div class="col-lg-6">
            <div class="faculty-search-bar">
              <div class="search-input-wrapper">
                <i class="bi bi-search search-icon"></i>
                <input type="text" class="search-input" placeholder="Find faculty by name or expertise...">
              </div>
            </div>
          </div>
        </div>

        <div class="faculty-showcase">
          <div class="row g-5">
            <!-- Featured Faculty Member -->
            <div class="col-12 mb-5">
              <div class="featured-faculty">
                <div class="row align-items-center">
                  <div class="col-lg-4">
                    <div class="featured-image">
                      <img src="assets/img/person/person-f-2.webp" class="img-fluid" alt="Featured Faculty">
                    </div>
                  </div>
                  <div class="col-lg-8">
                    <div class="featured-content">
                      <div class="faculty-badge">Featured Faculty</div>
                      <h2>Dr. Elena Rodriguez</h2>
                      <p class="title">Dean of Engineering &amp; Professor of Mechanical Engineering</p>
                      <p class="biography">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                      <div class="expertise-areas">
                        <span>Robotics</span>
                        <span>Renewable Energy</span>
                        <span>Sustainable Design</span>
                      </div>
                      <div class="contact-actions">
                        <a href="#" class="contact-btn">Contact</a>
                        <div class="social-links">
                          <a href="#"><i class="bi bi-linkedin"></i></a>
                          <a href="#"><i class="bi bi-envelope"></i></a>
                          <a href="#"><i class="bi bi-globe"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Faculty List -->
            <div class="col-lg-6">
              <div class="faculty-profile">
                <div class="profile-image">
                  <img src="assets/img/person/person-m-9.webp" class="img-fluid" alt="Faculty">
                </div>
                <div class="profile-content">
                  <h3>Dr. Marcus Thompson</h3>
                  <p class="position">Professor of Computer Science</p>
                  <div class="department-info">School of Technology</div>
                  <div class="research-focus">
                    <span>Artificial Intelligence</span>
                    <span>Data Science</span>
                  </div>
                </div>
                <div class="profile-actions">
                  <a href="#" class="view-profile">View Profile</a>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="faculty-profile">
                <div class="profile-image">
                  <img src="assets/img/person/person-f-7.webp" class="img-fluid" alt="Faculty">
                </div>
                <div class="profile-content">
                  <h3>Dr. Sophia Chang</h3>
                  <p class="position">Associate Professor of Biology</p>
                  <div class="department-info">Department of Life Sciences</div>
                  <div class="research-focus">
                    <span>Marine Biology</span>
                    <span>Ecology</span>
                  </div>
                </div>
                <div class="profile-actions">
                  <a href="#" class="view-profile">View Profile</a>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="faculty-profile">
                <div class="profile-image">
                  <img src="assets/img/person/person-m-14.webp" class="img-fluid" alt="Faculty">
                </div>
                <div class="profile-content">
                  <h3>Dr. James Anderson</h3>
                  <p class="position">Assistant Professor of Physics</p>
                  <div class="department-info">Department of Physical Sciences</div>
                  <div class="research-focus">
                    <span>Quantum Computing</span>
                    <span>Theoretical Physics</span>
                  </div>
                </div>
                <div class="profile-actions">
                  <a href="#" class="view-profile">View Profile</a>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="faculty-profile">
                <div class="profile-image">
                  <img src="assets/img/person/person-f-11.webp" class="img-fluid" alt="Faculty">
                </div>
                <div class="profile-content">
                  <h3>Dr. Rachel Kim</h3>
                  <p class="position">Professor of Psychology</p>
                  <div class="department-info">College of Social Sciences</div>
                  <div class="research-focus">
                    <span>Cognitive Psychology</span>
                    <span>Behavioral Analysis</span>
                  </div>
                </div>
                <div class="profile-actions">
                  <a href="#" class="view-profile">View Profile</a>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="faculty-profile">
                <div class="profile-image">
                  <img src="assets/img/person/person-m-6.webp" class="img-fluid" alt="Faculty">
                </div>
                <div class="profile-content">
                  <h3>Dr. David Wilson</h3>
                  <p class="position">Associate Professor of Economics</p>
                  <div class="department-info">Business School</div>
                  <div class="research-focus">
                    <span>Financial Markets</span>
                    <span>Economic Policy</span>
                  </div>
                </div>
                <div class="profile-actions">
                  <a href="#" class="view-profile">View Profile</a>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="faculty-profile">
                <div class="profile-image">
                  <img src="assets/img/person/person-f-13.webp" class="img-fluid" alt="Faculty">
                </div>
                <div class="profile-content">
                  <h3>Dr. Isabella Martinez</h3>
                  <p class="position">Assistant Professor of Literature</p>
                  <div class="department-info">College of Humanities</div>
                  <div class="research-focus">
                    <span>Contemporary Fiction</span>
                    <span>Cultural Studies</span>
                  </div>
                </div>
                <div class="profile-actions">
                  <a href="#" class="view-profile">View Profile</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="load-more-section text-center mt-5">
          <a href="#" class="load-more-btn">Show More Faculty</a>
        </div>

      </div>

    </section><!-- /Faculty  Staff Section -->

  </main>

 @include('layout2.footer.main')

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>