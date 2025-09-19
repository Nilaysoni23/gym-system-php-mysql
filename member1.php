<!Doctype html>
<head>
<!Doctype html>
<head>
    <style>
table{
    border-collapse:collapse;
  width:100%;
    height: 300px;
    
  
    border-collapse:collapse;
    align:center;
    background-color:white;
}   
thead{
  //  background: color #f2f2f2;  
}
th{
    position:sticky;
    top:0px;
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
   
    //margin:120px auto;  
}
a:hover{
    background-color:black;
	color:wheat;
}
 h1{
    display:center;
    border:3px solid black;
    text-transform:uppercase;
    text-align:center;
    background-color:#f2f2f2;
}
.wrapper{
    
    
    max-height :300px;
    overflow-y:scroll;
    margin:20px;
    
}
.outer-wrapper{
    position:center;
    display:center;
    width:60%;
    height: 300px;
    align:center;
    box-shadow:0px 0px 3px black;
    margin:100px auto;
    border-radius:5px; 
}

</style>

</head>
<body bgcolor="cyan">
<h1>Member details</h1> 
</html>
<?php
    $conn=mysqli_connect("localhost","root","","database1") or die("Connection unsucessfully");
    $sql="SELECT * from payment join member where payment.Payment_id=member.id";
    $result=mysqli_query($conn,$sql) or die("query unsucessfull");
    if(mysqli_num_rows($result)>0)
    {
        ?>
         <div class="outer-wrapper"> 
       <div class="wrapper"> 
    <table border="2">
   
        <thead>
       
        <th>Id</th>
        <th>First Name</th>
        <th>Last name</th>
        <th>Mobile no.</th>
        <th>Gender</th>
        <th>Amount</th>
        <th>payment type</th>
        <th>Detete</th>
    </thead>
    <tbody>
      <?php
      while($row=mysqli_fetch_assoc($result))
      {
        ?>
        <tr>
            <td><?php echo $row['Payment_id'];?></td>
            <td><?php echo $row['firstname'];?></td>
            <td><?php echo $row['lastname'];?></td>
            <td><?php echo $row['Mobileno'];?></td>
            <td><?php echo $row['gender'];?></td>
            <td><?php echo $row['Amount'];?></td>
            <td><?php echo $row['Payment_type'];?></td>
            <td><a href="detete1.php?id=<?php echo $row['id'];?>">Delete</a></td>
        </tr>
        </tbody>     
      
       
        <?php }
        ?>
         
        </table>
        </div>
      </div>
    <center>   
        <a href="menu1.php">Go to Home</a>
      </center>
  <?php }  
  ?>
  
</body>
</html>
