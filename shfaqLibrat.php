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

<div class="paraqit">
			<h2 align="center" style="color: black; font-family: Sriracha; font-size:50px; background-color: #FFA07A;""> Lista e librave </h2>
			<table border="1" class="tabela">
				<tr>
					<th>Seria</th>
					<th>Titulli</th>
					<th>Pershkrimi</th>
					<th>Cmimi</th>
					<th>Botuesi</th>
					<th>Publikimi</th>
					<th>Tirazhi</th>
					<th>Nr_faqeve</th>
					<th>Fshi</th>
				</tr>

				<?php
					$link = mysqli_connect("localhost","root","","librari_online");
					if(!$link){
						echo "lidhja nuk u realizua";
					}

					$sql = "SELECT * FROM lib_pershkrimi ";

					$res = mysqli_query($link,$sql);
					$count = mysqli_num_rows($res);
					if($count > 0){
						while($row = mysqli_fetch_assoc($res)){
							echo "<tr><td>".$row['Seria']."</td><td>".$row['Titulli']."</td><td>".$row['Publikimi']."</td><td>".$row['Cmimi']."</td><td>".$row['Botuesi']."</td><td>";
							$per= $row['Pershkrimi'];
							$per = substr($per, 0,100);
							echo $per."<a href='more.php?id=".$row['Id_Seria']."'>...shiko me shume.</a>";
							echo "</td><td>".$row['Tirazhi']."</td><td>".$row['Nr_faqeve']."</td>";
							echo "<td><a href='delete.php?id=".$row['Id_Seria']."'>Fshi</a></td></tr>";
						}
						echo "</table>";
					}
					else{
						echo "nuk ka rezultat ne tabele";
					}
				?>
				
			</table>
</div> 

	<?php  
		include("footer.php");
	?>





</body>
</html>

