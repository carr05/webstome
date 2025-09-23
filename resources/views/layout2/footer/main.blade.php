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