<?php
$judul = 'Dashboard';
$aktif = '';
include 'includes/header.php';
?>

<main class="container py-5">
  <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-4">
    <div>
      <h1 class="mb-1">Halo, Nessa</h1>
      <span class="badge badge-gratis">Paket Gratis</span>
    </div>
          <div class="btn-group btn-group-sm" role="group" aria-label="Pratinjau"><a class="btn btn-outline-dark active" href="dashboard-gratis.php">Lihat gratis</a><a class="btn btn-outline-dark" href="dashboard-premium.php">Lihat premium</a></div>
      </div>

  <div class="row g-4 mb-4">
  </div>
  <div class="col-md-6">
    <div class="kartu-hijau p-4 h-100">
      <p class="mb-1 fw-bold opacity-75">Paket kamu</p>
      <p class="h3 mb-2">Gratis</p>
      <p class="mb-3 opacity-90">Naik ke premium untuk foto makanan, langkah penanganan, dan dokter AI pribadi.</p>
      <a href="langganan.html" class="btn btn-light">Upgrade</a>
    </div>
  </div>
</div>

<div class="cmb-card-sm p-4 mb-4">
  <h2 class="h5 mb-2">Riwayat cek terakhir</h2>
      <ul class="daftar-riwayat">
              <li>
          <span><strong>Opor ayam</strong> <span class="chip-outline">Berkuah/santan</span></span>
          <span class="d-flex align-items-center gap-3"><span class="pill-status status-tidak"><i class="bi bi-x-circle-fill" aria-hidden="true"></i> Tidak layak</span><span class="small text-muted-cmb">26 Nov 2026</span></span>
        </li>
              <li>
          <span><strong>Soto ayam</strong> <span class="chip-outline">Lauk biasa</span></span>
          <span class="d-flex align-items-center gap-3"><span class="pill-status status-hati"><i class="bi bi-exclamation-triangle-fill" aria-hidden="true"></i> Hati-hati</span><span class="small text-muted-cmb">26 Nov 2026</span></span>
        </li>
              <li>
          <span><strong>Keripik singkong</strong> <span class="chip-outline">Snack</span></span>
          <span class="d-flex align-items-center gap-3"><span class="pill-status status-layak"><i class="bi bi-check-circle-fill" aria-hidden="true"></i> Masih layak</span><span class="small text-muted-cmb">26 Nov 2026</span></span>
        </li>
              <li>
          <span><strong>Sayur asem</strong> <span class="chip-outline">Sayur-mayur</span></span>
          <span class="d-flex align-items-center gap-3"><span class="pill-status status-layak"><i class="bi bi-check-circle-fill" aria-hidden="true"></i> Masih layak</span><span class="small text-muted-cmb">26 Nov 2026</span></span>
        </li>
          </ul>
    <a href="ensiklopedia.html" class="fw-bold text-decoration-none">Lihat semua di Ensiklopedia <i class="bi bi-arrow-right"></i></a>
  </div>

<h2 class="h5 mb-3">Fitur premium</h2>
<div class="row g-4 mb-4 justify-content-center">
<div class="row g-4 mb-4">
      
    </div>
      <div class="col-md-6">
      <div class="fitur-terkunci p-4 h-100 text-center">
        <i class="bi bi-list-check fs-2"></i>
        <p class="fw-bold mt-2 mb-1">Langkah yang bisa dilakukan</p>
        <span class="small text-muted-cmb"><i class="bi bi-lock-fill"></i> Khusus premium</span>
      </div>
    </div>
      <div class="col-md-6">
      <div class="fitur-terkunci p-4 h-100 text-center">
        <i class="bi bi-chat-dots fs-2"></i>
        <p class="fw-bold mt-2 mb-1">Chatbox</p>
        <span class="small text-muted-cmb"><i class="bi bi-lock-fill"></i> Khusus premium</span>
      </div>
    </div>
  </div>
<div class="upsell p-4 d-flex flex-wrap align-items-center justify-content-between gap-3">
  <h3 class="h5 mb-0">Buka semua fitur premium</h3>
  <a href="langganan.html" class="btn btn-dark">Lihat paket</a>
</div>
</main>



<?php include 'includes/footer.php'; ?>