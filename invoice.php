<?php
include 'config.php';
session_start();
if(!isset($_SESSION['loggedin'])){
   header('Location:login.php');
}


// $sql2="SELECT * FROM `reginvoice` ";
// $query2 = mysqli_query($con,$sql2);


$sql1 ="SELECT COUNT(`id`) as linartotal FROM `reginvoice`";
$query1 =  mysqli_query($con,$sql1);
$row1 = mysqli_fetch_assoc($query1);







// $sql="SELECT * FROM `libinvoice`";
// $query = mysqli_query($con,$sql);


$sql3 ="SELECT COUNT(`id`) as linartotal FROM `libinvoice`";
$query3 =  mysqli_query($con,$sql3);
$row3 = mysqli_fetch_assoc($query3);






















?>






















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <link rel="stylesheet" href="invoice.css">
</head>
<body>
    <nav>
        <a href="#">LibAcc</a>
        <a href="dashboard.php">Home</a>
        <a href="logout.php">Logout</a>
        <!-- include drop-down -->
        <!-- <div class="drop-down">
            <button>More  <i class="fa fa-caret-down"></i></button>
            <div class="drop-content">
            <a href="student-list.php">Students List</a>
            <a href="library-users.php">Library Users</a>
            <a href="#">Link3</a>
            <a href="#">Link4</a>
            <a href="#">Link5</a>  -->
            </div>
        </div>
        <!-- create a search-bar -->
        <div class="nav-search">
        <input type="search" name="" id="search" placeholder="Search"><button><i class="fa fa-search"></i></button>
    </div>
    </nav>
    

<div class="container">

<div class="d2">
<div class="figure"> <?php echo $row1['linartotal'];   ?> </div>
    <div><img src="img/empty-invoice.jpg" alt=""></div>
    <p>Students Invoices  can also be viewed here </p>
<div><button  title="Students Invoices  can also be viewed here"><a href="studentinvoicelist.php"> View Students Invoice</a></button></div>
</div>



<div class="d3">
<div class="figure"><?php echo $row3['linartotal'];   ?></div>
    <div><img src="img/invoicepaid.png" alt=""></div>
    <p>Library Invoice lists of LibAcc can be generated on this hub</p>
<div class="fig1"><button  title="Library Invoice lists of LibAcc can be generated on this hub"><a href="libinvoicelist.php">View Library Invoice</a></button></div>
</div>













</div>












</body>
</html>