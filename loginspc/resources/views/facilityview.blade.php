     <!DOCTYPE html>
     <html lang="en">

     <head>

         <meta charset="UTF-8" />
         <meta name="viewport" content="width=device-width, initial-scale=1.0" />
         <title>spc | Premium Plastic Containers</title>
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
         <link
             href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap"
             rel="stylesheet" />
         <!-- Header -->

     <body>
          <header id="header">
         <div class="container nav-container">
             <div style="display:flex;align-items:center;gap:8px;">
                 <img src="{{ asset('assets/img/item2.png') }}" style="width:40px;height:40px;display:block;"
                     alt="Logo" class="logo-image">
                 <a href="#" class="logo" style="margin:0;">Senthil Plastic Containers<span>&nbsp;Private
                         Limited</span></a>
             </div>
             <div class="hamburger" id="hamburger">
                 <i class="fas fa-bars"></i>
             </div>
             <ul class="nav-menu" id="nav-menu">
                 <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                 <li class="nav-item"><a href="{{ url('/') }}#about" class="nav-link">About</a></li>
                 <li class="nav-item">
                     <a href="{{ route('products.index') }}" class="nav-link">Products</a>
                 </li>
                 <li class="nav-item">

                     <a href="{{ url('/') }}#why-us" class="nav-link">Why choose us</a>
                 </li>
                 <li class="nav-item">
                     <a href="{{ route('blogs.list') }}" class="nav-link">Blog</a>
                 </li>
                 <li class="nav-item">
                     <a href="{{ route('contact') }}" class="nav-link active">Contact</a>
                 </li>
             </ul>
         </div>
     </header>
         <section class="hero">
             <div class="hero-content">

                 <h1>Our Technologies</h1>

             </div>
         </section>
@php
    // Get all facilities in order of creation
    $facilities = \App\Models\Facility::orderBy('id')->get();
@endphp

<section class="facilities-section">
    <div class="container">

        {{-- -------- NAVIGATION TABS -------- --}}
        <div class="facilities-nav">
            @foreach($facilities as $facility)
                <div class="facility-circle {{ $loop->first ? 'active' : '' }}"
                     data-tab="{{ $loop->iteration }}">
                    <span>{{ $facility->title }}</span>
                </div>
            @endforeach
        </div>

        {{-- -------- TAB CONTENT SECTION -------- --}}
        <div class="facility-tabs-content">

            @foreach($facilities as $facility)
                <div class="facility-tab-content {{ $loop->first ? 'active' : '' }}"
                     data-tab="{{ $loop->iteration }}">

                    <div class="facility-content-grid">

                        {{-- IMAGE --}}
                        <div class="facility-image">
                            @if($facility->image)
                                <img
                                    src="{{ asset('storage/'.$facility->image) }}"
                                    alt="{{ $facility->title }}"
                                />
                            @endif
                        </div>

                        {{-- TEXT DETAILS --}}
                        <div class="facility-details">
                            <h2>{{ $facility->title }}</h2>

                            <p>{{ $facility->description }}</p>

                            {{-- FEATURES AS BULLET POINTS --}}
                            @if($facility->features)
                                <ul>
                                    @foreach(explode("\n", $facility->features) as $feature)
                                        @if(trim($feature) !== '')
                                            <li>{{ $feature }}</li>
                                        @endif
                                    @endforeach
                                </ul>
                            @endif

                        </div>

                    </div>

                </div>
            @endforeach

        </div>

    </div>
</section>


