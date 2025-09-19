<?php
$host="localhost";
$user="root";
$password="";
$name="database1";
$conn=mysqli_connect($host,$user,$password,$name);
if(!$conn)
{
	die("connection failed.".mysqli_connect_error());
}
echo "";
?>

