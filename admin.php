<?php
session_start();
if(!isset($_SESSION['admin_id'])){
//   echo('hello');  
  header('location: admin_login.php');
}
else{
?> 

<html>
<head>
    <title>Admin Section/Write Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
</head>

<?php  include('portion/menu_admin.php'); ?>
<!--blog section -->
<hr>
<hr>
  
<hr>
<hr>
<Br>
  


</body>
</html>

<?php
}
?>