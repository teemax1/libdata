<?php

include 'config.php';
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location:login.php');
}

$sql="SELECT * FROM `library`";
$query = mysqli_query($con,$sql);


$sql1 ="SELECT COUNT(`id`) as linartotal FROM `library`";
$query1 =  mysqli_query($con,$sql1);
$row = mysqli_fetch_assoc($query1);


?>





































<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Users</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="library-users.css">
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
        <a href="library-reg.php">Register Library User</a>
        <a href="library-invoice.php">Create Library Invoice</a>
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
<h3>We currently have <div class="figure"><?php echo $row['linartotal'];   ?></div> Library User(s)</h3>
</div>
<!-- create your table -->
<div class="first">
<table>
    <thead>
<tr>
<th>S/N</th>
<th>First-name</th>
<th>Surname</th>
<th>Email</th>
<th>Phone Number</th>
<th>Package</th>
<th>Home address</th>
<th>Date of Birth</th>
<th>City</th>
<th>Registration Date</th>
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
<td><?php echo $row['f-name']; ?></td>
<td><?php echo $row['sname']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['phone']; ?></td>
<td><?php echo $row['pack']; ?></td>
<td><?php echo $row['home-address']; ?></td>
<td><?php echo $row['dob']; ?></td>
<td><?php echo $row['city']; ?></td>
<td><?php $regtime=$row['reg_time']; $date=date_create($regtime); echo date_format($date,"D d/M/Y h:m:ia"); ?></td>





<td><button><a href="edit-lib.php?id=<?php echo $row['id'] ?>">Edit</a></button></td>


</tr>
<?php } ?>


</tbody>

</table>

</div>
</div>























</body>
</html>