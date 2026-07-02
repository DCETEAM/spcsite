<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    @include('partials.initial-loader-styles')
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
    @include('partials.site-fonts')
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
    --hero-navy: #001a3d;
    --hero-gold: #ffb800;
    --hero-blue: #3a9dff;
    --hero-stats-height: clamp(88px, 11vh, 104px);

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
    font-family: "Poppins", sans-serif;
    font-weight: 400;
    font-size: 18px;
    line-height: 1.6;
    color: var(--dark);
    background-color: var(--light);
    overflow-x: hidden;
}

section {
    scroll-snap-align: start;
    scroll-snap-stop: always;
    display: flex;
    align-items: center;
}

section.contact-footer-section {
    padding: 0;
    align-items: stretch;
    justify-content: flex-start;
    flex-direction: column;
    min-height: 100vh;
    min-height: 100dvh;
    height: 100vh;
    height: 100dvh;
    overflow: hidden;
    background: #0a1517;
}

h1,
h2,
h3,
h4,
h5 {
    font-family: "Poppins", sans-serif;
    font-weight: 700;
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
    top: 38px;
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
    font-family: "Poppins", sans-serif;

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
    font-weight: 600;
}

.nav-link {
    text-decoration: none;
    color: rgb(21, 18, 18);
    font-weight: 600;
    /* text-transform: uppercase; */
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

/* Top bar */
.site-topbar {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 1001;
    background: var(--hero-navy);
    color: rgba(255, 255, 255, 0.88);
    font-family: "Poppins", sans-serif;
    font-size: 0.78rem;
}

.site-topbar-inner {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 16px;
    padding: 9px 0;
    flex-wrap: wrap;
}

.site-topbar-left,
.site-topbar-right {
    display: flex;
    align-items: center;
    gap: 18px;
    flex-wrap: wrap;
}

.site-topbar a {
    color: rgba(255, 255, 255, 0.9);
    text-decoration: none;
}

.site-topbar a:hover {
    color: var(--hero-gold);
}

.site-topbar i {
    color: var(--hero-blue);
    margin-right: 6px;
}

.site-topbar-social {
    display: flex;
    gap: 12px;
}

.nav-quote-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 10px 20px;
    background: var(--hero-navy);
    color: #fff !important;
    font-family: "Poppins", sans-serif;
    font-size: 0.88rem;
    font-weight: 600;
    border-radius: 6px;
    text-decoration: none;
    margin-left: 12px;
    transition: 0.3s ease;
    white-space: nowrap;
}

.nav-quote-btn:hover {
    background: #002855;
    color: #fff !important;
}

/* Hero Section */
.hero {
    position: relative;
    width: 100%;
    min-height: 100vh;
    overflow: hidden;
    background: var(--hero-navy);
    margin-top: 38px;
}

.hero-slider {
    position: relative;
    width: 100%;
    min-height: calc(100vh - 38px);
    height: 100%;
    padding-bottom: var(--hero-stats-height);
}

.hero-slide {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    visibility: hidden;
    transition: opacity 1s ease, visibility 1s ease;
    overflow: hidden;
}

.hero-slide.active {
    opacity: 1;
    visibility: visible;
    z-index: 1;
}

.hero-video {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    transform: scale(1.08);
    transition: transform 9s ease-out;
    z-index: 0;
}

.hero-slide.active .hero-video {
    transform: scale(1);
}

.hero-overlay {
    position: absolute;
    inset: 0;
    z-index: 1;
    background: rgba(0, 26, 61, 0.35);
    pointer-events: none;
}

.hero-overlay::before,
.hero-overlay::after {
    display: none;
}

.hero .container {
    position: absolute;
    inset: 0;
    width: 100%;
    max-width: 1400px;
    margin: 0 auto;
    padding: clamp(100px, 13vh, 140px) clamp(32px, 5vw, 80px) calc(var(--hero-stats-height) + 28px);
    z-index: 3;
    display: flex;
    align-items: center;
    justify-content: flex-start;
    pointer-events: none;
}

.hero-content {
    max-width: 560px;
    width: 100%;
    position: relative;
    z-index: 3;
    text-align: left;
    pointer-events: auto;
    opacity: 0;
    transform: translateY(24px);
    transition: opacity 0.7s ease 0.25s, transform 0.7s cubic-bezier(0.22, 1, 0.36, 1) 0.25s;
}

.hero-slide.active .hero-content {
    opacity: 1;
    transform: translateY(0);
}

.hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 14px;
    margin-bottom: 20px;
}

.hero-badge-line {
    width: 36px;
    height: 2px;
    background: var(--hero-gold);
}

.hero-badge-text {
    font-size: 0.72rem;
    font-weight: 700;
    letter-spacing: 0.16em;
    text-transform: uppercase;
    color: var(--hero-gold);
}

.hero-tag {
    display: block;
    font-size: clamp(0.75rem, 1.1vw, 0.88rem);
    font-weight: 600;
    color: #cff4fc;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    margin-bottom: 14px;
}

.hero-content h1 {
    /* font-size: clamp(2rem, 4.5vw, 3.25rem); */
    font-weight: 700;
    color: #fff;
    text-align: left;
    line-height: 1.15;
    margin: 0 0 18px;
    letter-spacing: -0.01em;
    text-shadow: 0 2px 24px rgba(0, 0, 0, 0.45);
}

.hero-accent {
    color: var(--hero-blue);
}

.hero-sub {
    font-size: clamp(1rem, 1.5vw, 1.15rem);
    color: rgba(255, 255, 255, 0.95);
    margin: 0 0 22px;
    line-height: 1.55;
    text-shadow: 0 1px 12px rgba(0, 0, 0, 0.4);
}

.hero-sub strong {
    color: #fff;
    font-weight: 700;
}

.hero-desc {
    font-size: clamp(0.9rem, 1.2vw, 1rem);
    font-weight: 400;
    color: rgba(255, 255, 255, 0.78);
    line-height: 1.65;
    margin: 0 0 24px;
    max-width: 48ch;
}

.hero-actions {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    margin-bottom: 28px;
}

.hero-btn {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 13px 24px;
    font-size: 0.88rem;
    font-weight: 600;
    border-radius: 8px;
    text-decoration: none;
    transition: 0.3s ease;
}

.hero-btn-primary {
    background: var(--hero-blue);
    color: #fff;
    box-shadow: 0 8px 24px rgba(58, 157, 255, 0.35);
}

.hero-btn-primary:hover {
    background: #2b8ae8;
    color: #fff;
    transform: translateY(-2px);
}

.hero-btn-outline {
    background: transparent;
    color: #fff;
    border: 2px solid var(--hero-gold);
}

.hero-btn-outline:hover {
    background: rgba(255, 184, 0, 0.12);
    color: #fff;
}

.hero-features {
    display: flex;
    flex-wrap: wrap;
    gap: 10px 12px;
    list-style: none;
    padding: 0;
    margin: 0;
}

.hero-features li {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 0.82rem;
    font-weight: 500;
    color: rgba(255, 255, 255, 0.95);
    text-shadow: 0 1px 6px rgba(0, 0, 0, 0.3);
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px);
    border: 1px solid rgba(255, 255, 255, 0.14);
    padding: 4px 10px;
    border-radius: 8px;
    transition: background 0.3s ease, border-color 0.3s ease;
}

.hero-features li:hover {
    background: rgba(255, 255, 255, 0.16);
    border-color: rgba(255, 184, 0, 0.35);
}

.hero-features i {
    color: var(--hero-blue);
    font-size: 0.95rem;
}

