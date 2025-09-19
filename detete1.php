<?php

$conn=mysqli_connect("localhost","root","","database1") or die("Connection unsucessfully");

    $stu_id=$_GET['id'];

    $query="delete from member where id=$stu_id";

    $run=mysqli_query($conn,$query);
    
    header("Location:member1.php");

?>
