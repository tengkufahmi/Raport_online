<?php 
include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$tanggal = $_POST['tanggal'];
$hp = $_POST['hp'];
$email = $_POST['email'];

$update = "UPDATE `guru` SET `nama_guru` = '$nama', `tgl_lahir_guru` = '$tanggal', `no_hp_guru` = '$hp', `email_guru` = '$email' where `guru`.`id_guru` = '$id'";
$hasilinsert = mysqli_query($koneksi, $update) or die ( mysqli_error($koneksi));

header('location:guru_admin');
 ?>