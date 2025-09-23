@extends('layout2.index')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Academics - MySchool Bootstrap Template</title>
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
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: MySchool
  * Template URL: https://bootstrapmade.com/myschool-bootstrap-school-template/
  * Updated: Jul 28 2025 with Bootstrap v5.3.7
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="academics-page">

 @include('layout2.navbar.main' )
  <main class="main">

    <!-- Page Title -->
    <div class="page-title">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1 class="heading-title">Academics</h1>
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
            <li class="current">Academics</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Academics Section -->
    <section id="academics" class="academics section">

      <div class="container">

        <div class="row gy-5">
          <div class="col-lg-8">
            <div class="academic-programs">
              <h3 class="section-subtitle">Academic Excellence</h3>
              <div class="programs-grid">
                <div class="program-item">
                  <div class="program-icon">
                    <i class="bi bi-mortarboard"></i>
                  </div>
                  <div class="program-details">
                    <h4>Undergraduate Programs</h4>
                    <p>Comprehensive bachelor's degrees across diverse fields of study, designed to prepare students for success in their chosen careers.</p>
                    <div class="program-stats">
                      <span><strong>45+</strong> Majors Available</span>
                      <span><strong>18:1</strong> Student-Faculty Ratio</span>
                    </div>
                  </div>
                </div>

                <div class="program-item">
                  <div class="program-icon">
                    <i class="bi bi-book"></i>
                  </div>
                  <div class="program-details">
                    <h4>Graduate Studies</h4>
                    <p>Advanced degrees including master's and doctoral programs with cutting-edge research opportunities and expert faculty mentorship.</p>
                    <div class="program-stats">
                      <span><strong>25+</strong> Graduate Programs</span>
                      <span><strong>95%</strong> Employment Rate</span>
                    </div>
                  </div>
                </div>

                <div class="program-item">
                  <div class="program-icon">
                    <i class="bi bi-laptop"></i>
                  </div>
                  <div class="program-details">
                    <h4>Online Learning</h4>
                    <p>Flexible degree options with the same rigorous curriculum, perfect for working professionals and remote learners.</p>
                    <div class="program-stats">
                      <span><strong>15+</strong> Online Degrees</span>
                      <span><strong>24/7</strong> Support Available</span>
                    </div>
                  </div>
                </div>

                <div class="program-item">
                  <div class="program-icon">
                    <i class="bi bi-award"></i>
                  </div>
                  <div class="program-details">
                    <h4>Certificate Programs</h4>
                    <p>Professional development opportunities and specialized training to enhance your skills and advance your career.</p>
                    <div class="program-stats">
                      <span><strong>20+</strong> Certificates</span>
                      <span><strong>6-18</strong> Month Duration</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="academic-achievements">
              <h3 class="section-subtitle">Recognition</h3>
              <div class="achievements-list">
                <div class="achievement-item">
                  <div class="achievement-number" data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="2">15</div>
                  <h4>National Rankings</h4>
                  <p>Programs ranked in top 15 nationally</p>
                </div>
                <div class="achievement-item">
                  <div class="achievement-number" data-purecounter-start="0" data-purecounter-end="98" data-purecounter-duration="2">98</div>
                  <h4>Graduate Success Rate</h4>
                  <p>Percentage of graduates employed within 6 months</p>
                </div>
                <div class="achievement-item">
                  <div class="achievement-number" data-purecounter-start="0" data-purecounter-end="250" data-purecounter-duration="2">250</div>
                  <h4>Research Projects</h4>
                  <p>Active research initiatives across all departments</p>
                </div>
              </div>

              <div class="accreditation-info">
                <h4>Accreditation</h4>
                <p>Our institution is fully accredited by the Higher Learning Commission and maintains specialized accreditations across all professional programs.</p>
                <a href="#" class="accreditation-link">View All Accreditations <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="row mt-5 gy-4">
          <div class="col-lg-7">
            <div class="featured-departments">
              <h3 class="section-subtitle">Featured Departments</h3>
              <div class="departments-showcase">
                <div class="department-card active">
                  <img src="assets/img/education/courses-3.webp" class="img-fluid" alt="Engineering" loading="lazy">
                  <div class="department-overlay">
                    <h4>School of Engineering</h4>
                    <p>State-of-the-art laboratories and industry partnerships prepare students for tomorrow's technological challenges.</p>
                    <a href="#" class="dept-link">Explore Programs</a>
                  </div>
                </div>
                <div class="departments-tabs">
                  <button class="tab-btn active" data-tab="engineering">Engineering</button>
                  <button class="tab-btn" data-tab="business">Business</button>
                  <button class="tab-btn" data-tab="liberal-arts">Liberal Arts</button>
                  <button class="tab-btn" data-tab="sciences">Sciences</button>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-5">
            <div class="academic-calendar">
              <h3 class="section-subtitle">Academic Calendar</h3>
              <div class="calendar-events">
                <div class="calendar-item">
                  <div class="date-block">
                    <span class="month">Aug</span>
                    <span class="day">28</span>
                  </div>
                  <div class="event-info">
                    <h4>Fall Semester Begins</h4>
                    <p>New student orientation and first day of classes</p>
                  </div>
                </div>
                <div class="calendar-item">
                  <div class="date-block">
                    <span class="month">Oct</span>
                    <span class="day">15</span>
                  </div>
                  <div class="event-info">
                    <h4>Mid-term Examinations</h4>
                    <p>Assessment period for all undergraduate courses</p>
                  </div>
                </div>
                <div class="calendar-item">
                  <div class="date-block">
                    <span class="month">Dec</span>
                    <span class="day">12</span>
                  </div>
                  <div class="event-info">
                    <h4>Final Examinations</h4>
                    <p>End of semester testing period begins</p>
                  </div>
                </div>
                <div class="calendar-item">
                  <div class="date-block">
                    <span class="month">Jan</span>
                    <span class="day">18</span>
                  </div>
                  <div class="event-info">
                    <h4>Spring Semester</h4>
                    <p>Registration opens for spring courses</p>
                  </div>
                </div>
              </div>
              <a href="#" class="view-full-calendar">View Full Academic Calendar</a>
            </div>
          </div>
        </div>

        <div class="row mt-5">
          <div class="col-12">
            <div class="curriculum-pathways">
              <h3 class="section-subtitle">Academic Pathways</h3>
              <div class="pathways-container">
                <div class="pathway-track">
                  <div class="track-icon">
                    <img src="assets/img/education/education-square-3.webp" class="img-fluid" alt="Liberal Arts">
                  </div>
                  <h4>Liberal Arts Track</h4>
                  <p>Explore humanities, social sciences, and interdisciplinary studies that develop critical thinking and communication skills.</p>
                  <ul class="track-features">
                    <li>Core curriculum in humanities</li>
                    <li>Study abroad opportunities</li>
                    <li>Research-based capstone projects</li>
                  </ul>
                </div>

                <div class="pathway-track">
                  <div class="track-icon">
                    <img src="assets/img/education/education-square-7.webp" class="img-fluid" alt="STEM">
                  </div>
                  <h4>STEM Track</h4>
                  <p>Comprehensive science, technology, engineering, and mathematics programs with hands-on laboratory experiences.</p>
                  <ul class="track-features">
                    <li>Modern laboratory facilities</li>
                    <li>Industry collaboration projects</li>
                    <li>Internship placement support</li>
                  </ul>
                </div>

                <div class="pathway-track">
                  <div class="track-icon">
                    <img src="assets/img/education/education-square-9.webp" class="img-fluid" alt="Professional">
                  </div>
                  <h4>Professional Track</h4>
                  <p>Career-focused programs in business, healthcare, education, and other professional fields with practical application.</p>
                  <ul class="track-features">
                    <li>Professional certifications</li>
                    <li>Networking opportunities</li>
                    <li>Career placement services</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row mt-5 faculty-research">
          <div class="col-lg-5">
            <div class="research-highlight">
              <img src="assets/img/education/education-6.webp" class="img-fluid" alt="Research" loading="lazy">
              <div class="research-badge">
                <span>$12.5M</span>
                <small>Annual Research Funding</small>
              </div>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="faculty-content">
              <h3>World-Class Faculty &amp; Research</h3>
              <p class="lead">Our distinguished faculty members are leaders in their fields, bringing cutting-edge research and real-world expertise directly into the classroom.</p>
              <div class="faculty-highlights">
                <div class="faculty-stat">
                  <div class="stat-icon">
                    <i class="bi bi-people"></i>
                  </div>
                  <div class="stat-content">
                    <h4>Expert Faculty</h4>
                    <p>Over 320 full-time faculty members with terminal degrees from prestigious institutions worldwide.</p>
                  </div>
                </div>
                <div class="faculty-stat">
                  <div class="stat-icon">
                    <i class="bi bi-lightbulb"></i>
                  </div>
                  <div class="stat-content">
                    <h4>Innovation Focus</h4>
                    <p>Published research in top-tier journals with direct applications to industry and societal challenges.</p>
                  </div>
                </div>
                <div class="faculty-stat">
                  <div class="stat-icon">
                    <i class="bi bi-globe"></i>
                  </div>
                  <div class="stat-content">
                    <h4>Global Impact</h4>
                    <p>International collaborations spanning six continents, bringing global perspectives to local education.</p>
                  </div>
                </div>
              </div>
              <div class="research-cta">
                <a href="#" class="btn btn-research">Explore Research Initiatives</a>
                <a href="#" class="faculty-link">Meet Our Faculty <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Academics Section -->

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