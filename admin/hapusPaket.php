<?php 
require_once '../config/functions.php';

$id = $_GET["id"];


if (hapusPaket($id) > 0) {
		     	echo "<script>
	      	alert('Hapus Data Berhasil');
	      	document.location.href= 'paket.php';
	     	</script>";

}else{
		     	echo "<script>
	      	alert('Hapus Data Berhasil');
	      	document.location.href= 'paket.php';
	     	</script>";

}