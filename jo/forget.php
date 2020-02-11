<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset="utf-8"/>
	<title></title>
	<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="forget.css">
</head>
<body>
	<div class="forget">
		<form>
			<h2 align="center" style="color: #fff;">Harrove Password</h2>
			<h5 style="font-size: 14px; color: yellow;"> Shkruaj E-email-in tuaj. Ne do t'ju dergojme nje link ne email per te ndryshuar password-in. </h5>
			<input type="email" name="email" placeholder="Shkruaj email-in"> <br><br>
			<input type="submit" value="Dergo" name="dergo" onclick="mesazhi()"><br><br>
			<a href="index.php" style="text-decoration: none;">Kthehu tek faqja kryesore </a><br><br>


			
			

		</form>
	</div>


			<?php
				$link = mysqli_connect("localhost","root","","librari_online");
				if(!$link){
					echo "lidhja nuk u realizua";
				}

				if($_POST['dergo']){
					$email = $_POST['email'];

					$sql = "SELECT * FROM user_reg WHERE email_user = '$email'";
					$res = mysqli_query($link,$sql);
					$count = mysqli_num_rows($res);
					if($count>0){
						echo "fgh";
						while($row=mysqli_fetch_array($res)){
							echo $row['pass_user'];
						
						}
					}
				}
  ?>


	
	
</body>
</html>
