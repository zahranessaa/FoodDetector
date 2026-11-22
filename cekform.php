<?php
$judul = 'Check Now';
$aktif = 'cek';
$scripts = ['assets/js/cek.js'];
include 'includes/header.php';


$hariIni = date('Y-m-d');
?>

<main class="container py-5">
  <h1 class="mb-2">Check Now</h1>
  <p class="fs-5 text-muted-cmb mb-4">Isi empat data di bawah, lalu tekan Cek Sekarang.</p>

  <form>
  <fieldset disabled>
    <legend>Disabled fieldset example</legend>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Disabled input</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
    </div>
    <div class="mb-3">
      <label for="disabledSelect" class="form-label">Disabled select menu</label>
      <select id="disabledSelect" class="form-control">
        <option>Disabled select</option>
      </select>
    </div>
    <div class="mb-3 form-field">
      <input type="checkbox" id="disabledFieldsetCheck" class="check" disabled>
      <label for="disabledFieldsetCheck">
        Can’t check this
      </label>
    </div>
    <button type="submit" class="btn-solid theme-primary">Submit</button>
     </fieldset>
    </form>
</main>

