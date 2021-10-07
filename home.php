<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>OK Finance</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/style.css">
  <script src="index.js"></script>

</head>
<body>
  <?php include('portion/menu.php'); ?>
  <!--slider begin-->
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
  </div>
  <div class="carousel-inner">
  <div class="carousel-item active">
      <img src="image/5.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Bindabasani Finance</h5>
        <p></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="image/1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="image/2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="image/3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="image/4.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Fourth slide label</h5>
        <p>Some representative placeholder content for the Fourth slide.</p>
      </div>
    </div>
    
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!--Slider ends-->
<hr>
<!--flex sec -->
<div class="intro-ser-float">
<!--Introduction-->
<div class="intro-sec">
  <u><h2 align=center>Introduction</h2></u>
  <?php 
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
mysqli_select_db($con,'finance') or die(mysqli_error($con));
$query = "SELECT * FROM aboutus where Ab_title='Introduction'";
$result = mysqli_query($con,$query)or die(mysqli_error($con));
$arr = mysqli_fetch_array($result,MYSQLI_ASSOC);
    ?>
    <div class="about-intro-sec">
 <?php echo $arr['Ab_content'];  ?>
 </div>
</div>
<!--Introduction ends-->
<!--SERVICE-->
<div class="serv-sec">
<u><h2 align=center>Our Services</h2></u>
<div class="list-serv-sec">
                    <ul>
                        <li><a href="mudati.php">Mudati saving</a> </li>
                        <li><a href="730days.php">730 days saving</a></li>
                        <li><a href="nari.php">Nari Saving</a></li>
                        <li><a href="">Nar-Nari Saving</a></li>
                        <li><a href="awadhi.php">Awadhi Saving</a></li>
                        <li><a href="kopila.php">Kopila Saving</a></li>
                        <li><a href="365days.php">365 days Saving</a></li>
                    </ul>

</div>
</div>
<!--SERVICE end-->
<br>
<br>
</div>
<!--flex sec ends -->

<!--rates sec-->
<div class="rate-home">
  
</div>
<!--rates sec ends-->

<?php include('portion/footer.php'); ?>
</body>
</html>