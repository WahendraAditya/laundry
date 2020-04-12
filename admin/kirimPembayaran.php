<?php 
require '../config/functions.php';

$id = $_GET["id"];
$tgl_bayar = date("Y-m-d H:i:s");
mysqli_query($conn, "UPDATE tb_transaksi SET
			tgl_bayar = '$tgl_bayar', 
			status = 'selesai',
			dibayar = 'dibayar'
			WHERE id = '$id'
	");
echo "<script>
      alert('Data berhasil dibayarkan');
      document.location.href = 'transaksi.php';
    </script>";