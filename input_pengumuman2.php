<?php
include 'koneksi.php';
$judul = $_POST['judul'];
$isi = $_POST['isi'];

$x = mb_strimwidth("$isi", 0, 255, "...");
$insert = "INSERT INTO `pengumuman`(`judul`, `isi`) values ('$judul', '$x')";

$hasilinsert = mysqli_query($koneksi, $insert) or die ( mysqli_error($koneksi));

header('location:admin');

?>