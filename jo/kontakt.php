<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset="utf-8"/>
	<title>Kontakt</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
	<style type="text/css">
		 body{
            margin: 0;
            padding: 0;
            text-align: center;
            background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(images/555.jpg);
             background-size: cover;
            background-position: center;
            font-family: sans-serif;

        }

        .contact-title{
            margin-top: 100px;
            color: #fff;
            text-transform: uppercase;
            transition: all 4s ease-in-out;
        }

        .contact{
            margin-top: 50px;
            transition: all 4s ease-in-out;
        }

        .cont{
            width: 600px;
            background: transparent;
            border: none;
            outline: none;
            border-bottom: 1px solid #FFF0F5;
            color: #FFF0F5;
            font-size: 18px;
            margin-bottom: 16px;
             height: 45px;
        }

        .form-control-submit{
            background: #2F4F4F;
            border-color: transparent;
            color: #fff;
            font-size: 20px;
            font-weight: bold;
            letter-spacing: 2px;
            height: 50px;
            margin-top: 200px;
       }

       ::placeholder{
            color: #FFF0F5;
       }

         .form-control-submit:hover{
            background-color:   #9370DB;
            cursor: pointer;
        }

  
	</style>
</head>
<body>
	<?php  
		include("header.php");
	?>

	


    <div class="contact-title">
            <h1 style="font-size: 32px; line-height: 10px;">Jeni te interesuar per me teper?</h1>
            <h2 style="font-size: 18px;">Dergoni nje email!</h2>
    </div>

    <div class="contact">
         <form id="contact-form" method="post" action="kontact.php">
         <input name="name" type="text" class="cont" placeholder="Emri Juaj" required>
         <br>
         <input name="email" type="email" class="cont" placeholder="Email-i juaj" required><br>
             
             <textarea name="message" class="cont" placeholder="Mesazhi" row="4" required></textarea><br>
             
             <input type="submit" class="form-control-submit" value="DERGO MESAZH" name="dergoni">
         
         </form>
     </div>

<?php
	$link = mysqli_connect("localhost","root","","librari_online");
	if(!$link){
		echo "Nuk u lidh me databazen";
	}

	if(isset($_POST['dergoni'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$sms = $_POST['message'];

		$sql = "INSERT INTO kontakt(name,email,message) VALUES($name,$email,$sms)";
		$result = mysqli_query($link,$sql);
	}

?>





	<?php  
		include("footer.php");
	?>
</body>
</html>
