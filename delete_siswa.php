<?php 
include 'koneksi.php';
$id = $_GET['id'];

$delete = "DELETE FROM `siswa` where `no_induk` = '$id'";
$hasil = mysqli_query($koneksi, $delete) or die ( mysqli_error($koneksi));

header('location:siswa_admin');
 ?>