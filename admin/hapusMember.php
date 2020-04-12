<?php 
require_once '../config/functions.php';

$id = $_GET["id"];


if (hapusMember($id) > 0) {
		     	echo "<script>
	      	alert('Hapus Data Berhasil');
	      	document.location.href= 'member.php';
	     	</script>";

}else{
		     	echo "<script>
	      	alert('Hapus Data Berhasil');
	      	document.location.href= 'member.php';
	     	</script>";

}