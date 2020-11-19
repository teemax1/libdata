<?php
include 'config.php';
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location:login.php');
}

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


    $sql= "INSERT  INTO `library`(`f-name`,`sname`,`email`,`phone`,`pack`,`home-address`,`dob`,`city`,`password`)VALUES('$fname','$sname','$email','$phone','$pack','$address','$dob','$city','$password')";
$query= mysqli_query($con,$sql);

if ($query) {
    echo '<main>Congrats!, You are now a Library user!</main>';
}else {
    echo '<section>Failed registration!!!</section>';
}




}




// $ci= strtotime("1 day");
// $cv= strtotime("1 week");
// $cp= strtotime("1 month");

// $Daily=  $ci;
// $Weekly = $cv;
// $Monthly = $cp;



?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="library-reg.css">
    <title>Library</title>
</head>
<body>
  <!-- create your navbar -->
  <nav>
    <a href="login.php">LibAcc</a>
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
<h2>Become A Library User</h2>


<span>First Name</span>
<input type="text" name="fname" >


<br><br>
<span>Surname</span>
<input type="text"  name="sname" >

<br><br>
<span>Email</span>
<input type="email" name="email" >

<br><br>
<span>Phone Number</span>
<input type="tel" name="phone" >

<br><br>
<span>Package</span>
<select name="pack" id="" >
<option value="">----select----</option>
    <option value="1 day">Daily</option>
    <option value="1 week">Weekly</option>
    <option value="1 month">Monthly</option>
</select>

<br><br>
<span>Home address</span>
<input type="text" name="address" id="">

<br><br>
<span>Date of Birth</span>
<input type="date" name="dob" >

<br><br>
<span>City</span>
<input type="text" name="city" >

<br><br>
<span>Password</span>
<input type="password" name="password" id="" >

<br><br>
<button type="submit" name="btnreg">Submit</button>

</form>
</div>







<script src="library-reg.js"></script>
</body>
</html>