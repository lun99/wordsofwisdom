<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset="utf-8"/>
	<title>Home</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="">
	<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
	<style type="text/css">

		body{
			//background-color: grey;
			background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(images/b3.jpg);
		}

		.kfoto {
		    width: 400px;
		    display:block;
		    float: left;
		    margin-left: 100px;
		    margin-top: 20px;
		    border: 1px solid #ccc; 
		    padding: 30px;
		    background-color: #ccc;
		}

		.des {
		    width: 900px;
		    margin-right: 100px;
		    display:block;
		    float: right;
		    border: 1px solid #ccc; 
		    margin-bottom: 20px;
		    background-color: #ccc;
		    color:black;
		    padding: 20px;
		}

	</style>
</head>
<body>

<?php  
		include("header.php");
	?>

	<div>
		<h2 align="center" style="color: white; font-family: Sriracha; font-size:50px; margin-top: 60px;"> Rezultatet e kerkimit tuaj.</h2>
	</div>



<?php

	$link=mysqli_connect("localhost","root","","librari_online");
	$k = $_GET['k'];
	$terms = explode(" ",$k); //ku do e preses fjalen, me space
	$query= "SELECT * FROM lib_pershkrimi WHERE ";
	foreach ($terms as $each) {
		$i++;
		if($i==1)
			$query .= " Titulli LIKE '%$each%' ";
		else
			$query .= " OR Titulli LIKE '%$each%' ";
	}

	$result=mysqli_query($link,$query);
	$numrow = mysqli_num_rows($result);
	if($numrow > 0){
	while($row=mysqli_fetch_assoc($result) ){
		?>

		
		
			<div class="responsive">
			<div class="gallery">
			<div class="kfoto"><img src="librat/<?php echo $row['kopertina'];?>" width="300" height="450"/></div>
				<div class="des">
				<h4>Seria: <?php echo $row['Seria']."<br>";?></h4>
				<h5>Titulli: <?php echo $row['Titulli']."<br>"; ?></h4>
				<h4>Pershkrimi: <?php echo $row['Pershkrimi']."<br>"; ?></h4>
				<h4>Cmimi: $<?php echo $row['Cmimi']."<br>"; ?></h4>
				<h4>Botuesi: <?php echo $row['Botuesi']."<br>"; ?></h4>
				<h4>Publikimi: <?php echo $row['Publikimi']."<br>"; ?></h4>
				<h4>Tirazhi: <?php echo $row['Tirazhi']."<br>"; ?></h4>
				<h4>Nr. faqeve: <?php echo $row['Nr_faqeve']."<br>"; ?></h4>

				</div>
		</div>

	</div>  <?php


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
