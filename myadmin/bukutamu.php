<?php  
include "mysqli_koneksi.php";  ?>
<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Masters</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="fa fa-laptop"></i>Buku Tamu</li>						  	
					</ol>
				</div>
</div>              
<div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Buku Tamu
                          </header>
                          
                          <table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM pelanggan"); ?>
		<?php while($pecah=$ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama_pelanggan']; ?></td>
			<td><?php echo $pecah['email_pelanggan']; ?></td>
			<td>
				<a href="index.php?page=pelangganhapus&id=<?php echo $pecah['id_pelanggan']; ?>" class="btn btn-danger" >Hapus</a></td>
				
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>
                      </section>
					  <a href="../daftar.php" class="btn btn-primary">Pendaftaran Pelanggan</a>

                  </div>
              </div>