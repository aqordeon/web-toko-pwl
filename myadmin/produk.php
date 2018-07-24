<h2>Data Produk</h2>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Harga</th>
			<th>Deskripsi</th>
			<th>Foto</th>
			<th>Deskripsi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM tbl_produk"); ?>
		<?php while($pecah = $ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama_produk']; ?></td> 
			<td><?php echo $pecah['harga']; ?></td>
			<td><?php echo $pecah['deskripsi']; ?></td>
			<td>
				<img src="../assets/images/<?php echo $pecah['gambar']; ?>" width="100">
			</td>
			<td>
				<a href="index.php?page=produkhapus&id=<?php echo $pecah['id_produk'] ?>" class="btn-danger btn">hapus</a>
				<a href="index.php?page=produkubah&id=<?php echo $pecah['id_produk'] ?>" class="btn-warning btn">ubah</a>
			</td>
		</tr>
		<?php  $nomor++; ?>
	<?php } ?>
	</tbody>
</table>
<a href="index.php?page=produktambah" class="btn btn-primary">Tambah Data</a>