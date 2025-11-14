<section id="portfolio" class="portfolio section">

  <div class="container section-title" data-aos="fade-up">
    <h2>Portfolio</h2>
    <div class="title-shape">
      <svg viewBox="0 0 200 20" xmlns="http://www.w3.org/2000/svg">
        <path d="M 0,10 C 40,0 60,20 100,10 C 140,0 160,20 200,10" fill="none" stroke="currentColor" stroke-width="2"></path>
      </svg>
    </div>
    <p>Proyek yang menunjukan kreativitas dan perkembangan kemampuan saya</p>
  </div>

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

      <div class="portfolio-filters-container" data-aos="fade-up" data-aos-delay="200">
        <ul class="portfolio-filters isotope-filters">
          <li data-filter="*" class="filter-active">All Work</li>
          <li data-filter=".filter-design">Design</li>
          <li data-filter=".filter-crafting">Crafting</li>
        </ul>
      </div>

      <div class="row g-4 isotope-container" data-aos="fade-up" data-aos-delay="300">

        <?php if (!empty($portfolios)) : ?>
          <?php foreach ($portfolios as $p) : ?>
            <div class="col-lg-6 col-md-6 portfolio-item isotope-item <?= esc($p['kategori']); ?>">
              <div class="portfolio-card">
                <div class="portfolio-image">
                  <img src="<?= base_url('assets/img/portfolio/' . $p['gambar']); ?>" class="img-fluid" alt="<?= esc($p['judul']); ?>" loading="lazy">
                  <div class="portfolio-overlay">
                    <div class="portfolio-actions">
                      <a href="<?= base_url('assets/img/portfolio/' . $p['gambar']); ?>" class="glightbox preview-link" data-gallery="portfolio-gallery-<?= esc($p['kategori']); ?>"><i class="bi bi-eye"></i></a>
                    </div>
                  </div>
                </div>
                <div class="portfolio-content">
                  <span class="category"><?= ucfirst(str_replace('filter-', '', esc($p['kategori']))); ?></span>
                  <h3><?= esc($p['judul']); ?></h3>
                  <p><?= esc($p['deskripsi']); ?></p>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        <?php else : ?>
          <p class="text-center">Belum ada data portfolio.</p>
        <?php endif; ?>

      </div><!-- End Portfolio Container -->

    </div>

  </div>

</section>
