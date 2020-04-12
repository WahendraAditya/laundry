<?php 
require_once '../config/functions.php';
require_once 'templates/header.php'; 
$transaksi = query("SELECT * FROM tb_transaksi");
?>

<div class="container mt-5">
	<div class="row">
		<div class="col-md-12">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="">Dashboard</a></li> 
					<li class="breadcrumb-item active">Transaksi</li>
				</ol>
			</nav>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			 <p align='left'><a class='btn btn-primary' href='tambah_transaksi.php'><i class='icon-plus'></i>Tambah Transaksi</a></p>
          <br/>
          <table id='datatable' class='table table-hover'>
            <thead>
              <tr>
                <th><i class='icon-terminal'></i> No</th>
                <th><i class='icon-signal'></i> Tgl. Transaksi</th>
                <th><i class='icon-signal'></i> Status</th>
                <th><i class='icon-signal'></i> Batas Waktu</th>
                <th><i class='icon-signal'></i> Status Order</th>
                <th><i class='icon-signal'></i> Total</th>
                <th><i class='icon-signal'></i> Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $nomor=1; ?>
              <?php foreach($transaksi as $t) : ?>
               <tr>
                 <td><?php echo $nomor++; ?></b></td>

                 <td><?php echo $t["tgl"]; ?></td>
                 <td><div class="btn btn-success"><?php echo $t["dibayar"]; ?></div></td>
                 <td><?php echo $t["batas_waktu"] ?></td>
                 <td><div class="btn btn-info"><?php echo $t["status"]; ?></div></td>
                 <td>Rp.<?php echo number_format($t["total"],0,',','.'); ?></td>
                 <td>
                  <?php if(date("Y-m-d") > $t["batas_waktu"]) : ?>
                    <?php else: ?>
                      <?php if($t["status"] === "proses") : ?>
                        <a class='btn btn-primary'  href="kirimPembayaran.php?id=<?php echo $t["id"]; ?>"><i class='icon-edit'></i>Kirim Pembayaran</a>
                        <?php elseif($t["status"] === "selesai") : ?>
                          <a class='btn btn-primary'  href="ambilPesanan.php?id=<?php echo $t["id"]; ?>"><i class='icon-edit'></i>Ambil Pesanan</a>
                        <?php endif; ?>
                      <?php endif; ?>
                    </td>

                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
		</div>
	</div>
</div>