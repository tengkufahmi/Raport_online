<?php 
include 'koneksi.php';
$id = $_POST['id'];
$kode = $_POST['kode'];
$nama = $_POST['nama'];

$update = "UPDATE `mapel` SET `kd_mapel` = '$kode', `mapel` = '$nama' where `mapel`.`kd_mapel` = '$id'";
$hasilinsert = mysqli_query($koneksi, $update) or die ( mysqli_error($koneksi));

header('location:mapel_admin');
 ?>