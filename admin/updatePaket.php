<?php 
require_once '../config/functions.php';
require_once 'templates/header.php'; 
$outlet = query("SELECT * FROM tb_outlet");
$id_paket = $_GET["id"];
$paket = query("SELECT * FROM tb_paket WHERE id='$id_paket'")[0];
$jenis = ["kiloan","seimut","bad_cover","kaos","lain"];
if (isset($_POST["updatePaket"])) {
	if (updatePaket($_POST) > 0) {

	     	echo "<script>
	      	alert('Update Data Berhasil');
	      	document.location.href= 'paket.php';
	     	</script>";
	}else{
			     	echo "<script>
	      	alert('Update Data Gagal');
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
					<li class="breadcrumb-item"><a href="">Update Paket</a></li> 
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
					<h6>Update Data</h6>
				</div>
				<div class="card-body">
					<form method="post" action="" autocomplete="off">
						<input type="hidden" name="id" value="<?php echo $paket["id"]; ?>">
						<div class="form-group">
							<label>Outlet</label>
							<select class="custom-select" name="id_outlet">
								<option>Pilih Outlet</option>
								<?php foreach($outlet as $o) : ?>
									<?php if($paket["id_outlet"] === $o["id"]) : ?>
										<option value="<?= $o["id"] ?>" selected><?php echo $o["nama"] ?></option>
									<?php else : ?>
									<option value="<?= $o["id"] ?>"><?php echo $o["nama"] ?></option>
								<?php endif; ?>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="form-group">
							<label>Jenis</label>
							<select class="custom-select" name="jenis">
								<option>Pilih Jenis</option>
								<?php foreach($jenis as $j) : ?>
									<?php if($paket["jenis"] === $j)
									: ?>
								<option value="<?php echo $j; ?>" selected><?php echo $j; ?></option>
							<?php else : ?>
							<option value="<?php echo $j; ?>"><?php echo $j; ?></option>
							<?php endif; ?>
							<?php endforeach; ?>
							</select>
						</div>
						<div class="form-group">
							<label>Nama Paket</label>
							<input type="text" name="nama_paket"  value="<?php echo $paket["nama_paket"]; ?>" class="form-control">
						</div>
						<div class="form-group">
							<label>Harga</label>
							<input type="text" name="harga" value=<?php echo $paket["harga"]; ?> class="form-control">
						</div>
						<button class="btn btn-primary btn-block btn-sm" type="submit" name="updatePaket">Update Data</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>