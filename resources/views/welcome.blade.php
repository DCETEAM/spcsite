<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta name="google-site-verification" content="YOUR_VERIFICATION_CODE" />
    <meta name="description" content="Senthil Plastic Containers (SPC) is a leading manufacturer of high-quality industrial plastic containers, buckets, and pails in Virudhunagar, Tamil Nadu. Serving Paint, Food, and Chemical industries.">
    <meta name="keywords" content="Senthil Plastic Containers, SPC Virudhunagar, plastic container manufacturer Tamil Nadu, industrial plastic buckets, food grade plastic containers, paint pails supplier">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta name="author" content="Senthil Plastic Containers">
    <meta name="language" content="English">
    <meta name="geo.region" content="IN-TN">
    <meta name="geo.placename" content="Virudhunagar, Tamil Nadu">
    <meta name="geo.position" content="9.5851;77.9570">
    <meta name="ICBM" content="9.5851, 77.9570">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Senthil Plastic Containers (SPC) | Industrial Plastic Packaging Solutions">
    <meta property="og:description" content="Durable, reliable, and high-quality plastic containers for all your industrial packaging needs. Manufactured with precision in Virudhunagar, Tamil Nadu.">
    <meta property="og:image" content="{{ asset('assets/img/item2.png') }}">
    <meta property="og:url" content="{{ url()->current() }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Senthil Plastic Containers (SPC) | Plastic Container Manufacturer">
    <meta name="twitter:description" content="High-quality plastic containers and packaging solutions manufactured by Senthil Plastic Containers, Virudhunagar, Tamil Nadu.">
    <meta name="twitter:image" content="{{ asset('assets/img/item2.png') }}">

    <title>Industrial Plastic Containers, Buckets & Pails Manufacturer | Senthil Plastic</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap"
        rel="stylesheet" />
</head>
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

html,
body {
    height: 100%;
    margin: 0;
    scroll-snap-type: y mandatory;
    scroll-behavior: smooth;

}

body {
    font-family: "Playfair Display", serif;
    line-height: 1.6;
    color: var(--dark);
    background-color: var(--light);
    overflow-x: hidden;
}

section {
    /* Full screen */
    scroll-snap-align: start;
    display: flex;
    align-items: center;
    /* Center content vertically */

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
    width: 90%;
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
    /* padding: 10px 0; */
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

.nav-menu .active {
    color: var(--accent);
    font-weight: 900;
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

.hamburger {
    display: none;
    cursor: pointer;
    font-size: 20px;
    color: #0f0707;
}

/* Hero Section */
.hero {
    position: relative;
    width: 100%;
    height: 90vh;
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
    border-radius: 20px;
    overflow: hidden;
}

.hero-video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: -1;
}

.hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.3);
    z-index: 0;
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
    position: relative;
    z-index: 2;
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
    background: #55C1FF;
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
    margin-top: 20px;
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

.about-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 50px;
    align-items: center;
}

.about-text {
    opacity: 0;
    transform: translateX(-50px);
}

.about-text h3 {
    font-size: 1.8rem;
    margin-bottom: 20px;
    color: var(--primary);
}

.about-text p {
    margin-bottom: 20px;
    color: var(--gray);
}

.about-image {
    position: relative;
    opacity: 0;
    transform: translateX(50px);
}

.about-img {
    width: 100%;
    border-radius: 10px;
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
}

.about-badge {
    position: absolute;
    bottom: -20px;
    right: -20px;
    background-color: var(--accent);
    color: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 10px 20px rgba(255, 154, 61, 0.3);
    transform: rotate(5deg);
}

/* About Commitments Section */
.about-commitments {
    padding: 80px 20px;
    background: #f9f9f9;
}

.about-commitments .section-title {
    font-size: 2.0rem;
    font-weight: 700;
    text-align: center;
    margin-bottom: 60px;
    color: #333;
    position: relative;
}

