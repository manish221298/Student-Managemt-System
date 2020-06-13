<?php
error_reporting(0);
session_start();
if(isset($_SESSION['uid']))
{
    
}
else
{
    header('location:../login.php'); 
}
?>
<?php

include '../dbcon.php';
$sid = $_GET['sid']; 
$query="SELECT * FROM `students` WHERE `id` = '$sid'";
$run=mysqli_query($con,$query);
$data=mysqli_fetch_assoc($run);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Update Student Data</title>
</head>
<body>
<div class="container">
    <nav class="nav  bg-dark">
           <div class="header header-logo display-4 text-info m-2">
                <a href="../index.php"><img class="nav-logo img-rounded" height="100px" src="logo.jpg" alt="logo"> 
            </a> 
               </div>
            <div class="ml-auto m-2">
            <a href="../logout.php"><button class= "btn btn-outline-primary ">Log Out</button></a> 
           </div>
        </nav>
        <hr>
        <div class="mt-2 mb-1 row justify-content-center">
        <h1 class="border border-dark rounded h1 display-4 bg-light">Change Students details</h1>
        </div>
        <hr>
        <div class="table row justify-content-center">
            <table>
                <div class="form-group">
                <form action="updatedata.php" method="POST" enctype="multipart/form-data">
                <tr>
                <td>Change Roll No.</td>
                <td><input type="text" name="rollno" value="<?php echo $data['rollno']; ?>" class="form-control" Required></td>
                </tr>
                <tr>
                <td>Change Name :</td>
                <td><input type="text" name="name" value="<?php echo $data['name']; ?>" class="form-control" Required></td>
                </tr>
                <tr>
                <td>Change City :</td>
                <td><input type="text" name="city" value="<?php echo $data['city']; ?>" class="form-control" Required></td>
                </tr>
                <tr>
                <td>Change Parent's Phone No. :</td>
                <td><input type="text" name="pcont" value="<?php echo $data['pcont']; ?>" class="form-control" Required></td>
                </tr>
                <tr>
                <td>Change Class :</td>
                <td><input type="number" name="class" value="<?php echo $data['standard']; ?>" class="form-control" max="6" min="1" Required></td>
                </tr>
                <tr>
                <td>Upload Image :</td>
                <td><input type="file" name="image" class="form-control"></td>
                </tr>
                <tr>
                <input type="hidden" name="sid" value="<?php echo $data['id']; ?>"/>
                <td colspan="2"><input class="form-control btn btn-outline-primary" type="submit" name="submit" value="Update"></td>
                </tr>
                </form>
                </div>
            </table>
        </div>
</div>
</body>
</html>