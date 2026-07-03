@php
    use App\Models\Maincategory;

    $categories = $categories ?? Maincategory::all();
@endphp

@once
<style>
    :root {
        --spc-accent: #45aae3;
        --spc-accent-dark: #2e96d4;
    }

    .spc-site-footer {
        background: #060f1a;
        color: #fff;
        padding: clamp(48px, 6vw, 72px) 0 0;
    }

    .spc-footer-grid {
        display: grid;
        grid-template-columns: 1.35fr 1fr 1fr 1.1fr;
        gap: clamp(28px, 4vw, 48px);
        align-items: start;
        padding-bottom: clamp(36px, 5vw, 52px);
    }

    .spc-footer-brand {
        max-width: 300px;
    }

    .spc-footer-logo {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 16px;
        text-decoration: none;
    }

    .spc-footer-logo__icon {
        width: 52px;
        height: 52px;
        border-radius: 10px;
        /* background: var(--hero-gold); */
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        padding: 7px;
    }

    .spc-footer-logo__icon img {
        width: 100%;
        height: 100%;
        object-fit: contain;
        display: block;
    }

    .spc-footer-logo__text {
        font-family: "Playfair Display", Georgia, serif;
        font-size: 1.05rem;
        font-weight: 700;
        line-height: 1.2;
        color: #fff;
    }

    .spc-footer-logo__text em {
        font-style: normal;
        color: var(--spc-accent);
    }

    .spc-footer-brand p {
        font-size: 0.86rem;
        line-height: 1.65;
        color: rgba(255, 255, 255, 0.55);
        margin: 0 0 18px;
    }

    .spc-footer-social {
        display: flex;
        gap: 10px;
    }

    .spc-footer-social a {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        border: 1px solid rgba(255, 255, 255, 0.2);
        color: rgba(255, 255, 255, 0.75);
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        font-size: 0.82rem;
        transition: all 0.25s ease;
    }

    .spc-footer-social a:hover {
        border-color: var(--spc-accent);
        color: var(--spc-accent);
    }

    .spc-footer-col h4 {
        font-family: "Playfair Display", Georgia, serif;
        font-size: 1rem;
        font-weight: 700;
        color: #fff;
        margin: 0 0 14px;
        padding-bottom: 10px;
        position: relative;
    }

    .spc-footer-col h4::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        width: 32px;
        height: 2px;
        background: var(--spc-accent);
        border-radius: 2px;
    }

    .spc-footer-links {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .spc-footer-links a {
        color: rgba(255, 255, 255, 0.58);
        text-decoration: none;
        font-size: 0.88rem;
        transition: color 0.2s ease;
    }

    .spc-footer-links a:hover {
        color: var(--spc-accent);
    }

    .spc-footer-qr {
        width: 148px;
        height: 148px;
        border-radius: 12px;
        background: #fff;
        padding: 8px;
        display: block;
        object-fit: contain;
    }

    .spc-footer-qr-note {
        margin-top: 12px;
        font-size: 0.8rem;
        line-height: 1.55;
        color: rgba(255, 255, 255, 0.5);
        max-width: 180px;
    }

    .spc-footer-bottom {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 16px;
        flex-wrap: wrap;
        padding: 18px 0 22px;
        border-top: 1px solid rgba(255, 255, 255, 0.08);
        font-size: 0.8rem;
        color: rgba(255, 255, 255, 0.45);
    }

    .spc-footer-legal {
        display: flex;
        gap: 22px;
        flex-wrap: wrap;
    }

    .spc-footer-legal a {
        color: rgba(255, 255, 255, 0.45);
        text-decoration: none;
    }

    .spc-footer-legal a:hover {
        color: var(--spc-accent);
    }

    @media (max-width: 992px) {
        .spc-footer-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .spc-footer-brand {
            max-width: none;
            grid-column: 1 / -1;
        }
    }

    @media (max-width: 576px) {
        .spc-footer-grid {
            grid-template-columns: 1fr;
        }

        .spc-footer-bottom {
            flex-direction: column;
            align-items: flex-start;
        }
    }
</style>
@endonce

<footer class="spc-site-footer">
    <div class="container">
        <div class="spc-footer-grid">
            <div class="spc-footer-brand">
                <a href="{{ route('home') }}" class="spc-footer-logo">
                    <span class="spc-footer-logo__icon">
                        <img src="{{ asset('assets/img/item2.png') }}" alt="SPC Logo">
                    </span>
                    <span class="spc-footer-logo__text">Senthil Plastic <em>Containers</em></span>
                </a>
                <p>Premium plastic containers engineered for durability, sustainability and everyday industrial use.</p>
                <div class="spc-footer-social">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>

            <div class="spc-footer-col">
                <h4>Quick Links</h4>
                <ul class="spc-footer-links">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('home') }}#about">About</a></li>
                    <li><a href="{{ route('products.index') }}">Products</a></li>
                    <li><a href="{{ route('home') }}#why-us">Why Choose Us</a></li>
                    <li><a href="{{ route('blogs.list') }}">Blog</a></li>
                    <li><a href="{{ route('home') }}#contact">Contact</a></li>
                </ul>
            </div>

            <div class="spc-footer-col">
                <h4>Categories</h4>
                <ul class="spc-footer-links">
                    @forelse ($categories as $cat)
                    <li>
                        <a href="{{ route('products.category', $cat->slug ?? $cat->maincategory_id) }}">
                            {{ $cat->maincategory_name }}
                        </a>
                    </li>
                    @empty
                    <li><a href="{{ route('products.index') }}">Lube Industries</a></li>
                    <li><a href="{{ route('products.index') }}">Oil Industry</a></li>
                    <li><a href="{{ route('products.index') }}">Paint Industry</a></li>
                    <li><a href="{{ route('products.index') }}">Agro Chemicals</a></li>
                    <li><a href="{{ route('products.index') }}">Ink &amp; Dyes</a></li>
                    <li><a href="{{ route('products.index') }}">Epoxy</a></li>
                    @endforelse
                </ul>
            </div>

            <div class="spc-footer-col">
                <h4>Scan &amp; Explore</h4>
                <img class="spc-footer-qr" src="{{ asset('assets/img/qrcode.png') }}" alt="SPC product catalogue QR code">
                <p class="spc-footer-qr-note">Scan the code to browse our full product catalogue on mobile.</p>
            </div>
        </div>

        <div class="spc-footer-bottom">
            <p>&copy; {{ date('Y') }} Senthil Plastic Containers Pvt Ltd. All rights reserved.</p>
            <div class="spc-footer-legal">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms of Service</a>
            </div>
        </div>
    </div>
</footer>
