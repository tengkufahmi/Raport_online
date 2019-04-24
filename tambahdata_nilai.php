<?php
include'koneksi.php';
session_start();
if (empty(isset($_SESSION['id_user']))) {
 header("location: \spk-kost");
}
$no = $_POST['no'];
$nilai = $_POST['nilai'];
$guru = $_POST['guru'];
$mapel =   $_POST['mapel'];
$tahun =   $_POST['tahun'];
$semester=   $_POST['semester'];
$array = count($no);
for($i = 0; $i < $array; $i++){
$insert = "INSERT INTO `nilai` (`ID_GURU`, `NO_INDUK`, `KD_MAPEL`, `NILAI`, `SEMESTER`, `THN_AJAR`) VALUES
('$guru', '$no[$i]', '$mapel', '$nilai[$i]', '$semester', '$tahun')";
$hasilinsert = mysqli_query($koneksi, $insert) or die ( mysqli_error($insert));
}
header('location:nilai_admin');
?>
