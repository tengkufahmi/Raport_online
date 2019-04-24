<?php
include 'koneksi.php';
session_start();
$id = $_SESSION['NO_INDUK'];
$lama = $_POST['pw_lama'];
$baru = $_POST['pw_baru'];
$konfir = $_POST['konfir'];

$plama = mysqli_query($koneksi, "SELECT siswa.id_user as id_user, password from user join siswa on siswa.id_user=user.id_user where no_induk = '$id'");
$plame = mysqli_fetch_assoc($plama);
$passlama = $plame['password'];
$id_user = $plame['id_user'];

if($passlama != $lama ){
	echo "<script>alert('PASSWORD SALAH!')</script>";
	echo "<script>location.href = 'password_santri'</script>";
}else {
    if($baru == $konfir){
        $simpan = mysqli_query($koneksi, "UPDATE `user` SET `PASSWORD`='$baru' WHERE `ID_USER` = '$id_user'");
    } else {
    	echo "<script>alert('KONFIRMASI PASSWORD SALAH!')</script>";
    	echo "<script>location.href = 'password_santri'</script>";
    } 
}
echo "<script>location.href = 'santri'</script>";
?>