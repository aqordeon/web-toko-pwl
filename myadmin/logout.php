<?php

	session_destroy();
	echo "<script>alert('Anda telah logout');</script>";
	echo "<script>location='../myadmin/login.php';</script>";

?>