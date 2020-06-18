<link rel="stylesheet" href="style.css">
<div align='center'>


<?php

   require_once("koneksi.php");
   $user_name = $_POST['user_name'];
   $user_pass = $_POST['user_pass'];
   $query = $koneksi->prepare("SELECT * FROM tb_user WHERE user_name = ?");
   $query->execute(array($user_name));
   if($query->rowCount() != 0) {
     echo "<div align='center'>Username Sudah Terdaftar! <a href='daftar.php'>Kembali</a></div>";
   } else {
     if(!$user_name || !$user_pass) {
       echo "<div align='center'>Masih Ada Data Yang Kosong! <a href='daftar.php'>Back</a>";
     } else {
       $sql = $koneksi->prepare("INSERT INTO tb_user (user_name, user_pass) VALUES (?, ?)");
       $simpan = $sql->execute(array($user_name, $user_pass));
       if($simpan)
        {
         echo "<div align='center'>Pendaftaran Sukses! Silahkan <a href='login.php'>Login </a></div>";
       } else {
         echo "<div align='center'>Proses Gagal!</div>";
       }
     }
   }
?>
