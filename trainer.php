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
    //border-bottom:1px solid #ddd;
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
 h1{
    //display:center;
    border:3px solid black;
    text-transform:uppercase;
    text-align:center;
    background-color:#f2f2f2;
}

</style>

</head>
<body>
<h1>Cirtified trainer</h1> 
<?php
    
    $conn=mysqli_connect("localhost","root","","database1") or die("Connection unsucessfully");
    $sql="SELECT * from trainer";
    $result=mysqli_query($conn,$sql) or die("query unsucessfull");
    if(mysqli_num_rows($result)>0)
    {
        ?>
    <table border="2">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>phone</th>
    </thead>
    <tbody>
      <?php
      while($row=mysqli_fetch_assoc($result))
      {
        ?>
        <tr>
            <td><?php echo $row['trainer_id'];?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['phone'];?></td>
            </tr> 

      </tbody>     
      
       
        <?php }
        ?>
        
        </table>
    <center>   
        <a href="menu.php">Go to Home</a>
      </center>
  <?php }  
  ?>
  
</body>
</html>
