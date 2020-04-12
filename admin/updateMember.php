<?php 
require_once '../config/functions.php';
require_once 'templates/header.php';
$id = $_GET["id"]; 
$member = query("SELECT * FROM tb_member WHERE id = '$id'")[0];

if (isset($_POST["submit"])) {
	if (updateOutlet($_POST) > 0) {

	     	echo "<script>
	      	alert('Update Data Berhasil');
	      	document.location.href= 'member.php';
	     	</script>";
	}else{
			     	echo "<script>
	      	alert('Update Data Gagal');
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
					<li class="breadcrumb-item"><a href="">Update Member</a></li> 
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
					<h6>Update Data</h6>
				</div>
				<div class="card-body">
					<form method="post" action="" autocomplete="off">
					<input type="hidden" name="id" value="<?php echo $member["id"]; ?>">
						<div class="form-group">
							<label>Nama</label>
							<input type="text" value="<?php echo $member["nama"]; ?>" name="nama" class="form-control">
						</div>
						<div class="form-group">
							<label>Alamat</label>
							<input type="text" value="<?php echo $member["alamat"]; ?>" name="alamat" class="form-control">
						</div>
						<div class="form-group">
							<label>Jenis Kelamin</label>
							<select class="custom-select" name="jenis_kelamin">
								<option>Piih Jenis Kelamin</option>
								<?php if($member["jenis_kelamin"] === "L") : ?>
								<option value="L" selected>Laki-laki</option>
								<option value="P">Perempuan</option>
								<?php elseif($member["jenis_kelamin"] === "P") : ?>
									<option value="L">Laki-laki</option>
								<option value="P" selected>Perempuan</option>
							<?php endif; ?>
							</select>
						</div>
						<div class="form-group">
							<label>Tlp</label>
							<input type="text" value="<?php echo $member["tlp"]; ?>" name="tlp" class="form-control">
						</div>
						<button class="btn btn-primary btn-block btn-sm" type="submit" name="submit">Update Data</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

