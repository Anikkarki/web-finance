<?php
$i = $_POST['id'];
$monthly = $_POST['monthly'];
$days_730=$_POST['days_730'];
$bonus = $_POST['bonus'];
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
mysqli_select_db($con,'finance') or die(mysqli_error($con));
$query = "UPDATE narnari_bachat SET  monthly='$monthly' , days_730='$days_730' , bonus='$bonus'  WHERE id=$i";
$result = mysqli_query($con,$query) or die(mysqli_error($con));
header('location: ../narnari_admin.php')
?>