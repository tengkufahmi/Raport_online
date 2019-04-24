<?php 
include 'koneksi.php';
$id = $_POST['id'];
$nilai = $_POST['nilai'];


$update = "UPDATE `nilai` SET `nilai` = '$nilai' where `id_nilai` = '$id'";
$hasilinsert = mysqli_query($koneksi, $update) or die ( mysqli_error($koneksi));

header('location:nilai_admin');
 ?>