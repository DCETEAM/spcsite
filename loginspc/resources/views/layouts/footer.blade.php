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