.about-commitments .section-title::after {
    content: "";
    display: block;
    width: 70px;
    height: 4px;
    background: var(--accent, #00a86b);
    margin: 12px auto 0;
    border-radius: 2px;
}

/* Flexbox Layout for Each Item */
.about-item {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 70px;
    gap: 40px;
    flex-wrap: wrap;
}

.about-item.reverse {
    flex-direction: row-reverse;
}

.about-text {
    flex: 1;
    min-width: 300px;
}

.about-text h3 {
    font-size: 1.8rem;
    margin-bottom: 20px;
    color: #222;
}

.about-text p {
    font-size: 1rem;
    color: #555;
    text-align: justify;
    line-height: 1.7;
}

.about-image {
    flex: 1;
    min-width: 250px;
    height: auto;
}

.about-image img {
    width: 100%;
    height: 400px;
    border-radius: 15px;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

.about-image img:hover {
    transform: scale(1.15);
}

/* Responsive */
@media (max-width: 768px) {
    .about-item {
        flex-direction: column;
        text-align: center;
    }

    .hero-prev,
    .hero-next {
        visibility: hidden;
    }

    .about-commitments .section-title {
        font-size: 1.5rem;
    }

    .container {
        width: auto;
        padding: 10px;
    }

    .hero {
        /* height: 180px !important; */
        /* let section adjust */

    }

    .about-commitments {
        padding: 20px;
    }


    .hero .container {
        height: auto;
        padding: 20px;
    }

    .about-item.reverse {
        flex-direction: column;
    }

    .about-text {
        margin-bottom: 20px;
    }

    header.scrolled {
        padding: 1px 0;
    }

}

.facility-panel-split {
    display: flex;
    flex-wrap: wrap;
    border-radius: 15px;
    overflow: hidden;
    margin-bottom: 30px;
    width: 100%;
    height: auto;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    transition: transform 0.3s ease;
}

.facility-panel-split:hover {
    transform: scale(1.02);
}

.facility-image {
    flex: 1 1 50%;
    /* min-height: 400px; */
    background-size: cover;
    background-position: center;
}

.facility-content {
    flex: 1 1 50%;
    background: #212529;
    /* Dark background for readability */
    color: #fff;
    padding: 40px;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.facility-content h3 {
    font-size: 2rem;
    margin-bottom: 15px;
}

.facility-content p {
    font-size: 1rem;
    line-height: 1.6;
    text-align: justify;
    margin-bottom: 20px;
}

.facility-content .btn-outline {
    width: 50%;
    padding: 10px 20px;
    border: 2px solid #fff;
    color: #fff;
    align-items: center;
    /* border-radius: 8px; */
    transition: all 0.3s ease;
}

.facility-content .btn-outline:hover {
    background-color: #fff;
    color: #000;
}

/* Responsive for mobile */
@media (max-width: 768px) {
    .facility-panel-split {
        flex-direction: column;
    }

    .facility-image,
    .facility-content {
        flex: 1 1 100%;
        min-height: 200px;
    }

    .facility-content {
        padding: 25px;
    }
}

/* Why Choose Us Section */
.why-choose-us {
    padding: 80px 20px;
    background: #f7faff;
    text-align: center;
}

.section-header {
    max-width: 800px;
    margin: 0 auto 50px;
}

.section-title {
    font-size: 2.2rem;
    font-weight: 700;
    margin-bottom: 15px;
    color: #1a2a4f;
}

.section-header p {
    font-size: 1rem;
    color: #555;
    line-height: 1.6;
}

/* Stats Grid */
.stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 30px;
    margin-bottom: 30px;
}

.stat-box {
    background: #fff;
    padding: 20px;
    border-radius: 14px;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.06);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.stat-box:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 28px rgba(0, 0, 0, 0.12);
}

.stat-box i {
    font-size: 2rem;
    color: var(--accent);
    margin-bottom: 12px;
}

.stat-box h3 {
    font-size: 1.8rem;
    font-weight: 700;
    color: #222;
    margin-bottom: 8px;
}

.stat-box p {
    font-size: 0.95rem;
    color: #555;
}

/* Certifications Row */
.certifications {
    display: flex;
    flex-wrap: wrap;
    gap: 25px;
    justify-content: center;
    align-items: center;
}

.certifications img {
    height: 70px;
    object-fit: contain;
    /* filter: grayscale(100%); */
    transition: filter 0.3s ease;
}

.certifications img:hover {
    filter: grayscale(0);
}

/* Section Base */
/* Section */
.product-categories {
    padding: 80px 0px !important;
    background: rgb(224 236 251 / 25%);
    text-align: center;
}

.p20padding {
    padding: 40px 20px 20px 40px;
}

.section-title {
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 40px;
    color: #222;
    opacity: 0;
    transform: translateY(30px);
    transition: opacity 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275), transform 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

/* Grid */
.categories-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
}

/* Card */
.category-card {
    position: relative;
    height: 230px;
    border-radius: 16px;
    overflow: hidden;
    background-size: cover;
    background-position: center;
    transition: transform 0.4s ease, box-shadow 0.4s ease;
    cursor: pointer;
}

/* Overlay */
.category-card .overlay {
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.25);
    transition: background 0.4s ease;
}

/* Title */
.category-card h3 {
    position: absolute;
    bottom: 20px;
    left: 20px;
    right: 20px;
    color: #fff;
    font-size: 1.3rem;
    font-weight: 600;
    text-align: left;
    z-index: 2;
}

.category-card:hover {
    transform: scale(1.05);
}


/* Responsive */
@media (max-width: 992px) {
    .categories-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 600px) {
    .categories-grid {
        grid-template-columns: 1fr;
    }
}

/* Product Grid */
.product-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 30px;
    margin: 20px;
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
    background: var(--accent);
    color: #fff;
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
    background: var(--accent);

    color: #fff;
}

