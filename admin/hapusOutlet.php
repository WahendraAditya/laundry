<?php 
require_once '../config/functions.php';

$id = $_GET["id"];


if (hapusOutlet($id) > 0) {
		     	echo "<script>
	      	alert('Hapus Data Berhasil');
	      	document.location.href= 'outlet.php';
	     	</script>";

}else{
		     	echo "<script>
	      	alert('Hapus Data Berhasil');
	      	document.location.href= 'outlet.php';
	     	</script>";

}