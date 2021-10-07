<?php 
$admin_id = $_POST['admin_id'];
$email=$_POST['email'];
$password = $_POST['password'];
$securepass=md5($password);
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
mysqli_select_db($con,'finance') or die(mysqli_error($con));
$query1 = "insert into admin_table(email,admin_id,password) values('$email','$admin_id','$securepass')";
$result = mysqli_query($con,$query1);
header("location:../admin.php");
?>