<?php 
	session_start();
	$_SESSION['message'] = '';

	$link = mysqli_connect("localhost","root","","librari_online");

	if(isset($_POST['sub'])){

		$emri = $_POST['emer_user'];
 		$mbiemri = $_POST['mbiemer_user'];
 		$email = $_POST['email_user'];
 		$pass = $_POST['pass_user'];
 		$cpass = $_POST['cpass_user'];
 		echo $emri;
 		if($pass == $cpass){

 			$_SESSION['emer_user'] = $emri;
 			$_SESSION['mbiemer_user'] = $mbiemri;
 			$_SESSION['email_user'] = $email;
 			$_SESSION['pass_user'] = $pass; 
 			$_SESSION['cpass_user'] = $cpass; 

 			$sql = "INSERT INTO user_reg(emer_user,mbiemer_user,email_user,pass_user) VALUES('$emri','$mbiemri','$email','$pass')";

 			if(mysqli_query($link,$sql)){
 				$_SESSION['message'] = "U regjistruat me sukses! $emri u shtua ne databaze.";
 				header('location: home1.php');
 			}

 			else{
 			//	$_SESSION['message'] = "User-i nuk u shtua ne db."; 
 			echo "User-i nuk u shtua ne db.".mysqli_error($link); 
 			}
 		}
 		else{
		//	$_SESSION['message'] = "Password-et nuk jane njesoj!";
			echo  "Password-et nuk jane njesoj!";
		}
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset="utf-8"/>
	<title>Regjistrohu</title>
	<link rel="stylesheet" type="text/css" href="CSS/regjistrohu.css">
	<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
	<style>
		body{
			margin: 0px;
			padding: 0px;
			background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(images/6.jpg);
			
		}
		.register{ 
			background: rgba(44,62,80,0.8);
			width: 400px;
			color: #e6dddd;
			font-size: 18px;
			padding: 10px;
			border-radius: 10px;
			margin: auto;
		}

	</style>

	
</head>
<body>
	<div class="register">
		<form method="post" action="regjistrohu.php">
			<div class="alert alert-error"> <?php  $_SESSION['message'] ?></div>
			<h2>Regjistrohu per tu bere pjese e Librarise sone!</h2>
			
			<label> Emri :</label><br>
			<input type="text" name="emer_user" id="name" placeholder="Emri"><br><br>

			<label> Mbiemri :</label><br>
			<input type="text" name="mbiemer_user" id="name" placeholder="Mbiemri"><br><br>

			<label> Datelindja :</label><br>
			<input type="date" name="datelindja" id="name">  <br><br>

			<label> Vendlindja :</label><br>
			<input type="text" name="vendlindja" id="name" placeholder="Vendlindja"><br><br>

			<label> Gjinia :</label><br>
			<input type="text" name="gjinia" id="name" placeholder="Gjinia"><br><br>

			<label> Email :</label><br>
			<input type="email" name="email_user" id="name" placeholder="Email"><br><br>

			<label> Password :</label><br>
			<input type="password" name="pass_user" id="name" placeholder="Password"><br><br>

			<label> Rishkruaj Password :</label><br>
			<input type="password" name="cpass_user" id="name" placeholder="Rishkruaj Password"><br><br>

			<input name="sub" type="submit" value="Regjistrohu" id="sub"><br><br>

			Keni nje account? <a href="index.php" style="font-size: 13px; text-decoration:  none; font-family: 'Play',sans-serif; color:yellow;">&nbsp;Hyr</a>

		</form>






	</div>


<?php 	
		include("footer.php");
	?>
	
</body>
</html>

