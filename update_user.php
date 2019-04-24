<?php 
include 'koneksi.php';
$id = $_POST['id'];
$password = $_POST['password'];


$update = "UPDATE `user` SET `PASSWORD` = '$password' where `id_user` = '$id'";
$hasilinsert = mysqli_query($koneksi, $update) or die ( mysqli_error($koneksi));

header('location:user_admin');
 ?>