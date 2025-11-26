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

<body class="index-page">




   @include('layout2.navbar.main')

    <!-- Hero Section -->

    <section id="hero" class="hero section" 
    style="         
         --hero-font-color: {{ $hero->font_color ?? '#ffffff' }};
         --hero-font-family: {{ $hero->font ?? 'Poppins, sans-serif' }};
         --hero-font-size: {{ $hero->font_size == 's' ? '14px' : ($hero->font_size == 'm' ? '18px' : '24px') }};
         --hero-background: url('{{ $hero && $hero->image ? asset('storage/'.$hero->image) : asset('assets/img/grafika.png') }}');">
      <div class="hero-container">
        <div class="hero-content">
          <h1>{{ $hero->title ?? 'Selamat Datang di SMK Negeri 1 Malang' }}</h1>
          <p>{{ $hero->subtitle ?? '' }}</p>
        </div>
      </div>

      <div class="highlights-container container">
        <div class="row gy-4">
          <div class="col-md-4">
            <div class="highlight-item">
              <div class="icon">
                <i class="bi bi-mortarboard-fill"></i>
              </div>
              <h3>98% Graduate Success</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="highlight-item">
              <div class="icon">
                <i class="bi bi-people-fill"></i>
              </div>
              <h3>16:1 Student-Faculty Ratio</h3>
              <p>Proin quis magna vel dolor mattis hendrerit.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="highlight-item">
              <div class="icon">
                <i class="bi bi-globe-americas"></i>
              </div>
              <h3>Global Community</h3>
              <p>Vestibulum sodales dignissim ipsum id commodo.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="event-banner">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-2">
              <div class="event-date">
                <span class="month">OCT</span>
                <span class="day">28</span>
              </div>
            </div>
            <div class="col-md-8">
              <h3>Open Campus Day</h3>
              <p>Experience our vibrant campus life, meet faculty members, and learn about our academic programs.</p>
            </div>
            <div class="col-md-2">
              <a href="#" class="btn-register">Register</a>
            </div>
          </div>
        </div>
      </div>

