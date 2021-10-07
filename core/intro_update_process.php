<?php
$i = $_POST['Ab_id'];
$Ab_content = $_POST['Ab_content'];
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
mysqli_select_db($con,'finance') or die(mysqli_error($con));
$query = "UPDATE aboutus SET  Ab_content='$Ab_content' WHERE Ab_id =$i";
$result = mysqli_query($con,$query) or die(mysqli_error($con));
header('location: ../admin.php')
?>