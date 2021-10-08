<?php

$subject = $_POST['subject'];
$message = $_POST['message'];
$email = $_POST['email'];
$phoneNumber = $_POST['phoneNumber'];

$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
mysqli_select_db($con,'finance') or die(mysqli_error($con));
$query = "INSERT INTO contact (type,detail) VALUES ('$subject','$message');";
$result = mysqli_query($con,$query) or die(mysqli_error($con));
header('location: ../home.php')

?>