<?php
	session_start(); 
	$link = mysqli_connect("localhost","root","","librari_online"); 
	if(!$link){
		echo "lidhja nuk u realizua";
	}

	if(isset($_POST['shtoShport'])){
		if(isset($_SESSION['shopping_cart'])){
			$item_array_id = array_column($_SESSION['shopping_cart'], "item_id");
			if(!in_array($_GET['id'], $item_array_id)){
				$count= count($_SESSION['shopping_cart']);
				$item_array = array(
					'item_id' =>$_GET['id'] , 
					'item_titulli' =>$_POST['hidden_titulli'] ,
					'item_cmimi' =>$_POST['hidden_cmimi'],
					'item_sasia' =>$_POST['sasia']
			);
				$_SESSION['shopping_cart'][$count]=$item_array;
			}else{
				echo "<script>alert('u shtua!')</script>";
				echo "<script>window.location='home1.php'</script>";
			}
		}
		else{//te array ruajtem te gjith te dhenat
			$item_array = array(
				'item_id' =>$_GET['id'] , 
				'item_titulli' =>$_POST['hidden_titulli'] ,
				'item_cmimi' =>$_POST['hidden_cmimi'],
				'item_sasia' =>$_POST['sasia']
			);
			$_SESSION['shopping_cart'][0]=$item_array;
		}
	}



?>


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
			background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(images/b2.jpg);
		}

	</style>
</head>
<body>

<?php  
		include("header.php");
	?>

	<h3 align="center" style="color: #e6ebff; font-family: Sriracha; font-size:8vw ; margin-top: 50px;">Words of Wisdom</h3><br><br>
	<?php
		$sql = "SELECT * FROM lib_pershkrimi";
		$result = mysqli_query($link,$sql);
		$numrow = mysqli_num_rows($result); 
		if($numrow>0){
			while($row=mysqli_fetch_array($result)){
		?>
			<div class="col-md-4">
				<form method="post" action="home1.php?action=add&id=<?php echo $row['Id_Seria'];?>"">
					<div style="border: 1px solid #333; background-color: #f1f1f1; border-radius: 5px; padding: 20px; margin: 30px;" align="center">
						<img src="librat/<?php echo $row['kopertina']; ?>" class="img-responsive"><br>
						<h4 class="text-info"><?php echo $row['Titulli']; ?></h4>
						<h4 class="text-danger">$<?php echo $row['Cmimi']; ?></h4>
						<input type="text" name="sasia" value="1">
						<input type="hidden" name="hidden_titulli" value="<?php echo $row['Titulli'];?>">
						<input type="hidden" name="hidden_cmimi" value="<?php echo $row['Cmimi'];?>">
						<input type="submit" name="shtoShport" style="margin-top:5px;" class="btn btn-success" value="Shto ne shporte">
					</div>
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
