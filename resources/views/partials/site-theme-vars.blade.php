@php
    $theme = $siteTheme ?? \App\Models\SiteSetting::current();
    $fontBody = $theme->font_body ?? 'Poppins';
    $fontHeading = $theme->font_heading ?? 'Poppins';
    $googleFonts = array_values(array_unique([$fontBody, $fontHeading]));
    $googleFontsQuery = collect($googleFonts)
        ->map(fn ($font) => 'family=' . str_replace(' ', '+', $font) . ':wght@400;600;700')
        ->implode('&');
@endphp
@once
<link href="https://fonts.googleapis.com/css2?{{ $googleFontsQuery }}&display=swap" rel="stylesheet">
<style>
    :root {
        --accent: {{ $theme->accent }};
        --accent-dark: {{ $theme->accent_dark }};
        --hero-navy: {{ $theme->hero_navy }};
        --hero-gold: {{ $theme->hero_gold }};
        --hero-blue: {{ $theme->hero_blue }};
        --spc-accent: {{ $theme->accent }};
        --spc-accent-dark: {{ $theme->accent_dark }};
        --footer-bg: {{ $theme->footer_bg }};
        --font-body: '{{ $fontBody }}', sans-serif;
        --font-heading: '{{ $fontHeading }}', sans-serif;
        --text-primary: {{ $theme->text_primary }};
        --text-muted: {{ $theme->text_muted }};
        --glass-bg: rgba(255, 255, 255, 0.72);
        --glass-border: rgba(0, 26, 61, 0.1);
    }
</style>
@endonce
