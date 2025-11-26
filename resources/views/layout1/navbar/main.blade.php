<style>
.header {
  --background-color: rgba(255, 255, 255, 0);
  --default-color: #ffffff;
  --heading-color: #ffffff;
  color: var(--default-color);
  background-color: var(--nav-color);
  padding: 15px 0;
  transition: all 0.5s;
  z-index: 997;
}

.header .header-container {
  background: color-mix(in srgb, var(--nav-color), transparent 97%);
  transition: all 0.5s;
  position: relative;
  padding-top: 10px;
  padding-bottom: 10px;
}

.header .logo {
  background: var(--nav-color);
  position: absolute;
  inset: 0 auto 0 0;
  padding: 0 20px;
}

.header .logo img {
  max-height: 40px;
  margin-right: 8px;
}

.header .logo h1 {
  font-size: 26px;
  margin: 0;
  font-weight: 500;
  color: var(--font-color);
  font-family: var(--font-family);
}

@media (max-width: 1200px) {
  .header .logo {
    order: 1;
  }

  .header .navmenu {
    order: 3;
  }
}

.scrolled .header {
  box-shadow: 0px 0 18px rgba(0, 0, 0, 0.1);
}

/* Global Header on Scroll
------------------------------*/
.scrolled .header {
  --background-color: #ffffff;
}

/*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
/* Navmenu - Desktop */
@media (min-width: 1200px) {
  .navmenu {
    padding: 0;
  }

  .navmenu ul {
    margin: 0;
    padding: 0;
    display: flex;
    list-style: none;
    align-items: center;
  }

  .navmenu li {
    position: relative;
  }

  .navmenu a,
  .navmenu a:focus {
    color: var(--font-color);
    padding: 18px 15px;
    font-size: var(--font-size);
    font-family: var(--font-family);
    font-weight: 400;
    display: flex;
    align-items: center;
    justify-content: space-between;
    white-space: nowrap;
    transition: 0.3s;
  }

  .navmenu a i,
  .navmenu a:focus i {
    font-size: 12px;
    line-height: 0;
    margin-left: 5px;
    transition: 0.3s;
  }

  .navmenu li:last-child a {
    padding-right: 0;
  }

  .navmenu li:hover>a,
  .navmenu .active,
  .navmenu .active:focus {
    color: var(--nav-hover-color);
  }

  .navmenu .dropdown ul {
    margin: 0;
    padding: 10px 0;
    background: var(--nav-dropdown-background-color);
    display: block;
    position: absolute;
    visibility: hidden;
    left: 14px;
    top: 130%;
    opacity: 0;
    transition: 0.3s;
    border-radius: 4px;
    z-index: 99;
    box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.1);
  }

  .navmenu .dropdown ul li {
    min-width: 200px;
  }

  .navmenu .dropdown ul a {
    padding: 10px 20px;
    font-size: 15px;
    text-transform: none;
    color: var(--nav-dropdown-color);
  }

  .navmenu .dropdown ul a i {
    font-size: 12px;
  }

  .navmenu .dropdown ul a:hover,
  .navmenu .dropdown ul .active:hover,
  .navmenu .dropdown ul li:hover>a {
    color: var(--nav-dropdown-hover-color);
  }

  .navmenu .dropdown:hover>ul {
    opacity: 1;
    top: 100%;
    visibility: visible;
  }

  .navmenu .dropdown .dropdown ul {
    top: 0;
    left: -90%;
    visibility: hidden;
  }

  .navmenu .dropdown .dropdown:hover>ul {
    opacity: 1;
    top: 0;
    left: -100%;
    visibility: visible;
  }
}

