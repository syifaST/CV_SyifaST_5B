<section id="contact" class="contact section light-background">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row g-5">
      <!-- KIRI: DATA KONTAK DARI DATABASE -->
      <div class="col-lg-6">
        <div class="content" data-aos="fade-up" data-aos-delay="200">
          <div class="section-category mb-3">Contact</div>
          <h2 class="display-5 mb-4">Hubungi Saya</h2>
          <p class="lead mb-4">Jika ingin berkomunikasi atau bekerja sama, berikut informasi kontak saya</p>

          <div class="contact-info mt-5">
            <div class="info-item d-flex mb-3">
              <i class="bi bi-person me-3"></i>
              <span><?= esc($contact['nama']); ?></span>
            </div>

            <div class="info-item d-flex mb-3">
              <i class="bi bi-envelope-at me-3"></i>
              <span><?= esc($contact['email']); ?></span>
            </div>

            <div class="info-item d-flex mb-3">
              <i class="bi bi-telephone me-3"></i>
              <span><?= esc($contact['no_hp']); ?></span>
            </div>

            <div class="info-item d-flex mb-4">
              <i class="bi bi-geo-alt me-3"></i>
              <span><?= esc($contact['lokasi']); ?></span>
            </div>
          </div>
        </div>
      </div>

      <!-- KANAN: FOTO -->
      <div class="col-lg-6">
        <div class="card border-0 shadow-sm" data-aos="fade-up" data-aos-delay="300">
          <div class="card-body p-0">
            <img src="<?= base_url('assets/img/profile/profile4.jpg'); ?>" alt="contact Image" class="img-fluid rounded-4">
          </div>
        </div>
      </div>

    </div>

  </div>

</section><!-- /Contact Section -->
