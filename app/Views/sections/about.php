    <!-- About Section -->
<section id="about" class="about section light-background">

  <div class="container section-title" data-aos="fade-up">
    <h2>About</h2>
    <div class="title-shape">
      <svg viewBox="0 0 200 20" xmlns="http://www.w3.org/2000/svg">
        <path d="M 0,10 C 40,0 60,20 100,10 C 140,0 160,20 200,10" fill="none" stroke="currentColor" stroke-width="2"></path>
      </svg>
    </div>
  </div>

  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row align-items-center">
      <div class="col-lg-6 position-relative" data-aos="fade-right" data-aos-delay="200">
        <div class="about-image">
          <img src="<?= base_url('assets/img/profile/profile4.jpg'); ?>" alt="Profile Image" class="img-fluid rounded-4">
        </div>
      </div>

      <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
        <div class="about-content">
          <span class="subtitle">About Me</span>

          <h2><?= esc($about['occupation']); ?> &amp; Web Developer</h2>

          <p class="lead mb-4">
            Hi, I’m <?= esc($about['nama']); ?> (<?= esc($about['umur']); ?> years old).  
            I’m a college student majoring in Informatics Engineering at the University of Muhammadiyah Sukabumi, class of 2023. I’m interested in front-end development and UI/UX design, and I love expressing creativity through design and music.
          </p>

          <div class="personal-info">
            <div class="row g-4">
              <div class="col-6">
                <div class="info-item"><span class="label">Name</span><span class="value"><?= esc($about['nama']); ?></span></div>
              </div>
              <div class="col-6">
                <div class="info-item"><span class="label">Phone</span><span class="value"><?= esc($about['no_hp']); ?></span></div>
              </div>
              <div class="col-6">
                <div class="info-item"><span class="label">Age</span><span class="value"><?= esc($about['umur']); ?> Years</span></div>
              </div>
              <div class="col-6">
                <div class="info-item"><span class="label">Email</span><span class="value"><?= esc($about['email']); ?></span></div>
              </div>
              <div class="col-6">
                <div class="info-item"><span class="label">Occupation</span><span class="value"><?= esc($about['occupation']); ?></span></div>
              </div>
              <div class="col-6">
                <div class="info-item"><span class="label">Nationality</span><span class="value"><?= esc($about['nationality']); ?></span></div>
              </div>
            </div>
          </div>

          <div class="signature mt-4">
            <div class="signature-info">
              <h4><?= esc($about['nama']); ?></h4>
              <p><a href="<?= esc($about['linkedin']); ?>" target="_blank">LinkedIn Profile</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>