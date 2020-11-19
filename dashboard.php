<?php

include 'config.php';
session_start();
if(!isset($_SESSION['loggedin'])){
   header('Location:login.php');
}


$sql="SELECT * FROM `libadmin`";
$query = mysqli_query($con,$sql);
$row1 = mysqli_fetch_assoc($query);

$sql2="SELECT * FROM `reg`";
$query2 = mysqli_query($con,$sql2);


$sql1 ="SELECT COUNT(`id`) as linartotal FROM `reg`";
$query1 =  mysqli_query($con,$sql1);
$row = mysqli_fetch_assoc($query1);




$sql3="SELECT * FROM `library`";
$query3 = mysqli_query($con,$sql3);


$sql4 ="SELECT COUNT(`id`) as linartotal FROM `library`";
$query4 =  mysqli_query($con,$sql4);
$row4 = mysqli_fetch_assoc($query4);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="dashboard.css">
    <title>Dashboard</title>
</head>
<body>
   
<nav>
    <a href="#d31">LibAcc</a>
    <a href="#">Home</a>
    <a href="profile.html">Profile</a>
    <!-- include drop-down -->
    <div class="drop-down">
        <button>More  <i class="fa fa-caret-down"></i></button>
        <div class="drop-content">
        <a href="student-list.php">Students List</a>
        <a href="library-users.php">Library Users</a>
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

<!-- Procced with the body -->

<div class="container">
<!-- create a first container to house your content -->
<div class="first-container">

<h2 onmouseover="fn1()" onmouseout="fn2()" id="h">Welcome to LibAcc</h2></div>

<div class="begin"><input type="text" readonly value="<?php  echo "          ". $row1['name']; ?>"></div>


<!-- <div class="begin"><?php while ($row1= mysqli_fetch_assoc($query)) {?><input type="text" readonly value="<?php  echo "          ". $row1['name']; ?>"><?php }?></div> -->



<footer><div class="fool"><p><?php echo "Welcome to LibAcc, You can do amazing things here.....Time:"; date_default_timezone_get("Africa/Lagos");
echo date("d/M/Y h:i:sa");         ?></p></div></footer>
<div class="sec-container">


<div class="d1"  onmouseover="fn3()" onmouseout="fn4()" id="div">
<div><img src="img/admin.jpeg" alt=""></div>
<p>Register Admin</p>
<div><button title="Register Admin"><a href="admin.php"> Register Admin</a></button></div>
</div>


<div class="d2">
    <div><img src="img/library.jpeg" alt=""></div>
    <p>Library users who are frequent can also be registered on here </p>
<div><button  title="Register Library"><a href="library-reg.php"> Register Library User</a></button></div>
</div>



<div class="d3">
    <div><img src="img/student.jpeg" alt=""></div>
    <p>Bonafide students of LibAcc can be registered on this hub</p>
<div><button  title="Register Student"><a href="reg-student.php">Register Student</a></button></div>
</div>


</div>









<br><br>

<div class="third-container">
    
<div class="d11">
<div class="figure"><?php echo $row['linartotal'];   ?></div>
    <div><img src="img/studentlist.jpeg" alt=""></div>
    <p>Check the number of students we have in LibAcc</p>
    <div><button  title="Check the number of students we have in LibAcc">
       
       <a href="student-list.php">View Students</a>
   </button></div>
</div>


<div class="d21">
<div class="figure"><?php echo $row4['linartotal'];   ?></div>

    <div><img src="img/lib-student.jpeg" alt=""></div>
    <p>Check the number of  library students we have in LibAcc</p>
   <div> <button title="Check the number of  library students we have in LibAcc">
        <a href="library-users.php"> View Library Users</a>
    
    </button></div>
</div>

<div class="d31" id="d31">
    <div><img src="img/glasses.jpg" alt=""></div>
<p>Check the number of invoices we have in LibAcc</p>
<div>    <button title="Check the number of invoices we have in LibAcc">
        <a href="invoice.php"> Check Invoices</a></button></div>
    
    </div>

</div>















</div>

<script src="dashboard.js"></script>
</body>
</html>