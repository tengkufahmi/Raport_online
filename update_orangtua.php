<?php 
include 'koneksi.php';
$id = $_POST['id'];
$ayah = $_POST['ayah'];
$wali = $_POST['wali'];
$ibu = $_POST['ibu'];
$hp = $_POST['hp'];

$update = "UPDATE `orang_tua` SET `nama_ayah` = '$ayah', `nama_ibu` = '$ibu', `nama_wali` = '$wali', `no_hp_ortu` = '$hp' where `orang_tua`.`id_ortu` = '$id'";
$hasilinsert = mysqli_query($koneksi, $update) or die ( mysqli_error($koneksi));

header('location:ortu_admin');
 ?>