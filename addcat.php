<?php
include_once("menu.php");
//$con=mysqli_connect("localhost","root","","shopping");
if(isset($_POST['add']))
{
	$cnm=$_POST['cnm'];
	//echo "category name is:".$cnm;
	header("location:menu.php");
	//$query="insert into category(name) values('$cnm')";
	//$run=mysqli_query($con,$query);
	if($run)
	{
		header("location:addcat.php");
	}
}
?>
<html>
<center>
<form method="post">
<h1>Add new category</h1>
<table cellpadding="10px" border=1>
<tr>
	<td>Enter category name:</td>
	<td><input type="text" name="cnm"></td>
</tr>
<tr>
	<td colspan="2" align="center"><input type="submit" name="add" value="Add categary"></td>
</tr>
</html>