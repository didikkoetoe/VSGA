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