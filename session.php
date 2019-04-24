<?php
error_reporting(E_ALL^(E_NOTICE|E_WARNING));
session_start();
if(!isset($_SESSION['AKSES']))
{
	?>
	<script language="javascript">
		alert("Maaf, Anda tidak berhak mengakses halaman ini!! Harap login kembali atau daftar");
		document.location="index";
	</script>
	
	<?php 
}
?>