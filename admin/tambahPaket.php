<?php 
require_once '../config/functions.php';
require_once 'templates/header.php'; 
$outlet = query("SELECT * FROM tb_outlet");

if (isset($_POST["tambahPaket"])) {
	if (tambahPaket($_POST) > 0) {

	     	echo "<script>
	      	alert('Tambah Data Berhasil');
	      	document.location.href= 'paket.php';
	     	</script>";
	}else{
			     	echo "<script>
	      	alert('Tambah Data Gagal');
	      	document.location.href= 'paket.php';
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
					<li class="breadcrumb-item"><a href="">Tambah Paket</a></li> 
					<li class="breadcrumb-item active">Paket</li>
				</ol>
			</nav>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12 mt-2">
			<h4 class="text-center">Data Paket</h4>
		</div>
		<div class="col-md-6">
			<div class="card">
				<div class="card-header bg-primary text-white text-center mt-2">
					<h6>Tambah Data</h6>
				</div>
				<div class="card-body">
					<form method="post" action="" autocomplete="off">
						<div class="form-group">
							<label>Outlet</label>
							<select class="custom-select" name="id_outlet">
								<option>Pilih Outlet</option>
								<?php foreach($outlet as $o) : ?>
									<option value="<?= $o["id"] ?>"><?php echo $o["nama"] ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="form-group">
							<label>Jenis</label>
							<select class="custom-select" name="jenis">
								<option>Pilih Jenis</option>
								<option value="kiloan">Kiloan</option>
								<option value="selimut">Selimut</option>
								<option value="bed_cover">Bed Cover</option>
								<option value="kaos">Kaos</option>
								<option value="lain">lain</option>
							</select>
							<!-- <input type="text"  name="jenis" class="form-control"> -->
						</div>
						<div class="form-group">
							<label>Nama Paket</label>
							<input type="text" name="nama_paket" class="form-control">
						</div>
						<div class="form-group">
							<label>Harga</label>
							<input type="text" name="harga" class="form-control">
						</div>
						<button class="btn btn-primary btn-block btn-sm" type="submit" name="tambahPaket">Tambah Data</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>