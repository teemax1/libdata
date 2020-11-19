<?php

include 'config.php';
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location:login.php');
}

$sql="SELECT * FROM `reg`";
$query = mysqli_query($con,$sql);


$sql1 ="SELECT COUNT(`id`) as linartotal FROM `reg`";
$query1 =  mysqli_query($con,$sql1);
$row = mysqli_fetch_assoc($query1);



?>





































<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="student-list.css">
</head>
<body>
      <!-- create your navbar -->
<nav>
    <a href="#">LibAcc</a>
    <a href="dashboard.php">Home</a>
    <!-- <a href="#">News</a> -->
    <!-- include drop-down -->
    <div class="drop-down">
        <button>More  <i class="fa fa-caret-down"></i></button>
        <div class="drop-content">
        <a href="reg-student.php">Register Student</a>
        <a href="student-invoice.php">Create Student Invoice</a>
        <a href="logout.php">Logout</a>
        <!-- <a href="#">Link4</a>
        <a href="#">Link5</a>  -->
        </div>
    </div>
    <!-- create a search-bar -->
    <div class="nav-search">
    <input type="search" name="" id="search" placeholder="Search"><button><i class="fa fa-search"></i></button>
</div>
</nav>
    






<div class="container">
<div class="head">
<h3>We currently have <div class="figure"><?php echo $row['linartotal'];   ?></div> student(s)</h3>
</div>



<div class="first">
    <!-- create your table -->
<table>
    <thead>
<tr>
<th>S/N</th>
<th>First-name</th>
<th>Last-name</th>
<th>Surname</th>
<th>Course</th>
<th>Email</th>
<th>Phone Number</th>
<th>Home address</th>
<th>Date of Birth</th>
<th>City</th>
<th>Registration Date</th>
<th>Action</th>
<th></th>
</tr>

    </thead>
    <!-- create the table body -->
<tbody>
<?php
while ($row = mysqli_fetch_assoc($query)) {




  ?> 
<tr>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['f-name']; ?></td>
<td><?php echo $row['l-name']; ?></td>
<td><?php echo $row['sname']; ?></td>
<td><?php echo $row['course']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['phone']; ?></td>
<td><?php echo $row['home-address']; ?></td>
<td><?php echo $row['dob']; ?></td>
<td><?php echo $row['city']; ?></td>
<td><?php $regtime=$row['reg_time']; $date=date_create($regtime); echo date_format($date,"D d/M/Y h:m:ia"); ?></td>





<td><button><a href="edit-student.php?id=<?php echo $row['id'] ?>">Edit</a></button></td>


</tr>
<?php } ?>


</tbody>

</table>
</div>

</div>
























</body>
</html>