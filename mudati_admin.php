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
        <title>Mudati Saving Scheme</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	
	<link rel="stylesheet" href="css/style.css">
  
</head>
<body>
    <?php include('portion/menu_admin.php'); ?>
    <br><br>
    <u><h2 align=center>MUDATI SAVING</h2></u>
    
    <p></p>
    <div class="about-sec-tb">
    <table class="table table-success table-striped">
  <tr>
      <th>Period</th>
      <th>3 month intrest payment</th>
      <th>Quarterly interest payment</th>
      <th>Yearly interest payment</th>
      <th>After Maturity</th>
      <th>Action</th>
  </tr>
    <?php 
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
mysqli_select_db($con,'finance') or die(mysqli_error($con));
$query = "SELECT * FROM mudhati";
$result = mysqli_query($con,$query)or die(mysqli_error($con));

while ($arr = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
    ?>
    <tr>
      <td><?php echo $arr['period']; ?></td>
      <td><?php echo $arr['three_month']; ?></td>
      <td><?php echo $arr['six_month']; ?></td>
      <td><?php echo $arr['yearly']; ?></td>
      <td><?php echo $arr['after_maturity']; ?></td>
      <?php echo "&nbsp;<td><a href='mudati_update_page.php?c_id=".$arr['c_id']."'>EDIT</a>"; }?>
  </tr>
  

</table>

<br>
<p style="color:red; font-size:120%">Please visit our nearest branch for further detail</p>
<br>
</div>

</body>
</html>
<?php
  }
 ?>