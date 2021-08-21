<?php 

require 'functions.php';

session_start();
if($_SESSION['login'] != true ) {
	header('Location: login.php');
	exit;
}

$produk = read();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<link rel="stylesheet" href="../css/admin.css">
</head>
<body>
	
	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="#">Admin</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
	      <div class="navbar-nav">
	        <a class="mx-3 btn btn-outline-primary" aria-current="page" href="#"><i class="bi bi-speedometer2"></i> Home</a>
	        <a class="mx-3 btn btn-outline-primary" href="#"><i class="bi bi-cart3"></i> Pesanan</a>
	        <a class="mx-3 btn btn-outline-primary" href="#"><i class="bi bi-chat-dots"></i> Chat</a>
	      </div>
	    </div>
	        <a href="logout.php" class="btn btn-danger" onclick="return confirm('Yakin untuk keluar ?');">Log Out</a>
	  </div>
	</nav>
	<!-- Akhir Navbar -->


	<!-- Table -->
	<div class="container-fluid mt-3 border rounded">
		<h2 class="text-center my-3">Daftar Produk</h2>
		<hr>
		<table class="table table-hover">
		  <thead>
		    <tr>
		      <th scope="col">No</th>
		      <th scope="col">Nama</th>
		      <th scope="col">Harga</th>
		      <th scope="col">Berat</th>
		      <th scope="col">Deskripsi</th>
		      <th scope="col">Gambar</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php $i = 1; ?>
		    <?php foreach ($produk as $prd): ?>
		    	<tr>
			      <th><?= $i++; ?></th>
			      <td><?= $prd['nama']; ?></td>
			      <td><?= $prd['harga']; ?></td>
			      <td><?= $prd['berat']; ?></td>
			      <td><?= $prd['deskripsi']; ?></td>
			      <td>
			      	<img src="../img/<?= $prd['gambar']; ?>" alt="">
			      </td>
			    </tr>
		    <?php endforeach ?>
		  </tbody>
		</table>
	</div>

	<script src="../js/bootstrap.min.js"></script>
</body>
</html>