<?php 
include 'koneksi.php';
$id = $_GET['id'];

$delete = "DELETE FROM `mapel` where `kd_mapel` = '$id'";
$hasil = mysqli_query($koneksi, $delete) or die ( mysqli_error($koneksi));

header('location:mapel_admin');
 ?>