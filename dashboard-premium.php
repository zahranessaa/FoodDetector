<?php
$judul = 'Dashboad';
$aktif = '';
include 'includes/header.php';

$hariIni = date('Y-m-d');
?>

<main class="container py-5">
  <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-4">
    <div>
      <h1 class="mb-1">Halo, Nessa</h1>
      <span class="badge badge-premium">Paket Premium</span>

  <div class="strip-premium p-3 mb-4 d-flex align-items-center gap-2">
  <i class="bi bi-patch-check-fill fs-5" style="color: var(--cmb-green)"></i>
  <span class="fw-semibold">Paket Premium aktif sampai [TANGGAL]</span>
</div>


<div class="row g-4 mb-4">
  <div class="col-lg-6">
    <form class="cmb-card p-4 h-100" novalidate>      <h2 class="h5 mb-3">Cek spesifik</h2>
      <div class="mb-3">
        <label for="p-nama" class="form-label">Nama makanan</label>
        <input id="p-nama" name="nama" class="form-control" maxlength="100" required>
      </div>
      <fieldset class="mb-16 opsi">
          <legend class="form-label">Jenis makanan</legend>
          <div class="row g-2">
            <div class="col-sm-6">
              <input type="radio" class="btn-check" name="jenis" id="j1" value="karbohidrat" checked>
              <label class="btn" for="j1">Karbohidrat</label>
            </div>
            <div class="col-sm-6">
              <input type="radio" class="btn-check" name="jenis" id="j2" value="daging_merah">
              <label class="btn" for="j2">Daging Merah</label>
            </div>
            <div class="col-sm-6">
              <input type="radio" class="btn-check" name="jenis" id="j3" value="unggas">
              <label class="btn" for="j3">Unggas</label>
            </div>
            <div class="col-sm-6">
              <input type="radio" class="btn-check" name="jenis" id="j4" value="seafood">
              <label class="btn" for="j4">Ikan & Seafood</label>
            </div>
            <div class="col-sm-6">
              <input type="radio" class="btn-check" name="jenis" id="j5" value="telur">
              <label class="btn" for="j5">Telur</label>
            </div>
            <div class="col-sm-6">
              <input type="radio" class="btn-check" name="jenis" id="j6" value="susu">
              <label class="btn" for="j6">Susu & olahannya</label>
            </div>
            <div class="col-sm-6">
              <input type="radio" class="btn-check" name="jenis" id="j7" value="sayur">
              <label class="btn" for="j7">Sayuran</label>
            </div>
            <div class="col-sm-6">
              <input type="radio" class="btn-check" name="jenis" id="j8" value="buah">
              <label class="btn" for="j8">Buah</label>
            </div>
            <div class="col-sm-6">
              <input type="radio" class="btn-check" name="jenis" id="j9" value="kedelai">
              <label class="btn" for="j9">Tahu, Tempe, dan olahan kedelai</label>
            </div>
            <div class="col-sm-6">
              <input type="radio" class="btn-check" name="jenis" id="j10" value="kuah">
              <label class="btn" for="j10">Berkuah</label>
            </div>
            <div class="col-sm-6">
              <input type="radio" class="btn-check" name="jenis" id="j11" value="kaleng_kemasan">
              <label class="btn" for="j11">Makanan Kaleng & Kemasan</label>
            </div>
            <div class="col-sm-6">
              <input type="radio" class="btn-check" name="jenis" id="j12" value="roti">
              <label class="btn" for="j12">Roti & Kue</label>
            </div>
            <div class="col-sm-6">
              <input type="radio" class="btn-check" name="jenis" id="j13" value="camilan">
              <label class="btn" for="j13">Camilan</label>
            </div>
            <div class="col-sm-6">
              <input type="radio" class="btn-check" name="jenis" id="j14" value="bumbu">
              <label class="btn" for="j14">Saus & Bumbu</label>
            </div>
            <div class="col-sm-6">
              <input type="radio" class="btn-check" name="jenis" id="j15" value="frozen_food">
              <label class="btn" for="j15">Frozen Food</label>
            </div>
            <div class="col-sm-6">
              <input type="radio" class="btn-check" name="jenis" id="j16" value="minuman">
              <label class="btn" for="j16">Minuman</label>
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
      <button class="btn btn-primary w-100 btn-lg">Cek Sekarang</button>
    </form>
  </div>

  <div class="col-lg-6">
    <section id="hasil" class="cmb-card p-4 h-100" tabindex="-1">
      <h2 class="h5 mb-3">Hasil spesifik</h2>
              <div class="status-box status-hati mb-3"><i class="bi bi-exclamation-triangle-fill" aria-hidden="true"></i><div><span class="label">Status</span><span class="judul">Hati-hati</span></div></div>        <div class="d-flex flex-wrap gap-2 mb-3">
          <span class="chip-outline">Rendang</span>
          <span class="chip-outline">Dibeli 2 hari lalu</span>
                  </div>
        <p>Rendang (Berkuah/santan) yang disimpan di suhu dingin dan dibeli 2 hari lalu sudah berada di batas daya tahan umum. Periksa kondisinya dengan teliti; jika ada bau asam, lendir, atau jamur, jangan dimakan.</p>
        <h3 class="h6">Langkah yang bisa dilakukan</h3>
        <ol class="ps-3 mb-0">
          <li class="mb-1">Cium dan lihat. Jika berbau asam, berlendir, atau berbuih, buang.</li><li class="mb-1">Jika tidak ada tanda itu, panaskan sampai mendidih dan panas sampai bagian tengah.</li><li class="mb-1">Habiskan hari ini dan jangan disimpan atau dipanaskan ulang lagi.</li>        </ol>
          </section>
  </div>
