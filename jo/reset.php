<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset="utf-8"/>
	<title></title>
	<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="reset.css">
</head>
<body>
	<div class="reset">
		<form>
			<h2 align="center" style="color: #fff;">Ndrysho Password</h2>
			<input type="password" name="pass" placeholder="Password-i i vjeter"/> <br><br>
			<input type="password" name="pass" placeholder="Password-i i ri"/> <br><br>
			<input type="password" name="pass" placeholder="Konfirmo password-in e ri"/> <br><br>
			<input type="button" value="Ruaj" onclick="mesazhi()"><br><br>
			<a href="index.php" style="text-decoration: none;">Kthehu tek faqja kryesore </a><br><br>

			<div id="msg">Password-i u ndryshua me sukses!</div>
			<script>
				function mesazhi(){
					var x=document.getElementById("msg");
					x.className = "show";
					setTimeout(function(){x.className =
					x.className.replace("show","");},3000);
				}

			</script> 

		</form>
	</div>

	<?php  
		include("footer.php");
	?>
</body>
</html>

