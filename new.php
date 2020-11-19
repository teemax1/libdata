<?php

$sql= "SELECT *FROM `database name `";
$query= mysqli_query($con,$sql);






//in html
while ($a <= 10) {
    # code...
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<select name="" id="">
<?php while ($row= mysqli_fetch_assoc($query)) {?>
    





<option value="<?php echo $row['f-name']." ". $row['sname']?>">

<?php echo $row['f-name']; ?>






</option>  <?php }?>


</select>












COMPUTER HARDWARE ENGINEERING</li>
								<li>COMPUTER SOFTWARE ENGINEERING</li>
								<li>NETWORKING & SYSTEM SECURITY </li>
							</ul>
						</div>
						<div class="s-preamble">
							<ul>
								<li>3-MONTH CERTIFICATE COURSES</li>
								<li>MOBILE APP DEVELOPMENT</li>
								<li>3D CHARACTER ANIMATION</li>
							   
								<li>VIDEO AND PHOTO EDITING</li>
							</ul>
						</div>
					</div>
					<div class="t-preamble">
						<ul>
						<li>MULTIMEDIA TECHNOLOGY</li>	

							<li>WEB DEVELOPMENT</li>
							<li>PYTHON</li>
							<li>GRAPHICS</li


</body>
</html>