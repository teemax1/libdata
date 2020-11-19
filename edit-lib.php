<?php
include 'config.php';
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location :login.php');
}


$id = mysqli_real_escape_string($con,$_GET['id']);

$sql = "SELECT * FROM `library` WHERE (`id`='$id')";
$query =mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($query);

$user = $_SESSION['loggedin'];
$sql2 ="SELECT * FROM `library` ";

// WHERE (`mail`='$user')

$query2 =mysqli_query($con, $sql2);
$row2 = mysqli_fetch_assoc($query2);














if (isset ($_POST['btnreg'])) {
    $fname =$_POST['fname'];
    $sname =$_POST['sname'];
    $email =$_POST['email'];
    $phone =$_POST['phone'];
    $pack =$_POST['pack'];
    $address =$_POST['address'];
    $dob =$_POST['dob'];
    $city =$_POST['city'];
    $password =$_POST['password'];


    $sql3= "UPDATE `library` SET `f-name`='$fname',`sname`='$sname',`email`='$email',`phone`='$phone',`pack`='$pack',`home-address`='$address',`dob`='$dob',`city`='$city',`password`='$password'WHERE (`id`='$id')";
$query= mysqli_query($con,$sql3);

if ($query) {
    echo '<main>Congrats!,Library user updated!</main>';
}else {
    echo '<section>Library user not updated!!!</section>';
}




}








?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="edit-lib.css">
    <title>Library</title>
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
        <a href="library-users.php">View Library Users</a>
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

   <!-- create your container -->

<div class="container">
<form action="" method="POST">
<h2>Edit Library User</h2>


<span>First Name</span>
<input type="text" name="fname"  value="<?php echo$row['f-name'] ?>">


<br><br>
<span>Surname</span>
<input type="text"  name="sname" value="<?php echo$row['sname'] ?>">

<br><br>
<span>Email</span>
<input type="email" name="email" value="<?php echo$row['email'] ?>">

<br><br>
<span>Phone Number</span>
<input type="tel" name="phone" value="<?php echo$row['phone'] ?>">

<br><br>
<span>Package</span>
<select name="pack" id="" value="<?php echo$row['pack'] ?>">
<!-- <option value="">----select----</option> -->
    <option value="Daily">Daily</option>
    <option value="Weekly">Weekly</option>
    <option value="Monthly">Monthly</option>
</select>

<br><br>
<span>Home address</span>
<input type="text" name="address" id="" value="<?php echo$row['home-address'] ?>">

<br><br>
<span>Date of Birth</span>
<input type="date" name="dob" value="<?php echo$row['dob'] ?>" >

<br><br>
<span>City</span>
<input type="text" name="city" value="<?php echo$row['city'] ?>">

<br><br>
<span>Password</span>
<input type="password" name="password" id="" value="<?php echo$row['password'] ?>">

<br><br>
<button type="submit" name="btnreg">Edit</button>

</form>
</div>







<script src="library-reg.js"></script>
</body>
</html>