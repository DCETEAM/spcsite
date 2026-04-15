<!-- Printing & Decoration Section -->
<section class="printing-decoration py-5">
  <div class="container text-center">
    <h2 class="section-title">HIGH-IMPACT PRINTING & DECORATION</h2>
    <p class="section-desc">
      At Senthil Plastic Containers Pvt. Ltd., packaging is more than protection — it’s brand expression. 
      With advanced printing and decoration technologies, we create packaging that is functional, durable, 
      and visually striking.
    </p>

    <div class="image-wrapper">
      <img src="your-image-path.jpg" alt="Printing & Decoration" class="factory-img">
    </div>
  </div>
</section>

<!-- In-Mould Labelling Section -->
<section class="iml-section py-5">
  <div class="container text-center">
    <h3 class="sub-title">IN-MOULD LABELLING (IML)</h3>
    <p class="sub-desc">
      State-of-the-art robotic technology delivering flawless, integrated branding. 
      IML Technology — Where Packaging Becomes Branding.
    </p>

    <div class="iml-features">
      <div class="feature">
        <i class="fas fa-eye"></i>
        <p>Eye-Catching</p>
      </div>
      <div class="feature">
        <i class="fas fa-link"></i>
        <p>Built to last</p>
      </div>
      <div class="feature">
        <i class="fas fa-star"></i>
        <p>Premium Finish</p>
      </div>
    </div>
  </div>
</section>
<style>
    :root {
  --primary: #0D6EFD;
  --secondary: #6C757D;
  --text: #1E1E1E;
  --background: #F8FAFC;
}

body {
  font-family: 'Poppins', sans-serif;
  background-color: var(--background);
  color: var(--text);
}

/* Printing Section */
.printing-decoration {
  background: #fff;
}

.section-title {
  font-family: 'Playfair Display', serif;
  font-weight: 700;
  font-size: 2rem;
  margin-bottom: 1rem;
  color: var(--text);
}

.section-desc {
  font-size: 1rem;
  color: var(--secondary);
  max-width: 800px;
  margin: 0 auto 2rem;
  line-height: 1.7;
}

.image-wrapper {
  overflow: hidden;
  border-radius: 20px;
  max-width: 900px;
  margin: 0 auto;
}

.factory-img {
  width: 100%;
  display: block;
  border-radius: 20px;
  transition: transform 0.4s ease;
}

.factory-img:hover {
  transform: scale(1.03);
}

/* IML Section */
.iml-section {
  background: var(--background);
  padding-top: 4rem;
  padding-bottom: 4rem;
}

.sub-title {
  font-size: 1.6rem;
  font-weight: 700;
  color: var(--text);
}

.sub-desc {
  color: var(--secondary);
  max-width: 700px;
  margin: 1rem auto 2.5rem;
  line-height: 1.6;
}

.iml-features {
  display: flex;
  justify-content: center;
  gap: 4rem;
  flex-wrap: wrap;
}

.feature {
  text-align: center;
}

.feature i {
  font-size: 2rem;
  color: var(--primary);
  margin-bottom: 0.5rem;
}

.feature p {
  font-weight: 500;
  color: var(--text);
}

/* Responsive */
@media (max-width: 768px) {
  .section-title {
    font-size: 1.6rem;
  }
  .iml-features {
    gap: 2rem;
  }
}
</style>