 <?php 
	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"librari_online");
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset="utf-8"/>
	<title>Online Library</title>
	<link rel="stylesheet" type="text/css" href="CSS/index.css">
	<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
	<style>
		body{
			background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(images/books.jpg);
			height: 100vh;
			background-size: cover;
			background-position: center;
			font-family: Tahoma, Geneva, sans-serif;
			color: #fff;
		}
		
		input[type=submit]{
			border: none;
			background: white;
			color: black;
			font-size: 16px;
			line-height: 25px;
			padding: 10px 0;
			border-radius: 12px;
			cursor:pointer;
			width: 180px; 
			margin-left: 30px;
		}

		input[type=submit]:hover{
			background: black;
			color: white;
		}
	</style>
</head>
<body>
		<div class="title">
			<h1>"Words Of Wisdom"</h1>
		</div>

		<div class="hyr"> 
			<form class="login_container" name="form1" action="index.php" method="post">
				<h2> Miresevini! </h2>
				<br><br>
				<input type="email" name="email" placeholder="Email">
				<input type="password" name="pass" placeholder="Password">
				<br><br>
				<input type="submit" name="submit1" value="Hyr si admin"><br><br>
				<input type="submit" name="submit2" value="Hyr si user">
				<br><br><br>
			
				Nuk keni nje account? <a href="regjistrohu.php">&nbsp;Regjistrohu</a>
			</form>
		</div>

		<?php 
			if(isset($_POST["submit1"])){
				$res=mysqli_query($link,"SELECT * FROM admin_login WHERE email_admin='$_POST[email]' && pass_admin='$_POST[pass]'");
				while($row=mysqli_fetch_array($res))
			{
				?>
				<script type="text/javascript">
	 				alert('Ju u log-uat si admin!');	
					window.location="shfaqLibrat.php";
				</script>
				<?php
			}
		}
	?>

	<?php 
			if(isset($_POST["submit2"])){
				$result=mysqli_query($link,"SELECT * FROM user_reg WHERE email_user='$_POST[email]' && pass_user='$_POST[pass]'");
						while($row=mysqli_fetch_array($result))
					{
						?>
						<script type="text/javascript">
			 				alert('Ju u log-uat si user!');	
							window.location="home1.php";
						</script>
					}
				<?php
			
			}
		}
	?> 


	<?php 	
		include("footer.php");
	?>
</body>
</html>