</section><!-- /Hero Section -->


    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-5">

          <div class="col-lg-6">
            <div class="content">
              <h3>Empowering Minds, Shaping Futures</h3>
              <p>For over three decades, we have been committed to providing exceptional education that prepares students for success in an ever-changing world. Our innovative approach combines traditional academic excellence with cutting-edge technology and personalized learning experiences.</p>

              <div class="stats-row">
                <div class="stat-item">
                  <div class="number">15,000+</div>
                  <div class="label">Students Enrolled</div>
                </div>
                <div class="stat-item">
                  <div class="number">98%</div>
                  <div class="label">Graduation Rate</div>
                </div>
                <div class="stat-item">
                  <div class="number">250+</div>
                  <div class="label">Expert Faculty</div>
                </div>
              </div>

              <div class="mission-statement">
                <p><em>"Our mission is to foster intellectual curiosity, critical thinking, and lifelong learning while nurturing compassionate leaders who will positively impact their communities and the world."</em></p>
              </div>

              <a href="about.html" class="btn-learn-more">
                Learn More About Us
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="image-wrapper">
              <img src="{{ asset('assets2/img/education/campus-5.webp') }}" alt="Campus Overview" class="img-fluid">
              <div class="experience-badge">
                <div class="years">32+</div>
                <div class="text">Years of Excellence</div>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Featured Programs Section -->
    <section id="featured-programs" class="featured-programs section">

      <!-- Section Title -->
      <div class="container section-title">
        <h2>Featured Programs</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="featured-programs-wrapper">

          <div class="programs-overview">
            <div class="overview-content">
              <h2>Discover Excellence in Education</h2>
              <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p>
              <div class="overview-stats">
                <div class="stat-item">
                  <span class="stat-number">2,500+</span>
                  <span class="stat-label">Active Students</span>
                </div>
                <div class="stat-item">
                  <span class="stat-number">98%</span>
                  <span class="stat-label">Graduate Rate</span>
                </div>
                <div class="stat-item">
                  <span class="stat-number">50+</span>
                  <span class="stat-label">Programs Offered</span>
                </div>
              </div>
            </div>
            <div class="overview-image">
              <img src="{{ asset('assets2/img/education/showcase-7.webp') }}" alt="Education" class="img-fluid">
            </div>
          </div>

          <div class="programs-showcase">

            <div class="program-card featured-program">
              <div class="card-image">
                <img src="{{ asset('assets2/img/education/courses-8.webp') }}" alt="Program" class="img-fluid">
                <div class="program-badge">
                  <i class="bi bi-star-fill"></i>
                  <span>Top Rated</span>
                </div>
              </div>
              <div class="card-content">
                <div class="program-category">Engineering</div>
                <h3>Computer Science &amp; AI</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <div class="program-meta">
                  <div class="meta-item">
                    <i class="bi bi-clock"></i>
                    <span>4 Years</span>
                  </div>
                  <div class="meta-item">
                    <i class="bi bi-award"></i>
                    <span>Bachelor's</span>
                  </div>
                </div>
                <div class="card-footer">
                  <a href="#" class="learn-more">Learn More</a>
                  <div class="enrollment">
                    <i class="bi bi-people"></i>
                    <span>320 enrolled</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="programs-list">

              <div class="program-item">
                <div class="item-visual">
                  <img src="{{ asset('assets2/img/education/courses-12.webp') }}" alt="Program" class="img-fluid">
                </div>
                <div class="item-details">
                  <div class="item-category">Business</div>
                  <h4>International Business</h4>
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</p>
                  <div class="item-info">
                    <span>3 Years</span>
                    <span>Master's</span>
                  </div>
                </div>
                <div class="item-action">
                  <i class="bi bi-arrow-right-circle"></i>
                </div>
              </div>

              <div class="program-item">
                <div class="item-visual">
                  <img src="{{ asset('assets2/img/education/courses-5.webp') }}" alt="Program" class="img-fluid">
                </div>
                <div class="item-details">
                  <div class="item-category">Health Sciences</div>
                  <h4>Medical Technology</h4>
                  <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium.</p>
                  <div class="item-info">
                    <span>5 Years</span>
                    <span>Bachelor's</span>
                  </div>
                </div>
                <div class="item-action">
                  <i class="bi bi-arrow-right-circle"></i>
                </div>
              </div>

              <div class="program-item">
                <div class="item-visual">
                  <img src="{{ asset('assets2/img/education/courses-15.webp') }}" alt="Program" class="img-fluid">
                </div>
                <div class="item-details">
                  <div class="item-category">Creative Arts</div>
                  <h4>Digital Media &amp; Design</h4>
                  <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe.</p>
                  <div class="item-info">
                    <span>3 Years</span>
                    <span>Bachelor's</span>
                  </div>
                </div>
                <div class="item-action">
                  <i class="bi bi-arrow-right-circle"></i>
                </div>
              </div>

              <div class="program-item">
                <div class="item-visual">
                  <img src="{{ asset('assets2/img/education/courses-9.webp') }}" alt="Program" class="img-fluid">
                </div>
                <div class="item-details">
                  <div class="item-category">Science</div>
                  <h4>Environmental Studies</h4>
                  <p>Et harum quidem rerum facilis est et expedita distinctio nam libero tempore.</p>
                  <div class="item-info">
                    <span>4 Years</span>
                    <span>Bachelor's</span>
                  </div>
                </div>
                <div class="item-action">
                  <i class="bi bi-arrow-right-circle"></i>
                </div>
              </div>

            </div>

          </div>

        </div>

      </div>

    </section><!-- /Featured Programs Section -->

    <!-- Students Life Block Section -->
    <section id="students-life-block" class="students-life-block section">

      <!-- Section Title -->
      <div class="container section-title">
        <h2>Students Life</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row align-items-center g-5">
          <div class="col-lg-6">
            <div class="content-wrapper">
              <div class="section-tag">
                Student Life
              </div>
              <h2>Excepteur sint occaecat cupidatat non proident sunt in culpa</h2>
              <p class="description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa.</p>

              <div class="stats-row">
                <div class="stat-item">
                  <span class="stat-number">85+</span>
                  <span class="stat-label">Student Organizations</span>
                </div>
                <div class="stat-item">
                  <span class="stat-number">150+</span>
                  <span class="stat-label">Annual Events</span>
                </div>
              </div>

              <div class="action-links">
                <a href="student-life.html" class="primary-link">Explore Student Life</a>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="visual-grid">
              <div class="main-visual">
                <img src="{{ asset('assets2/img/education/students-7.webp') }}" alt="Campus Life" class="img-fluid">
                <div class="overlay-badge">
                  <i class="bi bi-heart-fill"></i>
                  <span>Campus Community</span>
                </div>
              </div>

              <div class="secondary-visuals">
                <div class="small-visual">
                  <img src="{{ asset('assets2/img/education/activities-8.webp') }}" alt="Student Activities" class="img-fluid">
                  <div class="visual-caption">
                    <span>Student Activities</span>
                  </div>
                </div>

                <div class="small-visual">
                  <img src="{{ asset('assets2/img/education/activities-5.webp') }}" alt="Academic Excellence" class="img-fluid">
                  <div class="visual-caption">
                    <span>Academic Excellence</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="highlights-section">
          <div class="row g-4">
            <div class="col-lg-4">
              <div class="highlight-card">
                <div class="highlight-image">
                  <img src="{{ asset('assets2/img/education/activities-7.webp') }}" alt="Leadership Programs" class="img-fluid">
                </div>
                <div class="highlight-content">
                  <h5>Leadership Development</h5>
                  <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit sed</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="highlight-card">
                <div class="highlight-image">
                  <img src="assets/img/education/activities-9.webp" alt="Cultural Events" class="img-fluid">
                </div>
                <div class="highlight-content">
                  <h5>Cultural Diversity</h5>
                  <p>Ut enim ad minima veniam quis nostrum exercitationem ullam corporis suscipit</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="highlight-card">
                <div class="highlight-image">
                  <img src="assets/img/education/activities-3.webp" alt="Innovation Hub" class="img-fluid">
                </div>
                <div class="highlight-content">
                  <h5>Innovation Hub</h5>
                  <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam</p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Students Life Block Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section light-background">

      <!-- Section Title -->
      <div class="container section-title">
        <h2>Testimonials</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="testimonials-slider swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "slidesPerView": 1,
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "navigation": {
                "nextEl": ".swiper-button-next",
                "prevEl": ".swiper-button-prev"
              }
            }
          </script>

          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row">
                  <div class="col-lg-8">
                    <h2>Sed ut perspiciatis unde omnis</h2>
                    <p>
                      Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                    </p>
                    <p>
                      Beatae magnam dolore quia ipsum. Voluptatem totam et qui dolore dignissimos. Amet quia sapiente laudantium nihil illo et assumenda sit cupiditate. Nam perspiciatis perferendis minus consequatur. Enim ut eos quo.
                    </p>
                    <div class="profile d-flex align-items-center">
                      <img src="assets/img/person/person-m-7.webp" class="profile-img" alt="">
                      <div class="profile-info">
                        <h3>Saul Goodman</h3>
                        <span>Client</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 d-none d-lg-block">
                    <div class="featured-img-wrapper">
                      <img src="assets/img/person/person-m-7.webp" class="featured-img" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Testimonial Item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row">
                  <div class="col-lg-8">
                    <h2>Nemo enim ipsam voluptatem</h2>
                    <p>
                      Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                    </p>
                    <p>
                      Dolorem excepturi esse qui amet maxime quibusdam aut repellendus voluptatum. Corrupti enim a repellat cumque est laborum fuga consequuntur. Dolorem nostrum deleniti quas voluptatem iure dolorum rerum. Repudiandae doloribus ut repellat harum vero aut. Modi aut velit aperiam aspernatur odit ut vitae.
                    </p>
                    <div class="profile d-flex align-items-center">
                      <img src="assets/img/person/person-f-8.webp" class="profile-img" alt="">
                      <div class="profile-info">
                        <h3>Sara Wilsson</h3>
                        <span>Designer</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 d-none d-lg-block">
                    <div class="featured-img-wrapper">
                      <img src="assets/img/person/person-f-8.webp" class="featured-img" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Testimonial Item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row">
                  <div class="col-lg-8">
                    <h2>
                      Labore nostrum eos impedit
                    </h2>
                    <p>
                      Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                    </p>
                    <p>
                      Itaque ut explicabo vero occaecati est quam rerum sed. Numquam tempora aut aut quaerat quia illum. Nobis quia autem odit ipsam numquam. Doloribus sit sint corporis eius totam fuga. Hic nostrum suscipit corrupti nam expedita adipisci aut optio.
                    </p>
                    <div class="profile d-flex align-items-center">
                      <img src="assets/img/person/person-m-9.webp" class="profile-img" alt="">
                      <div class="profile-info">
                        <h3>Matt Brandon</h3>
                        <span>Freelancer</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 d-none d-lg-block">
                    <div class="featured-img-wrapper">
                      <img src="assets/img/person/person-m-9.webp" class="featured-img" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Testimonial Item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row">
                  <div class="col-lg-8">
                    <h2>Impedit dolor facilis nulla</h2>
                    <p>
                      Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                    </p>
                    <p>
                      Omnis aspernatur accusantium qui delectus praesentium repellendus. Facilis sint odio aspernatur voluptas commodi qui qui qui pariatur. Corrupti deleniti itaque quaerat ipsum deleniti culpa tempora tempore. Et consequatur exercitationem hic aspernatur nobis est voluptatibus architecto laborum.
                    </p>
                    <div class="profile d-flex align-items-center">
                      <img src="assets/img/person/person-f-10.webp" class="profile-img" alt="">
                      <div class="profile-info">
                        <h3>Jena Karlis</h3>
                        <span>Store Owner</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 d-none d-lg-block">
                    <div class="featured-img-wrapper">
                      <img src="assets/img/person/person-f-10.webp" class="featured-img" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Testimonial Item -->

          </div>

          <div class="swiper-navigation w-100 d-flex align-items-center justify-content-center">
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>

        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section light-background">

  <div class="container">
    <div class="row align-items-center">

      <div class="col-lg-5">
        <div class="content-wrapper">
          <div class="badge">
            <i class="bi bi-trophy-fill"></i>
            <span>Prestasi Siswa</span>
          </div>

          {{-- Judul Prestasi --}}
