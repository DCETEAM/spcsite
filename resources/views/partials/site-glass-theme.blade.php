@once
<style>
    body {
        color: var(--text-muted);
        font-family: var(--font-body);
    }

    h1, h2, h3, h4, h5, h6,
    .section-title,
    .about-headline,
    .spec-sheet-title {
        font-family: var(--font-heading) !important;
        color: var(--text-primary);
    }

    p, .about-desc, .section-header p {
        font-family: var(--font-body) !important;
        color: var(--text-muted);
    }

    .section-title,
    .product-categories .section-header .section-title,
    .commitments .section-title,
    .facilities-tabs .section-title,
    .customer-testimonials .section-title,
    .why-choose-us .section-title,
    .facility-card-title,
    .spc-contact-title {
        color: var(--text-primary) !important;
        font-family: var(--font-heading) !important;
    }

    .about-headline-dark {
        color: var(--text-primary);
    }

    .about-headline-accent,
    .stat-box h3 {
        color: var(--accent);
    }

    .glass-panel,
    .glass-card {
        
        backdrop-filter: blur(14px);
        -webkit-backdrop-filter: blur(14px);
        border: 1px solid var(--glass-border);
        border-radius: 16px;
        box-shadow: 0 8px 28px rgba(0, 26, 61, 0.08);
    }

    .glass-panel {
        padding: clamp(24px, 4vw, 40px);
    }

    .glass-card {
        padding: 20px;
        transition: transform 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease;
    }

    .glass-card:hover {
        transform: translateY(-4px);
        border-color: color-mix(in srgb, var(--accent) 35%, transparent);
        box-shadow: 0 14px 36px rgba(0, 0, 0, 0.22);
    }

    .about-text.glass-panel,
    .section-header.glass-panel {
        margin-bottom: 0;
    }

    .about-years-badge,
    .about-feature,
    .stat-box,
    .testimonial-card,
    .blog-card {
        /* background: var(--glass-bg) !important; */
        backdrop-filter: blur(14px);
        -webkit-backdrop-filter: blur(14px);
        border: 1px solid var(--glass-border) !important;
        box-shadow: 0 8px 28px rgba(0, 26, 61, 0.08);
    }

    /* Home/welcome product cards only — do not restyle catalog product cards */
    .product-categories .product-card,
    .welcome .product-card {
        backdrop-filter: blur(14px);
        -webkit-backdrop-filter: blur(14px);
        border: 1px solid var(--glass-border) !important;
        box-shadow: 0 8px 28px rgba(0, 26, 61, 0.08);
    }

    .about-feature {
        color: var(--text-primary);
    }

    .about-years-badge__text strong,
    .stat-box h3 {
        color: var(--accent);
    }

    .about-years-badge__text span,
    .stat-box p,
    .testimonial-card p,
    .testimonial-author,
    .testimonial-text {
        color: var(--text-muted) !important;
    }

    .product-categories,
    .about-commitments,
    .commitments,
    .testimonials,
    .customer-testimonials {
        background: transparent !important;
    }
</style>
@endonce
