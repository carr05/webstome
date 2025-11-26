<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - Invent Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets3/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets3/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets3/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets3/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets3/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('assets3/css/main.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Invent
  * Template URL: https://bootstrapmade.com/invent-bootstrap-business-template/
  * Updated: May 12 2025 with Bootstrap v5.3.6
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top"
  style="--nav-color: {{ $tampilan->warna ?? '#04415f' }};
         --font-family: {{ $tampilan->font ?? 'Poppins, sans-serif' }};
         --font-size: {{ $tampilan->font_size ?? '16px' }};
         --font-color: {{ $tampilan->font_color ?? '#04315f' }};">
    <div class="container position-relative d-flex align-items-center justify-content-between"
    style="--nav-color: {{ $tampilan->warna ?? '#04415f' }};
         --font-family: {{ $tampilan->font ?? 'Poppins, sans-serif' }};
         --font-size: {{ $tampilan->font_size ?? '16px' }};
         --font-color: {{ $tampilan->font_color ?? '#04315f' }};">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.webp" alt=""> -->
        <h1 class="sitename">Invent</h1><span>.</span>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Beranda</a></li>
          <li><a href="#agenda">Agenda</a></li>
          <li><a href="#services">Services</a></li>
         @php
    use App\Models\Sidebar as SidebarModel;

    $menuBeritaAktif = SidebarModel::where('name', 'berita')
                            ->where('status', 'active')
                            ->exists();
@endphp

@if($menuBeritaAktif)
    <li><a href="#Berita">Berita</a></li>
@endif

         
          <li><a href="#team">Team</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section" style="
    --global-color: {{ $semua->warna_utama ?? '' }};
    --global-font-utama: {{ $semua->font_utama ?? '' }};
    --global-font-heading: {{ $semua->font_heading ?? '' }};
    --hero-font-color: {{ $hero->font_color ?? '#ffffff' }};
    --hero-font-family: {{ $hero->font ?? 'Poppins, sans-serif' }};
    --hero-font-size: {{ $hero->font_size == 's' ? '14px' : ($hero->font_size == 'm' ? '18px' : '24px') }};
    --hero-background: url({{ asset('storage/'.$hero->image) }});
">


      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center mb-5">
          <div class="col-lg-6 mb-4 mb-lg-0">
            <div class="badge-wrapper mb-3">
              <div class="d-inline-flex align-items-center rounded-pill border border-accent-light">
                
    
                </div>
              </div>
            </div>

          <div class="row align-items-center">
    <!-- Kolom Teks -->
    <div class="col-lg-6">
        <h1 class="hero-title mb-4">
            {{ $hero->title ?? 'Selamat Datang di SMK Negeri 1 Malang' }}
        </h1>

        <p class="hero-description mb-4">
            {{ $hero->subtitle ?? '' }}
        </p>
    </div>

    <!-- Kolom Gambar -->
    <div class="col-lg-6">
        <div class="hero-image text-center text-lg-end">
            <img src="{{ asset('assets3/img/illustration/illustration-16.webp') }}" 
                 alt="Business Growth" 
                 class="img-fluid" 
                 loading="lazy">
        </div>
    </div>
</div>

          </div>
        </div>

        <div class="row feature-boxes">
          <div class="col-lg-4 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="feature-box">
              <div class="feature-icon me-sm-4 mb-3 mb-sm-0">
                <i class="bi bi-gear"></i>
              </div>
              <div class="feature-content">
                <h3 class="feature-title">Rapid Deployment</h3>
                <p class="feature-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="feature-box">
              <div class="feature-icon me-sm-4 mb-3 mb-sm-0">
                <i class="bi bi-window"></i>
              </div>
              <div class="feature-content">
                <h3 class="feature-title">Advanced Security</h3>
                <p class="feature-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">
            <div class="feature-box">
              <div class="feature-icon me-sm-4 mb-3 mb-sm-0">
                <i class="bi bi-headset"></i>
              </div>
              <div class="feature-content">
                <h3 class="feature-title">Dedicated Support</h3>
                <p class="feature-text">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Hero Section -->

    <!-- Agenda Section -->
<section id="agenda" class="agenda section">

  <!-- Section Title -->
  <div class="container section-title">
    <h2>Agenda</h2>
    <p>Tentang kami dan apa yang kami lakukan</p>
  </div>
  <!-- End Section Title -->

  <div class="container">

    <div class="row g-4">

      <!-- Left Content -->
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <div class="agenda-content">
          <p class="who-we-are">Who We Are</p>
          <h3>Unleashing Potential with Creative Strategy</h3>

          <p class="fst-italic">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </p>

          <ul class="agenda-list">
            <li>
              <i class="bi bi-check-circle"></i>
              <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
            </li>
            <li>
              <i class="bi bi-check-circle"></i>
              <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span>
            </li>
            <li>
              <i class="bi bi-check-circle"></i>
              <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</span>
            </li>
          </ul>
        </div>
      </div>

      <!-- Right Images -->
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
        <div class="about-images">
          <div class="row g-4">
            <div class="col-lg-6">
              <img src="{{ asset('assets3/img/about/about-portrait-1.webp') }}" class="img-fluid" alt="">
            </div>

            <div class="col-lg-6">
              <div class="row g-4">
                <div class="col-12">
                  <img src="{{ asset('assets3/img/about/about-8.webp') }}" class="img-fluid" alt="">
                </div>
                <div class="col-12">
                  <img src="{{ asset('assets3/img/about/about-12.webp') }}" class="img-fluid" alt="">
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>

  </div>

</section>


    <!-- How We Work Section -->
    <section id="how-we-work" class="how-we-work section" style="
    --global-color: {{  $semua->warna_utama ?? ''}};
         --global-font-utama: {{ $semua->font_utama ?? ''}};
         --global-font-heading: {{ $semua->font_heading ?? ''}};
         --hero-font-color: {{ $hero->font_color ?? '#ffffff' }};
         --hero-font-family: {{ $hero->font ?? 'Poppins, sans-serif' }};
         --hero-font-size: {{ $hero->font_size == 's' ? '14px' : ($hero->font_size == 'm' ? '18px' : '24px') }};
         --hero-background: url('{{ asset('storage/'.$hero->image) }}');
         ">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>How We Work</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="steps-5">
          <div class="process-container">

            <div class="process-item" data-aos="fade-up" data-aos-delay="200">
              <div class="content">
                <span class="step-number">01</span>
                <div class="card-body">
                  <div class="step-icon">
                    <i class="bi bi-pencil-square"></i>
                  </div>
                  <div class="step-content">
                    <h3>Project Planning</h3>
                    <p>Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                  </div>
                </div>
              </div>
            </div><!-- End Process Item -->

            <div class="process-item" data-aos="fade-up" data-aos-delay="300">
              <div class="content">
                <span class="step-number">02</span>
                <div class="card-body">
                  <div class="step-icon">
                    <i class="bi bi-gear"></i>
                  </div>
                  <div class="step-content">
                    <h3>Development Phase</h3>
                    <p>Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus.</p>
                  </div>
                </div>
              </div>
            </div><!-- End Process Item -->

            <div class="process-item" data-aos="fade-up" data-aos-delay="400">
              <div class="content">
                <span class="step-number">03</span>
                <div class="card-body">
                  <div class="step-icon">
                    <i class="bi bi-search"></i>
                  </div>
                  <div class="step-content">
                    <h3>Testing &amp; QA</h3>
                    <p>Phasellus ullamcorper ipsum rutrum nunc. Nunc nonummy metus. Vestibulum volutpat pretium libero.</p>
                  </div>
                </div>
              </div>
            </div><!-- End Process Item -->

            <div class="process-item" data-aos="fade-up" data-aos-delay="500">
              <div class="content">
                <span class="step-number">04</span>
                <div class="card-body">
                  <div class="step-icon">
                    <i class="bi bi-rocket-takeoff"></i>
                  </div>
                  <div class="step-content">
                    <h3>Launch &amp; Support</h3>
                    <p>Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt.</p>
                  </div>
                </div>
              </div>
            </div><!-- End Process Item -->

          </div>
        </div>

      </div>

    </section><!-- /How We Work Section -->

    <!-- Services Section -->
    <section id="services" class="services section" style="
         --global-color: {{  $semua->warna_utama ?? ''}};
         --global-font-utama: {{ $semua->font_utama ?? ''}};
         --global-font-heading: {{ $semua->font_heading ?? ''}};
         --hero-font-color: {{ $hero->font_color ?? '#ffffff' }};
         --hero-font-family: {{ $hero->font ?? 'Poppins, sans-serif' }};
         --hero-font-size: {{ $hero->font_size == 's' ? '14px' : ($hero->font_size == 'm' ? '18px' : '24px') }};
         --hero-background: url('{{ asset('storage/'.$hero->image) }}');
         ">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row justify-content-center g-5">

          <div class="col-md-6" data-aos="fade-right" data-aos-delay="100">
            <div class="service-item">
              <div class="service-icon">
                <i class="bi bi-code-slash"></i>
              </div>
              <div class="service-content">
                <h3>Custom Web Development</h3>
                <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Nulla quis lorem ut libero malesuada feugiat. Curabitur non nulla sit amet nisl tempus convallis. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <a href="#" class="service-link">
                  <span>Learn More</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-md-6" data-aos="fade-left" data-aos-delay="100">
            <div class="service-item">
              <div class="service-icon">
                <i class="bi bi-phone-fill"></i>
              </div>
              <div class="service-content">
                <h3>Mobile App Solutions</h3>
                <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vivamus magna justo, lacinia eget consectetur sed. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec rutrum congue leo eget malesuada.</p>
                <a href="#" class="service-link">
                  <span>Learn More</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-md-6" data-aos="fade-right" data-aos-delay="200">
            <div class="service-item">
              <div class="service-icon">
                <i class="bi bi-palette2"></i>
              </div>
              <div class="service-content">
                <h3>UI/UX Design</h3>
                <p>Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus. Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.</p>
                <a href="#" class="service-link">
                  <span>Learn More</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-md-6" data-aos="fade-left" data-aos-delay="200">
            <div class="service-item">
              <div class="service-icon">
                <i class="bi bi-bar-chart-line"></i>
              </div>
              <div class="service-content">
                <h3>Digital Marketing</h3>
                <p>Donec rutrum congue leo eget malesuada. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla porttitor accumsan tincidunt. Curabitur aliquet quam id dui posuere blandit.</p>
                <a href="#" class="service-link">
                  <span>Learn More</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-md-6" data-aos="fade-right" data-aos-delay="300">
            <div class="service-item">
              <div class="service-icon">
                <i class="bi bi-cloud-check"></i>
              </div>
              <div class="service-content">
                <h3>Cloud Computing</h3>
                <p>Curabitur aliquet quam id dui posuere blandit. Sed porttitor lectus nibh. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Nulla quis lorem ut libero malesuada feugiat.</p>
                <a href="#" class="service-link">
                  <span>Learn More</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-md-6" data-aos="fade-left" data-aos-delay="300">
            <div class="service-item">
              <div class="service-icon">
                <i class="bi bi-shield-lock"></i>
              </div>
              <div class="service-content">
                <h3>Cybersecurity Solutions</h3>
                <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Donec sollicitudin molestie malesuada. Curabitur arcu erat, accumsan id imperdiet et. Proin eget tortor risus.</p>
                <a href="#" class="service-link">
                  <span>Learn More</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Services Alt Section -->
    <section id="services-alt" class="services-alt section" style="
         --global-color: {{  $semua->warna_utama ?? ''}};
         --global-font-utama: {{ $semua->font_utama ?? ''}};
         --global-font-heading: {{ $semua->font_heading ?? ''}};
         --hero-font-color: {{ $hero->font_color ?? '#ffffff' }};
         --hero-font-family: {{ $hero->font ?? 'Poppins, sans-serif' }};
         --hero-font-size: {{ $hero->font_size == 's' ? '14px' : ($hero->font_size == 'm' ? '18px' : '24px') }};
         --hero-background: url('{{ asset('storage/'.$hero->image) }}');
         ">



      
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Services Alt Section -->

    <!-- Berita Section -->
      @php
    use App\Models\Sidebar;
    $menuBeritaAktif = Sidebar::where('name', 'berita')
                        ->where('status', 'active')
                        ->exists();
@endphp

@if($menuBeritaAktif)
<section id="Berita" class="portfolio section" style="
    --global-color: {{ $semua->warna_utama ?? '' }};
    --global-font-utama: {{ $semua->font_utama ?? '' }};
    --global-font-heading: {{ $semua->font_heading ?? '' }};
    --hero-font-color: {{ $hero->font_color ?? '#ffffff' }};
    --hero-font-family: {{ $hero->font ?? 'Poppins, sans-serif' }};
    --hero-font-size: {{ $hero->font_size == 's' ? '14px' : ($hero->font_size == 'm' ? '18px' : '24px') }};
    --hero-background: url('{{ asset('storage/' . $hero->image) }}');
">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Berita</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

            <div class="portfolio-filters-container" data-aos="fade-up" data-aos-delay="200">
                <ul class="portfolio-filters isotope-filters">
                    <li data-filter="*" class="filter-active">All Work</li>
                    <li data-filter=".filter-web">Web Design</li>
                    <li data-filter=".filter-graphics">Graphics</li>
                    <li data-filter=".filter-motion">Motion</li>
                    <li data-filter=".filter-brand">Branding</li>
                </ul>
            </div>

            <div class="row g-4 isotope-container" data-aos="fade-up" data-aos-delay="300">

                <!-- Portfolio Item -->
                <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-web">
                    <div class="portfolio-card">
                        <div class="portfolio-image">
                            <img src="{{ asset('assets3/img/portfolio/portfolio-1.webp') }}" class="img-fluid" alt="">
                            <div class="portfolio-overlay">
                                <div class="portfolio-actions">
                                    <a href="{{ asset('assets3/img/portfolio/portfolio-1.webp') }}" class="glightbox preview-link" data-gallery="portfolio-gallery-web">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    <a href="portfolio-details.html" class="details-link">
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-content">
                            <span class="category">Web Design</span>
                            <h3>Modern Dashboard Interface</h3>
                            <p>Maecenas faucibus mollis interdum sed posuere consectetur est at lobortis.</p>
                        </div>
                    </div>
                </div>
                <!-- End Portfolio Item -->

                <!-- Portfolio Item -->
                <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-graphics">
                    <div class="portfolio-card">
                        <div class="portfolio-image">
                            <img src="{{ asset('assets3/img/portfolio/portfolio-10.webp') }}" class="img-fluid" alt="">
                            <div class="portfolio-overlay">
                                <div class="portfolio-actions">
                                    <a href="{{ asset('assets3/img/portfolio/portfolio-10.webp') }}" class="glightbox preview-link" data-gallery="portfolio-gallery-graphics">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    <a href="portfolio-details.html" class="details-link">
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-content">
                            <span class="category">Graphics</span>
                            <h3>Creative Brand Identity</h3>
                            <p>Vestibulum id ligula porta felis euismod semper at vulputate.</p>
                        </div>
                    </div>
                </div>
                <!-- End Portfolio Item -->

                <!-- item berikutnya tetap sama, sesuaikan asset() jika perlu -->

            </div><!-- End Portfolio Container -->

        </div>

    </div>
</section>
@endif

   

    <!-- Faq Section -->
   

    <!-- Team Section -->
    <section id="team" class="team section light-background" style="
         --global-color: {{  $semua->warna_utama ?? ''}};
         --global-font-utama: {{ $semua->font_utama ?? ''}};
         --global-font-heading: {{ $semua->font_heading ?? ''}};
         --hero-font-color: {{ $hero->font_color ?? '#ffffff' }};
         --hero-font-family: {{ $hero->font ?? 'Poppins, sans-serif' }};
         --hero-font-size: {{ $hero->font_size == 's' ? '14px' : ($hero->font_size == 'm' ? '18px' : '24px') }};
         --hero-background: url('{{ asset('storage/'.$hero->image) }}');
         ">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Team</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-5">

          <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
            <div class="team-card">
              <div class="team-image">
                <img src="assets/img/person/person-m-1.webp" class="img-fluid" alt="">
                <div class="team-overlay">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque.</p>
                  <div class="team-social">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
              <div class="team-content">
                <h4>Daniel Mitchell</h4>
                <span class="position">Creative Director</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="200">
            <div class="team-card">
              <div class="team-image">
                <img src="assets/img/person/person-f-6.webp" class="img-fluid" alt="">
                <div class="team-overlay">
                  <p>Aliquam tincidunt mauris eu risus. Vestibulum auctor dapibus neque. Nunc dignissim risus id metus.</p>
                  <div class="team-social">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
              <div class="team-content">
                <h4>Rebecca Taylor</h4>
                <span class="position">Lead Developer</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="300">
            <div class="team-card">
              <div class="team-image">
                <img src="assets/img/person/person-m-6.webp" class="img-fluid" alt="">
                <div class="team-overlay">
                  <p>Cras ornare tristique elit. Integer in dui quis est placerat ornare. Phasellus a lacus a risus.</p>
                  <div class="team-social">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
              <div class="team-content">
                <h4>Marcus Johnson</h4>
                <span class="position">UI/UX Designer</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="400">
            <div class="team-card">
              <div class="team-image">
                <img src="assets/img/person/person-f-3.webp" class="img-fluid" alt="">
                <div class="team-overlay">
                  <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                  <div class="team-social">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
              <div class="team-content">
                <h4>Jessica Parker</h4>
                <span class="position">Marketing Strategist</span>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>

    </section><!-- /Team Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section" style="
         --global-color: {{  $semua->warna_utama ?? ''}};
         --global-font-utama: {{ $semua->font_utama ?? ''}};
         --global-font-heading: {{ $semua->font_heading ?? ''}};
         --hero-font-color: {{ $hero->font_color ?? '#ffffff' }};
         --hero-font-family: {{ $hero->font ?? 'Poppins, sans-serif' }};
         --hero-font-size: {{ $hero->font_size == 's' ? '14px' : ($hero->font_size == 'm' ? '18px' : '24px') }};
         --hero-background: url('{{ asset('storage/'.$hero->image) }}');
         ">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimoni</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="testimonials-slider swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 800,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": 1,
              "spaceBetween": 30,
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "768": {
                  "slidesPerView": 2
                },
                "1200": {
                  "slidesPerView": 3
                }
              }
            }
          </script>
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="testimonial-card">
                <div class="testimonial-content">
                  <p>
                    <i class="bi bi-quote quote-icon"></i>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  </p>
                </div>
                <div class="testimonial-profile">
                  <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                  <div class="profile-info">
                    <img src="assets/img/person/person-m-8.webp" alt="Profile Image">
                    <div>
                      <h3>Robert Johnson</h3>
                      <h4>Marketing Director</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-card">
                <div class="testimonial-content">
                  <p>
                    <i class="bi bi-quote quote-icon"></i>
                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et maecenas aliquam.
                  </p>
                </div>
                <div class="testimonial-profile">
                  <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                  <div class="profile-info">
                    <img src="assets/img/person/person-f-3.webp" alt="Profile Image">
                    <div>
                      <h3>Lisa Williams</h3>
                      <h4>Product Manager</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-card">
                <div class="testimonial-content">
                  <p>
                    <i class="bi bi-quote quote-icon"></i>
                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram.
                  </p>
                </div>
                <div class="testimonial-profile">
                  <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                  <div class="profile-info">
                    <img src="assets/img/person/person-f-10.webp" alt="Profile Image">
                    <div>
                      <h3>Emma Parker</h3>
                      <h4>UX Designer</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-card">
                <div class="testimonial-content">
                  <p>
                    <i class="bi bi-quote quote-icon"></i>
                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit.
                  </p>
                </div>
                <div class="testimonial-profile">
                  <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                  <div class="profile-info">
                    <img src="assets/img/person/person-m-5.webp" alt="Profile Image">
                    <div>
                      <h3>David Miller</h3>
                      <h4>Senior Developer</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-card">
                <div class="testimonial-content">
                  <p>
                    <i class="bi bi-quote quote-icon"></i>
                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat.
                  </p>
                </div>
                <div class="testimonial-profile">
                  <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                  <div class="profile-info">
                    <img src="assets/img/person/person-m-2.webp" alt="Profile Image">
                    <div>
                      <h3>Michael Davis</h3>
                      <h4>CEO &amp; Founder</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-card">
                <div class="testimonial-content">
                  <p>
                    <i class="bi bi-quote quote-icon"></i>
                    Eius ipsam praesentium dolor quaerat inventore rerum odio. Quos laudantium adipisci eius. Accusamus qui iste cupiditate sed temporibus est aspernatur.
                  </p>
                </div>
                <div class="testimonial-profile">
                  <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                  <div class="profile-info">
                    <img src="assets/img/person/person-f-7.webp" alt="Profile Image">
                    <div>
                      <h3>Sarah Thompson</h3>
                      <h4>Art Director</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End testimonial item -->
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section" style="
        --global-color: {{  $semua->warna_utama ?? ''}};
         --global-font-utama: {{ $semua->font_utama ?? ''}};
         --global-font-heading: {{ $semua->font_heading ?? ''}};
         --hero-font-color: {{ $hero->font_color ?? '#ffffff' }};
         --hero-font-family: {{ $hero->font ?? 'Poppins, sans-serif' }};
         --hero-font-size: {{ $hero->font_size == 's' ? '14px' : ($hero->font_size == 'm' ? '18px' : '24px') }};
         --hero-background: url('{{ asset('storage/'.$hero->image) }}');
         ">
    >

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 mb-5">
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="info-card">
              <div class="icon-box">
                <i class="bi bi-geo-alt"></i>
              </div>
              <h3>Our Address</h3>
              <p>2847 Rainbow Road, Springfield, IL 62701, USA</p>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="info-card">
              <div class="icon-box">
                <i class="bi bi-telephone"></i>
              </div>
              <h3>Contact Number</h3>
              <p>Mobile: +1 (555) 123-4567<br>
                Email: info@example.com</p>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="info-card">
              <div class="icon-box">
                <i class="bi bi-clock"></i>
              </div>
              <h3>Opening Hour</h3>
              <p>Monday - Saturday: 9:00 - 18:00<br>
                Sunday: Closed</p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <div class="form-wrapper" data-aos="fade-up" data-aos-delay="400">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <div class="input-group">
                      <span class="input-group-text"><i class="bi bi-person"></i></span>
                      <input type="text" name="name" class="form-control" placeholder="Your name*" required="">
                    </div>
                  </div>
                  <div class="col-md-6 form-group">
                    <div class="input-group">
                      <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                      <input type="email" class="form-control" name="email" placeholder="Email address*" required="">
                    </div>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-md-6 form-group">
                    <div class="input-group">
                      <span class="input-group-text"><i class="bi bi-phone"></i></span>
                      <input type="text" class="form-control" name="phone" placeholder="Phone number*" required="">
                    </div>
                  </div>
                  <div class="col-md-6 form-group">
                    <div class="input-group">
                      <span class="input-group-text"><i class="bi bi-list"></i></span>
                      <select name="subject" class="form-control" required="">
                        <option value="">Select service*</option>
                        <option value="Service 1">Consulting</option>
                        <option value="Service 2">Development</option>
                        <option value="Service 3">Marketing</option>
                        <option value="Service 4">Support</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group mt-3">
                    <div class="input-group">
                      <span class="input-group-text"><i class="bi bi-chat-dots"></i></span>
                      <textarea class="form-control" name="message" rows="6" placeholder="Write a message*" required=""></textarea>
                    </div>
                  </div>
                  <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div>
                  <div class="text-center">
                    <button type="submit">Submit Message</button>
                  </div>

                </div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- /Contact Section -->

  </main>

   <footer id="footer" class="footer"
        style="--default-color: {{ $footer->footer_text_color ?? '#fff' }};
               --background-color: {{ $footer->footer_bg_color ?? '#222' }};
               --heading-color: {{ $footer->footer_text_color ?? '#fff' }};
               --accent-color: #4ade80;
               --heading-font: 'Poppins', sans-serif;">

  <div class="footer-top py-5">
    <div class="container">
      <div class="row gy-4 justify-content-between">

        {{-- About Section --}}
        <div class="col-lg-4 col-md-6 footer-about">
          <div class="logo mb-3">
            <span class="fw-bold fs-4">{{ $footer->footer_institution_name ?? 'MySchool' }}</span>
          </div>
          <p class="small">{{ $footer->footer_address ?? 'Alamat belum diisi' }}</p>

          <div class="footer-contact small mt-3">
            <p><i class="bi bi-geo-alt-fill"></i> {{ $footer->footer_address ?? 'Alamat belum diisi' }}</p>
            <p><i class="bi bi-telephone-fill"></i> {{ $footer->footer_phone ?? '-' }}</p>
            <p><i class="bi bi-envelope-fill"></i> {{ $footer->footer_email ?? '-' }}</p>
          </div>

          {{-- Jam Operasional --}}
          @if($footer->footer_show_hours ?? false)
            <div class="mt-3 small">
              <h6 class="fw-semibold">Jam Operasional</h6>
              <p><i class="bi bi-clock"></i> Senin - Jumat: {{ $footer->footer_weekday_hours ?? '-' }}</p>
              <p><i class="bi bi-clock"></i> Sabtu: {{ $footer->footer_saturday_hours ?? '-' }}</p>
            </div>
          @endif

          {{-- Sosial Media --}}
          <div class="social-links d-flex gap-2 mt-3">
            @if($footer->footer_facebook)
              <a href="{{ $footer->footer_facebook }}" class="social-icon"><i class="bi bi-facebook"></i></a>
            @endif
            @if($footer->footer_instagram)
              <a href="{{ $footer->footer_instagram }}" class="social-icon"><i class="bi bi-instagram"></i></a>
            @endif
            @if($footer->footer_twitter)
              <a href="{{ $footer->footer_twitter }}" class="social-icon"><i class="bi bi-twitter-x"></i></a>
            @endif
            @if($footer->footer_youtube)
              <a href="{{ $footer->footer_youtube }}" class="social-icon"><i class="bi bi-youtube"></i></a>
            @endif
          </div>
        </div>

        {{-- Layanan --}}
        <div class="col-lg-2 col-6 footer-links">
          <h6 class="fw-semibold">Layanan</h6>
          <ul class="list-unstyled">
            @foreach(explode("\n", $footer->footer_services ?? '') as $service)
              @if(trim($service) != '')
                <li><a href="#">{{ trim($service) }}</a></li>
              @endif
            @endforeach
          </ul>
        </div>

        {{-- Program --}}
        <div class="col-lg-2 col-6 footer-links">
          <h6 class="fw-semibold">Program</h6>
          <ul class="list-unstyled">
            @foreach(explode("\n", $footer->footer_programs ?? '') as $program)
              @if(trim($program) != '')
                <li><a href="#">{{ trim($program) }}</a></li>
              @endif
            @endforeach
          </ul>
        </div>

        {{-- Info --}}
        <div class="col-lg-2 col-6 footer-links">
          <h6 class="fw-semibold">Informasi</h6>
          <ul class="list-unstyled">
            <li><a href="#">Berita</a></li>
            <li><a href="#">Pengumuman</a></li>
            <li><a href="#">Galeri</a></li>
            <li><a href="#">Kontak</a></li>
          </ul>
        </div>

      </div>
    </div>
  </div>

  {{-- Copyright --}}
  <div class="copyright text-center py-3 mt-3"
       style="background: rgba(0,0,0,0.25); font-size: 14px;">
    <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center">
      <p class="mb-0">{!! $footer->footer_copyright ?? '© <strong><span>MySchool</span></strong>. All Rights Reserved' !!}</p>
      @if(($footer->footer_show_developer ?? false) && $footer->footer_developer)
        <div class="credits small">
          Designed by <a href="#" target="_blank">{{ $footer->footer_developer }}</a>
        </div>
      @endif
    </div>
  </div>

  <style>
    .footer a { 
      color: var(--default-color); 
      text-decoration: none; 
      transition: color .3s; 
    }
    .footer a:hover { 
      color: var(--accent-color); 
    }
    .footer h6 { 
      margin-bottom: 15px; 
    }
    .footer .footer-links ul li { 
      margin-bottom: 8px; 
    }
    .footer .social-icon {
      display: flex; 
      align-items: center; 
      justify-content: center;
      width: 35px; height: 35px;
      border-radius: 50%;
      background: rgba(255,255,255,0.1);
      color: var(--default-color);
      transition: all .3s;
    }
    .footer .social-icon:hover {
      background: var(--accent-color);
      color: #fff;
      transform: translateY(-3px);
    }
  </style>
</footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets3/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets3/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets3/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets3/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets3/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets3/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets3/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('assets3/js/main.js') }}"></script>

</body>

</html>