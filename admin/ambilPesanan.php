<?php 
require '../config/functions.php';

$id = $_GET["id"];
mysqli_query($conn, "UPDATE tb_transaksi SET 
			status = 'diambil'
			WHERE id = '$id'
	");
echo "<script>
      alert('Pesanan diambil');
      document.location.href = 'transaksi.php';
    </script>";