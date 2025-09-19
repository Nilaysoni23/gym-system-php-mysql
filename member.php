<?php

session_start();
$conn=mysqli_connect("localhost","root","","database1") or die("Connection unsucessfully");
$sessionvalue=$_SESSION['userlogin'];
$qry="select * from member where firstname='$sessionvalue'";
$result=mysqli_query($conn,$qry);
$totle=mysqli_num_rows($result);
if($totle>0)
    {
        echo "You are alreay member";
        header("Location:menu.php");
    }
    
?>

<?php
if(isset($_POST["submit"]))
{
    
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $gender=$_POST["gender"];
    
    if($fname==$sessionvalue)
    {
   
    $query="insert into member(firstname,lastname,gender) values ('$fname','$lname','$gender')";

    $run=mysqli_query($conn,$query);    

    header("Location:pay.php");
    }
    else{
        echo "<script> alert('membername must be same as username');</script>";
    }
}
?>
<!Doctype html>
<head>
    <style>
        body{
            background-color:cyan;
        }
        form{
    	background-color: white;
    	width: 25%;
    	margin: 120px auto;
    	padding:50px;
	    box-shadow: 10px 10px 5px rgb(82,11,23);
    	border-radius: 6px;
        }

form .save{
	color:white;
	background-color: rgba(152, 19, 241, 0.604);
	padding: 10px;
	font-size: small;
	border-radius: 10px ;
}
form a{
    text-decoration:none;
	color:white;
	text-transform:uppercase;
	border:3px solid #fff;
	transition:0.5s;
	padding:0.8rem;
    background-color:black;
}
form a:hover{
    background-color:black;
	color:white;
}
form h1{
    //display:center;
    border:3px solid black;
    text-transform:uppercase;
    text-align:center;
}
   

        </style>

</head>
<body>
    <form method="post" action="">

        <h1>Member</h1>
        <label>First Name:</label>
        <input type="text" name="fname" required><br>

        <label>Last Name:</label>
        <input type="text" name="lname" required><br>

        <label>Gender:</label>
        <input type="radio" value="Male" name="gender">Male
        <input type="radio" value="Female" name="gender">Female
        <input type="radio" value="other" name="gender">other<br><br>

        <input type="submit" value="Save" name="submit" class="save"><br><br>
        <a href="menu.php">Go to home</a>
</form>
</body>
</html>  
    