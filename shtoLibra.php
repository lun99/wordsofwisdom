<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset="utf-8"/>
	<title>shtoLibra</title>
	<link rel="stylesheet" type="text/css" href="">
	<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
	<style type="text/css">
		body{
		  background-image: url(images/4.jpg);
		background-size: 100%;
		background-repeat: no-repeat;
		/*background-color: blue;*/
			
		}

		.shto{
			padding-left: 30%
			margin-left: 50px;
		}
		
		.paraqit{
			background: #AFEEEE; 
			
		}

		.tab{
			padding: 20px; 
			border-collapse: collapse;
			color:  ;
			font-family: monospace;
			font-size: 18px;
			text-align: center;
			border: 1px solid black;
			
		}

		td{
			
		}

		.shtoBtn{
			background-color: #555555;
			font-size: 16px;
			padding: 12px 28px;
			border-radius: 8px;
			transition-duration: 0.4s;
		}

		.shtoBtn:hover {
			color: white;
			background-color: #555555;
		} 

		.block{
			background-color:#ccc;	
			color: black;
			margin-top: 30px;
			margin-right: 400px;
			margin-left: 400px;
			padding: 20px;
		}
	</style>
		
</head>
<body>
	<?php  
		include("header2.php");
	?>


	
		<div class="shto">
			<h2 align="center" style="color: black; font-family: Sriracha; font-size:50px; background-color: #FFA07A;"> Regjistroni Libra te rinj </h2>
			<div class="block">
				<form name="form" action="shtoLibra.php" method="post">
					<table class="tab">
						<tr>
							<td>Seria</td>
							<td><input type="text" name="Seria"></td>
						</tr>
						<tr>
							<td>Titulli</td>
							<td><input type="text" name="Titulli"></td>
						</tr>
						<tr>
							<td>Pershkrimi</td>
							<td>
								<textarea cols="30" rows="11" name="Pershkrimi"></textarea>
							</td>
						</tr>
						<tr>
							<td>Cmimi</td>
							<td><input type="text" name="Cmimi"></td>
						</tr>
						<tr>
							<td>Botuesi</td>
							<td><input type="text" name="Botuesi"></td>
						</tr>
						<tr>
							<td>Publikimi</td>
							<td><input type="text" name="Publikimi"></td>
						</tr>
						<tr>
							<td>Tirazhi</td>
							<td><input type="text" name="Tirazhi"></td>
						</tr>
						<tr>
							<td>Nr_faqeve</td>
							<td><input type="text" name="Nr_faqeve"></td>
						</tr>
						<tr>
							<td>Kategoria</td>
							<td><input type="file" name="kopertina"></td>
							
						</tr>   
						<tr>
							<td colspan="2" align="center"><input type="submit" name="sub" value="Shto Librin" class="shtoBtn"></td>
						</tr>	

					</table>
				</form>

		<?php 
			$link=mysqli_connect("localhost","root","");
			if(!$link){
				echo "nuk eshte lidhur me databazen";
			}

			if(!mysqli_select_db($link,"librari_online")){
				echo "databaza nuk eshte zgjedhur";
			}

		if(isset($_POST["sub"])){
			$Seria = $_POST['Seria'];
			$Titulli = $_POST['Titulli'];
			$Pershkrimi = $_POST['Pershkrimi'];
			$Cmimi = $_POST['Cmimi'];
			$Botuesi = $_POST['Botuesi'];
			$Publikimi = $_POST['Publikimi'];
			$Tirazhi = $_POST['Tirazhi'];
			$Nr_faqeve = $_POST['Nr_faqeve'];
			$kopertina = $_POST['kopertina'];
		
			$sql = "INSERT INTO lib_pershkrimi(Seria,Titulli,Pershkrimi,Cmimi,Botuesi,Publikimi,Tirazhi,Nr_faqeve,kopertina) VALUES('$Seria','$Titulli','$Pershkrimi','$Cmimi','$Botuesi','$Publikimi','$Tirazhi','$Nr_faqeve','$kopertina') ";
			$res=mysqli_query($link,$sql);
			echo mysqli_error($link);
			}

			
		 ?>
			

		</div>

	</div>


	<?php  
		include("footer.php");
	?>

</body>
</html>

