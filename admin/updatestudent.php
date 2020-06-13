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
        <div class=" mt-2row justify-content-center">
        <table class="table">
        <form action="updatestudent.php" method="POST">
        <tr>
        <div class="form-group">
        <td>Enter Standard</td>
        <td>  <input type="number"required min="1" max="6" class="form-control" name="class" ></td></div>
        <div class="form-group">
        <td>Enter Student's Name</td>
        <td><input type="text" class="form-control" name="name"></td></div>
        <td><input type="submit" value="Search" class="btn btn-outline-primary" name="submit"></td>
       </tr>       
        </form>
        </table>
        </div>
        <hr>
        <div class="row justify-content-center">
            <table class="table table-hover table-bordered">
            <tr>
                <th>No.</th>
                <th>Image</th>
                <th>Name</th>
                <th>Roll No.</th>
                <th>Edit</th>
            </tr>
            <?php
            if(isset($_POST['submit']))
            {
                include '../dbcon.php';
                $standard=$_POST['class'];
                $name=$_POST['name'];
                $query= "SELECT * FROM `students` WHERE `standard` = '$standard' AND `name` LIKE '%$name%'";
                $run=mysqli_query($con,$query);
                if($row=mysqli_num_rows($run)<1)
                {
                    echo "<tr><td colspan='5'>No Record Found.</td></td>";
                }
                else
                {
                    $count=0;
                    while($data=mysqli_fetch_assoc($run))
                    {
                        $count++;
                        ?>
                        <tr>
                            <td><?php echo $count; ?></td>
                            <td><img src="../dataimg/<?php echo $data['image']; ?>"style="max-width:100px" /></td>
                            <td><?php echo $data['name']?></td>
                            <td><?php echo $data['rollno']?></td>
                            <td><a class="btn btn-success" href="updateform.php?sid=<?php echo $data['id'];?>">Edit</a></td>
                        </tr>
                        <?php
                    }
                }
            }   
                        ?>
                        
  
            </table>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
<?php
