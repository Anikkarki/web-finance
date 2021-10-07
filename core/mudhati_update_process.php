<?php
$i = $_POST['c_id'];
$period = $_POST['period'];
$three_month = $_POST['three_month'];
$six_month = $_POST['six_month'];
$yearly = $_POST['yearly'];
$after_maturity = $_POST['after_maturity'];
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
mysqli_select_db($con,'finance') or die(mysqli_error($con));
$query = "UPDATE mudhati SET  period='$period' , three_month='$three_month' , six_month='$six_month' , yearly='$yearly' , after_maturity='$after_maturity'  WHERE c_id=$i";
$result = mysqli_query($con,$query) or die(mysqli_error($con));
header('location: ../mudati_admin.php')
?>