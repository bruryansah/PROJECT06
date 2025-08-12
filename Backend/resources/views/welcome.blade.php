<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beranda | Tharnsies</title>
    <link rel="icon"
        href="https://smktamansiswa2jakarta.sch.id/wp-content/uploads/2022/03/LOGO-TAMSIS-MATERIAL-DESIGN.png"
        sizes="any">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            background: #f5f5f5;
            font-family: 'Segoe UI', Arial, sans-serif;
        }

        .welcome-page {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .navbar {
            display: flex;
            justify-content: space-between;

            align-items: center;
            background: #fff;
            padding: 12px 24px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.08);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .navbar-left {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .logo {
            width: 40px;
            height: 40px;
            object-fit: contain;
        }

        .brand {
            display: flex;
            flex-direction: column;
        }

        .brand-title {
            font-weight: 600;
            font-size: 18px;
            color: #111827;
        }

        .brand-subtitle {
            font-size: 14px;
            color: #6b7280;
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 130px;
        }

        .nav-links li {
            color: #6b7280;
            font-size: 16px;
            cursor: pointer;
            font-weight: 500;
            transition: color 0.2s;
        }

        .nav-links li:hover,
        .nav-links li.active {
            color: #111827;
            font-weight: 600;
        }

        .auth-buttons {
            display: flex;
            gap: 12px;
        }

        .btn-login {
            padding: 8px 16px;
            border: 2px solid #2563eb;
            background: transparent;
            color: #2563eb;
            border-radius: 6px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.2s;
            text-decoration: none;
        }

        .btn-login:hover {
            background: #eff6ff;
        }

        .btn-register {
            padding: 8px 16px;
            background: #2563eb;
            color: #fff;
            border: 2px solid #2563eb;
            border-radius: 6px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.2s;
        }

        .btn-register:hover {
            background: #1d4ed8;
            border-color: #1d4ed8;
        }

        .main-container {
            flex: 1;
            max-width: 1200px;
            margin: 0 auto;
            width: 100%;
            padding: 0 24px;
        }

        .breadcrumb {
            font-size: 14px;
            margin: 24px 0 8px 0;
            color: #6b7280;
        }

        .page-title {
            margin: 0 0 24px 0;
            font-size: 32px;
            font-weight: 700;
            color: #111827;
        }

        .content {
            display: flex;
            flex-direction: column;
            gap: 24px;
        }

        .banner {
            height: 250px;
            background: #d1d5db;
            border-radius: 12px;
            width: 100%;
        }

        .content-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 24px;
        }

        .left-content .big-box {
            height: 200px;
            background: #d1d5db;
            border-radius: 12px;
        }

        .right-sidebar {
            display: flex;
            flex-direction: column;
            gap: 24px;
        }

        .small-box {
            height: 88px;
            background: #d1d5db;
            border-radius: 12px;
        }

        .footer {
            margin-top: 64px;
            background: #fff;
            border-top: 1px solid #e5e7eb;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 24px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .footer-left {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .footer-logo {
            width: 32px;
            height: 32px;
            object-fit: contain;
        }

        .footer-text {
            font-size: 14px;
            color: #6b7280;
        }

        .footer-right {
            display: flex;
            gap: 16px;
        }

        .social-link {
            color: #6b7280;
            transition: color 0.2s;
            text-decoration: none;
        }

        .social-link:hover {
            color: #111827;
        }

        .social-icon {
            width: 20px;
            height: 20px;
        }

        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                gap: 16px;
                padding: 16px;
            }

            .nav-links {
                gap: 16px;
            }

            .content-grid {
                grid-template-columns: 1fr;
            }

            .footer-content {
                flex-direction: column;
                gap: 16px;
                text-align: center;
            }
        }
    </style>
</head>

<body>
    <div class="welcome-page">
        <!-- Navbar -->
        <nav class="navbar">
            <div class="navbar-left">
                <img src="https://smktamansiswa2jakarta.sch.id/wp-content/uploads/2022/03/LOGO-TAMSIS-MATERIAL-DESIGN.png"
                    alt="Logo" class="logo" />
                <div class="brand">
                    <span class="brand-title">Check</span>
                    <span class="brand-subtitle">Tharnsies</span>
                </div>
            </div>
            <ul class="nav-links">
                <li class="active">Beranda</li>
                <li>Tentang</li>
                <li>Fitur</li>
                <li>Kontak</li>
            </ul>
            <div class="auth-buttons">
                <a href="{{ route('login') }}" class="btn-login">Login</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn-register" style="text-decoration:none;">Daftar</a>
                @endif
            </div>
        </nav>

        <!-- Main Container -->
        <div class="main-container">
            <div class="breadcrumb">Beranda / Beranda</div>
            <h1 class="page-title">Beranda</h1>
            <div class="content">
                <div class="banner"></div>
                <div class="content-grid">
                    <div class="left-content">
                        <div class="big-box"></div>
                    </div>
                    <div class="right-sidebar">
                        <div class="small-box"></div>
                        <div class="small-box"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="footer">
            <div class="footer-content">
                <div class="footer-left">
                    <img src="https://smktamansiswa2jakarta.sch.id/wp-content/uploads/2022/03/LOGO-TAMSIS-MATERIAL-DESIGN.png"
                        alt="Logo" class="footer-logo" />
                    <span class="footer-text">© SMK TAMANSISWA 2 JAKARTA | RPL</span>
                </div>
                <div class="footer-right">
                    <a href="#" class="social-link">
                        <svg class="social-icon" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                        </svg>
                    </a>
                    <a href="#" class="social-link">
                        <svg class="social-icon" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-
