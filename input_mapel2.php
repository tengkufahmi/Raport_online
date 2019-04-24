<?php
include 'koneksi.php';
$kode = $_POST['kode'];
$nama = $_POST['nama'];

$simpan = "INSERT INTO `mapel` (`kd_mapel`, `mapel` )values('$kode', '$nama')";
$hasilinsert = mysqli_query($koneksi, $simpan) or die ( mysqli_error($koneksi));

header('location:mapel_admin');

?>