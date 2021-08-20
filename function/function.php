<?php

$db = mysqli_connect("localhost", "root", "", "latihan") or die();

function baca()
{
	global $db;

	$rows = [];
	$query = "SELECT * FROM buku";
	$result = mysqli_query($db, $query);
	while ($books = mysqli_fetch_assoc($result)) {
		$rows[] = $books;
	}
	return $rows;
}

function tambah($post)
{
	global $db;

	$judul = htmlspecialchars($post['judul']);
	$penulis = htmlspecialchars($post['penulis']);
	$penerbit = htmlspecialchars($post['penerbit']);
	$sampul = htmlspecialchars($post['sampul']);

	$query = "INSERT INTO buku (judul, penulis, penerbit, sampul) VALUES (
	'$judul' , '$penulis' , '$penerbit' , '$sampul')";

	mysqli_query($db, $query);

	return mysqli_affected_rows($db);
}

function hapus($id)
{
	global $db;

	mysqli_query($db, "DELETE FROM buku WHERE id = $id");

	return mysqli_affected_rows($db);
}

function upload()
{
	$nama = $_FILES['sampul']['nama'];
	$tmp_name = $_FILES['sampul']['tmp_name'];
	$error = $_FILES['sampul']['error'];
	$size = $_FILES['sampul']['size'];

	if ($error == 4) {
		echo "<script>
		alert('Masukan gambar terlebih dahulu');
		document.location.href = 'tambah.php';
		</script>";
	}

	// Cari ekstensi file
	$ekstensiFileValid = ['jpg', 'jpeg', 'png'];
	$ekstensiUpload = explode('.', $nama);
	$ekstensiUpload = strtolower(end($ekstensiUpload));
	if (!in_array($ekstensiUpload, $ekstensiFileValid)) {
		echo "<script>
		alert('Yang anda upload bukan gambar');
		document.location.href = 'tambah.php';
		</script>";
	}
}

function edit($post)
{
	global $db;

	$judul = htmlspecialchars($post['judul']);
	$penulis = htmlspecialchars($post['penulis']);
	$penerbit = htmlspecialchars($post['penerbit']);
	$sampul = htmlspecialchars($post['sampul']);
	$id = $post['id'];

	$query = "UPDATE buku SET 
			judul = '$judul',
			penulis = '$penulis',
			penerbit = '$penerbit',
			sampul = '$sampul'
			WHERE id = $id ";

	mysqli_query($db, $query);

	return mysqli_affected_rows($db);
}