.view-btn:hover {
    background: linear-gradient(90deg, #F7CE66, #FCA382);
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

/* ============================= */
/* ✅ Responsive Design Updates  */
/* ============================= */

/* Tablets (<=992px) */
@media (max-width: 992px) {
    .categories-grid {
        grid-template-columns: repeat(2, 1fr);
        /* 2 per row */
    }

    .product-grid {
        grid-template-columns: repeat(2, 1fr);
        /* 2 products per row */
    }

    .product-card {
        margin: 10px;
    }
}

/* Mobile (<=768px) */
@media (max-width: 768px) {
    .section-title {
        font-size: 1.6rem;
        margin-bottom: 30px;
    }

    .categories-grid {
        grid-template-columns: 1fr;
        /* 1 per row */
        gap: 20px;
    }

    .category-card {
        height: 0px;
        /* reduce height */
    }

    .product-grid {
        grid-template-columns: 1fr;
        /* 1 product per row */
        gap: 20px;
    }

    .product-card {
        padding: 10px;
    }

    .product-info h3 {
        font-size: 1rem;
    }

    .price {
        font-size: 1rem;
    }

    .btn-group {
        flex-direction: column;
        /* stack buttons */
    }

    .view-btn,
    .cart-btn {
        width: 100%;
        font-size: 0.9rem;
    }
}

/* Small Mobile (<=480px) */
@media (max-width: 480px) {
    .section-title {
        font-size: 1.4rem;
    }

    section {
        display: block;
    }

    .customer-testimonials {
        margin: 0px !important;
    }

    .facility-content h3 {
        font-size: 18px;
    }

    /* Button */
    .btn.btn-outline {
        padding: 10px 25px;
        border: 2px solidvar(--accent);
        border-radius: 30px;
        color: var(--accent);
        background: rgba(255, 255, 255, 0.1);
        text-decoration: none;
        font-weight: 600;
        font-size: 10px;
        transition: 0.3s ease;
    }

    .nav-link {
        text-decoration: none;
        color: rgb(248, 240, 240);
        font-weight: 900;
        position: relative;
        font-size: 18px;
        padding: 5px 0;
        transition: var(--transition);
    }

    .category-card {
        height: 180px;
    }

    .category-card h3 {
        font-size: 1rem;
        bottom: 15px;
    }

    .product-info h3 {
        font-size: 0.95rem;
    }

    .price {
        font-size: 0.95rem;
    }

    .wishlist {
        height: 32px;
        width: 32px;
        font-size: 18px;
        top: 20px;
        right: 20px;
    }

    .p20padding {
        padding: 0px;
    }

    .badge {
        font-size: 0.7rem;
        padding: 5px 10px;
        top: 20px;
        left: 20px;
    }
}

.promo-container {
    display: flex;
    align-items: center;
    background: #19232d;
    /* dark background */
    padding: 20px 30px;
    border-radius: 12px;
    width: 100%;
}

.promo-image img {
    border-radius: 50%;
    margin-left: 50px;
    border: 6px solid var(--accent);
    width: 120px;
    height: 120px;
    object-fit: cover;
    margin-right: 24px;
}

.promo-text {
    flex-grow: 0.5;
    color: white;
    font-family: 'Pacifico', cursive;
    /* or any stylish font */
}

.promo-subtitle {
    font-size: 1.4rem;
    margin: 0 0 6px 0;
    font-weight: 500;
    font-style: italic;
}

.promo-discount {
    font-size: 2.6rem;
    margin: 0;
    font-weight: 700;
}

.promo-discount span {
    font-size: 1.2rem;
    font-style: italic;
    opacity: 0.75;
    margin-left: 6px;
}

.promo-cta button {
    background: var(--accent);
    border: none;
    color: white;
    font-weight: 600;
    font-size: 1rem;
    padding: 12px 24px;
    border-radius: 30px;
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 8px;
    transition: background 0.3s;
}

.promo-cta button:hover {
    background: #e1a935;
}

.cart-icon {
    font-size: 1.3rem;
}

.parent-container {
    display: flex;
    justify-content: center;
    /* horizontal center */
    align-items: center;
    /* vertical center */
    /* or any height */
    /* optionally give width */
}

/* View More Button */
.readmore.btn {
    display: inline-block;
    padding: 12px 24px;
    background: var(--accent, #00a86b);
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
    border: 2px solid var(--accent, #00a86b);
    color: var(--accent, #00a86b);
}

.btn-outline:hover {
    background: var(--accent, #00a86b);
    color: #fff;
}

/* Responsive */
@media (max-width: 768px) {
    .category-banner {
        height: 180px;
    }

    .product-card {
        /* width: 45%; */
    }
}

/* Blog Section */
.blog-section {
    padding: 30px 20px;
    text-align: center;
}

.section-header .tag {
    display: inline-block;
    padding: 6px 14px;
    background: #dee2e6;
    border-radius: 20px;
    font-size: 0.9rem;
    color: #444;
    margin-bottom: 12px;
}

.section-title {
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 50px;
    color: #222;
}

/* Blog Grid */
.blog-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 25px;
}

.blog-card {
    border-radius: 16px;
    overflow: hidden;
    background: #fff;
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.08);
    transition: transform 0.4s ease, box-shadow 0.4s ease;
}

.blog-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 28px rgba(0, 0, 0, 0.15);
}

.blog-image {
    position: relative;
}

.blog-image img {
    width: 100%;
    display: block;
    height: 220px;
    object-fit: cover;
}

.blog-date {
    position: absolute;
    bottom: 12px;
    left: 12px;
    background: var(--accent);
    color: #fff;
    padding: 8px 12px;
    font-weight: bold;
    border-radius: 6px;
    font-size: 0.9rem;
}

.blog-date span {
    display: block;
    font-size: 1.2rem;
    font-weight: 700;
}

/* Blog Content */
.blog-content {
    padding: 18px;
    text-align: left;
}

.blog-content h3 {
    font-size: 1.1rem;
    font-weight: 600;
    margin: 0;
}

.blog-content h3 a {
    text-decoration: none;
    color: #222;
    transition: color 0.3s ease;
}

.blog-content h3 a:hover {
    color: var(--accent);
}

/* Facilities Tabs Section */
.facilities-tabs {
    padding: 80px 0px !important;
    background: #fff;
    text-align: center;
}

.facilities-tabs .section-title {
    font-size: 2rem;
    margin-bottom: 50px;
    color: #222;
}

/* Circles Nav */
.facilities-nav {
    display: flex;
    justify-content: center;
    gap: 40px;
    margin-bottom: 40px;
}

.facility-circle {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    background: #f0f0f0;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 0.95rem;
    font-weight: 600;
    text-align: center;
    padding: 20px;
    cursor: pointer;
    transition: all 0.3s ease;
}

.facility-circle.active {
    background: var(--accent, #00a86b);
    color: #fff;
    transform: scale(1.1);
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
}

/* Panels */
.facilities-content {
    position: relative;
    /* max-width: 1000px; */
    width: 90%;
    height: auto;
    margin: 0 auto;
}

.facility-panel {
    display: none;
    position: relative;
    background-size: cover;
    background-position: center;
    border-radius: 15px;
    padding: 80px 20px;
    min-height: 350px;
    color: #fff;
    overflow: hidden;
}

.facility-panel.active {
    display: block;
    animation: fadeIn 0.6s ease;
}

.facility-panel .overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.25);
    border-radius: 15px;
    z-index: 1;
}

.facility-inner {
    position: relative;
    z-index: 2;
    max-width: 700px;
    margin: 0 auto;
}

.facility-inner h3 {
    font-size: 2.5rem;
    margin-bottom: 15px;
}

.facility-inner p {
    font-size: 1.05rem;
    font-weight: 700;
    line-height: 1.7;
    margin-bottom: 20px;
}

/* Button */
.btn.btn-outline {
    padding: 10px 25px;
    border: 2px solidvar(--accent);
    border-radius: 30px;
    color: var(--accent);
    background: rgba(255, 255, 255, 0.1);
    text-decoration: none;
    font-weight: 600;
    transition: 0.3s ease;
}

.btn.btn-outline:hover {
    background: #fff;
    color: var(--accent, #00a86b);
}

/* Animation */
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(20px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Responsive */
@media (max-width: 768px) {
    .facilities-nav {
        /* flex-direction: column; */
        gap: 20px;
    }

    .facility-circle {
        width: 100px;
        height: 100px;
        font-size: 0.9rem;
    }
}


/* Commitments Section */
.commitments {
    padding: 80px 0px;
    background: #fff;
}

.commitments .section-title {
    text-align: center;
    font-size: 2.4rem;
    font-weight: 700;
    margin-bottom: 50px;
    color: #222;
}

.commitments-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 30px;
}

.commitment {
    position: relative;
}

.commitment-shape {
    position: relative;
    background-size: cover;
    background-position: center;
    clip-path: polygon(50% 0%, 95% 25%, 95% 75%, 50% 100%, 5% 75%, 5% 25%);
    height: 320px;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    border-radius: 10px;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.commitment-shape .overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.55);
    z-index: 1;
}

.commitment-text {
    position: relative;
    z-index: 2;
    color: #fff;
    text-align: center;
    padding: 20px;
}

.commitment-text h3 {
    font-size: 1.3rem;
    margin-bottom: 10px;
    font-weight: 600;
}

.commitment-text p {
    font-size: 0.95rem;
    line-height: 1.5;
}

/* Responsive */
@media (max-width: 768px) {
    .commitment-shape {
        height: 260px;
    }

    .commitment-text h3 {
        font-size: 1.1rem;
    }

    .commitment-text p {
        font-size: 0.9rem;
    }

    .about-text h3 {
        font-size: 1.3rem;
    }

    .section-title {
        font-size: 1.3rem;
    }

    .facilities-tabs .section-title {
        font-size: 1.3rem;
    }

    .facility-inner h3 {
        font-size: 1.5rem;
    }
}


/* Testimonials */
.testimonials {
    padding: 100px 0;
    background-color: white;
}

.testimonial-slider {
    position: relative;
    max-width: 800px;
    margin: 0 auto;
    overflow: hidden;
}

.testimonial-track {
    display: flex;
    transition: transform 0.5s ease;
}

.testimonial-slide {
    min-width: 100%;
    padding: 0 20px;
    text-align: center;
}

.testimonial-text {
    font-size: 1.2rem;
    font-style: italic;
    margin-bottom: 30px;
    color: var(--dark);
    position: relative;
}

.testimonial-text:before,
.testimonial-text:after {
    content: '"';
    font-size: 4rem;
    color: var(--secondary);
    opacity: 0.3;
    position: absolute;
}

.testimonial-text:before {
    top: -20px;
    left: -30px;
}

.testimonial-text:after {
    bottom: -40px;
    right: -30px;
}

.testimonial-author {
    font-weight: 600;
    color: var(--primary);
}

.testimonial-role {
    color: var(--gray);
    font-size: 0.9rem;
}

.slider-nav {
    display: flex;
    justify-content: center;
    margin-top: 30px;
}

.slider-dot {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background-color: #ddd;
    margin: 0 5px;
    cursor: pointer;
    transition: var(--transition);
}

.slider-dot.active {
    background-color: var(--accent);
    transform: scale(1.2);
}

/* Contact */
.contact {
    padding: 80px 0;
    background: #80c0e3;
    color: white;
}

.contact .section-title {
    color: white;
}

.contact .section-title:after {
    background-color: var(--accent);
}

.contact-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 50px;
}

.contact-info {
    opacity: 0;
    transform: translateX(-50px);
}

.contact-item {
    display: flex;
    align-items: center;
    margin-bottom: 30px;
}

.contact-icon {
    width: 50px;
    height: 50px;
    background-color: rgba(255, 255, 255, 0.1);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 20px;
    font-size: 1.2rem;
}

.contact-form {
    opacity: 0;
    transform: translateX(50px);
}

.form-group {
    margin-bottom: 20px;
}

.form-control {
    width: 100%;
    padding: 12px 15px;
    border: none;
    border-radius: 5px;
    background-color: rgba(255, 255, 255, 0.9);
    font-family: "Montserrat", sans-serif;
    transition: var(--transition);
}

.form-control:focus {
    outline: none;
    background-color: white;
    box-shadow: 0 0 0 2px var(--accent);
}

textarea.form-control {
    min-height: 150px;
    resize: vertical;
}

.customer-testimonials {
    padding: 80px 20px;

}



.section-subtitle {
    text-align: center;
    color: var(--text-light);
    margin-bottom: 30px;
    font-size: 1rem;
}

.testimonial-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 30px;
    padding-top: 50px;
    justify-content: center;
}

