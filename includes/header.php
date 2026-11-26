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
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= htmlspecialchars($judul) ?> | CekMakananBasi</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-md sticky-top">
  <div class="container">
    <a class="navbar-brand" href="index.php">
      FoodDetector
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu"
            aria-controls="menu" aria-expanded="false" aria-label="Buka menu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="menu">
      <ul class="navbar-nav mx-md-auto">
        <li class="nav-item"><a class="nav-link<?= navAktif('cek', $aktif) ?>" href="cekform.php">Check Now</a></li>
        <li class="nav-item"><a class="nav-link<?= navAktif('ensiklopedia', $aktif) ?>" href="ensiklopedia.php">Ensiklopedia</a></li>
        <li class="nav-item"><a class="nav-link<?= navAktif('langganan', $aktif) ?>" href="langganan.php">Berlangganan</a></li>
      </ul>
      <div class="d-flex flex-wrap gap-2 mt-3 mt-md-0">
        <?php if ($namaUser): ?>
          <a class="btn btn-outline-primary" href="dashboard.php">Dashboard</a>
          <a class="btn btn-primary" href="logout.php">Keluar</a>
        <?php else: ?>
          <a class="btn btn-outline-primary" href="login.php">Masuk</a>
          <a class="btn btn-primary" href="register.php">Daftar</a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</nav>
