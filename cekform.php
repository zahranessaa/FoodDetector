<?php
$judul = 'Check Now';
$aktif = 'cek';
include 'includes/header.php';

// Tanggal default = hari ini, dan tidak boleh di masa depan
$hariIni = date('Y-m-d');
?>

<main class="container py-5">
  
    <div class="text-center mb-4">
        <h1 class="mb-2">Check Now</h1>
        <p class="fs-5 text-muted-cmb">
            Isi empat data di bawah, lalu tekan Cek Sekarang.
        </p>
    </div>
<div class="row justify-content-center">
        <div class="col-lg-8">
      <form id="form-cek" class="cmb-card p-4 p-md-4">

        <div class="mb-4">
          <label for="nama" class="form-label">Nama makanan</label>
          <input id="nama" name="nama" type="text" class="form-control" maxlength="100" placeholder="contoh: opor ayam" required>
        </div>

        <fieldset class="mb-4 opsi">
          <legend class="form-label">Jenis makanan</legend>
          <div class="row g-2">
            <div class="col-sm-6">
              <input type="radio" class="btn-check" name="jenis" id="j1" value="lauk_santan" checked>
              <label class="btn" for="j1">Lauk berat (berkuah/santan)</label>
            </div>
            <div class="col-sm-6">
              <input type="radio" class="btn-check" name="jenis" id="j2" value="lauk_biasa">
              <label class="btn" for="j2">Lauk berat biasa</label>
            </div>
            <div class="col-sm-6">
              <input type="radio" class="btn-check" name="jenis" id="j3" value="snack">
              <label class="btn" for="j3">Snack</label>
            </div>
            <div class="col-sm-6">
              <input type="radio" class="btn-check" name="jenis" id="j4" value="sayur">
              <label class="btn" for="j4">Sayur-mayur</label>
            </div>
          </div>
        </fieldset>

        <div class="mb-4">
          <label for="tglBeli" class="form-label">Tanggal beli</label>
          <input id="tglBeli" name="tglBeli" type="date" class="form-control" value="<?= $hariIni ?>" max="<?= $hariIni ?>" required>
        </div>

        <fieldset class="mb-4 opsi">
          <legend class="form-label">Tempat penyimpanan</legend>
          <div class="row g-2">
            <div class="col-sm-4">
              <input type="radio" class="btn-check" name="tempat" id="t1" value="terbuka" checked>
              <label class="btn" for="t1"><i class="bi bi-sun"></i> Ruangan terbuka</label>
            </div>
            <div class="col-sm-4">
              <input type="radio" class="btn-check" name="tempat" id="t2" value="tertutup">
              <label class="btn" for="t2"><i class="bi bi-house-door"></i> Ruangan tertutup</label>
            </div>
            <div class="col-sm-4">
              <input type="radio" class="btn-check" name="tempat" id="t3" value="kulkas">
              <label class="btn" for="t3"><i class="bi bi-snow"></i> Suhu dingin</label>
            </div>
          </div>
        </fieldset>

        <button type="submit" id="btn-cek" class="btn btn-primary btn-lg w-100">Cek Sekarang</button>
      </form>
    </div>

    <!-- HASIL -->
    <div class="col-lg-6 d-flex flex-column gap-3">
      <section class="cmb-card p-4" aria-label="Hasil pengecekan" aria-live="polite">
        <h2 class="h5 mb-3">Hasil pengecekan</h2>
        <div id="hasil">
          <p class="text-muted-cmb mb-0">Hasil akan muncul di sini setelah kamu menekan Cek Sekarang.</p>
        </div>
      </section>

      <div class="d-flex flex-wrap gap-2 justify-content-center mb-4" aria-label="Tiga kemungkinan status">
        <span class="pill-status status-layak"><i class="bi bi-check-circle-fill"></i> Masih layak</span>
        <span class="pill-status status-hati"><i class="bi bi-exclamation-triangle-fill"></i> Hati-hati</span>
        <span class="pill-status status-tidak"><i class="bi bi-x-circle-fill"></i> Tidak layak</span>
      </div>

      <aside class="upsell p-4">
        <h3 class="h5">Mau penjelasan yang lebih spesifik?</h3>
        <p class="mb-3">Kirim foto makanan, dapatkan langkah yang bisa dilakukan, dan konsultasi dengan dokter pribadi.</p>
        <a href="langganan.php" class="btn btn-dark">Lihat paket premium</a>
      </aside>
    </div>
  </div>
</main>

<?php include 'includes/footer.php'; ?>
