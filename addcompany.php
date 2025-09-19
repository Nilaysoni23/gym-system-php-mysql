<?php
	session_start();
	//include_once("menu.php");
	if(isset($_POST['sin']))
	{
		$cos=$_POST['sin'];	
		header("location:menu.php");
	}
?>
<html>
<center>
<head>
	<title>Add a company</title>
</head>
<body>
	<form method="post">
	<h1>New company</h1>
	<table cellpadding="10px" border=1 bgcolor="pink">
	<tr>
		<th clospan=2>company name</th>
	</tr>
	<tr>
		<td>Enter a company</td>
		<td><input type="text" placeholder="Enter a company name"></td>
	</tr>
	<tr>
		<td colspan=2 align="center"><input type="submit" value="Add a company" name="sin">
				<input type="reset" value="cancel"></td>
	</tr>
	</table>
	</form>
</body>
</html>
		