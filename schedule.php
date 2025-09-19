<?php
	session_start();
$conn=mysqli_connect("localhost","root","","database1") or die("Connection unsucessfully");
$sessionvalue=$_SESSION['userlogin'];
$qry="select * from member where firstname='$sessionvalue'";
$result=mysqli_query($conn,$qry);
$totle=mysqli_num_rows($result);
?>

<!Doctype html>
<head>
    <style>
table{
    width:60%;
    height: 300px;
    margin: 120px auto; 
    border-collapse:collapse;
    align:center;
    background-color:white;
}   
thead{
    background: color #f2f2f2;  
}
th{
    background-color:teal;
    color:wheat;
    padding:10px;
    text-align:left;
    border-bottom:1px solid #ddd;
}
td{
    padding:10px;
    border-bottom:1px solid #ddd;
}

tbody tr:hover{
    background-color:#eaeaea;
}
 a{
    text-decoration:none;
	color:white;
	text-transform:uppercase;
	border:3px solid #fff;
	transition:0.5s;
	padding:0.8rem;
    background-color:black;
    width:50%;
    align:right;
 //margin:120px auto;  
}
a:hover{
    background-color:black;
	color:wheat;
}
 body h1{
    display:center;
    border:3px solid black;
    text-transform:uppercase;
    text-align:center;
    background-color:#f2f2f2;
   
}

</style>

</head>
<body>
    <h1>Full Week Gym Workout</h1>
<?php

if(isset($_SESSION['Pay_type'])||$totle>0) 
{

    /*
   if($totle>0)
    {
        $query="select * from payment";
		$run=mysqli_query($conn,$query);
		echo "hii";
    }
	else
	{
		echo "new user";
	}


    */
    ?><?php
    
    $conn=mysqli_connect("localhost","root","","database1") or die("Connection unsucessfully");
    $sql="SELECT * from schedule";
    $result=mysqli_query($conn,$sql) or die("query unsucessfull");
    if(mysqli_num_rows($result)>0)
    {
      ?>
          <table border="2">
        <thead>
        
        <th>Days</th>
        <th>Workout</th>
    </thead>
    <tbody>
      <?php
      while($row=mysqli_fetch_assoc($result))
      {
        ?>
        <tr>
           
            <td><?php echo $row['days'];?></td>
            <td><?php echo $row['exercise'];?></td>
            </tr> 

      </tbody>     
      
       
        <?php }
        ?>
        
        </table>
    <center>   
        <a href="menu.php">Go to Home</a>
      </center>
  <?php }  
  ?><?php
}
else{
    echo "Take a membership and then get a schedule";
    ?><a href="menu.php">Go to Home</a><?php
}
?>

