<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
@include('partials.site-theme-vars')
@include('partials.site-glass-theme')
@php
    $bgTheme = $siteTheme ?? \App\Models\SiteSetting::current();
    $bgUrl = $bgTheme->bgImageUrl();
    $bgOverlay = (int) ($bgTheme->bg_overlay ?? 0) / 100;
@endphp
<style>
    body {
        font-weight: 400;
        font-size: 18px;
        background-image:
            linear-gradient(rgba(0, 12, 28, {{ $bgOverlay }}), rgba(0, 12, 28, {{ $bgOverlay }})),
            url('{{ $bgUrl }}') !important;
        background-size: cover !important;
        background-position: center center !important;
        background-repeat: no-repeat !important;
        background-attachment: fixed !important;
    }

    h1, h2, h3, h4, h5, h6 {
        font-weight: 700;
    }

    .nav-link,
    .nav-menu,
    .nav-menu a,
    .site-topbar,
    .site-topbar a,
    header nav a,
    .nav-quote-btn {
        font-family: var(--font-body);
        font-weight: 600;
        font-size: 15px;
        text-transform: none !important;
    }
</style>
