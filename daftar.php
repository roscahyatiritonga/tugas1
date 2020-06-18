<?php
   session_start();
   if(isset($_SESSION['user_name'])) {
   header('location:index.php'); }
?>

<title>Form Daftar</title>
<link rel="stylesheet" href="style.css">
<div align='center'>
 
  <body>
  <form action="proses_daftar.php" method="post">
  <table>
  <tbody>
  <tr><td colspan="2" align="center"><h1>Daftar</h1></td></tr>
  <tr><td>Username</td><td> <input name="user_name" type="text"></td></tr>
  <tr><td>Password</td><td> <input name="user_pass" type="password"></td></tr>
  <tr><td colspan="5" align="center"><input value="Daftar" type="submit"> <input value="Batal" type="reset"></td></tr>
  <tr><td colspan="2" align="center">Sudah Punya akun ? <a href="login.php"><b>Login Disini !</b></a></td></tr>
  </tbody>
  </table>
  </form>
</body>
</div>