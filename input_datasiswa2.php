<?php
include 'koneksi.php';  
  $no_induk = $_POST['no_induk'];
  $nama = $_POST['nama'];
  $tempat = $_POST['tpl'];
  $tanggal = $_POST['tl'];
  $goldar = $_POST['goldar'];
  $hp = $_POST['hp'];
  $email = $_POST['email'];
  $alamat = $_POST['alamat'];
  $status = $_POST['status'];
  $angkatan = $_POST['angkatan'];
  $jk = $_POST['jk'];
  $kelas = $_POST['kelas'];
  $user = $_POST['user'];
  $walik = $_POST['walik'];
  $ayah = $_POST['ayah'];
  $ibu = $_POST['ibu'];
  $walim = $_POST['walim'];
  $hpo = $_POST['hpo'];
  
  $simpan = "INSERT INTO `orang_tua`(`NAMA_AYAH`, `NAMA_IBU`, `NAMA_WALI`, `NO_HP_ORTU`) VALUES ('$ayah', '$ibu', '$walim', '$hpo')";
  $tambah = mysqli_query($koneksi, $simpan) or die (mysqli_error($koneksi));
  $ortu = mysqli_insert_id($koneksi);
  var_dump($ortu);
  
  $insert = "INSERT INTO `siswa`(`NO_INDUK`, `ID_KELAS`, `ID_GURU`, `ID_ORTU`, `NAMA_SISWA`, `TEMPAT_LAHIR`, `TANGGAL_LAHIR`, `JENIS_KELAMIN`, `GOL_DARAH`, `STATUS`, `ANGKATAN`, `ALAMAT`, `HP`, `EMAIL`) VALUES ('$no_induk','$kelas', '$walik', '$ortu', '$nama', '$tempat', '$tanggal', '$jk', '$goldar', '$status', '$angkatan', '$alamat', '$hp', '$email')";
  $hasilinsert = mysqli_query($koneksi, $insert) or die ( mysqli_error($koneksi));

header('location:siswa_admin');
?>