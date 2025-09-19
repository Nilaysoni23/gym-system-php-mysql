<?php
	session_start();
$conn=mysqli_connect("localhost","root","","database1") or die("Connection unsucessfully");
$sessionvalue=$_SESSION['userlogin'];
$qry="select * from member where firstname='$sessionvalue'";
$result=mysqli_query($conn,$qry);
$totle=mysqli_num_rows($result);
   if($totle>0)
    {
        echo "You are already member so you cant join again<br>";
    }
	
?>
<?php

	
	if(isset($_SESSION['userlogin']))
	{
		
		echo "Welcome user ".$_SESSION["userlogin"];
		//unset($_SESSION['userlogin']);
		
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
    <li><a href="logout.php"><input type="button">Logout</a></li>
	    
</ul>
</div>
<ul>
<li><a href="#">Home</a></li>
<li><a href="trainer.php">Trainers</a></li>
<li><a href="package.php">Our plans</a></li>
<li><a href="schedule.php">schedule</a></li>
<li><a href="contact.php">Contact us</a></li>
<li><a href="aboutus.php">About Us</a></div></li>
</ul>
<div class="message">This is message</div>



<div class="header-container">
	<h1><span class="border-bottom">NO PAIN</span><span class="text-primory"> NO GAIN</span></h1>
	<p>"Push harder than yesterday if you want a different tomorrow."</p>
		<form method="post" action=""><input type="submit" class="btn" name="submit" value="Join Now"></form>
	
</div>
</div>
</body>
<footer>
	<p>Follow us on social media:</p>
	<p>instagram:fitnfinefitness &nbsp;faceBook:nf_fitness_club</p>
	<P>&copy; 2023 Fit N Fine.All rights reserved.</p>

</footer>

</html>
