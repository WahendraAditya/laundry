<?php 
require_once '../config/functions.php';
require_once 'templates/header.php'; 

if (isset($_POST["submit"])) {
	if (tambahMember($_POST) > 0) {

	     	echo "<script>
	      	alert('Tambah Data Berhasil');
	      	document.location.href= 'member.php';
	     	</script>";
	}else{
			     	echo "<script>
	      	alert('Tambah Data Gagal');
	      	document.location.href= 'member.php';
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
					<li class="breadcrumb-item"><a href="">Tambah Member</a></li> 
					<li class="breadcrumb-item active">Member</li>
				</ol>
			</nav>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12 mt-2">
			<h4 class="text-center">Data Member</h4>
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
							<label>Jenis Kelamin</label>
							<select class="custom-select" name="jenis_kelamin">
								<option>Piih Jenis Kelamin</option>
								<option value="L">Laki-laki</option>
								<option value="P">Perempuan</option>
							</select>
						</div>
						<div class="form-group">
							<label>Tlp</label>
							<input type="text" name="tlp" class="form-control">
						</div>
						<button class="btn btn-primary btn-block btn-sm" type="submit" name="submit">Tambah Data</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