.hero-slide-counter {
    position: absolute;
    right: clamp(20px, 4vw, 48px);
    top: clamp(80px, 12vh, 120px);
    z-index: 5;
    font-size: 0.85rem;
    font-weight: 600;
    color: rgba(255, 255, 255, 0.7);
    letter-spacing: 0.08em;
}

.hero-slide-counter span {
    color: var(--hero-gold);
    font-size: 1.1rem;
}

/* Hero bottom panels */
.hero-bottom-ui {
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 6;
    pointer-events: none;
}

.hero-bottom-ui > * {
    pointer-events: auto;
}

.hero-product-strip {
    background: #fff;
    margin: 0 clamp(16px, 3vw, 40px);
    border-radius: 14px 14px 0 0;
    padding: clamp(18px, 2.5vw, 28px) clamp(20px, 3vw, 32px);
    box-shadow: 0 -8px 40px rgba(0, 0, 0, 0.15);
}

.hero-strip-head {
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
    gap: 16px;
    margin-bottom: 18px;
    flex-wrap: wrap;
}

.hero-strip-head h3 {
    font-family: "Poppins", sans-serif;
    font-size: clamp(1rem, 1.8vw, 1.35rem);
    font-weight: 700;
    color: var(--hero-navy);
    margin: 0;
}

.hero-strip-head h3 span {
    color: var(--hero-blue);
}

.hero-strip-head p {
    font-family: "Poppins", sans-serif;
    font-size: 0.82rem;
    color: #6b7280;
    margin: 4px 0 0;
}

.hero-strip-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 14px;
}

.hero-strip-card {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 10px 12px;
    background: #f4f7fb;
    border-radius: 10px;
    text-decoration: none;
    transition: 0.3s ease;
    border: 1px solid #e8edf3;
}

.hero-strip-card:hover {
    background: #eef4fc;
    transform: translateY(-2px);
    box-shadow: 0 6px 18px rgba(0, 26, 61, 0.08);
}

.hero-strip-card img {
    width: 52px;
    height: 52px;
    object-fit: contain;
    border-radius: 6px;
    background: #fff;
}

.hero-strip-card span {
    flex: 1;
    font-family: "Poppins", sans-serif;
    font-size: 0.78rem;
    font-weight: 600;
    color: var(--hero-navy);
    line-height: 1.35;
}

.hero-strip-card i {
    color: var(--hero-blue);
    font-size: 0.85rem;
}

.hero-stats-bar {
    display: flex;
    align-items: stretch;
    width: 100%;
    min-height: var(--hero-stats-height);
    background: linear-gradient(180deg, #002855 0%, var(--hero-navy) 100%);
    border-radius: 0;
    padding: clamp(14px, 2vh, 18px) clamp(20px, 4vw, 48px);
    box-shadow: 0 -6px 28px rgba(0, 0, 0, 0.22);
    border: none;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
}

.hero-stat {
    flex: 1;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: clamp(10px, 1.5vw, 14px);
    padding: 8px clamp(12px, 2vw, 20px);
    border-right: 1px solid rgba(255, 255, 255, 0.12);
    min-width: 0;
}

.hero-stat:last-child {
    border-right: none;
}

.hero-stat-icon {
    width: 46px;
    height: 46px;
    min-width: 46px;
    border-radius: 50%;
    background: var(--hero-blue);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.hero-stat-icon i {
    font-size: 1.05rem;
    color: var(--hero-navy);
}

.hero-stat-text strong {
    display: block;
    font-size: clamp(1rem, 1.5vw, 1.28rem);
    font-weight: 800;
    color: #fff;
    line-height: 1.2;
}

.hero-stat-text span {
    display: block;
    font-size: clamp(0.68rem, 1vw, 0.78rem);
    color: rgba(255, 255, 255, 0.75);
    line-height: 1.35;
    margin-top: 3px;
}

.hero .container.hero-container-right {
    max-width: 100%;
    justify-content: flex-start;
    padding-left: 50%;
    padding-right: clamp(32px, 5vw, 80px);
}

.hero-content-right {
    text-align: left;
    margin: 0;
    width: 100%;
    max-width: min(560px, calc(50vw - clamp(32px, 5vw, 80px)));
}

.hero-slide-left .hero-overlay {
    background: linear-gradient(
        90deg,
        rgba(0, 26, 61, 0.88) 0%,
        rgba(0, 26, 61, 0.72) 38%,
        rgba(0, 26, 61, 0.4) 52%,
        rgba(0, 26, 61, 0.12) 62%,
        transparent 78%
    );
}

.hero-slide-right .hero-overlay {
    background: linear-gradient(
        270deg,
        rgba(0, 26, 61, 0.97) 0%,
        rgba(0, 26, 61, 0.9) 22%,
        rgba(0, 26, 61, 0.78) 40%,
        rgba(0, 26, 61, 0.55) 52%,
        rgba(0, 26, 61, 0.28) 65%,
        rgba(0, 26, 61, 0.08) 78%,
        transparent 92%
    );
}

.hero-slide-right .hero-overlay::after {
    display: block;
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(
        270deg,
        rgba(0, 15, 40, 0.45) 0%,
        rgba(0, 15, 40, 0.25) 35%,
        transparent 60%
    );
    pointer-events: none;
}

.hero .container.hero-container-left {
    justify-content: flex-start;
}

.hero-badge-text,
.hero-tag {
    text-shadow: 0 1px 10px rgba(0, 0, 0, 0.35);
}

/* Slider progress */
.hero-progress {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 3px;
    background: rgba(255, 255, 255, 0.12);
    z-index: 7;
}

.hero-progress-bar {
    height: 100%;
    width: 0;
    background: var(--hero-gold);
    transition: width 0.1s linear;
}

/* Slider Dots */
.hero-slider-nav {
    display: none;
}

/* Arrows */
.hero-prev,
.hero-next {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    width: 52px;
    height: 58px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(60, 60, 60, 0.42);
    backdrop-filter: blur(6px);
    -webkit-backdrop-filter: blur(6px);
    color: #fff;
    border: 1px solid rgba(255, 255, 255, 0.12);
    padding: 0;
    cursor: pointer;
    font-size: 22px;
    border-radius: 6px;
    z-index: 4;
    transition: background 0.3s ease, transform 0.3s ease;
}

.hero-prev:hover,
.hero-next:hover {
    background: rgba(40, 40, 40, 0.62);
    transform: translateY(-50%) scale(1.04);
}

.hero-prev {
    left: clamp(12px, 2vw, 28px);
}

.hero-next {
    right: clamp(12px, 2vw, 28px);
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

/* Hero Visual (side image & shape) */

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
        width: 42px;
        height: 46px;
        font-size: 18px;
    }

    .hero .container {
        padding: clamp(90px, 12vh, 120px) clamp(20px, 5vw, 28px) calc(var(--hero-stats-height) + 20px);
        align-items: center;
    }

    .hero .container.hero-container-right {
        padding-left: clamp(20px, 5vw, 28px);
        padding-right: clamp(20px, 5vw, 28px);
    }

    .hero-slide-left .hero-overlay,
    .hero-slide-right .hero-overlay {
        background: linear-gradient(
            180deg,
            rgba(0, 26, 61, 0.82) 0%,
            rgba(0, 26, 61, 0.55) 45%,
            rgba(0, 26, 61, 0.35) 100%
        );
    }

    .hero-content,
    .hero-content-right {
        max-width: 100%;
    }

    .hero-content h1 {
        font-size: 1.5rem;
        margin-bottom: 12px;
    }

    .hero-desc,
    .hero-sub {
        font-size: 0.85rem;
    }

    .hero-tag {
        font-size: 0.65rem;
    }

    .hero-badge-text {
        font-size: 0.6rem;
    }

    .hero-btn {
        padding: 10px 18px;
        font-size: 0.75rem;
    }

    .hero-features li {
        font-size: 0.7rem;
        padding: 3px 8px;
    }

    .hero-actions {
        margin-bottom: 18px;
    }

    .hero-features {
        gap: 10px 14px;
    }

    .hero-strip-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .hero-stats-bar {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 0;
        padding: clamp(12px, 2vh, 16px) clamp(16px, 3vw, 24px);
    }

    .hero-stat {
        flex: none;
        border-right: 1px solid rgba(255, 255, 255, 0.1);
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        padding: 12px 8px;
        justify-content: flex-start;
        gap: 8px;
    }

    .hero-stat:nth-child(odd) {
        border-right: 1px solid rgba(255, 255, 255, 0.1);
    }

    .hero-stat:nth-child(even) {
        border-right: none;
    }

    .hero-stat:nth-last-child(-n+2) {
        border-bottom: none;
    }

    .hero-stat-icon {
        width: 40px;
        height: 40px;
        min-width: 40px;
    }

    .hero-stat-text strong {
        font-size: 1rem;
    }

    .hero-stat-text span {
        font-size: 0.65rem;
    }

    .hero-slide-counter {
        display: none;
    }

    .site-topbar-inner {
        padding: 8px 12px;
        gap: 12px;
    }

    .site-topbar-left,
    .site-topbar-right {
        gap: 12px;
    }

    .site-topbar-left span:nth-child(n+2) {
        display: none;
    }

    .site-topbar-social {
        gap: 10px;
    }

    .nav-quote-btn {
        padding: 8px 16px;
        font-size: 0.75rem;
        margin-left: 0;
    }

    .hero-tag {
        font-size: 0.78rem;
        margin-bottom: 14px;
    }

    .about-commitments .section-title {
        font-size: 1.5rem;
    }

    .container {
        width: auto;
        padding: 10px;
    }

    .hero {
        min-height: 100vh;
        height: auto;
    }

    .hero-slider {
        padding-bottom: var(--hero-stats-height);
    }

    .about-commitments {
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

    .stats-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }

    .stat-box {
        padding: 15px;
    }

    .stat-box i {
        font-size: 1.8rem;
    }

    .stat-box h3 {
        font-size: 1.5rem;
    }

    .stat-box p {
        font-size: 0.85rem;
    }

}

.facility-panel-split {
    display: none;
    border-radius: 24px;
    overflow: hidden;
    background: #fff;
    box-shadow: 0 20px 60px rgba(0, 26, 61, 0.12);
    border: 1px solid rgba(0, 26, 61, 0.06);
    min-height: 300px;
}

.facility-panel-split.active {
    display: grid;
    grid-template-columns: 1.1fr 1fr;
    animation: techSlideIn 0.55s cubic-bezier(0.4, 0, 0.2, 1);
}

@keyframes techSlideIn {
    from {
        opacity: 0;
        transform: translateX(24px);
    }

    to {
        opacity: 1;
        transform: translateX(0);
    }
}

.tech-slide-visual {
    position: relative;
    min-height: 280px;
    overflow: hidden;
}

.facility-image {
    width: 100%;
    height: 100%;
    min-height: 280px;
    background-size: cover;
    background-position: center;
    transition: transform 0.6s ease;
}

.facility-panel-split.active .facility-image {
    transform: scale(1);
}

.tech-slide-visual::after {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(0, 26, 61, 0.15) 0%, transparent 60%);
    pointer-events: none;
}

