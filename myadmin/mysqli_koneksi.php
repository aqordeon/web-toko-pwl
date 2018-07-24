<?php
$koneksi=mysqli_connect("localhost","root","","vikashopdb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
//  echo "Connection success";
// mysqli_close($con);
 ?> 