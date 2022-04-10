<!-- Importing Function -->
<?php include "function.php" ?>

<!-- Display -->
<h3>No. 5 Cek Hari</h3>
<form action="" method="post">
  Masukkan Hari Ke : <input type="number" name="hari" /> &nbsp;
  <input type="submit" value="cek" /><br /><br />
  <output name="hasil">
    <!-- Checking POST Variabel -->
    <?php 
      if (isset($_POST["hari"]) and !empty($_POST["hari"])) {
        $no5 = cek_hari($_POST["hari"]);
        echo $no5;
      } 
      else {
        echo "--- Isi kolom di atas dengan bilangan bulat ---";
      }
    ?>
  </output>
</form>