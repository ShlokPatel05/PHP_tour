<?php

include("connection.php");

$id =  $_GET["id"];

$qry = "delete from reg where id = '$id';";

$result = mysqli_query($connect, $qry);

if($result)
{
	?> <script> alert("Account Deleted Successfully"); </script> <?php
	session_start();
	session_destroy();
	header("location:register.php");
}
else
{

?> <script> alert("Could not deleted, try again later"); </script> <?php

}

?>