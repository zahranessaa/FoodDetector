<?php
$judul = 'Daftar';
$aktif = '';
include 'includes/header.php';

// TODO (backend autentikasi):
//  1. Jika method POST: validasi nama, email (filter_var FILTER_VALIDATE_EMAIL), password minimal 8 karakter.
//  2. Cek email belum terdaftar, simpan dengan password_hash($password, PASSWORD_DEFAULT) lewat PDO prepared statement.
//  3. Jika gagal: isi $error; jika berhasil: redirect ke login.php.
$error = $error ?? null;
?>

<main class="container py-5" style="max-width: 480px">
  <h1 class="text-center mb-2">Buat akun</h1>
  <p class="text-center text-muted-cmb mb-4">Akun diperlukan untuk memakai dashboard premium.</p>

  <form method="post" action="register.php" class="cmb-card p-4" novalidate>
    <?php if ($error): ?>
      <div class="alert alert-danger" role="alert"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>

    <div class="mb-3">
      <label for="nama" class="form-label">Nama</label>
      <input id="nama" name="nama" type="text" class="form-control" placeholder="Nama lengkap" autocomplete="name" maxlength="100" required>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input id="email" name="email" type="email" class="form-control" placeholder="nama@email.com" autocomplete="email" required>
    </div>
    <div class="mb-4">
      <label for="password" class="form-label">Kata sandi</label>
      <input id="password" name="password" type="password" class="form-control" placeholder="Minimal 8 karakter" autocomplete="new-password" minlength="8" required>
    </div>
    <button type="submit" class="btn btn-dark btn-lg w-100">Buat akun</button>
  </form>

  <p class="text-center mt-3">Sudah punya akun? <a href="login.php" class="fw-bold">Masuk</a></p>
</main>

<?php include 'includes/footer.php'; ?>