<h2>{{ optional($prestasi)->judul ?? 'Belum ada prestasi terbaru' }}</h2>

{{-- Konten Prestasi --}}
<p>{{ optional($prestasi)->konten ?? 'Prestasi terbaru akan muncul di sini setelah ditambahkan.' }}</p>

<div class="action-buttons">
    <a href="{{ route('prestasi.index') }}" class="btn-primary">Lihat Semua Prestasi</a>
    @if($prestasi)
        <a href="{{ route('prestasi.show', $prestasi->id) }}" class="btn-secondary">
            <span>Detail Prestasi</span>
            <i class="bi bi-arrow-right"></i>
        </a>
    @endif
</div>


      {{-- Gambar Prestasi --}}
@if($prestasi && $prestasi->gambar)
    <img src="{{ asset($prestasi->gambar) }}" alt="{{ $prestasi->judul }}">
@else
    <img src="{{ asset('assets/img/default-prestasi.jpg') }}" alt="Prestasi Default">
@endif

{{-- Judul Prestasi --}}
<h2>{{ $prestasi->judul ?? 'Belum ada prestasi terbaru' }}</h2>

{{-- Konten Prestasi --}}
<p>{{ $prestasi->konten ?? 'Prestasi terbaru akan muncul di sini setelah ditambahkan.' }}</p>

