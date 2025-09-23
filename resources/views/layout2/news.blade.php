<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>News - MySchool Bootstrap Template</title>
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

<body class="news-page">

  @include('layout2.navbar.main')

  <main class="main">

    <!-- Page Title -->
    <div class="page-title">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1 class="heading-title">News</h1>
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
            <li class="current">News</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- News Hero Section -->
    <section id="news-hero" class="news-hero section">

      <div class="container">

        <div class="row g-4">
          <!-- Main Content Area -->
          <div class="col-lg-8">
            <!-- Featured Article -->
            <article class="featured-post position-relative mb-4">
              <img src="assets/img/blog/blog-hero-9.webp" alt="Featured post" class="img-fluid">
              <div class="post-overlay">
                <div class="post-content">
                  <div class="post-meta">
                    <span class="category">Politics</span>
                    <span class="date">02/15/2024</span>
                  </div>
                  <h2 class="post-title">
                    <a href="#">Optimizing Strategic Initiatives Through Cross-Functional Collaboration</a>
                  </h2>
                  <p class="post-excerpt">Leveraging core competencies to drive sustainable growth and maximize stakeholder value through innovative solutions and market-driven approaches.</p>
                  <div class="post-author">
                    <span>by</span>
                    <a href="#">Jennifer Mitchell</a>
                  </div>
                </div>
              </div>
            </article>

            <!-- Secondary Articles -->
            <div class="row g-4">
              <div class="col-md-6">
                <article class="secondary-post">
                  <div class="post-image">
                    <img src="assets/img/blog/blog-post-1.webp" alt="Post" class="img-fluid">
                  </div>
                  <div class="post-content">
                    <div class="post-meta">
                      <span class="category">Politics</span>
                      <span class="date">03/21/2024</span>
                    </div>
                    <h3 class="post-title">
                      <a href="#">Implementing Agile Methodologies for Enhanced Business Performance</a>
                    </h3>
                    <div class="post-author">
                      <span>by</span>
                      <a href="#">Robert Anderson</a>
                    </div>
                  </div>
                </article>
              </div>
              <div class="col-md-6">
                <article class="secondary-post">
                  <div class="post-image">
                    <img src="assets/img/blog/blog-post-2.webp" alt="Post" class="img-fluid">
                  </div>
                  <div class="post-content">
                    <div class="post-meta">
                      <span class="category">Business</span>
                      <span class="date">01/30/2024</span>
                    </div>
                    <h3 class="post-title">
                      <a href="#">Streamlining Operations Through Digital Transformation Solutions</a>
                    </h3>
                    <div class="post-author">
                      <span>by</span>
                      <a href="#">Sarah Thompson</a>
                    </div>
                  </div>
                </article>
              </div>
            </div>
          </div><!-- End Main Content Area -->

          <!-- Sidebar with Tabs -->
          <div class="col-lg-4">
            <div class="news-tabs">
              <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#top-stories" type="button">Top stories</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#trending" type="button">Trending News</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#latest" type="button">Latest News</button>
                </li>
              </ul>

              <div class="tab-content">
                <!-- Top Stories Tab -->
                <div class="tab-pane fade show active" id="top-stories">
                  <article class="tab-post">
                    <div class="row g-0 align-items-center">
                      <div class="col-4">
                        <img src="assets/img/blog/blog-post-square-1.webp" alt="Post" class="img-fluid">
                      </div>
                      <div class="col-8">
                        <div class="post-content">
                          <span class="category">Science</span>
                          <h4 class="post-title"><a href="#">Maximizing ROI Through Strategic Resource Allocation</a></h4>
                          <div class="post-author">by <a href="#">Michael Davidson</a></div>
                        </div>
                      </div>
                    </div>
                  </article>

                  <article class="tab-post">
                    <div class="row g-0 align-items-center">
                      <div class="col-4">
                        <img src="assets/img/blog/blog-post-square-2.webp" alt="Post" class="img-fluid">
                      </div>
                      <div class="col-8">
                        <div class="post-content">
                          <span class="category">Travel</span>
                          <h4 class="post-title"><a href="#">Leveraging Big Data Analytics for Market Intelligence</a></h4>
                          <div class="post-author">by <a href="#">Emily Richardson</a></div>
                        </div>
                      </div>
                    </div>
                  </article>

                  <article class="tab-post">
                    <div class="row g-0 align-items-center">
                      <div class="col-4">
                        <img src="assets/img/blog/blog-post-square-3.webp" alt="Post" class="img-fluid">
                      </div>
                      <div class="col-8">
                        <div class="post-content">
                          <span class="category">Politics</span>
                          <h4 class="post-title"><a href="#">Enhancing Customer Experience Through Digital Innovation</a></h4>
                          <div class="post-author">by <a href="#">Daniel Cooper</a></div>
                        </div>
                      </div>
                    </div>
                  </article>

                  <article class="tab-post">
                    <div class="row g-0 align-items-center">
                      <div class="col-4">
                        <img src="assets/img/blog/blog-post-square-4.webp" alt="Post" class="img-fluid">
                      </div>
                      <div class="col-8">
                        <div class="post-content">
                          <span class="category">Technology</span>
                          <h4 class="post-title"><a href="#">Transforming Business Models Through Digital Innovation</a></h4>
                          <div class="post-author">by <a href="#">Rachel Stevens</a></div>
                        </div>
                      </div>
                    </div>
                  </article>

                  <article class="tab-post">
                    <div class="row g-0 align-items-center">
                      <div class="col-4">
                        <img src="assets/img/blog/blog-post-square-5.webp" alt="Post" class="img-fluid">
                      </div>
                      <div class="col-8">
                        <div class="post-content">
                          <span class="category">Finance</span>
                          <h4 class="post-title"><a href="#">Strategic Investment Planning for Sustainable Growth</a></h4>
                          <div class="post-author">by <a href="#">Andrew Phillips</a></div>
                        </div>
                      </div>
                    </div>
                  </article>
                </div>

                <!-- Trending News Tab -->
                <div class="tab-pane fade" id="trending">
                  <article class="tab-post">
                    <div class="row g-0 align-items-center">
                      <div class="col-4">
                        <img src="assets/img/blog/blog-post-square-4.webp" alt="Post" class="img-fluid">
                      </div>
                      <div class="col-8">
                        <div class="post-content">
                          <span class="category">Science</span>
                          <h4 class="post-title"><a href="#">Implementing Sustainable Business Practices for Long-term Growth</a></h4>
                          <div class="post-author">by <a href="#">Alexandra Foster</a></div>
                        </div>
                      </div>
                    </div>
                  </article>

                  <article class="tab-post">
                    <div class="row g-0 align-items-center">
                      <div class="col-4">
                        <img src="assets/img/blog/blog-post-square-5.webp" alt="Post" class="img-fluid">
                      </div>
                      <div class="col-8">
                        <div class="post-content">
                          <span class="category">Style</span>
                          <h4 class="post-title"><a href="#">Optimizing Supply Chain Management Through Technology Integration</a></h4>
                          <div class="post-author">by <a href="#">Christopher Wells</a></div>
                        </div>
                      </div>
                    </div>
                  </article>

                  <article class="tab-post">
                    <div class="row g-0 align-items-center">
                      <div class="col-4">
                        <img src="assets/img/blog/blog-post-square-6.webp" alt="Post" class="img-fluid">
                      </div>
                      <div class="col-8">
                        <div class="post-content">
                          <span class="category">Politics</span>
                          <h4 class="post-title"><a href="#">Developing Strategic Partnerships for Market Expansion</a></h4>
                          <div class="post-author">by <a href="#">Victoria Palmer</a></div>
                        </div>
                      </div>
                    </div>
                  </article>

                  <article class="tab-post">
                    <div class="row g-0 align-items-center">
                      <div class="col-4">
                        <img src="assets/img/blog/blog-post-square-7.webp" alt="Post" class="img-fluid">
                      </div>
                      <div class="col-8">
                        <div class="post-content">
                          <span class="category">Marketing</span>
                          <h4 class="post-title"><a href="#">Enhancing Brand Value Through Customer-Centric Strategies</a></h4>
                          <div class="post-author">by <a href="#">Sophia Rodriguez</a></div>
                        </div>
                      </div>
                    </div>
                  </article>

                  <article class="tab-post">
                    <div class="row g-0 align-items-center">
                      <div class="col-4">
                        <img src="assets/img/blog/blog-post-square-8.webp" alt="Post" class="img-fluid">
                      </div>
                      <div class="col-8">
                        <div class="post-content">
                          <span class="category">Leadership</span>
                          <h4 class="post-title"><a href="#">Building High-Performance Teams in Dynamic Environments</a></h4>
                          <div class="post-author">by <a href="#">Nathan Brooks</a></div>
                        </div>
                      </div>
                    </div>
                  </article>
                </div>

                <!-- Latest News Tab -->
                <div class="tab-pane fade" id="latest">
                  <article class="tab-post">
                    <div class="row g-0 align-items-center">
                      <div class="col-4">
                        <img src="assets/img/blog/blog-post-square-7.webp" alt="Post" class="img-fluid">
                      </div>
                      <div class="col-8">
                        <div class="post-content">
                          <span class="category">Health</span>
                          <h4 class="post-title"><a href="#">Accelerating Innovation Through Cross-functional Collaboration</a></h4>
                          <div class="post-author">by <a href="#">Benjamin Carter</a></div>
                        </div>
                      </div>
                    </div>
                  </article>

                  <article class="tab-post">
                    <div class="row g-0 align-items-center">
                      <div class="col-4">
                        <img src="assets/img/blog/blog-post-square-8.webp" alt="Post" class="img-fluid">
                      </div>
                      <div class="col-8">
                        <div class="post-content">
                          <span class="category">Business</span>
                          <h4 class="post-title"><a href="#">Driving Business Growth Through Strategic Digital Initiatives</a></h4>
                          <div class="post-author">by <a href="#">Olivia Martinez</a></div>
                        </div>
                      </div>
                    </div>
                  </article>

                  <article class="tab-post">
                    <div class="row g-0 align-items-center">
                      <div class="col-4">
                        <img src="assets/img/blog/blog-post-square-9.webp" alt="Post" class="img-fluid">
                      </div>
                      <div class="col-8">
                        <div class="post-content">
                          <span class="category">Sports</span>
                          <h4 class="post-title"><a href="#">Maximizing Operational Efficiency Through Process Optimization</a></h4>
                          <div class="post-author">by <a href="#">William Turner</a></div>
                        </div>
                      </div>
                    </div>
                  </article>

                  <article class="tab-post">
                    <div class="row g-0 align-items-center">
                      <div class="col-4">
                        <img src="assets/img/blog/blog-post-square-10.webp" alt="Post" class="img-fluid">
                      </div>
                      <div class="col-8">
                        <div class="post-content">
                          <span class="category">Innovation</span>
                          <h4 class="post-title"><a href="#">Leveraging AI Solutions for Business Process Automation</a></h4>
                          <div class="post-author">by <a href="#">Isabella Clark</a></div>
                        </div>
                      </div>
                    </div>
                  </article>

                  <article class="tab-post">
                    <div class="row g-0 align-items-center">
                      <div class="col-4">
                        <img src="assets/img/blog/blog-post-square-6.webp" alt="Post" class="img-fluid">
                      </div>
                      <div class="col-8">
                        <div class="post-content">
                          <span class="category">Strategy</span>
                          <h4 class="post-title"><a href="#">Implementing Agile Framework for Project Management Excellence</a></h4>
                          <div class="post-author">by <a href="#">Marcus Henderson</a></div>
                        </div>
                      </div>
                    </div>
                  </article>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /News Hero Section -->

    <!-- News Posts Section -->
    <section id="news-posts" class="news-posts section">

      <div class="container">

        <div class="row gy-5">

          <div class="col-xl-3 col-md-6">
            <div class="post-box">
              <div class="post-img"><img src="assets/img/blog/blog-post-1.webp" class="img-fluid" alt=""></div>
              <div class="meta">
                <span class="post-date">Tue, December 12</span>
                <span class="post-author"> / Julia Parker</span>
              </div>
              <h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis</h3>
              <p>Illum voluptas ab enim placeat. Adipisci enim velit nulla. Vel omnis laudantium. Asperiores eum ipsa est officiis. Modi qui magni est...</p>
              <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-xl-3 col-md-6">
            <div class="post-box">
              <div class="post-img"><img src="assets/img/blog/blog-post-2.webp" class="img-fluid" alt=""></div>
              <div class="meta">
                <span class="post-date">Fri, September 05</span>
                <span class="post-author"> / Mario Douglas</span>
              </div>
              <h3 class="post-title">Et repellendus molestiae qui est sed omnis</h3>
              <p>Voluptatem nesciunt omnis libero autem tempora enim ut ipsam id. Odit quia ab eum assumenda. Quisquam omnis doloribus...</p>
              <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-xl-3 col-md-6">
            <div class="post-box">
              <div class="post-img"><img src="assets/img/blog/blog-post-3.webp" class="img-fluid" alt=""></div>
              <div class="meta">
                <span class="post-date">Tue, July 27</span>
                <span class="post-author"> / Lisa Hunter</span>
              </div>
              <h3 class="post-title">Quia assumenda est et veritati</h3>
              <p>Quia nam eaque omnis explicabo similique eum quaerat similique laboriosam. Quis omnis repellat sed quae consectetur magnam...</p>
              <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-xl-3 col-md-6">
            <div class="post-box">
              <div class="post-img"><img src="assets/img/blog/blog-post-4.webp" class="img-fluid" alt=""></div>
              <div class="meta">
                <span class="post-date">Tue, Sep 16</span>
                <span class="post-author"> / Mario Douglas</span>
              </div>
              <h3 class="post-title">Pariatur quia facilis similique deleniti</h3>
              <p>Et consequatur eveniet nam voluptas commodi cumque ea est ex. Aut quis omnis sint ipsum earum quia eligendi...</p>
              <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /News Posts Section -->

    <!-- Pagination 2 Section -->
    <section id="pagination-2" class="pagination-2 section">

      <div class="container">
        <nav class="d-flex justify-content-center" aria-label="Page navigation">
          <ul>
            <li>
              <a href="#" aria-label="Previous page">
                <i class="bi bi-arrow-left"></i>
                <span class="d-none d-sm-inline">Previous</span>
              </a>
            </li>

            <li><a href="#" class="active">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li class="ellipsis">...</li>
            <li><a href="#">8</a></li>
            <li><a href="#">9</a></li>
            <li><a href="#">10</a></li>

            <li>
              <a href="#" aria-label="Next page">
                <span class="d-none d-sm-inline">Next</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </li>
          </ul>
        </nav>
      </div>

    </section><!-- /Pagination 2 Section -->

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