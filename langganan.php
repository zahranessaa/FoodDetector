<?php
$judul = 'Berlangganan';
$aktif = 'langganan';
include 'includes/header.php';

?>

<main class="container py-5">
  <div class="text-center mb-5">
    <h1 class="mb-2">Pilih paket yang pas</h1>
    <p class="fs-5 text-muted-cmb mx-auto" style="max-width: 540px">Mulai gratis. Naik ke premium kalau kamu butuh penjelasan yang lebih spesifik dan konsultasi dokter pribadi.</p>
  </div>

  <div class="row g-4 justify-content-center mx-auto" style="max-width: 880px">
    <div class="col-lg-4">
      <section class="cmb-card p-4 h-100 d-flex flex-column">
        <h2 class="h4">Gratis</h2>
        <p class="display-6 fw-bold mb-4">Rp0</p>
        
        <a href="cek.php" class="btn btn-outline-dark btn-lg mt-auto">Pakai gratis</a>
      </section>
    </div>

    <div class="col-lg-4">
      <section class="cmb-card plan-premium p-4 h-100 d-flex flex-column">
        <span class="plan-badge">Paling lengkap</span>
        <h2 class="h4">Premium</h2>

        <p class="display-6 fw-bold mb-4">"100 M"<span class="fs-6 fw-semibold text-muted-cmb">/ bulan</span></p>
        
        <a href="register.php" class="btn btn-primary btn-lg mt-auto">Daftar untuk berlangganan</a>
      </section>
    </div>
    <div class="col-lg-4">
      <section class="cmb-card plan-premium p-4 h-100 d-flex flex-column">
        <span class="plan-badge">Paling lengkap</span>
        <h2 class="h4">Premium</h2>

        <p class="display-6 fw-bold mb-4">"150 M"<span class="fs-6 fw-semibold text-muted-cmb">/ tahun</span></p>
        
        <a href="register.php" class="btn btn-primary btn-lg mt-auto">Daftar untuk berlangganan</a>
      </section>
    </div>
  </div>

  <p class="text-center footer-note mt-4">Setelah mendaftar dan berlangganan, kamu masuk ke dashboard untuk memakai fitur premium.</p>
</main>

<?php include 'includes/footer.php'; ?>
