<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta name="google-site-verification" content="YOUR_VERIFICATION_CODE" />
    <meta name="description" content="Browse our wide range of high-quality plastic containers, buckets, and pails. Senthil Plastic Containers (SPC) provides durable packaging for various industrial applications.">
    <meta name="keywords" content="SPC products, plastic container catalog, industrial pails, plastic buckets Tamil Nadu, bulk plastic containers, packaging solutions">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta name="author" content="Senthil Plastic Containers">
    <meta name="language" content="English">
    <meta name="geo.region" content="IN-TN">
    <meta name="geo.placename" content="Virudhunagar, Tamil Nadu">
    <meta name="geo.position" content="9.5851;77.9570">
    <meta name="ICBM" content="9.5851, 77.9570">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Our Products | Senthil Plastic Containers (SPC)">
    <meta property="og:description" content="Explore our collection of premium plastic containers designed for durability and industrial standards. Find the perfect packaging for your business.">
    <meta property="og:image" content="{{ asset('assets/img/item2.png') }}">
    <meta property="og:url" content="{{ url()->current() }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Senthil Plastic Containers (SPC) | Plastic Container Manufacturer">
    <meta name="twitter:description" content="High-quality plastic containers and packaging solutions manufactured by Senthil Plastic Containers, Virudhunagar, Tamil Nadu.">
    <meta name="twitter:image" content="{{ asset('assets/img/item2.png') }}">

    @php
        $activeCategory = isset($categories, $activeCategoryId)
            ? $categories->firstWhere('maincategory_id', $activeCategoryId)
            : null;

        $activeSubcategoryModel = $activeSubcategory ?? null;
        if (!$activeSubcategoryModel && isset($subcategories, $activeSubcategoryId)) {
            $activeSubcategoryModel = $subcategories->firstWhere('subcategory_id', $activeSubcategoryId);
        }

        $productsPageTitlePartRaw = $activeSubcategoryModel?->name
            ?: ((isset($category) && !empty($category?->slug)) ? $category->slug : null)
            ?: ((isset($category) && !empty($category?->name)) ? $category->name : null)
            ?: $activeCategory?->name
            ?: 'Products';
        $productsPageTitlePart = \Illuminate\Support\Str::title(str_replace(['-', '_'], ' ', $productsPageTitlePartRaw));
    @endphp
    <title>{{ $productsPageTitlePart }} | Senthil Plastic Containers Private Limited</title>
    <meta name="description" content="Browse {{ $productsPageTitlePart }} from Senthil Plastic Containers Private Limited.">
    <link rel="canonical" href="{{ request()->url() }}">
    
    <!-- Preconnect to external domains for faster loading -->
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-HJ..." crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap"
        rel="stylesheet" />
    <style>
        :root {
            /* Brand Colors */
            --primary: #0D6EFD;
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
            --dark: #495057;
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
            --success: #00C897;
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
            font-weight: 700;
            line-height: 1.2;
            font-size: 23px;
        }

        .container {
            /* width: 90%; */
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .qrcode {
            width: 150px;
            height: 150px;
        }

        /* Header & Navigation */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            padding: 15px 0;
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
            padding: 5px 0;
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
            color: rgb(7, 5, 5);
            font-weight: 900;
            position: relative;
            font-size: 18px;
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
            color: #000000;
        }

        /* Hero Section */
        .hero {
            position: relative;
            width: 100%;
            height: 75vh;
            overflow: hidden;
        }

        .hero-slider {
            position: relative;
            width: 100%;
            height: 100%;
        }

        .hero-slide {
            position: absolute;
            top: 0;
            left: 100%;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            opacity: 0;
            transition: all 0.8s ease-in-out;
            display: flex;
            align-items: center;
        }

        .hero-slide.active {
            left: 0;
            opacity: 1;
            z-index: 1;
        }

        .hero .container {
            max-width: 1200px;
            height: 70%;
            margin: 0 auto;
            padding: 0 20px;
            z-index: 2;
        }

        .hero-content {
            color: #fff;
            max-width: 600px;
            animation: fadeInUp 1s ease forwards;
        }

        .hero-content h1 {
            font-size: 3rem;
            text-align: center;
            margin-bottom: 1rem;
        }

        .hero-content p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
        }

        .btn {
            display: inline-block;
            padding: 12px 24px;
            margin-right: 10px;
            background: #00a86b;
            color: #fff;
            border-radius: 6px;
            text-decoration: none;
            transition: 0.3s;
        }

        .btn:hover {
            background: #008f59;
        }

        .btn-outline {
            background: transparent;
            border: 2px solid #fff;
        }

        .btn-outline:hover {
            background: #fff;
            color: #00a86b;
        }

        /* Slider Dots */
        .hero-slider-nav {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 8px;
        }

        .hero-dot {
            width: 12px;
            height: 12px;
            background: rgba(255, 255, 255, 0.6);
            border-radius: 50%;
            cursor: pointer;
            transition: background 0.3s;
        }

        .hero-dot.active {
            background: #00a86b;
        }

        /* Hero Visual (side image & shape) */
        .hero-visual {
            position: absolute;
            right: 5%;
            bottom: 10%;
            text-align: center;
        }

        /* Arrows */
        .hero-prev,
        .hero-next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.5);
            color: #fff;
            border: none;
            padding: 12px 18px;
            cursor: pointer;
            font-size: 24px;
            border-radius: 50%;
            z-index: 2;
        }

        .hero-prev {
            left: 20px;
        }

        .hero-next {
            right: 20px;
        }

        .hero-shape {
            width: 250px;
            height: 250px;
            background: rgba(0, 168, 107, 0.15);
            border-radius: 50%;
            position: absolute;
            top: -20px;
            left: -20px;
            z-index: 0;
        }

        .hero-product {
            position: relative;
            width: 220px;
            border-radius: 20px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
            z-index: 1;
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                transform: translateY(20px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        /* About Section */
        .about {
            padding: 100px 0;
            background-color: white;
        }

        .section-title {
            text-align: center;
            font-size: 2rem;
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

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }



        .nav-menu {
            display: flex;
            margin-top: 0.5rem;
            list-style: none;
        }

        .nav-item {
            margin-left: 30px;
        }



        .hamburger {
            display: none;
            cursor: pointer;
            font-size: 20px;
            color: #000000;
        }


        .hero-slider {
            position: relative;
            width: 100%;
            height: 100%;
        }

        .hero-slide {
            position: absolute;
            top: 0;
            left: 100%;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            opacity: 0;
            transition: all 0.8s ease-in-out;
            display: flex;
            align-items: center;
        }

        .hero-slide.active {
            left: 0;
            opacity: 1;
            z-index: 1;
        }

        .hero .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            z-index: 2;
        }

        .hero-content {
            color: #fff;
            max-width: 600px;
            animation: fadeInUp 1s ease forwards;
        }

        .hero-content h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .hero-content p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
        }

        .btn {
            display: inline-block;
            padding: 12px 24px;
            margin-right: 10px;
            background: #00a86b;
            color: #fff;
            border-radius: 6px;
            text-decoration: none;
            transition: 0.3s;
        }

        .btn:hover {
            background: #008f59;
        }

        .btn-outline {
            background: transparent;
            border: 2px solid #fff;
        }

        .btn-outline:hover {
            background: #fff;
            color: #00a86b;
        }

        /* Slider Dots */
        .hero-slider-nav {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 8px;
        }

        .hero-dot {
            width: 12px;
            height: 12px;
            background: rgba(255, 255, 255, 0.6);
            border-radius: 50%;
            cursor: pointer;
            transition: background 0.3s;
        }

        .hero-dot.active {
            background: #00a86b;
        }

        /* Hero Visual (side image & shape) */
        .hero-visual {
            position: absolute;
            right: 5%;
            bottom: 10%;
            text-align: center;
        }

        .hero-shape {
            width: 250px;
            height: 250px;
            background: rgba(0, 168, 107, 0.15);
            border-radius: 50%;
            position: absolute;
            top: -20px;
            left: -20px;
            z-index: 0;
        }

        .hero-product {
            position: relative;
            width: 220px;
            border-radius: 20px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
            z-index: 1;
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                transform: translateY(20px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }



        body {

            background: #fff;
            font-family: "Playfair Display", serif;
            font-weight: 400;
            font-style: regular;
            margin: 0;
            padding: 0;

        }

        .categories {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin: 40px 0;
            flex-wrap: wrap;
        }

        .categories .cat-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-decoration: none;
            color: #333;
            font-weight: 500;
            transition: 0.3s ease;
        }

        .categories .cat-item .circle {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: 0.3s ease;
        }

        .categories .cat-item .circle img {
            width: 100%;
            height: 100%;
            /* object-fit: contain; */
        }

        .categories .cat-item span {
            margin-top: 10px;
            font-weight: 600;
            font-size: 16px;
        }

        .categories .cat-item.active .circle,
        .categories .cat-item:hover .circle {
            background: var(--accent);
            color: #fff;
            transform: scale(1.05);
        }

        .categories .cat-item.active span,
        .categories .cat-item:hover span {
            color: var(--accent);
        }

        .cat-item .circle {
            position: relative;
            width: 120px;
            /* adjust size */
            height: 120px;
            border-radius: 50%;
            overflow: hidden;
        }

        .cat-item img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            /* object-fit: contain; */
            /* transition: opacity 0.4s ease; */
        }

        /* Default: show normal image */
        .cat-item .img-default {
            opacity: 1;
            z-index: 1;
        }

        /* Hide hover image */
        .cat-item .img-hover {
            opacity: 0;
            z-index: 2;
        }

        /* On hover: fade out normal & fade in hover image */
        .cat-item:hover .img-default {
            opacity: 0;
        }

        .cat-item:hover .img-hover {
            opacity: 1;
        }


        .products {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 20px;
            padding: 30px 50px;
        }



        /* 📱 Mobile */
        @media (max-width: 480px) {
            .categories {
                /* height: 50px;
            gap: 6px; */
                /* width: 90%; */
                /* justify-content: flex-start; */
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

            .nav-menu .active {
                color: var(--accent);
                font-weight: 900;
            }

            .logo {
                font-size: 12px;
            }

            .categories a {
                font-size: 10px;

                padding: 6px 6px;
            }

            .categories a:first-child {
                min-width: 80px;
                /* height: 50px; */
                font-size: 10px;
            }

            .categories .cat-item .circle {
                width: 120px;
                height: 120px;
                border-radius: 50%;
                background: #f5f5f5;
                display: flex;
                justify-content: center;
                align-items: center;
                /* overflow: hidden; */
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                transition: 0.3s ease;
            }

        }

        .animate-on-scroll {
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 0.8s, transform 0.8s;
        }

        .animate-on-scroll.in-view {
            opacity: 1;
            transform: translateY(0);
            animation: none;
            /* disables keyframes if you use transition */
        }

        /* Hero Section */
        .hero {
            position: relative;
            height: 90vh;
            background: url("{{ asset('assets/img/curd.png') }}") no-repeat center/cover;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: #fff;
            margin-bottom: 30px;
        }

        .hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background: white;
        }

        .hero-content {
            position: relative;
            z-index: 1;
            max-width: 800px;
        }

        .hero-content h4 {
            font-size: 16px;
            font-weight: normal;
            margin-bottom: 10px;
            letter-spacing: 2px;
        }

        .hero-content h1 {
            font-size: 60px;
            font-weight: bold;
            margin: 0 0 20px;
            line-height: 1.2;
        }

        .hero-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
        }

        .btn {
            padding: 14px 28px;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            text-decoration: none;
            display: inline-block;
            transition: 0.3s;
        }

        .btn-green {
            background: #00b894;
            color: #fff;
        }

        .btn-green:hover {
            background: #019170;
        }

        .btn-orange {
            background: #167ac6;
            color: #fff;
        }

        .btn-orange:hover {
            background: #c74416;
        }

        @media (max-width: 480px) {
            .btn {
                padding: 10px 18px;
                font-size: 14px;
            }

            .hero-content h1 {
                font-size: 30px;
                font-weight: bold;
                margin: 0 0 20px;
                line-height: 1.2;
            }

            .hero {
                position: relative;
                height: 50vh;
                background: url("{{ asset('assets/img/curd.png') }}") no-repeat center/cover;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                text-align: center;
                color: #fff;
                margin-bottom: 30px;
            }
        }

        /* General Section */
        .product-section {
            /* padding: 40px 20px 40px 20px; */
            text-align: center;
            background: #f8f9fb;
        }

        /* Product Grid */
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 30px;
        }

        /* Product Card */
        .product-card {
            position: relative;
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.06);
            overflow: hidden;
            transition: all 0.3s ease;
            animation: fadeInUp 0.8s ease both;
        }

        .product-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 14px 32px rgba(0, 0, 0, 0.15);
        }

        /* Discount Badge */
        .badge {
            position: absolute;
            top: 35px;
            left: 25px;
            background: #45aae3;
            color: white;
            font-size: 0.8rem;
            font-weight: 700;
            padding: 6px 12px;
            border-radius: 6px;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.15);
        }

        /* Wishlist */
        .wishlist {
            position: absolute;
            top: 35px;
            right: 25px;
            font-size: 22px;
            color: #999;
            height: 40px;
            width: 40px;
            border-radius: 50%;
            background: #fff;
            border: 1px solid #eee;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: 0.3s;
        }

        .wishlist:hover {
            background: #e91e63;
            color: #fff;
        }

        /* Product Image */
        .product-image {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .product-image img {
            max-width: 100%;

            background-color: #f8f9fa;
            border-radius: 20px;
            object-fit: contain;
            transition: transform 0.4s ease;
        }

        .product-card:hover .product-image img {
            transform: scale(1.08);
        }

        /* Product Info */
        .product-info {
            padding: 0px 20px 20px 20px;
        }

        .product-info h3 {
            font-size: 1.2rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 8px;
        }

        .rating {
            color: #ff9800;
            font-size: 1rem;
            margin-bottom: 10px;
        }

        .price {
            font-size: 1.1rem;
            font-weight: 700;
            color: #444;
            margin-bottom: 15px;
        }

        .old-price {
            text-decoration: line-through;
            color: #888;
            margin-right: 8px;
        }

        /* Buttons */
        .btn-group {
            display: flex;
            gap: 10px;
            justify-content: center;
        }

        .view-btn,
        .cart-btn {
            flex: 1;
            border: none;
            padding: 10px 15px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
        }

        .view-btn {
            background: #6c757d;

            color: #fff;
        }

        .view-btn:hover {
            background: #316185;
            transform: translateY(-2px);
        }

        .cart-btn {
            background: #333;
            color: #fff;
        }

        .cart-btn:hover {
            background: #000;
            transform: translateY(-2px);
        }

        /* Animation */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
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

        /* Responsive Design */
        @media (max-width: 992px) {
            .hero-content {
                width: 60%;
            }

            .hero-visual {
                width: 50%;
            }

            .hero-shape {
                width: 450px;
                height: 450px;
            }

            .hero-product {
                width: 300px;
            }

            .footer-content {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .hamburger {
                display: block;
            }

            .nav-menu {
                position: fixed;
                top: 80px;
                right: -100%;
                flex-direction: column;
                background-color: rgb(13, 12, 12);
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
                padding: 10px 0;
            }

            .hero {
                flex-direction: column;
                height: auto;
                padding: 150px 0 80px;
            }

            .hero-content {
                width: 100%;
                padding-right: 0;
                text-align: center;
                margin-bottom: 50px;
            }

            .hero h1 {
                font-size: 2.5rem;
            }

            .hero-visual {
                position: relative;
                width: 100%;
                height: 400px;
            }

            .hero-shape {
                width: 300px;
                height: 300px;
            }

            .hero-product {
                width: 200px;
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

        .subcategory-nav .subcategory-link {
            padding: 10px 20px;
            border-radius: 25px;
            background-color: #e2e8f0;
            color: #333;
            font-weight: 500;
            text-decoration: none;
            transition: all 0.2s ease;
        }

        .subcategory-nav .subcategory-link:hover {
            background-color: #e2e8f0;
        }

        .subcategory-nav .subcategory-link.active {
            background-color: skyblue;
            color: #fff;
            font-weight: 600;
        }

        /* Page Loader */
        .page-loader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: opacity 0.5s ease, visibility 0.5s ease;
        }

        .page-loader.hidden {
            opacity: 0;
            visibility: hidden;
        }

        .loader-spinner {
            width: 50px;
            height: 50px;
            border: 5px solid #f3f3f3;
            border-top: 5px solid #45aae3;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>

<body>
    <!-- Page Loader -->
    <div id="pageLoader" class="page-loader">
        <div class="loader-spinner"></div>
    </div>
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
                    <a href="{{ route('products.index') }}" class="nav-link active">Products</a>
                </li>
                <li class="nav-item">

                    <a href="{{ url('/') }}#why-us" class="nav-link">Why choose us</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('blogs.list') }}" class="nav-link">Blog</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('contact') }}" class="nav-link">Contact</a>
                </li>
            </ul>
        </div>
    </header>


    {{-- 🌐 MAIN CATEGORIES (Always Visible) --}}
    {{-- 🌐 MAIN CATEGORIES (Always Visible) --}}
    <section class="products-sections" style="padding: 80px 40px 20px 20px;background-color:#f0f9fd">
        <nav class="categories">

            @foreach ($categories as $categoryItem)
                @php
                    // Decide active category:
                    // - If $category is set (category or subcategory page), use its slug
                    // - Else on /products (index), use $activeCategoryId if available
                    $isActive = false;

                    if (isset($category)) {
                        $isActive = $category->slug === $categoryItem->slug;
                    } elseif (isset($activeCategoryId)) {
                        $isActive = $activeCategoryId == $categoryItem->maincategory_id;
                    }
                @endphp

                <a href="{{ url('category/' . $categoryItem->slug) }}" class="cat-item {{ $isActive ? 'active' : '' }}"
                    data-filter="{{ $categoryItem->slug }}">
                    <div
                        class="circle position-relative overflow-hidden border border-3 border-transparent bg-white glow-on-hover">
                        <img src="{{ $categoryItem->maincategory_image ? asset('storage/' . $categoryItem->maincategory_image) : asset('assets/img/default.jpg') }}"
                            alt="{{ $categoryItem->maincategory_name }}" class="img-fluid category-img" loading="lazy"
                            decoding="async" width="120" height="120">
                        <span class="circle-shine" aria-hidden="true"></span>
                    </div>
                    <span>{{ $categoryItem->maincategory_name }}</span>
                </a>
            @endforeach

        </nav>
    </section>

    {{-- 💎 PRODUCTS --}}
    <section class="product-section  position-relative overflow-hidden" style="background-color:#f4faff;">

        <div class="container text-center">
            @if ($subcategories && count($subcategories))
                <div class="subcategory-wrap mb-4 mx-auto reveal fade-in" style="--delay: 60ms">
                    <div class="d-flex flex-wrap justify-content-center gap-2 gap-md-3">
                    @foreach ($subcategories as $sub)
    <a href="{{ route('products.subcategory', $sub->slug) }}"
        class="subcategory-chip 
            {{ (isset($subcategory) && $subcategory->slug == $sub->slug) 
                ? 'active pulse'
                : (!isset($subcategory) && isset($activeSubcategory) && $activeSubcategory->slug == $sub->slug ? 'active pulse' : '') }}">
        <span class="chip-dot"></span>
        <span>{{ $sub->subcategory_name }}</span>
    </a>
@endforeach


                    </div>
                </div>
            @endif

            <h6 class="section-title mb-4  text-blue-700 reveal fade-up" style="--delay: 140ms">Our Products</h6>
            <div class="container my-4">
                <form class="d-flex justify-content-center mb-4">
                    <input type="text" id="liveSearch" class="form-control w-25" placeholder="Search products..."
                        aria-label="Search products">
                </form>
            </div>
            <p id="noProductsMsg" class="text-muted mt-4 mb-4" style="display:none;">No products found.</p>

            {{-- Product Grid --}}
            <div id="productList"
                class="row row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-3 justify-content-center mb-4">

                @forelse ($products as $product)
                    <div class="col">
                        <div class="product-card card border-0 shadow-sm h-100 rounded-4 overflow-hidden reveal zoom-in parallax"
                            style="--delay: {{ $loop->index * 70 + 160 }}ms">
                            <a href="{{ route('products.show', $product->slug) }}"
                                class="text-decoration-none text-ink d-block position-relative h-100">

                                {{-- New badge with pop-in --}}
                                <span class="badge bg-blue-subtle text-blue fw-medium position-absolute z-2 badge-pop"
                                    style="top: 10px; left: 12px;">
                                    New
                                </span>

                                {{-- Image with parallax tilt --}}
                                <div class="product-image position-relative">
                                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->title }}"
                                        class="w-100 h-100 object-cover product-hover-zoom parallax-img" loading="lazy"
                                        decoding="async" width="600" height="600"
                                        sizes="(max-width: 576px) 50vw, (max-width: 992px) 33vw, 25vw">

                                    {{-- Hover overlay CTA + shine --}}
                                    <div class="hover-overlay">
                                        <span class="hover-cta text-blue">View</span>
                                    </div>
                                    <span class="img-shine" aria-hidden="true"></span>
                                </div>

                                <div class="p-3">
                                    <h6 class="fw-semibold mb-1 text-ink text-truncate"
                                        title="{{ $product->title }}">
                                        {{ $product->title }}
                                    </h6>
                                    <div class="rating mb-1 twinkle-on-hover"
                                        aria-label="Rating: {{ number_format($product->rating, 1) }} out of 5">
                                        @for ($i = 1; $i <= 5; $i++)
                                            @if ($i <= floor($product->rating))
                                                <i class="fas fa-star text-warning"></i>
                                            @elseif ($i - $product->rating < 1)
                                                <i class="fas fa-star-half-alt text-warning"></i>
                                            @else
                                                <i class="far fa-star text-warning"></i>
                                            @endif
                                        @endfor

                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="text-center py-5 reveal fade-in">
                            {{-- <img src="{{ asset('assets/img/empty-state.svg') }}" alt="No products" width="120"
                                height="120" class="mb-3" loading="lazy"> --}}
                            <p class="text-muted mb-0">No products found for this Subcategory.</p>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    {{-- Styles: Light Blue theme + enhanced animations --}}
    <style>
        :root {
            --blue-50: #f0f9ff;
            --blue-75: #eaf4ff;
            --blue-100: #e0f2fe;
            --blue-200: #bae6fd;
            --blue-300: #7dd3fc;
            --blue-400: #38bdf8;
            --blue-500: #0ea5e9;
            --blue-600: #0284c7;
            --blue-700: #0369a1;
            --ink-900: #0f172a;
            --ink-700: #334155;
        }

        /* Helpers */
        .text-ink {
            color: var(--ink-900) !important;
        }

        .text-blue {
            color: var(--blue-600) !important;
        }

        .text-blue-700 {
            color: var(--blue-700) !important;
        }

        .bg-blue-subtle {
            background: var(--blue-100) !important;
        }

        /* Decorative soft blobs */
        .products-sections::before,
        .product-section::before {
            content: "";
            position: absolute;
            width: 480px;
            height: 480px;
            top: -140px;
            right: -140px;
            /* background: radial-gradient(50% 50% at 50% 50%, rgba(56,189,248,0.15) 0%, rgba(56,189,248,0) 70%); */
            filter: blur(2px);
            z-index: 0;
            animation: drift 14s ease-in-out infinite alternate;
        }

        .products-sections::after,
        .product-section::after {
            content: "";
            position: absolute;
            width: 420px;
            height: 420px;
            bottom: -120px;
            left: -120px;
            background: radial-gradient(50% 50% at 50% 50%, rgba(186, 230, 253, 0.25) 0%, rgba(186, 230, 253, 0) 70%);
            filter: blur(2px);
            z-index: 0;
            animation: drift 16s ease-in-out infinite alternate-reverse;
        }

        @keyframes drift {
            0% {
                transform: translate(0, 0) scale(1);
            }

            100% {
                transform: translate(20px, -10px) scale(1.06);
            }
        }

        section>.container {
            position: relative;
            z-index: 1;
        }

        /* Section title accent line */
        .section-title {
            position: relative;
            display: inline-block;
            letter-spacing: .2px;
        }

        .section-title::after {
            content: "";
            position: absolute;
            left: 50%;
            bottom: -8px;
            transform: translateX(-50%);
            width: 56px;
            height: 4px;
            border-radius: 4px;
            background: linear-gradient(90deg, var(--blue-200), var(--blue-500));
        }

        /* Category circles */
        .products-sections .circle,
        .product-section .circle {
            width: 120px;
            height: 120px;
            border-radius: 999px;
            transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease;
        }

        .category-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .border-transparent {
            border-color: transparent !important;
        }

        /* Animated gradient ring for active/hover */
        .circle::before {
            content: "";
            position: absolute;
            inset: -2px;
            border-radius: 50%;
            background:
                conic-gradient(from 0deg, var(--blue-400), var(--blue-600), var(--blue-300), var(--blue-500), var(--blue-400));
            -webkit-mask: radial-gradient(farthest-side, transparent calc(100% - 6px), #000 0);
            mask: radial-gradient(farthest-side, transparent calc(100% - 6px), #000 0);
            opacity: 0;
            pointer-events: none;
            transition: opacity .25s ease;
        }

        .cat-item:hover .circle::before,
        .ring-animate::before {
            opacity: .9;
            animation: ring-rotate 3.5s linear infinite;
        }

        @keyframes ring-rotate {
            to {
                transform: rotate(360deg);
            }
        }

        /* Circle shine accent */
        .circle-shine {
            position: absolute;
            inset: 0;
            pointer-events: none;
            background: radial-gradient(60% 60% at 10% 10%, rgba(255, 255, 255, 0.9), transparent 60%);
            opacity: .85;
        }

        /* Category interactions */
        .cat-item {
            color: var(--ink-900);
            text-decoration: none;
            will-change: transform;
        }

        .cat-item:hover .circle {
            transform: translateY(-6px) scale(1.02);
            box-shadow: 0 16px 30px rgba(3, 105, 161, 0.15);
            animation: floaty 4s ease-in-out infinite;
        }

        .cat-item.active .circle {
            border-color: var(--blue-500) !important;
            box-shadow: 0 0 0 5px var(--blue-100), 0 12px 26px rgba(2, 132, 199, 0.15);
        }

        @keyframes floaty {

            0%,
            100% {
                transform: translateY(-6px) scale(1.02);
            }

            50% {
                transform: translateY(-12px) scale(1.02);
            }
        }

        /* Subcategory glass wrapper */
        .subcategory-wrap {
            max-width: 980px;
            background: #ccf7ff;
            border: 1px solid rgba(2, 132, 199, 0.18);
            padding: 12px 14px;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(2, 132, 199, 0.08);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
        }

        /* Subcategory chips + ripple + pulse */
        .subcategory-chip {
            position: relative;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 16px;
            border-radius: 999px;
            background: #fff;
            color: var(--ink-900);
            border: 1px solid #e6eef9;
            font-weight: 600;
            line-height: 1;
            text-decoration: none;
            transition: transform .2s ease, box-shadow .25s ease, border-color .25s ease, background .25s ease, color .25s ease;
            box-shadow: 0 3px 10px rgba(3, 105, 161, 0.08);
            overflow: hidden;
            /* for ripple clip */
        }

        .subcategory-chip .chip-dot {
            width: 8px;
            height: 8px;
            border-radius: 999px;
            background: var(--blue-300);
            box-shadow: 0 0 0 5px var(--blue-75);
            transition: background .25s ease, box-shadow .25s ease, transform .25s ease;
        }

        .subcategory-chip .chip-text {
            white-space: nowrap;
        }

        .subcategory-chip:hover {
            transform: translateY(-2px);
            border-color: var(--blue-200);
            box-shadow: 0 10px 22px rgba(3, 105, 161, 0.12);
            background: linear-gradient(180deg, #ffffff, var(--blue-50));
        }

        .subcategory-chip:hover .chip-dot {
            transform: scale(1.1);
        }

        .subcategory-chip.active {
            background: linear-gradient(180deg, var(--blue-100), var(--blue-50));
            color: var(--blue-700);
            border-color: var(--blue-500);
            box-shadow: 0 0 0 5px rgba(14, 165, 233, 0.15);
        }

        .subcategory-chip.active .chip-dot {
            background: var(--blue-600);
            box-shadow: 0 0 0 6px rgba(14, 165, 233, 0.22);
        }

        /* Active underline flourish */
        .subcategory-chip::after {
            content: "";
            position: absolute;
            left: 50%;
            bottom: -7px;
            width: 28px;
            height: 3px;
            border-radius: 3px;
            background: transparent;
            transform: translateX(-50%) scaleX(0);
            transition: transform .25s ease, background .25s ease;
        }

        .subcategory-chip.active::after {
            background: linear-gradient(90deg, var(--blue-300), var(--blue-600));
            transform: translateX(-50%) scaleX(1);
        }

        /* Ripple effect */
        .ripple::before {
            content: "";
            position: absolute;
            border-radius: 50%;
            transform: scale(0);
            background: rgba(14, 165, 233, 0.25);
            opacity: 0;
            pointer-events: none;
        }

        .ripple.rippling::before {
            animation: ripple 600ms ease-out forwards;
        }

        @keyframes ripple {
            0% {
                transform: translate(var(--rx, 0), var(--ry, 0)) scale(0);
                opacity: .4;
            }

            100% {
                transform: translate(calc(var(--rx, 0) - 50%), calc(var(--ry, 0) - 50%)) scale(3.5);
                opacity: 0;
            }
        }

        /* Pulse for active chip */
        .pulse {
            animation: pulseRing 1.6s ease-in-out infinite;
        }

        @keyframes pulseRing {
            0% {
                box-shadow: 0 0 0 0 rgba(14, 165, 233, 0.22);
            }

            70% {
                box-shadow: 0 0 0 10px rgba(14, 165, 233, 0);
            }

            100% {
                box-shadow: 0 0 0 0 rgba(14, 165, 233, 0);
            }
        }

        /* Product card */
        .product-card {
            transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease;
            background: #fff;
            border: 1px solid #eef4fb;
            transform-origin: center center;
        }

        .product-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 38px rgba(3, 105, 161, 0.18);
            border-color: var(--blue-200);
        }

        /* Image area with shine and parallax */
        .product-image {
            aspect-ratio: 1 / 1;
            background: #fff;
            overflow: hidden;
            position: relative;
        }

        .object-cover {
            object-fit: cover;
        }

        .product-hover-zoom {
            transition: transform .45s ease;
        }

        .product-card:hover .product-hover-zoom {
            transform: scale(1.06);
        }

        /* Shine sweep */
        .img-shine {
            position: absolute;
            top: 0;
            left: -120%;
            width: 60%;
            height: 100%;
            background: linear-gradient(75deg, transparent 0%, rgba(255, 255, 255, 0.4) 45%, rgba(255, 255, 255, 0.75) 50%, transparent 55%);
            transform: skewX(-12deg);
            transition: left .7s ease;
            pointer-events: none;
        }

        .product-card:hover .img-shine {
            left: 130%;
        }

        /* Hover overlay CTA */
        .hover-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, rgba(255, 255, 255, 0) 40%, rgba(224, 242, 255, 0.75) 100%);
            opacity: 0;
            display: grid;
            place-items: end center;
            padding: 10px;
            transition: opacity .3s ease;
            pointer-events: none;
        }

        .hover-cta {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: #fff;
            color: var(--blue-700);
            border: 1px solid var(--blue-200);
            border-radius: 999px;
            padding: 5px 12px;
            font-size: 12px;
            font-weight: 700;
            box-shadow: 0 6px 14px rgba(2, 132, 199, 0.18);
        }

        .product-card:hover .hover-overlay {
            opacity: 1;
        }

        /* Badge pop-in */
        .badge-pop {
            animation: popIn .5s ease .2s both;
            transform-origin: left top;
        }

        @keyframes popIn {
            0% {
                transform: scale(.6);
                opacity: 0;
            }

            60% {
                transform: scale(1.08);
                opacity: 1;
            }

            100% {
                transform: scale(1);
            }
        }

        /* Rating twinkle on hover */
        .twinkle-on-hover i {
            display: inline-block;
        }

        .twinkle-on-hover:hover i:nth-child(1) {
            animation: twinkle .9s ease-in-out;
        }

        .twinkle-on-hover:hover i:nth-child(2) {
            animation: twinkle .9s ease-in-out .05s;
        }

        .twinkle-on-hover:hover i:nth-child(3) {
            animation: twinkle .9s ease-in-out .1s;
        }

        .twinkle-on-hover:hover i:nth-child(4) {
            animation: twinkle .9s ease-in-out .15s;
        }

        .twinkle-on-hover:hover i:nth-child(5) {
            animation: twinkle .9s ease-in-out .2s;
        }

        @keyframes twinkle {

            0%,
            100% {
                transform: rotate(0deg) scale(1);
                filter: brightness(1);
            }

            40% {
                transform: rotate(-10deg) scale(1.12);
                filter: brightness(1.25);
            }

            70% {
                transform: rotate(8deg) scale(1.06);
            }
        }

        /* Reveal animations with stagger via --delay */
        .reveal {
            opacity: 0;
            will-change: transform, opacity;
        }

        .reveal.in-view {
            opacity: 1;
        }

        .fade-up.in-view {
            animation: fadeUp .6s both;
            animation-delay: var(--delay, 0ms);
        }

        .fade-in.in-view {
            animation: fadeIn .6s both;
            animation-delay: var(--delay, 0ms);
        }

        .zoom-in.in-view {
            animation: zoomInSoft .6s both;
            animation-delay: var(--delay, 0ms);
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(24px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes zoomInSoft {
            from {
                opacity: 0;
                transform: translateY(12px) scale(.94);
            }

            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        /* Responsive tweaks */
        @media (max-width: 575.98px) {

            .products-sections .circle,
            .product-section .circle {
                width: 96px;
                height: 96px;
            }

            .subcategory-chip {
                padding: 8px 12px;
            }
        }

        /* Accessibility */
        a:focus-visible,
        button:focus-visible {
            outline: 3px solid var(--blue-200);
            outline-offset: 2px;
            border-radius: 10px;
        }

        /* Reduced motion */
        @media (prefers-reduced-motion: reduce) {
            * {
                animation: none !important;
                transition: none !important;
                scroll-behavior: auto !important;
            }
        }
    </style>

    {{-- Lightweight scripts: reveal + parallax tilt + chip ripple --}}
    <script>
        (function() {
            // Scroll reveal
            const els = document.querySelectorAll('.reveal');
            if ('IntersectionObserver' in window && els.length) {
                const io = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('in-view');
                            io.unobserve(entry.target);
                        }
                    });
                }, {
                    threshold: 0.12
                });
                els.forEach(el => io.observe(el));
            } else {
                els.forEach(el => el.classList.add('in-view'));
            }

            // Parallax tilt on desktop (pointer: fine)
            const mqFine = window.matchMedia('(pointer: fine)');
            if (mqFine.matches) {
                const cards = document.querySelectorAll('.parallax');
                cards.forEach(card => {
                    const img = card.querySelector('.parallax-img');
                    let raf = null;

                    function onMove(e) {
                        const rect = card.getBoundingClientRect();
                        const x = (e.clientX - rect.left) / rect.width; // 0..1
                        const y = (e.clientY - rect.top) / rect.height; // 0..1
                        const rotY = (x - 0.5) * 10; // deg
                        const rotX = (0.5 - y) * 10; // deg
                        const tx = (x - 0.5) * 10; // px
                        const ty = (y - 0.5) * 10; // px
                        if (raf) cancelAnimationFrame(raf);
                        raf = requestAnimationFrame(() => {
                            card.style.transform =
                                `translateY(-8px) rotateX(${rotX}deg) rotateY(${rotY}deg)`;
                            if (img) {
                                img.style.transform = `translate(${tx}px, ${ty}px) scale(1.06)`;
                            }
                        });
                    }

                    function reset() {
                        if (raf) cancelAnimationFrame(raf);
                        card.style.transform = '';
                        if (img) {
                            img.style.transform = '';
                        }
                    }
                    card.addEventListener('mousemove', onMove, {
                        passive: true
                    });
                    card.addEventListener('mouseleave', reset, {
                        passive: true
                    });
                    card.addEventListener('blur', reset);
                });
            }

            // Ripple on subcategory chips
            document.querySelectorAll('.subcategory-chip.ripple').forEach(chip => {
                chip.addEventListener('click', function(e) {
                    const rect = this.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    const y = e.clientY - rect.top;
                    this.style.setProperty('--rx', x + 'px');
                    this.style.setProperty('--ry', y + 'px');
                    this.classList.remove('rippling');
                    // trigger reflow to restart animation
                    void this.offsetWidth;
                    this.classList.add('rippling');
                    setTimeout(() => this.classList.remove('rippling'), 650);
                }, {
                    passive: true
                });
            });
        })();
    </script>



    <script>
        document.getElementById('liveSearch').addEventListener('keyup', function() {

            let searchText = this.value.toLowerCase().trim();
            let cards = document.querySelectorAll(".product-card");

            cards.forEach(card => {
                let title = card.querySelector("h6").textContent.toLowerCase();

                if (title.includes(searchText)) {
                    card.parentElement.style.display = "";
                } else {
                    card.parentElement.style.display = "none";
                }
            });

        });

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




    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-col">
                    <h4>spc</h4>
                    <p>
                        Premium plastic containers designed for sustainability and
                        elegance.
                    </p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="footer-col">
                    <h4>Quick Links</h4>
                    <ul class="footer-links">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ url('/') }}#about">About</a></li>
                        <li><a href="{{ route('products.index') }}">Products</a></li>
                        <li><a href="{{ url('/') }}#why-us">Why choose us</a></li>
                        <li><a href="{{ route('blogs.list') }}">Blog</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>
               <div class="footer-col">
                <h4>Product Categories</h4>
                <ul class="footer-links">
                    @foreach ($categories as $cat)
                        <li>
                            <a href="{{ route('products.category', $cat->slug) }}">
                                {{ $cat->maincategory_name }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

                <div class="footer-col">
                    <h4>Qr Code</h4>

                    <img class="qrcode" src="{{ asset('assets/img/qrcode.png') }}" alt="Blog 3">
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2025 spc. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
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
        // 
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
        //  search functionality view no product found msg
        const searchInput = document.getElementById('liveSearch');
        const productList = document.getElementById('productList');
        const noProductsMsg = document.getElementById('noProductsMsg');
        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            const products = productList.getElementsByClassName('product-card');
            let found = false;

            Array.from(products).forEach(function(product) {
                const title = product.querySelector('h6').textContent.toLowerCase();
                if (title.includes(searchTerm)) {
                    product.parentElement.style.display = '';
                    found = true;
                } else {
                    product.parentElement.style.display = 'none';
                }
            });

            // Show or hide the "No products found" message
            if (!found) {
                noProductsMsg.style.display = 'block';
            } else {
                noProductsMsg.style.display = 'none';
            }
        });
    </script>

    <!-- Page Loader Script -->
    <script>
        // Function to show loader
        function showLoader() {
            const loader = document.getElementById('pageLoader');
            if (loader) {
                loader.classList.remove('hidden');
            }
        }

        // Function to hide loader
        function hideLoader() {
            const loader = document.getElementById('pageLoader');
            if (loader) {
                setTimeout(() => {
                    loader.classList.add('hidden');
                }, 300);
            }
        }

        // Hide loader when page is fully loaded
        window.addEventListener('load', hideLoader);

        // Also hide loader when DOM is ready (in case load event takes too long)
        document.addEventListener('DOMContentLoaded', hideLoader);

        // Hide loader when page is restored from bfcache (back/forward)
        window.addEventListener('pageshow', function(e) {
            if (e.persisted) {
                hideLoader();
            }
        });

        // Show loader when clicking on internal links
        document.addEventListener('click', function(e) {
            const link = e.target.closest('a[href]');
            if (link && !link.href.startsWith('javascript:') && !link.href.includes('#')) {
                showLoader();
            }
        });

        // For popstate, show loader but also make sure it hides after a short delay as a fallback
        window.addEventListener('popstate', function() {
            showLoader();
            // Fallback: hide loader after 2 seconds in case page events don't fire
            setTimeout(hideLoader, 2000);
        });

        // Show loader when page is about to be unloaded (for some browsers)
        window.addEventListener('beforeunload', showLoader);
    </script>