.testimonial-card {
    background: var(--bg-light);
    border-radius: 25px;
    padding: 40px 25px 30px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
    position: relative;
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.testimonial-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
}

.quote {
    position: absolute;
    top: -50px;
    right: 25px;
    font-size: 80px;
    color: #45aae3;
    opacity: 0.3;
    transform: rotate(180deg);
    user-select: none;
}

.testimonial-card p {
    color: #555;
    line-height: 1.7;
    margin-bottom: 25px;
    position: relative;
    z-index: 2;
}

.user {
    margin-top: 20px;
    display: flex;
    align-items: center;
    gap: 12px;
}

.user img {
    width: 50px;
    height: 50px;

    object-fit: cover;
}

.user h4 {
    margin: 0;
    font-size: 16px;
    font-weight: 700;
}

.user p {
    margin: 0;
    font-size: 13px;
    color: var(--text-light);
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
    /* margin-bottom: 40px; */
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
        padding: 0;
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
        flex-wrap: nowrap;
    }

    .footer-content {
        grid-template-columns: 1fr;
    }

    .hero h1 {
        font-size: 2rem;
    }
}

.icon-circle {
    width: 60px;
    height: 60px;
    background: #45aae3;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0 auto;
}

.icon-circle i {
    color: #fff;
    font-size: 32px;
}

