<?php

include 'config.php';
session_start();
if (!isset($_SESSION['loggedin'])) {
 
}

$sql="SELECT * FROM `libinvoice`";
$query = mysqli_query($con,$sql);
// $row1 = mysqli_fetch_assoc($query);

$sql1 ="SELECT COUNT(`id`) as linartotal FROM `libinvoice`";
$query1 =  mysqli_query($con,$sql1);
$row = mysqli_fetch_assoc($query1);


$sql2 ="SELECT COUNT(`reg_time`) as linartotal FROM `libinvoice`";
$query2 =  mysqli_query($con,$sql2);
$row2 = mysqli_fetch_assoc($query2);






// date_default_timezone_get("Africa/Lagos");
// echo date("d/m/y ,h:i:sa");
// $s= ['reg_time']; echo implode("",$s); 
?>





































<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="libinvoicelist.css">
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
        <a href="library-invoice.php">Create Library Invoice</a>
        <a href="library-reg.php">Register Library User</a>
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
<h3>We currently have <div class="figure"><?php echo $row['linartotal'];   ?></div> Library User(s) Invoice(s)</h3>
</div>
<!-- create your table -->


<div class="first">
<table>
    <thead>
<tr>
<th>S/N</th>
<th>Name</th>
<th>Subscription</th>
<th>Home address</th>
<th>Amount Paid</th>
<th>Amount Left</th>
<th>Status</th>
<th>Mode of Payment</th>
<th>Entered By</th>
<th>Date Created</th>
<th>Sub Expires by</th>
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
<td><?php echo $row['sub']; ?></td>
<td><?php echo $row['address']; ?></td>
<td><?php echo $row['paid']; ?></td>
<td><?php echo $row['left']; ?></td>
<td><?php echo $row['status']; ?></td>
<td><?php echo $row['pay']; ?></td>
<td><?php echo $row['entry']; ?></td>
<td><?php $regtime=$row['reg_time']; $date=date_create($regtime); echo date_format($date,"D d/M/Y h:m:ia");?></td>

<td><?php
$sub =$row['sub']; $regtime=$row['reg_time'];
$date=date_create($regtime);
date_modify($date,$sub);
echo date_format($date,"D d/M/Y h:m:ia");


   if ($regtime > $date) {echo "</br><b>Expired</b> ";
   
} else {
    echo "</br><b>Active</b>";
} ?></td>


<!-- <td><?php  time(); $r= strtotime(time($row['reg_time']));  echo  date("d/m/y", $r);?></td> -->




<td><button><a href="editlibinvoice.php?id=<?php echo $row['id'] ?>">Edit</a></button></td>


</tr>
<?php } ?>


</tbody>

</table>

</div>
</div>























</body>
</html>