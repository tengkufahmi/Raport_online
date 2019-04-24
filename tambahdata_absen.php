<?php
include'koneksi.php';
$no = $_POST['no'];
$subuh = $_POST['subuh'];
$maghrib = $_POST['maghrib'];
$isyak =   $_POST['isyak'];
$tanggal =   $_POST['tanggal'];
$semester = $_POST['semester'];
$tahun=   $_POST['tahun'];
$array = count($no);
for($i = 0; $i < $array; $i++){
$insert = "INSERT INTO `absensi` (`NO_INDUK`, `SUBUH`, `MAGHRIB`, `ISYAK`, `TANGGAL`, `SEMESTER`, `THN_AJARAN`) VALUES
('$no[$i]', '$subuh[$i]', '$maghrib[$i]', '$isyak[$i]', '$tanggal', '$semester', '$tahun')";
$hasilinsert = mysqli_query($koneksi, $insert) or die ( mysqli_error($insert));
}
header('location:absensi');
?>
