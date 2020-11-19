<?php

include 'config.php';
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location:login.php');
}

$sql="SELECT * FROM `reg`";
$query = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($query);

$sql4="SELECT * FROM `reg`";
$query4 = mysqli_query($con,$sql4);
$row4 = mysqli_fetch_assoc($query4);

$sql5="SELECT * FROM `reg`";
$query5= mysqli_query($con,$sql5);
$row5 = mysqli_fetch_assoc($query5);


$sql3="SELECT * FROM `libadmin`";
$query3 = mysqli_query($con,$sql3);
$row3 = mysqli_fetch_assoc($query3);




if (isset($_POST['btnreg'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $course = mysqli_real_escape_string($con, $_POST['course']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $paid = mysqli_real_escape_string($con, $_POST['paid']);
    $left = mysqli_real_escape_string($con, $_POST['left']);
	$status = mysqli_real_escape_string($con, $_POST['status']);
	$pay = mysqli_real_escape_string($con, $_POST['pay']);
	$entry = mysqli_real_escape_string($con, $_POST['entry']);
	

	$sql2 = "INSERT INTO `reginvoice`(`name`,`course`,`address`,`paid`,`left`,`status`,`pay`,`entry`)VALUES('$name','$course','$address','$paid','$left','$status','$pay','$entry')";
	$query2 =mysqli_query($con, $sql2);
	if ($query2) {
		echo "<main>Student Invoice Created</main>";
	}else{
		echo "<section>Invoice not created!</section>".mysqli_error($con);

	}
}

































?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="student-invoice.css">
    <title>Student invoice</title>
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
        <a href="student-list.php">Students List</a>
        <a href="studentinvoicelist.php">View Student Invoice</a>
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







<form action="" method="POST">
    <h2>Create Student Invoice</h2>


            <span class="content-name">Name</span>
    
<select name="name" id="">

<?php while ($row= mysqli_fetch_assoc($query)) {?>
<option value="<?php echo $row['f-name']." ". $row['sname']?>">
<?php echo $row['f-name']." ". $row['sname']; ?>
</option>  <?php }?>
</select>
<br><br>


            <span class="content-name1">Course</span>
      
<select name="course" id="">

<?php while ($row4= mysqli_fetch_assoc($query4)) {?>
<option value="<?php echo $row4['course']?>">
<?php echo $row4['course']; ?>
</option>  <?php }?>
</select>
<br><br>



            <span class="content-name2">Address</span>
        
<select name="address" id="">

<?php while ($row5= mysqli_fetch_assoc($query5)) {?>
<option value="<?php echo $row5['home-address']?>">
<?php echo $row5['home-address']; ?>
</option>  <?php }?>
</select>
<br><br>



            <span class="content-name3">Amount Paid</span>
       
<input type="number" name="paid" id="paid">
<br><br>


            <span class="content-name4">Amount Left</span>
       
<input type="number" name="left" id="left" >
<br><br>



            <span class="content-name5">Status</span>
       
<select name="status" id="">
<option value="">----select----</option>
	<option value="Paid">Paid</option>
	<option value="Owed">Owed</option>
</select>
<br><br>




            <span class="content-name6">Payment Type</span>
       
<select name="pay" id="pay">
<option value="">----select----</option>
	<option value="Cash">Cash</option>
	<option value="Cheque">Cheque</option>
	<option value="E-Pay">E-Pay</option>
</select>
<br><br>



            <span class="content-name7">Entered By</span>
     
<select name="entry" id="entry">
<?php while ($row3= mysqli_fetch_assoc($query3)) {?>
<option value="<?php echo $row3['name']?>">

<?php echo $row3['name']; ?>
</option>  <?php }?>
</select>
<br><br>


<button type="submit" name="btnreg">Create Invoice</button>


</form>








</div>
</body>
</html>