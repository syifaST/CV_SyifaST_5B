<!-- Skills Section -->
<section id="skills" class="skills section">
  <div class="container section-title" data-aos="fade-up">
    <h2>Skills</h2>
    <div class="title-shape">
      <svg viewBox="0 0 200 20" xmlns="http://www.w3.org/2000/svg">
        <path d="M 0,10 C 40,0 60,20 100,10 C 140,0 160,20 200,10" fill="none" stroke="currentColor" stroke-width="2"></path>
      </svg>
    </div>
    <p>Berikut beberapa kemampuan yang saya kuasai di bidang pengembangan web, desain, dan proyek kreatif.</p>
  </div>

  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row g-4 skills-animation">
      <?php foreach ($skills as $index => $skill): ?>
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="<?= ($index + 1) * 100 ?>">
          <div class="skill-box">
            <h3><?= esc($skill['nama_skill']) ?></h3>
            <p><?= esc($skill['deskripsi']) ?></p>
            <span class="text-end d-block"><?= esc($skill['persen']) ?>%</span>
            <div class="progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="<?= esc($skill['persen']) ?>" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<!-- /Skills Section -->


<!-- Resume Section -->
<section id="resume" class="resume section">
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Resume</h2>
    <div class="title-shape">
      <svg viewBox="0 0 200 20" xmlns="http://www.w3.org/2000/svg">
        <path d="M 0,10 C 40,0 60,20 100,10 C 140,0 160,20 200,10" fill="none" stroke="currentColor" stroke-width="2"></path>
      </svg>
    </div>
    <p>Berikut merupakan ringkasan perjalanan pendidikan dan pengalaman organisasi yang telah saya jalani sebagai bagian dari pengembangan diri dan peningkatan kemampuan.</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row">
      <div class="col-12">
        <div class="resume-wrapper">

          <!-- Work Experience -->
          <div class="resume-block" data-aos="fade-up">
            <h2>Experience</h2>
            <p class="lead">Berikut beberapa pengalaman organisasi dan proyek yang pernah saya ikuti.</p>

            <div class="timeline">
              <?php if (!empty($experience)): ?>
                <?php foreach ($experience as $exp): ?>
                  <div class="timeline-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="timeline-left">
                      <h4 class="company"><?= esc($exp['nama_kegiatan']) ?></h4>
                      <span class="period">
                        <?= esc($exp['tahun_mulai']); ?>
                        <?= !empty($exp['tahun_selesai']) ? ' - ' . esc($exp['tahun_selesai']) : '' ?>
                      </span>

                    </div>
                    <div class="timeline-dot"></div>
                    <div class="timeline-right">
                      <h3 class="position"><?= esc($exp['posisi']) ?></h3>
                      <p class="description"><?= esc($exp['deskripsi']) ?></p>
                    </div>
                  </div>
                <?php endforeach; ?>
              <?php else: ?>
                <p>Belum ada data pengalaman yang ditambahkan.</p>
              <?php endif; ?>
            </div>
          </div>

          <!-- Education -->
          <div class="resume-block" data-aos="fade-up" data-aos-delay="100">
            <h2>My Education</h2>
            <p class="lead">Berikut riwayat pendidikan yang telah ditempuh.</p>

            <div class="timeline">
              <?php if (!empty($education)): ?>
                <?php foreach ($education as $edu): ?>
                  <div class="timeline-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="timeline-left">
                      <h4 class="company"><?= esc($edu['institusi']) ?></h4>
                      <span class="period">
                        <?= esc($edu['tahun_mulai']) ?> -
                        <?= $edu['tahun_selesai'] ? esc($edu['tahun_selesai']) : 'Sekarang' ?>
                      </span>
                    </div>
                    <div class="timeline-dot"></div>
                    <div class="timeline-right">
                      <h3 class="position">
                        <?= esc($edu['jenjang']) ?>
                        <?php if ($edu['jurusan']): ?> - <?= esc($edu['jurusan']) ?><?php endif; ?>
                      </h3>
                      <p class="description"><?= esc($edu['deskripsi']) ?></p>
                    </div>
                  </div>
                <?php endforeach; ?>
              <?php else: ?>
                <p>Belum ada data pendidikan yang ditambahkan.</p>
              <?php endif; ?>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section><!-- /Resume Section -->