{{-- OPTIONAL JS: Tab switching --}}
<script>
document.addEventListener('DOMContentLoaded', function () {
    const tabs = document.querySelectorAll('.facility-circle');
    const contents = document.querySelectorAll('.facility-tab-content');

    tabs.forEach(tab => {
        tab.addEventListener('click', function () {
            const tabId = this.dataset.tab;

            tabs.forEach(t => t.classList.remove('active'));
            this.classList.add('active');

            contents.forEach(c => c.classList.remove('active'));
            document.querySelector(`.facility-tab-content[data-tab="${tabId}"]`)
                .classList.add('active');
        });
    });
});
</script>


         <section class="commitment-section">
             <div class="container">
                 <div class="commitment-header">
                     <h2>Proof of Our Promise: The Trusted Plastic Packaging Partner</h2>
                     <p>
                         We don’t just make containers — we safeguard your products, brands, and reputation.
                         That’s why India’s leading companies trust us as their long-term packaging partner for reliable
                         plastic containers.
                     </p>
                 </div>

                 <div class="commitment-grid">
                     <div class="commitment-item">
                         <div class="icon-wrapper">
                             <i class="fas fa-shield-alt"></i>
                         </div>
                         <h3>Uncompromising Quality Assurance</h3>
                         <p>We deliver excellence with every product, ensuring durability and top-level performance.</p>
                     </div>

                     <div class="commitment-item">
                         <div class="icon-wrapper">
                             <i class="fas fa-truck-fast"></i>
                         </div>
                         <h3>Reliable On-Time Delivery</h3>
                         <p>Our efficient logistics guarantee timely delivery without compromising supply chain.</p>
                     </div>

                     <div class="commitment-item">
                         <div class="icon-wrapper">
                             <i class="fas fa-handshake"></i>
                         </div>
                         <h3>Consistent Reliability & Partnership</h3>
                         <p>Trusted partnerships built on dependability, transparency, and integrity.</p>
                     </div>

                     <div class="commitment-item">
                         <div class="icon-wrapper">
                             <i class="fas fa-lightbulb"></i>
                         </div>
                         <h3>Custom Tailored Packaging Solutions</h3>
                         <p>Innovative, flexible packaging designed around your unique business needs.</p>
                     </div>

                     <div class="commitment-item">
                         <div class="icon-wrapper">
                             <i class="fas fa-users-cog"></i>
                         </div>
                         <h3>Client First Service & Support</h3>
                         <p>Your satisfaction drives everything we do — service beyond expectations.</p>
                     </div>
                 </div>
             </div>
         </section>

         <!-- Font Awesome -->
         <script src="https://kit.fontawesome.com/a2e0e6ad3b.js" crossorigin="anonymous"></script>

         <style>
             /* Section Styling */
             .commitment-section {
                 background: #ffffff;
                 padding: 20px 20px 50px 20px;

                 text-align: center;
             }

             /* Header */
             .commitment-header {
                 max-width: 850px;
                 margin: 0 auto 60px;
             }

             .commitment-header h2 {
                 font-size: 2rem;
                 font-weight: 700;
                 color: #222;

                 margin-bottom: 20px;
             }

             /* Blue underline after the heading */
             .commitment-header h2::after {
                 content: "";
                 display: block;
                 width: 80px;
                 height: 4px;
                 background: #45aae3;
                 margin: 12px auto 0;
                 border-radius: 4px;
             }

             .commitment-header p {
                 font-size: 1.1rem;
                 color: #555;
                 line-height: 1.8;
             }

             /* Grid Layout */
             .commitment-grid {
                 display: grid;
                 grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
                 gap: 40px;
                 justify-items: center;
             }

             /* Individual Items */
             .commitment-item {
                 background: linear-gradient(180deg, #ffffff, #e7f9fd);
                 border-radius: 16px;
                 padding: 40px 25px;
                 box-shadow: 0 6px 20px rgba(0, 0, 0, 0.06);
                 transition: all 0.4s ease;
                 max-width: 300px;
             }

             .commitment-item:hover {
                 transform: translateY(-10px);
                 background: linear-gradient(180deg, #8dc5d6, #e7f9fd);
                 box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
             }

             /* Icons */
             .icon-wrapper {
                 width: 80px;
                 height: 80px;
                 border-radius: 50%;
                 background: #45aae3;
                 display: flex;
                 align-items: center;
                 justify-content: center;
                 color: white;
                 font-size: 2rem;
                 margin: 0 auto 20px;
             }

             /* Titles */
             .commitment-item h3 {
                 font-size: 1.2rem;
                 color: #003049;
                 font-weight: 600;
                 margin-bottom: 10px;
             }

             /* Text */
             .commitment-item p {
                 font-size: 0.95rem;
                 color: #555;
                 line-height: 1.6;
             }

             /* Responsive */
             @media (max-width: 768px) {
                 .commitment-header h2 {
                     font-size: 2rem;
                 }

                 .commitment-item {
                     max-width: 100%;
                 }
             }
         </style>

       @include('layouts.footer')
         <style>
             .facilities-section {
                 padding: 50px 0 50px;
                 background: #fff;
             }

             .facilities-nav {
                 display: flex;
                 justify-content: center;
                 gap: 2rem;
                 margin-bottom: 2rem;
             }

             /* Horizontal line connecting the circles */
             .facilities-nav {
                 position: relative;
                 display: flex;
                 justify-content: center;
                 gap: 2rem;
                 margin-bottom: 2rem;
             }

             .facilities-nav::before {
                 content: "";
                 position: absolute;
                 top: 50%;
                 left: 60px;
                 right: 60px;
                 height: 2px;
                 background: #e0e7ef;
                 z-index: 0;
                 transform: translateY(-50%);
             }

             .facility-circle {
                 position: relative;
                 z-index: 1;
             }


             .facility-circle {
                 width: 120px;
                 height: 120px;
                 border-radius: 50%;
                 background: #f0f0f0;
                 display: flex;
                 align-items: center;
                 justify-content: center;
                 box-shadow: 0 4px 16px rgba(0, 0, 0, 0.08);
                 cursor: pointer;
                 transition: box-shadow 0.3s, background 0.3s;
                 font-weight: 600;
                 font-size: 1rem;
                 color: #2d3a4b;
                 border: 3px solid transparent;
             }

             .facility-circle.active,
             .facility-circle:hover {
                 background: #45aae3;
                 color: #fff;
                 box-shadow: 0 8px 24px rgba(76, 175, 80, 0.15);
                 /* border-color: #1cc88a; */
             }

             .facility-tabs-content {
                 max-width: 1200px;
                 margin: 0 auto;
             }

             .facility-tab-content {
                 display: none;
                 animation: fadeIn 0.6s;
             }

             .facility-tab-content.active {
                 display: block;
             }

             .facility-content-grid {
                 display: flex;
                 flex-wrap: wrap;
                 gap: 2rem;
                 align-items: center;
                 background: #f8f9fa;
                 text-align: justify;
                 border-radius: 18px;
                 /* box-shadow: 0 4px 24px rgba(0,0,0,0.06); */
                 padding: 2rem;
             }

             .facility-image img {
                 width: 450px;
                 max-width: 100%;
                 border-radius: 12px;
                 box-shadow: 0 2px 12px rgba(44, 62, 80, 0.10);
             }

             .facility-details {
                 flex: 1;
                 min-width: 260px;
             }

             .facility-details h2 {
                 font-size: 2rem;
                 color: #1c4680;
                 margin-bottom: 1rem;
             }

             .facility-details ul {
                 margin: 1rem 0;
                 padding-left: 1.2rem;
             }

             .facility-details ul li {
                 margin-bottom: 0.5rem;
                 color: #2d3a4b;
                 font-size: 1rem;
             }

             @media (max-width: 480px) {
                 .facility-circle {
                     width: 80px;
                     height: 80px;
                     font-size: 0.55rem;
                     font-weight: 600;
                     padding: 0 5px;
                 }

                 .facilities-nav {
                     gap: 1rem;
                 }

                 .facility-details h2 {
                   
                 }
             }

             @media (max-width: 800px) {
                 .facility-content-grid {
                     flex-direction: column;
                     align-items: flex-start;
                 }

                 .facility-image img {
                     width: 100%;
                 }
             }

             @keyframes fadeIn {
                 from {
                     opacity: 0;
                     transform: translateY(30px);
                 }

                 to {
                     opacity: 1;
                     transform: translateY(0);
                 }
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
                 margin-bottom: 40px;
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

             @media (max-width: 576px) {
                 .products-grid {
                     grid-template-columns: 1fr;
                 }

                 .footer-content {
                     grid-template-columns: 1fr;
                 }

                 .hero h1 {
                     font-size: 2rem;
                 }
             }

             :root {
                 /* Brand Colors */
                 --primary: #12225C;
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
                 --dark: #12225C;
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

             body {
                 font-family: "Playfair Display", serif;
                 line-height: 1.6;
                 color: var(--dark);
                 /* background-color: violet; */
                 overflow-x: hidden;
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
                 /* width: 90%; */
                 max-width: 1400px;
                 margin: 0 auto;
                 padding: 0 20px;
             }

             .qrcode {
                 width: 200px;
                 height: 200px;
             }

             a {
                 text-decoration: none
             }

             .hero {
                 position: relative;
                 height: 50vh;
                 background: url("{{ asset('assets/img/lab1.png') }}") no-repeat center/cover;
                 display: flex;
                 flex-direction: column;
                 justify-content: center;
                 align-items: center;
                 text-align: center;
                 color: #fff;
             }

             .hero::before {
                 content: "";
                 position: absolute;
                 inset: 0;
                 background: rgba(0, 0, 0, 0.4);
             }

             .hero-content {
                 position: relative;
                 z-index: 1;
                 max-width: 800px;
             }

             .hero-content h4 {
                 font-size: 16px;
                 font-weight: normal;
                 margin-bottom: 10px;
                 letter-spacing: 2px;
             }

             .hero-content h1 {
                 font-size: 50px;
                 font-weight: bold;
                 margin: 0 0 20px;
                 line-height: 1.2;
             }

             .hero-buttons {
                 display: flex;
                 gap: 15px;
                 justify-content: center;
             }

             /* Header & Navigation */
             header {
                 position: fixed;
                 top: 0;
                 left: 0;
                 width: 100%;
                 z-index: 1000;
                 padding: 15px 0;
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
                 list-style: none;
             }

             .nav-item {
                 margin-left: 30px;
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

             .facilities-section .section-title {
                 font-size: 2rem;
                 margin-bottom: 50px;
                 color: #222;
             }



             .facilities-section .section-title:after {
                 content: "";
                 position: absolute;
                 bottom: -15px;
                 left: 50%;
                 transform: translateX(-50%);
                 width: 80px;
                 height: 3px;
                 background-color: var(--accent);
             }

             .hamburger {
                 display: none;
                 cursor: pointer;
                 font-size: 24px;
                 color: #0f0707;
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
                     padding: 15px 0;
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

             @media (max-width: 480px) {
                 .nav-link {
                     text-decoration: none;
                     color: rgb(241, 239, 239);
                     font-weight: 900;
                     position: relative;
                     font-size: 18px;
                     padding: 5px 0;
                     transition: var(--transition);
                 }

                 .commitment-header h2 {
                     font-size: 1.5rem;
                 }

                 .logo {
                     font-size: 12px;
                 }

                 .hero h1 {
                     font-size: 2rem;
                     margin-top: 40px;
                 }
             }
         </style>

         <script>
             document.querySelectorAll('.facility-circle').forEach(circle => {
                 circle.addEventListener('click', function() {
                     document.querySelectorAll('.facility-circle').forEach(c => c.classList.remove('active'));
                     this.classList.add('active');
                     const tab = this.getAttribute('data-tab');
                     document.querySelectorAll('.facility-tab-content').forEach(content => {
                         content.classList.remove('active');
                         if (content.getAttribute('data-tab') === tab) {
                             content.classList.add('active');
                         }
                     });
                 });
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
         </script>
     </body>
     </head>

     </html>
