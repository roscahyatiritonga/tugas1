<!DOCTYPE html>
<html>
<head>
  <title>Album Music</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <br/>
  <br/>
  <center><h2>LOGIN TO RR-SONGS</h2></center>  
  <form action="ceklogin.php" method="POST">
  <br/>
  <div class="login">
  <br/>
    <form action="index.php" method="POST">
      <div>
        <td><label>Username:</label></td>
        <td><input type="text" name="iusername" id="username"></td>
      </div>
      <div>
        <td><label>Password:</label></td>
        <td><input type="password" name="ipassword" id="password"></td>
      </div>      
      <div>
        <td></td>
        <td><input type="submit" name="tlogin" value="login" class="tombol"></td>
        <tr><td>Belum Punya Akun ? <a href="daftar.php"><b>Daftar</b></a></td>
      </div>
    </form>
  </div>
</body>
</html>