.tech-slide-badge {
    position: absolute;
    bottom: 24px;
    left: 24px;
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(8px);
    padding: 10px 18px;
    border-radius: 10px;
    font-weight: 700;
    font-size: 0.85rem;
    color: var(--hero-navy);
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
    z-index: 2;
}

.facility-content {
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding: clamp(20px, 3vw, 32px);
    background: linear-gradient(160deg, var(--hero-navy) 0%, #002855 100%);
    color: #fff;
    position: relative;
}

.facility-content::before {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    width: 200px;
    height: 200px;
    background: radial-gradient(circle, rgba(69, 170, 227, 0.2) 0%, transparent 70%);
    pointer-events: none;
}

.tech-slide-tag {
    font-size: 0.65rem;
    font-weight: 600;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    color: var(--hero-gold);
    margin-bottom: 8px;
    position: relative;
    z-index: 1;
}

.facility-content h3 {
    font-size: clamp(1rem, 1.6vw, 1.25rem);
    font-weight: 700;
    margin-bottom: 10px;
    line-height: 1.3;
    position: relative;
    z-index: 1;
}

.facility-content p {
    font-size: 0.875rem;
    line-height: 1.6;
    color: rgba(255, 255, 255, 0.85);
    margin-bottom: 16px;
    text-align: left;
    position: relative;
    z-index: 1;
}

.tech-cta-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    width: fit-content;
    padding: 10px 20px;
    background: var(--accent);
    color: #fff;
    text-decoration: none;
    border-radius: 50px;
    font-weight: 600;
    font-size: 0.85rem;
    transition: all 0.3s ease;
    border: 2px solid transparent;
    position: relative;
    z-index: 1;
}

.tech-cta-btn:hover {
    background: transparent;
    border-color: var(--accent);
    color: #fff;
    transform: translateX(4px);
}

.tech-cta-btn i {
    font-size: 0.8rem;
    transition: transform 0.3s ease;
}

.tech-cta-btn:hover i {
    transform: translateX(4px);
}

.facility-content .btn-outline {
    display: none;
}

@media (max-width: 992px) {
    .facility-panel-split.active {
        grid-template-columns: 1fr;
    }

    .tech-slide-visual,
    .facility-image {
        min-height: 220px;
    }
}

@media (max-width: 768px) {
    .facility-panel-split {
        min-height: auto;
    }

    .facility-content {
        padding: 28px 24px;
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
.product-categories {
    padding: 80px 0 100px 0;
    background: linear-gradient(135deg, #f8fafc 0%, #e0f2fe 100%);
    overflow: visible;
    position: relative;
}

.product-categories .section-title {
    color: #0369a1;
    margin-bottom: 50px;
    font-family: 'Playfair Display', serif;
}

.categories-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    overflow: visible;
}

/* Card */
.category-card {
    position: relative;
    height: 240px;
    border-radius: 20px;
    overflow: hidden;
    background-size: cover;
    background-position: center;
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    cursor: pointer;
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
    z-index: 1;
}

/* Overlay */
.category-card .overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(to top, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.1) 50%, transparent 100%);
    transition: all 0.4s ease;
}

/* Title */
.category-card h3 {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    color: #fff;
    font-size: 1.25rem;
    font-weight: 600;
    text-align: center;
    z-index: 2;
    padding: 25px 20px;
    margin: 0;
    transform: translateY(10px);
    transition: all 0.4s ease;
    text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
}

.category-card:hover {
    transform: translateY(-10px) scale(1.02);
    box-shadow: 0 20px 50px rgba(3, 105, 161, 0.2);
    z-index: 10;
}

.category-card:hover .overlay {
    background: linear-gradient(to top, rgba(3, 105, 161, 0.9) 0%, rgba(3, 105, 161, 0.3) 50%, rgba(3, 105, 161, 0.1) 100%);
}

.category-card:hover h3 {
    transform: translateY(-5px);
    font-size: 1.35rem;
}


/* Responsive */
@media (max-width: 1200px) {
    .categories-grid {
        grid-template-columns: repeat(3, 1fr);
    }
}

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
    /* object-fit: contain; */
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
        font-size: 1rem;
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
        font-weight: 600;
    text-transform: uppercase;
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
    font-family: 'Poppins', sans-serif;
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

