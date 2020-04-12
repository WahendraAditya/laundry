
<?php 
session_start(); 
if(!isset($_SESSION["login"])){
  echo "<script>
          alert('Anda harus login');
          document.location.href= '../login.php';
        </script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Administrator</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-info">
	<div class="container">
		 <a class="navbar-brand" href="#">Administrator</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto"> 
    <a class="nav-link" href="index.php">Dashboard <span class="sr-only"></span></a>
<?php if($_SESSION["user"]["role"] === "admin") : ?>
    <a class="nav-link" href="paket.php">Paket <span class="sr-only"></span></a>
    <a class="nav-link" href="outlet.php">Outlet <span class="sr-only"></span></a>
    <a class="nav-link" href="member.php">Member<span class="sr-only"></span></a>
  <?php endif; ?>
    <?php if($_SESSION["user"]["role"] === "owner") : ?>

    <?php else: ?>
    <a class="nav-link" href="transaksi.php">Transaksi<span class="sr-only"></span></a>
    <?php endif; ?>
       
    <a class="nav-link" href="laporan.php">Laporan<span class="sr-only"></span></a>   
    </ul>
    <?php if(empty($_SESSION["user"])) :  ?>
        <a class="nav-link" href="daftar.php">buat akun <span class="sr-only">(current)</span></a>  
      <?php else : ?>
        <a class="nav-link" href="#"><?= $_SESSION["user"]['username']; ?> <span class="sr-only">(current)</span></a>
        <a class="nav-link" href="../logout.php">Logout <span class="sr-only"></span></a>   
      <?php endif; ?>
    </form>
  </div>
	</div> 
</nav>