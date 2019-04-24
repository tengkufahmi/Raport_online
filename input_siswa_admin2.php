<?php
include 'koneksi.php';  
if (isset($_POST['tambah'])) {
  $no_induk = $_POST['no_induk'];
  $nama = $_POST['nama'];
  $tempat = $_POST['tpl'];
  $tanggal = $_POST['tl'];
  $status = $_POST['status'];
  $jk = $_POST['jk'];
  $goldar = $_POST['goldar'];
  $angkatan = $_POST['angkatan'];
  $hp = $_POST['hp'];
  $email = $_POST['email'];
  $insert = "INSERT INTO `siswa` (`NO_INDUK`, `NAMA_SISWA`, `TEMPAT_LAHIR`, `TANGGAL_LAHIR`, `JENIS_KELAMIN`, `GOL_DARAH`, `STATUS`, `ANGKATAN`, `HP`, `EMAIL`) VALUES ('$no_induk', '$nama', '$tempat', '$tanggal', '$jk', '$goldar', '$status', '$angkatan', '$hp', '$email')";
  $hasilinsert = mysqli_query($koneksi, $insert) or die ( mysqli_error($koneksi));
}
header('location:siswa_admin');
?>