<div class="action-buttons">
    <a href="{{ route('prestasi.index') }}" class="btn-primary">Lihat Semua Prestasi</a>
    @if($prestasi)
        <a href="{{ route('prestasi.show', $prestasi->id) }}" class="btn-secondary">
            <span>Detail Prestasi</span>
            <i class="bi bi-arrow-right"></i>
        </a>
    @endif
</div>


</section>


    <!-- Recent News Section -->
   @php
    use App\Models\sidebar;
    $menuBeritaAktif = Sidebar::where('name', 'berita')
                        ->where('status', 'active')
                        ->exists();
@endphp

@if($menuBeritaAktif)
<section id="recent-news" class="recent-news section">

  <div class="container section-title">
    <h2>Recent News</h2>
  </div>

  <div class="container">
    <div class="row gy-5">

      @foreach($berita as $item)
        <div class="col-xl-3 col-md-6">
          <div class="post-box">
            <div class="post-img">
              @if($item->gambar)
                <img src="{{ asset('storage/'.$item->gambar) }}" class="img-fluid" alt="{{ $item->judul }}">
              @else
                <img src="{{ asset('assets/img/default-news.jpg') }}" class="img-fluid" alt="default image">
              @endif
            </div>

            <div class="meta">
              <span class="post-date">
                {{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('D, d M Y') }}
              </span>
              <span class="post-author"> / {{ $item->penulis ?? 'Admin' }}</span>
            </div>

            <h3 class="post-title">{{ $item->judul }}</h3>
            <p>{{ \Illuminate\Support\Str::limit(strip_tags($item->konten), 100, '...') }}</p>

            <a href="{{ route('berita.show', $item->id) }}" class="readmore stretched-link">
              <span>Read More</span><i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      @endforeach

    </div>
  </div>

