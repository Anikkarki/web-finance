<?php
$i = $_POST['id'];
$daily = $_POST['daily'];
$all_days = $_POST['all_days'];
$bonus = $_POST['bonus'];
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
mysqli_select_db($con,'finance') or die(mysqli_error($con));
$query = "UPDATE days_730 SET  daily='$daily' , all_days='$all_days' , bonus='$bonus'  WHERE id=$i";
$result = mysqli_query($con,$query) or die(mysqli_error($con));
header('location: ../730days_admin.php')
?>