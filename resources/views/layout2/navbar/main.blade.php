<header id="header" 
  class="header d-flex align-items-center sticky-top" 
  style="
    background-color: {{ $tampilan->warna ?? '#04415f' }};
    font-family: {{ $tampilan->font ?? 'Poppins, sans-serif' }};
    font-size: {{ $tampilan->font_size ?? '16px' }};
    color: {{ $tampilan->font_color ?? '#ffffff' }};
  ">

  <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

    <a href="{{ url('/') }}" class="logo d-flex align-items-center">
      @if(!empty($tampilan->logo))
        <img src="{{ asset('storage/' . $tampilan->logo) }}" alt="Logo" style="max-height: 50px; margin-right: 8px;">
      @endif
      <h1 class="sitename">{{ $tampilan->nama_sekolah ?? 'Nama Sekolah' }}</h1>
    </a>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="{{ url('/layout2/index') }}" class="active">Home</a></li>

        <!-- {{-- Menu 1 --}} -->
        @if(!empty($tampilan->menu1))
          <li class="dropdown">
            <a href="#"><span>{{ $tampilan->menu1 }}</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              @if(!empty($tampilan->menu1a)) <li><a href="#">{{ ucfirst($tampilan->menu1a) }}</a></li> @endif
              @if(!empty($tampilan->menu1b)) <li><a href="{{ url($tampilan->menu1b) }}">{{ ucfirst($tampilan->menu1b) }}</a></li> @endif
              @if(!empty($tampilan->menu1c)) <li><a href="{{ url($tampilan->menu1c) }}">{{ ucfirst($tampilan->menu1c) }}</a></li> @endif
            </ul>
          </li>
        @endif

        <!-- {{-- Menu 2 --}} -->
        @if(!empty($tampilan->menu2)) <li><a href="{{ url($tampilan->menu2) }}">{{ ucfirst($tampilan->menu2) }}</a></li> @endif
        <!-- {{-- Menu 3 --}} -->
        @if(!empty($tampilan->menu3)) <li><a href="{{ url($tampilan->menu3) }}">{{ ucfirst($tampilan->menu3) }}</a></li> @endif
        <!-- {{-- Menu 4 --}} -->
        @if(!empty($tampilan->menu4)) <li><a href="{{ url($tampilan->menu4) }}">{{ ucfirst($tampilan->menu4) }}</a></li> @endif
        <!-- {{-- Menu 5 --}} -->
        @if(!empty($tampilan->menu5))
          <li class="dropdown">
            <a href="#"><span>{{ $tampilan->menu5 }}</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Submenu 1</a></li>
              <li><a href="#">Submenu 2</a></li>
              <li><a href="#">Submenu 3</a></li>
            </ul>
          </li>
        @endif

        <li><a href="{{ url('/contact') }}">Contact</a></li>

      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

  </div>
</header>
