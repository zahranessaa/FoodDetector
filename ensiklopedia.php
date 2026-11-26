<?php
$judul = 'Ensiklopedia';
$aktif = 'ensiklopedia';
$scripts = ['assets/js/ensiklopedia.js'];
include 'includes/header.php';

// DATA CONTOH. Nanti ganti dengan query ke tabel `ensiklopedia` (PDO).
// Sebelum dikumpulkan, ganti isinya dengan sumber resmi (Kemenkes / BPOM).
$items = [
    ['nama' => 'Nasi putih',            'jenis' => 'Lauk biasa',          'terbuka' => '±1 hari',    'dingin' => '3-4 hari', 'tips' => 'Dinginkan cepat, simpan tertutup, panaskan sampai benar-benar panas.'],
    ['nama' => 'Masakan bersantan',     'jenis' => 'Lauk berkuah/santan', 'terbuka' => '±6-8 jam',   'dingin' => '1-2 hari', 'tips' => 'Santan cepat basi. Panaskan ulang sampai mendidih.'],
    ['nama' => 'Tempe dan tahu goreng', 'jenis' => 'Lauk biasa',          'terbuka' => '±1 hari',    'dingin' => '3 hari',   'tips' => 'Buang jika berlendir, berbau asam, atau berjamur.'],
    ['nama' => 'Sayur bening atau berkuah', 'jenis' => 'Sayur-mayur',     'terbuka' => '±1 hari',    'dingin' => '2-3 hari', 'tips' => 'Jangan dicampur sendok bekas makan agar tidak cepat rusak.'],
    ['nama' => 'Gorengan',              'jenis' => 'Snack',               'terbuka' => '1-2 hari',   'dingin' => '3-4 hari', 'tips' => 'Simpan di wadah berpori agar tidak lembap.'],
    ['nama' => 'Buah potong',           'jenis' => 'Snack',               'terbuka' => '±2 jam',     'dingin' => '1-2 hari', 'tips' => 'Simpan di wadah tertutup di kulkas.'],
];
$filter = ['Semua', 'Lauk berkuah/santan', 'Lauk biasa', 'Snack', 'Sayur-mayur'];
?>

<main class="container py-5">
  <h1 class="mb-2">Ensiklopedia</h1>
  <p class="fs-5 text-muted-cmb mb-4">Perkiraan daya tahan berbagai makanan sesuai tempat penyimpanannya.</p>

  <div class="mb-3" style="max-width: 560px">
    <label for="cari" class="visually-hidden">Cari makanan</label>
    <div class="position-relative">
      <i class="bi bi-search position-absolute" style="left: 16px; top: 14px; color: var(--cmb-muted)"></i>
      <input id="cari" type="search" class="form-control ps-5" placeholder="Cari makanan, misalnya nasi atau gorengan">
    </div>
  </div>

  <div class="d-flex flex-wrap gap-2 mb-4" id="filter" role="group" aria-label="Filter jenis makanan">
    <?php foreach ($filter as $i => $f): ?>
      <button type="button" class="btn btn-sm rounded-pill px-3 <?= $i === 0 ? 'btn-primary' : 'btn-outline-dark' ?>" data-jenis="<?= $i === 0 ? '' : htmlspecialchars($f) ?>">
        <?= htmlspecialchars($f) ?>
      </button>
    <?php endforeach; ?>
  </div>

  <div class="alert alert-warning d-flex gap-2 align-items-center" role="note">
    <i class="bi bi-info-circle-fill"></i>
    Data di halaman ini masih contoh. Ganti dengan sumber resmi (Kemenkes atau BPOM) sebelum dipakai.
  </div>

  <div class="row g-4" id="daftar">
    <?php foreach ($items as $it): ?>
      <div class="col-md-6 col-lg-4 item" data-nama="<?= htmlspecialchars(strtolower($it['nama'])) ?>" data-jenis="<?= htmlspecialchars($it['jenis']) ?>">
        <article class="cmb-card-sm p-4 h-100 d-flex flex-column gap-3">
          <div>
            <span class="chip mb-2"><?= htmlspecialchars($it['jenis']) ?></span>
            <h2 class="h5 mb-0"><?= htmlspecialchars($it['nama']) ?></h2>
          </div>
          <dl class="mb-0">
            <div class="d-flex justify-content-between"><dt class="fw-normal text-muted-cmb">Ruangan terbuka</dt><dd class="fw-bold mb-1"><?= htmlspecialchars($it['terbuka']) ?></dd></div>
            <div class="d-flex justify-content-between"><dt class="fw-normal text-muted-cmb">Suhu dingin</dt><dd class="fw-bold mb-0"><?= htmlspecialchars($it['dingin']) ?></dd></div>
          </dl>
          <p class="small text-muted-cmb border-top pt-3 mb-0"><?= htmlspecialchars($it['tips']) ?></p>
        </article>
      </div>
    <?php endforeach; ?>
  </div>
  <p id="kosong" class="text-muted-cmb d-none mt-3">Tidak ada makanan yang cocok.</p>
</main>

<?php include 'includes/footer.php'; ?>
