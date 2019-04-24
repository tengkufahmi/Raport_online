<?php
include 'koneksi.php';
$nama = $_POST['nama'];
$tgl = $_POST['tgl'];
$nomor = $_POST['nomor'];
$email = $_POST['email'];

$insert = "INSERT INTO `guru`(`nama_guru`, `tgl_lahir_guru`, `no_hp_guru`, `email_guru`) values ('$nama', '$tgl', '$nomor', '$email')";
$hasilinsert = mysqli_query($koneksi, $insert) or die ( mysqli_error($koneksi));

header('location:guru_admin');

?>