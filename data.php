<?php

$connection = mysqli_connect("localhost", "root", "");


if (mysqli_connect_errno()) {
 	echo "Couldn't connect to Database <br>".mysqli_connect_error();
 } 
 else{
 	echo "Connect to Database Succcesfully!";
 }



?>
