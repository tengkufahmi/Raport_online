<?php 
include 'koneksi.php';
$id = $_POST['id'];
$subuh = $_POST['subuh'];
$maghrib = $_POST['maghrib'];
$isyak = $_POST['isyak'];
$tanggal = $_POST['tanggal'];

$update = "UPDATE `absensi` SET `subuh` = '$subuh', `maghrib` = '$maghrib', `isyak` = '$isyak', `tanggal` = '$tanggal' where `absensi`.`id_absen` = '$id'";
$hasilinsert = mysqli_query($koneksi, $update) or die ( mysqli_error($koneksi));

header('location:absensi');
 ?>