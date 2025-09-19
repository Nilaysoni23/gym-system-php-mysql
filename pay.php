<?php
session_start();

    $sessionvalue=$_SESSION['userlogin'];

if(isset($_POST["submit"])){
    $conn=mysqli_connect('localhost','root','','database1');
    
    $mname=$_POST["mname"];

    $mno=$_POST["mno"];

    $amt=$_POST["amt"];

    $paytype=$_POST["paytype"];
    if($mname==$sessionvalue)
    {
        $query="insert into payment(Mobileno,Amount,Payment_type) values ('$mno','$amt','$paytype')";

        $run=mysqli_query($conn,$query);

        $_SESSION['member_name']=$mname; 

        $_SESSION['Pay_type']=$paytype;
        header("Location:menu.php");
    }
    else{
        echo "<script> alert('membername same as a username');</script>";
    }
}

?>
<!Doctype html>
<html>
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

form .pay{
    text-transform:uppercase;
	color:white;
	background-color: rgba(152, 19, 241, 0.604);
	padding: 0.8rem;
	font-size: small;
	border-radius: 3px solid #fff;
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
        <h1>Payment</h1>
        <label>Member Name:</label>
        <input type="text" name="mname"><br>

        <label>Mobile:</no></label>
        <input type="text" name="mno"><br>
      
        <label>Amount:</label>
         <select name="amt"> 
                <option value="select amount">Select amount</option>
				<option>800</option> 
				<option>1000</option>
				<option>1500</option>
</select>
        <br>

        <label>payment type:</label>
        <select name="paytype"> 
                <option value="select type">Select type</option>
				<option>cash</option> 
				<option>debit card</option>
				<option>credit card</option>
                
</select>
        <br>

        
        <input type="submit" name="submit" value="Pay" class="pay"><br><br>
        <a href="menu.php">Go to Home</a>
</form>
</body>
</html>