<?php
session_start();
if(isset($_SESSION["sid"]))
{
	header("location:user.php");
}

if(isset($_POST["login_button"]))
{
	include("connection.php");

	$eid = $_POST["email"];

	$pwd = $_POST["password"];

	$qry = "select * from reg where email = '$eid' AND password = '$pwd'";

	$result = mysqli_query($connect, $qry); 

	$rows = mysqli_num_rows($result);

	$data = mysqli_fetch_assoc($result);

	if($rows>0)	
	{

		$id = $data["id"];
		session_start();
		$_SESSION["sid"] = $data["id"];

		header("location:user.php");
	}
	else
	{
		?> <script> alert("Invalid Email OR Password"); </script> <?php
	}
}


?>








<!DOCTYPE html>
<html>
<head>
	<title> Login |  project </title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<link href="css/style.css" rel="stylesheet">
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
			<div class="col-md-4 mx-auto">
				<h3> Login Form </h3>
				<form method="post">
					<input type="email" name="email" placeholder="Email ID" class="form-control">
					<input type="password" name="password" placeholder="Password" class="form-control">
					<button type="submit" class="btn btn-primary" id="btnsubmit" name="login_button"> Login </button>

					<p> Don't Have an Account? <a href="register.php"> Sign Up </a> </p>	
					<p> <a href="index.php"> <i class="bi bi-house"></i> Go to Home Page</a> </p>
				</form>
			</div>
		</div>
	</div>