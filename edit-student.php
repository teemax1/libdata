<?php
include 'config.php';
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location :login.php');
}

$loggedin = $_SESSION['loggedin'];
$id = mysqli_real_escape_string($con,$_GET['id']);

$sql = "SELECT * FROM `reg` WHERE (`id`='$id')";
$query =mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($query);

$user = $_SESSION['loggedin'];
$sql2 ="SELECT * FROM `reg` ";   

// WHERE (`email`='$user');

$query2 =mysqli_query($con, $sql2);
$row2 = mysqli_fetch_assoc($query2);



if (isset ($_POST['btnreg'])) {
    $fname =$_POST['fname'];
    $lname =$_POST['lname'];
    $sname =$_POST['sname'];
    $course =$_POST['course'];
    $email =$_POST['email'];
    $phone =$_POST['phone'];
    $address =$_POST['address'];
    $dob =$_POST['dob'];
    $city =$_POST['city'];
    $password =$_POST['password'];


    $sql3= "UPDATE `reg` SET `f-name`= '$fname',`l-name`='$lname',`sname`='$sname',`course`='$course',`email`='$email',`phone`='$phone',`home-address`='$address',`dob`='$dob',`city`='$city',`password`='$password'WHERE (`id`='$id')";
$query= mysqli_query($con,$sql2);

if ($query) {
    echo '<main>Student registeration updated into LibAcc.</main>';
}else {
    echo '<section>Student registeration updated!!!</section>';
}




}










?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="edit-student.css">
    <title>Reg-student</title>
</head>


<body>
<nav>
    <a href="#">LibAcc</a>
    <a href="dashboard.php">Home</a>
    <!-- <a href="#">News</a> -->
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
  

<div class="container">
<form action="" method="POST" onsubmit="return fn1()">
<h2>Edit Student Registration</h2>

<span>First Name</span>
<input type="text" value="<?php echo$row['f-name'] ?>" name="fname" >
<br><br>

<span>Last Name</span>
<input type="text" name="lname" value="<?php echo$row['l-name'] ?>">
<br><br>

<span>Surname</span>
<input type="text"  name="sname" value="<?php echo$row['sname'] ?>">

<br><br>
<span>Course</span>
<select name="course" id="" value="<?php echo$row['course'] ?>">
    <option value=""><?php echo$row['course'] ?></option>
<option value="3D CHARACTER ANIMATION">3D CHARACTER ANIMATION</option>
<option value="COMPUTER HARDWARE ENGINEERING">COMPUTER HARDWARE ENGINEERING</option>
<option value="COMPUTER SOFTWARE ENGINEERING">COMPUTER SOFTWARE ENGINEERING</option>
<option value="GRAPHIC DESIGN">GRAPHIC DESIGN</option>
<option value="MOBILE APP DEVELOPMENT">MOBILE APP DEVELOPMENT</option>
<option value="MULTIMEDIA TECHNOLOGY">MULTIMEDIA TECHNOLOGY</option>
<option value="NETWORKING & SYSTEM SECURITY">NETWORKING & SYSTEM SECURITY</option>
<option value="PYTHON">PYTHON</option>
<option value="VIDEO AND PHOTO EDITING">VIDEO AND PHOTO EDITING</option>
<option value="WEB DEVELOPMENT">WEB DEVELOPMENT</option>
</select>

<br><br>
<span>Email</span>
<input type="email" name="email" value="<?php echo$row['email'] ?>">

<br><br>
<span>Phone Number</span>
<input type="tel" name="phone" value="<?php echo$row['phone'] ?>">

<br><br>
<span>Home address</span>
<input type="text" name="address" id="" value="<?php echo$row['home-address'] ?>">

<br><br>
<span>Date of Birth</span>
<input type="date" name="dob" value="<?php echo$row['dob'] ?>">

<br><br>
<span>City</span>
<input type="text" name="city"  value="<?php echo$row['city'] ?>">

<br><br>
<span>Password</span>
<input type="password" name="password" id="" value="<?php echo$row['password'] ?>">

<br><br>
<button type="submit" name="btnreg">Edit</button>

</form>

</div>





<script src="reg-student.js"></script>
</body>
</html>