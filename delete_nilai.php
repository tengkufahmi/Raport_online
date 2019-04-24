<?php 
include 'koneksi.php';
$id = $_GET['id'];

$delete = "DELETE FROM `nilai` where `id_nilai` = '$id'";
$hasil = mysqli_query($koneksi, $delete) or die ( mysqli_error($koneksi));

header('location:nilai_admin');
 ?>