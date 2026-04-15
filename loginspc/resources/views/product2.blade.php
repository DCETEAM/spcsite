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
         rel="stylesheet" /><!-- Header -->
     <header id="header">
         <div class="container nav-container">
             <img src="{{ asset('assets/img/item2.png') }}" style="width: 40px; height: 40px;" alt="Logo"
                 class="logo-image">
             <a href="#" class="logo">Senthil Plastic &nbsp;<span>Containers</span></a>
             <div class="hamburger" id="hamburger">
                 <i class="fas fa-bars"></i>
             </div>
           <ul class="nav-menu" id="nav-menu">
                <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
                <li class="nav-item">
                    <a href="{{ route('product') }}" class="nav-link">Products</a>
                </li>
                <li class="nav-item">

                    <a href="#why-us" class="nav-link">Why choose us</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('blog') }}" class="nav-link">Blog</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('contact') }}" class="nav-link">Contact</a>
                </li>
            </ul>
         </div>
     </header>
     <section class="product-details" id="product2">
         <div class="container">
             <div class="product-wrapper">

                 <!-- Product Image Section -->
                 <div class="product-gallery">
                     <div class="main-image">
                         <img id="mainImage" src="{{ asset('assets/img/bucketk5.png') }}" alt="10Ltr Bucket">
                     </div>
                     {{-- <div class="thumbnail-row">
          <img class="thumb active" src="{{ asset('assets/img/bucketk5.png') }}" alt="Thumb 1" onclick="changeImage(this)">
          <img class="thumb" src="{{ asset('assets/img/bucket2.png') }}" alt="Thumb 2" onclick="changeImage(this)">
          <img class="thumb" src="{{ asset('assets/img/bucket3.png') }}" alt="Thumb 3" onclick="changeImage(this)">
        </div> --}}
                 </div>

                 <!-- Product Info Section -->
                 <div class="product-info">
                     <h1 class="product-title">101Ltr Premium Plastic Bucket</h1>
                     <p class="product-subtitle">Durable | Leak-proof | Ideal for Paint & Chemical Packaging</p>
                     <p class="product-desc">
                         Our 10Ltr plastic bucket is engineered for performance and longevity. Made with
                         high-grade polymer, it ensures strong durability, chemical resistance, and secure
                         sealing. Perfect for paint, chemical, and lubricant industries — designed to meet
                         international safety and packaging standards.
                     </p>

                     <ul class="product-features">
                         <li>✔ High-density polymer material</li>
                         <li>✔ Leak-proof lid and ergonomic handle</li>
                         <li>✔ Custom branding & color options</li>
                         <li>✔ ISO-certified manufacturing</li>
                     </ul>

                     <div class="product-buttons">
                         <a href="" class="btn primary-btn">Enquire Now</a>
                         <a href="{{ route('product') }}" class="btn outline-btn">Back to Products</a>
                     </div>
                 </div>

             </div>
         </div>
     </section>
     <!-- Related Products Section -->
     <section class="related-products py-5">
         <div class="container">
             <h2 class="section-title">Related Products</h2>
             <div class="product-grid">

                 <!-- Product Card 1 -->
                 <div class="product-card">
                     <span class="badge-label">Sale</span>
                     <button class="fav-btn"><i class="fa-regular fa-heart"></i></button>
                     <img src="{{ asset('assets/img/bucketk5.png') }}" alt="Product 1">
                     <h3>P10</h3>
                     <div class="stars">
                         <i class="fa-solid fa-star"></i>
                         <i class="fa-solid fa-star"></i>
                         <i class="fa-solid fa-star"></i>
                         <i class="fa-solid fa-star"></i>
                         <i class="fa-solid fa-star"></i>
                     </div>
                 </div>

                 <!-- Product Card 2 -->
                 <div class="product-card">
                     <span class="badge-label">New</span>
                     <button class="fav-btn"><i class="fa-regular fa-heart"></i></button>
                     <img src="{{ asset('assets/img/bucketk5.png') }}" alt="Product 2">
                     <h3>K10</h3>
                     <div class="stars">
                         <i class="fa-solid fa-star"></i>
                         <i class="fa-solid fa-star"></i>
                         <i class="fa-solid fa-star"></i>
                         <i class="fa-solid fa-star"></i>
                         <i class="fa-solid fa-star"></i>
                     </div>
                 </div>

                 <!-- Product Card 3 -->
                 <div class="product-card">
                     <span class="badge-label">Hot</span>
                     <button class="fav-btn"><i class="fa-regular fa-heart"></i></button>
                     <img src="{{ asset('assets/img/bucketk5.png') }}" alt="Product 3">
                     <h3>K5</h3>
                     <div class="stars">
                         <i class="fa-solid fa-star"></i>
                         <i class="fa-solid fa-star"></i>
                         <i class="fa-solid fa-star"></i>
                         <i class="fa-solid fa-star"></i>
                         <i class="fa-solid fa-star"></i>
                     </div>
                 </div>

                 <!-- Product Card 4 -->
                 <div class="product-card">
                     <span class="badge-label">Hot</span>
                     <button class="fav-btn"><i class="fa-regular fa-heart"></i></button>
                     <img src="{{ asset('assets/img/bucketk5.png') }}" alt="Product 4">
                     <h3>P20</h3>
                     <div class="stars">
                         <i class="fa-solid fa-star"></i>
                         <i class="fa-solid fa-star"></i>
                         <i class="fa-solid fa-star"></i>
                         <i class="fa-solid fa-star"></i>
                         <i class="fa-solid fa-star"></i>
                     </div>
                 </div>

             </div>
         </div>
     </section>

     <!-- Font Awesome -->
     <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

     <!-- Footer -->
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
                         <li><a href="#home">Home</a></li>
                         <li><a href="#about">About</a></li>
                         <li><a href="#product">Products</a></li>
                         <li><a href="#why-us">Why choose us</a></li>
                         <li><a href="#contact">Contact</a></li>
                     </ul>
                 </div>
                 <div class="footer-col">
                     <h4>Products</h4>
                     <ul class="footer-links">
                         <li><a href="#">Food Storage</a></li>
                         <li><a href="#">Cosmetic Containers</a></li>
                         <li><a href="#">Industrial Solutions</a></li>
                         <li><a href="#">Custom Designs</a></li>
                         <li><a href="#">Bulk Orders</a></li>
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
     <style>
         :root {
             --primary-color: #45aae3;
             --secondary-color: #6c757d;
             --bg-light: #f8fafc;
             --text-dark: #1e1e1e;
         }

         .product-details {
             padding: 60px 0;
             margin-top: 60px;
             background: var(--bg-light);
         }

         .container {
             /* width: 90%; */
             max-width: 1200px;
             /* padding: 40px; */
             margin: auto;
         }

         .product-wrapper {
             display: flex;
             flex-wrap: wrap;
             gap: 40px;
             align-items: flex-start;
         }

         .product-gallery {
             flex: 1 1 45%;
             width: 100%;
             max-width: 600px;
             height: auto;
         }

         .main-image {
             width: 100%;
             height: 500px;
             border-radius: 10px;
             overflow: hidden;
             /* box-shadow: 0 4px 14px rgba(0, 0, 0, 0.1); */
         }

         /* Related Products Section */
         .related-products {
             background: #fff;
             padding: 60px 0;
         }

         .section-title {
             font-family: 'Playfair Display', serif;
             font-weight: 700;
             font-size: 2rem;
             text-align: center;
             margin-bottom: 40px;
             color: #1e1e1e;
         }

         /* Product Grid */
         .product-grid {
             display: grid;
             grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
             gap: 25px;
             justify-items: center;
         }

         /* Product Card */
         .product-card {
             background: #fff;
             border-radius: 20px;
             box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
             padding: 25px 15px 30px;
             text-align: center;
             position: relative;
             transition: all 0.3s ease;
             width: 260px;
         }

         .product-card:hover {

             transform: translateY(-6px);
             box-shadow: 0 12px 35px rgba(0, 0, 0, 0.12);
         }

         /* Badge Label */
         .badge-label {
             position: absolute;
             top: 15px;
             left: 15px;
             background: #45aae3;
             color: #fff;
             font-size: 0.8rem;
             font-weight: 600;
             padding: 5px 10px;
             border-radius: 8px;
             box-shadow: 0 2px 5px rgba(13, 110, 253, 0.2);
         }

         /* Favorite Button */
         .fav-btn {
             position: absolute;
             top: 15px;
             right: 15px;
             background: #fff;
             border: none;
             border-radius: 50%;
             width: 32px;
             height: 32px;
             display: flex;
             align-items: center;
             justify-content: center;
             box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
             cursor: pointer;
             transition: all 0.3s ease;
         }

         .fav-btn:hover {
             background: #f1f5ff;
             color: #0d6efd;
         }

         .fav-btn i {
             font-size: 1rem;
             color: #6c757d;
         }

         /* Product Image */
         .product-card img {
             max-width: 100%;

             background-color: #f8f9fa;
             border-radius: 20px;
             object-fit: contain;
             transition: transform 0.4s ease;
         }

         .product-card:hover img {
             transform: scale(1.05);
         }

         /* Product Title */
         .product-card h3 {
             font-family: 'Playfair Display', serif;
             font-size: 1.1rem;
             font-weight: 600;
             margin-top: 15px;
             color: #212529;
         }

         /* Stars */
         .stars {
             margin-top: 10px;
         }

         .stars i {
             color: #ffc107;
             margin: 0 2px;
         }

         /* Responsive */
         @media (max-width: 576px) {
             .product-card {
                 width: 90%;
             }
         }

         .main-image img {
             width: 100%;
             height: 90%;
             object-fit: cover;
             transition: transform 0.4s ease;
         }

         .main-image img:hover {
             transform: scale(1.05);
         }

         .thumbnail-row {
             display: flex;
             justify-content: flex-start;
             gap: 10px;
             margin-top: 15px;
         }

         .thumbnail-row img {
             width: 80px;
             height: 80px;
             object-fit: cover;
             border-radius: 6px;
             cursor: pointer;
             border: 2px solid transparent;
             transition: all 0.3s ease;
         }

         .thumbnail-row img:hover,
         .thumbnail-row img.active {
             border-color: var(--primary-color);
         }

         .product-info {
             flex: 1 1 50%;
         }

         .product-title {
             font-size: 2rem;
             font-weight: 600;
             color: var(--text-dark);
             margin-bottom: 10px;
         }

         .product-subtitle {
             font-size: 1.1rem;
             color: var(--secondary-color);
             margin-bottom: 20px;
         }

         .product-desc {
             font-size: 1rem;
             color: #444;
             line-height: 1.7;
             margin-bottom: 20px;
         }

         .product-features {
             list-style: none;
             padding: 0;
             margin-bottom: 25px;
         }

         .product-features li {
             margin-bottom: 8px;
             color: #333;
             font-weight: 500;
         }

         .product-buttons {
             display: flex;
             gap: 15px;
         }

         .btn {
             padding: 12px 24px;
             border-radius: 6px;
             text-decoration: none;
             font-weight: 500;
             transition: 0.3s ease;
         }

         .primary-btn {
             background: var(--primary-color);
             color: #fff;
         }

         .primary-btn:hover {
             background: #45aae3;
         }

         .outline-btn {
             border: 2px solid var(--primary-color);
             color: var(--primary-color);
             background: transparent;
         }

         .outline-btn:hover {
             background: var(--primary-color);
             color: #fff;
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

         .hamburger {
             display: none;
             cursor: pointer;
             font-size: 20px;
             color: #0f0707;
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

         .hamburger {
             display: none;
             cursor: pointer;
             font-size: 20px;
             color: #000000;
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

         :root {
             /* Brand Colors */
             --primary: #45aae3;
             /* Bright Brand Blue */
             --primary-dark: #45aae3;
             /* Deeper Blue for hover states */
             --secondary: #6610F2;
             /* Violet Accent */
             --accent: #45aae3;
             /* Light Blue highlight tone */

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

         body {
             font-family: "Playfair Display", serif;
             line-height: 1.6;
             color: var(--dark);
             background-color: var(--light);
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


         .qrcode {
             width: 150px;
             height: 150px;
         }

         /* Hero Section */
         /* Responsive */
         @media (max-width: 768px) {
             .product-wrapper {
                 flex-direction: column;
             }

             .main-image {
                 height: 300px;
             }

             .product-title {
                 font-size: 1.6rem;
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

             .product-info {
                 flex: 1 1 50%;
                 text-align: center;
             }
     .product-buttons {
                 display: contents;
                 gap: 15px;
             }
             .logo {
                 font-size: 12px;
             }
         }
     </style>
     <script>
         function changeImage(element) {
             const mainImage = document.getElementById("mainImage");
             const thumbnails = document.querySelectorAll(".thumb");

             // Set new main image
             mainImage.src = element.src;

             // Remove active state from all
             thumbnails.forEach(img => img.classList.remove("active"));

             // Add active to clicked one
             element.classList.add("active");
         }

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

 </html>
