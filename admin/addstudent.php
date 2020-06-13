<?php
/*session_start();
if(isset($_SESSION['uid']))
{
    
}
else
{
    header('location:../login.php'); 
}*/?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Add A Student</title>
</head>
<body>
    <div class="container">
    <nav class="nav  bg-dark">
           <div class="header header-logo display-4 text-info m-2">
                <a href="../index.php"><img class="nav-logo img-rounded" height="100px" src="logo.jpg" alt="logo"> 
            </a> 
               </div>
            <div class="ml-auto m-2">
            <a href="../logout.php"><button class= "btn btn-outline-primary ">Log Out</button></a>            </div>
        </nav>
        <hr>
        <div class="mt-2 mb-1 row justify-content-center">
        <h1 class="border border-dark rounded h1 display-4 bg-light">Add Students details</h1>
        </div>
        <hr>
        <div class="table row justify-content-center">
            <table>
                <div class="form-group">
                <form action="addstudent.php" method="post" enctype="multipart/form-data">
                <tr>
                <td>Enter Roll No.</td>
                <td><input type="text" name="rollno" placeholder="Enter Roll No." class="form-control" Required></td>
                </tr>
                <tr>
                <td>Enter Name :</td>
                <td><input type="text" name="name" placeholder="Enter Full Name" class="form-control" Required></td>
                </tr>
                <tr>
                <td>Enter City :</td>
                <td><input type="text" name="city" placeholder="Enter City" class="form-control" Required></td>
                </tr>
                <tr>
                <td>Enter Parent's Phone No. :</td>
                <td><input type="text" name="pcont" placeholder="Enter Parent's Phone No." class="form-control" Required></td>
                </tr>
                <tr>
                <td>Enter Class :</td>
                <td><input type="number" name="class" placeholder="Enter Class" class="form-control" max="6" min="1" Required></td>
                </tr>
                <tr>
                <td>Upload Image :</td>
                <td><input type="file" name="image" class="form-control" Required></td>
                </tr>
                <tr>
                <td colspan="2"><input class="form-control btn btn-outline-primary" type="submit" name="submit" value="Submit"></td>
                </tr>
                </form>
                </div>
            </table>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
    include '../dbcon.php';
    $rollno=$_POST['rollno'];
    $name=$_POST['name'];
    $city=$_POST['city'];
    $pcont=$_POST['pcont'];
    $class=$_POST['class'];
    $imagename=$_FILES['image']['name'];
    $tempname=$_FILES['image']['tmp_name'];
    move_uploaded_file($tempname,"../dataimg/$imagename");
    $query="INSERT INTO `students`(`id`, `rollno`, `name`, `city`, `pcont`, `standard`, `image`) VALUES ('','$rollno','$name','$city','$pcont','$class','$imagename')";
    $run=mysqli_query($con,$query);
    if($run==true)
    {
        ?>
        <script>
        alert("Data Inserted Successfully");
        </script>
        <?php
    }
}

?>
