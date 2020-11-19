<?php

include 'config.php';
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location:login.php');
}

$loggedin = $_SESSION['loggedin'];
$sql="SELECT * FROM `library`";  //WHERE (`mail`='$loggedin')
$query = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($query);

$sql4="SELECT * FROM `library`";
$query4 = mysqli_query($con,$sql4);
$row4 = mysqli_fetch_assoc($query4);

$sql5="SELECT * FROM `library`";
$query5= mysqli_query($con,$sql5);
$row5 = mysqli_fetch_assoc($query5);


$sql3="SELECT * FROM `libadmin`";
$query3 = mysqli_query($con,$sql3);
$row3 = mysqli_fetch_assoc($query3);



if (isset($_POST['btnreg'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $sub = mysqli_real_escape_string($con, $_POST['sub']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $paid = mysqli_real_escape_string($con, $_POST['paid']);
    $left = mysqli_real_escape_string($con, $_POST['left']);
    $status = mysqli_real_escape_string($con, $_POST['status']);
    $pay = mysqli_real_escape_string($con, $_POST['pay']);
    $entry = mysqli_real_escape_string($con, $_POST['entry']);
    

    $sql2 = "INSERT INTO `libinvoice`(`name`,`sub`,`address`,`paid`,`left`,`status`,`pay`,`entry`)VALUES('$name','$sub','$address','$paid','$left','$status','$pay','$entry')";
    $query2 =mysqli_query($con, $sql2);
    if ($query2) {
        echo "<main>Library User Invoice Created</main>";
    } else {
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
	<link rel="stylesheet" href="library-invoice.css">
    <title>Library invoice</title>
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
        <a href="library-reg.php">Create Library User</a>
        <a href="libinvoicelist.php">View Library Invoice</a>
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


<form action="" method="POST" onsubmit="return fn()">


<h2>Create Library Invoice</h2>



<span class="content-name4">Name</span>
<select name="name" id="name">
<?php while ($row= mysqli_fetch_assoc($query)) {?>
<option value="<?php echo $row['f-name']." ". $row['sname']?>">

<?php echo $row['f-name']." ". $row['sname']; ?>
</option>  <?php }?>
</select>

<br><br>
<span class="content-name4">Subscription</span>
<select name="sub" id="sub">
<?php while ($row4= mysqli_fetch_assoc($query4)) {?>
<option value="<?php echo $row4['pack']?>">
<?php echo $row4['pack']; ?>
</option>  <?php }?>

</select>


<br><br>
<span class="content-name4">Address</span>
<select name="address" id="address">

<?php while ($row5= mysqli_fetch_assoc($query5)) {?>
<option value="<?php echo $row5['home-address']?>">
<?php echo $row5['home-address']; ?>
</option>  <?php }?>
</select>



<br><br>
<span class="content-name4">Amount Paid</span>
<input type="number" name="paid" id="paid">


<br><br>
<span class="content-name4">Amount Left</span>
<input type="number" name="left" id="left" >

<br><br>
<span class="content-name5">Status</span>
<select name="status" id="status">
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

<button type="submit" name="btnreg">Create Library Invoice</button>


</form>



































</div>
<script src="library-invoice.js"></script>
</body>
</html>