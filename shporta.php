<?php
 	session_start();
	$link = mysqli_connect("localhost","root","","librari_online");
	if(!$link){
		echo "lidhja nuk u realizua";
	}

if(isset($_GET['action']))	{
	if($_GET['action'] == "delete"){
		foreach ($_SESSION['shopping_cart'] as $keys => $values) {
			if($values['item_id']==$_GET['id']){
				unset($_SESSION['shopping_cart'][$keys]);//destroy sesionin per cdo keys
				echo "<script>alert('libri u hoq')</script>";
				echo  "<script>window.location='shporta.php'</script>";
			}
		}
	}
}


?>


<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset="utf-8"/>
	<title>Shporta</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="">
	<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
	<style type="text/css">
		body{
			 background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(images/10.jpg);
		}	

		.table-responsive{
			color: black;
			font-style: bold;
			width: 1000px;
			background-color: white;
			margin:auto;
		}	

		

	</style>
</head>
<body>

<?php  
		include("header.php");
	?>


	<div style="clear:both"></div>
	<br>
	<h3 align="center" style="color: white; font-family: Sriracha; font-size:50px; margin-top: 60px;"> Shporta </h3>
	<div class="table-responsive">
		<table class="table table-bordered">
			<tr>
				<th width="40%">Titulli</th>
				<th width="10%">Sasia</th>
				<th width="20%">Cmimi</th>
				<th width="15%">Totali</th>
				<th width="5%">Veprimi</th> 
			</tr>
			<?php 
				if(!empty($_SESSION['shopping_cart'])){
					$totali = 0;//nqs esht bosh vek nk shfaq gje
					foreach ($_SESSION['shopping_cart'] as $keys => $values) {//aksesojm gjith elem e shopcart array
				?>
						<tr>
							<td><?php echo $values['item_titulli']; ?></td>
							<td><?php echo $values['item_sasia']; ?></td>
							<td>$ <?php echo $values['item_cmimi']; ?></td>
							<td>$ <?php echo number_format($values['item_cmimi']*$values['item_sasia'],2); ?></td>
							<td><a href="shporta.php?action=delete&id=<?php echo $values['item_id'];?>"><span class="text-danger">Hiq</span></a></td>
						</tr>
			<?php	
					$totali = $totali + ($values['item_cmimi']*$values['item_sasia']);
					}
			?>
				<td colspan="3" align="right">Totali</td>
				<td align="right">$<?php echo number_format($totali,2); ?></td>
	

			<?php	
			
					
		
				}
			?>	
			
		</table>

	</div>





	<?php  
		include("footer.php");
	?>

</body>
</html>
