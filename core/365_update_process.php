<?php
$i = $_POST['id'];
$daily = $_POST['daily'];
$all_day = $_POST['all_day'];
$bonus = $_POST['bonus'];
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
mysqli_select_db($con,'finance') or die(mysqli_error($con));
$query = "UPDATE days_365 SET  daily='$daily' , all_day='$all_day' , bonus='$bonus'  WHERE id=$i";
$result = mysqli_query($con,$query) or die(mysqli_error($con));
header('location: ../365days_admin.php')
?>