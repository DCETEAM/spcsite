<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta name="google-site-verification" content="YOUR_VERIFICATION_CODE" />
    <meta name="description" content="Senthil Plastic Containers (SPC) is a leading manufacturer and supplier of high-quality plastic containers in Virudhunagar, Tamil Nadu, offering durable, reliable, and industry-standard plastic packaging solutions.">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta name="author" content="Senthil Plastic Containers">
    <meta name="keywords" content="Senthil Plastic Containers, SPC Virudhunagar, plastic containers manufacturer, plastic packaging containers, plastic storage containers, industrial plastic containers, plastic products Tamil Nadu, plastic containers Virudhunagar, plastic container supplier India">
    <meta name="language" content="English">
    <meta name="geo.region" content="IN-TN">
    <meta name="geo.placename" content="Virudhunagar, Tamil Nadu">
    <meta name="geo.position" content="9.5851;77.9570">
    <meta name="ICBM" content="9.5851, 77.9570">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Senthil Plastic Containers (SPC) | Plastic Container Manufacturer in Virudhunagar">
    <meta property="og:description" content="Leading manufacturer and supplier of quality plastic containers and packaging solutions from Virudhunagar, Tamil Nadu.">
    <meta property="og:image" content="{{ asset('assets/img/item2.png') }}">
    <meta property="og:url" content="{{ url()->current() }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Senthil Plastic Containers (SPC) | Plastic Container Manufacturer">
    <meta name="twitter:description" content="High-quality plastic containers and packaging solutions manufactured by Senthil Plastic Containers, Virudhunagar, Tamil Nadu.">
    <meta name="twitter:image" content="{{ asset('assets/img/item2.png') }}">

    <title>spc | Premium Plastic Containers</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
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
            background:#fff;
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
            list-style: none;
        }

        .nav-item {
            margin-left: 30px;
        }

        .nav-link {
            text-decoration: none;
            color:rgb(7, 5, 5);
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

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }



        .nav-menu {
            display: flex;
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
            color:rgb(241, 239, 239);
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
            background:white;
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
            padding: 40px 20px 40px 20px;
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
                padding: 15px 0;
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
                      <a href="{{ route('products.index') }}" class="nav-link active">Products</a>
                </li>
                <li class="nav-item">

                    <a href="#why-us" class="nav-link">Why choose us</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('blog') }}" class="nav-link">Blog</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('contact') }}" class="nav-link">Contact</a>
                </li>
            </ul>
        </div>
    </header>

    <section class="products-sections" style="padding: 80px 40px 20px 20px;background-color:#f0f9fd">
        {{-- <h2 class="intro-title text-center mb-5">Explore Categories</h2> --}}
        <nav class="categories">
            <a href="#" class="cat-item active" data-filter="paint">
                <div class="circle">
                    <img src="{{ asset('assets/img/paintcat.png') }}" alt="Normal" class="img-default">
                    <img src="{{ asset('assets/img/paint2.jpg') }}" alt="Hover" class="img-hover">
                </div>
                <span>Paint Industry</span>
            </a>

            <a href="#" class="cat-item" data-filter="food">
                <div class="circle">
                    <img src="{{ asset('assets/img/food1.png') }}" alt="Normal" class="img-default">
                    <img src="{{ asset('assets/img/food2.avif') }}" alt="Hover" class="img-hover">
                </div>
                <span>Food Packing</span>
            </a>

            <a href="#" class="cat-item" data-filter="agro">
                <div class="circle">
                    <img src="{{ asset('assets/img/agro.avif') }}" alt="Normal" class="img-default">
                    <img src="{{ asset('assets/img/agro2.avif') }}" alt="Hover" class="img-hover">
                </div>
                <span>Agro Chemicals</span>
            </a>

            <a href="#" class="cat-item" data-filter="lube">
                <div class="circle">
                    <img src="{{ asset('assets/img/cat4.jpg') }}" alt="Normal" class="img-default">
                    <img src="{{ asset('assets/img/lube1.jpg') }}" alt="Hover" class="img-hover">
                </div>
                <span>Lube Industries</span>
            </a>

            <a href="#" class="cat-item" data-filter="chemical">
                <div class="circle">
                    <img src="{{ asset('assets/img/chem01.jpg') }}" alt="Normal" class="img-default">
                    <img src="{{ asset('assets/img/why2.jpg') }}" alt="Hover" class="img-hover">
                </div>
                <span>Chemical &<br> Construction</span>
            </a>

            <a href="#" class="cat-item" data-filter="pharma">
                <div class="circle">
                    <img src="{{ asset('assets/img/phar1.png') }}" alt="Normal" class="img-default">
                    <img src="{{ asset('assets/img/phar2.jpg') }}" alt="Hover" class="img-hover">
                </div>
                <span>Pharma &<br> Healthcare</span>
            </a>
        </nav>
    </section>

    <!-- Product Sections -->
    <section class="product-section" data-category="paint">
        <div class="container">
            <h3 class="text-center mb-4">Paint Industry Products</h3>
            <div class="row">
                <div class="product-grid">
                    <!-- Product Card 1 -->
                    <div class="product-card">
                        <span class="badge">New</span>
                        <a href="{{ route('products.index') }}">
                            <div class="product-image">
                                <div class="wishlist">&#9825;</div>
                                <img src="{{ asset('assets/img/bucketk5.png') }}" alt="Product 1">
                            </div>
                        </a>
                        <div class="product-info">
                            <h3>P10</h3>
                            <div class="rating">⭐⭐⭐⭐⭐</div>

                           
                        </div>
                    </div>

                    <!-- Product Card 2 -->
                    <div class="product-card">
                        <span class="badge">Sale</span>
                        <a href="{{ route('products.index') }}">
                        <div class="product-image">
                            <div class="wishlist">&#9825;</div>
                            <img src="{{ asset('assets/img/bucketk5.png') }}" alt="Product 2">
                        </div>
                        </a>
                        <div class="product-info">
                            <h3>K10</h3>
                            <div class="rating">⭐⭐⭐⭐⭐</div>

                        </div>
                    </div>

                    <!-- Product Card 3 -->
                    <div class="product-card">
                        <span class="badge">New</span>
                        <a href="{{ route('products.index') }}">
                        <div class="product-image">
                            <div class="wishlist">&#9825;</div>
                            <img src="{{ asset('assets/img/bucketk5.png') }}" alt="Product 3">
                        </div>
                        </a>
                        <div class="product-info">
                            <h3>K5</h3>
                            <div class="rating">⭐⭐⭐⭐⭐</div>
                            {{-- <p class="price">$18.00</p> --}}
                           
                        </div>
                    </div>

                    <!-- Product Card 4 -->
                    <div class="product-card">
                        <span class="badge">Hot</span>
                        <a href="{{ route('products.index') }}">
                            <div class="product-image">
                                <div class="wishlist">&#9825;</div>
                                <img src="{{ asset('assets/img/bucketk5.png') }}" alt="Product 4">
                            </div>
                        </a>
                        <div class="product-info">
                            <h3>P20</h3>
                            <div class="rating">⭐⭐⭐⭐⭐</div>

                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="product-section" data-category="food">
        <div class="container">
            <h3 class="text-center mb-4">Food Packing Products</h3>
            <div class="row">
                <div class="product-grid">
                    <!-- Product Card 1 -->
                    <div class="product-card">
                        <span class="badge">New</span>
                        <div class="product-image">
                            <div class="wishlist">&#9825;</div>
                            <img src="{{ asset('assets/img/bucketk5.png') }}" alt="Product 1">
                        </div>
                        <div class="product-info">
                            <h3>ssssssss</h3>
                            <div class="rating">⭐⭐⭐⭐⭐</div>

                           
                        </div>
                    </div>

                    <!-- Product Card 2 -->
                    <div class="product-card">
                        <span class="badge">Sale</span>
                        <div class="product-image">
                            <div class="wishlist">&#9825;</div>
                            <img src="{{ asset('assets/img/bucketk5.png') }}" alt="Product 2">
                        </div>
                        <div class="product-info">
                            <h3>K10</h3>
                            <div class="rating">⭐⭐⭐⭐⭐</div>

                        </div>
                    </div>

                    <!-- Product Card 3 -->
                    <div class="product-card">
                        <div class="product-image">
                            <div class="wishlist">&#9825;</div>
                            <img src="{{ asset('assets/img/bucketk5.png') }}" alt="Product 3">
                        </div>
                        <div class="product-info">
                            <h3>K5</h3>
                            <div class="rating">⭐⭐⭐⭐⭐</div>
                            {{-- <p class="price">$18.00</p> --}}
                           
                        </div>
                    </div>

                    <!-- Product Card 4 -->
                    <div class="product-card">
                        <span class="badge">Hot</span>
                        <div class="product-image">
                            <div class="wishlist">&#9825;</div>
                            <img src="{{ asset('assets/img/bucketk5.png') }}" alt="Product 4">
                        </div>
                        <div class="product-info">
                            <h3>P20</h3>
                            <div class="rating">⭐⭐⭐⭐⭐</div>

                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="product-section" data-category="agro">
        <div class="container">
            <h3 class="text-center mb-4">Agro Chemicals Products</h3>
            <div class="row">
                <div class="product-grid">
                    <!-- Product Card 1 -->
                    <div class="product-card">
                        <span class="badge">New</span>
                        <div class="product-image">
                            <div class="wishlist">&#9825;</div>
                            <img src="{{ asset('assets/img/bucketk5.png') }}" alt="Product 1">
                        </div>
                        <div class="product-info">
                            <h3>ssssssss</h3>
                            <div class="rating">⭐⭐⭐⭐⭐</div>

                           
                        </div>
                    </div>

                    <!-- Product Card 2 -->
                    <div class="product-card">
                        <span class="badge">Sale</span>
                        <div class="product-image">
                            <div class="wishlist">&#9825;</div>
                            <img src="{{ asset('assets/img/bucketk5.png') }}" alt="Product 2">
                        </div>
                        <div class="product-info">
                            <h3>K10</h3>
                            <div class="rating">⭐⭐⭐⭐⭐</div>

                        </div>
                    </div>

                    <!-- Product Card 3 -->
                    <div class="product-card">
                        <div class="product-image">
                            <div class="wishlist">&#9825;</div>
                            <img src="{{ asset('assets/img/bucketk5.png') }}" alt="Product 3">
                        </div>
                        <div class="product-info">
                            <h3>K5</h3>
                            <div class="rating">⭐⭐⭐⭐⭐</div>
                            {{-- <p class="price">$18.00</p> --}}
                           
                        </div>
                    </div>

                    <!-- Product Card 4 -->
                    <div class="product-card">
                        <span class="badge">Hot</span>
                        <div class="product-image">
                            <div class="wishlist">&#9825;</div>
                            <img src="{{ asset('assets/img/bucketk5.png') }}" alt="Product 4">
                        </div>
                        <div class="product-info">
                            <h3>aaaxsa</h3>
                            <div class="rating">⭐⭐⭐⭐⭐</div>

                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="product-section" data-category="lube">
        <div class="container">
            <h3 class="text-center mb-4">Lube Industry Products</h3>
            <div class="row">
                <div class="product-grid">
                    <!-- Product Card 1 -->
                    <div class="product-card">
                        <span class="badge">New</span>
                        <div class="product-image">
                            <div class="wishlist">&#9825;</div>
                            <img src="{{ asset('assets/img/bucketk5.png') }}" alt="Product 1">
                        </div>
                        <div class="product-info">
                            <h3>ssssssss</h3>
                            <div class="rating">⭐⭐⭐⭐⭐</div>

                           
                        </div>
                    </div>

                    <!-- Product Card 2 -->
                    <div class="product-card">
                        <span class="badge">Sale</span>
                        <div class="product-image">
                            <div class="wishlist">&#9825;</div>
                            <img src="{{ asset('assets/img/bucketk5.png') }}" alt="Product 2">
                        </div>
                        <div class="product-info">
                            <h3>K10</h3>
                            <div class="rating">⭐⭐⭐⭐⭐</div>

                        </div>
                    </div>

                    <!-- Product Card 3 -->
                    <div class="product-card">
                        <div class="product-image">
                            <div class="wishlist">&#9825;</div>
                            <img src="{{ asset('assets/img/bucketk5.png') }}" alt="Product 3">
                        </div>
                        <div class="product-info">
                            <h3>K5</h3>
                            <div class="rating">⭐⭐⭐⭐⭐</div>
                            {{-- <p class="price">$18.00</p> --}}
                           
                        </div>
                    </div>

                    <!-- Product Card 4 -->
                    <div class="product-card">
                        <span class="badge">Hot</span>
                        <div class="product-image">
                            <div class="wishlist">&#9825;</div>
                            <img src="{{ asset('assets/img/bucketk5.png') }}" alt="Product 4">
                        </div>
                        <div class="product-info">
                            <h3>P20</h3>
                            <div class="rating">⭐⭐⭐⭐⭐</div>

                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="product-section" data-category="chemical">
        <div class="container">
            <h3 class="text-center mb-4"> Chemical & Construction</h3>
            <div class="row">
                <div class="product-grid">
                    <!-- Product Card 1 -->
                    <div class="product-card">
                        <span class="badge">New</span>
                        <div class="product-image">
                            <div class="wishlist">&#9825;</div>
                            <img src="{{ asset('assets/img/bucketk5.png') }}" alt="Product 1">
                        </div>
                        <div class="product-info">
                            <h3>ssssssss</h3>
                            <div class="rating">⭐⭐⭐⭐⭐</div>

                           
                        </div>
                    </div>

                    <!-- Product Card 2 -->
                    <div class="product-card">
                        <span class="badge">Sale</span>
                        <div class="product-image">
                            <div class="wishlist">&#9825;</div>
                            <img src="{{ asset('assets/img/bucketk5.png') }}" alt="Product 2">
                        </div>
                        <div class="product-info">
                            <h3>K10</h3>
                            <div class="rating">⭐⭐⭐⭐⭐</div>

                        </div>
                    </div>

                    <!-- Product Card 3 -->
                    <div class="product-card">
                        <div class="product-image">
                            <div class="wishlist">&#9825;</div>
                            <img src="{{ asset('assets/img/bucketk5.png') }}" alt="Product 3">
                        </div>
                        <div class="product-info">
                            <h3>K5</h3>
                            <div class="rating">⭐⭐⭐⭐⭐</div>
                            {{-- <p class="price">$18.00</p> --}}
                           
                        </div>
                    </div>

                    <!-- Product Card 4 -->
                    <div class="product-card">
                        <span class="badge">Hot</span>
                        <div class="product-image">
                            <div class="wishlist">&#9825;</div>
                            <img src="{{ asset('assets/img/bucketk5.png') }}" alt="Product 4">
                        </div>
                        <div class="product-info">
                            <h3>P20</h3>
                            <div class="rating">⭐⭐⭐⭐⭐</div>

                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="product-section" data-category="pharma">
        <div class="container">
            <h3 class="text-center mb-4"> Pharma & Healthcare</h3>
            <div class="row">
                <div class="product-grid">
                    <!-- Product Card 1 -->
                    <div class="product-card">
                        <span class="badge">New</span>
                        <div class="product-image">
                            <div class="wishlist">&#9825;</div>
                            <img src="{{ asset('assets/img/bucketk5.png') }}" alt="Product 1">
                        </div>
                        <div class="product-info">
                            <h3>ssssssss</h3>
                            <div class="rating">⭐⭐⭐⭐⭐</div>

                           
                        </div>
                    </div>

                    <!-- Product Card 2 -->
                    <div class="product-card">
                        <span class="badge">Sale</span>
                        <div class="product-image">
                            <div class="wishlist">&#9825;</div>
                            <img src="{{ asset('assets/img/bucketk5.png') }}" alt="Product 2">
                        </div>
                        <div class="product-info">
                            <h3>K10</h3>
                            <div class="rating">⭐⭐⭐⭐⭐</div>

                        </div>
                    </div>

                    <!-- Product Card 3 -->
                    <div class="product-card">
                        <div class="product-image">
                            <div class="wishlist">&#9825;</div>
                            <img src="{{ asset('assets/img/bucketk5.png') }}" alt="Product 3">
                        </div>
                        <div class="product-info">
                            <h3>K5</h3>
                            <div class="rating">⭐⭐⭐⭐⭐</div>
                            {{-- <p class="price">$18.00</p> --}}
                           
                        </div>
                    </div>

                    <!-- Product Card 4 -->
                    <div class="product-card">
                        <span class="badge">Hot</span>
                        <div class="product-image">
                            <div class="wishlist">&#9825;</div>
                            <img src="{{ asset('assets/img/bucketk5.png') }}" alt="Product 4">
                        </div>
                        <div class="product-info">
                            <h3>P20</h3>
                            <div class="rating">⭐⭐⭐⭐⭐</div>

                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Footer -->
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
                        <li><a  href="{{ url('/') }}#about">About</a></li>
                        <li><a href="{{ route('products.index') }}">Products</a></li>
                        <li><a href="{{ url('/') }}#why-us">Why choose us</a></li>
                        <li><a href="{{ route('blog') }}">Blog</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Products</h4>
                    <ul class="footer-links">
                        <li><a href="#">Food Storage</a></li>
                        <li><a href="#">Cosmetic Containers</a></li>
                        <li><a href="#">Industrial Solutions</a></li>
                        <li><a href="#">Custom Designs</a></li>
                        <li><a href="#">Bulk Orders</a></li>
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
            const catItems = document.querySelectorAll(".cat-item");
            const productSections = document.querySelectorAll(".product-section");

            // Show only "paint" by default
            productSections.forEach(section => {
                section.style.display = section.dataset.category === "paint" ? "block" : "none";
            });

            catItems.forEach(item => {
                item.addEventListener("click", function(e) {
                    e.preventDefault();

                    // Active class toggle
                    catItems.forEach(c => c.classList.remove("active"));
                    this.classList.add("active");

                    const filter = this.dataset.filter;

                    // Show matching section
                    productSections.forEach(section => {
                        if (section.dataset.category === filter) {
                            section.style.display = "block";
                        } else {
                            section.style.display = "none";
                        }
                    });
                });
            });
        });


        // Navigation Scroll Effect
        window.addEventListener("scroll", function() {
            const header = document.getElementById("header");
            if (window.scrollY > 100) {
                header.classList.add("scrolled");
            } else {
                header.classList.remove("scrolled");
            }
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

        // Testimonial Slider
        const track = document.getElementById("testimonial-track");
        const dots = document.querySelectorAll(".slider-dot");
        let currentSlide = 0;

        function goToSlide(slideIndex) {
            track.style.transform = `translateX(-${slideIndex * 100}%)`;

            // Update active dot
            dots.forEach((dot) => dot.classList.remove("active"));
            dots[slideIndex].classList.add("active");

            currentSlide = slideIndex;
        }

        // Add click events to dots
        dots.forEach((dot) => {
            dot.addEventListener("click", function() {
                const slideIndex = parseInt(this.getAttribute("data-slide"));
                goToSlide(slideIndex);
            });
        });

        // Auto slide every 5 seconds
        setInterval(() => {
            let nextSlide = (currentSlide + 1) % dots.length;
            goToSlide(nextSlide);
        }, 5000);

        // Scroll Animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: "0px 0px -50px 0px",
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = "1";
                    entry.target.style.transform = "translateY(0)";

                    if (entry.target.classList.contains("about-text")) {
                        entry.target.style.transform = "translateX(0)";
                    }
                    if (entry.target.classList.contains("about-image")) {
                        entry.target.style.transform = "translateX(0)";
                    }
                    if (entry.target.classList.contains("contact-info")) {
                        entry.target.style.transform = "translateX(0)";
                    }
                    if (entry.target.classList.contains("contact-form")) {
                        entry.target.style.transform = "translateX(0)";
                    }
                }
            });
        }, observerOptions);

        // Observe elements for scroll animations
        document
            .querySelectorAll(
                ".section-title, .product-card, .about-text, .about-image, .contact-info, .contact-form"
            )
            .forEach((el) => {
                observer.observe(el);
            });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
            anchor.addEventListener("click", function(e) {
                e.preventDefault();

                const targetId = this.getAttribute("href");
                if (targetId === "#") return;

                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: "smooth",
                    });
                }
            });
        });
 
document.addEventListener("DOMContentLoaded", function () {
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
</body>

</html>
