<?php
include 'koneksi.php';  
  $no = $_POST['no'];
  $id = $_POST['id'];
  $nama = $_POST['nama'];
  $tempat = $_POST['tempat'];
  $tanggal = $_POST['tanggal'];
  $goldar = $_POST['goldar'];
  $hp = $_POST['hp'];
  $email = $_POST['email'];
  $alamat = $_POST['alamat'];
  $status = $_POST['status'];
  $angkatan = $_POST['angkatan'];
  $jk = $_POST['jk'];
  $walik = $_POST['guru'];
  
  $insert = "UPDATE `siswa` SET `NO_INDUK`='$id',`ID_GURU`='$walik',`NAMA_SISWA`='$nama',`TEMPAT_LAHIR`='$tempat',`TANGGAL_LAHIR`='$tanggal',`JENIS_KELAMIN`='$jk',`GOL_DARAH`='$goldar',`STATUS`='$status',`ANGKATAN`='$angkatan',`ALAMAT`='$alamat',`HP`='$hp',`EMAIL`='$email' WHERE `NO_INDUK` = '$no' ";
  $hasilinsert = mysqli_query($koneksi, $insert) or die ( mysqli_error($koneksi));

header('location:siswa_admin');
?>