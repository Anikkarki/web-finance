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
        <title>Edit Loan</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	
	<link rel="stylesheet" href="css/style.css">
  
</head>
<body>
    <?php include('portion/menu_admin.php'); ?>
    <?php 
    $i = $_GET['l_ID'];
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
mysqli_select_db($con,'finance') or die(mysqli_error($con));
$query = "SELECT * FROM loan where l_ID =$i";
$result = mysqli_query($con,$query)or die(mysqli_error($con));
$arr=mysqli_fetch_array($result,MYSQLI_ASSOC);
?>
<div class="about-sec-ab">
<form method="POST" action="core/loan_update_process.php">
        <div class="login-user"><input type="hidden" name="l_ID" value="<?php echo $arr['l_ID']?>"></div><br>
        Name:<br><div class="login-user"><input type="text" name="l_title" value="<?php echo $arr['l_title']?>"></div><br>
        Intrest: <br><div class="login-user"><input type="text" name="intrest" value="<?php echo $arr['intrest']?>"></div><br>
        Range:<br><div class="login-user"><input type="text" name="l_range" value="<?php echo $arr['l_range']?>"></div><br>
    
        <input type="submit" name="btn_post_return" value="Update" style="margin-left: 32%;"><br><br>
      </form>

 </div>



</body>
</html>
<?php
}
?>