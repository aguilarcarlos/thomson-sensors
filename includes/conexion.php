<?php
	$link = mysqli_connect('localhost','root','','wthomson');
	//$link = mysqli_connect('mysql6.000webhost.com','a2064380_thomson','telematica1','a2064380_thomson');
	
	/* verificar la conexión */
	if (mysqli_connect_errno()) {
	    printf("Conexión fallida: %s\n", mysqli_connect_error());
	    exit();
	}
?>