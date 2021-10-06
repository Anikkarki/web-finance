<!--format next-->
<div class="container-footer-here">
                            <div name="ContactUs" class="contact">
                                    <h3 class="heading">ABOUT US</h3>
                                    <div class="aboutus-footer">
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
                            </div>
                            <div name="blogs" class="blog">
                                    <h3 class="heading" >LATEST BLOG POSTS</h3>
                                    <h3>Post Title</h3>
                                    <p>Admin,dominname.com</p> 
                                    <p>Friday,6th April 5000</p>
                                    <p>Nulla facillisi.ut fringilla.suspebdisse</p>
                                    <p align="right"><a href="r1.html" style="color:0099FF;text-decoration: none;">Read more>></a></p>
                                    
                                    <h3>Post Title</h3>
                                    <p>Admin,dominname.com</p> 
                                    <p>Friday,6th April 5000</p>
                                    <p>Nulla facillisi.ut fringilla.suspebdisse</p>
                                    <p align="right"><a href="r1.html" style="color:0099FF;text-decoration: none;">Read more>></a></p>
                            </div>
                            <div name="blogs" class="link">
                
                                    <h3 class="heading">QUICK LINKS</h3>
                                    <ul>
                                    <li><a href="aboutus.php">About US</a></li>
                                    <hr>
                                    <li><a href="loan.php">Loan</a></li>
                                    <hr>
                                    <li><a href="service.php">Service</a></li>
                                    <hr>
                                    <li><a href="">Loream</a></li>
                                    <hr>
                                    <li><a href="">Loream</a></li>
                                    <hr>
                                    <li><a href="">Loream</a></li>
                                    <hr>
                                    </ul>
                
                                </div>
                               
                        </div>
                        <div name="main_footer" class="footer-rt">
                            
                            <p style="float: right">Templates by OS Templates</p>
                            <p>Copyright@2013 Domain Name All rights Reserved.</p>
                        </div>    