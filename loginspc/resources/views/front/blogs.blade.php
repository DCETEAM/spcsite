<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>spc | Premium Plastic Containers</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap"
        rel="stylesheet" />
    <!-- Header -->
    <title>The Art and Science of Manufacturing Quality, Durable Plastic Buckets | [SPC] Blog</title>

    <meta name="description"
        content="Discover the intricate injection moulding process used to manufacture high-quality, durable plastic buckets and pails for food, chemical, and industrial applications.">

    <link rel="canonical" href="[Full URL of this specific blog post]">

    <meta property="og:title" content="Manufacturing Quality Plastic Buckets (Injection Moulding Explained)">
    <meta property="og:description"
        content="Discover the intricate process behind creating durable plastic pails for industrial use.">
    <meta property="og:image" content="{{ asset('assets/img/banner05.png') }}">
    <meta property="og:type" content="article">
    <meta property="article:published_time" content="2021-11-29T00:00:00+00:00">
    <meta property="article:author" content="Roxce">

    <meta name="description"
        content="Buy the SPC P4 - 4 Litres Premium Paint Bucket. Durable, compact, and perfect for storing smaller liquid or powdered products. Ideal for home and professional use.">
    <meta name="keywords"
        content="SPC P4 Paint Bucket, 4 Litre Plastic Container, Premium Paint Bucket, Durable Plastic Storage, SPC Products">

    <!-- Open Graph -->
    <meta property="og:title" content="P4 - 4 Litres Premium Paint Bucket | SPC Paints">
    <meta property="og:description"
        content="Compact and durable 4-litre paint bucket made from premium plastic. Perfect for home and industrial use.">
    <meta property="og:image" content="{{ asset('assets/img/p4.png') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="product">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="P4 - 4 Litres Premium Paint Bucket | SPC Paints">
    <meta name="twitter:description"
        content="Compact and durable 4-litre paint bucket made from premium plastic. Perfect for home and industrial use.">
    <meta name="twitter:image" content="{{ asset('assets/img/p4.png') }}">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">

    <style>
        :root {
            /* Brand Colors */
            --primary: #12225C;
            /* Bright Brand Blue */
            --primary-dark: #0B5ED7;
            /* Deeper Blue for hover states */
            --secondary: #6610F2;
            /* Violet Accent */
            --accent: #45aae3;
            /* Light Blue highlight tone */

            /* Backgrounds */
            --light: #F8FAFC;
            /* Soft white background */
            --dark: #12225C;
            /* Deep navy background */
            --card-bg: #1A2A6C;
            /* Slightly lighter navy for cards */

            /* Text Colors */
            --text-primary: #FFFFFF;
            /* White text for dark backgrounds */
            --text-secondary: #C9D4F3;
            /* Muted light text */
            --text-dark: #1E1E1E;
            /* For use on light backgrounds */

            /* Status Colors */
            /* --success: #00C897; */
            /* Green accent tone */
            --warning: #FFC107;
            /* Yellow accent */
            --error: #DC3545;
            /* Red accent */

            /* Borders and Shadows */
            --border-color: rgba(255, 255, 255, 0.2);
            --shadow-color: rgba(0, 0, 0, 0.15);

            /* Transition */
            --transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }


        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Playfair Display", serif;
            line-height: 1.6;
            color: var(--dark);
            background-color: var(--light);
            overflow-x: hidden;
        }

        h1,
        h2,
        h3,
        h4,
        h5 {
            font-family: "Playfair Display", serif;
            font-weight: 600;
            line-height: 1.2;
        }

        .container {
            /* width: 90%; */
            max-width: 1400px;
            margin: 0 auto;
            /* padding: 0 20px; */
        }

        .qrcode {
            width: 200px;
            height: 200px;
        }

        a {
            text-decoration: none
        }

        /* Header & Navigation */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            padding: 10px 0;
            background: #fff;
            /* black with 60% opacity */
            backdrop-filter: blur(2px);
            /* optional: adds a glassy blur effect */
            z-index: 1000;
            transition: var(--transition);
        }

        header.scrolled {
            background-color: white;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            padding: px 0;
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-family: "Playfair Display", serif;

            font-weight: 900;
            color: rgb(19, 16, 16);
            text-decoration: none;
            display: flex;
            align-items: center;
        }

        .logo span {
            color: var(--accent);
        }

        .nav-menu {
            display: flex;
            margin-top: 0.5rem;
            list-style: none;
        }

        .nav-item {
            margin-left: 30px;
        }

        .nav-link {
            text-decoration: none;
            color: rgb(21, 18, 18);
            font-weight: 900;
            font-size: 18px;
            position: relative;
            padding: 5px 0;
            transition: var(--transition);
        }

        .nav-link:after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            color: white;
            background-color: var(--accent);
            transition: var(--transition);
        }

        .nav-link:hover {
            color: var(--accent);
        }

        .nav-link:hover:after {
            width: 100%;
        }

        .nav-menu .active {
            color: var(--accent);
            font-weight: 900;
        }

        .hamburger {
            display: none;
            cursor: pointer;
            font-size: 24px;
            color: #0f0707;
        }

        .section-title {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 60px;
            position: relative;
            opacity: 0;
            transform: translateY(30px);
        }

        .section-title:after {
            content: "";
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background-color: var(--accent);
        }

        /* === Blog Section === */
        .blog-section {
            padding: 80px;
            background: #f0f9fd;
            margin-top: 50px;
        }

        .blog-content {
            display: flex;
            gap: 40px;
        }

        .blog-post {
            flex: 2;
        }

        .blog-img img {
            border-radius: 8px;
            width: 100%;
            height: auto;
        }

        .blog-meta {
            margin: 15px 0;
            font-size: 14px;
            color: #777;
        }

        .blog-meta span {
            margin-right: 15px;
        }

        .blog-title {
            font-size: 22px;
            margin-bottom: 10px;
            font-weight: 700;
            color: #12225C;
        }

        .blog-excerpt {
            color: #555;
            margin-bottom: 20px;
        }

        .read-more {
            display: inline-block;
            background: #12225C;
            color: #fff;
            padding: 10px 20px;
            border-radius: 4px;
            font-weight: 600;
            transition: 0.3s;
        }

        .read-more:hover {
            background: #007bff;
        }

        /* === Sidebar === */
        .blog-sidebar {
            flex: 1;
        }

        .sidebar-widget {
            margin-bottom: 30px;
        }

        .sidebar-widget h4 {
            font-size: 18px;
            margin-bottom: 15px;
            font-weight: 700;
            color: #12225C;
        }

        /* Search Box */
        .search-widget form {
            display: flex;
            border: 1px solid #ddd;
            border-radius: 5px;
            overflow: hidden;
        }

        .search-widget input {
            flex: 1;
            padding: 10px;
            border: none;
            outline: none;
        }

        .search-widget button {
            background: #12225C;
            border: none;
            color: #fff;
            padding: 0 15px;
            cursor: pointer;
        }

        /* Recent Posts */
        .recent-posts ul {
            list-style: none;
        }

        .recent-posts li {
            display: flex;
            gap: 10px;
            margin-bottom: 15px;
        }

        .recent-posts img {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 5px;
        }

        .recent-posts a {
            font-weight: 600;
            color: #333;
        }

        .recent-posts a:hover {
            color: #12225C;
        }

        .recent-posts span {
            font-size: 13px;
            color: #999;
        }

        /* Categories */
        .categories ul {
            list-style: none;
        }

        .categories li {
            margin-bottom: 10px;
        }

        .categories a {
            color: #333;
        }

        .categories a:hover {
            color: #12225C;
        }

        /* Footer */
        footer {
            background-color: #0d1f22;
            color: white;
            padding: 30px 20px 20px 30px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
            margin-bottom: 40px;
        }

        .footer-col h4 {
            font-size: 1.2rem;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-col h4:after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 2px;
            background-color: var(--accent);
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a {
            color: #bbb;
            text-decoration: none;
            transition: var(--transition);
        }

        .footer-links a:hover {
            color: var(--accent);
            padding-left: 5px;
        }

        .social-links {
            display: flex;
            margin-top: 20px;
        }

        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            margin-right: 10px;
            color: white;
            text-decoration: none;
            transition: var(--transition);
        }

        .social-links a:hover {
            background-color: var(--accent);
            transform: translateY(-3px);
        }

        .copyright {
            text-align: center;
            padding-top: 10px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: #bbb;
            font-size: 0.9rem;
        }

        /* Animations */
        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
            }
        }

        @keyframes float {

            0%,
            100% {
                transform: rotate(45deg) translateY(0);
            }

            50% {
                transform: rotate(45deg) translateY(-20px);
            }
        }

        @media (max-width: 576px) {
            .products-grid {
                grid-template-columns: 1fr;
            }

            .footer-content {
                grid-template-columns: 1fr;
            }

            .hero h1 {
                font-size: 2rem;
            }
        }


        /* === Responsive === */
        @media (max-width: 768px) {
            .blog-content {
                flex-direction: column;
            }

            .navbar {
                flex-wrap: wrap;
            }

            .hamburger {
                display: flex;
            }

            .social-icons {
                margin-top: 10px;
            }

            .footer-container {
                grid-template-columns: 1fr;
            }

            .topbar-left {
                flex-direction: column;
                text-align: center;
            }
        }

        @media (max-width: 768px) {
            .hamburger {
                display: block;
            }

            .logo {
                font-size: 12px;
            }

            .nav-menu {
                position: fixed;
                top: 80px;
                right: -100%;
                flex-direction: column;
                background-color: rgb(11, 7, 7);
                width: 80%;
                height: calc(100vh - 80px);
                box-shadow: -5px 0 15px rgba(0, 0, 0, 0.1);
                transition: var(--transition);
                padding: 40px 0;
            }

            .nav-menu.active {
                right: 0;
            }

            .nav-item {
                margin: 0;
                text-align: center;
                padding: 15px 0;
            }

            .hero {
                flex-direction: column;
                height: 40vh;
                /* height: auto; */
                /* padding: 150px 0 80px; */
            }

            .hero .container {
                height: 40%;
            }

            header {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                z-index: 1000;
                padding: 15px 0;
                background: white;
                /* black with 60% opacity */
                backdrop-filter: blur(5px);
                /* optional: adds a glassy blur effect */
                z-index: 1000;
                transition: var(--transition);
            }

            .hero-content {
                width: 100%;
                padding-right: 0;
                text-align: center;
                /* margin-bottom: 50px; */
            }

            .hero h1 {
                font-size: 2.5rem;
            }




            .about-content,
            .contact-content {
                grid-template-columns: 1fr;
            }

            .about-text,
            .about-image,
            .contact-info,
            .contact-form {
                transform: none;
            }
        }

        @media (max-width: 576px) {
            .products-grid {
                grid-template-columns: 1fr;
            }

            .footer-content {
                grid-template-columns: 1fr;
            }

            .hero h1 {
                font-size: 2rem;
            }
        }

        @media (max-width: 480px) {
            .section-title {
                font-size: 2rem;
            }

            .nav-link {
                text-decoration: none;
                color: rgb(241, 239, 239);
                font-weight: 900;
                position: relative;
                font-size: 18px;
                padding: 5px 0;
                transition: var(--transition);
            }

            .logo {
                font-size: 12px;
            }

            .blog-section {
                padding: 40px;
            }
        }

        /* Sidebar Recent Insights */
        .sidebar-widget {
            background: #fff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.06);
        }

        .sidebar-widget h4 {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 18px;
            border-left: 4px solid #007bff;
            padding-left: 8px;
        }

        /* 2 Column Layout */
        .blog-layout {
            display: grid;
            grid-template-columns: 3fr 1.2fr;
            gap: 40px;
            align-items: start;
        }

        /* Blog Grid (3 per row) */
        .blog-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        /* Blog Card Style */
        .blog-post {
            background: #fff;
            padding: 15px;
            border-radius: 12px;
            border: 1px solid #e6e6e6;
            transition: 0.3s ease;
        }

        .blog-post:hover {
            transform: translateY(-4px);
        }

        /* Blog Image */
        .blog-img img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            border-radius: 10px;
        }

        /* Meta */
        .blog-meta {
            display: flex;
            gap: 15px;
            font-size: 14px;
            margin: 10px 0;
            color: #666;
        }

        .blog-meta i {
            margin-right: 5px;
            color: #007bff;
        }

        /* SIDEBAR */
        .blog-sidebar {
            position: sticky;
            top: 20px;
        }

        /* Recent Card */
        .recent-card {
            display: flex;
            gap: 10px;
            margin-bottom: 12px;
        }

        .recent-card-img img {
            width: 70px;
            height: 70px;
            object-fit: cover;
            border-radius: 8px;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header id="header">
        <div class="container nav-container">
            <div style="display:flex;align-items:center;gap:8px;">
                <img src="{{ asset('assets/img/item2.png') }}" style="width:40px;height:40px;display:block;"
                    alt="Logo" class="logo-image">
                <a href="#" class="logo" style="margin:0;">Senthil Plastic Containers<span>&nbsp;Private
                        Limited</span></a>
            </div>
            <div class="hamburger" id="hamburger">
                <i class="fas fa-bars"></i>
            </div>
            <ul class="nav-menu" id="nav-menu">
                <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                <li class="nav-item">
                    <a href="{{ url('/') }}#about" class="nav-link">About</a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('products.index') }}" class="nav-link">Products</a>
                </li>
                <li class="nav-item">

                    <a href="{{ url('/') }}#why-us" class="nav-link">Why choose us</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('blogs.list') }}" class="nav-link active">Blog</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('contact') }}" class="nav-link">Contact</a>
                </li>
            </ul>
        </div>
    </header>
    <section class="blog-section">
        <div class="container">

            <!-- TWO COLUMN LAYOUT -->
            <div class="blog-layout">

                <!-- LEFT SIDE: BLOG CARDS -->
                <div>
                    <div class="blog-grid">
                        @if ($blogs->count() == 0)
                            <div class="no-blogs-message">
                                <p>No blogs found.</p>
                            </div>
                        @else
                            @foreach ($blogs as $blog)
                                <article class="blog-post">

                                    <div class="blog-img">
                                        <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}">
                                    </div>

                                    <div class="blog-meta">
                                        <span>
                                            <i class="far fa-calendar"></i>
                                            {{ \Carbon\Carbon::parse($blog->publish_date)->format('F d, Y') }}
                                        </span>
                                        <span>
                                            <i class="far fa-user"></i> {{ $blog->publisher ?? 'Admin' }}
                                        </span>
                                    </div>

                                    <h1 class="blog-title">{{ $blog->title }}</h1>

                                    <p class="blog-excerpt">{{ Str::limit($blog->short_description, 200) }}</p>

                                    <a href="{{ route('blogs.details', $blog->slug) }}" class="read-more">Continue
                                        Reading</a>
                                </article>
                               @endforeach
    @endif
                    </div>

                    <div class="pagination-wrapper">
                        {{ $blogs->links('pagination::bootstrap-5') }}
                    </div>
                </div>

                <!-- RIGHT SIDE: SIDEBAR -->
                <aside class="blog-sidebar">

                    <div class="sidebar-widget recent-posts">
                        <h4>Recent Insights</h4>

                        @foreach ($recent as $r)
                            <div class="recent-card">
                                <div class="recent-card-img">
                                    <img src="{{ asset('storage/' . $r->image) }}" alt="{{ $r->title }}">
                                </div>
                                <div class="recent-card-body">
                                    <a href="{{ route('blogs.details', $r->slug) }}" class="recent-title">
                                        {{ $r->title }}
                                    </a>
                                    <p class="recent-date">
                                        {{ \Carbon\Carbon::parse($r->publish_date)->format('F d, Y') }}
                                    </p>
                                </div>
                            </div>
                        @endforeach

                    </div>

                </aside>

            </div>

        </div>
    </section>



    <!-- Footer -->
    @include('layouts.footer')

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            if (window.location.hash === "#about") {
                setTimeout(() => {
                    const aboutSection = document.querySelector("#about");
                    if (aboutSection) {
                        aboutSection.scrollIntoView({
                            behavior: "smooth",
                            block: "start"
                        });
                    }
                }, 150);
            }
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            if (window.location.hash === "#why-us") {

                // wait for page content to finish rendering
                setTimeout(() => {
                    const target = document.querySelector("#why-us");
                    if (target) {
                        target.scrollIntoView({
                            behavior: "smooth",
                            block: "start"
                        });
                    }
                }, 150); // increase to 250 if your page loads slowly
            }
        });
    </script>


    <script>
        // Mobile Menu Toggle
        const hamburger = document.getElementById("hamburger");
        const navMenu = document.getElementById("nav-menu");

        hamburger.addEventListener("click", function() {
            navMenu.classList.toggle("active");
            hamburger.innerHTML = navMenu.classList.contains("active") ?
                '<i class="fas fa-times"></i>' :
                '<i class="fas fa-bars"></i>';
        });

        // Close mobile menu when clicking on a link
        document.querySelectorAll(".nav-link").forEach((link) => {
            link.addEventListener("click", () => {
                navMenu.classList.remove("active");
                hamburger.innerHTML = '<i class="fas fa-bars"></i>';
            });
        });
    </script>

</body>

</html>
