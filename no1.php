<!-- Importing Function -->
<?php include "function.php" ?>

<!-- Display -->
<h3>No. 1 Cek Bilangan Ganjil dan Genap</h3>
<form action="" method="post">
  Masukkan Angka : <input type="number" name="angka_gg" /> &nbsp;
  <input type="submit" value="cek" /><br /><br />
  <output name="hasil">
    <!-- Checking POST Variabel -->
    <?php 
    if (isset($_POST["angka_gg"]) and !empty($_POST["angka_gg"])) {
      $no1 = cek_ganji_genap($_POST["angka_gg"]);
      echo $no1;
    } 
    else {
      echo "--- Isi kolom di atas dengan bilangan bulat ---";
    }
    ?>
  </output>
</form>
