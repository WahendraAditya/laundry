<?php 
require_once '../config/functions.php';
require_once 'templates/header.php'; 
$outlet = query("SELECT * FROM tb_outlet");
$paket = query("SELECT * FROM tb_paket");
$rand = rand(10,5000000);
$member = query("SELECT * FROM tb_member");

if (isset($_POST["submit"])) {
	if (tambahTransaksi($_POST) > 0) {

	     	echo "<script>
	      	alert('Tambah Data Berhasil');
	      	document.location.href= 'transaksi.php';
	     	</script>";
	}else{
			     	echo "<script>
	      	alert('Tambah Data Gagal');
	      	document.location.href= 'transaksi.php';
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
					<li class="breadcrumb-item"><a href="">Transaksi</a></li> 
					<li class="breadcrumb-item active">Tambah Transaksi</li>
				</ol>
			</nav>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12 mt-2">
			<h4 class="text-center">Data Transaksi</h4>
		</div>
		<div class="col-md-6">
			<div class="card">
				<div class="card-header bg-primary text-white text-center mt-2">
					<h6>Tambah Data</h6>
				</div>
				<div class="card-body">
					          <form method="post" action="" enctype="multipart/form-data" class="cmxform form-horizontal tasi-form" id="commentForm" >
                                <input type="hidden" name="id_user" value="<?php echo $_SESSION["user"]["id"]; ?>">
                                <div class="form-group">
                                    <label for="cname" class="control-label">Paket Laundry</label>
                                    <div>
                                      <select  class="form-control" name="id_outlet" onchange="changeValue(this.value)">
                                        <option value="0">-- Pilih  Outlet --</option>
                                        <?php foreach($outlet as $o) : ?>
                                            <option value="<?php echo $o["id"]  ?>"><?php echo $o["nama"] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            

                            <div class="form-group">
                                <label for="cname" class="control-label">Kode Invoice</label>
                                <div>
                                    <input type="text" class="form-control" name="kode_invoice" required value="LA-<?php echo $rand; ?>" readonly>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="cname" class="control-label">Pilih Member</label>
                                <div>
                                    <select  class="form-control" name="id_member" onchange="changeValue(this.value)">
                                        <option value="0">-- Pilih Member --</option>
                                        <?php foreach($member as $p) : ?>
                                            <option value="<?php echo $p["id"] ?>"><?php echo $p["nama"] ?></option>   
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="cname" class="control-label">Batas Waktu</label>
                                <div>
                                    <input type="datetime" class="form-control" name="batas_waktu" value="<?php date_default_timezone_set('Asia/Jakarta'); $waktu = date("Y-m-d H:i:s"); echo $waktu; ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="cname" class="control-label">Paket</label>
                                <div>
                                    <select  class="form-control" name="harga" onchange="changeValue(this.value)">
                                        <option value="0">-- Pilih  Paket --</option>
                                        <?php foreach($paket as $o) : ?>
                                            <option value="<?php echo $o["harga"]  ?>"><?php echo $o["nama_paket"] ?> - <?php echo $o["jenis"] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                
                            </div>

                            <div class="form-group">
                                <div>
                                    <button class="btn btn-primary" type="submit" name="submit">Proses Order</button>
                                </div>
                            </div>

                        </form>
				</div>
			</div>
		</div>
	</div>
</div>

