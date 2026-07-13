@php
    use App\Models\ContactInfo;

    $contact = $contact ?? ContactInfo::first();
    $phones = $contact?->phone_numbers ?? [];
    $marketingNumbers = $contact?->marketing_numbers ?? [];
    $phone = $phones[0] ?? '+91 98430 42111';
    $marketing = $marketingNumbers[0] ?? null;
    $email = $contact?->email ?? 'senthilplasticcontainers@gmail.com';
    $address = $contact?->address ?? 'SIPCOT Industrial Estate, Virudhunagar, TN';
    $phoneTel = preg_replace('/\s+/', '', $phone);
@endphp

@once
@include('partials.site-theme-vars')
<style>
    .spc-contact-block {
        padding: clamp(56px, 8vw, 88px) 0;
        color: var(--text-muted);
        background: transparent;
        border-top: 1px solid var(--glass-border);
    }

    .spc-contact-grid {
        display: grid;
        grid-template-columns: minmax(280px, 1fr) minmax(320px, 1.05fr);
        gap: clamp(32px, 5vw, 64px);
        align-items: center;
    }

    .spc-contact-kicker {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-size: 0.68rem;
        font-weight: 700;
        letter-spacing: 0.18em;
        text-transform: uppercase;
        color: var(--hero-gold);
        margin-bottom: 18px;
    }

    .spc-contact-kicker i {
        font-size: 0.62rem;
        color: var(--hero-gold);
    }

    .spc-contact-title {
        font-family: var(--font-heading);
        font-size: clamp(2rem, 4.5vw, 3.15rem);
        font-weight: 600;
        line-height: 1.15;
        color: var(--text-primary);
        margin: 0 0 20px;
        max-width: 520px;
    }

    .spc-contact-title em {
        font-style: normal;
        /* color: var(--spc-accent); */
    }

    .spc-contact-desc {
        font-family: var(--font-body);
        font-size: clamp(0.92rem, 1.1vw, 1rem);
        line-height: 1.75;
        color: var(--text-muted);
        margin: 0 0 28px;
        max-width: 500px;
    }

    .spc-contact-actions {
        display: flex;
        flex-wrap: wrap;
        gap: 14px;
    }

    .spc-btn {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 13px 24px;
        border-radius: 999px;
        font-size: 0.92rem;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.25s ease;
        border: 1px solid transparent;
    }

    .spc-btn--accent {
        background: var(--spc-accent);
        color: #fff;
        box-shadow: 0 8px 24px rgba(69, 170, 227, 0.28);
    }

    .spc-btn--accent:hover {
        background: var(--spc-accent-dark);
        color: #fff;
    }

    .spc-btn--outline {
        background: transparent;
        color: var(--text-primary);
        border-color: var(--glass-border);
    }

    .spc-btn--outline:hover {
        border-color: var(--spc-accent);
        background: color-mix(in srgb, var(--spc-accent) 12%, transparent);
        color: var(--text-primary);
    }

    .spc-contact-cards {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 16px;
    }

    .spc-contact-card {
        
        backdrop-filter: blur(14px);
        -webkit-backdrop-filter: blur(14px);
        border: 1px solid var(--glass-border);
        border-radius: 14px;
        padding: 22px 20px;
        text-align: left;
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.15);
    }

    .spc-contact-card__icon {
        width: 40px;
        height: 40px;
        border-radius: 10px;
        background: var(--spc-accent);
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.95rem;
        margin-bottom: 14px;
    }

    .spc-contact-card__label {
        font-size: 0.62rem;
        font-weight: 700;
        letter-spacing: 0.14em;
        text-transform: uppercase;
        color: var(--text-muted);
        margin-bottom: 6px;
    }

    .spc-contact-card__value,
    .spc-contact-card__value a {
        font-size: 1.02rem;
        font-weight: 700;
        color: var(--text-primary);
        line-height: 1.45;
        text-decoration: none;
        margin: 0;
        word-break: break-word;
    }

    .spc-contact-card__value a:hover {
        color: var(--spc-accent);
    }

    @media (max-width: 992px) {
        .spc-contact-grid {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 576px) {
        .spc-contact-cards {
            grid-template-columns: 1fr;
        }
    }
</style>
@endonce

<div class="spc-contact-block" id="contact" aria-label="Contact">
    <div class="container spc-contact-grid">
        <div class="spc-contact-copy glass-panel">
            <span class="spc-contact-kicker">
                <i class="fas fa-star" aria-hidden="true"></i>
                Get In Touch
            </span>
            <h2 class="spc-contact-title">Let's talk about <em>your next</em> order.</h2>
            <p class="spc-contact-desc">
                At Senthil Plastic Containers Pvt. Ltd., we're trusted by top brands nationwide for
                high-quality plastic packaging and precision injection moulding. Reach out and our
                team will get back to you within one business day.
            </p>
            <div class="spc-contact-actions">
                <a href="tel:{{ $phoneTel }}" class="spc-btn spc-btn--accent">
                    <i class="fas fa-phone" aria-hidden="true"></i>
                    Call Now
                </a>
                <a href="mailto:{{ $email }}" class="spc-btn spc-btn--outline">
                    <i class="fas fa-envelope" aria-hidden="true"></i>
                    Email Us
                </a>
            </div>
        </div>

        <div class="spc-contact-cards">
            <article class="spc-contact-card">
                <div class="spc-contact-card__icon"><i class="fas fa-phone" aria-hidden="true"></i></div>
                <div class="spc-contact-card__label">Phone</div>
                <p class="spc-contact-card__value">
                    <a href="tel:{{ preg_replace('/\s+/', '', $phone) }}">{{ $phone }}</a>
                </p>
            </article>

            @if ($marketing)
            <article class="spc-contact-card">
                <div class="spc-contact-card__icon"><i class="fas fa-user" aria-hidden="true"></i></div>
                <div class="spc-contact-card__label">Marketing</div>
                <p class="spc-contact-card__value">
                    <a href="tel:{{ preg_replace('/\s+/', '', $marketing) }}">{{ $marketing }}</a>
                </p>
            </article>
            @endif

            <article class="spc-contact-card">
                <div class="spc-contact-card__icon"><i class="fas fa-envelope" aria-hidden="true"></i></div>
                <div class="spc-contact-card__label">Email</div>
                <p class="spc-contact-card__value">
                    <a href="mailto:{{ $email }}">{{ $email }}</a>
                </p>
            </article>

            <article class="spc-contact-card">
                <div class="spc-contact-card__icon"><i class="fas fa-map-marker-alt" aria-hidden="true"></i></div>
                <div class="spc-contact-card__label">Office Location</div>
                <p class="spc-contact-card__value">{{ $address }}</p>
            </article>
        </div>
    </div>
</div>
