<header id="header" class="header d-flex align-items-center sticky-top" 
  style="--nav-color: {{ $tampilan->warna ?? '#04415f' }};
           --font-family: {{ $tampilan->font ?? 'Poppins, sans-serif' }};
           --font-size: {{ $tampilan->font_size ?? '16px' }};">
         
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.webp" alt=""> -->
        <i class="bi bi-buildings" ></i>
        <h1 class="sitename" >MySchool</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ url('/layout2/index') }}">Beranda</a></li>
          <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="{{ url('/layout2/kepsek') }}"class="{{ Request::is('kepsek') ? 'active' : '' }}">Kepala Sekolah</a></li>
              <li><a href="{{ url('/layout2/admissions') }}">Admissions</a></li>
              <li><a href="{{ url('/layout2/academics') }}">Academics</a></li>
              <li><a href="{{ url('/layout2/faculty_staff') }}">Faculty &amp; Staff</a></li>
              <li><a href="{{ url('/layout2/campus_facilities') }}">Campus &amp; Facilities</a></li>
            </ul>
          </li>

          {{-- dari sini --}}
           <li><a href="{{ url('/layout2/students_life') }}">Students Life</a></li>
           <li><a href="{{ url('/layout2/news') }}">Berita</a></li>
           <li><a href="{{ url('/layout2/events') }}">Agenda</a></li>
           <li><a href="{{ url('/layout2/alumni') }}">Alumni</a></li>
          <li class="dropdown"><a href="#"><span>More Pages</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
               <li><a href="{{ url('/layout2/news_details') }}">News Details</a></li>
               <li><a href="{{ url('/layout2/event_details') }}">Event Details</a></li>
               <li><a href="{{ url('/layout2/privacy') }}">Privacy</a></li>
               <li><a href="{{ url('/layout2/terms_of_service') }}">Terms of Service</a></li>
               <li><a href="{{ url('/layout2/eror') }}">Error 404</a></li>
               <li><a href="{{ url('/layout2/starter_page') }}">Starter Page</a></li>
            </ul>
          </li>

          <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>


    </div>
  </header>