</section>
@endif
<!-- /Recent News Section -->


    <!-- Events Section -->
   <section id="events" class="events section">

  <!-- Section Title -->
  <div class="container section-title">
    <h2>Events</h2>
    <p>Daftar kegiatan yang sudah terjadwal di sekolah</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row g-4">
      @forelse($agendas as $agenda)
        @php
          $tanggal = \Carbon\Carbon::parse($agenda->tanggal);
        @endphp

        <div class="col-lg-6">
          <div class="event-card">
            <div class="event-date">
              <span class="month">{{ strtoupper($tanggal->format('M')) }}</span>
              <span class="day">{{ $tanggal->format('d') }}</span>
              <span class="year">{{ $tanggal->format('Y') }}</span>
            </div>
            <div class="event-content">
              <div class="event-tag academic">Agenda</div>
              <h3>{{ $agenda->judul }}</h3>
              <p>{{ Str::limit($agenda->konten, 150) }}</p>
              <div class="event-meta">
                <div class="meta-item">
                  <i class="bi bi-clock"></i>
                  <span>{{ $tanggal->format('H:i') }}</span>
                </div>
                <div class="meta-item">
                  <i class="bi bi-geo-alt"></i>
                  <span>{{ $agenda->lokasi ?? 'Sekolah' }}</span>
                </div>
              </div>
              <div class="event-actions">
                <a href="{{ route('show', $agenda->id) }}" class="btn-learn-more">Learn More</a>

                <a href="#" class="btn-calendar"><i class="bi bi-calendar-plus"></i> Add to Calendar</a>
              </div>
            </div>
          </div>
        </div>
      @empty
        <div class="col-12 text-center">
          <p>Belum ada agenda tersedia.</p>
        </div>
      @endforelse
    </div>

    <div class="text-center mt-5">
      <a href="{{ route('agenda.index') }}" class="btn-view-all">View All Events</a>
    </div>

  </div>
</section>


  </main>

 
@include('layout2.footer.main')



  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets2/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets2/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets2/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets2/vendor/glightbox/js/glightbox.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('assets2/js/main.js') }}"></script>

</body>

</html>