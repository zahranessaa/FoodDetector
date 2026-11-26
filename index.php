<?php
$judul = 'Beranda';
$aktif = '';
include 'includes/header.php';
?>


<section class="hero container py-5">
  <img src="Slice 1.png" class="img-fluid">
  <div class="row mt-5">
    <div class="card-body text-center">
        <h1>Langsung cek saja disini!</h1>
        <p class="fs-4">
            Isi nama, jenis, tanggal beli, dan tempat penyimpanan.
            Kamu langsung mendapat penjelasan apakah makanan itu masih bisa dimakan
            atau sebaiknya dibuang.
        </p>
        <div class="d-grid gap-2 col-6 mx-auto">
          <a href="cek.php" class="btn btn-success" type="button">Cek Sekarang!</a>
        </div>
    </div>
  </div>


<section class="container py-4 pb-5">
  <h2 class="mb-4">Cara kerjanya</h2>
  <div class="row g-4">
    <div class="col-md-4">
      <div class="cmb-card-sm p-4 h-100">
      
        <h3 class="h5">1. Isi data makanan</h3>
        <p class="text-muted-cmb mb-0">Nama makanan, jenis, tanggal beli, dan tempat penyimpanan.</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="cmb-card-sm p-4 h-100">
        <h3 class="h5">2. Baca penjelasannya</h3>
        <p class="text-muted-cmb mb-0">Hasil berupa penjelasan apakah makanan masih bisa dimakan atau tidak.</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="cmb-card-sm p-4 h-100">
        <h3 class="h5">3. Naik ke premium</h3>
        <p class="text-muted-cmb mb-0">Kirim foto makanan, dapat langkah yang bisa dilakukan, dan konsultasi dokter pribadi.</p>
      </div>
    </div>
  </div>
</section>


<section class="bg-white border-top border-bottom">
  <div class="container py-5 d-flex flex-wrap align-items-center justify-content-between gap-3">
    <div style="max-width: 640px">
      <h2 class="h3">Butuh penjelasan yang lebih spesifik?</h2>
      <p class="text-muted-cmb mb-0">Daftar dan berlangganan untuk mengirim foto makanan, mendapat langkah penanganan, dan berkonsultasi dengan dokter pribadi dari dashboard.</p>
    </div>
    <a href="langganan.php" class="btn btn-dark btn-lg px-4">Berlangganan</a>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