/* Facilities / Technologies Section */
.facilities-tabs {
    padding: clamp(28px, 4vw, 48px) 0;
    background: linear-gradient(180deg, #f8fafc 0%, #eef4fc 50%, #f8fafc 100%);
    position: relative;
    overflow: hidden;
}

.facilities-tabs .container {
    width: 95%;
    max-width: 1100px;
}

.facilities-tabs::before {
    content: '';
    position: absolute;
    top: -120px;
    right: -80px;
    width: 400px;
    height: 400px;
    background: radial-gradient(circle, rgba(69, 170, 227, 0.12) 0%, transparent 70%);
    pointer-events: none;
}

.tech-section-header {
    text-align: center;
    max-width: 900px;
    margin: 60px auto 20px;
    position: relative;
    z-index: 1;
}

.tech-eyebrow {
    display: inline-block;
    font-size: 0.7rem;
    font-weight: 600;
    letter-spacing: 0.15em;
    text-transform: uppercase;
    color: var(--accent);
    background: rgba(69, 170, 227, 0.1);
    padding: 4px 14px;
    border-radius: 50px;
    margin-bottom: 8px;
}

.tech-subtitle {
    font-size: 0.95rem;
    color: #64748b;
    line-height: 1.6;
    margin-top: 6px;
    margin-bottom: 0;
}

.facilities-tabs .section-title {
    font-size: clamp(1.5rem, 2.5vw, 2rem);
    margin-top: 0;
    margin-bottom: 0;
    color: var(--hero-navy);
}

.facilities-tabs .section-title::after {
    display: none;
}

.tech-tab-bar {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 8px;
    margin: 0 auto 18px;
    padding: 8px;
    background: rgba(255, 255, 255, 0.7);
    border-radius: 16px;
    border: 1px solid rgba(0, 26, 61, 0.08);
    box-shadow: 0 4px 24px rgba(0, 26, 61, 0.06);
    width: 100%;
    max-width: 1000px;
    position: relative;
    z-index: 10;
    isolation: isolate;
}

.tech-tab {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    flex: 1 1 220px;
    min-width: 0;
    max-width: 100%;
    padding: 10px 14px;
    border: none;
    background: transparent;
    border-radius: 12px;
    cursor: pointer;
    transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
    font-family: 'Poppins', sans-serif;
    font-weight: 600;
    font-size: 0.85rem;
    color: #64748b;
    white-space: normal;
    text-align: center;
    line-height: 1.35;
    touch-action: manipulation;
}

.tech-tab-num,
.tech-tab-label {
    pointer-events: none;
    user-select: none;
}

.tech-tab:hover {
    color: var(--hero-navy);
    background: rgba(69, 170, 227, 0.08);
}

.tech-tab.active {
    background: var(--hero-navy);
    color: #fff;
    box-shadow: 0 4px 16px rgba(0, 26, 61, 0.2);
}

.tech-tab-num {
    font-size: 0.7rem;
    font-weight: 700;
    opacity: 0.6;
    letter-spacing: 0.05em;
}

.tech-tab.active .tech-tab-num {
    opacity: 0.9;
    color: var(--hero-gold);
}

.tech-slider-wrap {
    position: relative;
    z-index: 1;
}

.facilities-content {
    position: relative;
    width: 100%;
    max-width: 100%;
    margin: 0 auto;
}

.tech-slider-controls {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 20px;
    margin-top: 16px;
}

.tech-nav-btn {
    width: 48px;
    height: 48px;
    border-radius: 50%;
    border: 2px solid rgba(0, 26, 61, 0.12);
    background: #fff;
    color: var(--hero-navy);
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
}

.tech-nav-btn:hover {
    background: var(--hero-navy);
    color: #fff;
    border-color: var(--hero-navy);
}

.tech-dots {
    display: flex;
    gap: 8px;
    align-items: center;
}

.tech-dot {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: #cbd5e1;
    border: none;
    cursor: pointer;
    padding: 0;
    transition: all 0.3s ease;
}

.tech-dot.active {
    width: 28px;
    border-radius: 4px;
    background: var(--accent);
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

.btn.btn-outline {
    padding: 10px 25px;
    border: 2px solid var(--accent);
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

@media (max-width: 768px) {
    .tech-tab-bar {
        flex-wrap: nowrap;
        overflow-x: auto;
        justify-content: flex-start;
        max-width: 100%;
        -webkit-overflow-scrolling: touch;
        scrollbar-width: none;
    }

    .tech-tab-bar::-webkit-scrollbar {
        display: none;
    }

    .tech-tab {
        flex: 0 0 auto;
        padding: 12px 16px;
        font-size: 0.82rem;
    }

    .tech-tab-num {
        display: none;
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

/* Contact + Footer — single screen */
.contact-premium {
    flex: 1;
    display: grid;
    grid-template-columns: minmax(340px, 52%) 1fr;
    min-height: 0;
    align-items: stretch;
}

.contact-premium-aside {
    background: linear-gradient(165deg, var(--hero-navy) 0%, #001428 55%, #002855 100%);
    padding: clamp(20px, 3vh, 28px) clamp(24px, 3.5vw, 40px);
    display: flex;
    flex-direction: column;
    justify-content: center;
    color: #fff;
    position: relative;
    overflow: hidden;
}

.contact-premium-aside::before {
    content: '';
    position: absolute;
    top: -40px;
    right: -40px;
    width: 200px;
    height: 200px;
    background: radial-gradient(circle, rgba(69, 170, 227, 0.18) 0%, transparent 70%);
    pointer-events: none;
}

.contact-premium-aside::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 4px;
    height: 72px;
    background: linear-gradient(180deg, var(--hero-gold), transparent);
}

.contact-eyebrow {
    display: inline-block;
    font-size: 0.68rem;
    font-weight: 600;
    letter-spacing: 0.16em;
    text-transform: uppercase;
    color: var(--hero-gold);
    margin-bottom: 8px;
    position: relative;
    z-index: 1;
}

.contact-title {
    font-size: clamp(1rem, 3vw, 2.5rem);
    font-weight: 500;
    color: #fff;
    margin: 0 0 8px;
    line-height: 1.2;
    position: relative;
    z-index: 1;
    max-width: 520px;
}

.contact-subtitle {
    font-size: clamp(0.88rem, 1.2vw, 1rem);
    color: rgba(255, 255, 255, 0.72);
    margin: 0 0 14px;
    line-height: 1.55;
    max-width: 480px;
    position: relative;
    z-index: 1;
}

.contact-about-lines {
    display: flex;
    flex-direction: column;
    gap: 6px;
    position: relative;
    z-index: 1;
}

.contact-about-lines p {
    font-size: clamp(0.78rem, 1vw, 0.88rem);
    color: rgba(255, 255, 255, 0.55);
    margin: 0;
    padding-left: 14px;
    border-left: 1px solid rgba(255, 255, 255, 0.15);
}

.contact-premium-main {
    padding: clamp(20px, 3vh, 28px) clamp(24px, 3.5vw, 40px);
    display: flex;
    flex-direction: column;
    justify-content: center;
    background: #ffffff;
    min-height: 0;
    height: 100%;
}

.contact-info-list {
    display: flex;
    flex-direction: column;
    gap: 0;
}

.contact-info-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: clamp(12px, 2vw, 24px);
    padding: clamp(10px, 1.4vh, 14px) 0;
    border-bottom: 1px solid rgba(0, 26, 61, 0.07);
    align-items: start;
}

.contact-info-row:first-child {
    border-top: 1px solid rgba(0, 26, 61, 0.07);
}

.contact-info-item {
    display: grid;
    grid-template-columns: 40px 1fr;
    gap: 12px;
    padding: 0;
    align-items: start;
}

.contact-info-icon {
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--hero-navy);
    font-size: 1rem;
    border-radius: 12px;
    background: rgba(0, 26, 61, 0.04);
}

.contact-info-label {
    font-size: 0.65rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.14em;
    color: #94a3b8;
    margin-bottom: 5px;
}

.contact-info-value,
.contact-info-value a {
    font-size: clamp(0.85rem, 1.05vw, 0.95rem);
    color: var(--hero-navy);
    font-weight: 500;
    line-height: 1.55;
    text-decoration: none;
    margin: 0;
    word-break: break-word;
}

.contact-info-value a:hover {
    color: var(--accent);
}

.contact-info-lines {
    display: flex;
    flex-direction: column;
    gap: 4px;
}

.customer-testimonials {
    padding: clamp(60px, 8vw, 100px) 20px;
    background: var(--hero-navy);
    position: relative;
    overflow: hidden;
}

.customer-testimonials::before {
    content: '';
    position: absolute;
    inset: 0;
    background:
        radial-gradient(ellipse at 20% 50%, rgba(69, 170, 227, 0.15) 0%, transparent 50%),
        radial-gradient(ellipse at 80% 50%, rgba(255, 184, 0, 0.08) 0%, transparent 50%);
    pointer-events: none;
}

.customer-testimonials .container {
    position: relative;
    z-index: 1;
}

.testimonial-header {
    text-align: center;
    margin-bottom: 48px;
}

.customer-testimonials .section-title {
    color: #fff;
    font-size: clamp(1.75rem, 3vw, 2.5rem);
}

.customer-testimonials .tech-eyebrow {
    background: rgba(69, 170, 227, 0.2);
    color: var(--hero-blue);
}

.section-subtitle {
    text-align: center;
    color: rgba(255, 255, 255, 0.7);
    margin-bottom: 0;
    font-size: 1.05rem;
    margin-top: 12px;
}

.testimonial-carousel {
    position: relative;
    max-width: 1100px;
    margin: 0 auto;
}

.testimonial-carousel-viewport {
    overflow: hidden;
}

.testimonial-track {
    display: flex;
    align-items: stretch;
    gap: 32px;
    transition: transform 0.55s cubic-bezier(0.4, 0, 0.2, 1);
    will-change: transform;
}

.testimonial-track .testimonial-card {
    flex: 0 0 calc(50% - 16px);
    max-width: calc(50% - 16px);
    box-sizing: border-box;
    height: 300px;
    min-height: 300px;
    max-height: 300px;
}

.testimonial-card {
    background: rgba(255, 255, 255, 0.06);
    backdrop-filter: blur(12px);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 20px;
    padding: 28px 24px;
    position: relative;
    transition: background 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease;
    display: flex;
    flex-direction: column;
    height: 100%;
}

.testimonial-card:hover {
    background: rgba(255, 255, 255, 0.1);
    box-shadow: 0 16px 40px rgba(0, 0, 0, 0.18);
    border-color: rgba(69, 170, 227, 0.3);
}

.testimonial-stars {
    color: var(--hero-gold);
    font-size: 0.85rem;
    letter-spacing: 3px;
    margin-bottom: 14px;
    flex-shrink: 0;
}

.quote-icon {
    width: 40px;
    height: 40px;
    background: rgba(69, 170, 227, 0.2);
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--hero-blue);
    font-size: 0.9rem;
    margin-bottom: 16px;
    flex-shrink: 0;
}

.quote {
    display: none;
}

.testimonial-card p {
    color: rgba(255, 255, 255, 0.88);
    line-height: 1.65;
    font-size: 0.92rem;
    flex: 1 1 auto;
    min-height: 0;
    overflow-y: auto;
    margin-bottom: 0;
    padding-right: 6px;
    position: relative;
    z-index: 2;
    scrollbar-width: thin;
    scrollbar-color: rgba(255, 255, 255, 0.3) transparent;
}

.testimonial-card p::-webkit-scrollbar {
    width: 4px;
}

.testimonial-card p::-webkit-scrollbar-thumb {
    background: rgba(255, 255, 255, 0.28);
    border-radius: 4px;
}

.user {
    display: flex;
    align-items: center;
    gap: 14px;
    padding-top: 16px;
    margin-top: 16px;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
    flex-shrink: 0;
}

.user img {
    width: 48px;
    height: 48px;
    border-radius: 50%;
    object-fit: cover;
    border: 2px solid var(--accent);
    box-shadow: 0 0 0 3px rgba(69, 170, 227, 0.2);
    flex-shrink: 0;
}

.user h4 {
    margin: 0;
    font-size: 0.9rem;
    font-weight: 600;
    color: #fff;
    line-height: 1.3;
    word-break: break-word;
}

.user p {
    margin: 0;
    font-size: 13px;
    color: rgba(255, 255, 255, 0.6);
}

.testimonial-carousel-controls {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 20px;
    margin-top: 36px;
}

.testimonial-nav {
    width: 46px;
    height: 46px;
    border-radius: 50%;
    border: 2px solid rgba(255, 255, 255, 0.2);
    background: rgba(255, 255, 255, 0.08);
    color: #fff;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
}

.testimonial-nav:hover {
    background: var(--accent);
    border-color: var(--accent);
}

.testimonial-dots {
    display: flex;
    gap: 8px;
    align-items: center;
}

.testimonial-dot {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.3);
    border: none;
    cursor: pointer;
    padding: 0;
    transition: all 0.3s ease;
}

.testimonial-dot.active {
    width: 28px;
    border-radius: 4px;
    background: var(--accent);
}

@media (max-width: 768px) {
    .testimonial-track .testimonial-card {
        flex: 0 0 100%;
        max-width: 100%;
        height: 300px;
        min-height: 300px;
        max-height: 300px;
    }
}

/* Upgraded Footer */
.site-footer-compact {
    flex-shrink: 0;
    background: #0a1517;
    color: white;
    padding: 16px 0 10px;
    border-top: 1px solid rgba(255, 255, 255, 0.08);
    position: relative;
    margin: 0;
}

.site-footer-compact::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 2px;
    background: linear-gradient(90deg, transparent, var(--accent), var(--hero-gold), var(--accent), transparent);
}

