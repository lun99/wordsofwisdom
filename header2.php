<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset="utf-8"/>
	<title>Header</title>
	<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
		body{
			margin: 0;
			padding: 0;
		}
		ul{
			float: right;
			list-style-type: none;
			padding-top: 8px; 
			padding-bottom: 0;
		}

		ul li{
			display: inline-block;
		}

		ul li a{
			text-decoration: none;
			color: #fff;
			padding: 5px 30px;
			border: 1px solid transparent;
			transition: 0.6s ease;
			text-align: center;
			display: block;
		}

		ul li a:hover{
			background-color: #fff;
			color: #000;
			padding: 5px 30px;
		}

		ul li.active a{
			background-color: #fff;
			color: #000;
		}

		.main{
			top: 0;	
			overflow: hidden;
			overflow: hidden;
 		 	background-color: #2F4F4F;
		}

		.main .kerko{
			float: right;
			position: relative;
		}

		.lib{
			padding: 5px 20px;
			margin-top: 0px;
			margin-left: 5px;
			border-radius: 10px;
		}

		.s{
			padding: 5px 30px;
			margin-top: 6px;
			margin-right: 16px;
			background: #ddd;
			font-size: 14px;
			border: none;
			cursor: pointer;
			border-radius: 10px;
			color: black;
			border: 1px solid transparent;
			transition: 0.6s ease;
			text-align: center;
		}
		.s{
			background-color: #fff;
			color: #000;
		}

		#l{
			margin: 6px;
			float: left;
		}

		

	
	</style>
</head>
<body>
	<nav class ="main fixed-top">
		<a href="ShfaqLibrat.php"><img id="l" src="images/lg.png" width="120"></a>
		<ul>
			<li class="b"> <a href="shfaqLibrat.php"> <span class="glyphicon">&#xe043;</span> Shfaq Librat</a></li>
			<li class="b"><a href="shtoLibra.php"><span class="glyphicon">&#x2b;</span> Shto Libra</a></li>
			 <li><a href="kontaktAdmin.php"><span class="glyphicon">&#x2709;</span> Komentet</a></li>
			<li class="b"><a href="index.php"><span class="glyphicon">&#xe131;</span> Dil</a></li>
			<form action="kerko1.php" method="get" class="kerko">
				<li><input type="text" name="k" placeholder="Kerko Librin" class="lib"></li>
				<li><input type="submit" name="submit" class="submit" value="Kerko" class="s"></li>	
			</form>

		</ul>
	</nav>

	<!-- <script type="text/javascript">
			var header = document.getElementsByClassName("main");
		var btns = header.getElementsByClassName("b");
		for (var i = 0; i < btns.length; i++) {
		  btns[i].addEventListener("click", function() {
		  var current = document.getElementsByClassName("active");
		  current[0].className = current[0].className.replace("active", "");
		  this.className += " active";
		  });
	</script> -->
</body>
</html>