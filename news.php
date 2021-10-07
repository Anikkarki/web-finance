<html>
    <head>
        <title>News</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	
	<link rel="stylesheet" href="css/style.css">
  
</head>
<body>
    <?php include('portion/menu.php'); ?>
    <br><br>
    <u><h2 align=center>News</h2></u>
    
    <p></p>
    <div class="about-sec-tb">
    
    <?php 
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
mysqli_select_db($con,'finance') or die(mysqli_error($con));
$query = "SELECT * FROM news";
$result = mysqli_query($con,$query)or die(mysqli_error($con));

while ($arr = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
    ?>
   
      <?php $imgnews= $arr['N_img']; ?>
      <img src="<?php '.$imgnews' ?>">
      <?php echo $arr['N_des']; }?>

  

<br>
<p style="color:red; font-size:120%">Please visit our nearest branch for further detail</p>
<br>
</div>


    <?php include('portion/footer.php'); ?>
</body>
</html>