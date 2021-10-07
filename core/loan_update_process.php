<?php
$i = $_POST['l_ID'];
$l_title = $_POST['l_title'];
$intrest = $_POST['intrest'];
$l_range = $_POST['l_range'];
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
mysqli_select_db($con,'finance') or die(mysqli_error($con));
$query = "UPDATE loan SET  l_title='$l_title' , intrest='$intrest' , l_range='$l_range' WHERE l_ID =$i";
$result = mysqli_query($con,$query) or die(mysqli_error($con));
header('location: ../admin.php')
?>