<?php
$i = $_POST['id'];
$monthly = $_POST['monthly'];
$maturity = $_POST['maturity'];
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
mysqli_select_db($con,'finance') or die(mysqli_error($con));
$query = "UPDATE nari_bachat SET  monthly='$monthly' , maturity='$maturity'  WHERE id=$i";
$result = mysqli_query($con,$query) or die(mysqli_error($con));
header('location: ../nari_admin.php')
?>