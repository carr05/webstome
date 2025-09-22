<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard - Tampilan</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<style>
    :root {
        --primary-color: #5955B3;
        --primary-light: #7B6FE8;
        --primary-dark: #4A428A;
        --accent-color: #EDEAFF;
        --accent-hover: #D7CCFF;
        --active-color: #5A45D3;
        --background-color: #f8f9ff;
        --card-background: #ffffff;
        --text-primary: #2d3748;
        --text-secondary: #718096;
        --border-color: #e2e8f0;
        --shadow-light: 0 4px 6px rgba(0, 0, 0, 0.05);
        --shadow-medium: 0 8px 20px rgba(0, 0, 0, 0.1);
        --shadow-active: 0 8px 25px rgba(90, 69, 211, 0.25);
        --border-radius: 16px;
        --border-radius-sm: 12px;
        --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        --success-color: #10b981;
        --warning-color: #f59e0b;
        --danger-color: #ef4444;
        --info-color: #3b82f6;
    }

    body {
        font-family: 'Poppins', sans-serif;
        background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-light) 100%);
        margin: 0;
        min-height: 100vh;
        color: var(--text-primary);
    }

    /* Main Layout */
    .main-container {
        margin-left: 240px;
        padding: 24px;
        min-height: 100vh;
        transition: var(--transition);
    }

    .main-content {
        background: var(--background-color);
        border-radius: 24px;
        padding: 32px;
        min-height: calc(100vh - 48px);
        box-shadow: var(--shadow-medium);
        backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.1);
    }

    /* Header Card */
    .header-card {
        background: linear-gradient(135deg, var(--card-background) 0%, rgba(255, 255, 255, 0.95) 100%);
        border-radius: var(--border-radius);
        padding: 28px 32px;
        margin-bottom: 28px;
        box-shadow: var(--shadow-light);
        border: 1px solid var(--border-color);
        display: flex;
        justify-content: space-between;
        align-items: center;
        transition: var(--transition);
    }

    .header-card:hover {
        transform: translateY(-2px);
        box-shadow: var(--shadow-medium);
    }

    .header-card h5 {
        font-size: 1.75rem;
        font-weight: 700;
        color: var(--text-primary);
        margin-bottom: 8px;
        background: linear-gradient(135deg, var(--primary-color), var(--primary-light));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .header-card p {
        color: var(--text-secondary);
        font-size: 0.95rem;
        line-height: 1.6;
        margin: 0;
        font-weight: 400;
    }

    .header-card img {
        max-width: 150px;
        border-radius: var(--border-radius-sm);
        box-shadow: var(--shadow-light);
    }

    /* Card Sections */
    .card-section {
        background: var(--card-background);
        border-radius: var(--border-radius);
        padding: 28px;
        margin-bottom: 24px;
        box-shadow: var(--shadow-light);
        border: 1px solid var(--border-color);
        transition: var(--transition);
        position: relative;
        overflow: hidden;
    }

    .card-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(135deg, var(--primary-color), var(--primary-light));
        opacity: 0;
        transition: var(--transition);
    }

    .card-section:hover::before {
        opacity: 1;
    }

    .card-section:hover {
        transform: translateY(-2px);
        box-shadow: var(--shadow-medium);
    }

    .card-section h6 {
        font-size: 1.1rem;
        font-weight: 600;
        color: var(--active-color);
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .card-section h6::before {
        content: '';
        width: 4px;
        height: 20px;
        background: linear-gradient(135deg, var(--primary-color), var(--primary-light));
        border-radius: 2px;
    }

    /* Footer Settings Specific Styles */
    .footer-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 24px;
    }

    .footer-section-card {
        background: linear-gradient(135deg, var(--card-background) 0%, rgba(255, 255, 255, 0.95) 100%);
        border-radius: var(--border-radius-sm);
        padding: 24px;
        border: 1px solid var(--border-color);
        transition: var(--transition);
        position: relative;
        overflow: hidden;
    }

    .footer-section-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 3px;
        background: linear-gradient(135deg, var(--primary-color), var(--primary-light));
        transform: translateX(-100%);
        transition: var(--transition);
    }

    .footer-section-card:hover::before {
        transform: translateX(0);
    }

    .footer-section-card:hover {
        transform: translateY(-3px);
        box-shadow: var(--shadow-medium);
    }

    .footer-section-title {
        font-size: 1rem;
        font-weight: 600;
        color: var(--text-primary);
        margin-bottom: 16px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .footer-section-title i {
        font-size: 1.2rem;
        color: var(--primary-color);
        background: var(--accent-color);
        padding: 8px;
        border-radius: 8px;
        transition: var(--transition);
    }

    .footer-section-card:hover .footer-section-title i {
        background: var(--primary-color);
        color: white;
        transform: scale(1.1);
    }

    /* Footer Preview Section */
    .footer-preview {
        background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);
        border-radius: var(--border-radius);
        padding: 32px;
        margin-top: 24px;
        color: white;
        position: relative;
        overflow: hidden;
    }

    .footer-preview::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse"><path d="M 10 0 L 0 0 0 10" fill="none" stroke="%23ffffff" stroke-width="0.3" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23grid)"/></svg>');
        opacity: 0.3;
    }

    .footer-preview-content {
        position: relative;
        z-index: 1;
    }

    .footer-preview h6 {
        color: var(--primary-light);
        font-size: 0.9rem;
        margin-bottom: 16px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-weight: 600;
    }

    /* Social Links Input */
    .social-link-input {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 12px;
        background: rgba(89, 85, 179, 0.05);
        padding: 12px;
        border-radius: var(--border-radius-sm);
        border: 1px solid var(--border-color);
        transition: var(--transition);
    }

    .social-link-input:hover {
        background: rgba(89, 85, 179, 0.1);
        transform: translateY(-1px);
    }

    .social-icon {
        width: 32px;
        height: 32px;
        background: var(--primary-color);
        color: white;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.9rem;
        flex-shrink: 0;
    }

    .social-icon.youtube { background: #ff0000; }
    .social-icon.instagram { background: linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%); }
    .social-icon.facebook { background: #1877f2; }
    .social-icon.twitter { background: #1da1f2; }
    .social-icon.linkedin { background: #0077b5; }

    /* Element Selection Buttons */
    .element-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 16px;
    }

    .card-button {
        background: var(--accent-color);
        border: none;
        padding: 20px 16px;
        border-radius: var(--border-radius-sm);
        font-weight: 500;
        font-size: 0.95rem;
        width: 100%;
        text-align: center;
        transition: var(--transition);
        cursor: pointer;
        border: 2px solid transparent;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 8px;
        color: var(--text-primary);
        position: relative;
        overflow: hidden;
    }

    .card-button i {
        font-size: 1.5rem;
        color: var(--primary-color);
        transition: var(--transition);
    }

    .card-button:hover {
        background: var(--accent-hover);
        transform: translateY(-3px);
        box-shadow: var(--shadow-light);
        border-color: var(--primary-color);
    }

    .card-button.active {
        background: linear-gradient(135deg, var(--active-color), var(--primary-light));
        color: white;
        font-weight: 600;
        box-shadow: var(--shadow-active);
        transform: translateY(-2px);
        border-color: var(--active-color);
    }

    .card-button.active i {
        color: white;
        transform: scale(1.1);
    }

    /* Form Controls */
    .form-label {
        font-weight: 500;
        color: var(--text-primary);
        margin-bottom: 8px;
        font-size: 0.9rem;
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .form-label i {
        font-size: 0.85rem;
        color: var(--primary-color);
    }

    .form-control, .form-select {
        border-radius: var(--border-radius-sm);
        border: 2px solid var(--border-color);
        padding: 12px 16px;
        font-size: 0.95rem;
        transition: var(--transition);
        background: var(--card-background);
        resize: vertical;
    }

    .form-control:focus, .form-select:focus {
        border-color: var(--primary-color);
        box-shadow: 0 0 0 3px rgba(89, 85, 179, 0.1);
        outline: none;
        transform: translateY(-1px);
    }

    .form-control-color {
        width: 60px !important;
        height: 45px !important;
        border-radius: var(--border-radius-sm) !important;
        border: 2px solid var(--border-color) !important;
        cursor: pointer;
        transition: var(--transition);
    }

    .form-control-color:hover {
        transform: scale(1.05);
        box-shadow: var(--shadow-light);
    }

    /* Color Input Group */
    .color-input-group {
        display: flex;
        align-items: center;
        gap: 12px;
        background: var(--accent-color);
        padding: 8px 12px;
        border-radius: var(--border-radius-sm);
        border: 2px solid transparent;
        transition: var(--transition);
    }

    .color-input-group:hover {
        border-color: var(--primary-color);
        transform: translateY(-1px);
    }

    /* Settings Sections */
    .settings-section {
        display: none;
        animation: fadeInUp 0.4s ease-out;
    }

    .settings-section.active {
        display: block;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Alert */
    .alert {
        border-radius: var(--border-radius-sm);
        border: none;
        box-shadow: var(--shadow-light);
        font-weight: 500;
    }

    .alert-success {
        background: linear-gradient(135deg, #d4edda, #c3e6cb);
        color: #155724;
        border-left: 4px solid #28a745;
    }

    /* Button */
    .btn-primary {
        background: linear-gradient(135deg, var(--primary-color), var(--primary-light));
        border: none;
        padding: 14px 32px;
        border-radius: var(--border-radius-sm);
        font-weight: 600;
        font-size: 0.95rem;
        transition: var(--transition);
        box-shadow: var(--shadow-light);
        position: relative;
        overflow: hidden;
    }

    .btn-primary::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
        transition: var(--transition);
    }

    .btn-primary:hover::before {
        left: 100%;
    }

    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: var(--shadow-medium);
        background: linear-gradient(135deg, var(--primary-dark), var(--primary-color));
    }

    .btn-primary:active {
        transform: translateY(0);
    }

    /* Image Preview */
    .image-preview {
        border-radius: var(--border-radius-sm);
        box-shadow: var(--shadow-light);
        border: 2px solid var(--border-color);
        transition: var(--transition);
    }

    .image-preview:hover {
        transform: scale(1.02);
        box-shadow: var(--shadow-medium);
    }

    /* Menu Input Group */
    .menu-input {
        margin-bottom: 12px;
        position: relative;
    }

    .menu-input::before {
        content: counter(menu-counter);
        counter-increment: menu-counter;
        position: absolute;
        left: 12px;
        top: 50%;
        transform: translateY(-50%);
        background: var(--primary-color);
        color: white;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.75rem;
        font-weight: 600;
        z-index: 2;
    }

    .menu-input input {
        padding-left: 45px;
    }

    .menu-section {
        counter-reset: menu-counter;
    }

    /* Toggle Switch */
    .toggle-switch {
        position: relative;
        display: inline-block;
        width: 52px;
        height: 28px;
    }

    .toggle-switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .toggle-slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: var(--border-color);
        transition: var(--transition);
        border-radius: 34px;
    }

    .toggle-slider:before {
        position: absolute;
        content: "";
        height: 20px;
        width: 20px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        transition: var(--transition);
        border-radius: 50%;
        box-shadow: 0 2px 4px rgba(0,0,0,0.2);
    }

    input:checked + .toggle-slider {
        background-color: var(--primary-color);
    }

    input:checked + .toggle-slider:before {
        transform: translateX(24px);
    }

    /* Global Settings Specific Styles */
    #globalSettings {
        animation: fadeInUp 0.4s ease-out;
    }

    #globalSettings .card-section {
        background: linear-gradient(135deg, var(--card-background) 0%, rgba(255, 255, 255, 0.98) 100%);
        border-radius: var(--border-radius);
        padding: 32px;
        margin-bottom: 24px;
        box-shadow: var(--shadow-light);
        border: 1px solid var(--border-color);
        transition: var(--transition);
        position: relative;
        overflow: hidden;
    }

    #globalSettings .card-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(135deg, var(--primary-color), var(--primary-light));
        opacity: 0;
        transition: var(--transition);
    }

    #globalSettings .card-section:hover::before {
        opacity: 1;
    }

    #globalSettings .card-section:hover {
        transform: translateY(-3px);
        box-shadow: var(--shadow-medium);
    }

    #globalSettings .card-section h6 {
        font-size: 1.2rem;
        font-weight: 700;
        color: var(--active-color);
        margin-bottom: 24px;
        display: flex;
        align-items: center;
        gap: 12px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    #globalSettings .card-section h6::before {
        content: '';
        width: 4px;
        height: 24px;
        background: linear-gradient(135deg, var(--primary-color), var(--primary-light));
        border-radius: 2px;
    }

    #globalSettings .card-section h6 i {
        font-size: 1.4rem;
        color: var(--primary-color);
        background: var(--accent-color);
        padding: 10px;
        border-radius: 12px;
        transition: var(--transition);
    }

    #globalSettings .card-section:hover h6 i {
        background: var(--primary-color);
        color: white;
        transform: scale(1.1);
    }

    /* Global Settings Form Controls */
    #globalSettings .form-label {
        font-weight: 600;
        color: var(--text-primary);
        margin-bottom: 10px;
        font-size: 0.95rem;
        display: flex;
        align-items: center;
        gap: 8px;
        text-transform: capitalize;
    }

    #globalSettings .form-label i {
        font-size: 1rem;
        color: var(--primary-color);
        background: var(--accent-color);
        padding: 6px;
        border-radius: 6px;
        transition: var(--transition);
    }

    #globalSettings .form-select {
        border-radius: var(--border-radius-sm);
        border: 2px solid var(--border-color);
        padding: 14px 16px;
        font-size: 0.95rem;
        font-weight: 500;
        transition: var(--transition);
        background: var(--card-background);
        background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3E%3Cpath fill='none' stroke='%235955B3' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right 12px center;
        background-size: 16px 12px;
        appearance: none;
    }

    #globalSettings .form-select:focus {
        border-color: var(--primary-color);
        box-shadow: 0 0 0 4px rgba(89, 85, 179, 0.15);
        outline: none;
        transform: translateY(-2px);
        background-color: rgba(89, 85, 179, 0.02);
    }

    #globalSettings .form-select:hover {
        border-color: var(--primary-light);
        transform: translateY(-1px);
        box-shadow: var(--shadow-light);
    }

    /* Global Settings Color Input */
    #globalSettings .color-input-group {
        display: flex;
        align-items: center;
        gap: 14px;
        background: linear-gradient(135deg, var(--accent-color), rgba(235, 230, 255, 0.7));
        padding: 12px 16px;
        border-radius: var(--border-radius-sm);
        border: 2px solid transparent;
        transition: var(--transition);
        position: relative;
        overflow: hidden;
    }

    #globalSettings .color-input-group::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(89, 85, 179, 0.1), transparent);
        transition: var(--transition);
    }

    #globalSettings .color-input-group:hover::before {
        left: 100%;
    }

    #globalSettings .color-input-group:hover {
        border-color: var(--primary-color);
        transform: translateY(-2px);
        box-shadow: var(--shadow-light);
    }

    #globalSettings .form-control-color {
        width: 50px !important;
        height: 50px !important;
        border-radius: 12px !important;
        border: 3px solid white !important;
        cursor: pointer;
        transition: var(--transition);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    #globalSettings .form-control-color:hover {
        transform: scale(1.1);
        box-shadow: 0 6px 12px rgba(89, 85, 179, 0.3);
    }

    #globalSettings .form-control-color:focus {
        outline: none;
        box-shadow: 0 0 0 4px rgba(89, 85, 179, 0.2);
        transform: scale(1.05);
    }

    #globalSettings .color-input-group .text-muted {
        font-family: 'Courier New', monospace;
        font-weight: 600;
        font-size: 0.9rem;
        color: var(--text-primary);
        background: white;
        padding: 6px 12px;
        border-radius: 8px;
        border: 1px solid var(--border-color);
        letter-spacing: 0.5px;
        text-transform: uppercase;
        transition: var(--transition);
    }

    #globalSettings .color-input-group:hover .text-muted {
        background: var(--primary-color);
        color: white;
        border-color: var(--primary-color);
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .main-container {
            margin-left: 0;
            padding: 16px;
        }
        
        .main-content {
            padding: 20px;
            border-radius: 16px;
        }
        
        .header-card {
            flex-direction: column;
            text-align: center;
            gap: 20px;
            padding: 20px;
        }
        
        .element-grid {
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 12px;
        }
        
        .card-button {
            padding: 16px 12px;
        }
        
        .card-section {
            padding: 20px;
        }
        
        .footer-grid {
            grid-template-columns: 1fr;
            gap: 16px;
        }
        
        .footer-section-card {
            padding: 20px;
        }
        
        .footer-preview {
            padding: 20px;
        }

        #globalSettings .card-section {
            padding: 24px 20px;
        }
        
        #globalSettings .card-section h6 {
            font-size: 1.1rem;
            margin-bottom: 20px;
        }
        
        #globalSettings .form-select {
            padding: 12px 14px;
            font-size: 0.9rem;
        }
        
        #globalSettings .color-input-group {
            padding: 10px 12px;
            gap: 10px;
        }
        
        #globalSettings .form-control-color {
            width: 40px !important;
            height: 40px !important;
        }
        
        #globalSettings .color-input-group .text-muted {
            font-size: 0.8rem;
            padding: 4px 8px;
        }
    }

    @media (max-width: 480px) {
        #globalSettings .row.g-4 > .col-md-4 {
            margin-bottom: 20px;
        }
        
        #globalSettings .form-label {
            font-size: 0.9rem;
            margin-bottom: 8px;
        }
        
        #globalSettings .form-label i {
            font-size: 0.9rem;
            padding: 5px;
        }
    }

    /* Loading State */
    .loading-overlay {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(255, 255, 255, 0.9);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 9999;
        opacity: 0;
        visibility: hidden;
        transition: var(--transition);
    }

    .loading-overlay.active {
        opacity: 1;
        visibility: visible;
    }

    .spinner {
        width: 50px;
        height: 50px;
        border: 4px solid var(--accent-color);
        border-top: 4px solid var(--primary-color);
        border-radius: 50%;
        animation: spin 1s linear infinite;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    /* Interactive Effects */
    #globalSettings .form-select option {
        padding: 8px;
        background: var(--card-background);
        color: var(--text-primary);
    }

    #globalSettings .form-select option:hover {
        background: var(--accent-color);
    }

    /* Loading State for Global Settings */
    #globalSettings.loading {
        opacity: 0.6;
        pointer-events: none;
    }

    #globalSettings.loading .card-section::after {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 30px;
        height: 30px;
        border: 3px solid var(--accent-color);
        border-top: 3px solid var(--primary-color);
        border-radius: 50%;
        animation: spin 1s linear infinite;
    }
