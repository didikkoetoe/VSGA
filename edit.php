<?php 

require 'function/function.php';

$id = $_GET['id'];
$result = mysqli_query($db, "SELECT * FROM buku WHERE id = $id");
$book = mysqli_fetch_assoc($result);

if(isset($_POST['edit'])){
	if (edit($_POST) > 0) {
		echo "<script>
		alert('Data berhasil di ubah');
		document.location.href = 'index.php';
		</script>";
	} else {
		echo "<script>
		alert('Data gagal di ubah');
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
	<title>Edit Buku</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>

	<div class="container mt-5 border rounded shadow">
		<h2 class="text-center my-3">Edit Buku</h2>
		<hr>
		<form action="" method="post">
			<input type="hidden" value="<?= $book['id']; ?>" name="id">
			<div class="mb-3">
				<div class="input-group">
					<div class="input-group-text"><i class="bi bi-book"></i></div>
					<input type="text" name="judul" id="judul" class="form-control" placeholder="Masukan judul" required value="<?= $book['judul']; ?>">
				</div>
			</div>
			<div class="mb-3">
				<div class="input-group">
					<div class="input-group-text"><i class="bi bi-person-square"></i></div>
					<input type="text" name="penulis" id="penulis" class="form-control" placeholder="Masukan penulis" required value="<?= $book['penulis']; ?>">
				</div>
			</div>
			<div class="mb-3">
				<div class="input-group">
					<div class="input-group-text"><i class="bi bi-building"></i></div>
					<input type="text" name="penerbit" id="penerbit" class="form-control" placeholder="Masukan penerbit" required value="<?= $book['penerbit']; ?>">
				</div>
			</div>
			<div class="mb-3">
				<div class="input-group">
					<div class="input-group-text"><i class="bi bi-card-image"></i></div>
					<input type="text" name="sampul" id="sampul" class="form-control" placeholder="Masukan sampul" required value="<?= $book['sampul']; ?>">
				</div>
			</div>

			<div class="mb-3">
				<a href="index.php" class="btn btn-success col-3">Kembali</a>
				<button class="btn btn-primary col-6" name="edit">Edit</button>
				<button class="btn btn-secondary col-2" type="reset">Reset</button>
			</div>
		</form>
	</div>
	
	<script src="bootstrap.min.js"></script>
</body>
</html>