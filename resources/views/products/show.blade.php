<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    @include('partials.initial-loader-styles')
    @php
        $displayName = $product->code ?: $product->title;
        $metaDescription = $product->subtitle
            ?: ($product->description ? \Illuminate\Support\Str::limit(strip_tags($product->description), 160, '') : '');
        $featureItems = [];
        if (!empty($product->features)) {
            $parts = preg_split('/(?<=\.)\s+/', trim($product->features));
            foreach (array_filter(array_map('trim', $parts)) as $item) {
                $item = preg_replace('/^[✔✓]\s*/u', '', $item);
                if (preg_match('/^(.+?)\s*(?:–|—|-)\s*(.+)$/u', $item, $m)) {
                    $featureItems[] = ['title' => trim($m[1]), 'desc' => trim($m[2])];
                } else {
                    $featureItems[] = ['title' => $item, 'desc' => ''];
                }
            }
        }
        if (empty($featureItems)) {
            $featureItems = [
                ['title' => 'High-Quality HDPE Material', 'desc' => 'Provides excellent resistance to chemicals, oils, and harsh industrial environments.'],
                ['title' => 'Leak-Proof & Airtight Seal', 'desc' => 'Ensures safe storage and transport of engine oils, grease, and lubricants.'],
                ['title' => 'Tamper-Evident Lid', 'desc' => 'Prevents contamination and ensures product authenticity.'],
                ['title' => 'Strong & Durable Body', 'desc' => 'Withstands rough handling, stacking, and long-distance shipping.'],
                ['title' => 'Ideal for Lubricants & Oils', 'desc' => 'Specifically designed for petroleum, industrial oils, automotive lubricants, and hydraulic fluids.'],
            ];
        }

        $mainCatId = is_array($product->main_category_ids) ? ($product->main_category_ids[0] ?? null) : null;
        $subCatId = is_array($product->sub_category_ids) ? ($product->sub_category_ids[0] ?? null) : null;
        $breadcrumbCategory = $mainCatId ? \App\Models\Maincategory::find($mainCatId) : null;
        $breadcrumbSubcategory = $subCatId ? \App\Models\SubCategory::find($subCatId) : null;
    @endphp
    <meta name="description" content="{{ $metaDescription ?: ($displayName . ' - Senthil Plastic Containers') }}">
    <title>{{ $displayName }} | Senthil Plastic Containers Private Limited</title>
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
            --glass-bg: rgba(255, 255, 255, 0.78);
            --glass-blur: blur(16px);
            --transition: all 0.35s ease;
            --header-offset: 98px;
            --sticky-top: calc(var(--header-offset) + 24px);
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

        /* ---- Sticky image + scroll content layout ---- */
        .product-layout {
            padding-top: calc(var(--header-offset) + 20px);
            padding-bottom: 80px;
            background:
                radial-gradient(ellipse at 92% 8%, rgba(58, 157, 255, 0.06) 0%, transparent 40%),
                radial-gradient(ellipse at 4% 92%, rgba(255, 184, 0, 0.05) 0%, transparent 38%),
                #fff;
        }

        .product-breadcrumb { margin-bottom: 24px; }

        .product-breadcrumb ol {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 4px;
            list-style: none;
            font-size: 0.82rem;
        }

        .product-breadcrumb li {
            display: inline-flex;
            align-items: center;
            color: var(--text-muted);
        }

        .product-breadcrumb li + li::before {
            content: "/";
            margin: 0 8px;
            color: #cbd5e1;
        }

        .product-breadcrumb a {
            color: var(--text-muted);
            text-decoration: none;
            transition: var(--transition);
        }

        .product-breadcrumb a:hover { color: var(--accent); }
        .product-breadcrumb li.active { color: var(--hero-navy); font-weight: 600; }

        .product-sticky-grid {
            display: grid;
            grid-template-columns: minmax(0, 0.88fr) minmax(0, 1.12fr);
            gap: clamp(32px, 5vw, 72px);
            align-items: start;
        }

        .product-hero-block {
            min-height: calc(100vh - var(--header-offset) - 48px);
            padding-bottom: clamp(24px, 4vh, 40px);
        }

        /* Sticky image column */
        .product-image-col {
            position: sticky;
            top: var(--sticky-top);
            align-self: start;
        }

        .product-image-frame {
            padding: clamp(12px, 2vw, 20px);
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: calc(100vh - var(--header-offset) - 140px);
        }

        .product-image-frame__inner {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .product-image-main {
            /* width: 100%; */
            height: calc(100vh - var(--header-offset) - 220px);
            min-height: 380px;
            max-height: 620px;
            object-fit: contain;
            display: block;
            background-color: #f8f9fa;
            border-radius: 16px;
            box-shadow: 0 2px 16px rgba(0, 26, 61, 0.08);
        }

        /* Hero content — beside image only until Enquire Now */
        .product-hero-content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            min-height: calc(100vh - var(--header-offset) - 140px);
            padding: clamp(24px, 3vw, 36px);
            /* background: var(--glass-bg); */
            backdrop-filter: var(--glass-blur);
            -webkit-backdrop-filter: var(--glass-blur);
            border: 1px solid rgba(0, 26, 61, 0.12);
            border-radius: 4px;
            /* box-shadow: 0 8px 32px rgba(0, 26, 61, 0.06); */
        }

        .product-kicker {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 18px;
        }

        .product-kicker-line {
            flex: 1;
            height: 1px;
            max-width: 72px;
            background: linear-gradient(90deg, transparent, rgba(255, 184, 0, 0.55));
        }

        .product-kicker-line:last-child {
            background: linear-gradient(90deg, rgba(255, 184, 0, 0.55), transparent);
        }

        .product-kicker-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: var(--hero-gold);
            flex-shrink: 0;
        }

        .product-kicker-text {
            font-size: 0.68rem;
            font-weight: 600;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            color: #b8860b;
            white-space: nowrap;
        }

        .product-title {
            font-family: 'Playfair Display', Georgia, serif;
            /* font-size: clamp(2.4rem, 5vw, 4rem);
            font-weight: 700; */
            line-height: 1.05;
            color: var(--hero-navy);
            margin-bottom: 14px;
        }

        .product-tagline {
            font-size: clamp(0.92rem, 1.15vw, 1.02rem);
            color: var(--text-muted);
            line-height: 1.65;
            margin-bottom: 24px;
        }

        .specs-table {
            border-top: 1px solid var(--border);
            margin-bottom: 24px;
        }

        .spec-row {
            display: flex;
            justify-content: space-between;
            align-items: baseline;
            gap: 20px;
            padding: 13px 0;
            border-bottom: 1px solid var(--border);
        }

        .spec-label {
            font-size: 0.72rem;
            font-weight: 600;
            letter-spacing: 0.14em;
            text-transform: uppercase;
            color: #94a3b8;
        }

        .spec-value {
            font-size: 0.95rem;
            font-weight: 600;
            color: var(--hero-navy);
            text-align: right;
        }

        .product-body {
            display: flex;
            gap: 14px;
            align-items: flex-start;
            margin-bottom: 28px;
        }

        .product-body-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: var(--hero-gold);
            margin-top: 9px;
            flex-shrink: 0;
        }

        .product-body p {
            font-size: 0.92rem;
            color: var(--text-muted);
            line-height: 1.75;
            margin: 0;
        }

        .product-actions { margin-bottom: 0; }

        .btn-enquire {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 13px 26px;
            background: var(--hero-navy);
            color: #fff;
            font-size: 0.88rem;
            font-weight: 600;
            border-radius: 10px;
            text-decoration: none;
            box-shadow: 0 10px 28px rgba(0, 26, 61, 0.2);
            transition: var(--transition);
        }

        .btn-enquire:hover {
            background: #002855;
            color: #fff;
            transform: translateY(-2px);
        }

        /* Features — separate section below, left aligned */
        .product-spec-section {
            padding: clamp(48px, 6vw, 72px) 0 clamp(60px, 8vw, 80px);
            /* border-top: 1px solid var(--border); */
            /* background: #fafbfc; */
        }

        .product-spec-section__inner {
            max-width: 820px;
            margin: 0;
            text-align: left;
        }

        .spec-sheet-header {
            margin-bottom: 32px;
            text-align: left;
        }

        .section-kicker {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 16px;
            border-radius: 999px;
            background: rgba(255, 184, 0, 0.12);
            color: #b8860b;
            font-size: 0.68rem;
            font-weight: 700;
            letter-spacing: 0.16em;
            text-transform: uppercase;
            margin-bottom: 14px;
        }

        .section-kicker i { font-size: 0.62rem; color: var(--hero-gold); }

        .spec-sheet-title {
            font-family: 'Playfair Display', Georgia, serif;
            font-size: clamp(1.5rem, 2.8vw, 2.2rem);
            font-weight: 700;
            color: var(--hero-navy);
            line-height: 1.2;
        }

        .feature-list {
            list-style: none;
            margin: 0;
            padding: 0;
            border-top: 1px solid var(--border);
        }

        .feature-row {
            display: grid;
            grid-template-columns: 48px 1fr;
            gap: clamp(16px, 2.5vw, 24px);
            padding: clamp(18px, 2.5vw, 24px) 0;
            align-items: start;
            border-bottom: 1px solid var(--border);
        }

        .feature-row:last-child { border-bottom: none; }

        .feature-icon {
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

        .feature-line {
            font-size: 0.95rem;
            color: var(--text-muted);
            line-height: 1.65;
        }

        .feature-line strong {
            font-weight: 700;
            color: var(--hero-navy);
        }

        @media (max-width: 992px) {
            :root {
                --header-offset: 70px;
                --sticky-top: calc(var(--header-offset) + 16px);
            }

            header { top: 0; }
            .site-topbar { display: none; }

            .product-hero-block {
                min-height: auto;
            }

            .product-hero-content {
                min-height: auto;
            }

            .product-sticky-grid { grid-template-columns: 1fr; }

            .product-image-col {
                position: relative;
                top: auto;
            }

            .product-image-frame {
                min-height: 300px;
            }

            .product-image-main {
                height: auto;
                min-height: 280px;
                max-height: 400px;
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
                <li class="nav-item"><a href="{{ route('products.index') }}" class="nav-link active">Products</a></li>
                <li class="nav-item"><a href="{{ url('/') }}#why-us" class="nav-link">Why choose us</a></li>
                <li class="nav-item"><a href="{{ route('blogs.list') }}" class="nav-link">Blog</a></li>
                <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
            </ul>
            <!-- <a href="{{ route('contact') }}" class="nav-quote-btn d-none d-lg-inline-flex"><i class="fas fa-user-tie"></i> Get a Quote</a> -->
        </div>
    </div>
</header>

<section class="product-layout">
    <div class="container">
        <nav class="product-breadcrumb" aria-label="breadcrumb">
            <ol>
                <li><a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="{{ route('products.index') }}">Products</a></li>
                @if ($breadcrumbCategory)
                <li>
                    <a href="{{ route('products.category', $breadcrumbCategory->slug ?? $breadcrumbCategory->maincategory_id) }}">
                        {{ $breadcrumbCategory->maincategory_name }}
                    </a>
                </li>
                @endif
                @if ($breadcrumbSubcategory)
                <li>
                    <a href="{{ route('products.subcategory', $breadcrumbSubcategory->slug) }}">
                        {{ $breadcrumbSubcategory->subcategory_name }}
                    </a>
                </li>
                @endif
                <li class="active" aria-current="page">{{ $displayName }}</li>
            </ol>
        </nav>

        <div class="product-hero-block">
            <div class="product-sticky-grid">
                <aside class="product-image-col">
                    <div class="product-image-frame">
                        <div class="product-image-frame__inner">
                            @if ($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $displayName }}" class="product-image-main">
                            @else
                            <img src="{{ asset('assets/img/default.jpg') }}" alt="{{ $displayName }}" class="product-image-main">
                            @endif
                        </div>
                    </div>
                </aside>

                <div class="product-hero-content">
                    <div class="product-kicker">
                        <span class="product-kicker-line"></span>
                        <span class="product-kicker-dot"></span>
                        <span class="product-kicker-text">Quality · Durability · Trust</span>
                        <span class="product-kicker-dot"></span>
                        <span class="product-kicker-line"></span>
                    </div>

                    <h1 class="product-title">{{ $displayName }}</h1>

                    @if ($product->subtitle)
                    <p class="product-tagline">{{ $product->subtitle }}</p>
                    @elseif (!$product->description)
                    <p class="product-tagline">Premium-grade plastic container engineered for industrial packaging applications.</p>
                    @endif

                    <div class="specs-table">
                        @if ($product->product_weight)
                        <div class="spec-row">
                            <span class="spec-label">Weight</span>
                            <span class="spec-value">{{ $product->product_weight }}</span>
                        </div>
                        @endif
                        @if ($product->brimful_volume)
                        <div class="spec-row">
                            <span class="spec-label">Volume</span>
                            <span class="spec-value">{{ $product->brimful_volume }}</span>
                        </div>
                        @endif
                       
                    </div>

                    @if ($product->description)
                    <div class="product-body">
                        <span class="product-body-dot"></span>
                        <p>{{ $product->description }}</p>
                    </div>
                    @endif

                    <div class="product-actions">
                        <a href="{{ route('contact') }}" class="btn-enquire">
                            Enquire Now <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="product-spec-section">
            <div class="product-spec-section__inner">
                <div class="spec-sheet-header">
                    <span class="section-kicker">
                        <i class="fas fa-star"></i> Specification Sheet
                    </span>
                    <h2 class="spec-sheet-title">What the {{ $displayName }} is built to do</h2>
                </div>

                <ul class="feature-list">
                    @foreach ($featureItems as $feature)
                    <li class="feature-row">
                        <span class="feature-icon" aria-hidden="true">
                            <i class="fas fa-bucket"></i>
                        </span>
                        <p class="feature-line">
                            @if (!empty($feature['desc']))
                            <strong>{{ $feature['title'] }}</strong> – {{ $feature['desc'] }}
                            @else
                            <strong>{{ $feature['title'] }}</strong>
                            @endif
                        </p>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>

<script>
document.getElementById('hamburger')?.addEventListener('click', () => {
    document.getElementById('nav-menu')?.classList.toggle('active');
});
window.addEventListener('scroll', () => {
    document.getElementById('header')?.classList.toggle('scrolled', window.scrollY > 40);
});
</script>
@include('layouts.footer')
@include('partials.initial-loader-script')
</body>
</html>
