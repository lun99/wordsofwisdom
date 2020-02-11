<!DOCTYPE html>
<html>
<head>
	<title>About-us Page</title>
	<style type="text/css">

		body{
			margin: 0;
			padding: 0;
		}
		.container{
			width:100%;
			height:auto;
			display: flex;
			align-items: flex-start;
			flex-wrap: wrap;
		}
		.about{
			width: 100%;
			height: 500px;
			background-image: url(images/333.jpg); 
			background-size: cover;
			background-position: center;
			background-repeat: no-repeat;
			display: flex;
			align-items: center;
			justify-content: center;
			flex-wrap: wrap;
		}
		.text{
			font-size: 30px;
			color:#fff;
			font-family: sans-serif;
			text-shadow: 0px 15px 12px #000;
		}
		.line{
			width:200px;
			height: 8px;
			background-color: #17ff8d;
			display: block;
			position: relative;
			border-radius: 5px;
			left:10%;
			box-shadow: 0px 15px 12px 0px #000;
		}
		.content{
			width:100%;
			height:auto;
			background-color: #17ff8d;
			font-size: 23px;
			font-family: audiowide;
			color:#333;
			line-height: 30px;
			text-align: center;
		}
		b{
			font-size: 50px;
			color:#000;
			font-weight: 500px;
		}
	</style>
</head>
<body>
	<?php  
		include("header.php");
	?>
	<div class="container">
		<div class="about">
			<div class="text">
				<h1>About Us</h1>
				<div class="line"></div>
			</div>
		</div>
		<div class="content">
			<p><b>L</b>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
		</div>


	<?php  
		include("footer.php");
	?>

</body>
</html>