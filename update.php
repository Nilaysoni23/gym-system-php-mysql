
<?php

$conn=mysqli_connect("localhost","root","","database1") or die("Connection unsucessfully");
//$tid=$_GET['trainer_id'];
if(isset($_POST["submit"]))
{
 
    $stu_id=$_POST['vid'];

    $name=$_POST["nm"];
    
    $mobno=$_POST["mobno"];
    
    $query="UPDATE trainer Set name='{$name}',phone='{$mobno}' where trainer_id='{$stu_id}'";

    $run=mysqli_query($conn,$query);
    
    header("Location:trainer1.php");
}
?>



<?php
 $conn=mysqli_connect("localhost","root","","database1") or die("Connection unsucessfully");

    $stu_id=$_GET['id'];
    $sql="SELECT * from trainer where trainer_id={$stu_id}";
    $result=mysqli_query($conn,$sql) or die("query unsucessfull");
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_assoc($result))
        {
        ?>
   

    <form action="" method="post">
   <table border="3">
    <tr>
    <td>Name</td>

    <td>
        <input type="hidden" name="vid" value="<?php echo $row['trainer_id'];?>"/>
        <input type="text" name="nm" value="<?php echo $row['name'];?>"/></td>
</tr>
<tr>
<td>Mobileno.</td>
    <td><input type="text" name="mobno" value="<?php echo $row['phone'];?>"/></td>
    
</tr>
<tr>
<td colspan=2 align=center><input type="submit" value="ragister" name="submit" id="button"></td>
        </tr>
    </form>
    <?php
    }
}?>
</body>
</html>
