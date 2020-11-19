<?php
include 'config.php';

if (isset($_POST['btnreg'])) {
    $name =$_POST['name'];
    $email =$_POST['email'];
    $password =$_POST['password'];
    // $pass2= password_hash($password,PASSWORD_DEFAULT);

    $sql = "INSERT INTO `libadmin`(`name`,`mail`,`pass`)VALUES('$name','$email','$password')";


    $query= mysqli_query($con, $sql);
   
    if ($query) {
        echo '<main>Congrats!, You are now an admin!</main>';
    } else {
        echo '<section>You Failed to become an Admin!!!</section>';
    }
}







// if (isset($_POST['btnreg'])) {
//     $name =$_POST['name'];
//     $email =$_POST['email'];
//     $password =$_POST['password'];
//     $pass2= password_hash($password,PASSWORD_DEFAULT);

//     $sql = "INSERT INTO `libadmin`(`name`,`mail`,`pass`)VALUES('$name','$email','$pass2')";


//     $query= mysqli_query($con, $sql);
   
//     if ($query) {
//         echo '<main>Congrats!, You are now an admin!</main>';
//     } else {
//         echo '<section>You Failed to become an Admin!!!</section>';
//     }
// }


?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="admin.css">
    <title>Admin</title>
</head>
<body>
<nav>
    <a href="#">LibAcc</a>
    <a href="admin.php">Home</a>
    <!-- <a href="#">News</a> -->
    <!-- include drop-down -->
    <div class="drop-down">
        <button>More  <i class="fa fa-caret-down"></i></button>
        <div class="drop-content">
        <a href="login.php">Logout</a>
        <!-- <a href="library-users.php">Library Users</a>
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
    
<form action="" method="POST">
        <h2>Register Admin</h2>


        <i class="fa fa-male"></i>
        <label for="" class="label-name">
            <span class="content-name">Name</span>
        </label>
   <input type="text" name="name" id=""  required>

   <i class="fa fa-envelope"></i>
   <label for="" class="label-name1">
            <span class="content-name1">Email</span>
        </label>
   <input type="email" name="email" id=""  required>

   <i class="fa fa-key"></i>
   <label for="" class="label-name2">
            <span class="content-name2">Password</span>
        </label>
   <input type="password" name="password" id=""  required>
   <br><br>
   <button type="submit" name="btnreg">Become An Admin</button>



    </form>
</div>
</body>
</html>