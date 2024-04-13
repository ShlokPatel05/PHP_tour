<?php

$connect = mysqli_connect("localhost", "root", "", "tourdb");

if(!$connect)
{
    echo "something went wrong please contact to administrator";
}

?>