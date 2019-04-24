<?php
include 'koneksi.php';
$id = $_POST['id'];
$judul = $_POST['judul'];
$isi = $_POST['isi'];

$update = "UPDATE `pengumuman` SET `judul` = '$judul', `isi` = '$isi' where `pengumuman`.`id_pengumuman` = '$id'";
$hasilupdate = mysqli_query($koneksi, $update) or die ( mysqli_error($koneksi));

header('location:admin');

?>