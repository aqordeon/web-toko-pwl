<h2> Tambah Berita</h2>
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

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>judul Berita</label>
		<input type="text" class="form-control" name="judul">
	</div>
	<div class="form-group">
		<label>Isi Berita</label>
		<textarea class="form-control" name="isi" rows="10"></textarea>
	</div>
	<button class="btn btn-primary" name="save">Simpan</button>
</form>

<?php
	if (isset($_POST['save']))
	{
		$koneksi->query("INSERT INTO berita(judul_berita,isi_berita) VALUES('$_POST[judul]','$_POST[isi]')");
		echo "<div class='alert alert-info'>Data Tersimpan</div>";
		echo "<meta http-equiv='refresh' content='1;url=index.php?page=berita'>";
	}
?>



