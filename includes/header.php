<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$namaUser = $_SESSION['nama'] ?? null;
$aktif    = $aktif ?? '';

function navAktif(string $nama, string $aktif): string
{
    return $nama === $aktif ? ' active' : '';
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Detector Kelompok 5 TI 2025 D</title>
    <link rel="stylesheet" href="bootstrap-5.3.8-dist/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-md sticky-top">
  <div class="container">
    <a class="navbar-brand" href="index.php">Food Detector</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu"
            aria-controls="menu" aria-expanded="false" aria-label="Buka menu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="menu">
      <ul class="navbar-nav mx-md-auto">
        <li class="nav-item"><a class="nav-link<?= navAktif('cek', $aktif) ?>" href="cekform.php">Check Form</a></li>
        <li class="nav-item"><a class="nav-link<?= navAktif('ensiklopedia', $aktif) ?>" href="ensiklopedia.php">Ensiklopedia</a></li>
        <li class="nav-item"><a class="nav-link<?= navAktif('langganan', $aktif) ?>" href="langganan.php">Berlangganan</a></li>
      </ul>
      <div class="d-flex flex-wrap gap-2 mt-3 mt-md-0">
        <?php if ($namaUser): ?>
          <a class="btn btn-outline-primary" href="dashboard.php">Dashboard</a>
          <a class="btn btn-primary" href="logout.php">Keluar</a>
        <?php else: ?>
          <a class="btn btn-outline-success" href="login.php">Masuk</a>
          <a class="btn btn-success" href="register.php">Daftar</a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</nav>