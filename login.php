<?php
$judul = 'Masuk';
$aktif = '';
include 'includes/header.php';

$error = $error ?? null;
?>

<main class="container py-5" style="max-width: 480px">
  <h1 class="text-center mb-2">Masuk</h1>
  <p class="text-center text-muted-cmb mb-4">Masuk untuk memakai dashboard premium.</p>

  <form method="post" action="login.php" class="cmb-card p-4" novalidate>
    <?php if ($error): ?>
      <div class="alert alert-danger" role="alert"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>

    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input id="email" name="email" type="email" class="form-control" placeholder="nama@email.com" autocomplete="email" required>
    </div>
    <div class="mb-4">
      <label for="password" class="form-label">Kata sandi</label>
      <input id="password" name="password" type="password" class="form-control" placeholder="Masukkan kata sandi" autocomplete="current-password" required>
    </div>
    <button type="submit" class="btn btn-primary btn-lg w-100">Masuk</button>
  </form>

  <p class="text-center mt-3">Belum punya akun? <a href="register.php" class="fw-bold">Daftar</a></p>
</main>

<?php include 'includes/footer.php'; ?>
