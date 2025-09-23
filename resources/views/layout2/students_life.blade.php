@extends('layout2.index')
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

<body class="students-life-page">

 @include('layout2.navbar.main')

  <main class="main">

    <!-- Page Title -->
    <div class="page-title">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1 class="heading-title">Student Life</h1>
              <p class="mb-0">Esse dolorum voluptatum ullam est sint nemo et est ipsa porro placeat quibusdam quia assumenda numquam molestias.</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Students Life</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Students Life Section -->
    <section id="students-life" class="students-life section">

      <div class="container">

        <div class="row g-0">
          <div class="col-lg-6">
            <div class="content-wrapper">
              <h2>Campus Life Experience</h2>
              <p class="lead">Discover a vibrant community where learning extends beyond the classroom. Our students engage in diverse activities that shape their academic journey and personal growth.</p>

              <div class="stats-grid">
                <div class="stat-item">
                  <div class="stat-number purecounter" data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="2"></div>
                  <div class="stat-label">Student Organizations</div>
                </div>
                <div class="stat-item">
                  <div class="stat-number purecounter" data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="2">%</div>
                  <div class="stat-label">Graduation Rate</div>
                </div>
                <div class="stat-item">
                  <div class="stat-number purecounter" data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="2">:1</div>
                  <div class="stat-label">Student-Faculty Ratio</div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="image-showcase">
              <img src="assets/img/education/students-8.webp" alt="Students collaborating" class="img-fluid main-image" loading="lazy">
              <div class="floating-image">
                <img src="assets/img/education/students-7.webp" alt="Student life" class="img-fluid" loading="lazy">
              </div>
            </div>
          </div>
        </div>

        <div class="activities-section">
          <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
              <h3>Life Beyond Academics</h3>
              <p>Every day brings new opportunities to explore interests, build friendships, and develop skills that last a lifetime.</p>
            </div>
          </div>

          <div class="row g-4">
            <div class="col-lg-4">
              <div class="activity-card">
                <div class="activity-image">
                  <img src="assets/img/education/activities-3.webp" alt="Research projects" class="img-fluid" loading="lazy">
                </div>
                <div class="activity-content">
                  <h4>Research &amp; Innovation</h4>
                  <p>Engage in cutting-edge research projects alongside faculty mentors. Explore new frontiers in your field while contributing to meaningful discoveries.</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="activity-card">
                <div class="activity-image">
                  <img src="assets/img/education/activities-6.webp" alt="Cultural activities" class="img-fluid" loading="lazy">
                </div>
                <div class="activity-content">
                  <h4>Cultural Exchange</h4>
                  <p>Participate in international programs and cultural events. Broaden your perspective through diverse experiences and global connections.</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="activity-card">
                <div class="activity-image">
                  <img src="assets/img/education/activities-9.webp" alt="Sports activities" class="img-fluid" loading="lazy">
                </div>
                <div class="activity-content">
                  <h4>Sports &amp; Recreation</h4>
                  <p>Stay active with our comprehensive athletics program. Join competitive teams or enjoy recreational activities in state-of-the-art facilities.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="testimonial-section">
          <div class="row align-items-center">
            <div class="col-lg-5">
              <div class="testimonial-image">
                <img src="assets/img/education/students-5.webp" alt="Happy student" class="img-fluid" loading="lazy">
              </div>
            </div>

            <div class="col-lg-7">
              <div class="testimonial-content">
                <blockquote>
                  "The support system here is incredible. From academic advisors to career counselors, everyone is invested in your success. I've grown not just as a student, but as a person ready to make a difference in the world."
                </blockquote>
                <div class="testimonial-author">
                  <h5>Sarah Chen</h5>
                  <span>Computer Science Major, Class of 2024</span>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Students Life Section -->

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