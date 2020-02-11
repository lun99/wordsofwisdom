<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset="utf-8"/>
	<title>shfaqLibra</title>
	<link rel="stylesheet" type="text/css" href="">
	<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
	<style type="text/css">
		body{
			background-color: #F0E68C;
			opacity: 0.9;
			margin: 0;
			padding: 0;
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
		}

		th{
			background-color: #4CAF50;
  			color: white;
		}

		th,td{
			padding: 15px;
		}
	</style>
		
</head>
<body>
	<?php  
		include("header2.php");
	?>

<div class="paraqit">
			<h2 align="center" style="color: black; font-family: Sriracha; font-size:50px; background-color: #FFA07A;""> Lista e Perdoruesve </h2>
			<table border="1" class="tabela">
				<tr>
					<th>Emer</th>
					<th>Mbiemer</th>
					<th>Email</th>
					<th>Datelindja</th>
					<th>Vendlindja</th>
					<th>Gjinia</th>
				</tr>

				<?php
					$link = mysqli_connect("localhost","root","","librari_online");
					if(!$link){
						echo "lidhja nuk u realizua";
					}

					$sql = "SELECT * FROM user_reg ";

					$res = mysqli_query($link,$sql);
					$count = mysqli_num_rows($res);
					if($count > 0){
						while($row = mysqli_fetch_assoc($res)){
							echo "<tr><td>".$row['emer_user']."</td><td>".$row['mbiemer_user']."</td><td>".$row['email_user']."</td><td>".$row['datelindja']."</td><td>".$row['vendlindja']."</td><td>".$row['gjinia']."</td></tr>";
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