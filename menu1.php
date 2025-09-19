<?php
	session_start();
	
	if(isset($_SESSION['userlogin']))
	{
		
		echo "Welcome user ".$_SESSION["userlogin"];
		
	}
	
	//$_SESSION['email'];
	if(isset($_SESSION['member_name']))
	{
		echo "<br>Thank you for being member ".$_SESSION["member_name"];		
	}
?>
<?php
	if(isset($_SESSION['adminlog']))
	{
		echo "welcome ".$_SESSION["adminlog"];
	}
?>
<?php
if(isset($_POST["submit"]))
{
	header("Location:member.php");
}
?>
<html>
<head>
	<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="body">
<div class="navbar">

	<img src="16.jpg" class="logo">
	
<div class="toggle-menu">
    <input type="checkbox" id="toggle"/>
   <label for="toggle" class="sidebaricon">
    <div class="spinner top"></div>
    <div class="spinner middle"></div>
    <div class="spinner bottom"></div>
    </label>
<ul class="menu">
    <li><a href="logout.php">Logout</a></li>
	    
</ul>
</div>

	
<ul>
<li><a href="#">Home</a></li>
<li><a href="registration1.php">Visitor</a></li>
<li><a href="member1.php">Members</a></li>
<li><a href="trainer1.php">Trainers</a></li>
<li><a href="package1.php">Our plans</a></li>
<li><a href="schedule1.php">schedule</a></div></li>
</ul>
<div class="header-container">
	<h1><span class="border-bottom">NO PAIN</span><span class="text-primory"> NO GAIN</span></h1>
	<p>"Push harder than yesterday if you want a different tomorrow."</p></div>
</body>
</html>
