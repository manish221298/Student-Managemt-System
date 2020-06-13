<?php
include '../dbcon.php';
$rollno=$_POST['rollno'];
$name=$_POST['name'];
$city=$_POST['city'];
$pcont=$_POST['pcont'];
$class=$_POST['class'];
$id=$_POST['sid'];
$imagename=$_FILES['image']['name'];
$tempname=$_FILES['image']['tmp_name'];
move_uploaded_file($tempname,"../dataimg/$imagename");
$query="UPDATE `students` SET `rollno` = '$rollno', `name` = '$name', `city` = '$city', `pcont` = '$pcont', `standard` = '$class', `image` = '$imagename' WHERE `id` = '$id'";
$run=mysqli_query($con,$query);
if($run==true)
{
    ?>
    <script>
    alert("Data Updated Successfully");
    window.open('updatestudent.php','_self');
    </script>
    <?php
}


?>