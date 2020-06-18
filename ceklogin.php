<?php

session_start();

include "koneksi.php";

$username = $_POST['iusername'];
$password = $_POST['ipassword'];


$sql = "SELECT * FROM tb_user WHERE user_name = :user_name AND user_pass = :user_pass";
$stmt = $koneksi->prepare($sql);
$stmt->bindParam(":user_name", $username);
$stmt->bindParam(":user_pass", $password);
$stmt->execute();


$data = $stmt->fetch();

if ($stmt->rowCount() > 0){
	$_SESSION['username'] = $username;
	header("location:index.php");
} else {
	echo "Gagal Masuk";
}
?>