</style>
</head>
<body>

@include('layouts.main')

<!-- Loading Overlay -->
<div class="loading-overlay" id="loadingOverlay">
    <div class="spinner"></div>
</div>

<div class="main-container">
    <div class="main-content">

        <!-- Header -->
        <div class="header-card">
            <div>
                <h5><i class="bi bi-palette"></i> Tampilan</h5>
                <p>Sesuaikan template dan nuansa panel admin Anda dengan elemen, teks, tata letak, dan tema yang menarik.</p>
            </div>
            <img src="https://via.placeholder.com/150x100/5955B3/ffffff?text=Preview" alt="Ilustrasi" class="image-preview">
        </div>

        <!-- Alert Sukses -->
        @if(session('success'))
            <div class="alert alert-success">
                <i class="bi bi-check-circle-fill me-2"></i>
                {{ session('success') }}
            </div>
        @endif

        <!-- Form Kustomisasi -->
        <form action="{{ route('tampilan.update') }}" method="POST" enctype="multipart/form-data" id="customizationForm">
            @csrf
            
            <!-- Elemen Selection -->
            <div class="card-section">
                <h6><i class="bi bi-grid-3x3-gap"></i> Pilih Elemen untuk Dikustomisasi</h6>
                <div class="element-grid">
                    <button type="button" class="card-button" data-element="navbar">
                        <i class="bi bi-menu-button"></i>
                        <span>Navbar</span>
                    </button>
                    <button type="button" class="card-button" data-element="hero">
                        <i class="bi bi-card-image"></i>
                        <span>Hero Section</span>
                    </button>
                    <button type="button" class="card-button" data-element="footer">
                        <i class="bi bi-layout-text-window"></i>
                        <span>Footer</span>
                    </button>
                    <button type="button" class="card-button" data-element="global">
                        <i class="bi bi-globe"></i>
                        <span>Global</span>
                    </button>
                </div>
                <input type="hidden" name="selected_element" id="selectedElement">
            </div>

            <!-- Navbar Settings -->
            <div class="settings-section" id="navbarSettings">
                <div class="row g-4">
                    <!-- Identitas -->
                    <div class="col-12">
                        <div class="card-section">
                            <h6><i class="bi bi-building"></i> Identitas Sekolah</h6>
                            <div class="mb-3">
                                <label class="form-label">Nama Sekolah</label>
                                <input type="text" name="nama_sekolah" class="form-control" 
                                       value="{{ $tampilan->nama_sekolah ?? '' }}" placeholder="Masukkan nama sekolah">
                            </div>
                        </div>
                    </div>

                    <!-- Skema Warna dan Typography -->
                    <div class="col-lg-6">
                        <div class="card-section">
                            <h6><i class="bi bi-palette-fill"></i> Skema Warna</h6>
                            <div class="row g-3">
                                <div class="col-6">
                                    <label class="form-label">Warna Primary</label>
                                    <div class="color-input-group">
                                        <input type="color" name="warna" class="form-control-color" value="{{ $tampilan->warna ?? '#5955B3' }}">
                                        <span class="text-muted">{{ $tampilan->warna ?? '#5955B3' }}</span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Warna Font</label>
                                    <div class="color-input-group">
                                        <input type="color" name="font_color" class="form-control-color" value="{{ $tampilan->font_color ?? '#2d3748' }}">
                                        <span class="text-muted">{{ $tampilan->font_color ?? '#2d3748' }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-section">
                            <h6><i class="bi bi-type"></i> Typography</h6>
                            <div class="row g-3">
                                <div class="col-6">
                                    <label class="form-label">Font Family</label>
                                    <select name="font" class="form-select">
                                        <option value="Poppins" {{ ($tampilan->font ?? 'Poppins') == 'Poppins' ? 'selected' : '' }}>Poppins</option>
                                        <option value="Roboto" {{ ($tampilan->font ?? '') == 'Roboto' ? 'selected' : '' }}>Roboto</option>
                                        <option value="Open Sans" {{ ($tampilan->font ?? '') == 'Open Sans' ? 'selected' : '' }}>Open Sans</option>
                                        <option value="Inter" {{ ($tampilan->font ?? '') == 'Inter' ? 'selected' : '' }}>Inter</option>
                                        <option value="Nunito" {{ ($tampilan->font ?? '') == 'Nunito' ? 'selected' : '' }}>Nunito</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Ukuran Font</label>
                                    <select name="font_size" class="form-select">
                                        <option value="s" {{ ($tampilan->font_size ?? '') == 's' ? 'selected' : '' }}>Kecil</option>
                                        <option value="m" {{ ($tampilan->font_size ?? 'm') == 'm' ? 'selected' : '' }}>Sedang</option>
                                        <option value="l" {{ ($tampilan->font_size ?? '') == 'l' ? 'selected' : '' }}>Besar</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Logo dan Menu -->
                    <div class="col-lg-6">
                        <div class="card-section">
                            <h6><i class="bi bi-image"></i> Logo</h6>
                            <div class="mb-3">
                                <label class="form-label">Upload Logo</label>
                                <input type="file" name="logo" class="form-control" accept="image/*">
                                <div class="form-text">Format: JPG, PNG, SVG. Maksimal 2MB.</div>
                            </div>
                            <div class="mt-3">
                                @if(!empty($tampilan->logo))
                                    <img src="{{ asset('storage/' . $tampilan->logo) }}" alt="Logo" class="image-preview" style="max-height:60px;">
                                @else
                                    <img src="https://via.placeholder.com/100x60/5955B3/ffffff?text=LOGO" alt="Current Logo" class="image-preview" style="max-height:60px;">
                                @endif
                            </div>
                        </div>

                        <div class="card-section menu-section">
                            <h6><i class="bi bi-list"></i> Menu Navigasi</h6>
                            <div class="menu-input">
                                <input type="text" name="menu1" class="form-control" value="{{ $tampilan->menu1 ?? 'Beranda' }}" placeholder="Menu 1">
                            </div>
                            <div class="menu-input">
                                <input type="text" name="menu2" class="form-control" value="{{ $tampilan->menu2 ?? 'Tentang' }}" placeholder="Menu 2">
                            </div>
                            <div class="menu-input">
                                <input type="text" name="menu3" class="form-control" value="{{ $tampilan->menu3 ?? 'Program' }}" placeholder="Menu 3">
                            </div>
                            <div class="menu-input">
                                <input type="text" name="menu4" class="form-control" value="{{ $tampilan->menu4 ?? 'Galeri' }}" placeholder="Menu 4">
                            </div>
                            <div class="menu-input">
                                <input type="text" name="menu5" class="form-control" value="{{ $tampilan->menu5 ?? 'Kontak' }}" placeholder="Menu 5">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Hero Settings -->
            <div class="settings-section" id="heroSettings">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="card-section">
                            <h6><i class="bi bi-card-image"></i> Gambar Hero</h6>
                            <div class="mb-3">
                                <label class="form-label">Upload Gambar Hero</label>
                                <input type="file" name="hero_image" class="form-control" accept="image/*">
                                <div class="form-text">Rekomendasi: 1920x1080px, maksimal 5MB.</div>
                            </div>
                            <div class="mt-3">
                                @if(!empty($hero->image))
                                    <img src="{{ asset('storage/'.$hero->image) }}" alt="Hero Image" class="image-preview img-fluid" style="max-height:180px; width: 100%; object-fit: cover;">
                                @else
                                    <img src="https://via.placeholder.com/300x180/5955B3/ffffff?text=Hero+Image" alt="Hero Image" class="image-preview img-fluid" style="max-height:180px; width: 100%; object-fit: cover;">
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card-section">
                            <h6><i class="bi bi-type-h1"></i> Typography Hero</h6>
                            <div class="row g-3">
                                <div class="col-12">
                                    <label class="form-label">Warna Font Hero</label>
                                    <div class="color-input-group">
                                        <input type="color" name="hero_font_color" class="form-control-color" value="{{ $hero->font_color ?? '#ffffff' }}">
                                        <span class="text-muted">{{ $hero->font_color ?? '#ffffff' }}</span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Font Family</label>
                                    <select name="hero_font" class="form-select">
                                        <option value="Poppins" {{ ($hero->font ?? 'Poppins') == 'Poppins' ? 'selected' : '' }}>Poppins</option>
                                        <option value="Roboto" {{ ($hero->font ?? '') == 'Roboto' ? 'selected' : '' }}>Roboto</option>
                                        <option value="Open Sans" {{ ($hero->font ?? '') == 'Open Sans' ? 'selected' : '' }}>Open Sans</option>
                                        <option value="Playfair Display" {{ ($hero->font ?? '') == 'Playfair Display' ? 'selected' : '' }}>Playfair Display</option>
                                        <option value="Montserrat" {{ ($hero->font ?? '') == 'Montserrat' ? 'selected' : '' }}>Montserrat</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Ukuran Font</label>
                                    <select name="hero_font_size" class="form-select">
                                        <option value="s" {{ ($hero->font_size ?? '') == 's' ? 'selected' : '' }}>Kecil</option>
                                        <option value="m" {{ ($hero->font_size ?? '') == 'm' ? 'selected' : '' }}>Sedang</option>
                                        <option value="l" {{ ($hero->font_size ?? 'l') == 'l' ? 'selected' : '' }}>Besar</option>
                                        <option value="xl" {{ ($hero->font_size ?? '') == 'xl' ? 'selected' : '' }}>Extra Besar</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="card-section">
                            <h6><i class="bi bi-textarea-t"></i> Konten Hero</h6>
                            <div class="mb-3">
                                <label class="form-label">Judul Hero</label>
                                <input type="text" name="hero_title" class="form-control" 
                                       value="{{ $hero->title ?? 'Selamat Datang di SMK Negeri 1 Malang' }}" placeholder="Judul hero section">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Subtitle Hero</label>
                                <textarea name="hero_subtitle" class="form-control" rows="3" 
                                          placeholder="Deskripsi singkat tentang sekolah">{{ $hero->subtitle ?? 'Membentuk siswa yang unggul, berkarakter, dan siap menghadapi tantangan masa depan dengan pendidikan berkualitas dan fasilitas modern.' }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer Settings -->
            <div class="settings-section" id="footerSettings">
                <div class="card-section">
                    <h6><i class="bi bi-layout-text-window"></i> Pengaturan Footer Komprehensif</h6>
                    
                    <!-- Footer Style Configuration -->
                    <div class="footer-section-card mb-4">
                        <div class="footer-section-title">
                            <i class="bi bi-palette"></i>
                            <span>Gaya & Warna Footer</span>
                        </div>
                        
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label class="form-label"><i class="bi bi-paint-bucket"></i> Warna Background</label>
                                <div class="color-input-group">
                                    <input type="color" name="footer_bg_color" class="form-control-color" value="{{ $footer->footer_bg_color ?? '#1a1a1a' }}">
                                    <span class="text-muted">{{ $footer->footer_bg_color ?? '#1A1A1A' }}</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label"><i class="bi bi-type"></i> Warna Teks</label>
                                <div class="color-input-group">
                                    <input type="color" name="footer_text_color" class="form-control-color" value="{{ $footer->footer_text_color ?? '#ffffff' }}">
                                    <span class="text-muted">{{ $footer->footer_text_color ?? '#FFFFFF' }}</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label"><i class="bi bi-link-45deg"></i> Warna Link</label>
                                <div class="color-input-group">
                                    <input type="color" name="footer_link_color" class="form-control-color" value="{{ $footer->footer_link_color ?? '#7B6FE8' }}">
                                    <span class="text-muted">{{ $footer->footer_link_color ?? '#7B6FE8' }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="footer-grid">
                        <!-- Informasi Kontak -->
                        <div class="footer-section-card">
                            <div class="footer-section-title">
                                <i class="bi bi-geo-alt-fill"></i>
                                <span>Informasi Kontak</span>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label"><i class="bi bi-building"></i> Nama Institusi</label>
                                <input type="text" name="footer_institution_name" class="form-control" 
                                       value="{{ $footer->footer_institution_name ?? 'SMK Negeri 1 Malang' }}" placeholder="Nama sekolah/institusi">
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label"><i class="bi bi-geo-alt"></i> Alamat Lengkap</label>
                                <textarea name="footer_address" class="form-control" rows="2" 
                                          placeholder="Jl. Raya Malang No. 123, Malang, Jawa Timur 65144">{{ $footer->footer_address ?? 'Jl. Raya Malang No. 123, Malang, Jawa Timur 65144' }}</textarea>
                            </div>
                            
                            <div class="row g-3">
                                <div class="col-6">
                                    <label class="form-label"><i class="bi bi-telephone"></i> Telepon</label>
                                    <input type="text" name="footer_phone" class="form-control" 
                                           value="{{ $footer->footer_phone ?? '(0341) 123456' }}" placeholder="Nomor telepon">
                                </div>
                                <div class="col-6">
                                    <label class="form-label"><i class="bi bi-envelope"></i> Email</label>
                                    <input type="email" name="footer_email" class="form-control" 
                                           value="{{ $footer->footer_email ?? 'info@smkn1malang.sch.id' }}" placeholder="Email kontak">
                                </div>
                            </div>
                        </div>

                        <!-- Link Media Sosial -->
                        <div class="footer-section-card">
                            <div class="footer-section-title">
                                <i class="bi bi-share"></i>
                                <span>Media Sosial</span>
                            </div>
                            
                            <div class="social-link-input">
                                <div class="social-icon youtube"><i class="bi bi-youtube"></i></div>
                                <input type="url" name="footer_youtube" class="form-control" 
                                       value="{{ $footer->footer_youtube ?? 'https://youtube.com/smkn1malang' }}" placeholder="Link YouTube">
                            </div>
                            
                            <div class="social-link-input">
                                <div class="social-icon instagram"><i class="bi bi-instagram"></i></div>
                                <input type="url" name="footer_instagram" class="form-control" 
                                       value="{{ $footer->footer_instagram ?? 'https://instagram.com/smkn1malang' }}" placeholder="Link Instagram">
                            </div>
                            
                            <div class="social-link-input">
                                <div class="social-icon facebook"><i class="bi bi-facebook"></i></div>
                                <input type="url" name="footer_facebook" class="form-control" 
                                       value="{{ $footer->footer_facebook ?? 'https://facebook.com/smkn1malang' }}" placeholder="Link Facebook">
                            </div>
                            
                            <div class="social-link-input">
                                <div class="social-icon twitter"><i class="bi bi-twitter"></i></div>
                                <input type="url" name="footer_twitter" class="form-control" 
                                       value="{{ $footer->footer_twitter ?? '' }}" placeholder="Link Twitter (opsional)">
                            </div>
                        </div>

                        <!-- Layanan & Program -->
                        <div class="footer-section-card">
                            <div class="footer-section-title">
                                <i class="bi bi-gear-fill"></i>
                                <span>Layanan & Program</span>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label"><i class="bi bi-list-ul"></i> Daftar Layanan</label>
                                <textarea name="footer_services" class="form-control" rows="4" 
                                          placeholder="Pendaftaran Siswa Baru&#10;Informasi Akademik&#10;E-Learning&#10;Perpustakaan Digital">{{ $footer->footer_services ?? 'Pendaftaran Siswa Baru
Informasi Akademik
E-Learning
Perpustakaan Digital' }}</textarea>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label"><i class="bi bi-mortarboard"></i> Program Keahlian</label>
                                <textarea name="footer_programs" class="form-control" rows="3" 
                                          placeholder="Rekayasa Perangkat Lunak&#10;Teknik Komputer Jaringan&#10;Multimedia">{{ $footer->footer_programs ?? 'Rekayasa Perangkat Lunak
Teknik Komputer Jaringan
Multimedia' }}</textarea>
                            </div>
                        </div>

                        <!-- Link Penting -->
                        <div class="footer-section-card">
                            <div class="footer-section-title">
                                <i class="bi bi-link-45deg"></i>
                                <span>Link Penting</span>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label"><i class="bi bi-journal-text"></i> Kebijakan & Dokumen</label>
                                <textarea name="footer_policies" class="form-control" rows="3" 
                                          placeholder="Kebijakan Privasi&#10;Syarat & Ketentuan&#10;Panduan Akademik">{{ $footer->footer_policies ?? 'Kebijakan Privasi
Syarat & Ketentuan
Panduan Akademik' }}</textarea>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label"><i class="bi bi-globe"></i> Link Eksternal</label>
                                <textarea name="footer_external_links" class="form-control" rows="3" 
                                          placeholder="Kemendikbudristek&#10;LPMP Jawa Timur&#10;Dinas Pendidikan Kota Malang">{{ $footer->footer_external_links ?? 'Kemendikbudristek
LPMP Jawa Timur
Dinas Pendidikan Kota Malang' }}</textarea>
                            </div>
                        </div>

                        <!-- Jam Operasional -->
                        <div class="footer-section-card">
                            <div class="footer-section-title">
                                <i class="bi bi-clock"></i>
                                <span>Jam Operasional</span>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label"><i class="bi bi-calendar-week"></i> Hari Kerja</label>
                                <input type="text" name="footer_weekday_hours" class="form-control" 
                                       value="{{ $footer->footer_weekday_hours ?? 'Senin - Jumat: 07:00 - 15:30 WIB' }}" placeholder="Jam kerja hari biasa">
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label"><i class="bi bi-calendar-day"></i> Hari Sabtu</label>
                                <input type="text" name="footer_saturday_hours" class="form-control" 
                                       value="{{ $footer->footer_saturday_hours ?? 'Sabtu: 07:00 - 11:00 WIB' }}" placeholder="Jam kerja hari Sabtu">
                            </div>
                            
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="footer_show_hours" id="showHours" {{ isset($footer->footer_show_hours) && $footer->footer_show_hours ? 'checked' : 'checked' }}>
                                <label class="form-check-label" for="showHours">
                                    Tampilkan jam operasional di footer
                                </label>
                            </div>
                        </div>

                        <!-- Informasi Hak Cipta -->
                        <div class="footer-section-card">
                            <div class="footer-section-title">
                                <i class="bi bi-c-circle"></i>
                                <span>Hak Cipta & Credit</span>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label"><i class="bi bi-shield-check"></i> Informasi Hak Cipta</label>
                                <textarea name="footer_copyright" class="form-control" rows="2" 
                                          placeholder="© 2023 SMK Negeri 1 Malang. Semua Hak Dilindungi.">{{ $footer->footer_copyright ?? '© 2023 SMK Negeri 1 Malang. Semua Hak Dilindungi.' }}</textarea>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label"><i class="bi bi-code-slash"></i> Developer Credit</label>
                                <input type="text" name="footer_developer" class="form-control" 
                                       value="{{ $footer->footer_developer ?? 'Dikembangkan oleh Tim IT SMK Negeri 1 Malang' }}" placeholder="Credit pengembang">
                            </div>
                            
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="footer_show_developer" id="showDeveloper" {{ isset($footer->footer_show_developer) && $footer->footer_show_developer ? 'checked' : 'checked' }}>
                                <label class="form-check-label" for="showDeveloper">
                                    Tampilkan credit pengembang
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Footer Preview -->
                    <div class="footer-preview">
                        <div class="footer-preview-content">
                            <h6><i class="bi bi-eye"></i> Preview Footer</h6>
                            <div class="row g-4">
                                <div class="col-md-3">
                                    <h6 class="text-white">Kontak Kami</h6>
                                    <p class="mb-1"><i class="bi bi-geo-alt me-2"></i>{{ $footer->footer_address ?? 'Jl. Raya Malang No. 123' }}</p>
                                    <p class="mb-1"><i class="bi bi-telephone me-2"></i>{{ $footer->footer_phone ?? '(0341) 123456' }}</p>
                                    <p class="mb-0"><i class="bi bi-envelope me-2"></i>{{ $footer->footer_email ?? 'info@smkn1malang.sch.id' }}</p>
                                </div>
                                <div class="col-md-3">
                                    <h6 class="text-white">Layanan</h6>
                                    <p class="mb-1">• {{ explode("\n", $footer->footer_services ?? 'Pendaftaran Siswa Baru')[0] ?? 'Pendaftaran Siswa Baru' }}</p>
                                    <p class="mb-1">• {{ explode("\n", $footer->footer_services ?? 'Informasi Akademik')[1] ?? 'Informasi Akademik' }}</p>
                                    <p class="mb-0">• {{ explode("\n", $footer->footer_services ?? 'E-Learning')[2] ?? 'E-Learning' }}</p>
                                </div>
                                <div class="col-md-3">
                                    <h6 class="text-white">Program Keahlian</h6>
                                    <p class="mb-1">• {{ explode("\n", $footer->footer_programs ?? 'Rekayasa Perangkat Lunak')[0] ?? 'Rekayasa Perangkat Lunak' }}</p>
                                    <p class="mb-1">• {{ explode("\n", $footer->footer_programs ?? 'Teknik Komputer Jaringan')[1] ?? 'Teknik Komputer Jaringan' }}</p>
                                    <p class="mb-0">• {{ explode("\n", $footer->footer_programs ?? 'Multimedia')[2] ?? 'Multimedia' }}</p>
                                </div>
                                <div class="col-md-3">
                                    <h6 class="text-white">Media Sosial</h6>
                                    <div class="d-flex gap-2">
                                        @if(!empty($footer->footer_youtube))
                                            <i class="bi bi-youtube text-danger"></i>
                                        @endif
                                        @if(!empty($footer->footer_instagram))
                                            <i class="bi bi-instagram text-primary"></i>
                                        @endif
                                        @if(!empty($footer->footer_facebook))
                                            <i class="bi bi-facebook text-primary"></i>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <hr class="border-light my-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="mb-0">{{ $footer->footer_copyright ?? '© 2023 SMK Negeri 1 Malang. Semua Hak Dilindungi.' }}</p>
                                <p class="mb-0 text-muted small">{{ $footer->footer_weekday_hours ?? 'Senin - Jumat: 07:00 - 15:30 WIB' }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Global Settings - FIXED SECTION -->
            <div class="settings-section" id="globalSettings">
    <div class="card-section">
        <h6><i class="bi bi-globe"></i> Pengaturan Global</h6>
        <div class="row g-4">
            <div class="col-md-4">
                <label class="form-label"><i class="bi bi-palette"></i> Warna Utama</label>
                <div class="color-input-group">
                    <input type="color" name="global_primary_color" class="form-control-color" 
                           value="{{ $semua->warna ?? '#5955B3' }}">
                    <span class="text-muted">{{ $semua->warna_utama ?? '#5955B3' }}</span>
                </div>
            </div>
            <div class="col-md-4">
                <label class="form-label"><i class="bi bi-fonts"></i> Font Utama</label>
                <select name="global_primary_font" class="form-select">
                    <option value="Poppins" {{ ($semua->font_utama ?? 'Poppins') == 'Poppins' ? 'selected' : '' }}>Poppins</option>
                    <option value="Roboto" {{ ($semua->font_utama ?? '') == 'Roboto' ? 'selected' : '' }}>Roboto</option>
                    <option value="Open Sans" {{ ($semua->font_utama ?? '') == 'Open Sans' ? 'selected' : '' }}>Open Sans</option>
                    <option value="Inter" {{ ($semua->font_utama ?? '') == 'Inter' ? 'selected' : '' }}>Inter</option>
                    <option value="Nunito" {{ ($semua->font_utama ?? '') == 'Nunito' ? 'selected' : '' }}>Nunito</option>
                    <option value="Montserrat" {{ ($semua->font_utama ?? '') == 'Montserrat' ? 'selected' : '' }}>Montserrat</option>
                </select>
            </div>
            <div class="col-md-4">
                <label class="form-label"><i class="bi bi-type-h1"></i> Font Heading</label>
                <select name="global_heading_font" class="form-select">
                    <option value="Poppins" {{ ($semua->font_heading ?? 'Poppins') == 'Poppins' ? 'selected' : '' }}>Poppins</option>
                    <option value="Playfair Display" {{ ($semua->font_heading ?? '') == 'Playfair Display' ? 'selected' : '' }}>Playfair Display</option>
                    <option value="Merriweather" {{ ($semua->font_heading ?? '') == 'Merriweather' ? 'selected' : '' }}>Merriweather</option>
                    <option value="Montserrat" {{ ($semua->font_heading ?? '') == 'Montserrat' ? 'selected' : '' }}>Montserrat</option>
                    <option value="Oswald" {{ ($semua->font_heading ?? '') == 'Oswald' ? 'selected' : '' }}>Oswald</option>
                    <option value="Raleway" {{ ($semua->font_heading ?? '') == 'Raleway' ? 'selected' : '' }}>Raleway</option>
                </select>
            </div>
        </div>
    </div>
</div>


            <!-- Action Buttons -->
            <div class="mt-4 d-flex gap-3 justify-content-end">
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-check-lg me-2"></i>Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    // Element Selection Logic
    const buttons = document.querySelectorAll('.card-button');
    const hiddenInput = document.getElementById('selectedElement');
    const settingsSections = document.querySelectorAll('.settings-section');
    const form = document.getElementById('customizationForm');
    const loadingOverlay = document.getElementById('loadingOverlay');

    buttons.forEach(btn => {
        btn.addEventListener('click', function() {
            // Reset semua tombol
            buttons.forEach(b => {
                b.classList.remove('active');
                b.style.transform = 'scale(1)';
            });

            // Aktifkan tombol yang diklik
            this.classList.add('active');
            hiddenInput.value = this.dataset.element;

            // Sembunyikan semua section
            settingsSections.forEach(section => {
                section.classList.remove('active');
            });

            // Tampilkan section sesuai pilihan
            const targetSection = document.getElementById(this.dataset.element + 'Settings');
            if (targetSection) {
                targetSection.classList.add('active');
            }

            // Feedback animasi klik
            this.style.transform = 'scale(0.95)';
            setTimeout(() => {
                this.style.transform = 'scale(1)';
            }, 150);
        });
    });

    // Color Input Updates
    document.querySelectorAll('input[type="color"]').forEach(colorInput => {
        const textSpan = colorInput.parentElement.querySelector('span');
        colorInput.addEventListener('input', function() {
            if (textSpan) {
                textSpan.textContent = this.value.toUpperCase();
            }
            updateFooterPreview();
        });
    });

    // Real-time preview updates
    document.querySelectorAll('#footerSettings input, #footerSettings textarea').forEach(input => {
        input.addEventListener('input', function() {
            updateFooterPreview();
        });
    });

    function updateFooterPreview() {
        // Update preview based on form inputs
        const address = document.querySelector('textarea[name="footer_address"]').value;
        const phone = document.querySelector('input[name="footer_phone"]').value;
        const email = document.querySelector('input[name="footer_email"]').value;
        const services = document.querySelector('textarea[name="footer_services"]').value.split('\n');
        const programs = document.querySelector('textarea[name="footer_programs"]').value.split('\n');
        const copyright = document.querySelector('textarea[name="footer_copyright"]').value;
        const hours = document.querySelector('input[name="footer_weekday_hours"]').value;
        
        // Update preview content
        document.querySelector('.footer-preview .col-md-3:nth-child(1) p:nth-child(2)').textContent = address || 'Jl. Raya Malang No. 123';
        document.querySelector('.footer-preview .col-md-3:nth-child(1) p:nth-child(3)').textContent = phone || '(0341) 123456';
        document.querySelector('.footer-preview .col-md-3:nth-child(1) p:nth-child(4)').textContent = email || 'info@smkn1malang.sch.id';
        
        // Update services
        const serviceElements = document.querySelectorAll('.footer-preview .col-md-3:nth-child(2) p');
        serviceElements[0].textContent = '• ' + (services[0] || 'Pendaftaran Siswa Baru');
        serviceElements[1].textContent = '• ' + (services[1] || 'Informasi Akademik');
        serviceElements[2].textContent = '• ' + (services[2] || 'E-Learning');
        
        // Update programs
        const programElements = document.querySelectorAll('.footer-preview .col-md-3:nth-child(3) p');
        programElements[0].textContent = '• ' + (programs[0] || 'Rekayasa Perangkat Lunak');
        programElements[1].textContent = '• ' + (programs[1] || 'Teknik Komputer Jaringan');
        programElements[2].textContent = '• ' + (programs[2] || 'Multimedia');
        
        // Update copyright and hours
        document.querySelector('.footer-preview-content > .d-flex > p:first-child').textContent = copyright || '© 2023 SMK Negeri 1 Malang. Semua Hak Dilindungi.';
        document.querySelector('.footer-preview-content > .d-flex > p:last-child').textContent = hours || 'Senin - Jumat: 07:00 - 15:30 WIB';
    }

    // Form Submission
    form.addEventListener('submit', function() {
        loadingOverlay.classList.add('active');
    });

    // Reset Form Function
    function resetForm() {
        if (confirm('Apakah Anda yakin ingin mereset semua pengaturan?')) {
            form.reset();

            // Reset active states
            buttons.forEach(b => b.classList.remove('active'));
            settingsSections.forEach(section => {
                section.classList.remove('active');
            });

            hiddenInput.value = '';
            
            // Update preview after reset
            updateFooterPreview();
        }
    }

    // Auto-select first element on page load
    document.addEventListener('DOMContentLoaded', function() {
        if (buttons.length > 0) {
            buttons[0].click();
        }
        
        // Initialize footer preview
        updateFooterPreview();
    });

    // File input preview functionality
    document.querySelectorAll('input[type="file"]').forEach(fileInput => {
        fileInput.addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const preview = fileInput.closest('.mb-3, .card-section')?.querySelector('img');
                    if (preview) {
                        preview.src = e.target.result;
                    }
                };
                reader.readAsDataURL(file);
            }
        });
    });

    // Add smooth transitions for form interactions
    document.querySelectorAll('.form-control, .form-select').forEach(input => {
        input.addEventListener('focus', function() {
            this.style.transform = 'translateY(-1px)';
        });
        input.addEventListener('blur', function() {
            this.style.transform = '';
        });
    });

    // Social media validation
    document.querySelectorAll('input[type="url"]').forEach(urlInput => {
        urlInput.addEventListener('blur', function() {
            if (this.value && !this.value.startsWith('http')) {
                this.value = 'https://' + this.value;
            }
            updateFooterPreview();
        });
    });

    // Global Settings JavaScript Enhancement
    // Global Settings Color Input Updates
    document.querySelectorAll('#globalSettings input[type="color"]').forEach(colorInput => {
        const textSpan = colorInput.parentElement.querySelector('span');
        colorInput.addEventListener('input', function() {
            if (textSpan) {
                textSpan.textContent = this.value.toUpperCase();
            }
            updateGlobalPreview();
        });
    });

    // Global Settings Font Selection Updates
    document.querySelectorAll('#globalSettings select').forEach(selectInput => {
        selectInput.addEventListener('change', function() {
            updateGlobalPreview();
            updateGlobalFontPreview(this.name, this.value);
        });
    });

    // Real-time Global Settings Updates
    document.querySelectorAll('#globalSettings input, #globalSettings select').forEach(input => {
        input.addEventListener('input', function() {
            updateGlobalPreview();
        });
        input.addEventListener('change', function() {
            updateGlobalPreview();
        });
    });

    // Update Global Preview Function
    function updateGlobalPreview() {
        const primaryColor = document.querySelector('input[name="global_primary_color"]')?.value || '#5955B3';
        const primaryFont = document.querySelector('select[name="global_primary_font"]')?.value || 'Poppins';
        const headingFont = document.querySelector('select[name="global_heading_font"]')?.value || 'Poppins';
        
        // Update CSS custom properties for real-time preview
        const root = document.documentElement;
        root.style.setProperty('--preview-primary-color', primaryColor);
        root.style.setProperty('--preview-primary-font', primaryFont);
        root.style.setProperty('--preview-heading-font', headingFont);
        
        // Update any existing preview elements if they exist
        updatePreviewElements(primaryColor, primaryFont, headingFont);
    }

    // Update Preview Elements Function
    function updatePreviewElements(primaryColor, primaryFont, headingFont) {
        // Update header title if exists
        const headerTitle = document.querySelector('.header-card h5');
        if (headerTitle) {
            headerTitle.style.fontFamily = headingFont;
            headerTitle.style.background = `linear-gradient(135deg, ${primaryColor}, ${primaryColor}aa)`;
            headerTitle.style.webkitBackgroundClip = 'text';
            headerTitle.style.webkitTextFillColor = 'transparent';
            headerTitle.style.backgroundClip = 'text';
        }
        
        // Update form labels and body text
        const formLabels = document.querySelectorAll('.form-label');
        formLabels.forEach(label => {
            label.style.fontFamily = primaryFont;
        });
        
        // Update section headings
        const sectionHeadings = document.querySelectorAll('.card-section h6');
        sectionHeadings.forEach(heading => {
            heading.style.fontFamily = headingFont;
            heading.style.color = primaryColor;
        });
        
        // Update primary buttons
        const primaryButtons = document.querySelectorAll('.btn-primary');
        primaryButtons.forEach(btn => {
            btn.style.background = `linear-gradient(135deg, ${primaryColor}, ${primaryColor}cc)`;
            btn.style.fontFamily = primaryFont;
        });
        
        // Update card button active state
        const activeCardButton = document.querySelector('.card-button.active');
        if (activeCardButton) {
            activeCardButton.style.background = `linear-gradient(135deg, ${primaryColor}, ${primaryColor}aa)`;
        }
        
        // Update color input groups
        const colorInputGroups = document.querySelectorAll('.color-input-group');
        colorInputGroups.forEach(group => {
            const groupPrimaryColor = primaryColor + '15'; // Add transparency
            group.style.background = `linear-gradient(135deg, ${groupPrimaryColor}, ${groupPrimaryColor}aa)`;
        });
        
        console.log('Global preview updated:', { primaryColor, primaryFont, headingFont });
    }

    // Font Preview Update Function
    function updateGlobalFontPreview(fontName, fontValue) {
        // Create or update font preview
        let fontPreview = document.getElementById('globalFontPreview');
        if (!fontPreview) {
            fontPreview = document.createElement('div');
            fontPreview.id = 'globalFontPreview';
            fontPreview.style.cssText = `
                position: fixed;
                top: 20px;
                right: 20px;
                background: white;
                border: 2px solid var(--primary-color);
                border-radius: 12px;
                padding: 16px;
                box-shadow: 0 8px 25px rgba(0,0,0,0.15);
                z-index: 1000;
                max-width: 300px;
                opacity: 0;
                transform: translateY(-20px);
                transition: all 0.3s ease;
            `;
            document.body.appendChild(fontPreview);
        }
        
        if (fontName === 'global_primary_font') {
            fontPreview.innerHTML = `
                <h6 style="margin: 0 0 8px 0; color: var(--primary-color); font-family: ${fontValue};">Font Utama</h6>
                <p style="margin: 0; font-family: ${fontValue}; line-height: 1.4;">
                    Ini adalah contoh teks dengan font ${fontValue}. Lorem ipsum dolor sit amet consectetur.
                </p>
            `;
        } else if (fontName === 'global_heading_font') {
            fontPreview.innerHTML = `
                <h6 style="margin: 0 0 8px 0; color: var(--primary-color); font-family: ${fontValue};">Font Heading</h6>
                <h4 style="margin: 0; font-family: ${fontValue}; line-height: 1.2;">
                    Contoh Heading ${fontValue}
                </h4>
            `;
        }
        
        // Show preview
        setTimeout(() => {
            fontPreview.style.opacity = '1';
            fontPreview.style.transform = 'translateY(0)';
        }, 10);
        
        // Hide after 2 seconds
        setTimeout(() => {
            fontPreview.style.opacity = '0';
            fontPreview.style.transform = 'translateY(-20px)';
        }, 2000);
    }

    // Global Settings Validation
    function validateGlobalSettings() {
        const primaryColor = document.querySelector('input[name="global_primary_color"]')?.value;
        const primaryFont = document.querySelector('select[name="global_primary_font"]')?.value;
        const headingFont = document.querySelector('select[name="global_heading_font"]')?.value;
        
        // Validate color format
        if (primaryColor && !/^#[0-9A-Fa-f]{6}$/.test(primaryColor)) {
            showNotification('Warna utama tidak valid', 'error');
            return false;
        }
        
        // Validate font selections
        if (!primaryFont || !headingFont) {
            showNotification('Harap pilih font utama dan font heading', 'warning');
            return false;
        }
        
        return true;
    }

    // Show Notification Function
    function showNotification(message, type = 'info') {
        let notification = document.getElementById('globalNotification');
        if (!notification) {
            notification = document.createElement('div');
            notification.id = 'globalNotification';
            notification.style.cssText = `
                position: fixed;
                top: 20px;
                left: 50%;
                transform: translateX(-50%);
                padding: 12px 24px;
                border-radius: 8px;
                color: white;
                font-weight: 500;
                z-index: 9999;
                opacity: 0;
                transition: opacity 0.3s ease;
            `;
            document.body.appendChild(notification);
        }
        
        // Set notification style based on type
        const styles = {
            success: 'background: #10b981;',
            error: 'background: #ef4444;',
            warning: 'background: #f59e0b;',
            info: 'background: #3b82f6;'
        };
        
        notification.style.cssText += styles[type] || styles.info;
        notification.textContent = message;
        notification.style.opacity = '1';
        
        setTimeout(() => {
            notification.style.opacity = '0';
        }, 3000);
    }

    // Enhanced Form Submission for Global Settings
    const originalFormSubmit = form.addEventListener;
    form.addEventListener('submit', function(e) {
        if (!validateGlobalSettings()) {
            e.preventDefault();
            loadingOverlay.classList.remove('active');
            return false;
        }
        
        // Show success message before submission
        showNotification('Menyimpan pengaturan global...', 'info');
        loadingOverlay.classList.add('active');
    });

    // Initialize Global Settings on page load
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize global preview
        setTimeout(() => {
            updateGlobalPreview();
        }, 500);
        
        // Add smooth transitions to global settings elements
        document.querySelectorAll('#globalSettings .form-control, #globalSettings .form-select').forEach(input => {
            input.addEventListener('focus', function() {
                this.style.transform = 'translateY(-2px)';
                this.style.boxShadow = '0 4px 12px rgba(89, 85, 179, 0.15)';
            });
            
            input.addEventListener('blur', function() {
                this.style.transform = '';
                this.style.boxShadow = '';
            });
        });
        
        // Add click effect to color inputs
        document.querySelectorAll('#globalSettings .form-control-color').forEach(colorInput => {
            colorInput.addEventListener('click', function() {
                this.style.transform = 'scale(1.05)';
                setTimeout(() => {
                    this.style.transform = '';
                }, 150);
            });
        });
    });

    // Reset function enhancement for global settings
    const originalResetForm = window.resetForm;
    window.resetForm = function() {
        if (confirm('Apakah Anda yakin ingin mereset semua pengaturan?')) {
            form.reset();
            
            // Reset active states
            buttons.forEach(b => b.classList.remove('active'));
            settingsSections.forEach(section => {
                section.classList.remove('active');
            });
            
            hiddenInput.value = '';
            
            // Reset global preview
            const root = document.documentElement;
            root.style.removeProperty('--preview-primary-color');
            root.style.removeProperty('--preview-primary-font');
            root.style.removeProperty('--preview-heading-font');
            
            // Update previews
            updateFooterPreview();
            updateGlobalPreview();
            
            showNotification('Semua pengaturan telah direset', 'success');
        }
    };

    // Auto-save functionality for global settings (optional)
    let globalSettingsTimeout;
    function autoSaveGlobalSettings() {
        clearTimeout(globalSettingsTimeout);
        globalSettingsTimeout = setTimeout(() => {
            const globalData = {
                primary_color: document.querySelector('input[name="global_primary_color"]')?.value,
                primary_font: document.querySelector('select[name="global_primary_font"]')?.value,
                heading_font: document.querySelector('select[name="global_heading_font"]')?.value
            };
            
            // Store in localStorage for persistence
            localStorage.setItem('globalSettingsDraft', JSON.stringify(globalData));
            console.log('Global settings auto-saved:', globalData);
        }, 1000);
    }

    // Add auto-save to global settings inputs
    document.querySelectorAll('#globalSettings input, #globalSettings select').forEach(input => {
        input.addEventListener('input', autoSaveGlobalSettings);
        input.addEventListener('change', autoSaveGlobalSettings);
    });

    // Load saved settings on page load
    document.addEventListener('DOMContentLoaded', function() {
        const savedSettings = localStorage.getItem('globalSettingsDraft');
        if (savedSettings) {
            const settings = JSON.parse(savedSettings);
            if (settings.primary_color) {
                const colorInput = document.querySelector('input[name="global_primary_color"]');
                if (colorInput) colorInput.value = settings.primary_color;
            }
            if (settings.primary_font) {
                const fontInput = document.querySelector('select[name="global_primary_font"]');
                if (fontInput) fontInput.value = settings.primary_font;
            }
            if (settings.heading_font) {
                const headingInput = document.querySelector('select[name="global_heading_font"]');
                if (headingInput) headingInput.value = settings.heading_font;
            }
            
            // Update preview with loaded settings
            setTimeout(() => {
                updateGlobalPreview();
            }, 100);
        }
    });
</script>

</body>
</html>