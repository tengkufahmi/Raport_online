<?php 
include 'koneksi.php';
$no = $_GET['no'];

$delete = "DELETE FROM `absensi` where `id_absen` = '$no'";
$hasil = mysqli_query($koneksi, $delete) or die ( mysqli_error($koneksi));

header('location:absensi');
 ?>