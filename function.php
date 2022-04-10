<!-- PHP -->
<?php
// Untuk No 1
function cek_ganji_genap($angka) {
  if ($angka % 2 == 0) {
    return "$angka adalah bilangan genap";
  } else {
    return "$angka adalah bilangan ganjil";
  }
}

// Untuk No 2
function cek_nilai($a, $b) {
  if ($a < $b) {
    return "$a lebih kecil dari $b";
  } elseif ($a > $b) {
    return "$a lebih besar dari $b";
  } else {
    return "$a sama dengan $b";
  }
}

// Untuk No 3
function cek_uname_pwd($uname, $pwd) {
  $username = "admin";
  $password = "qwerty";

  if ($uname == $username && $pwd == $password) {
    return "Username dan Password sesuai, hak akses diberikan";
  } else {
    return "Username atau Password tidak sesuai";
  }
}

// Untuk No 4
function cek_uname_pwd2($uname2, $pwd2) {
  $username = "admin";
  $password = "qwerty";

  if ($uname2 == $username && $pwd2 == $password) {
    return "Username dan Password sesuai, hak akses diberikan";
  } 
  elseif ($uname2 == $username && $pwd2 != $password) {
    return "Username sesuai, password tidak sesuai!";
  } 
  elseif ($uname2 != $username && $pwd2 == $password) {
    return "Username tidak sesuai, password sesuai!";
  } 
  else {
    return "Username atau Password tidak sesuai";
  }
}

// Untuk No 5
function cek_hari($hari) {
  if ($hari == 1) {
    return "Hari ke $hari adalah Hari Senin";
  }
  elseif ($hari == 2) {
    return "Hari ke $hari adalah Hari Selasa";
  }
  elseif ($hari == 3) {
    return "Hari ke $hari adalah Hari Rabu";
  }
  elseif ($hari == 4) {
    return "Hari ke $hari adalah Hari Kamis";
  }
  elseif ($hari == 5) {
    return "Hari ke $hari adalah Hari Jum'at";
  }
  elseif ($hari == 6) {
    return "Hari ke $hari adalah Hari Sabtu";
  }
  elseif ($hari == 7) {
    return "Hari ke $hari adalah Hari Minggu";
  }
  else {
    return "Nama hari cuma ada 7!";
  }
}
?>
