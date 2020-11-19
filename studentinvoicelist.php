<?php

include 'config.php';
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location:login.php');
}

$sql="SELECT * FROM `reginvoice` ";
$query = mysqli_query($con,$sql);


$sql1 ="SELECT COUNT(`id`) as linartotal FROM `reginvoice`";
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
    <link rel="stylesheet" href="studentinvoicelist.css">
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
        <a href="student-invoice.php">Create Student Invoice</a>
        <a href="reg-student.php">Register Student</a>
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
<h3>We currently have <div class="figure"><?php echo $row['linartotal'];   ?></div> Student(s) Invoice(s)</h3>
</div>
<!-- create your table -->


<div class="first">
<table>
    <thead>
<tr>
<th>S/N</th>
<th>Name</th>
<th>Course Of Study</th>
<th>Home address</th>
<th>Amount Paid</th>
<th>Amount Left</th>
<th>Status</th>
<th>Mode of Payment</th>
<th>Entered By</th>
<th>Date Created</th>
<th>Action</th>
</tr>

    </thead>
    <!-- create the table body -->
<tbody>
<?php
while ($row = mysqli_fetch_assoc($query)) {




  ?> 
<tr>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['course']; ?></td>
<td><?php echo $row['address']; ?></td>
<td><?php echo $row['paid']; ?></td>
<td><?php echo $row['left']; ?></td>
<td><?php echo $row['status']; ?></td>
<td><?php echo $row['pay']; ?></td>
<td><?php echo $row['entry']; ?></td>
<td><?php $regtime=$row['reg_time']; $date=date_create($regtime); echo date_format($date,"D d/M/Y h:m:ia"); ?></td>





<td><button><a href="edit-studinvoice.php?id=<?php echo $row['id'] ?>">Edit</a></button></td>


</tr>
<?php } ?>


</tbody>

</table>

</div>

</div>






















</body>
</html>