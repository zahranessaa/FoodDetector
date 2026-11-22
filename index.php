<?php
$judul = 'Beranda';
$aktif = '';
include 'includes/header.php';
?>

<main class="container py-5">
    <img src="Slice 1.png" class="img-fluid" alt="...">
    <div class="d-flex flex-column justify-content-center text-center bg-subtle-success p-9 bg-2 rounded-5" style="min-height: 320px;">
        <h3>Style it your way</h3>
        <p class="fg-emphasis-secondary mb-3">Use utilities or custom CSS to size and theme each slide however you need.</p>
        <div><a class="btn-solid theme-success" href="#">Learn more</a></div>
      </div>
      <div class="grid grid-cols-subgrid" style="grid-column: 1 / -1;">
    <div>Subgrid column (2fr)</div>
    <div>Subgrid column (1fr)</div>
    <div>Subgrid column (1fr)</div>
  </div>
</main>


<?php include 'includes/footer.php'; ?>