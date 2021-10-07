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
        <title>Nar-Nari scheme Edit</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	
	<link rel="stylesheet" href="css/style.css">
  
</head>
<body>
    <?php include('portion/menu_admin.php'); ?>
    <?php 
    $i = $_GET['id'];
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
mysqli_select_db($con,'finance') or die(mysqli_error($con));
$query = "SELECT * FROM narnari_bachat where id =$i";
$result = mysqli_query($con,$query)or die(mysqli_error($con));
$arr=mysqli_fetch_array($result,MYSQLI_ASSOC);
?>
<div class="about-sec-ab">
    <h1 align="center">edit this data?</h1>
    <form method="POST" action="core/narnari_update_process.php" class="add-admin">
    <div class="login-user"><input type="hidden" name="id" value="<?php echo $arr['id']?>"></div><br>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Monthly:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="monthly" name="monthly" value="<?php echo $arr['monthly']?>">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label"> 730 days:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="days_730" name="days_730" value="<?php echo $arr['days_730']?>">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label"> Bonus:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="bonus" name="bonus" value="<?php echo $arr['bonus']?>">
    </div>
  </div>


  <input type="submit" class="btn btn-success" name="submit" style="height: 30px; width:100px; margin-left:20px;  margin-top:20px;">
</form>

 </div>

</body>
</html>
<?php
}
?>