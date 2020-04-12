<?php 
require_once '../config/functions.php';
require_once 'templates/header.php'; 
$outlet = query("SELECT * FROM tb_outlet");

if (isset($_POST["tambahPaket"])) {
	if (tambahOutlet($_POST) > 0) {

	     	echo "<script>
	      	alert('Tambah Data Berhasil');
	      	document.location.href= 'outlet.php';
	     	</script>";
	}else{
			     	echo "<script>
	      	alert('Tambah Data Gagal');
	      	document.location.href= 'outlet.php';
	     	</script>";
	}
}

?>

<div class="container mt-5">
	<div class="row">
		<div class="col-md-12">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="">Dashboard</a></li>
					<li class="breadcrumb-item"><a href="">Tambah Outlet</a></li> 
					<li class="breadcrumb-item active">Outlet</li>
				</ol>
			</nav>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12 mt-2">
			<h4 class="text-center">Data Outlet</h4>
		</div>
		<div class="col-md-6">
			<div class="card">
				<div class="card-header bg-primary text-white text-center mt-2">
					<h6>Tambah Data</h6>
				</div>
				<div class="card-body">
					<form method="post" action="" autocomplete="off">
						<div class="form-group">
							<label>Nama</label>
							<input type="text" name="nama" class="form-control">
						</div>
						<div class="form-group">
							<label>Alamat</label>
							<input type="text" name="alamat" class="form-control">
						</div>
						<div class="form-group">
							<label>Tlp</label>
							<input type="text" name="tlp" class="form-control">
						</div>
						<button class="btn btn-primary btn-block btn-sm" type="submit" name="tambahPaket">Tambah Data</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

