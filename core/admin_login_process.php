<?php
session_start();
$user = $_POST['admin_id'];
$password = $_POST['password'];
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
mysqli_select_db($con,'finance') or die(mysqli_error($con));
$query = "SELECT * FROM admin_table WHERE admin_id = '$user' AND password = '$password'";
$result = mysqli_query($con,$query) or die(mysqli_error($con));
if(mysqli_affected_rows($con)>0){
	$_SESSION['admin_id'] = $user;
	$_SESSION['password '] = $password;
	if(isset($_POST['remember_me'])){
		setcookie("userNameApp",$user,time()+60*60*24*365);
	}
	header('location: ../admin.php');//redirects to admin bash
}
else{
	header('location: ../admin_login.php');
}
?>