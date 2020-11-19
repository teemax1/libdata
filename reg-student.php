<?php
include 'config.php';
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location:login.php');
}

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


    $sql= "INSERT  INTO `reg`(`f-name`,`l-name`,`sname`,`course`,`email`,`phone`,`home-address`,`dob`,`city`,`password`)VALUES('$fname','$lname','$sname','$course','$email','$phone','$address','$dob','$city','$password')";
$query= mysqli_query($con,$sql);

if ($query) {
    echo '<main>Student registered into LibAcc.</main>';
}else {
    echo '<section>Failed registration!!!</section>';
}




}










?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="reg-student.css">
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
        <a href="student-list.php">View Students List</a>
        <a href="student-invoice.php">Create Students Invoice</a>
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
<h2>Register Here</h2>

<span>First Name</span>
<input type="text" name="fname" id="fname">
<article id="art">Incorrect</article>
<br><br>

<span>Last Name</span>
<input type="text" name="lname" id="lname">
<article id="art1">Incorrect</article>
<br><br>

<span>Surname</span>
<input type="text"  name="sname" id="sname">
<article id="art2">Incorrect</article>
<br><br>
<span>Course</span>
<select name="course" id="course">
    <option value="">----select----</option>
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
<article id="art3">Incorrect</article>

<br><br>
<span>Email</span>
<input type="email" name="email" id="email">
<article id="art4">Incorrect</article>

<br><br>
<span>Phone Number</span>
<input type="tel" name="phone" id="phone" >
<article id="art5">Incorrect</article>

<br><br>
<span>Home address</span>
<input type="text" name="address" id="address" >
<article id="art6">Incorrect</article>
<br><br>
<span>Date of Birth</span>
<input type="date" name="dob" id="dob">
<article id="art7">Incorrect</article>
<br><br>
<span>City</span>
<input type="text" name="city" id="dob">
<article id="art8">Incorrect</article>

<br><br>
<span>Password</span>
<input type="password" name="password" id="password">
<article id="art9">Incorrect</article>
<br><br>
<button type="submit" name="btnreg">Submit</button>

</form>

</div>






<script src="reg-student.js"></script>
</body>
</html>