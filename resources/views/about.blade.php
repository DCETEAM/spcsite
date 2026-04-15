<section class="quality-section">
  <div class="container">
    <div class="section-header">
      <h2>Driven by Quality & Innovation</h2>
      <p>
        Precision moulding technology ensures containers with accurate dimensions, smooth finish, and durability.
        It forms the foundation for high-quality printing on moulds.
      </p>
    </div>

    <div class="quality-grid">
      <!-- Item 1 -->
      <div class="quality-item">
        <div class="quality-image">
          <img src="{{ asset('assets/img/lab1.png') }}" alt="In-House Quality Lab">
        </div>
        <div class="quality-content">
          <h3>In-House Quality Lab</h3>
          <p>Zero-Defect Testing</p>
        </div>
      </div>

      <!-- Item 2 -->
      <div class="quality-item">
        <div class="quality-image">
          <img src="{{ asset('assets/img/lab1.png') }}" alt="QcDS Commitment">
        </div>
        <div class="quality-content">
          <h3>QcDS Commitment</h3>
          <p>Uncompromising QCDS Standards</p>
        </div>
      </div>

      <!-- Item 3 -->
      <div class="quality-item">
        <div class="quality-image">
          <img src="{{ asset('assets/img/lab1.png') }}" alt="Leak-Proof Containers">
        </div>
        <div class="quality-content">
          <h3>Leak-Proof & Reliable</h3>
          <p>Durable & Tamper-Proof Containers</p>
        </div>
      </div>

      <!-- Item 4 -->
      <div class="quality-item">
        <div class="quality-image">
          <img src="{{ asset('assets/img/lab1.png') }}" alt="Scalability and Reliability">
        </div>
        <div class="quality-content">
          <h3>Scalability & Reliability</h3>
          <p>Consistent Output at Any Scale</p>
        </div>
      </div>

      <!-- Item 5 -->
      <div class="quality-item">
        <div class="quality-image">
          <img src="assets/img/custom-design.jpg" alt="Customised Design">
        </div>
        <div class="quality-content">
          <h3>Customised Design</h3>
          <p>Tailor-Made Packaging Solutions</p>
        </div>
      </div>

      <!-- Item 6 -->
      <div class="quality-item">
        <div class="quality-image">
          <img src="assets/img/printing.jpg" alt="Printing Expertise">
        </div>
        <div class="quality-content">
          <h3>Printing Expertise</h3>
          <p>Advanced Decoration (Screen, HTL, IML)</p>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
/* General Reset */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: "Poppins", sans-serif;
  background: #ffffff;
  color: #333;
}

/* Section Base */
.quality-section {
  padding: 100px 20px;
  background: linear-gradient(180deg, #ffffff 0%, #f9f9f9 100%);
}

/* Container */
.container {
  max-width: 1200px;
  margin: 0 auto;
}

/* Section Header */
.section-header {
  text-align: center;
  margin-bottom: 70px;
}
.section-header h2 {
  font-size: 2.4rem;
  font-weight: 700;
  color: #d62828;
  text-transform: uppercase;
  margin-bottom: 20px;
}
.section-header p {
  font-size: 1.1rem;
  color: #555;
  max-width: 850px;
  margin: 0 auto;
  line-height: 1.7;
}

/* Grid */
.quality-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 40px;
}

/* Item */
.quality-item {
  background: #fff;
  border-radius: 16px;
  overflow: hidden;
  box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
  transition: transform 0.4s ease, box-shadow 0.4s ease;
}

.quality-item:hover {
  transform: translateY(-8px);
  box-shadow: 0 12px 32px rgba(0, 0, 0, 0.12);
}

/* Image */
.quality-image img {
  width: 100%;
  height: 220px;
  object-fit: cover;
  transition: transform 0.4s ease;
}
.quality-item:hover img {
  transform: scale(1.05);
}

/* Content */
.quality-content {
  padding: 25px 20px 35px;
  text-align: center;
}
.quality-content h3 {
  font-size: 1.25rem;
  color: #003049;
  font-weight: 600;
  margin-bottom: 10px;
}
.quality-content p {
  font-size: 1rem;
  color: #555;
  line-height: 1.6;
}

/* Responsive */
@media (max-width: 768px) {
  .section-header h2 {
    font-size: 2rem;
  }
  .quality-grid {
    gap: 25px;
  }
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
                padding: 0;
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
</style>
