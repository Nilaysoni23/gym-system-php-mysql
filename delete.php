<?php

$conn=mysqli_connect("localhost","root","","database1") or die("Connection unsucessfully");

    $stu_id=$_GET['id'];

    $query="delete from trainer where trainer_id=$stu_id";

    $run=mysqli_query($conn,$query);
    
    header("Location:trainer1.php");

?>
