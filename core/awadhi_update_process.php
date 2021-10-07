<?php
$i = $_POST['id'];
$time = $_POST['time'];
$intrest = $_POST['intrest'];
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
mysqli_select_db($con,'finance') or die(mysqli_error($con));
$query = "UPDATE time_duration_bachat SET  time='$time' , intrest='$intrest'  WHERE id=$i";
$result = mysqli_query($con,$query) or die(mysqli_error($con));
header('location: ../awadhi_admin.php')
?>