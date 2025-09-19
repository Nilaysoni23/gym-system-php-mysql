<?php

$conn=mysqli_connect("localhost","root","","database1") or die("Connection unsucessfully");
if(isset($_POST["submit"]))
{
    $id=$_POST["id"];
    
    $name=$_POST["nm"];
    
    $mobno=$_POST["mobno"];
                        
    $query="insert into trainer (trainer_id,name,phone)values('$id','$name','$mobno')";

    $run=mysqli_query($conn,$query);
                    
    header("Location:trainer1.php");
}
?>

<!Doctype html>
<head>
</head>
<body>
    
    <form class="" action="" method="post">
    <h1>Add Trainer</h1>
        <lable>Id</lable>//company
        <input type="text" name="id" required><br>
        <lable>name</lable>//medicine
        <input type="text" name="nm" id="email" required><br>
        <lable>Mobileno.</lable>//quntity
        <input type="text" name="mobno" id="password" required><br>
        <input type="submit" value="ragister" name="submit" id="button">
</form>

</body>
