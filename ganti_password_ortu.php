<?php
include 'koneksi.php';
session_start();
$id = $_SESSION['ID_ORTU'];
$lama = $_POST['pw_lama'];
$baru = $_POST['pw_baru'];
$konfir = $_POST['konfir'];

$plama = mysqli_query($koneksi, "SELECT orang_tua.user_ortu as id_user, password from user join orang_tua on orang_tua.user_ortu=user.id_user where id_ortu = '$id'");
$plame = mysqli_fetch_assoc($plama);
$passlama = $plame['password'];
$id_user = $plame['id_user'];

if($passlama != $lama ){
	echo "<script>alert('PASSWORD SALAH!')</script>";
	echo "<script>location.href = 'password_orangtua'</script>";
}else {
    if($baru == $konfir){
        $simpan = mysqli_query($koneksi, "UPDATE `user` SET `PASSWORD`='$baru' WHERE `ID_USER` = '$id_user'");
    } else {
    	echo "<script>alert('KONFIRMASI PASSWORD SALAH!')</script>";
    	echo "<script>location.href = 'password_orangtua'</script>";
    } 
}
echo "<script>location.href = 'orangtua'</script>";
?>