<?php 
require_once '../config/functions.php';
require_once 'templates/header.php'; 
$member = query("SELECT * FROM tb_member");
?>

<div class="container mt-5">
	<div class="row">
		<div class="col-md-12">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="">Dashboard</a></li> 
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
		<div class="col-md-12">
			<a href="tambahMember.php" class="btn btn-info btn-sm mt-2">Tambah Data</a>
			<table class="table table-striped mt-5">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Alamat</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($member as $b) : ?>
					<?php $i=1; ?>
					<tr>
						<td><?php echo $i++;  ?></td>
						<td><?php echo $b["nama"] ?></td>
						<td><?php echo $b["alamat"] ?></td>
						<td>
							<a href="hapusMember.php?id=<?php echo $b["id"]; ?>" class="btn btn-danger btn-sm" onclick="confirm('Apakah anda yakin')">Hapus</a>
							<a href="updateMember.php?id=<?php echo $b["id"]; ?>" class="btn btn-warning btn-sn">update</a>
						</td>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>