.site-footer-compact > .container {
    width: 95%;
    max-width: 1400px;
}

.footer-content {
    display: grid;
    grid-template-columns: 1.4fr 1fr 1fr auto;
    gap: clamp(20px, 3vw, 36px);
    align-items: start;
}

.footer-col h4 {
    font-size: 0.95rem;
    margin-bottom: 14px;
    position: relative;
    padding-bottom: 8px;
    color: #fff;
    font-weight: 600;
}

.footer-col p {
    font-size: 0.78rem;
    color: #64748b;
    line-height: 1.5;
    margin: 0;
}

.footer-col h4:after {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 28px;
    height: 2px;
    background: var(--accent);
    border-radius: 2px;
}

.footer-links {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    flex-direction: column;
    gap: 3px;
}

.footer-links li {
    margin-bottom: 0;
}

.footer-links a {
    color: #94a3b8;
    text-decoration: none;
    font-size: 0.78rem;
    transition: var(--transition);
    line-height: 1.65;
}

.footer-links a:hover {
    color: var(--accent);
}

.social-links {
    display: flex;
    margin-top: 12px;
    gap: 8px;
}

.social-links a {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 32px;
    height: 32px;
    background-color: rgba(255, 255, 255, 0.06);
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 8px;
    color: #94a3b8;
    text-decoration: none;
    font-size: 0.78rem;
    transition: var(--transition);
}

