<?php
$conn=mysqli_connect("localhost","root","","database1");

if(isset($_POST["submit"]))
{
    $username=$_POST["username"];
    
    $email=$_POST["email"];
    
    $password=$_POST["password"];
    
    $confipassword=$_POST["confipassword"];

    $query="Select * from ragistration where username='$username' or email='$email'";

    $result=mysqli_query($conn,$query);

    $totle=mysqli_num_rows($result);
    
    if($totle>0)
    {
        echo "<script> alert('Username and password already taken');</script>";
    }
    else{
        if($password==$confipassword)
        {
            $query="insert into ragistration (username,email,password)values('$username','$email','$password')";
            $run=mysqli_query($conn,$query);
            echo 
            "<script> alert('Registration successfull');</script>";
            header("Location:index.php");
    
        }
        else{
            echo "<script> alert('Password does not match');</script>";
    
        }
    }
}
?>
<!Doctype html>
<head>
<style>    
body{
	background-color: blueviolet;
}
form{
	background-color: white;
	width: 25%;
	margin: 120px auto;
	padding:50px;
	box-shadow: 10px 10px 5px rgb(82,11,23);
	border-radius: 6px;
}
#button{
	color:white;
	background-color: rgba(152, 19, 241, 0.604);
	padding: 10px;
	font-size: small;
	border-radius: 10px ;
}
</style>
</head>
<body>
    <form class="" action="" method="post">
    <h1>Registration</h1>
        <lable>username</lable>
        <input type="text" name="username" id="name" required><br>
        <lable>email</lable>
        <input type="text" name="email" id="email" required><br>
        <lable>password</lable>
        <input type="text" name="password" id="password" required><br>
        <lable>Confirm password</lable>
        <input type="text" name="confipassword" id="confipassword" required><br>
        <input type="submit" value="ragister" name="submit" id="button"><br>
        Already member?<a href="index.php">Login here</a>
</form>
</body>
</html>