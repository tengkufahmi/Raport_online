<?php 
include 'koneksi.php';
$id = $_GET['id'];

$delete = "DELETE FROM `pengumuman` where `id_pengumuman` = '$id'";
$hasil = mysqli_query($koneksi, $delete) or die ( mysqli_error($koneksi));

header('location:admin');
 ?>