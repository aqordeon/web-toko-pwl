<?php
	include('koneksi.php');
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
    <div class="container">
        <div class="row text-center  ">
            <div class="col-md-12">
                <br /><br />
                <h2> Pika Shop : Register</h2>
               
                <h5>( Register yourself to get access )</h5>
                 <br />
            </div>
        </div>
         <div class="row">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>Register</strong>  
                            </div>
                            <div class="panel-body">
                                <form role="form" method="post">
									<br/>
									<div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-circle-o-notch"  ></i></span>
                                        <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama"/>
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                        <input type="text" class="form-control" placeholder="E-mail" name="email"/>
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                        <input type="password" class="form-control" placeholder="Password" name="pass"/>
                                    </div>
                                    <button class="btn btn-primary" name="daftar">Register</button>
                                    <hr />
                                    Sudah Terdaftar?  <a href="login.php">Login disini</a>
                                </form>
								
								<?php
								if (isset($_POST['daftar']))
									{
										$koneksi->query("INSERT INTO tbl_admin(id_admin, nama_admin, email_admin, password_admin) VALUES ('','$_POST[nama]','$_POST[email]','$_POST[pass]')");
										echo "<div class='alert alert-info'>Berhasil Mendaftar</div>";
										echo "<meta http-equiv='refresh' content='1;url=../myadmin/login.php'>";
									}
								?>
                            </div>
                        </div>
                    </div>
                
                
        </div>
    </div>


     <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
   
</body>
</html>
