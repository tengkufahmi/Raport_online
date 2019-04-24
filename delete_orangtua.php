<?php 
include 'koneksi.php';
$id = $_GET['id'];

$delete = "DELETE FROM `orang_tua` where `id_ortu` = '$id'";
$hasil = mysqli_query($koneksi, $delete) or die ( mysqli_error($koneksi));

header('location:ortu_admin');
 ?>