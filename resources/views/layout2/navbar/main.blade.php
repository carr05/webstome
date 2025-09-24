<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMKN 4 Malang</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        .header {
            --background-color: #7c4dff;
            --nav-color: #7c4dff;
            --default-color: #ffffff;
            --heading-color: #ffffff;
            --font-color: #ffffff;
            --font-family: 'Poppins', sans-serif;
            --font-size: 16px;
            --nav-hover-color: #e8eaff;
            --nav-dropdown-background-color: #6a3de8;
            --nav-dropdown-color: #ffffff;
            --nav-dropdown-hover-color: #e8eaff;
            --nav-mobile-background-color: #6a3de8;

            color: var(--default-color);
            background: linear-gradient(135deg, #7c4dff 0%, #6a3de8 100%);
            padding: 0;
            transition: all 0.5s;
            z-index: 997;
            box-shadow: 0 2px 15px rgba(124, 77, 255, 0.1);
        }

        .header .header-container {
            background: transparent;
            transition: all 0.5s;
            position: relative;
            padding: 12px 0;
        }

        .header .logo {
            position: absolute;
            inset: 0 auto 0 0;
            padding: 8px 20px;
            display: flex;
            align-items: center;
            z-index: 998;
            text-decoration: none;
        }

        .header .logo img {
            max-height: 45px;
            margin-right: 12px;

        }

        .logo {
            background: transparent;
        }

        .header .logo h1 {
            font-size: 24px;
            margin: 0;
            font-weight: 600;
            color: var(--font-color);
            font-family: var(--font-family);
            text-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .sitename {
            font-family: var(--font-family);
            font-size: var(--font-size);
            color: var(--font-color);
        }

        @media (max-width: 1200px) {
            .header .logo {
                order: 1;
                position: relative;
                padding: 8px 0;
                inset: unset;
            }

            .header .navmenu {
                order: 3;
            }

            .header .header-container {
                flex-wrap: wrap;
                justify-content: space-between;
            }
        }

        .scrolled .header {
            box-shadow: 0px 0 25px rgba(124, 77, 255, 0.15);
        }

        /* Navigation Menu Desktop */
        @media (min-width: 1200px) {
            .navmenu {
                padding: 0;
                margin-left: auto;
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
                font-weight: 500;
                display: flex;
                align-items: center;
                justify-content: space-between;
                white-space: nowrap;
                transition: all 0.3s ease;
                text-decoration: none;
                border-radius: 6px;
                margin: 0 2px;
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
                background: rgba(255, 255, 255, 0.1);
                transform: translateY(-1px);
            }

            .navmenu .dropdown ul {
                margin: 0;
                padding: 10px 0;
                background: var(--nav-dropdown-background-color);
                display: block;
                position: absolute;
                visibility: hidden;
                left: 0;
                top: 100%;
                opacity: 0;
                transition: all 0.3s ease;
                border-radius: 8px;
                z-index: 99;
                box-shadow: 0px 8px 30px rgba(0, 0, 0, 0.15);
                min-width: 220px;
            }

            .navmenu .dropdown ul li {
                min-width: 200px;
            }

            .navmenu .dropdown ul a {
                padding: 10px 20px;
                font-size: 14px;
                text-transform: none;
                color: var(--nav-dropdown-color);
                margin: 0;
                border-radius: 0;
                background: transparent;
            }

            .navmenu .dropdown ul a i {
                font-size: 12px;
            }

            .navmenu .dropdown ul a:hover,
            .navmenu .dropdown ul .active:hover,
            .navmenu .dropdown ul li:hover>a {
                color: var(--nav-dropdown-hover-color);
                background: rgba(255, 255, 255, 0.1);
                padding-left: 25px;
            }

            .navmenu .dropdown:hover>ul {
                opacity: 1;
                top: 100%;
                visibility: visible;
            }

            .navmenu .dropdown .dropdown ul {
                top: 0;
                left: 100%;
                visibility: hidden;
            }

            .navmenu .dropdown .dropdown:hover>ul {
                opacity: 1;
                top: 0;
                left: 100%;
                visibility: visible;
            }
        }

        /* Navigation Menu Mobile */
        @media (max-width: 1199px) {
            .mobile-nav-toggle {
                color: var(--default-color);
                font-size: 28px;
                line-height: 0;
                cursor: pointer;
                transition: color 0.3s;
                border: none;
                background: none;
                padding: 5px;
                z-index: 9999;
            }

            .navmenu {
                padding: 0;
                z-index: 9997;
            }

            .navmenu ul {
                display: none;
                list-style: none;
                position: absolute;
                inset: 100% 0 0 0;
                padding: 20px 0;
                margin: 0;
                background-color: var(--nav-mobile-background-color);
                overflow-y: auto;
                transition: 0.3s;
                z-index: 9998;
                box-shadow: 0px 8px 30px rgba(0, 0, 0, 0.15);
                height: calc(100vh - 100%);
            }

            .navmenu a,
            .navmenu a:focus {
                color: var(--nav-dropdown-color);
                padding: 12px 20px;
                font-family: var(--font-family);
                font-size: 16px;
                font-weight: 500;
                display: flex;
                align-items: center;
                justify-content: space-between;
                white-space: nowrap;
                transition: 0.3s;
                text-decoration: none;
                border-bottom: 1px solid rgba(255, 255, 255, 0.1);
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
                background-color: rgba(255, 255, 255, 0.1);
            }

            .navmenu a i:hover,
            .navmenu a:focus i:hover {
                background-color: rgba(255, 255, 255, 0.2);
            }

            .navmenu a:hover,
            .navmenu .active,
            .navmenu .active:focus {
                color: var(--nav-dropdown-hover-color);
                background: rgba(255, 255, 255, 0.1);
            }

            .navmenu .active i,
            .navmenu .active:focus i {
                background-color: rgba(255, 255, 255, 0.2);
                transform: rotate(180deg);
            }

            .navmenu .dropdown ul {
                position: static;
                display: none;
                z-index: 99;
                padding: 0;
                margin: 0;
                background-color: rgba(255, 255, 255, 0.05);
                border: none;
                box-shadow: none;
                transition: all 0.3s ease-in-out;
            }

            .navmenu .dropdown ul li a {
                padding-left: 40px;
                font-size: 14px;
            }

            .navmenu .dropdown ul ul li a {
                padding-left: 60px;
            }

            .navmenu .dropdown>.dropdown-active {
                display: block;
            }

            .mobile-nav-active {
                overflow: hidden;
            }

            .mobile-nav-active .mobile-nav-toggle {
                color: #fff;
                position: fixed;
                font-size: 32px;
                top: 20px;
                right: 20px;
                z-index: 9999;
            }

            .mobile-nav-active .navmenu {
                position: fixed;
                overflow: hidden;
                inset: 0;
                background: rgba(106, 61, 232, 0.98);
                transition: 0.3s;
                padding-top: 80px;
            }

            .mobile-nav-active .navmenu>ul {
                display: block;
            }
        }

        /* Additional styling for better visual appeal */
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
        }

        .demo-content {
            padding: 60px 20px;
            text-align: center;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 80vh;
        }

        .demo-content h2 {
            color: #7c4dff;
            margin-bottom: 20px;
        }

        /* Utility classes */
        .d-flex {
            display: flex;
        }

        .align-items-center {
            align-items: center;
        }

        .justify-content-end {
            justify-content: flex-end;
        }

        .sticky-top {
            position: sticky;
            top: 0;
        }

        .container-fluid {
            width: 100%;
            padding-right: var(--bs-gutter-x, 0.75rem);
            padding-left: var(--bs-gutter-x, 0.75rem);
            margin-right: auto;
            margin-left: auto;
        }

        .container-xl {
            max-width: 1140px;
        }

        .me-auto {
            margin-right: auto;
        }

        .d-xl-none {
            display: none;
        }

        @media (max-width: 1199px) {
            .d-xl-none {
                display: block;
            }
        }
    </style>
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center sticky-top" style="--nav-color: {{ $tampilan->warna ?? '#04415f' }};
         --font-family: {{ $tampilan->font ?? 'Poppins, sans-serif' }};
         --font-size: {{ $tampilan->font_size ?? '16px' }};
         --font-color: {{ $tampilan->font_color ?? '#04315f' }};">
        <div class="header-container container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="{{ url('/layout2/index') }}" class="logo d-flex align-items-center me-auto">
                @if(!empty($tampilan->logo))
                    <img src="{{ asset('storage/' . $tampilan->logo) }}" alt="Logo"
                        style="max-height:50px; margin-right:10px;">
                @else
                    <img src="{{ asset('assets2/img/logosmkn4.png') }}" alt="Logo"
                        style="max-height:50px; margin-right:10px;">
                @endif
                <h1 class="sitename">{{ $tampilan->nama_sekolah ?? 'SMKN 4 MALANG' }}</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{ url('/layout2/index') }}" class="active">Home</a></li>
                    <li class="dropdown">
                        <a href="#"><span>About</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="{{ url('/layout2/kepsek') }}">Kepala Sekolah</a></li>
                            <li><a href="{{ url('/layout2/admissions2') }}">Admissions</a></li>
                            <li><a href="{{ url('/layout2/academics') }}">Academics</a></li>
                            <li><a href="{{ url('/layout2/faculty_staff') }}">Faculty &amp; Staff</a></li>
                            <li><a href="{{ url('/layout2/campus_facilities') }}">Campus &amp; Facilities</a></li>
                        </ul>
                    </li>

                    <li><a href="{{ url('/layout2/students_life') }}">Students Life</a></li>
                    <li><a href="{{ url('/layout2/news') }}">Berita</a></li>
                    <li><a href="{{ url('/layout2/events') }}">Agenda</a></li>
                    <li><a href="{{ url('/layout2/alumni') }}">Alumni</a></li>

                    <li class="dropdown">
                        <a href="#"><span>More Pages</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="{{ url('/layout2/news_details') }}">News Details</a></li>
                            <li><a href="{{ url('/layout2/event_details') }}">Event Details</a></li>
                            <li><a href="{{ url('/layout2/privacy') }}">Privacy</a></li>
                            <li><a href="{{ url('/layout2/terms_of_service') }}">Terms of Service</a></li>
                            <li><a href="{{ url('/layout2/eror') }}">Error 404</a></li>
                            <li><a href="{{ url('/layout2/starter_page') }}">Starter Page</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="#">Dropdown 1</a></li>
                            <li><a href="#">Dropdown 1</a></li>
                            <li><a href="#">Dropdown 1</a></li>
                            <li><a href="#">Dropdown 1</a></li>
                            <li><a href="#">Dropdown 1</a></li>


                            <li><a href="{{ url('/layout1/contact') }}">Contact</a></li>
                        </ul>
                        <button class="mobile-nav-toggle d-xl-none bi bi-list"></button>
            </nav>

        </div>
    </header>




</body>

</html>