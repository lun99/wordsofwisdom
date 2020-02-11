<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset="utf-8"/>
	<title>Home</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="">
	<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
	<style type="text/css">
		.mes{
			padding: 0;
			margin: 0;
		}

		body{
			background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(images/b1.jpg);
		}

		
	</style>
</head>



<body>
	<?php  
		include("header.php");
	?>


<?php
		$link = mysqli_connect("localhost","root","","librari_online");
		if(!$link){
			echo "lidhja nuk u realizua";
			}

		$sql = "SELECT * FROM lib_pershkrimi ";
		$result = mysqli_query($link,$sql);
		$count = mysqli_num_rows($result);
		if($count > 0){
		while($row = mysqli_fetch_assoc($result)){
		?>
	
			<div class="mes">
				<img src="librat/<?php echo $row['kopertina'];?>" width="266" height="381"/>
				<h5><?php echo $row['Titulli'];?> </h5>
				<p> Cmimi: $<?php echo $row['Cmimi'];?> </p>
				<form method="post" action="shporta.php">
					<button type="submit" name="shto">Shto ne shporte</button>
				</form>
			</div>
	<?php
			}
		}
	?>



	<?php  
		include("footer.php");
	?>
</body>
</html>

	