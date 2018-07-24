<center><h2>Mengubah Berita</h2></center>

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

<?php
	$ambil = $koneksi->query("SELECT * FROM berita WHERE id_berita='$_GET[id]'");
	$pecah = $ambil->fetch_assoc();
	
	echo "<pre>";
	print_r($pecah);
	echo "</pre>";
?>

<form method="post">
	<div class="form-group">
		<label>judul Berita</label>
		<input type="text" name="judul" class="form-control" value="<?php echo $pecah['judul_berita'];?>">
	</div>
	<div class="form-group">
		<label>Isi</label>
		<textarea name="isi" class="form-control" rows="10"> <?php echo $pecah['isi_berita']; ?></textarea>
	</div>
	<button class="btn btn-primary" name="ubah">Ubah</button>
	
<?php
if(isset($_POST['ubah']))
{
	$koneksi->query("UPDATE berita SET judul_berita='$_POST[judul]',isi_berita='$_POST[isi]' WHERE id_berita='$_GET[id]'");
	
	echo "<script>alert('Data Telah Berhasil Diubah'); </script>";
	echo "<script>location='index.php?page=berita'; </script>";
}


?>
	
	
</form>