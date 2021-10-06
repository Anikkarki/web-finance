<html>
    <head>
        <title>Rate</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	
	<link rel="stylesheet" href="css/style.css">

</head>
<body>
    <?php include('portion/menu.php'); ?>


    <?php 
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
mysqli_select_db($con,'finance') or die(mysqli_error($con));
$query = "SELECT * FROM rate";
$result = mysqli_query($con,$query)or die(mysqli_error($con));

?>
<div class="about-sec">
<table class="table table-success table-striped">
  <tr>
    <th>Name</th>
    <th>intrest rate</th>
    <th>Minumum balance</th>
    <th></th>
  </tr>
<?php
while ($arr = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
    ?>
   <tr><td><?php echo $arr['rate'];  ?></td></tr>
 </div>
 <?php
    }   
?>
</table></div>

    <?php include('portion/footer.php'); ?>
</body>
</html>