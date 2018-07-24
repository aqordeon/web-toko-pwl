<center><h2> Data Berita</h2></center>

<?php
//koneksi ke database
$koneksi = new mysqli("localhost","root","","vikashopdb");
?>

								<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
								<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
								<script src="js/jquery.min.js"></script>
								<!-- Custom Theme files -->
								<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
								<!-- Custom Theme files -->
								<meta name="viewport" content="width=device-width, initial-scale=1">
								<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
								<meta name="keywords" content="Pakhi Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
								Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
								<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
								<!--webfont-->
								<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
								<!-- dropdown -->
								<script src="js/jquery.easydropdown.js"></script>
								<link href="css/nav.css" rel="stylesheet" type="text/css" media="all"/>
										 <script src="js/scripts.js" type="text/javascript"></script>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Judul</th>
			<th>Isi</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM berita"); ?>
		<?php while($pecah=$ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['judul_berita']; ?></td>
			<td><?php echo $pecah['isi_berita']; ?></td>
			<td>
				<a href="index.php?page=beritahapus&id=<?php echo $pecah['id_berita']; ?>" class="btn btn-danger" >Hapus</a>
				<a href="index.php?page=beritaubah&id=<?php echo $pecah['id_berita']; ?>" class="btn btn-warning">Ubah</a></td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>
<a href="index.php?page=beritatambah" class="btn btn-primary">Tambah Berita</a>
<a href="index.php" class="btn btn-default">Beranda >></a>