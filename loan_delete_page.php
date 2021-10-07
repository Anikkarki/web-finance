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
        <title>Edit Intro</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	
	<link rel="stylesheet" href="css/style.css">
  
</head>
<body>
    <?php include('portion/menu_admin.php'); ?>
    <br>
    <h1 align="center">Do You want to delete this data?</h1>
    <?php 
    $i = $_GET['l_ID'];
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
mysqli_select_db($con,'finance') or die(mysqli_error($con));
$query = "SELECT * FROM loan where l_ID=$i";
$result = mysqli_query($con,$query)or die(mysqli_error($con));
$arr=mysqli_fetch_array($result,MYSQLI_ASSOC);
?>
<div class="about-sec-ab">
<form method="POST" action="core/loan_delete_process.php">
        <div class="login-user"><input type="hidden" name="l_ID" value="<?php echo $arr['l_ID']?>"></div><br>
        title:  <br>
        <div class="login-user"><input type="text" name="l_title" value="<?php echo $arr['l_title']?>"></div><br>
        
        <input type="submit" class="btn btn-danger" name="btn_post_return" value="Delete" style="margin-left: 32%;"><br><br>
      </form>

 </div>



</body>
</html>
<?php
}
?>