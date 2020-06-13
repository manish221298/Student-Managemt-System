<?php
session_start();
if(isset($_SESSION['uid']))
{
    
}
else
{
    header('location:../login.php'); // to avoid direct accessing through url
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Dashboard : SMS:- Let us handle this</title>
</head>
<body>
    <div class="container">
        <nav class="nav bg-dark">
           <div class="header header-logo display-4 text-info m-2">
                <a href="../index.php"><img class="nav-logo img-rounded" height="100px" src="logo.jpg" alt="logo"> 
            </a> 
               </div>
            <div class="ml-auto m-2">
            <a href="../logout.php"><button class= "btn btn-outline-primary">Log Out</button></a> 
           </div>
        </nav>
        <hr>
        <div class="mt-1 mb-1 row justify-content-center">
        <h1 class="h1 display-2"> Welcome Admin :) </h1>
        </div>
        <hr>
        <div class="mt-3 bg-light m-auto border border-primary rounded row justify-content-center">
        <div class="btn btn-group" role="group">
        <div class="btn btn-group-item"><button class="btn btn-primary text-light"><a class="text-light" href="addstudent.php">Add Student Data</a></button></div>
        <div class="btn btn-group-item"><button class="btn btn-primary text-light"><a class="text-light" href="deletestudent.php">Delete Student Data</a></button></div>
        <div class="btn btn-group-item"><button class="btn btn-primary text-light"><a class="text-light" href="updatestudent.php">Update Student Data</a></button></div>
        </div>
        </div>
       
    </div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>