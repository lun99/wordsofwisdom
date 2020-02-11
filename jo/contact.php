<html>
<head>
    <title>Contact Form</title>
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

        #contact-form{
            margin-top: 50px;
            transition: all 4s ease-in-out;
        }

        .form-control{
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

       form .submit{
            background: #2F4F4F;
            border-color: transparent;
            color: #fff;
            font-size: 20px;
            font-weight: bold;
            letter-spacing: 2px;
            height: 50px;
            margin-top: 290px;
       }

       ::placeholder{
            color: #FFF0F5;
       }

        form .submit:hover{
            background-color:   #9370DB;
            cursor: pointer;
        }

    </style>
</head>

<body>



    <div class="contact-title">
            <h1 style="font-size: 32px; line-height: 10px;">Jeni te interesuar per me teper?</h1>
            <h2 style="font-size: 18px; ;">Dergoni nje email!</h2>
    </div>

    <div class="contact-form">
         <form id="contact-form" method="post" action="contact.php">
         <input name="name" type="text" class="form-control" placeholder="Your Name" required>
         <br>
         <input name="email" type="email" class="form-control" placeholder="Email-i juaj" required><br>
             
             <textarea name="message" class="form-control" placeholder="Mesazhi" row="4" required></textarea><br>
             
             <input type="submit" class="form-control submit" value="DERGO MESAZH">
         
         </form>
     </div>


    <?php  
        include("footer.php");
    ?>
<!-- 
    <?php 
        $name = $_POST['name'];
        $email_user= $_POST['email'];
        $sms = $_POST['message'];

        $email_form = 'Luna.Nano@fti.edu.al';

        $email_subject = "form submition";

        $email_body = "Emri Perdoruesit: $name.\n"."Email-i Perdoruesit: $email_user.\n "."Mesazhi $sms.\n";

        $to = "Luna.Nano@fti.edu.al";

        $headers = "Form: $email_form \r\n";
        $headers .= "Reply-To: $$email_user\r\n";
        mail($to,$email_subject,$email_body, $headers);

        header("location:contact.php");

    ?>
 -->

</body>
</html>