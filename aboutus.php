<html>
    <head>
        <title>About us</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	
	<link rel="stylesheet" href="css/style.css">
  
</head>
<body>
    <?php include('portion/menu.php'); ?>
    <?php 
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
mysqli_select_db($con,'finance') or die(mysqli_error($con));
$query = "SELECT * FROM aboutus where Ab_title='Introduction'";
$result = mysqli_query($con,$query)or die(mysqli_error($con));

while ($arr = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
    ?>
    <div class="about-sec-ab">
    <u><h1 align="center">Introduction</h1></u>
    <br>
 <p class="containt"><?php echo $arr['Ab_content'];  ?></p>
 </div>
 <?php
    }   
?>

    <?php include('portion/footer.php'); ?>
</body>
</html>