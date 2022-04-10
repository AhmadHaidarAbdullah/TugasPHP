<!-- Importing Function -->
<?php include "function.php" ?>

<!-- Display -->
<h3>No. 2 Cek Nilai 2 Bilangan</h3>
<form action="" method="post">
  Masukkan Bilangan ke 1 : <input type="number" step="0.0001" name="bil1" /> <br />
  Masukkan Bilangan ke 2 : <input type="number" step="0.0001" name="bil2" /> <br /><br />
  <input type="submit" value="cek" /><br /><br />
  <output name="hasil">
    <!-- Checking POST Variabel -->
    <?php 
    if (isset($_POST['bil1'], $_POST['bil2']) and !empty($_POST['bil1']) and !empty($_POST['bil2'])) {
      $no2 = cek_nilai($_POST['bil1'], $_POST['bil2']);
      echo $no2;
    } 
    else {
      echo "--- Isi kolom di atas dengan bilangan bulat ---";
    }
    ?>
  </output>
</form>

