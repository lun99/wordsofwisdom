<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset="utf-8"/>
	<title>kontakt</title>
	<link rel="stylesheet" type="text/css" href="">
	<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
	<style type="text/css">
		 body{
            margin: 0;
            padding: 0;
            text-align: center;
            background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(images/444.jpg);
            background-size: cover;
            background-position: center;
            font-family: sans-serif;
        }

	</style>
		
</head>
<body>
	<?php  
		include("header2.php");
	?>



<div class="paraqit">
			<h2 align="center" style="color: black; font-family: Sriracha; font-size:50px; background-color: #FFA07A;"> Komentet </h2>
			
	
				<?php
					$link = mysqli_connect("localhost","root","","librari_online");
					if(!$link){
						echo "lidhja nuk u realizua";
					}

					$sql = "SELECT * FROM kontakt ";
					
				
					 $res = mysqli_query($link,$sql);
					$count = mysqli_num_rows($res);
					if($count > 0){
						while($row = mysqli_fetch_assoc($res)){
				?>
							<div class="kom">
							<p style="color: white; font-size:30px;">Emri: <?php echo $row['name']; ?> </p>
							<p style="color: white; font-size:20px;">Email: <?php echo $row['email']; ?> </p>
							<p style="color: white; font-size:20px;">Komenti: <?php echo $row['message']; ?> </p>

							<br><br>
							</div>
				
				<?php
						}
						
					}
					else{
						echo "nuk ka rezultat ";
					} 
			?>	
				
	
	
				
			

				

				
		










	<?php  
		include("footer.php");
	?>





</body>
</html>