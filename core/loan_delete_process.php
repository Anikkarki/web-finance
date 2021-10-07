<?php
$i = $_POST['l_ID'];
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
mysqli_select_db($con,'finance') or die(mysqli_error($con));
$query = "DELETE FROM loan WHERE l_ID =$i";
$result = mysqli_query($con,$query) or die(mysqli_error($con));
echo "<script>alert('Your Record Sucessfully deleted.');</script>";
header('location: ../admin.php')
?>