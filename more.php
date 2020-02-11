<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset="utf-8"/>
	<title>shfaqLibra</title>
	<link rel="stylesheet" type="text/css" href="">
	<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
	<style type="text/css">
		body{
			//background-image: url(images/b4.jpg);

			background-color: #F0E68C;
			opacity: 0.9;
			margin: 0;
			padding: 0;
		}
		th{
				background-color: #4CAF50;
	  			color: white;
			}

		th,td{
			padding: 15px;
		}
		
		
		.paraqit{
			float: left;
			width: 100%;
			
		}

		.tabela{
			border-collapse: collapse;
			color: ;
			font-family: monospace;
			font-size: 18px;
			text-align: center;
			margin: 20px;
			border: 1px solid black;
		}
	</style>
		
</head>
<body>
	<?php  
		include("header2.php");
		?>






	<div>
		<h2 align="center" style="color: white; font-family: Sriracha; font-size:50px; margin-top: 60px;"> Rezultatet e kerkimit tuaj.</h2>
	</div>



<?php

	$link=mysqli_connect("localhost","root","","librari_online");
	$query= "SELECT * FROM lib_pershkrimi WHERE Id_Seria='$_GET[id]'";
	
	$result=mysqli_query($link,$query);
	 $numrow = mysqli_num_rows($result);
	if($numrow > 0){
	while($row=mysqli_fetch_assoc($result) ){
		
		echo "<img src='librat/".$row['kopertina']."'><br>";
			 echo "<br><br>Seria:".$row['Seria']."<br>Titulli:";
			 echo $row['Titulli']."<br>Pershkrimi";
			 echo $row['Pershkrimi']."<br>Cmimi: $";
			 echo $row['Cmimi']."<br>Botuesi:";
			 echo $row['Botuesi']."<br> Publikimi";
			 echo $row['Publikimi']."<br> Tirazhi:";
			 echo $row['Tirazhi']."<br> Numri Faqeve";
			 echo $row['Nr_faqeve']."<br>";
			 
		}
	}else{
		echo "no resuts";
	}
?>


<br><br>





	<?php  
		include("footer.php");
	?>





</body>
</html>

