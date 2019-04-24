<?php
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
$pass = md5($password);

$insert = "INSERT INTO `user`(`username`, `password`, `akses`) values ('$username', '$pass', 'admin')";
$hasilinsert = mysqli_query($koneksi, $insert) or die ( mysqli_error($koneksi));
$iduser = mysqli_insert_id($koneksi);


header('location:user_admin');
?>