/* Navmenu - Mobile */
@media (max-width: 1199px) {
  .mobile-nav-toggle {
    color: var(--nav-color);
    font-size: 28px;
    line-height: 0;
    margin-right: 10px;
    cursor: pointer;
    transition: color 0.3s;
  }

  .navmenu {
    padding: 0;
    z-index: 9997;
  }

  .navmenu ul {
    display: none;
    list-style: none;
    position: absolute;
    inset: 60px 20px 20px 20px;
    padding: 10px 0;
    margin: 0;
    border-radius: 6px;
    background-color: var(--nav-mobile-background-color);
    overflow-y: auto;
    transition: 0.3s;
    z-index: 9998;
    box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.1);
  }

  .navmenu a,
  .navmenu a:focus {
    color: var(--nav-dropdown-color);
    padding: 10px 20px;
    font-family: var(--nav-font);
    font-size: 17px;
    font-weight: 500;
    display: flex;
    align-items: center;
    justify-content: space-between;
    white-space: nowrap;
    transition: 0.3s;
  }

  .navmenu a i,
  .navmenu a:focus i {
    font-size: 12px;
    line-height: 0;
    margin-left: 5px;
    width: 30px;
    height: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    transition: 0.3s;
    background-color: color-mix(in srgb, var(--accent-color), transparent 90%);
  }

  .navmenu a i:hover,
  .navmenu a:focus i:hover {
    background-color: var(--accent-color);
    color: var(--contrast-color);
  }

  .navmenu a:hover,
  .navmenu .active,
  .navmenu .active:focus {
    color: var(--nav-dropdown-hover-color);
  }

  .navmenu .active i,
  .navmenu .active:focus i {
    background-color: var(--accent-color);
    color: var(--contrast-color);
    transform: rotate(180deg);
  }

  .navmenu .dropdown ul {
    position: static;
    display: none;
    z-index: 99;
    padding: 10px 0;
    margin: 10px 20px;
    background-color: var(--nav-dropdown-background-color);
    border: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
    box-shadow: none;
    transition: all 0.5s ease-in-out;
  }

  .navmenu .dropdown ul ul {
    background-color: rgba(33, 37, 41, 0.1);
  }

  .navmenu .dropdown>.dropdown-active {
    display: block;
    background-color: rgba(33, 37, 41, 0.03);
  }

  .mobile-nav-active {
    overflow: hidden;
  }

  .mobile-nav-active .mobile-nav-toggle {
    color: #fff;
    position: absolute;
    font-size: 32px;
    top: 15px;
    right: 15px;
    margin-right: 0;
    z-index: 9999;
  }

  .mobile-nav-active .navmenu {
    position: fixed;
    overflow: hidden;
    inset: 0;
    background: rgba(33, 37, 41, 0.8);
    transition: 0.3s;
  }

  .mobile-nav-active .navmenu>ul {
    display: block;
  }
  .sitename {
  font-family: var(--font-family);
  font-size: var(--font-size);
}
}
</style>
<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top" 
  style="--nav-color: {{ $tampilan->warna ?? '#04415f' }};
         --font-family: {{ $tampilan->font ?? 'Poppins, sans-serif' }};
         --font-size: {{ $tampilan->font_size ?? '16px' }};
         --font-color: {{ $tampilan->font_color ?? '#04315f' }};">
    <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-end">

        <a href="{{ url('/layout1/index') }}" class="logo d-flex align-items-center me-auto">
  @if(!empty($tampilan->logo))
    <img src="{{ asset('storage/'.$tampilan->logo) }}" alt="Logo" style="max-height:50px; margin-right:10px;">
  @else
    <img src="{{ asset('assets2/img/logosmkn4.png') }}" alt="Logo" style="max-height:50px; margin-right:10px;">
  @endif
  <h1 class="sitename">{{ $tampilan->nama_sekolah ?? 'SMKN 4 MALANG' }}</h1>
</a>
      

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ url('/layout1/index') }}" class="active">Home</a></li>
          <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="{{ url('/layout1/kepsek') }}" >Kepala Sekolah</a></li>
              <li><a href="{{ url('/layout1/admissions') }}">Admissions</a></li>
              <li><a href="{{ url('/layout1/academics') }}">Academics</a></li>
              <li><a href="{{ url('/layout1/faculty_staff') }}">Faculty &amp; Staff</a></li>
              <li><a href="{{ url('/layout1/campus_facilities') }}">Campus &amp; Facilities</a></li>
            </ul>
          </li>

@php
    use App\Models\Sidebar;

    $menuStudentsLifeAktif = Sidebar::where('name', 'students_life')
                                    ->where('status', 'active')
                                    ->exists();

    $menuBeritaAktif = Sidebar::where('name', 'berita')
                              ->where('status', 'active')
                              ->exists();

    $menuEventsAktif = Sidebar::where('name', 'events')
                              ->where('status', 'active')
                              ->exists();
@endphp

@if($menuStudentsLifeAktif)
<li><a href="{{ url('/layout1/students_life') }}">Students Life</a></li>
@endif

@if($menuBeritaAktif)
<li><a href="{{ url('/layout1/berita') }}">Berita</a></li>
@endif

@if($menuEventsAktif)
<li><a href="{{ url('/layout1/events') }}">Agenda</a></li>
@endif



        <li><a href="{{ url('/layout1/students_life') }}">Students Life</a></li>
          <li class="dropdown"><a href="#"><span>More Pages</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="{{ url('/layout1/news_details') }}">News Details</a></li>
            <li><a href="{{ url('/layout1/event_details') }}">Event Details</a></li>
            <li><a href="{{ url('/layout1/privacy') }}">Privacy</a></li>
            <li><a href="{{ url('/layout1/terms_of_service') }}">Terms of Service</a></li>
            <li><a href="{{ url('/layout1/eror') }}">Error 404</a></li>
            <li><a href="{{ url('/layout1/starter_page') }}">Starter Page</a></li>
            </ul>
          </li>

          <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li>
          <li><a href="{{ url('/layout1/contact') }}">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>