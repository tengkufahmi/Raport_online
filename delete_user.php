<?php 
include 'koneksi.php';
$id = $_GET['id'];

$delete = "DELETE FROM `user` where `id_user` = '$id'";
$hasil = mysqli_query($koneksi, $delete) or die ( mysqli_error($koneksi));

header('location:user_admin');
 ?>