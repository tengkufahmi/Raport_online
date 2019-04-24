<?php 
include 'koneksi.php';
$id = $_GET['id'];

$delete = "DELETE FROM `guru` where `id_guru` = '$id'";
$hasil = mysqli_query($koneksi, $delete) or die ( mysqli_error($koneksi));

header('location:guru_admin');
 ?>