</div>

<div class="row g-4">
  <div class="col-lg-6">
    <div class="cmb-card-sm p-4 h-100">
      <h2 class="h5 mb-2">Riwayat cek</h2>
              <ul class="daftar-riwayat">
                      <li>
              <span><strong>Rendang</strong> <span class="chip-outline">Berkuah/santan</span></span>
              <span class="d-flex align-items-center gap-3"><span class="pill-status status-hati"><i class="bi bi-exclamation-triangle-fill" aria-hidden="true"></i> Hati-hati</span><span class="small text-muted-cmb">26 Nov 2026</span></span>
            </li>
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
          </div>
  </div>

  <div class="col-lg-6">
    <section id="chat" aria-label="Dokter pribadi">
      <h2 class="h5 mb-3"><i class="bi bi-chat-dots"></i>FAQ Chatbox</h2>
      <div class="chat-ponsel">

    
      <header class="chat-header">
        <span class="avatar-dokter" aria-hidden="true"><i class="bi bi-person-fill"></i></span>
        <div class="flex-grow-1">
          <p class="mb-0 fw-bold">-</p>
        </div>
      </header>

      <div id="isi-chat" class="chat-isi" aria-live="polite">
        <div class="pesan pesan-dokter">
          Halo! Silahkan pilih pertanyaan di bawah ini, nanti saya jawab di sini.
        </div>
      </div>

        <div class="chat-input-kunci">
        <form id="form-chat" class="chat-input-pilih">
        <label for="pilih-pertanyaan" class="visually-hidden">Pilih pertanyaan untuk dokter</label>
        <select id="pilih-pertanyaan" class="form-select" required>
            <option value="" selected disabled>Pilih pertanyaan...</option>
            <option value="cek-tes">bagaimana cara mengetahui makanan sudah basi?</option>
            <option value="durasi">berapa lama makanan boleh di suhu ruang?</option>
            <option value="asam">apakah makanan berbau sedikit asam boleh dimakan jika dipanaskan?</option>
            <option value="simpan">bagaimana menyimpan makanan sisa dengan baik?</option>
            <option value="akurat">apakah hasil food detector 100% akurat?</option>
            </optgroup>
        </select>
        <button type="submit" id="kirim-chat" class="tombol-kirim" aria-label="Kirim pertanyaan" disabled>
            <i class="bi bi-send-fill"></i>
        </button>
        </form>
    </div>
      <p class="footer-note text-center mt-2 mb-0">Untuk keluhan berat (muntah terus, demam tinggi, sesak, dehidrasi), segera ke fasilitas kesehatan terdekat.</p>
    </section>
  </div>
</div>
</main>
<?php include 'includes/footer.php'; ?>

