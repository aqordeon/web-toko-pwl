<?php
	include('koneksi.php');
?>
<h2>Tambah Produk</h2>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Nama</label>
		<input type="text" class="form-control" name="nama">
	</div>
	<div class="form-group">
		<label>Harga (Rp)</label>
		<input type="number" class="form-control" name="harga">
	</div>
	<div class="form-group">
		<label>Deskripsi</label>
		<textarea class="form-control" name="deskripsi" rows="10"></textarea>
	</div>
	<div class="form-group">
		<label>Foto</label>
		<input type="file" class="form-control" name="foto">
	</div>
	<div class="form-group">
		<label>Kategori</label>
		<input type="number" class="form-control" name="kategori">
	</div>
	<button class="btn btn-primary" name="save">Simpan</button>
</form>
<?php 
	if (isset($_POST['save'])) 
	{
	 	$foto = $_FILES['foto']['name'];
	 	$lokasi = $_FILES['foto']['tmp_name'];
	 	move_uploaded_file($lokasi, "../assets/images/".$foto);
	 	$koneksi->query("INSERT INTO tbl_produk(id_produk, nama_produk, deskripsi, harga, gambar, kategori) VALUES ('','$_POST[nama]','$_POST[deskripsi]','$_POST[harga]','$foto','$_POST[kategori]')");

	 	echo "<div class='alert alert-info'>Data Tersimpan</div>";
		echo "<meta http-equiv='refresh' content='1;url=index.php?page=produk'>";
	}
?>