<?php 
require_once 'database.php';


function query($query){
	global $conn;
	$result = mysqli_query($conn,$query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

function tambahTransaksi($data){
	global $conn;
    $id_outlet = $data["id_outlet"];
    $kode_invoice = $data["kode_invoice"];
    $id_member = $data["id_member"];
    $tgl = date("Y-m-d H:i:s");
    $batas_waktu = $data["batas_waktu"];
    $tgl_bayar = $data["tgl_bayar"];
    $id_user = $data["id_user"];
    $total = $data["harga"];
    mysqli_query($conn,"INSERT INTO tb_transaksi VALUES ('','$id_outlet','$kode_invoice','$id_member','$tgl','$batas_waktu',null,'proses','belum_dibayar','$total','$id_user')");
    return mysqli_affected_rows($conn);
}

function tambahPaket($data){
	global $conn;
	$id_outlet = $data["id_outlet"];
	$jenis = $data["jenis"];
	$nama_paket = $data["nama_paket"];
	$harga = $data["harga"];

	$query = mysqli_query($conn,"INSERT INTO tb_paket VALUES('','$id_outlet','$jenis','$nama_paket','$harga')");

	return mysqli_affected_rows($conn);
}

function updatePaket($data){
	global $conn;
	$id_outlet = $data["id_outlet"];
	$jenis = $data["jenis"];
	$nama_paket = $data["nama_paket"];
	$harga = $data["harga"];
	$id = $data["id"];

	$query = mysqli_query($conn,"UPDATE tb_paket SET 
				id_outlet = '$id_outlet',
				jenis = '$jenis',
				nama_paket = '$nama_paket',
				harga = '$harga'
				WHERE id = $id
					");
	return mysqli_affected_rows($conn);
}


function hapusPaket($id){
	global $conn;
	mysqli_query($conn,"DELETE FROM tb_paket WHERE id='$id'");
	return mysqli_affected_rows($conn);
}

function tambahOutlet($data){
	global $conn;
	$nama = $data["nama"];
	$alamat = $data["alamat"];
	$tlp = $data["tlp"];

	$query = mysqli_query($conn,"INSERT INTO tb_outlet VALUES('','$nama','$alamat','$tlp')");

	return mysqli_affected_rows($conn);
}


function updateOutlet($data){
	global $conn;
	$nama = $data["nama"];
	$alamat = $data["alamat"];
	$tlp = $data["tlp"];
	$id = $data["id"];

	$query = mysqli_query($conn,"UPDATE tb_outlet SET 
				nama = '$nama',
				alamat = '$alamat',
				tlp = '$tlp'
				WHERE id = $id
					");
	return mysqli_affected_rows($conn);
}


function hapusOutlet($id){
	global $conn;
	mysqli_query($conn,"DELETE FROM tb_outlet WHERE id='$id'");
	return mysqli_affected_rows($conn);
}

function tambahMember($data){
	global $conn;
	$nama = $data["nama"];
	$alamat = $data["alamat"];
	$jenis_kelamin = $data["jenis_kelamin"];
	$tlp = $data["tlp"];

	$query = mysqli_query($conn,"INSERT INTO tb_member VALUES('','$nama','$alamat','$jenis_kelamin','$tlp')");

	return mysqli_affected_rows($conn);
}


function updateMember($data){
	global $conn;
	$nama = $data["nama"];
	$alamat = $data["alamat"];
	$jenis_kelamin = $data["jenis_kelamin"];
	$tlp = $data["tlp"];
	$id = $data["id"];

	$query = mysqli_query($conn,"UPDATE tb_member SET 
				nama = '$nama',
				alamat = '$alamat',
				jenis_kelamin = '$jenis_kelamin',
				tlp = '$tlp'
				WHERE id = $id
					");
	return mysqli_affected_rows($conn);
}




function hapusMember($id){
	global $conn;
	mysqli_query($conn,"DELETE FROM tb_member WHERE id='$id'");
	return mysqli_affected_rows($conn);
}
