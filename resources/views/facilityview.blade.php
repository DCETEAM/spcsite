     <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    @include('partials.initial-loader-styles')
    <meta name="google-site-verification" content="YOUR_VERIFICATION_CODE" />
    <meta name="description" content="Explore the advanced manufacturing facilities of Senthil Plastic Containers (SPC). Our state-of-the-art infrastructure in Virudhunagar ensures precision-moulded, high-quality plastic containers.">
    <meta name="keywords" content="SPC manufacturing facility, plastic container production, injection moulding Tamil Nadu, industrial infrastructure Virudhunagar, precision plastic moulding">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta name="author" content="Senthil Plastic Containers">
    <meta name="language" content="English">
    <meta name="geo.region" content="IN-TN">
    <meta name="geo.placename" content="Virudhunagar, Tamil Nadu">
    <meta name="geo.position" content="9.5851;77.9570">
    <meta name="ICBM" content="9.5851, 77.9570">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Our Facilities & Infrastructure | Senthil Plastic Containers (SPC)">
    <meta property="og:description" content="Discover the technology and precision behind SPC's high-quality plastic containers. Our facility is equipped with modern machinery for superior packaging solutions.">
    <meta property="og:image" content="{{ asset('assets/img/item2.png') }}">
    <meta property="og:url" content="{{ url()->current() }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Senthil Plastic Containers (SPC) | Plastic Container Manufacturer">
    <meta name="twitter:description" content="High-quality plastic containers and packaging solutions manufactured by Senthil Plastic Containers, Virudhunagar, Tamil Nadu.">
    <meta name="twitter:image" content="{{ asset('assets/img/item2.png') }}">

    @php
        $pageFacility = \App\Models\Facility::orderBy('id')->first();
    @endphp
    <title>{{ $pageFacility?->title ? (\Illuminate\Support\Str::title($pageFacility->title) . ' | Senthil Plastic Containers Private Limited') : 'Facility | Senthil Plastic Containers Private Limited' }}</title>
    <link rel="canonical" href="{{ request()->url() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    @include('partials.site-fonts')
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --accent: #45aae3;
            --hero-navy: #001a3d;
            --hero-gold: #ffb800;
            --hero-blue: #3a9dff;
            --text-muted: #64748b;
            --border: rgba(0, 26, 61, 0.1);
            --transition: all 0.35s ease;
            --header-offset: 98px;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: "Poppins", sans-serif;
            line-height: 1.6;
            color: #1E1E1E;
            background: #fff;
            overflow-x: hidden;
        }

        .container {
            max-width: 1240px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .site-topbar {
            position: fixed;
            top: 0; left: 0;
            width: 100%;
            z-index: 1001;
            background: var(--hero-navy);
            color: rgba(255, 255, 255, 0.88);
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

        .site-topbar-left, .site-topbar-right {
            display: flex;
            align-items: center;
            gap: 18px;
            flex-wrap: wrap;
        }

        .site-topbar i { color: var(--accent); margin-right: 6px; }
        .site-topbar-social { display: flex; gap: 12px; }
        .site-topbar a { color: rgba(255, 255, 255, 0.9); text-decoration: none; }
        .site-topbar a:hover { color: var(--hero-gold); }

        header {
            position: fixed;
            top: 38px;
            left: 0;
            width: 100%;
            z-index: 1000;
            background: rgba(255, 255, 255, 0.92);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(0, 26, 61, 0.06);
            transition: var(--transition);
        }

        header.scrolled { box-shadow: 0 8px 28px rgba(0, 26, 61, 0.08); }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 0;
        }

        .logo {
            font-family: "Poppins", sans-serif;
            font-weight: 900;
            color: #111;
            text-decoration: none;
        }

        .logo span { color: var(--accent); }

        .nav-menu {
            display: flex;
            list-style: none;
            align-items: center;
            margin: 0;
            padding: 0;
        }

        .nav-item { margin-left: 28px; }

        .nav-link {
            text-decoration: none;
            color: #111;
            font-weight: 600;
            font-size: 15px;
            position: relative;
            transition: var(--transition);
        }

        .nav-link::after {
            content: "";
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--accent);
            transition: var(--transition);
        }

        .nav-link:hover, .nav-link.active { color: var(--accent); }
        .nav-link:hover::after, .nav-link.active::after { width: 100%; }

        .nav-quote-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 20px;
            background: var(--hero-navy);
            color: #fff !important;
            font-size: 0.88rem;
            font-weight: 600;
            border-radius: 6px;
            text-decoration: none;
            margin-left: 12px;
            transition: var(--transition);
        }

        .nav-quote-btn:hover { background: #002855; color: #fff !important; }
        .hamburger { display: none; cursor: pointer; font-size: 22px; color: var(--hero-navy); }

        /* ---- Facility page layout ---- */
        .facility-page {
            padding-top: calc(var(--header-offset) + 20px);
            padding-bottom: 32px;
            background:
                radial-gradient(ellipse at 92% 8%, rgba(58, 157, 255, 0.06) 0%, transparent 40%),
                radial-gradient(ellipse at 4% 92%, rgba(255, 184, 0, 0.05) 0%, transparent 38%),
                #fff;
        }

        .facility-breadcrumb { margin-bottom: 20px; }

        .facility-breadcrumb ol {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 4px;
            list-style: none;
            font-size: 0.82rem;
            color: var(--text-muted);
        }

        .facility-breadcrumb a {
            color: var(--text-muted);
            text-decoration: none;
            transition: var(--transition);
        }

        .facility-breadcrumb a:hover { color: var(--accent); }
        .facility-breadcrumb li.active { color: var(--hero-navy); font-weight: 600; }
        .facility-breadcrumb li + li::before { content: "/"; margin: 0 6px; color: rgba(0, 26, 61, 0.25); }

        .facility-showcase {
            --facility-card-h: calc(100vh - var(--header-offset) - 88px);
            display: grid;
            grid-template-columns: minmax(200px, 260px) minmax(0, 1fr);
            gap: clamp(20px, 3vw, 32px);
            align-items: stretch;
            min-height: var(--facility-card-h);
        }

        .facility-sidebar {
            display: flex;
            flex-direction: column;
            gap: 4px;
            position: sticky;
            top: calc(var(--header-offset) + 16px);
            align-self: start;
            max-height: var(--facility-card-h);
            margin-top: 130px;
            overflow-y: auto;
        }

        .facility-nav-item {
            display: grid;
            grid-template-columns: 40px 1fr;
            gap: 12px;
            align-items: center;
            width: 100%;
            padding: 16px 14px 16px 12px;
            border: none;
            border-left: 3px solid transparent;
            background: transparent;
            text-align: left;
            cursor: pointer;
            border-radius: 0 8px 8px 0;
            transition: var(--transition);
            font-family: inherit;
        }

        .facility-nav-item:hover {
            background: rgba(58, 157, 255, 0.06);
        }

        .facility-nav-item.active {
            background:rgba(69, 170, 227, 0.08);
            border-left-color: var(--accent);
        }

        .facility-nav-num {
            font-size: 0.72rem;
            font-weight: 700;
            letter-spacing: 0.08em;
            color: var(--accent);
            padding-top: 2px;
        }

        .facility-nav-title {
            display: block;
            font-size: 0.9rem;
            font-weight: 700;
            color: var(--hero-navy);
            line-height: 1.35;
        }

        .facility-panels {
            min-width: 0;
            min-height: var(--facility-card-h);
            height: var(--facility-card-h);
        }

        .facility-panel {
            display: none;
            height: 100%;
            animation: facilityFadeIn 0.45s ease;
        }

        .facility-panel.active { display: block; }

        @keyframes facilityFadeIn {
            from { opacity: 0; transform: translateY(12px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .facility-card {
            display: grid;
            grid-template-columns: min(var(--facility-card-h), 46vw) minmax(0, 1fr);
            grid-template-rows: 1fr;
            height: 100%;
            min-height: var(--facility-card-h);
            background: #fff;
           
            overflow: hidden;
            
        }

        .facility-card-visual {
            position: sticky;
            top: 0;
            align-self: start;
            width: 100%;
            height: var(--facility-card-h);
            max-height: var(--facility-card-h);
            aspect-ratio: 1 / 1;
            display: flex;
            align-items: center;
            justify-content: center;
            background:
                linear-gradient(135deg, rgba(0, 26, 61, 0.03) 25%, transparent 25%) -20px 0 / 40px 40px,
                linear-gradient(225deg, rgba(0, 26, 61, 0.03) 25%, transparent 25%) -20px 0 / 40px 40px,
                linear-gradient(315deg, rgba(0, 26, 61, 0.03) 25%, transparent 25%) 0 0 / 40px 40px,
                linear-gradient(45deg, rgba(0, 26, 61, 0.03) 25%, transparent 25%) 0 0 / 40px 40px,
                linear-gradient(160deg, #f0f7ff 0%, #e8f4fc 100%);
            padding: clamp(20px, 3vw, 32px);
            flex-shrink: 0;
        }

        .facility-card-visual img {
            width: 100%;
            height: 100%;
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            border-radius: 12px;
        }

        .facility-card-icon {
            font-size: 4.5rem;
            color: var(--hero-gold);
            opacity: 0.85;
        }

        .facility-card-counter {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 0.72rem;
            font-weight: 700;
            letter-spacing: 0.12em;
            color: var(--text-muted);
        }

        .facility-card-body {
            padding: clamp(24px, 3vw, 36px);
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            height: var(--facility-card-h);
            max-height: var(--facility-card-h);
            overflow-y: auto;
            overscroll-behavior: contain;
            -webkit-overflow-scrolling: touch;
            scrollbar-width: none;
            -ms-overflow-style: none;
        }

        .facility-card-body::-webkit-scrollbar {
            display: none;
        }

        .facility-card-kicker {
            display: block;
            font-size: 0.68rem;
            font-weight: 700;
            letter-spacing: 0.18em;
            text-transform: uppercase;
            color: var(--hero-gold);
            margin-bottom: 12px;
        }

        .facility-card-title {
            font-family: 'Playfair Display', Georgia, serif;
            font-size: clamp(1.35rem, 2.2vw, 1.85rem);
            font-weight: 700;
            color: var(--hero-navy);
            line-height: 1.25;
            margin-bottom: 16px;
        }

        .facility-card-desc {
            font-size: 0.92rem;
            color: var(--text-muted);
            line-height: 1.7;
            margin-bottom: 28px;
        }

        .facility-stats {
            display: flex;
            flex-wrap: wrap;
            gap: 28px;
            margin-bottom: 28px;
        }

        .facility-stat {
            display: flex;
            align-items: stretch;
            gap: 14px;
        }

        .facility-stat-bar {
            width: 3px;
            border-radius: 2px;
            background: var(--hero-gold);
            flex-shrink: 0;
        }

        .facility-stat-value {
            font-family: 'Playfair Display', Georgia, serif;
            font-size: 1.75rem;
            font-weight: 700;
            color: var(--hero-gold);
            line-height: 1;
            margin-bottom: 4px;
        }

        .facility-stat-label {
            font-size: 0.62rem;
            font-weight: 700;
            letter-spacing: 0.14em;
            text-transform: uppercase;
            color: var(--hero-gold);
        }

        .facility-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .facility-tag {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 14px;
            border-radius: 999px;
            border: 1px solid var(--border);
            background: #fafbfc;
            font-size: 0.78rem;
            font-weight: 600;
            color: var(--hero-navy);
        }

        .facility-tag::before {
            content: "";
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: var(--hero-gold);
            flex-shrink: 0;
        }

        .facility-feature-list {
            list-style: none;
            margin: 0 0 24px;
            padding: 0;
        }

        .facility-feature-list li {
            display: grid;
            grid-template-columns: 48px 1fr;
            gap: 16px;
            padding: 14px 0;
            border-bottom: 1px solid var(--border);
            font-size: 0.92rem;
            color: var(--text-muted);
            line-height: 1.65;
        }

        .facility-feature-list li:last-child { border-bottom: none; }

        .facility-feature-icon {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(58, 157, 255, 0.12);
            border: 1px solid rgba(58, 157, 255, 0.25);
            color: var(--accent);
            font-size: 1rem;
            flex-shrink: 0;
        }

        .facility-feature-list strong {
            font-weight: 700;
            color: var(--hero-navy);
        }

        @media (max-width: 992px) {
            :root { --header-offset: 70px; }
            header { top: 0; }
            .site-topbar { display: none; }

            .facility-showcase {
                grid-template-columns: 1fr;
                --facility-card-h: auto;
                min-height: auto;
            }

            .facility-sidebar {
                position: relative;
                top: auto;
                flex-direction: row;
                overflow-x: auto;
                overflow-y: hidden;
                gap: 8px;
                padding-bottom: 8px;
                max-height: none;
            }

            .facility-nav-item {
                min-width: 180px;
                border-left: none;
                border-bottom: 3px solid transparent;
                border-radius: 8px;
            }

            .facility-nav-item.active {
                border-left-color: transparent;
                border-bottom-color: var(--accent);
            }

            .facility-panels {
                height: auto;
                min-height: auto;
            }

            .facility-panel {
                height: auto;
            }

            .facility-card {
                grid-template-columns: 1fr;
                grid-template-rows: auto 1fr;
                height: auto;
                min-height: auto;
            }

            .facility-card-visual {
                position: relative;
                width: 100%;
                height: auto;
                max-height: none;
                aspect-ratio: 1 / 1;
            }

            .facility-card-body {
                height: auto;
                max-height: min(60vh, 520px);
            }
        }

        @media (max-width: 768px) {
            .hamburger { display: block; }

            .nav-menu {
                position: fixed;
                top: 70px;
                right: -100%;
                flex-direction: column;
                background: #fff;
                width: 80%;
                height: calc(100vh - 70px);
                box-shadow: -5px 0 20px rgba(0, 0, 0, 0.1);
                transition: var(--transition);
                padding: 30px 0;
            }

            .nav-menu.active { right: 0; }
            .nav-item { margin: 0; text-align: center; padding: 14px 0; }
            .nav-quote-btn { display: none !important; }
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
            </div>
            <div class="site-topbar-right">
                <div class="site-topbar-social">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>

    <header id="header">
        <div class="container nav-container">
            <div style="display:flex;align-items:center;gap:8px;">
                <img src="{{ asset('assets/img/item2.png') }}" style="width:40px;height:40px;display:block;" alt="SPC Logo">
                <a href="{{ route('home') }}" class="logo">Senthil Plastic Containers<span>&nbsp;Private Limited</span></a>
            </div>
            <div style="display:flex;align-items:center;">
                <div class="hamburger" id="hamburger"><i class="fas fa-bars"></i></div>
                <ul class="nav-menu" id="nav-menu">
                    <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="{{ url('/') }}#about" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="{{ route('products.index') }}" class="nav-link">Products</a></li>
                    <li class="nav-item"><a href="{{ url('/') }}#why-us" class="nav-link">Why choose us</a></li>
                    <li class="nav-item"><a href="{{ route('blogs.list') }}" class="nav-link">Blog</a></li>
                    <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
                </ul>
                <!-- <a href="{{ route('contact') }}" class="nav-quote-btn d-none d-lg-inline-flex"><i class="fas fa-user-tie"></i> Get a Quote</a> -->
            </div>
        </div>
    </header>

@include('partials.facility-showcase')


         <section class="commitment-section">
             <div class="container">
                 <div class="commitment-header">
                     <span class="commitment-kicker">
                         <i class="fas fa-star" aria-hidden="true"></i>
                         Proof, not promises
                     </span>
                     <h2 class="commitment-title">Proof of <span>Our Promise</span></h2>
                     <p>
                         We don't just make containers - we safeguard your products, brands, and reputation.
                         That's why India's leading companies trust us as their long-term packaging partner.
                     </p>
                 </div>

                 <div class="commitment-track-wrap">
                     <div class="commitment-track">
                         <div class="commitment-line" aria-hidden="true"></div>

                         <article class="commitment-item">
                             <div class="commitment-ring">
                                 <span class="commitment-dot" aria-hidden="true"></span>
                                 <div class="commitment-icon">
                                     <img src="{{ asset('assets/img/proof/proof1.png') }}" alt="Uncompromising Quality">
                                 </div>
                                 <span class="commitment-num">01</span>
                             </div>
                             <h3>Uncompromising Quality</h3>
                             <p>Every batch checked before it leaves the line</p>
                         </article>

                         <article class="commitment-item">
                             <div class="commitment-ring">
                                 <span class="commitment-dot" aria-hidden="true"></span>
                                 <div class="commitment-icon">
                                     <img src="{{ asset('assets/img/proof/prroof2.png') }}" alt="On-Time Delivery">
                                 </div>
                                 <span class="commitment-num">02</span>
                             </div>
                             <h3>On-Time Delivery</h3>
                             <p>Bulk dispatch, scheduled and tracked</p>
                         </article>

                         <article class="commitment-item">
                             <div class="commitment-ring">
                                 <span class="commitment-dot" aria-hidden="true"></span>
                                 <div class="commitment-icon">
                                     <img src="{{ asset('assets/img/proof/proof3.png') }}" alt="Consistent Reliability">
                                 </div>
                                 <span class="commitment-num">03</span>
                             </div>
                             <h3>Consistent Reliability</h3>
                             <p>Same quality, order after order</p>
                         </article>

                         <article class="commitment-item">
                             <div class="commitment-ring">
                                 <span class="commitment-dot" aria-hidden="true"></span>
                                 <div class="commitment-icon">
                                     <img src="{{ asset('assets/img/proof/proof4.png') }}" alt="Custom Tailored Solutions">
                                 </div>
                                 <span class="commitment-num">04</span>
                             </div>
                             <h3>Custom Tailored Solutions</h3>
                             <p>65+ product variants, built to spec</p>
                         </article>

                         <article class="commitment-item">
                             <div class="commitment-ring">
                                 <span class="commitment-dot" aria-hidden="true"></span>
                                 <div class="commitment-icon">
                                     <img src="{{ asset('assets/img/proof/proof5.png') }}" alt="Client First Service">
                                 </div>
                                 <span class="commitment-num">05</span>
                             </div>
                             <h3>Client First Service</h3>
                             <p>A real person, not a ticket number</p>
                         </article>
                     </div>
                 </div>
             </div>
         </section>

         <!-- Font Awesome -->
         <script src="https://kit.fontawesome.com/a2e0e6ad3b.js" crossorigin="anonymous"></script>

         <style>
             .commitment-section {
                 background: var(--hero-navy);
                 padding: clamp(56px, 8vw, 88px) 0 clamp(64px, 9vw, 96px);
                 text-align: center;
                 color: #fff;
                 position: relative;
                 overflow: hidden;
             }

             .commitment-section::before {
                 content: '';
                 position: absolute;
                 inset: 0;
                 background:
                     radial-gradient(ellipse at 20% 50%, rgba(69, 170, 227, 0.15) 0%, transparent 50%),
                     radial-gradient(ellipse at 80% 50%, rgba(255, 184, 0, 0.08) 0%, transparent 50%);
                 pointer-events: none;
             }

             .commitment-section .container {
                 position: relative;
                 z-index: 1;
             }

             .commitment-header {
                 max-width: 720px;
                 margin: 0 auto clamp(40px, 6vw, 64px);
             }

             .commitment-kicker {
                 display: inline-flex;
                 align-items: center;
                 gap: 8px;
                 padding: 8px 16px;
                 border-radius: 999px;
                 background: rgba(69, 170, 227, 0.2);
                 color: var(--accent);
                 font-size: 0.68rem;
                 font-weight: 700;
                 letter-spacing: 0.16em;
                 text-transform: uppercase;
                 margin-bottom: 18px;
             }

             .commitment-kicker i {
                 font-size: 0.62rem;
                 color: var(--hero-gold);
             }

             .commitment-title {
                 /* font-family: 'Playfair Display', Georgia, serif; */
                 font-size: clamp(1.85rem, 4vw, 2.75rem);
                 font-weight: 700;
                 color: #fff;
                 line-height: 1.2;
                 margin-bottom: 18px;
             }

             

             .commitment-header p {
                 font-size: 0.95rem;
                 color: rgba(255, 255, 255, 0.7);
                 line-height: 1.75;
             }

             .commitment-track-wrap {
                 overflow-x: auto;
                 overflow-y: hidden;
                 -webkit-overflow-scrolling: touch;
                 scrollbar-width: none;
                 -ms-overflow-style: none;
                 padding-bottom: 8px;
             }

             .commitment-track-wrap::-webkit-scrollbar {
                 display: none;
             }

             .commitment-track {
                 display: flex;
                 align-items: flex-start;
                 justify-content: center;
                 gap: clamp(20px, 3.5vw, 40px);
                 position: relative;
                 width: max-content;
                 min-width: 100%;
                 padding: 12px clamp(12px, 2vw, 24px) 0;
             }

             .commitment-line {
                 position: absolute;
                 top: 72px;
                 left: 8%;
                 right: 8%;
                 height: 0;
                 border-top: 1px dashed rgba(69, 170, 227, 0.35);
                 pointer-events: none;
                 z-index: 0;
             }

             .commitment-item {
                 position: relative;
                 z-index: 1;
                 flex: 0 0 200px;
                 max-width: 220px;
                 text-align: center;
             }

             .commitment-ring {
                 position: relative;
                 width: 144px;
                 height: 144px;
                 margin: 0 auto 22px;
                 border-radius: 50%;
                 border: 2px solid rgba(69, 170, 227, 0.45);
                 background:
                     radial-gradient(circle at 50% 35%, rgba(69, 170, 227, 0.18) 0%, transparent 55%),
                     rgba(255, 255, 255, 0.04);
                 box-shadow:
                     0 0 0 6px rgba(69, 170, 227, 0.08),
                     0 0 28px rgba(255, 184, 0, 0.1);
                 display: flex;
                 align-items: center;
                 justify-content: center;
                 transition: border-color 0.3s ease, box-shadow 0.3s ease;
             }

             .commitment-item:hover .commitment-ring {
                 border-color: rgba(255, 184, 0, 0.55);
                 box-shadow:
                     0 0 0 6px rgba(255, 184, 0, 0.08),
                     0 0 32px rgba(69, 170, 227, 0.18);
             }

             .commitment-dot {
                 position: absolute;
                 top: -5px;
                 left: 50%;
                 transform: translateX(-50%);
                 width: 10px;
                 height: 10px;
                 border-radius: 50%;
                 background: var(--accent);
                 box-shadow: 0 0 10px rgba(255, 184, 0, 0.5);
             }

             .commitment-icon {
                 width: 108px;
                 height: 108px;
                 border-radius: 50%;
                 overflow: hidden;
                 display: flex;
                 align-items: center;
                 justify-content: center;
                 background: rgba(255, 255, 255, 0.08);
             }

             .commitment-icon img {
                 width: 100%;
                 height: 100%;
                 object-fit: cover;
                 display: block;
             }

             .commitment-num {
                 position: absolute;
                 bottom: -12px;
                 left: 50%;
                 transform: translateX(-50%);
                 min-width: 34px;
                 height: 34px;
                 padding: 0 8px;
                 border-radius: 999px;
                 background: var(--hero-navy);
                 border: 2px solid var(--accent);
                 color: var(--hero-gold);
                 font-size: 0.72rem;
                 font-weight: 700;
                 letter-spacing: 0.06em;
                 display: flex;
                 align-items: center;
                 justify-content: center;
             }

             .commitment-item h3 {
                 font-size: 1rem;
                 font-weight: 700;
                 color: #fff;
                 margin-bottom: 8px;
                 line-height: 1.3;
             }

             .commitment-item p {
                 font-size: 0.82rem;
                 color: rgba(255, 255, 255, 0.65);
                 line-height: 1.55;
             }

             @media (max-width: 992px) {
                 .commitment-track {
                     justify-content: flex-start;
                 }

                 .commitment-line {
                     left: 60px;
                     right: 60px;
                 }
             }

             @media (max-width: 768px) {
                 .commitment-item {
                     flex: 0 0 180px;
                 }

                 .commitment-ring {
                     width: 128px;
                     height: 128px;
                 }

                 .commitment-icon {
                     width: 96px;
                     height: 96px;
                 }

                 .commitment-line {
                     top: 64px;
                 }
             }
         
</style>

       @include('partials.site-contact-block')
       @include('layouts.footer')

         <script>
document.getElementById('hamburger')?.addEventListener('click', () => {
    document.getElementById('nav-menu')?.classList.toggle('active');
});
window.addEventListener('scroll', () => {
    document.getElementById('header')?.classList.toggle('scrolled', window.scrollY > 40);
});
         </script>

    @include('partials.initial-loader-script')
</body>

</html>