.contact p {
    margin: 0;
    font-size: 16px;
    color: #1d1818;
}
</style>
</head>

<body>
    <!-- Header -->
    <header id="header">
        <div class="container nav-container">
            <div style="display:flex;align-items:center;gap:8px;">
                <img src="{{ asset('assets/img/item2.png') }}" style="width:40px;height:40px;display:block;" alt="Logo"
                    class="logo-image">
                <a href="#" class="logo" style="margin:0;">Senthil Plastic Containers<span>&nbsp;Private
                        Limited</span></a>
            </div>
            <div class="hamburger" id="hamburger">
                <i class="fas fa-bars"></i>
            </div>
            <ul class="nav-menu  p-0" id="nav-menu">
                <li class="nav-item"><a href="{{ route('home') }}" class="nav-link active">Home</a></li>
                <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
                <li class="nav-item">
                    <a href="{{ route('products.index') }}" class="nav-link">Products</a>
                </li>
                <li class="nav-item">

                    <a href="#why-us" class="nav-link">Why choose us</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('blogs.list') }}" class="nav-link">Blog</a>

                </li>
                <li class="nav-item">
                    <a href="{{ route('contact') }}" class="nav-link ">Contact</a>
                </li>
            </ul>
        </div>
    </header>

    <section class="hero" id="home">
        <div class="hero-slider">
            <div class="hero-slide active">
                <video autoplay muted loop playsinline class="hero-video">
                    <source src="{{ asset('assets/img/MVI_5417.MP4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="hero-overlay"></div>
                <div class="hero-content">
                </div>
            </div>
            <div class="hero-slide">
                <video muted loop playsinline class="hero-video">
                    <source src="{{ asset('assets/img/MVI_5413.MP4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="hero-overlay"></div>
                <div class="container">
                    <div class="hero-content">
                    </div>
                </div>
            </div>
            <div class="hero-slide">
                <video muted loop playsinline class="hero-video">
                    <source src="{{ asset('assets/img/MVI_5411.MP4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="hero-overlay"></div>
                <div class="container">
                    <div class="hero-content">
                    </div>
                </div>
            </div>
            

            <button class="hero-prev">&#10094;</button>
            <button class="hero-next">&#10095;</button>

            <div class="hero-slider-nav">
                <span class="hero-dot active" data-slide="0"></span>
                <span class="hero-dot" data-slide="1"></span>
                <span class="hero-dot" data-slide="2"></span>
                <span class="hero-dot" data-slide="3"></span>
                <span class="hero-dot" data-slide="4"></span>
            </div>
        </div>
    </section>
    @php
    $data = \App\Models\WhyChooseUs::first();
    $certificates = \App\Models\WhyUsCertificate::all();
    @endphp

    <section class="why-choose-us" id="why-us">
        <div class="container">

            <!-- =========================
             SECTION TITLE & DESCRIPTION
        ============================== -->
            <div class="section-header">
                <h2 class="section-title">
                    {{ $data->title ?? 'Why Leading Brands Choose Us' }}
                </h2>

                <p style="text-align: justify; text-justify: inter-word;">
                    {!! $data->description ?? 'Welcome to our company. Please add content from admin panel.' !!}
                </p>
            </div>

            <!-- =========================
             STATS SECTION
        ============================== -->
            <div class="stats-grid">

                @for ($i = 1; $i <= 4; $i++) @php $icon=$data->{'stat' . $i . '_icon'} ?? null;
                    $value = $data->{'stat' . $i . '_value'} ?? null;
                    $title = $data->{'stat' . $i . '_title'} ?? null;
                    @endphp

                    @if ($icon || $value || $title)
                    <div class="stat-box">
                        <i class="{{ $icon }}"></i>
                        <h3>{{ $value }}</h3>
                        <p>{{ $title }}</p>
                    </div>
                    @endif
                    @endfor

            </div>

            <!-- =========================
             CERTIFICATES SECTION
        ============================== -->
            <div class="certifications">
                @foreach ($certificates as $cert)
                <img src="{{ asset('storage/' . $cert->image) }}" alt="Certificate"
                    style="height:90px;object-fit:contain;">
                @endforeach
            </div>

        </div>
    </section>


    <section class="about-commitments mt-4" id="about">
        <div class="container">
            <h2 class="section-title">{{ $about->title ?? 'About Us' }}</h2>

            <div class="about-item">
                <div class="about-text">
                    @if (!empty($about->description))
                    <p>{!! nl2br(e($about->description)) !!}</p>
                    @else
                    <p>No About content added yet. Please update it from the admin panel.</p>
                    @endif
                </div>

                <div class="about-image">
                    @if (!empty($about->image))
                    <img src="{{ asset($about->image) }}" alt="{{ $about->title ?? 'About Image' }}">
                    @else
                    <img src="{{ asset('assets/img/default.jpg') }}" alt="Default About Image">
                    @endif
                </div>
            </div>
        </div>
    </section>
    <section class="product-categories mt-4" id="products">
        <div class="container">
            <h2 class="section-title">Product Categories</h2>

            <div class="categories-grid">

                @foreach ($categories as $cat)
                <a href="{{ route('products.category', $cat->slug) }}" class="category-link">

                    <div class="category-card"
                        data-bg="{{ $cat->maincategory_image ? asset('storage/' . $cat->maincategory_image) : asset('assets/img/default.jpg') }}">

                        <div class="overlay"></div>
                        <h3>{{ $cat->maincategory_name }}</h3>

                    </div>

                </a>
                @endforeach

            </div>
        </div>
    </section>




    <!-- JS for background image -->
    <script>
    document.querySelectorAll('.category-card').forEach(card => {
        const bg = card.getAttribute('data-bg');
        if (bg) {
            card.style.backgroundImage = `url('${bg}')`;
        }
    });
    </script>



    @php
    $facilities = \App\Models\Facility::orderBy('id')->get();
    @endphp

    <section class="facilities-tabs mt-8" id="facilities">
        <div class="container">

            <h2 class="section-title">Our Technologies</h2>

            {{-- ------------------ NAV ------------------ --}}
            <div class="facilities-nav">
                @foreach ($facilities as $facility)
                <div class="facility-circle {{ $loop->first ? 'active' : '' }}" data-tab="{{ $loop->iteration }}">
                    <span>{{ $facility->title }}</span>
                </div>
                @endforeach
            </div>

            {{-- ------------------ CONTENT PANELS ------------------ --}}
            <div class="facilities-content">

                @foreach ($facilities as $facility)
                <div class="facility-panel-split {{ $loop->first ? 'active' : '' }}" id="tab-{{ $loop->iteration }}">

                    {{-- IMAGE (background-image style) --}}
                    <div class="facility-image"
                        style="background-image: url('{{ asset("storage/{$facility->image}") }}');">
                    </div>

                    <div class="facility-content">
                        <h3>{{ $facility->title }}</h3>

                        <p>{{ $facility->description }}</p>

                        <center>
                            <a href="{{ route('facility') }}" class="btn btn-outline">View More</a>
                        </center>
                    </div>

                </div>
                @endforeach

            </div>
        </div>
    </section>

    {{-- ------------------ JS FOR TAB SWITCHING ------------------ --}}
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const tabs = document.querySelectorAll('.facility-circle');
        const panels = document.querySelectorAll('.facility-panel-split');

        tabs.forEach(tab => {
            tab.addEventListener('click', function() {
                const tabId = this.dataset.tab;

                tabs.forEach(t => t.classList.remove('active'));
                panels.forEach(p => p.classList.remove('active'));

                this.classList.add('active');
                document.getElementById('tab-' + tabId).classList.add('active');
            });
        });
    });
    </script>

    <style>
    @media (max-width: 767px) {
        #facilities {
            display: none !important;
        }
    }
    </style>




    {{-- <section class="blog-section" id="blog">
    <div class="container">
        <div class="section-header">
            <span class="tag">OUR BLOG</span>
            <h2 class="section-title">Insights on Plastic Packaging & IML Technology</h2>
        </div>

        <div class="blog-grid">
            <div class="blog-card" onclick="window.location='{{ route('blog') }}'" style="cursor:pointer;">
    <div class="blog-image">
        <img src="{{ asset('assets/img/ecoai.png') }}" alt="Eco-friendly and sustainable plastic containers">
        <div class="blog-date">
            <span>16</span> Sep
        </div>
    </div>
    <div class="blog-content">
        <h3>
            <a href="{{ route('blog') }}">Eco-Friendly Plastic Containers: The Future of Packaging</a>
        </h3>
        <p>Discover how modern plastic containers are being designed with sustainability in mind — from
            recyclable materials to reduced carbon footprint.</p>
    </div>
    </div>

    <div class="blog-card" onclick="window.location='{{ route('blog') }}'" style="cursor:pointer;">
        <div class="blog-image">
            <img src="{{ asset('assets/img/blog2.png') }}" alt="Food-grade storage containers and safety compliance">
            <div class="blog-date">
                <span>18</span> Sep
            </div>
        </div>
        <div class="blog-content">
            <h3>
                <a href="{{ route('blog') }}">Why Food-Grade Plastic Containers Are the Safe Choice</a>
            </h3>
            <p>Learn the benefits of using food-safe certified plastic containers for storage and
                transportation in the food and beverage industry.</p>
        </div>
    </div>

    <div class="blog-card" onclick="window.location='{{ route('blog') }}'" style="cursor:pointer;">
        <div class="blog-image">
            <img src="{{ asset('assets/img/banner4 1.png') }}" alt="Industrial plastic drums and buckets for safety">
            <div class="blog-date">
                <span>21</span> Sep
            </div>
        </div>
        <div class="blog-content">
            <h3>
                <a href="{{ route('blog') }}">How Plastic Container Improve Safety in Industrial
                    Packaging</a>
            </h3>
            <p>From chemicals to paints, plastic Container offer durability, leak resistance, and
                cost-effectiveness for industrial applications.</p>
        </div>
    </div>
    </div>
    </div>
    </section> --}}



    <section class="customer-testimonials">
        <div class="container">
            <h2 class="section-title">What Our Customers Say About Our Packaging</h2>
            <p class="section-subtitle">Trusted by businesses across industries for quality, reliability, and service
            </p>

            <div class="testimonial-grid">
                <div class="testimonial-card">
                    <div class="quote">❝</div>
                    <p>We’ve truly enjoyed partnering with you over the past 15 years of business. Your well-planned
                        service, exceptional product quality, and prompt responses to our queries have always impressed
                        us.
                    </p>
                    <div class="user">
                        <img src="{{ asset('assets/img/user.png') }}" alt="Client photo from Paint Industry">
                        <div>
                            <h4>MAXBEN PAINTS</h4>

                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="quote">❝</div>
                    <p>"Excellent product and service. Responsive to requests and accommodate changes as much as
                        possible,We sincerely appreciate your continued excellence and commitment.
                        "</p>
                    <div class="user">
                        <img src="{{ asset('assets/img/user.png') }}" alt="Client photo from Food Industry">
                        <div>
                            <h4>Sriram Nagarajan</h4>

                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="quote">❝</div>
                    <p>"SPC's robust containers have excellent quality and provide outstanding service. Their attention
                        to detail and commitment to customer satisfaction sets them apart in the industry."</p>
                    <div class="user">
                        <img src="{{ asset('assets/img/user.png') }}" alt="Client photo from Agrochemical Industry">
                        <div>
                            <h4>Go Green</h4>

                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="quote">❝</div>
                    <p>"Exceptional quality and reliability. SPC has been our trusted partner for all our packaging
                        needs. Their dedicated support have significantly improved our operations and customer
                        satisfaction."</p>
                    <div class="user ">
                        <img src="{{ asset('assets/img/user.png') }}"
                            alt="Client photo from Pharma & Healthcare Sector">
                        <div>
                            <h4>HARIHARAPUTHIRAN PADMANABAN</h4>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- contactus --}}
    <section class="contact">
        @php
        use App\Models\ContactInfo;
        $contact = ContactInfo::first();
        @endphp

        <div class="container">
            <div class="row text-center justify-content-center">

                <!-- ABOUT COMPANY -->
                <div class="col-md-4 mb-4">
                    <div class="icon-circle mb-3">
                        <i class="fas fa-running"></i>
                    </div>
                    <h5 class="fw-bold mb-2">ABOUT COMPANY</h5>

                    @if (!empty($contact->about_lines))
                    @foreach ($contact->about_lines as $line)
                    <p>{{ $line }}</p>
                    @endforeach
                    @else
                    <p>Plastic Solutions</p>
                    <p>Manufacturing</p>
                    @endif
                </div>

                <!-- PHONE -->
                <div class="col-md-4 mb-4">
                    <div class="icon-circle mb-3">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <h5 class="fw-bold mb-2">PHONE</h5>

                    @if (!empty($contact->phone_numbers))
                    @foreach ($contact->phone_numbers as $phone)
                    <p class="mb-2"><i class="fas fa-phone me-2"></i>{{ $phone }}</p>
                    @endforeach
                    @endif

                    @if (!empty($contact->marketing_numbers))
                    @foreach ($contact->marketing_numbers as $mPhone)
                    <p class="mb-2"><i class="fas fa-user-tie me-2"></i>
                        Marketing Manager: {{ $mPhone }}
                    </p>
                    @endforeach
                    @endif

                    @if ($contact->email)
                    <p class="mb-2">
                        <i class="fas fa-envelope me-2"></i>{{ $contact->email }}
                    </p>
                    @endif
                </div>

                <!-- OFFICE LOCATION -->
                <div class="col-md-4 mb-4">
                    <div class="icon-circle mb-3">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h5 class="fw-bold mb-2">OUR OFFICE LOCATION</h5>
                    <p><i class="fas fa-map-marker-alt me-2"></i>{{ $contact->address ?? 'Address not available' }}</p>
                </div>

            </div>
        </div>
    </section>


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
                        <li><a href="#about">About</a></li>
                        <li><a href="{{ route('products.index') }}">Products</a></li>
                        <li><a href="#why-us">Why choose us</a></li>
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
        if (!track || dots.length === 0) return;
        track.style.transform = `translateX(-${slideIndex * 100}%)`;

        // Update active dot
        dots.forEach((dot) => dot.classList.remove("active"));
        if (dots[slideIndex]) {
            dots[slideIndex].classList.add("active");
        }

        currentSlide = slideIndex;
    }

    // Add click events to dots
    if (dots.length > 0) {
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
    }

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
    </script>
    <script>
    document.addEventListener('DOMContentLoaded', () => {
        const circles = document.querySelectorAll('.facility-circle');
        const panels = document.querySelectorAll('.facility-panel-split');

        circles.forEach(circle => {
            circle.addEventListener('click', () => {
                const tabId = circle.getAttribute('data-tab');

                // Remove active class from all circles
                circles.forEach(c => c.classList.remove('active'));
                // Add active class to clicked circle
                circle.classList.add('active');

                // Hide all panels
                panels.forEach(panel => panel.style.display = 'none');
                // Show selected panel
                const activePanel = document.getElementById(`tab-${tabId}`);
                if (activePanel) {
                    activePanel.style.display = 'flex'; // Flex because split layout
                }
            });
        });

        // Initialize: show first panel only
        panels.forEach((panel, index) => {
            panel.style.display = index === 0 ? 'flex' : 'none';
        });
    });
    </script>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const slides = document.querySelectorAll(".hero-slide");
        const dots = document.querySelectorAll(".hero-dot");
        const prevBtn = document.querySelector(".hero-prev");
        const nextBtn = document.querySelector(".hero-next");

        let currentIndex = 0;
        let slideInterval;

        function showSlide(index) {
            if (index < 0) index = slides.length - 1;
            if (index >= slides.length) index = 0;

            slides.forEach((slide, i) => {
                slide.classList.remove("active");
                dots[i].classList.remove("active");

                // Pause video if present
                const video = slide.querySelector('video');
                if (video) {
                    video.pause();
                }
            });

            slides[index].classList.add("active");
            dots[index].classList.add("active");

            // Play video if present
            const activeVideo = slides[index].querySelector('video');
            if (activeVideo) {
                activeVideo.play();
            }

            currentIndex = index;
        }

        function nextSlide() {
            showSlide(currentIndex + 1);
        }

        function prevSlide() {
            showSlide(currentIndex - 1);
        }

        // Auto Slide
        function startAutoSlide() {
            slideInterval = setInterval(nextSlide, 8000); // Increased to 8s for better video viewing
        }

        function stopAutoSlide() {
            clearInterval(slideInterval);
        }

        // Events
        dots.forEach(dot => {
            dot.addEventListener("click", () => {
                stopAutoSlide();
                showSlide(parseInt(dot.getAttribute("data-slide")));
                startAutoSlide();
            });
        });

        nextBtn.addEventListener("click", () => {
            stopAutoSlide();
            nextSlide();
            startAutoSlide();
        });

        prevBtn.addEventListener("click", () => {
            stopAutoSlide();
            prevSlide();
            startAutoSlide();
        });

        // Init
        showSlide(currentIndex);
        startAutoSlide();
    });
    </script>

</body>

</html>