.social-links a:hover {
    background-color: var(--accent);
    border-color: var(--accent);
    color: #fff;
}

.site-footer-compact .qrcode {
    width: 120px;
    height: 120px;
    border-radius: 10px;
    border: 1px solid rgba(255, 255, 255, 0.1);
    display: block;
}

.footer-qr-col h4 {
    margin-bottom: 8px;
}

.copyright {
    text-align: center;
    padding-top: 8px;
    margin-top: 8px;
    border-top: 1px solid rgba(255, 255, 255, 0.06);
    color: #475569;
    font-size: 0.75rem;
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
        min-height: 100vh;
        height: auto;
    }

    .hero .container {
        height: auto;
    }

    header {
        top: 38px;
    }

    .hero-content {
        width: 100%;
        max-width: 100%;
    }

    .about-content {
        grid-template-columns: 1fr;
    }

    .contact-footer-section {
        height: auto;
        min-height: 100vh;
        min-height: 100dvh;
        overflow: visible;
    }

    .contact-premium {
        grid-template-columns: 1fr;
    }

    .contact-premium-aside {
        padding: 18px 20px;
    }

    .contact-premium-main {
        padding: 18px 20px;
    }

    .contact-subtitle {
        max-width: 100%;
    }

    .contact-info-row {
        grid-template-columns: 1fr;
        gap: 20px;
    }

    .footer-content {
        grid-template-columns: repeat(2, 1fr);
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

    .hero-content h1 {
        font-size: 1.65rem;
    }

    .hero-desc,
    .hero-sub {
        font-size: 0.9rem;
        max-width: 100%;
    }

    .hero-btn {
        width: 100%;
        justify-content: center;
    }

    .hero-strip-grid {
        grid-template-columns: 1fr;
    }

    .hero-stats-bar {
        flex-direction: column;
        padding: 12px;
    }

    .hero-stat {
        flex: none;
        width: 100%;
        border-right: none;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        justify-content: flex-start;
    }

    .hero-stat:last-child {
        border-bottom: none;
    }

    .hero-features li {
        font-size: 0.72rem;
    }

    .hero-tag {
        font-size: 0.72rem;
    }
}

</style>
</head>

