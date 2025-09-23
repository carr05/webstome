<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webstome - Premium Dashboard Templates & Themes</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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

        .preview-dot:nth-child(1) {
            background: #ff5f57;
        }

        .preview-dot:nth-child(2) {
            background: #ffbd2e;
        }

        .preview-dot:nth-child(3) {
            background: #28ca42;
        }

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
            margin-bottom: 0rem
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
            border-radius: 10px;
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

        .top-project {
            text-align: center;
            padding: 5px 0;
            margin-bottom: 5rem; /* Memberikan jarak setelah top-project */
        }

        /* NEW SECTION HEADER */
        .information-header {
            text-align: center;
            padding: 4rem 0; /* Memberikan padding atas dan bawah yang cukup */
            background: linear-gradient(135deg, var(--light-color) 0%, #f0f0ff 100%);
            margin: 5rem 0; /* Memberikan margin atas dan bawah */
        }

        .information-header .section-title {
            font-size: 2.8rem;
            font-weight: 800;
            color: var(--dark-color);
            margin-bottom: 1.5rem;
            background: linear-gradient(135deg, var(--primary-color), var(--primary-light));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .information-header .section-subtitle {
            font-size: 1.2rem;
            color: var(--gray-600);
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.6;
            font-weight: 400;
        }

        .information-features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            max-width: 1000px;
            margin: 3rem auto 0;
            padding: 0 2rem;
        }

        .info-feature {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1.5rem;
            background: var(--white);
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(89, 85, 179, 0.08);
            transition: all 0.3s ease;
            border: 1px solid var(--gray-200);
        }

        .info-feature:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(89, 85, 179, 0.15);
        }

        .info-feature i {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, var(--primary-color), var(--primary-light));
            color: var(--white);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            flex-shrink: 0;
        }

        .info-feature-text {
            flex: 1;
        }

        .info-feature-title {
            font-size: 1rem;
            font-weight: 600;
            color: var(--dark-color);
            margin-bottom: 0.3rem;
        }

        .info-feature-desc {
            font-size: 0.85rem;
            color: var(--gray-600);
            line-height: 1.4;
        }

        /* Enhanced Swiper Styles */
        .swiper {
            width: 100%;
            padding: 0px 0 0px 0;
            position: relative;
        }

        .swiper-wrapper {
            align-items: center;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: transparent;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        .product-card {
            background: #fff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(89, 85, 179, 0.1);
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            transform: scale(0.8);
            opacity: 0.6;
            position: relative;
            max-width: 3500px;
            width: 100%;
            height: 200px;
        }

        .product-card img {
            width: 100%;
            display: block;
            border-radius: 20px;
            transition: all 0.4s ease;
        }

        /* Active (center) card styling */
        .swiper-slide-active .product-card {
            transform: scale(1.1);
            opacity: 1;
            box-shadow: 0 20px 60px rgba(89, 85, 179, 0.25);
            z-index: 10;
        }

        /* Next and previous cards */
        .swiper-slide-next .product-card,
        .swiper-slide-prev .product-card {
            transform: scale(0.95);
            opacity: 0.8;
            box-shadow: 0 15px 40px rgba(89, 85, 179, 0.15);
        }

        /* Enhanced navigation buttons */
        .swiper-button-next,
        .swiper-button-prev {
            color: var(--primary-color);
            background: var(--white);
            border-radius: 50%;
            width: 50px;
            height: 50px;
            margin-top: 0;
            box-shadow: 0 8px 25px rgba(89, 85, 179, 0.15);
            transition: all 0.3s ease;
            border: 2px solid var(--gray-200);
        }

        .swiper-button-next:after,
        .swiper-button-prev:after {
            font-size: 18px;
            font-weight: 700;
        }

        .swiper-button-next:hover,
        .swiper-button-prev:hover {
            background: var(--primary-color);
            color: var(--white);
            transform: translateY(-2px);
            box-shadow: 0 12px 35px rgba(89, 85, 179, 0.25);
            border-color: var(--primary-color);
        }

        .swiper-button-disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        .swiper-button-disabled:hover {
            background: var(--white);
            color: var(--primary-color);
            transform: none;
            box-shadow: 0 8px 25px rgba(89, 85, 179, 0.15);
        }

        /* Additional hover effects */
        .product-card:hover {
            transform: translateY(-5px) scale(1.02);
        }

        .swiper-slide-active .product-card:hover {
            transform: translateY(-8px) scale(1.12);
        }

        /* Demo Call-to-Action Section Styles */
        .demo-cta-section {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
            padding: 3rem 0;
            position: relative;
            overflow: hidden;
            margin-top: 5rem; /* Memberikan jarak dari section sebelumnya */
        }

        .demo-cta-section::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -20%;
            width: 800px;
            height: 800px;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
            border-radius: 50%;
        }

        .demo-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
            position: relative;
            z-index: 2;
        }

        .demo-content {
            color: var(--white);
        }

        .demo-icon {
            width: 80px;
            height: 80px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 2rem;
            font-size: 2.5rem;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .demo-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }

        .demo-description {
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .demo-features {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            margin-bottom: 3rem;
        }

        .demo-feature {
            display: flex;
            align-items: center;
            gap: 1rem;
            font-weight: 500;
        }

        .demo-feature i {
            color: var(--success-color);
            font-size: 1.2rem;
        }

        .demo-buttons {
            display: flex;
            gap: 1.5rem;
            margin-bottom: 2rem;
            flex-wrap: wrap;
        }

        .btn {
            background: var(--white);
            color: var(--primary-color);
            padding: 1rem 2rem;
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.8rem;
            transition: all 0.3s ease;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
            font-size: 1rem;
            border: none;
            cursor: pointer;
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.3);
            background: var(--light-color);
        }

        .demo-guarantee {
            display: flex;
            align-items: center;
            gap: 0.8rem;
            padding: 1rem 1.5rem;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 25px;
            font-size: 0.9rem;
            font-weight: 500;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .demo-guarantee i {
            color: var(--success-color);
            font-size: 1.1rem;
        }

        .demo-preview {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .preview-mockup {
            background: var(--white);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 400px;
            transform: perspective(1000px) rotateY(15deg) rotateX(-5deg);
            transition: transform 0.3s ease;
        }

        .preview-mockup:hover {
            transform: perspective(1000px) rotateY(10deg) rotateX(-2deg);
        }

        .mockup-header {
            background: var(--gray-100);
            padding: 1rem 1.5rem;
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .mockup-controls {
            display: flex;
            gap: 0.5rem;
        }

        .control-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
        }

        .control-dot.red {
            background: #ff5f57;
        }

        .control-dot.yellow {
            background: #ffbd2e;
        }

        .control-dot.green {
            background: #28ca42;
        }

        .mockup-url {
            background: var(--white);
            padding: 0.5rem 1rem;
            border-radius: 8px;
            font-size: 0.8rem;
            color: var(--gray-600);
            font-family: 'Monaco', 'Menlo', 'Ubuntu Mono', monospace;
        }

        .mockup-content {
            padding: 1.5rem;
            height: 300px;
            background: var(--light-color);
        }

        .dashboard-elements {
            height: 100%;
        }

        .element-row {
            display: flex;
            gap: 1rem;
            height: 100%;
        }

        .element.sidebar {
            width: 80px;
            background: var(--primary-color);
            border-radius: 10px;
            opacity: 0.8;
        }

        .element.main {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .element-small.header {
            height: 40px;
            background: var(--white);
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(89, 85, 179, 0.1);
        }

        .element-grid {
            flex: 1;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }

        .grid-item {
            background: var(--white);
            border-radius: 10px;
            box-shadow: 0 2px 15px rgba(89, 85, 179, 0.1);
            position: relative;
            overflow: hidden;
        }

        .grid-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
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
            .header-top {
                display: none;
            }

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

            .features-grid {
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

            .swiper {
                padding: 30px 0 60px 0;
            }

            .product-card {
                max-width: 280px;
            }

            .swiper-slide-active .product-card {
                transform: scale(1.05);
            }

            .swiper-button-next,
            .swiper-button-prev {
                width: 40px;
                height: 40px;
            }

            .swiper-button-next:after,
            .swiper-button-prev:after {
                font-size: 14px;
            }

            .demo-container {
                grid-template-columns: 1fr;
                gap: 3rem;
                text-align: center;
            }

            .demo-title {
                font-size: 2rem;
            }

            .demo-buttons {
                justify-content: center;
            }

            .preview-mockup {
                transform: none;
                max-width: 350px;
            }

            .demo-cta-section {
                padding: 4rem 0;
            }

            .information-header .section-title {
                font-size: 2.2rem;
            }

            .information-features {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 480px) {
            .swiper-button-next,
            .swiper-button-prev {
                display: none;
            }

            .demo-buttons {
                flex-direction: column;
                align-items: center;
            }

            .mockup-content {
                height: 250px;
            }

            .information-header .section-title {
                font-size: 1.8rem;
            }

            .info-feature {
                text-align: center;
                flex-direction: column;
            }
        }

        /* Loading Animation */
        .loading {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 3px solid rgba(255, 255, 255, .3);
            border-radius: 50%;
            border-top-color: var(--white);
            animation: spin 1s ease-in-out infinite;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }

        /* Cart Animation */
        @keyframes addToCart {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.1);
            }

            100% {
                transform: scale(1);
            }
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
                <li><a href="#contact">Support</a></li>
            </ul>
            <div class="header-actions">
                <div class="cart-icon" onclick="toggleCart()">
                </div>
                <a href="https://wa.me/6285708736209?text=Halo%2C%20saya%20tertarik%20dengan%20produk%20Anda"
                    class="btn-primary" target="_blank" rel="noopener noreferrer">
                    Hubungi Kami
                </a>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-container">
            <div class="hero-content">
                <h1>Template <span class="hero-highlight">Dashboard Admin</span> Premium Terbaik</h1>
                <p class="hero-subtitle">Template dashboard admin yang modern, responsif, dan siap pakai. Hemat waktu
                    development hingga 80% dengan design yang sudah teruji.</p>
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
            <a style="margin-top:-50px; width:200px;" href="{{ route('home') }}" class="btn btn-primary">
                <i class="fas fa-eye"></i> Coba Sekarang
            </a>
        </div>
    </section>

    <!-- Products Section -->
    <section class="products" id="products">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Website Sekolah Custom</h2>
                <p class="section-subtitle">Webstome adalah platform website sekolah yang dirancang custom sehingga
                    setiap sekolah bisa menyesuaikan tampilan dan kontennya sendiri tanpa harus membuat website dari
                    nol.</p>
            </div>

            <!-- Swiper CSS -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

            <section class="top-project">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="product-card">
                                <img src="{{ asset('assets/img/webpromosi/form_login.png') }}"
                                    alt="Form Login">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-card">
                                <img src="{{ asset('assets/img/webpromosi/dashboard.png') }}"
                                    alt="Dashboard">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-card">
                                <img src="{{ asset('assets/img/webpromosi/menu.png') }}"
                                    alt="Menu">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-card">
                                <img src="{{ asset('assets/img/webpromosi/tambah menu.png') }}"
                                    alt="Tambah Menu">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-card">
                                <img src="{{ asset('assets/img/webpromosi/tampilan.png') }}"
                                    alt="Tampilan">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-card">
                                 <img src="{{ asset('assets/img/webpromosi/tampilan (2).png') }}"
                                    alt="Tampilan 2">
                            </div>
                        </div>
                    </div>

                    <!-- Navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </section>

            <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
            <script>
                const swiper = new Swiper(".mySwiper", {
                    effect: 'coverflow',
                    grabCursor: true,
                    centeredSlides: true,
                    slidesPerView: 'auto',
                    coverflowEffect: {
                        rotate: 0,
                        stretch: 0,
                        depth: 100,
                        modifier: 2,
                        slideShadows: false,
                    },
                    spaceBetween: 30,
                    loop: true,
                    speed: 600,
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                    autoplay: {
                        delay: 4000,
                        disableOnInteraction: false,
                        pauseOnMouseEnter: true,
                    },
                    breakpoints: {
                        320: {
                            slidesPerView: 1,
                            spaceBetween: 20
                        },
                        640: {
                            slidesPerView: 2,
                            spaceBetween: 25
                        },
                        1024: {
                            slidesPerView: 3,
                            spaceBetween: 30
                        }
                    },
                    on: {
                        init: function () {
                            this.slides.forEach((slide, index) => {
                                slide.addEventListener('click', () => {
                                    this.slideTo(index);
                                });
                            });
                        },
                        slideChange: function () {
                            const activeSlide = this.slides[this.activeIndex];
                            if (activeSlide) {
                                activeSlide.classList.add('slide-changed');
                                setTimeout(() => {
                                    activeSlide.classList.remove('slide-changed');
                                }, 300);
                            }
                        }
                    }
                });

                const swiperContainer = document.querySelector('.mySwiper');
                swiperContainer.addEventListener('mouseenter', () => {
                    swiper.autoplay.stop();
                });

                swiperContainer.addEventListener('mouseleave', () => {
                    swiper.autoplay.start();
                });
            </script>
        </div>
    </section>

    

    <!-- Demo Call-to-Action Section -->
    <div class="demo-cta-section">
        <div class="demo-container">
            <div class="demo-content">
                <h3 class="demo-title">Lihat Sendiri Bagaimana Mudahnya!</h3>
                <p class="demo-description">
                    Jangan hanya melihat screenshot - rasakan langsung pengalaman menggunakan dashboard admin
                    yang intuitif dan powerful. Dalam hitungan detik, Anda bisa mengelola seluruh konten
                    website sekolah dengan mudah.
                </p>

                <div class="demo-features">
                    <div class="demo-feature">
                        <i class="fas fa-check-circle"></i>
                        <span>Interface yang user-friendly</span>
                    </div>
                    <div class="demo-feature">
                        <i class="fas fa-check-circle"></i>
                        <span>Tidak perlu coding sama sekali</span>
                    </div>
                    <div class="demo-feature">
                        <i class="fas fa-check-circle"></i>
                        <span>Update konten real-time</span>
                    </div>
                </div>

                <div class="demo-buttons">
                    <a href="{{ route('home') }}" class="btn btn-primary">
                        <i class="fas fa-play-circle"></i>
                        Coba Dashboard Sekarang
                    </a>
                </div>

                
            </div>

            <div class="demo-preview">
                <div class="preview-mockup">
                    <div class="mockup-header">
                        <div class="mockup-controls">
                            <span class="control-dot red"></span>
                            <span class="control-dot yellow"></span>
                            <span class="control-dot green"></span>
                        </div>
                        <div class="mockup-url">webstome-dashboard.demo</div>
                    </div>
                    <div class="mockup-content">
                        <div class="dashboard-elements">
                            <div class="element-row">
                                <div class="element sidebar"></div>
                                <div class="element main">
                                    <div class="element-small header"></div>
                                    <div class="element-grid">
                                        <div class="grid-item"></div>
                                        <div class="grid-item"></div>
                                        <div class="grid-item"></div>
                                        <div class="grid-item"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <section class="features" id="features">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Mengapa Pilih Webstome?</h2>
                <p class="section-subtitle">Keunggulan yang membuat template kami menjadi pilihan terbaik untuk project
                    Anda</p>
            </div>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3 class="feature-title">Setup Cepat</h3>
                    <p class="feature-description">Dokumentasi lengkap dan setup wizard yang memudahkan Anda memulai
                        project dalam hitungan menit.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3 class="feature-title">Fully Responsive</h3>
                    <p class="feature-description">Semua template 100% responsive dan mobile-first, memberikan
                        pengalaman terbaik di semua device.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3 class="feature-title">Clean Code</h3>
                    <p class="feature-description">Kode yang bersih, terstruktur, dan mengikuti best practices untuk
                        maintenance yang mudah.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3 class="feature-title">Premium Support</h3>
                    <p class="feature-description">Tim support yang responsif siap membantu Anda 24/7 melalui email,
                        chat, dan forum.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-sync-alt"></i>
                    </div>
                    <h3 class="feature-title">Regular Updates</h3>
                    <p class="feature-description">Update berkala dengan fitur baru, bug fixes, dan compatibility dengan
                        framework terbaru.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-palette"></i>
                    </div>
                    <h3 class="feature-title">Easy Customization</h3>
                    <p class="feature-description">SCSS variables, CSS custom properties, dan theme system yang
                        memudahkan customization.</p>
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
                    <p class="footer-description">Platform terpercaya untuk template dashboard admin premium. Membantu
                        ribuan developer mengembangkan aplikasi dengan lebih cepat dan efisien.</p>
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
                <p>&copy; 2025 Webstome. All rights reserved. | <a href="#" style="color: var(--primary-light);">Privacy
                        Policy</a> | <a href="#" style="color: var(--primary-light);">Terms of Service</a></p>
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
        window.addEventListener('scroll', function () {
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

        dashboardPreview.addEventListener('mousemove', function (e) {
            const rect = this.getBoundingClientRect();
            const centerX = rect.left + rect.width / 2;
            const centerY = rect.top + rect.height / 2;

            const deltaX = (e.clientX - centerX) / rect.width * 20;
            const deltaY = (e.clientY - centerY) / rect.height * 20;

            this.style.transform = `perspective(1000px) rotateY(${-15 + deltaX}deg) rotateX(${5 - deltaY}deg)`;
        });

        dashboardPreview.addEventListener('mouseleave', function () {
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
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webstome - Premium Dashboard Templates & Themes</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
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

        .preview-dot:nth-child(1) {
            background: #ff5f57;
        }

        .preview-dot:nth-child(2) {
            background: #ffbd2e;
        }

        .preview-dot:nth-child(3) {
            background: #28ca42;
        }

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
            /* Menambahkan jarak atas yang lebih besar */
            margin-top: 2rem;
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
            margin-bottom: 0rem
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
            border-radius: 10px;
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

        .top-project {
            text-align: center;
            padding: 5px 0;
            /* Menambahkan jarak atas dan bawah */
            margin-top: 2rem;
            margin-bottom: 2rem;
        }

        /* Ukuran penuh untuk slide */
.swiper-slide {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* Gambar di dalam slide agar memenuhi kontainer */
.swiper-slide img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* atau contain kalau mau seluruh gambar terlihat */
    border-radius: inherit; /* mengikuti sudut kontainer jika ada */
}


        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: transparent;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        .product-card {
            background: #fff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(89, 85, 179, 0.1);
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            transform: scale(0.8);
            opacity: 0.6;
            position: relative;
            max-width: 3500px;
            width: 100%;
            height: 200px;
        }

        .product-card img {
            width: 100%;
            display: block;
            border-radius: 20px;
            transition: all 0.4s ease;
        }

        /* Active (center) card styling */
        .swiper-slide-active .product-card {
            transform: scale(1.1);
            opacity: 1;
            box-shadow: 0 20px 60px rgba(89, 85, 179, 0.25);
            z-index: 10;
        }

        /* Next and previous cards */
        .swiper-slide-next .product-card,
        .swiper-slide-prev .product-card {
            transform: scale(0.95);
            opacity: 0.8;
            box-shadow: 0 15px 40px rgba(89, 85, 179, 0.15);
        }

        /* Enhanced navigation buttons */
        .swiper-button-next,
        .swiper-button-prev {
            color: var(--primary-color);
            background: var(--white);
            border-radius: 50%;
            width: 50px;
            height: 50px;
            margin-top: 0;
            box-shadow: 0 8px 25px rgba(89, 85, 179, 0.15);
            transition: all 0.3s ease;
            border: 2px solid var(--gray-200);
        }

        .swiper-button-next:after,
        .swiper-button-prev:after {
            font-size: 18px;
            font-weight: 700;
        }

        .swiper-button-next:hover,
        .swiper-button-prev:hover {
            background: var(--primary-color);
            color: var(--white);
            transform: translateY(-2px);
            box-shadow: 0 12px 35px rgba(89, 85, 179, 0.25);
            border-color: var(--primary-color);
        }

        .swiper-button-disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        .swiper-button-disabled:hover {
            background: var(--white);
            color: var(--primary-color);
            transform: none;
            box-shadow: 0 8px 25px rgba(89, 85, 179, 0.15);
        }

        /* Additional hover effects */
        .product-card:hover {
            transform: translateY(-5px) scale(1.02);
        }

        .swiper-slide-active .product-card:hover {
            transform: translateY(-8px) scale(1.12);
        }

        /* Demo Call-to-Action Section Styles */
        .demo-cta-section {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
            padding: 3rem 0;
            position: relative;
            overflow: hidden;
            /* Menambahkan jarak atas */
            margin-top: 2rem;
        }

        .demo-cta-section::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -20%;
            width: 800px;
            height: 800px;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
            border-radius: 50%;
        }

        .demo-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
            position: relative;
            z-index: 2;
        }

        .demo-content {
            color: var(--white);
        }

        .demo-icon {
            width: 80px;
            height: 80px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 2rem;
            font-size: 2.5rem;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .demo-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }

        .demo-description {
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .demo-features {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            margin-bottom: 3rem;
        }

        .demo-feature {
            display: flex;
            align-items: center;
            gap: 1rem;
            font-weight: 500;
        }

        .demo-feature i {
            color: var(--success-color);
            font-size: 1.2rem;
        }

        .demo-buttons {
            display: flex;
            gap: 1.5rem;
            margin-bottom: 2rem;
            flex-wrap: wrap;
        }

        .btn-demo-primary {
            background: var(--white);
            color: var(--primary-color);
            padding: 1rem 2rem;
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.8rem;
            transition: all 0.3s ease;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
            font-size: 1rem;
        }

        .btn-demo-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.3);
            background: var(--light-color);
        }

        .btn-demo-secondary {
            background: transparent;
            color: var(--white);
            padding: 1rem 2rem;
            border: 2px solid rgba(255, 255, 255, 0.5);
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.8rem;
            transition: all 0.3s ease;
            font-size: 1rem;
            backdrop-filter: blur(10px);
        }

        .btn-demo-secondary:hover {
            background: rgba(255, 255, 255, 0.1);
            border-color: var(--white);
            transform: translateY(-3px);
        }

        .demo-guarantee {
            display: flex;
            align-items: center;
            gap: 0.8rem;
            padding: 1rem 1.5rem;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 25px;
            font-size: 0.9rem;
            font-weight: 500;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .demo-guarantee i {
            color: var(--success-color);
            font-size: 1.1rem;
        }

        .demo-preview {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .preview-mockup {
            background: var(--white);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 400px;
            transform: perspective(1000px) rotateY(15deg) rotateX(-5deg);
            transition: transform 0.3s ease;
        }

        .preview-mockup:hover {
            transform: perspective(1000px) rotateY(10deg) rotateX(-2deg);
        }

        .mockup-header {
            background: var(--gray-100);
            padding: 1rem 1.5rem;
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .mockup-controls {
            display: flex;
            gap: 0.5rem;
        }

        .control-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
        }

        .control-dot.red {
            background: #ff5f57;
        }

        .control-dot.yellow {
            background: #ffbd2e;
        }

        .control-dot.green {
            background: #28ca42;
        }

        .mockup-url {
            background: var(--white);
            padding: 0.5rem 1rem;
            border-radius: 8px;
            font-size: 0.8rem;
            color: var(--gray-600);
            font-family: 'Monaco', 'Menlo', 'Ubuntu Mono', monospace;
        }

        .mockup-content {
            padding: 1.5rem;
            height: 300px;
            background: var(--light-color);
        }

        .dashboard-elements {
            height: 100%;
        }

        .element-row {
            display: flex;
            gap: 1rem;
            height: 100%;
        }

        .element.sidebar {
            width: 80px;
            background: var(--primary-color);
            border-radius: 10px;
            opacity: 0.8;
        }

        .element.main {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .element-small.header {
            height: 40px;
            background: var(--white);
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(89, 85, 179, 0.1);
        }

        .element-grid {
            flex: 1;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }

        .grid-item {
            background: var(--white);
            border-radius: 10px;
            box-shadow: 0 2px 15px rgba(89, 85, 179, 0.1);
            position: relative;
            overflow: hidden;
        }

        .grid-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .header-top {
                display: none;
            }

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

            .swiper {
                padding: 30px 0 60px 0;
            }

            .product-card {
                max-width: 280px;
            }

            .swiper-slide-active .product-card {
                transform: scale(1.05);
            }

            .swiper-button-next,
            .swiper-button-prev {
                width: 40px;
                height: 40px;
            }

            .swiper-button-next:after,
            .swiper-button-prev:after {
                font-size: 14px;
            }

            .demo-container {
                grid-template-columns: 1fr;
                gap: 3rem;
                text-align: center;
            }

            .demo-title {
                font-size: 2rem;
            }

            .demo-buttons {
                justify-content: center;
            }

            .btn-demo-primary,
            .btn-demo-secondary {
                flex: 1;
                min-width: 200px;
                justify-content: center;
            }

            .preview-mockup {
                transform: none;
                max-width: 350px;
            }

            .demo-cta-section {
                padding: 4rem 0;
            }
        }

        @media (max-width: 480px) {

            .swiper-button-next,
            .swiper-button-prev {
                display: none;
            }

            .demo-buttons {
                flex-direction: column;
                align-items: center;
            }

            .btn-demo-primary,
            .btn-demo-secondary {
                width: 100%;
                max-width: 280px;
            }

            .mockup-content {
                height: 250px;
            }
        }

        /* Loading Animation */
        .loading {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 3px solid rgba(255, 255, 255, .3);
            border-radius: 50%;
            border-top-color: var(--white);
            animation: spin 1s ease-in-out infinite;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }

        /* Cart Animation */
        @keyframes addToCart {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.1);
            }

            100% {
                transform: scale(1);
            }
        }

        .cart-added {
            animation: addToCart 0.3s ease;
        }
    </style>