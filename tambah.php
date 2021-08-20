<?php

require 'function/function.php';

if (isset($_POST['tambah'])) {
	var_dump($_FILES['sampul']);
	if (tambah($_POST) > 0) {
		echo "<script>
		alert('Data berhasil di tambahkan');
		document.location.href = 'index.php';
		</script>";
	} else {
		echo "<script>
		alert('Data gagal di tambahkan');
		document.location.href = 'index.php';
		</script>";
	}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah Buku</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>

	<div class="container mt-5 border rounded shadow">
		<h2 class="text-center my-3">Tambah Barang</h2>
		<hr>
		<form action="" method="post" enctype="multipart/form-data">
			<div class="mb-3">
				<div class="input-group">
					<div class="input-group-text"><i class="bi bi-book"></i></div>
					<input type="text" name="judul" id="judul" class="form-control" placeholder="Masukan judul" required>
				</div>
			</div>
			<div class="mb-3">
				<div class="input-group">
					<div class="input-group-text"><i class="bi bi-person-square"></i></div>
					<input type="text" name="penulis" id="penulis" class="form-control" placeholder="Masukan penulis" required>
				</div>
			</div>
			<div class="mb-3">
				<div class="input-group">
					<div class="input-group-text"><i class="bi bi-building"></i></div>
					<input type="text" name="penerbit" id="penerbit" class="form-control" placeholder="Masukan penerbit" required>
				</div>
			</div>
			<div class="mb-3">
				<div class="input-group">
					<div class="input-group-text"><i class="bi bi-card-image"></i></div>
					<input type="file" name="sampul" id="sampul" class="form-control" placeholder="Masukan sampul" required>
				</div>
			</div>

			<div class="mb-3">
				<a href="index.php" class="btn btn-success col-3">Kembali</a>
				<button class="btn btn-primary col-6" name="tambah">Tambah</button>
				<button class="btn btn-secondary col-2" type="reset">Reset</button>
			</div>
		</form>
	</div>

	<script src="bootstrap.min.js"></script>
</body>

</html>