<body>
    @include('partials.initial-loader-markup')

    <div class="site-topbar">
        <div class="container site-topbar-inner">
            <div class="site-topbar-left">
                <span><i class="fas fa-phone"></i> +91 98430 42111</span>
                <span><i class="fas fa-envelope"></i> senthilplasticcontainers@gmail.com</span>
                <span><i class="fas fa-map-marker-alt"></i> Virudhunagar, Tamil Nadu</span>
            </div>
            <div class="site-topbar-right">
                <!-- <span><i class="fas fa-certificate"></i> ISO Certified Manufacturer</span> -->
                <div class="site-topbar-social">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>

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
            <div style="display:flex;align-items:center;">
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
            <a href="{{ route('contact') }}" class="nav-quote-btn d-none d-lg-inline-flex"><i class="fas fa-user-tie"></i> Get a Quote</a>
            </div>
        </div>
    </header>

    <section class="hero" id="home">
        <div class="hero-slider">
            <div class="hero-slide active hero-slide-right">
                <video autoplay muted loop playsinline class="hero-video">
                    <source src="{{ asset('assets/img/MVI_5417.MP4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="hero-overlay"></div>
                <div class="container hero-container-right">
                    <div class="hero-content hero-content-right">
                        <div class="hero-badge">
                            <span class="hero-badge-line"></span>
                            <span class="hero-badge-text">Quality · Durability · Trust</span>
                            <span class="hero-badge-line"></span>
                        </div>
                        <span class="hero-tag">01 — Raw Materials</span>
                        <h1>Premium <span class="hero-accent">Polymer Preparation</span></h1>
                        <p class="hero-sub">Engineered for <strong>Performance</strong>. Designed for <strong>Perfection</strong>.</p>
                       
                        <ul class="hero-features">
                            <li><i class="fas fa-cube"></i><span>High Quality Materials</span></li>
                            <li><i class="fas fa-print"></i><span>Advanced Printing</span></li>
                            <li><i class="fas fa-tags"></i><span>Custom Branding</span></li>
                            <li><i class="fas fa-truck"></i><span>Bulk Supply</span></li>
                            <li><i class="fas fa-clock"></i><span>Timely Delivery</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="hero-slide hero-slide-left">
                <video muted loop playsinline class="hero-video">
                    <source src="{{ asset('assets/img/MVI_5413.MP4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="hero-overlay"></div>
                <div class="container hero-container-left">
                    <div class="hero-content">
                        <div class="hero-badge">
                            <span class="hero-badge-line"></span>
                            <span class="hero-badge-text">Advanced · Printing · Branding</span>
                            <span class="hero-badge-line"></span>
                        </div>
                        <span class="hero-tag">02 — Screen Printing</span>
                        <h1>Screen <span class="hero-accent">Printing Machine</span></h1>
                        <p class="hero-sub">Sharp <strong>Branding</strong>. Lasting <strong>Finish</strong>.</p>
                       
                        <ul class="hero-features">
                            <li><i class="fas fa-cube"></i><span>High Quality Materials</span></li>
                            <li><i class="fas fa-print"></i><span>Advanced Printing</span></li>
                            <li><i class="fas fa-tags"></i><span>Custom Branding</span></li>
                            <li><i class="fas fa-truck"></i><span>Bulk Supply</span></li>
                            <li><i class="fas fa-clock"></i><span>Timely Delivery</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="hero-slide hero-slide-right">
                <video muted loop playsinline class="hero-video">
                    <source src="{{ asset('assets/img/MVI_5411.MP4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="hero-overlay"></div>
                <div class="container hero-container-right">
                    <div class="hero-content hero-content-right">
                        <div class="hero-badge">
                            <span class="hero-badge-line"></span>
                            <span class="hero-badge-text">Precision · Labelling · Quality</span>
                            <span class="hero-badge-line"></span>
                        </div>
                        <span class="hero-tag">03 — Labelling</span>
                        <h1>Heat Transfer <span class="hero-accent">Labelling </span></h1>
                        <p class="hero-sub">Professional <strong>Labels</strong>. Premium <strong>Presentation</strong>.</p>
                       
                        <ul class="hero-features">
                            <li><i class="fas fa-cube"></i><span>High Quality Materials</span></li>
                            <li><i class="fas fa-print"></i><span>Advanced Printing</span></li>
                            <li><i class="fas fa-tags"></i><span>Custom Branding</span></li>
                            <li><i class="fas fa-truck"></i><span>Bulk Supply</span></li>
                            <li><i class="fas fa-clock"></i><span>Timely Delivery</span></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="hero-slide-counter"><span id="heroSlideNum">01</span> / 03</div>

            <button class="hero-prev" aria-label="Previous slide">&#10094;</button>
            <button class="hero-next" aria-label="Next slide">&#10095;</button>

            <div class="hero-progress" aria-hidden="true">
                <div class="hero-progress-bar" id="heroProgressBar"></div>
            </div>

            <div class="hero-bottom-ui">
                <!-- <div class="hero-product-strip">
                    <div class="hero-strip-head">
                        <div>
                            <h3>Wide Range of <span>Plastic Containers</span></h3>
                            <p>Solutions for every industry need</p>
                        </div>
                    </div>
                    <div class="hero-strip-grid">
                        @foreach ($categories->take(4) as $cat)
                        <a href="{{ route('products.category', $cat->slug) }}" class="hero-strip-card">
                            <img src="{{ $cat->maincategory_image ? asset('storage/' . $cat->maincategory_image) : asset('assets/img/default.jpg') }}"
                                alt="{{ $cat->maincategory_name }}" loading="lazy">
                            <span>{{ $cat->maincategory_name }}</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                        @endforeach
                    </div>
                </div> -->
                @isset($data)
                <div class="hero-stats-bar">
                    @for ($i = 1; $i <= 4; $i++)
                        @php
                            $statIcon = $data->{'stat' . $i . '_icon'} ?? null;
                            $statValue = $data->{'stat' . $i . '_value'} ?? null;
                            $statTitle = $data->{'stat' . $i . '_title'} ?? null;
                        @endphp
                        @if ($statIcon || $statValue || $statTitle)
                        <div class="hero-stat">
                            <div class="hero-stat-icon">
                                <i class="{{ $statIcon ?? 'fas fa-award' }}"></i>
                            </div>
                            <div class="hero-stat-text">
                                <strong>{{ $statValue }}</strong>
                                <span>{{ $statTitle }}</span>
                            </div>
                        </div>
                        @endif
                    @endfor
                </div>
                @endisset
            </div>
        </div>
    </section>
    <section class="why-choose-us" id="why-us">
        <div class="container">

            <!-- =========================
             SECTION TITLE & DESCRIPTION
        ============================== -->
            <div class="section-header">
                <h2 class="section-title">
                    {{ isset($data) ? ($data->title ?? 'Why Leading Brands Choose Us') : 'Why Leading Brands Choose Us' }}
                </h2>

                <p style="text-align: justify; text-justify: inter-word;">
                    {!! isset($data) ? ($data->description ?? 'Welcome to our company. Please add content from admin panel.') : 'Welcome to our company. Please add content from admin panel.' !!}
                </p>
            </div>

          
            @isset($certificates)
            <div class="certifications">
                @foreach ($certificates as $cert)
                <img src="{{ asset('storage/' . $cert->image) }}" alt="Certificate"
                    style="height:90px;object-fit:contain;">
                @endforeach
            </div>
            @endisset

        </div>
    </section>


    <section class="about-commitments mt-4" id="about">
        <div class="container">
            <h2 class="section-title">{{ isset($about) ? ($about->title ?? 'About Us') : 'About Us' }}</h2>

            <div class="about-item">
                <div class="about-text">
                    @if (isset($about) && !empty($about->description))
                    <p>{!! nl2br(e($about->description)) !!}</p>
                    @else
                    <p>No About content added yet. Please update it from the admin panel.</p>
                    @endif
                </div>

                <div class="about-image">
                    @if (isset($about) && !empty($about->image))
                    <img src="{{ asset($about->image) }}" alt="{{ isset($about) ? ($about->title ?? 'About Image') : 'About Image' }}">
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

                @isset($categories)
                @foreach ($categories as $cat)
                <a href="{{ route('products.category', $cat->slug) }}" class="category-link">

                    <div class="category-card"
                        data-bg="{{ $cat->maincategory_image ? asset('storage/' . $cat->maincategory_image) : asset('assets/img/default.jpg') }}">

                        <div class="overlay"></div>
                        <h3>{{ $cat->maincategory_name }}</h3>

                    </div>

                </a>
                @endforeach
                @endisset

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

    <section class="facilities-tabs" id="facilities">
        <div class="container">

            <div class="tech-section-header">
                <!-- <span class="tech-eyebrow">Innovation</span> -->
                <h2 class="section-title">Our Technologies</h2>
                <p class="tech-subtitle">Advanced manufacturing and decoration solutions — from HTL to IML — for premium industrial packaging</p>
            </div>

            <div class="tech-tab-bar" role="tablist">
                @foreach ($facilities as $facility)
                <button type="button" class="tech-tab {{ $loop->first ? 'active' : '' }}" data-tab="{{ $loop->iteration }}" role="tab" aria-selected="{{ $loop->first ? 'true' : 'false' }}">
                    <span class="tech-tab-num">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                    <span class="tech-tab-label">{{ $facility->title }}</span>
                </button>
                @endforeach
            </div>

            <div class="tech-slider-wrap">
                <div class="facilities-content">
                    @foreach ($facilities as $facility)
                    <div class="facility-panel-split {{ $loop->first ? 'active' : '' }}" id="tab-{{ $loop->iteration }}" role="tabpanel">

                        <div class="tech-slide-visual">
                            <div class="facility-image"
                                style="background-image: url('{{ asset("storage/{$facility->image}") }}');">
                            </div>
                            <span class="tech-slide-badge">{{ $facility->title }}</span>
                        </div>

                        <div class="facility-content">
                            <span class="tech-slide-tag">Technology {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                            <h3>{{ $facility->title }}</h3>
                            <p>{{ $facility->description }}</p>
                            <a href="{{ route('facility') }}" class="tech-cta-btn">
                                Explore More <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>

                    </div>
                    @endforeach
                </div>

            </div>
        </div>
    </section>

    {{-- Technologies slider JS --}}
    <script>
    (function() {
        function initTechTabs() {
            const section = document.getElementById('facilities');
            if (!section) return;

            const tabBar = section.querySelector('.tech-tab-bar');
            const tabs = section.querySelectorAll('.tech-tab');
            const panels = section.querySelectorAll('.facility-panel-split');
            const totalTabs = panels.length;
            if (!tabBar || !totalTabs) return;

            let currentTab = 1;
            let techAutoTimer;

            function showTab(tabId) {
                if (tabId < 1) tabId = totalTabs;
                if (tabId > totalTabs) tabId = 1;
                currentTab = tabId;

                tabs.forEach(t => {
                    const isActive = Number(t.dataset.tab) === tabId;
                    t.classList.toggle('active', isActive);
                    t.setAttribute('aria-selected', isActive ? 'true' : 'false');
                });

                panels.forEach(p => p.classList.remove('active'));
                const activePanel = section.querySelector('#tab-' + tabId);
                if (activePanel) activePanel.classList.add('active');
            }

            tabBar.addEventListener('click', function(e) {
                const tab = e.target.closest('.tech-tab');
                if (!tab || !tabBar.contains(tab)) return;
                showTab(parseInt(tab.dataset.tab, 10));
                startTechAuto();
            });

            function startTechAuto() {
                clearInterval(techAutoTimer);
                if (totalTabs <= 1) return;
                techAutoTimer = setInterval(() => showTab(currentTab + 1), 10000);
            }

            startTechAuto();
        }

        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', initTechTabs);
        } else {
            initTechTabs();
        }
    })();
    </script>




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
            <div class="testimonial-header">
                <!-- <span class="tech-eyebrow">Testimonials</span> -->
                <h2 class="section-title">What Our Customers Say About Our Packaging</h2>
                <p class="section-subtitle">Trusted by businesses across industries for quality, reliability, and service</p>
            </div>

            <div class="testimonial-carousel">
                <div class="testimonial-carousel-viewport">
                    <div class="testimonial-track" id="testimonial-review-track">
                <div class="testimonial-card">
                    <div class="testimonial-stars">★★★★★</div>
                    <div class="quote-icon"><i class="fas fa-quote-left"></i></div>
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
                    <div class="testimonial-stars">★★★★★</div>
                    <div class="quote-icon"><i class="fas fa-quote-left"></i></div>
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
                    <div class="testimonial-stars">★★★★★</div>
                    <div class="quote-icon"><i class="fas fa-quote-left"></i></div>
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
                    <div class="testimonial-stars">★★★★★</div>
                    <div class="quote-icon"><i class="fas fa-quote-left"></i></div>
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

            </div>
        </div>
    </section>
    {{-- Contact + Footer — single screen --}}
    <section class="contact-footer-section" id="contact">
        @php
        use App\Models\ContactInfo;
        $contact = ContactInfo::first();
        @endphp

        <div class="contact-premium">
            <aside class="contact-premium-aside">
                <span class="contact-eyebrow">Get In Touch</span>
                <!-- <h2 class="contact-title">Let's Build Something Together</h2>
                <p class="contact-subtitle">Premium industrial packaging solutions — reach out for quotes, product details, or a factory visit.</p> -->
                <div class="contact-about-lines">
                    @if (isset($contact) && !empty($contact->about_lines))
                    @foreach ($contact->about_lines as $line)
                    <p>{{ $line }}</p>
                    @endforeach
                    @else
                    <p>Plastic Solutions Manufacturing</p>
                    <p>Virudhunagar, Tamil Nadu</p>
                    @endif
                </div>
            </aside>

            <div class="contact-premium-main">
                <div class="contact-info-list">
                    <div class="contact-info-row">
                        @if (isset($contact) && !empty($contact->phone_numbers))
                        <div class="contact-info-item">
                            <div class="contact-info-icon"><i class="fas fa-phone-alt"></i></div>
                            <div>
                                <div class="contact-info-label">Phone</div>
                                <div class="contact-info-lines">
                                    @foreach ($contact->phone_numbers as $phone)
                                    <p class="contact-info-value">{{ $phone }}</p>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        @endif

                        @if (isset($contact) && !empty($contact->marketing_numbers))
                        <div class="contact-info-item">
                            <div class="contact-info-icon"><i class="fas fa-user-tie"></i></div>
                            <div>
                                <div class="contact-info-label">Marketing</div>
                                <div class="contact-info-lines">
                                    @foreach ($contact->marketing_numbers as $mPhone)
                                    <p class="contact-info-value">{{ $mPhone }}</p>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>

                    <div class="contact-info-row">
                        @if (isset($contact) && $contact->email)
                        <div class="contact-info-item">
                            <div class="contact-info-icon"><i class="fas fa-envelope"></i></div>
                            <div>
                                <div class="contact-info-label">Email</div>
                                <p class="contact-info-value">
                                    <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a>
                                </p>
                            </div>
                        </div>
                        @endif

                        <div class="contact-info-item">
                            <div class="contact-info-icon"><i class="fas fa-map-marker-alt"></i></div>
                            <div>
                                <div class="contact-info-label">Office Location</div>
                                <p class="contact-info-value">{{ isset($contact) ? ($contact->address ?? 'Address not available') : 'Address not available' }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="site-footer-compact">
            <div class="container">
                <div class="footer-content">
                    <div class="footer-col">
                        <h4>spc</h4>
                        <p>Premium plastic containers designed for sustainability and elegance.</p>
                        <div class="social-links">
                            <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                            <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                            <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
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
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Categories</h4>
                        <ul class="footer-links">
                            @isset($categories)
                            @foreach ($categories as $cat)
                            <li>
                                <a href="{{ route('products.category', $cat->slug) }}">{{ $cat->maincategory_name }}</a>
                            </li>
                            @endforeach
                            @endisset
                        </ul>
                    </div>
                    <div class="footer-col footer-qr-col">
                        <h4>QR Code</h4>
                        <img class="qrcode" src="{{ asset('assets/img/qrcode.png') }}" alt="SPC QR Code">
                    </div>
                </div>
                <div class="copyright">
                    <p>&copy; 2025 spc. All Rights Reserved.</p>
                </div>
            </div>
        </footer>
    </section>

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

    // Testimonial Review Carousel
    (function() {
        const track = document.getElementById('testimonial-review-track');
        if (!track) return;

        const cards = track.querySelectorAll('.testimonial-card');
        let currentPage = 0;
        let autoTimer;

        function getPerView() {
            return window.innerWidth <= 768 ? 1 : 2;
        }

        function getTotalPages() {
            return Math.max(1, Math.ceil(cards.length / getPerView()));
        }

        function goToPage(page) {
            const perView = getPerView();
            const totalPages = getTotalPages();
            if (page < 0) page = totalPages - 1;
            if (page >= totalPages) page = 0;
            currentPage = page;

            const card = cards[0];
            if (card) {
                const gap = parseFloat(getComputedStyle(track).gap) || 0;
                const shift = currentPage * perView * (card.offsetWidth + gap);
                track.style.transform = 'translateX(-' + shift + 'px)';
            }
        }

        function startAuto() {
            clearInterval(autoTimer);
            autoTimer = setInterval(() => goToPage(currentPage + 1), 10000);
        }

        let resizeTimer;
        window.addEventListener('resize', () => {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(() => {
                if (currentPage >= getTotalPages()) currentPage = 0;
                goToPage(currentPage);
            }, 200);
        });

        goToPage(0);
        startAuto();
    })();

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
    document.addEventListener("DOMContentLoaded", function() {
        const slides = document.querySelectorAll(".hero-slide");
        const dots = document.querySelectorAll(".hero-dot");
        const prevBtn = document.querySelector(".hero-prev");
        const nextBtn = document.querySelector(".hero-next");
        const progressBar = document.getElementById("heroProgressBar");
        const slideNumEl = document.getElementById("heroSlideNum");

        let currentIndex = 0;
        let slideInterval;
        let progressInterval;
        const slideDuration = 8000;

        function resetProgress() {
            if (!progressBar) return;
            clearInterval(progressInterval);
            progressBar.style.width = "0%";
            const start = Date.now();
            progressInterval = setInterval(() => {
                const elapsed = Date.now() - start;
                const pct = Math.min((elapsed / slideDuration) * 100, 100);
                progressBar.style.width = pct + "%";
                if (pct >= 100) clearInterval(progressInterval);
            }, 50);
        }

        function showSlide(index) {
            if (index < 0) index = slides.length - 1;
            if (index >= slides.length) index = 0;

            slides.forEach((slide, i) => {
                slide.classList.remove("active");
                if (dots[i]) dots[i].classList.remove("active");

                const video = slide.querySelector('video');
                if (video) {
                    video.pause();
                    video.currentTime = 0;
                }
            });

            slides[index].classList.add("active");
            if (dots[index]) dots[index].classList.add("active");

            const activeVideo = slides[index].querySelector('video');
            if (activeVideo) {
                activeVideo.play().catch(() => {});
            }

            currentIndex = index;
            if (slideNumEl) {
                slideNumEl.textContent = String(index + 1).padStart(2, "0");
            }
            resetProgress();
        }

        function nextSlide() {
            showSlide(currentIndex + 1);
        }

        function prevSlide() {
            showSlide(currentIndex - 1);
        }

        function startAutoSlide() {
            clearInterval(slideInterval);
            slideInterval = setInterval(nextSlide, slideDuration);
        }

        function stopAutoSlide() {
            clearInterval(slideInterval);
            clearInterval(progressInterval);
        }

        dots.forEach(dot => {
            dot.addEventListener("click", () => {
                stopAutoSlide();
                showSlide(parseInt(dot.getAttribute("data-slide"), 10));
                startAutoSlide();
            });
        });

        if (nextBtn) {
            nextBtn.addEventListener("click", () => {
                stopAutoSlide();
                nextSlide();
                startAutoSlide();
            });
        }

        if (prevBtn) {
            prevBtn.addEventListener("click", () => {
                stopAutoSlide();
                prevSlide();
                startAutoSlide();
            });
        }

        showSlide(0);
        startAutoSlide();
    });
    </script>

    @include('partials.initial-loader-script')
</body>

</html>