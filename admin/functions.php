<?php 

$db = mysqli_connect('localhost', 'root', '', 'vsga');

function read(){
	global $db;

	$query = "SELECT * FROM produk";
	$rows = [];
	$result = mysqli_query($db , $query);
	while($produk = mysqli_fetch_assoc($result)){
		$rows[] = $produk;
	}

	return $rows;
}

function tambah($post){
	global $db;

	$nama = htmlspecialchars($post['nama']);
	$harga = htmlspecialchars($post['harga']);
	$berat = htmlspecialchars($post['berat']);
	$deskripsi = htmlspecialchars($post['deskripsi']);
	$gambar = upload();

	$query = "INSERT INTO produk (nama, harga, berat, deskripsi, gambar)
		VALUES ('$nama', '$harga', '$berat', '$deskripsi', '$gambar')";

	mysqli_query($db, $query);

	return mysqli_affected_rows($db);
}

function upload(){
	$name = $_FILES['gambar']['name'];
	$size = $_FILES['gambar']['size'];
	$tmp_name = $_FILES['gambar']['tmp_name'];
	$error = $_FILES['gambar']['error'];

	// Cek apakah ada barang yang di upload atau tidak
	if($error == 4) {
		echo "<script>
		alert('Masukan gambar terlebih dahulu');
		</script>";

		return false;
		die;
	}

	// Cek apakah ukuran gambar kurang dari 2 mb
	if($size > 2000000) {
		echo "<script>
		alert('Ukuran gambar terlalu besar, maksimal 2mb');
		</script>";

		return false;
		die;
	}

	// Cek ekstensi gambar
	$ekstensiGambar = ['jpg', 'jpeg' , 'png'];
	$ekstensiFileUser = explode('.', $name);
	$ekstensiFileUser = strtolower(end($ekstensiFileUser));
	if(!in_array($ekstensiFileUser, $ekstensiGambar)){
		echo "<script>
		alert('Yang anda masukan bukan gambar');
		</script>";

		return false;
		die;
	}

	// Ubah nama gambar agar tidak ada nama yang sama
	$nama = uniqid();
	$nama .= '.';
	$nama .= $ekstensiFileUser;

	move_uploaded_file($tmp_name, '../img/' . $nama);

	return $nama;

}

function hapus($id){
	global $db;

	mysqli_query($db, "DELETE FROM produk WHERE id=$id");

	return mysqli_affected_rows($db);
}