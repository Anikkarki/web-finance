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
        <title>Loan</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	
	<link rel="stylesheet" href="css/style.css">
  
</head>
<body>
    <?php include('portion/menu_admin.php'); ?>
    <div>
      <h1 align="center">Loan Section</h1>
   <table class="table table-bordered border-primary">
   
  <tr>
  <th>Name </th>
  <th>Intrest </th>
   <th>Range</th>
   <th>Action </th>
</tr>
<?php 
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
mysqli_select_db($con,'finance') or die(mysqli_error($con));
$query = "SELECT * FROM loan";
$result = mysqli_query($con,$query)or die(mysqli_error($con));
while ($arr = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
    ?>
   <tr>
      <td><?php echo $arr['l_title']; ?></td>
      <td><?php echo $arr['intrest']; ?></td>
      <td><?php echo $arr['l_range']; ?></td>
      <?php echo "&nbsp;<td><a href='loan_update_page.php?l_ID=".$arr['l_ID']."'>EDIT</a> &nbsp;&nbsp; <a href='loan_delete_page.php?l_ID=".$arr['l_ID']."'>DELETE</a></td>"; }?>
  </tr>
   </table>
   </div>
<hr>
<br>
<div class="about-sec-ab">
<h1 align="center">Add Admin</h1>
<form method="POST" action="core/add_admin.php" class="add-admin">
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Admin ID:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="name" name="admin_id">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">email:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="name" name="email">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" id="pass" name="password">
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