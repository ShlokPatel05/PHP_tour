<?php

include("connection.php");

if(isset($_POST["register_button"]))
{
            $fn = $_POST["fullname"];
            $eid = $_POST["email"];
            $pwd = $_POST["password"]; 
            $cont = $_POST["contact"]; 
            //photo
            $filename = $_FILES["photo"]["tmp_name"];
            $orgname = $_FILES["photo"]["name"];
            $filesize = $_FILES["photo"]["size"];
            $loc ="uploads/$orgname";

            $allowtype = array('jpg','png','jpeg');
            $ext = pathinfo($loc, PATHINFO_EXTENSION);

            if(in_array($ext, $allowtype))
            {
                if($filesize<900000)
                {
                    move_uploaded_file($filename, $loc);
                    $qry = "INSERT INTO `reg`(`id`, `fullname`, `email`, `password`, `contact`,`photo`) VALUES (NULL, '$fn','$eid','$pwd','$cont', '$orgname')";

                     $result = mysqli_query($connect, $qry);

                        if($result)
                        {
                            ?> <script> alert("Registration Successfull"); </script> <?php
                        }
                        else
                        {
                            ?> <script> alert("Something went wrong, try again later"); </script> <?php
                        }
                }
                        else
                        {
                            ?> <script> alert("Should be less than 200KB"); </script> <?php
                        }
            }
                    else
                    {
                        ?> <script> alert("Should be jpg, png or jpeg"); </script> <?php
                    }

	
}


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courier+Prime:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">


    <link  href="CSS/style.css" rel="stylesheet">

    <style>
		.row {
			height: 100vh;
			align-items: center;
		}
	</style>

</head>
<body style="background-image: linear-gradient( 109.6deg,  rgba(254,253,205,1) 11.2%, rgba(163,230,255,1) 91.1% );">


<div class="container" id="contact">
		<div class="row">
			<div class="col-md-5 mx-auto">
				<h3 style="color:blue"> Register now! </h3>
				<form method="post" enctype="multipart/form-data">
					<input type="text" name="fullname" placeholder="Fullname" class="form-control">
					<input type="email" name="email" placeholder="Email ID" class="form-control">
					<input type="password" name="password" placeholder="Password" class="form-control">
					<input type="tel" name="contact" placeholder="Mobile Number" class="form-control">
					<input type="file" name="photo" class="form-control">
					<button type="submit" class="btn btn-primary" id="btnsubmit" name="register_button"> Register </button>
					<p> Already Have an Account? <a href="login.php"> Sign In </a> </p>
					<p> <a href="index.php"><i class="bi bi-house"></i> Go to Home Page </a></p>
				</form>
			</div>
		</div>
</div>
 



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>