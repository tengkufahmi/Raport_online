<?php
include 'koneksi.php';
$username = $_POST['username'];
$siswa = $username.'@siswa';
$wali = $username.'@wali';
$ps = $_POST['ps'];
$pot = $_POST['pot'];
$ortu = mysqli_query($koneksi, "SELECT ID_ORTU from siswa where no_induk='$username'");
$idortu = mysqli_fetch_assoc($ortu);
$id = $idortu['ID_ORTU'];

$insert = "INSERT INTO `user`(`username`, `password`, `akses`) values ('$siswa', '$ps', 'siswa')";
$hasilinsert = mysqli_query($koneksi, $insert) or die ( mysqli_error($koneksi));
$iduser = mysqli_insert_id($koneksi);

$simpan = "INSERT INTO `user`(`username`, `password`, `akses`) values ('$wali', '$pot', 'ortu')";
$hasil = mysqli_query($koneksi, $simpan) or die ( mysqli_error($koneksi));
$idwali = mysqli_insert_id($koneksi);

$update = "UPDATE `siswa` SET `ID_USER` = '$iduser' where `siswa`.`NO_INDUK` = '$username'"; 
$hasilinsert = mysqli_query($koneksi, $update) or die ( mysqli_error($koneksi));

$baru = "UPDATE `orang_tua` SET `USER_ORTU` = '$idwali' where `orang_tua`.`ID_ORTU` = '$id'";
$tambah = mysqli_query($koneksi, $baru) or die ( mysqli_error($koneksi));

header('location:user_admin');
?>