<?php
// include 'config.php';

// if (isset($_POST['login'])) {
// 	$email = mysqli_real_escape_string($con,$_POST['email']);
// 	$pass = mysqli_real_escape_string($con,$_POST['password']);

// 	$sql = "SELECT * FROM `reg`WHERE(`email` ='$email')";
// 	$query = mysqli_query($con,$sql);
// 	$count = mysqli_num_rows($query);

// 	if ($count>0) {
// 		$row =mysqli_fetch_assoc($query);

// 		$pass2 = $row['password'];
// 		$verify =password_verify($pass, $pass2);

// 		if ($verify) {
// 			session_start();
// 			$_SESSION['loggedin'] = $email;
// 			header('Location:dashboard.php');
// 		}else{
// 			echo "<div class='alert alert-danger'>Email or password is wrong!!!</div>";
// 		}







// 	}







// }

include 'config.php';

if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
    
    $sql = "SELECT * FROM `libadmin` WHERE (`mail` ='$email') AND (`pass`= '$password')";
    $query = mysqli_query($con,$sql);
    $count = mysqli_num_rows($query);

	


if ($count > 0) {
    $row = mysqli_fetch_assoc($query);
	session_start();
		$_SESSION['loggedin'] = $email;
		header('Location:dashboard.php');
}
else{
	echo "<section>Email or password is wrong!!!</section>".mysqli_error($con);


}
}






















// include 'config.php';

// if (isset($_POST['login'])) {
// 	$email = mysqli_real_escape_string($con,$_POST['email']);
// 	$password = mysqli_real_escape_string($con,$_POST['password']);

// 	$sql = "SELECT * FROM `libadmin`WHERE(`mail` ='$email')";
// 	$query = mysqli_query($con,$sql);
// 	$count = mysqli_num_rows($query);

// 	if ($count>0) {
//         $row =mysqli_fetch_assoc($query);
        
// 		$pass2 = $row['pass'];
//         $verify = password_verify($password,$pass2);
        
// 		if ($verify) {
// 			session_start();
// 			$_SESSION['loggedin'] = $mail;
// 			header('Location:dashboard.php');
// 		}else{
// 			echo "<section>Email or password is wrong!!!</section>".mysqli_error($con);
// 		}







// 	}







// }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<body>
    <!-- create your navbar -->
<nav>
    <a href="#">LibAcc</a>
    <!-- <a href="#">Home</a>
    <a href="#">News</a> -->
    <!-- include drop-down -->
    <!-- <div class="drop-down">
        <button>More  <i class="fa fa-caret-down"></i></button>
        <div class="drop-content">
        <a href="#">Link1</a>
        <a href="#">Link2</a>
        <a href="#">Link3</a>
        <a href="#">Link4</a>
        <a href="#">Link5</a> 
        </div>
    </div> -->
    <!-- create a search-bar -->
    <!-- <div class="nav-search">
    <input type="search" name="" id="search" placeholder="Search"><button>Search</button>
</div> -->
</nav>

<!-- create a container to house the body content -->

<div class="container">
    <!-- create a form to login -->

<form action="" method="POST" onsubmit="fn1()">
<h2>Login to LibAcc</h2>
<!-- create a container to house form content and input -->
<i class="fa fa-envelope"></i>

<input type="email" name="email" required id="email">
<label for="name" class="label-name">
    
    <span class="content-name">Email</span>
</label>


<!-- leave a space or gap --><i class="fa fa-key"></i>

<input type="password" name="password" required id="password" >
<label for="password" class="label-name1">
    <span class="content-name1">Password</span>
</label>

<br><br>
<button type="submit" name="login">Login</button>














<!-- <article>Incorrect format </article>  -->






</form>
</div>


<script src="login.js"></script> 
</body>
</html>