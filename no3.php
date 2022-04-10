<!-- Importing Function -->
<?php include "function.php" ?>

<!-- Display -->
<h3>No. 3 Cek Username dan Password</h3>
<form action="" method="post">
  Username : <input type="text" name="uname" /> <br />
  Password : <input type="text" name="pwd" /> <br /><br />
  <input type="submit" value="cek" /><br /><br />
  <output name="hasil">
    <!-- Checking POST Variabel -->
    <?php 
    if (isset($_POST['uname'], $_POST['pwd']) and !empty($_POST['uname']) and !empty($_POST['pwd'])) {
      $no3 = cek_uname_pwd($_POST['uname'], $_POST['pwd']);
      echo $no3;
    } 
    else {
      echo "--- Isi Username dan Password pada kolom di atas ---";
    }
    ?>
  </output>
</form>