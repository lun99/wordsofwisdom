<?php

	$link = mysqli_connect("localhost","root","");
	mysqli_select_db($link,"librari_online");
	$sql = "DELETE FROM lib_pershkrimi WHERE Id_Seria='$_GET[id]'";
	if(mysqli_query($link,$sql))
		header("location: shfaqLibrat.php");
	else
		echo "NUk u fshi!"; 
?>