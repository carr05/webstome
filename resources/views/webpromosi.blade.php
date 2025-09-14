<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webstome - Premium Dashboard Templates & Themes</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary-color: #5955B3;
            --primary-dark: #4a4699;
            --primary-light: #7773c7;
            --secondary-color: #FF6B35;
            --success-color: #28A745;
            --warning-color: #FFC107;
            --danger-color: #DC3545;
            --dark-color: #1a1a2e;
            --light-color: #f8f9ff;
            --gray-100: #f8f9fa;
            --gray-200: #e9ecef;
            --gray-300: #dee2e6;
            --gray-400: #ced4da;
            --gray-500: #adb5bd;
            --gray-600: #6c757d;
            --gray-700: #495057;
            --gray-800: #343a40;
            --gray-900: #212529;
            --white: #ffffff;
        }

        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            color: var(--gray-800);
            overflow-x: hidden;
            background: var(--white);
        }

        /* Header */
        header {
            position: fixed;
            top: 0;
            width: 100%;
            background: var(--white);
            box-shadow: 0 2px 30px rgba(89, 85, 179, 0.1);
            z-index: 1000;
            padding: 1rem 0;
            transition: all 0.3s ease;
        }

        .header-top {
            background: var(--primary-color);
            color: var(--white);
            padding: 0.5rem 0;
            font-size: 0.85rem;
            text-align: center;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--primary-color);
        }

        .logo-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-light) 100%);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 2.5rem;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--gray-700);
            font-weight: 500;
            font-size: 0.95rem;
            transition: color 0.3s ease;
            position: relative;
        }

        .nav-links a:hover {
            color: var(--primary-color);
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary-color);
            transition: width 0.3s ease;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .cart-icon {
            position: relative;
            color: var(--gray-600);
            font-size: 1.2rem;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .cart-icon:hover {
            color: var(--primary-color);
        }

        .cart-badge {
            position: absolute;
            top: -8px;
            right: -8px;
            background: var(--secondary-color);
            color: var(--white);
            border-radius: 50%;
            width: 18px;
            height: 18px;
            font-size: 0.7rem;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-light) 100%);
            color: var(--white);
            padding: 0.8rem 2rem;
            border: none;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.9rem;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            box-shadow: 0 4px 15px rgba(89, 85, 179, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(89, 85, 179, 0.4);
        }

        .btn-secondary {
            background: var(--white);
            color: var(--primary-color);
            padding: 0.8rem 2rem;
            border: 2px solid var(--primary-color);
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.9rem;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .btn-secondary:hover {
            background: var(--primary-color);
            color: var(--white);
            transform: translateY(-2px);
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, var(--light-color) 0%, #e8e7ff 100%);
            padding: 8rem 0 5rem;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -20%;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(89, 85, 179, 0.1) 0%, transparent 70%);
            border-radius: 50%;
        }

        .hero-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
            position: relative;
            z-index: 2;
        }

        .hero-content h1 {
            font-size: 3.2rem;
            font-weight: 800;
            color: var(--dark-color);
            line-height: 1.2;
            margin-bottom: 1.5rem;
        }

        .hero-highlight {
            color: var(--primary-color);
            position: relative;
        }

        .hero-highlight::after {
            content: '';
            position: absolute;
            bottom: 5px;
            left: 0;
            width: 100%;
            height: 8px;
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-light) 100%);
            opacity: 0.3;
            border-radius: 4px;
        }

        .hero-subtitle {
            font-size: 1.2rem;
            color: var(--gray-600);
            margin-bottom: 2rem;
            font-weight: 400;
        }

        .hero-stats {
            display: flex;
            gap: 2rem;
            margin-bottom: 2.5rem;
        }

        .stat-item {
            text-align: center;
        }

        .stat-number {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--primary-color);
            display: block;
        }

        .stat-label {
            font-size: 0.85rem;
            color: var(--gray-600);
            font-weight: 500;
        }

        .hero-buttons {
            display: flex;
            gap: 1.5rem;
            align-items: center;
        }

        .price-tag {
            background: var(--success-color);
            color: var(--white);
            padding: 0.5rem 1.5rem;
            border-radius: 30px;
            font-weight: 600;
            font-size: 0.9rem;
            margin-left: 1rem;
            position: relative;
        }

        .price-tag::before {
            content: '';
            position: absolute;
            left: -8px;
            top: 50%;
            transform: translateY(-50%);
            width: 0;
            height: 0;
            border-top: 8px solid transparent;
            border-bottom: 8px solid transparent;
            border-right: 8px solid var(--success-color);
        }

        .hero-image {
            position: relative;
        }

        .dashboard-preview {
            background: var(--white);
            border-radius: 20px;
            padding: 1.5rem;
            box-shadow: 0 20px 60px rgba(89, 85, 179, 0.15);
            position: relative;
            transform: perspective(1000px) rotateY(-15deg) rotateX(5deg);
            transition: transform 0.3s ease;
        }

        .dashboard-preview:hover {
            transform: perspective(1000px) rotateY(-10deg) rotateX(2deg);
        }

        .preview-header {
            display: flex;
            gap: 0.5rem;
            margin-bottom: 1.5rem;
            align-items: center;
        }

        .preview-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
        }

        .preview-dot:nth-child(1) { background: #ff5f57; }
        .preview-dot:nth-child(2) { background: #ffbd2e; }
        .preview-dot:nth-child(3) { background: #28ca42; }

        .preview-title {
            margin-left: auto;
            font-size: 0.9rem;
            font-weight: 600;
            color: var(--gray-600);
        }

        /* Product Grid */
        .products {
            padding: 5rem 0;
            background: var(--white);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .section-header {
            text-align: center;
            margin-bottom: 4rem;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--dark-color);
            margin-bottom: 1rem;
        }

        .section-subtitle {
            font-size: 1.1rem;
            color: var(--gray-600);
            max-width: 600px;
            margin: 0 auto;
        }

        .product-filters {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 3rem;
            flex-wrap: wrap;
        }

        .filter-btn {
            padding: 0.7rem 1.5rem;
            background: var(--gray-100);
            color: var(--gray-600);
            border: none;
            border-radius: 25px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 0.9rem;
        }

        .filter-btn.active,
        .filter-btn:hover {
            background: var(--primary-color);
            color: var(--white);
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
        }

        .product-card {
            background: var(--white);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 30px rgba(89, 85, 179, 0.08);
            transition: all 0.3s ease;
            position: relative;
            z-index: 1;
            border: 1px solid var(--gray-200);
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 50px rgba(89, 85, 179, 0.15);
        }

        .product-image {
            height: 220px;
            background: linear-gradient(135deg, var(--light-color) 0%, #e8e7ff 100%);
            position: relative;
            overflow: hidden;
        }

        .product-badge {
            position: absolute;
            z-index: 10;
            top: 1rem;
            left: 1rem;
            background: var(--secondary-color);
            color: var(--white);
            padding: 0.3rem 0.8rem;
            border-radius: 15px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .product-badge.bestseller {
            background: var(--success-color);
        }

        .product-preview {
            width: 90%;
            height: 160px;
            background: var(--white);
            border-radius: 10px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            padding: 1rem;
        }

        .preview-nav {
            height: 30px;
            background: var(--gray-100);
            border-radius: 5px;
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
            padding: 0 0.5rem;
            gap: 0.3rem;
        }

        .preview-nav::before {
            content: '';
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: var(--primary-color);
        }

        .preview-content {
            flex: 1;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0.5rem;
        }

        .preview-widget {
            background: var(--light-color);
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.7rem;
            color: var(--primary-color);
            font-weight: 600;
        }

        .product-info {
            padding: 1.5rem;
        }

        .product-title {
            font-size: 1.2rem;
            font-weight: 600;
            color: var(--dark-color);
            margin-bottom: 0.5rem;
        }

        .product-description {
            font-size: 0.9rem;
            color: var(--gray-600);
            margin-bottom: 1rem;
            line-height: 1.5;
        }

        .product-features {
            display: flex;
            gap: 0.5rem;
            margin-bottom: 1.5rem;
            flex-wrap: wrap;
        }

        .feature-tag {
            background: var(--light-color);
            color: var(--primary-color);
            padding: 0.2rem 0.8rem;
            border-radius: 15px;
            font-size: 0.75rem;
            font-weight: 500;
        }

        .product-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .product-price {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .price-current {
            font-size: 1.4rem;
            font-weight: 700;
            color: var(--primary-color);
        }

        .price-original {
            font-size: 1rem;
            color: var(--gray-500);
            text-decoration: line-through;
        }

        .product-actions {
            display: flex;
            gap: 0.5rem;
        }

        .btn-cart {
            background: var(--primary-color);
            color: var(--white);
            border: none;
            padding: 0.6rem 1.2rem;
            border-radius: 8px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .btn-cart:hover {
            background: var(--primary-dark);
            transform: translateY(-1px);
        }

        .btn-preview {
            background: var(--gray-100);
            color: var(--gray-600);
            border: none;
            padding: 0.6rem;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-preview:hover {
            background: var(--gray-200);
            color: var(--primary-color);
        }

        /* Features Section */
        .features {
            padding: 5rem 0;
            background: var(--light-color);
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .feature-card {
            background: var(--white);
            padding: 2.5rem 2rem;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 5px 30px rgba(89, 85, 179, 0.08);
            transition: all 0.3s ease;
            border: 1px solid var(--gray-200);
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 50px rgba(89, 85, 179, 0.15);
        }

        .feature-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-light) 100%);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            color: var(--white);
            font-size: 2rem;
        }

        .feature-title {
            font-size: 1.3rem;
            font-weight: 600;
            color: var(--dark-color);
            margin-bottom: 1rem;
        }

        .feature-description {
            color: var(--gray-600);
            line-height: 1.6;
        }

        /* Testimonials */
        .testimonials {
            padding: 5rem 0;
            background: var(--white);
        }

        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .testimonial-card {
            background: var(--white);
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 5px 30px rgba(89, 85, 179, 0.08);
            border: 1px solid var(--gray-200);
            position: relative;
        }

        .testimonial-quote {
            font-size: 3rem;
            color: var(--primary-color);
            opacity: 0.3;
            position: absolute;
            top: 1rem;
            left: 1.5rem;
        }

        .testimonial-content {
            margin: 2rem 0 1.5rem;
            font-style: italic;
            color: var(--gray-700);
            line-height: 1.6;
        }

        .testimonial-rating {
            color: #FFD700;
            margin-bottom: 1rem;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .author-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-light) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-weight: 600;
        }

        .author-info h4 {
            color: var(--dark-color);
            font-weight: 600;
            margin-bottom: 0.2rem;
        }

        .author-info p {
            color: var(--gray-600);
            font-size: 0.9rem;
        }

        /* Footer */
        footer {
            background: var(--dark-color);
            color: var(--white);
            padding: 4rem 0 2rem;
        }

        .footer-content {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr;
            gap: 3rem;
            margin-bottom: 3rem;
        }

        .footer-brand {
            color: var(--white);
        }

        .footer-brand .logo {
            color: var(--white);
            margin-bottom: 1rem;
        }

        .footer-description {
            color: var(--gray-400);
            margin-bottom: 2rem;
            line-height: 1.6;
        }

        .social-links {
            display: flex;
            gap: 1rem;
        }

        .social-link {
            width: 40px;
            height: 40px;
            background: var(--primary-color);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .social-link:hover {
            background: var(--primary-light);
            transform: translateY(-2px);
        }

        .footer-section h4 {
            color: var(--white);
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .footer-section a {
            color: var(--gray-400);
            text-decoration: none;
            display: block;
            margin-bottom: 0.5rem;
            transition: color 0.3s ease;
        }

        .footer-section a:hover {
            color: var(--primary-light);
        }

        .footer-bottom {
            border-top: 1px solid var(--gray-700);
            padding-top: 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: var(--gray-400);
        }

        .payment-methods {
            display: flex;
            gap: 0.5rem;
            align-items: center;
        }

        .payment-icon {
            width: 40px;
            height: 25px;
            background: var(--white);
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.7rem;
            color: var(--gray-600);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .header-top { display: none; }
            
            .nav-links {
                display: none;
            }

            .hero-container {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .hero-content h1 {
                font-size: 2.5rem;
            }

            .hero-stats {
                justify-content: center;
            }

            .products-grid {
                grid-template-columns: 1fr;
            }

            .features-grid,
            .testimonials-grid {
                grid-template-columns: 1fr;
            }

            .footer-content {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .footer-bottom {
                flex-direction: column;
                gap: 1rem;
            }
        }

        /* Loading Animation */
        .loading {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 3px solid rgba(255,255,255,.3);
            border-radius: 50%;
            border-top-color: var(--white);
            animation: spin 1s ease-in-out infinite;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        /* Cart Animation */
        @keyframes addToCart {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }

        .cart-added {
            animation: addToCart 0.3s ease;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header-top">
        🎉 Flash Sale! Dapatkan diskon hingga 50% untuk semua template admin - Berakhir dalam 24 jam!
    </div>
    
    <header>
        <nav>
            <div class="logo">
                <div class="logo-icon">
                    <i class="fas fa-cube"></i>
                </div>
                Webstome
            </div>
            <ul class="nav-links">
                <li><a href="#home">Beranda</a></li>
                <li><a href="#products">Template</a></li>
                <li><a href="#features">Fitur</a></li>
                <li><a href="#testimonials">Review</a></li>
                <li><a href="#contact">Support</a></li>
            </ul>
            <div class="header-actions">
                <div class="cart-icon" onclick="toggleCart()">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="cart-badge" id="cartCount">0</span>
                </div>
                <a href="#products" class="btn-primary">Belanja Sekarang</a>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-container">
            <div class="hero-content">
                <h1>Template <span class="hero-highlight">Dashboard Admin</span> Premium Terbaik</h1>
                <p class="hero-subtitle">Kumpulan template dashboard admin yang modern, responsif, dan siap pakai. Hemat waktu development hingga 80% dengan design yang sudah teruji.</p>
                
                <div class="hero-stats">
                    <div class="stat-item">
                        <span class="stat-number">500+</span>
                        <span class="stat-label">Template</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">25K+</span>
                        <span class="stat-label">Pembeli</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">4.9★</span>
                        <span class="stat-label">Rating</span>
                    </div>
                </div>

                <div class="hero-buttons">
                    <a href="#products" class="btn-primary">
                        <i class="fas fa-shopping-cart"></i> Mulai Belanja
                    </a>
                    <a href="#" class="btn-secondary">
                        <i class="fas fa-play"></i> Lihat Demo
                    </a>
                    <div class="price-tag">Mulai dari $19</div>
                </div>
            </div>
            
            <div class="hero-image">
                <div class="dashboard-preview" id="dashboardPreview">
                    <div class="preview-header">
                        <div class="preview-dot"></div>
                        <div class="preview-dot"></div>
                        <div class="preview-dot"></div>
                        <div class="preview-title">Webstome Dashboard</div>
                    </div>
                    <div class="preview-nav"></div>
                    <div class="preview-content">
                        <div class="preview-widget">Analytics</div>
                        <div class="preview-widget">Sales</div>
                        <div class="preview-widget">Users</div>
                        <div class="preview-widget">Reports</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section class="products" id="products">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Template Premium Terpopuler</h2>
                <p class="section-subtitle">Pilihan template dashboard admin terbaik dengan berbagai kategori dan style untuk semua kebutuhan bisnis Anda</p>
            </div>

            <div class="product-filters">
                <button class="filter-btn active" data-filter="all">Semua Template</button>
                <button class="filter-btn" data-filter="websekolah">websekolah</button>
                <button class="filter-btn" data-filter="web kasir">web kasir</button>
                <button class="filter-btn" data-filter="e-commerce">e-commerce</button>
                <button class="filter-btn" data-filter="html">HTML/CSS</button>
                <button class="filter-btn" data-filter="bootstrap">Bootstrap</button>
            </div>

            <div class="products-grid" id="productsGrid">
                <!-- Product 1 -->
                <div class="product-card" data-category="websekolah">
                    <div class="product-image">
                        <div class="product-badge bestseller">Bestseller</div>
                        <div class="product-preview">
                            <div class="preview-nav"></div>
                            <div class="preview-content">
                                <div class="preview-widget">Dashboard</div>
                                <div class="preview-widget">Analytics</div>
                                <div class="preview-widget">E-commerce</div>
                                <div class="preview-widget">CRM</div>
                            </div>
                        </div>
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Webstome Sekolah</h3>
                        <p class="product-description">Webstome khusus sekolah yang memiliki 2 layout menarik dan CRUD yang lengkap</p>
                        <div class="product-features">
                            <span class="feature-tag">Laravel</span>
                            <span class="feature-tag">10+ pages</span>
                            <span class="feature-tag">Light Mode</span>
                        </div>
                        <div class="product-footer">
                            <div class="product-price">
                                <span class="price-current">$49</span>
                                <span class="price-original">$89</span>
                            </div>
                            <div class="product-actions">
                                <button class="btn-cart" onclick="addToCart('ReactPro Admin', 49)">
                                    <i class="fas fa-cart-plus"></i> Beli
                                </button>
                                <button class="btn-cart">
                                     <a style="text-decoration:none; color:white;" href="{{ route('login') }}">Coba gratis 3 hari
                                </button>
                                </button>
                                <button class="btn-preview">
                                    <i class="fas fa-eye"></i><br>
                                </button>
                               
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="product-card" data-category="web kasir">
                    <div class="product-image">
                        <div class="product-badge">New</div>
                        <div class="product-preview">
                            <div class="preview-nav"></div>
                            <div class="preview-content">
                                <div class="preview-widget">Vue Dashboard</div>
                                <div class="preview-widget">Charts</div>
                                <div class="preview-widget">Tables</div>
                                <div class="preview-widget">Forms</div>
                            </div>
                        </div>
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">VueMax Dashboard</h3>
                        <p class="product-description">Template Vue.js modern dengan Composition API, Pinia state management, dan PWA support.</p>
                        <div class="product-features">
                            <span class="feature-tag">Vue 3</span>
                            <span class="feature-tag">Pinia</span>
                            <span class="feature-tag">PWA</span>
                            <span class="feature-tag">Responsive</span>
                        </div>
                        <div class="product-footer">
                            <div class="product-price">
                                <span class="price-current">$39</span>
                                <span class="price-original">$69</span>
                            </div>
                            <div class="product-actions">
                                <button class="btn-cart" onclick="addToCart('VueMax Dashboard', 39)">
                                    <i class="fas fa-cart-plus"></i> Beli
                                </button>
                                <button class="btn-preview">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="product-card" data-category="e-commerce">
                    <div class="product-image">
                        <div class="product-preview">
                            <div class="preview-nav"></div>
                            <div class="preview-content">
                                <div class="preview-widget">Angular App</div>
                                <div class="preview-widget">Material UI</div>
                                <div class="preview-widget">Lazy Loading</div>
                                <div class="preview-widget">Guards</div>
                            </div>
                        </div>
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">AngularCore Admin</h3>
                        <p class="product-description">Dashboard Angular dengan Material Design, lazy loading, guards, dan arsitektur yang scalable.</p>
                        <div class="product-features">
                            <span class="feature-tag">Angular 16</span>
                            <span class="feature-tag">Material UI</span>
                            <span class="feature-tag">Guards</span>
                            <span class="feature-tag">i18n</span>
                        </div>
                        <div class="product-footer">
                            <div class="product-price">
                                <span class="price-current">$59</span>
                                <span class="price-original">$99</span>
                            </div>
                            <div class="product-actions">
                                <button class="btn-cart" onclick="addToCart('AngularCore Admin', 59)">
                                    <i class="fas fa-cart-plus"></i> Beli
                                </button>
                                <button class="btn-preview">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="product-card" data-category="html">
                    <div class="product-image">
                        <div class="product-badge">Popular</div>
                        <div class="product-preview">
                            <div class="preview-nav"></div>
                            <div class="preview-content">
                                <div class="preview-widget">HTML5</div>
                                <div class="preview-widget">CSS3</div>
                                <div class="preview-widget">JavaScript</div>
                                <div class="preview-widget">jQuery</div>
                            </div>
                        </div>
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">HTMLPro Dashboard</h3>
                        <p class="product-description">Template HTML murni dengan CSS3 animations, JavaScript interactions, dan jQuery plugins.</p>
                        <div class="product-features">
                            <span class="feature-tag">HTML5</span>
                            <span class="feature-tag">CSS3</span>
                            <span class="feature-tag">jQuery</span>
                            <span class="feature-tag">Plugins</span>
                        </div>
                        <div class="product-footer">
                            <div class="product-price">
                                <span class="price-current">$29</span>
                                <span class="price-original">$49</span>
                            </div>
                            <div class="product-actions">
                                <button class="btn-cart" onclick="addToCart('HTMLPro Dashboard', 29)">
                                    <i class="fas fa-cart-plus"></i> Beli
                                </button>
                                <button class="btn-preview">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 5 -->
                <div class="product-card" data-category="bootstrap">
                    <div class="product-image">
                        <div class="product-badge bestseller">Bestseller</div>
                        <div class="product-preview">
                            <div class="preview-nav"></div>
                            <div class="preview-content">
                                <div class="preview-widget">Bootstrap 5</div>
                                <div class="preview-widget">SCSS</div>
                                <div class="preview-widget">Components</div>
                                <div class="preview-widget">Utilities</div>
                            </div>
                        </div>
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">BootstrapMax Admin</h3>
                        <p class="product-description">Template Bootstrap 5 dengan custom SCSS, utility classes, dan component library yang lengkap.</p>
                        <div class="product-features">
                            <span class="feature-tag">Bootstrap 5</span>
                            <span class="feature-tag">SCSS</span>
                            <span class="feature-tag">Components</span>
                            <span class="feature-tag">RTL Support</span>
                        </div>
                        <div class="product-footer">
                            <div class="product-price">
                                <span class="price-current">$35</span>
                                <span class="price-original">$59</span>
                            </div>
                            <div class="product-actions">
                                <button class="btn-cart" onclick="addToCart('BootstrapMax Admin', 35)">
                                    <i class="fas fa-cart-plus"></i> Beli
                                </button>
                                <button class="btn-preview">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 6 -->
                <div class="product-card" data-category="react">
                    <div class="product-image">
                        <div class="product-badge">Premium</div>
                        <div class="product-preview">
                            <div class="preview-nav"></div>
                            <div class="preview-content">
                                <div class="preview-widget">Next.js</div>
                                <div class="preview-widget">Auth</div>
                                <div class="preview-widget">Database</div>
                                <div class="preview-widget">API</div>
                            </div>
                        </div>
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">NextJS Enterprise</h3>
                        <p class="product-description">Full-stack solution dengan Next.js, authentication, database integration, dan deployment ready.</p>
                        <div class="product-features">
                            <span class="feature-tag">Next.js 13</span>
                            <span class="feature-tag">Auth</span>
                            <span class="feature-tag">Database</span>
                            <span class="feature-tag">Deployment</span>
                        </div>
                        <div class="product-footer">
                            <div class="product-price">
                                <span class="price-current">$79</span>
                                <span class="price-original">$129</span>
                            </div>
                            <div class="product-actions">
                                <button class="btn-cart" onclick="addToCart('NextJS Enterprise', 79)">
                                    <i class="fas fa-cart-plus"></i> Beli
                                </button>
                                <button class="btn-preview">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features" id="features">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Mengapa Pilih Webstome?</h2>
                <p class="section-subtitle">Keunggulan yang membuat template kami menjadi pilihan terbaik untuk project Anda</p>
            </div>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3 class="feature-title">Setup Cepat</h3>
                    <p class="feature-description">Dokumentasi lengkap dan setup wizard yang memudahkan Anda memulai project dalam hitungan menit.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3 class="feature-title">Fully Responsive</h3>
                    <p class="feature-description">Semua template 100% responsive dan mobile-first, memberikan pengalaman terbaik di semua device.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3 class="feature-title">Clean Code</h3>
                    <p class="feature-description">Kode yang bersih, terstruktur, dan mengikuti best practices untuk maintenance yang mudah.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3 class="feature-title">Premium Support</h3>
                    <p class="feature-description">Tim support yang responsif siap membantu Anda 24/7 melalui email, chat, dan forum.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-sync-alt"></i>
                    </div>
                    <h3 class="feature-title">Regular Updates</h3>
                    <p class="feature-description">Update berkala dengan fitur baru, bug fixes, dan compatibility dengan framework terbaru.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-palette"></i>
                    </div>
                    <h3 class="feature-title">Easy Customization</h3>
                    <p class="feature-description">SCSS variables, CSS custom properties, dan theme system yang memudahkan customization.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials" id="testimonials">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Apa Kata Customer Kami?</h2>
                <p class="section-subtitle">Feedback dari ribuan developer yang telah menggunakan template Webstome</p>
            </div>
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="testimonial-quote">"</div>
                    <div class="testimonial-rating">⭐⭐⭐⭐⭐</div>
                    <p class="testimonial-content">Template ReactPro sangat membantu project startup kami. Code quality bagus, dokumentasi lengkap, dan support team yang sangat responsif. Highly recommended!</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">AS</div>
                        <div class="author-info">
                            <h4>Ahmad Subhan</h4>
                            <p>CTO, TechStart Indonesia</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-quote">"</div>
                    <div class="testimonial-rating">⭐⭐⭐⭐⭐</div>
                    <p class="testimonial-content">VueMax Dashboard menghemat waktu development kami hingga 70%. Design modern, performance excellent, dan mudah di-customize sesuai brand kami.</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">SR</div>
                        <div class="author-info">
                            <h4>Sari Rahmawati</h4>
                            <p>Frontend Lead, Digital Agency</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-quote">"</div>
                    <div class="testimonial-rating">⭐⭐⭐⭐⭐</div>
                    <p class="testimonial-content">Sudah beli 5 template dari Webstome dan semuanya berkualitas tinggi. Update rutin, bug-free, dan harga sangat reasonable untuk kualitas premium.</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">BP</div>
                        <div class="author-info">
                            <h4>Budi Pratomo</h4>
                            <p>Full Stack Developer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact">
        <div class="container">
            <div class="footer-content">
                <div class="footer-brand">
                    <div class="logo">
                        <div class="logo-icon">
                            <i class="fas fa-cube"></i>
                        </div>
                        Webstome
                    </div>
                    <p class="footer-description">Platform terpercaya untuk template dashboard admin premium. Membantu ribuan developer mengembangkan aplikasi dengan lebih cepat dan efisien.</p>
                    <div class="social-links">
                        <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-github"></i></a>
                    </div>
                </div>
                <div class="footer-section">
                    <h4>Template</h4>
                    <a href="#">React Templates</a>
                    <a href="#">Vue.js Templates</a>
                    <a href="#">Angular Templates</a>
                    <a href="#">HTML Templates</a>
                    <a href="#">Bootstrap Templates</a>
                    <a href="#">All Templates</a>
                </div>
                <div class="footer-section">
                    <h4>Support</h4>
                    <a href="#">Documentation</a>
                    <a href="#">FAQ</a>
                    <a href="#">Community Forum</a>
                    <a href="#">Video Tutorials</a>
                    <a href="#">Contact Support</a>
                    <a href="#">Request Feature</a>
                </div>
                <div class="footer-section">
                    <h4>Company</h4>
                    <a href="#">About Us</a>
                    <a href="#">Our Team</a>
                    <a href="#">Careers</a>
                    <a href="#">Blog</a>
                    <a href="#">Press Kit</a>
                    <a href="#">Partner Program</a>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 Webstome. All rights reserved. | <a href="#" style="color: var(--primary-light);">Privacy Policy</a> | <a href="#" style="color: var(--primary-light);">Terms of Service</a></p>
                <div class="payment-methods">
                    <div class="payment-icon">VISA</div>
                    <div class="payment-icon">MC</div>
                    <div class="payment-icon">PP</div>
                    <div class="payment-icon">GPay</div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Cart functionality
        let cart = [];
        let cartCount = 0;

        function addToCart(productName, price) {
            cart.push({ name: productName, price: price });
            cartCount++;
            document.getElementById('cartCount').textContent = cartCount;
            
            // Add animation to cart icon
            const cartIcon = document.querySelector('.cart-icon');
            cartIcon.classList.add('cart-added');
            setTimeout(() => {
                cartIcon.classList.remove('cart-added');
            }, 300);

            // Show success message
            showNotification(`${productName} berhasil ditambahkan ke keranjang!`);
        }

        function toggleCart() {
            if (cartCount === 0) {
                showNotification('Keranjang belanja kosong');
                return;
            }
            
            let cartItems = cart.map(item => `${item.name} - ${item.price}`).join('\n');
            let total = cart.reduce((sum, item) => sum + item.price, 0);
            alert(`Keranjang Anda:\n\n${cartItems}\n\nTotal: ${total}`);
        }

        // Product filtering
        function filterProducts(category) {
            const products = document.querySelectorAll('.product-card');
            const buttons = document.querySelectorAll('.filter-btn');
            
            buttons.forEach(btn => btn.classList.remove('active'));
            event.target.classList.add('active');
            
            products.forEach(product => {
                if (category === 'all' || product.dataset.category === category) {
                    product.style.display = 'block';
                    product.style.animation = 'slideInUp 0.5s ease';
                } else {
                    product.style.display = 'none';
                }
            });
        }

        // Add event listeners to filter buttons
        document.querySelectorAll('.filter-btn').forEach(btn => {
            btn.addEventListener('click', (e) => {
                filterProducts(e.target.dataset.filter);
            });
        });

        // Notification system
        function showNotification(message) {
            const notification = document.createElement('div');
            notification.style.cssText = `
                position: fixed;
                top: 100px;
                right: 20px;
                background: var(--success-color);
                color: white;
                padding: 1rem 2rem;
                border-radius: 10px;
                box-shadow: 0 5px 15px rgba(0,0,0,0.3);
                z-index: 9999;
                animation: slideInRight 0.3s ease;
            `;
            notification.textContent = message;
            document.body.appendChild(notification);
            
            setTimeout(() => {
                notification.style.animation = 'slideOutRight 0.3s ease';
                setTimeout(() => {
                    document.body.removeChild(notification);
                }, 300);
            }, 3000);
        }

        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Header scroll effect
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            if (window.scrollY > 100) {
                header.style.boxShadow = '0 2px 30px rgba(89, 85, 179, 0.15)';
            } else {
                header.style.boxShadow = '0 2px 30px rgba(89, 85, 179, 0.1)';
            }
        });

        // Dashboard preview animation
        const dashboardPreview = document.getElementById('dashboardPreview');
        let rotateX = 5;
        let rotateY = -15;
        
        dashboardPreview.addEventListener('mousemove', function(e) {
            const rect = this.getBoundingClientRect();
            const centerX = rect.left + rect.width / 2;
            const centerY = rect.top + rect.height / 2;
            
            const deltaX = (e.clientX - centerX) / rect.width * 20;
            const deltaY = (e.clientY - centerY) / rect.height * 20;
            
            this.style.transform = `perspective(1000px) rotateY(${-15 + deltaX}deg) rotateX(${5 - deltaY}deg)`;
        });

        dashboardPreview.addEventListener('mouseleave', function() {
            this.style.transform = 'perspective(1000px) rotateY(-15deg) rotateX(5deg)';
        });

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe elements for animation
        document.querySelectorAll('.product-card, .feature-card, .testimonial-card').forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(30px)';
            card.style.transition = 'all 0.6s ease';
            observer.observe(card);
        });

        // Counter animation for stats
        function animateCounter(element, target, duration = 2000) {
            let start = 0;
            const increment = target / (duration / 16);
            
            function updateCounter() {
                start += increment;
                if (start < target) {
                    element.textContent = Math.floor(start).toLocaleString() + (element.textContent.includes('★') ? '★' : element.textContent.includes('+') ? '+' : '');
                    requestAnimationFrame(updateCounter);
                } else {
                    element.textContent = target.toLocaleString() + (element.textContent.includes('★') ? '★' : element.textContent.includes('+') ? '+' : '');
                }
            }
            
            updateCounter();
        }

        // Initialize counter animation when hero is in view
        const heroObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counters = [
                        { element: document.querySelector('.stat-number'), value: 500, suffix: '+' },
                        { element: document.querySelectorAll('.stat-number')[1], value: 25000, suffix: 'K+' },
                        { element: document.querySelectorAll('.stat-number')[2], value: 4.9, suffix: '★' }
                    ];
                    
                    counters.forEach((counter, index) => {
                        setTimeout(() => {
                            if (counter.suffix === 'K+') {
                                animateCounter(counter.element, 25);
                                setTimeout(() => {
                                    counter.element.textContent = '25K+';
                                }, 2000);
                            } else if (counter.suffix === '★') {
                                counter.element.textContent = '4.9★';
                            } else {
                                animateCounter(counter.element, counter.value);
                                setTimeout(() => {
                                    counter.element.textContent = counter.value + counter.suffix;
                                }, 2000);
                            }
                        }, index * 200);
                    });
                    
                    heroObserver.unobserve(entry.target);
                }
            });
        });

        heroObserver.observe(document.querySelector('.hero-stats'));

        // Add CSS animations
        const style = document.createElement('style');
        style.textContent = `
            @keyframes slideInRight {
                from {
                    transform: translateX(100%);
                    opacity: 0;
                }
                to {
                    transform: translateX(0);
                    opacity: 1;
                }
            }
            
            @keyframes slideOutRight {
                from {
                    transform: translateX(0);
                    opacity: 1;
                }
                to {
                    transform: translateX(100%);
                    opacity: 0;
                }
            }
            
            @keyframes slideInUp {
                from {
                    transform: translateY(30px);
                    opacity: 0;
                }
                to {
                    transform: translateY(0);
                    opacity: 1;
                }
            }
        `;
        document.head.appendChild(style);

        // Mobile menu (simplified)
        function createMobileMenu() {
            if (window.innerWidth <= 768) {
                const navLinks = document.querySelector('.nav-links');
                const headerActions = document.querySelector('.header-actions');
                
                if (!document.querySelector('.mobile-menu-btn')) {
                    const menuBtn = document.createElement('button');
                    menuBtn.className = 'mobile-menu-btn';
                    menuBtn.innerHTML = '<i class="fas fa-bars"></i>';
                    menuBtn.style.cssText = `
                        background: none;
                        border: none;
                        font-size: 1.5rem;
                        color: var(--primary-color);
                        cursor: pointer;
                        margin-right: 1rem;
                    `;
                    
                    headerActions.insertBefore(menuBtn, headerActions.firstChild);
                    
                    menuBtn.addEventListener('click', () => {
                        navLinks.classList.toggle('mobile-active');
                    });
                }
            }
        }

        window.addEventListener('resize', createMobileMenu);
        createMobileMenu();

        // Add mobile styles
        const mobileStyle = document.createElement('style');
        mobileStyle.textContent = `
            @media (max-width: 768px) {
                .nav-links.mobile-active {
                    display: flex !important;
                    position: absolute;
                    top: 100%;
                    left: 0;
                    width: 100%;
                    background: var(--white);
                    flex-direction: column;
                    padding: 2rem;
                    box-shadow: 0 5px 15px rgba(89, 85, 179, 0.1);
                    z-index: 999;
                }
                
                .nav-links.mobile-active a {
                    padding: 0.5rem 0;
                    border-bottom: 1px solid var(--gray-200);
                }
            }
        `;
        document.head.appendChild(mobileStyle);
    </script>

</body>
</html>