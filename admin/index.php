<?php 

require 'functions.php';

session_start();
if($_SESSION['login'] != true ) {
	header('Location: login.php');
	exit;
}

$produk = read();

if(isset($_POST['tambah'])){
	if(tambah($_POST) > 0 ) {
		echo "<script>
		alert('Data berhasil di tambahkan');
		document.location.href = 'index.php';
		</script>";
	} else {
		echo "<script>
		alert('Data gagal di tambahkan');
		</script>";
	}
}

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
	<nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
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

		<!-- Button modal -->


		<h2 class="text-center my-3">Daftar Produk</h2>
		<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Produk</button>
		<hr>
		<table class="table table-hover">
		  <thead>
		    <tr>
		      <th scope="col">No</th>
		      <th scope="col">Aksi</th>
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
			      <td>
			      	<a href="edit.php?id=<?= $prd['id']; ?>" class="btn btn-warning">Edit</a> 
			      	<a href="hapus.php?id=<?= $prd['id']; ?>" class="btn btn-danger" onclick="return confirm('Yakin untuk menghapus item >');">Hapus</a>
			      </td>
			      <td><?= $prd['nama']; ?></td>
			      <td>Rp. <?= $prd['harga']; ?></td>
			      <td><?= $prd['berat']; ?> Kg</td>
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Barang</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="POST" enctype="multipart/form-data">
        	<div class="mb-3">
        		<div class="input-group">
        			<div class="input-group-text"><i class="bi bi-bag-fill"></i></div>
        			<input type="text" class="form-control" name="nama" required placeholder="Masukan nama barang">
        		</div>
        	</div>
        	<div class="mb-3">
        		<div class="input-group">
        			<div class="input-group-text"><i class="bi bi-cash-coin"></i></div>
        			<input type="number" class="form-control" name="harga" required placeholder="Masukan harga barang">
        		</div>
        	</div>
        	<div class="mb-3">
        		<div class="input-group">
        			<div class="input-group-text"><i class="bi bi-calculator"></i></div>
        			<input type="number" class="form-control" name="berat" required placeholder="Masukan berat barang">
        		</div>
        	</div>
        	<div class="mb-3">
        		<div class="input-group">
        			<div class="input-group-text"><i class="bi bi-calculator"></i></div>
        			<textarea name="deskripsi" cols="40" rows="7"></textarea>
        		</div>
        	</div>
        	<div class="mb-3">
        		<div class="input-group">
        			<div class="input-group-text"><i class="bi bi-imagae-fill"></i></div>
        			<input type="file" name="gambar" required placeholder="Masukan gambar" class="form-control">
        		</div>
        	</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="tambah">Tambah</button>
        </form>
      </div>
    </div>
  </div>
</div>