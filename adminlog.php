<?php

session_start();
$conn=mysqli_connect("localhost","root","","database1");

if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $query="select * from adminlog where username='$username' and password='$password'";
    $run=mysqli_query($conn,$query);
    $totle=mysqli_num_rows($run);

    if($totle==1)
    {
       
        $_SESSION['adminlog']=$username;
        header("Location:menu1.php");
    }
    else{
        echo
        "<script>alert('enter a valid username and password')</script>";

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
        
            <form name="form" method="post" action="">
            <h1>Admin Login form</h1>
          
            <label>username or email</label>
            <input type="text" name="username" id="user"><br>
            <label>Password</label>
            <input type="text" name="password" id="pass"><br>
            <input type="submit" name="submit" value="login" id="button">
            <a href="ragistration.php"> Go to Ragister</a>
</form>
</body>
</html>

