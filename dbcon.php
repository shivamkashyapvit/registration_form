<?php
$server="localhost";
$user="root";
$password="";
$db="pro1";

$con=mysqli_connect($server,$user,$password,$db);
if($con)
{
	echo "sucessfull";
}
else{
	echo "unsucessfull";
}
?>