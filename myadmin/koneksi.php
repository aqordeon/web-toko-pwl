<?php

$koneksi = @mysqli_connect("localhost", "root", "", "db_toko");
	//cek koneksi error atau tidak
	if (!$koneksi) {
		echo "Error: " . mysqli_connect_error();
		exit();
	}
?>
