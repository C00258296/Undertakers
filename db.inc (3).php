<!DOCTYPE html>
<html>
<body>

<?php
$hostname = "localhost" ;
$username = "undertakers";
$password = "Grav3;digg3rs;23";


$dbname = "undertakers_";



$con= mysqli_connect($hostname,$username,$password,$dbname);


if(!$con)
{
	echo"Failed to connect to mySql: "  . mysqli_connect_error();
}


?>