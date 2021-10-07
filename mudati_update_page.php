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
        <title>Mudhati Edit</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	
	<link rel="stylesheet" href="css/style.css">
  
</head>
<body>
    <?php include('portion/menu_admin.php'); ?>
    <?php 
    $i = $_GET['c_id'];
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
mysqli_select_db($con,'finance') or die(mysqli_error($con));
$query = "SELECT * FROM mudhati where c_id =$i";
$result = mysqli_query($con,$query)or die(mysqli_error($con));
$arr=mysqli_fetch_array($result,MYSQLI_ASSOC);
?>
<div class="about-sec-ab">
    <h1 align="center">edit this data?</h1>
    <form method="POST" action="core/mudhati_update_process.php" class="add-admin">
    <div class="login-user"><input type="hidden" name="c_id" value="<?php echo $arr['c_id']?>"></div><br>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Period:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="period" name="period" value="<?php echo $arr['period']?>">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label"> Three Monthly intrest:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="three_month" name="three_month" value="<?php echo $arr['three_month']?>">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">  Half Yearly intrest:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="six_month" name="six_month" value="<?php echo $arr['six_month']?>">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label"> Yearly intrest:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="yearly" name="yearly" value="<?php echo $arr['yearly']?>">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">  After Maturity intrest:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="after_maturity" name="after_maturity" value="<?php echo $arr['after_maturity']?>">
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