<!--format next-->
<div class="container-footer-here">

    <div name="ContactUs" class="contact">
        <h3 class="heading">ABOUT US</h3>
        <div class="aboutus-footer">
            <?php
            $con = mysqli_connect('localhost', 'root', '') or die(mysqli_error($con));
            mysqli_select_db($con, 'finance') or die(mysqli_error($con));
            $query = "SELECT * FROM aboutus where Ab_title='Introduction'";
            $result = mysqli_query($con, $query) or die(mysqli_error($con));
            $arr = mysqli_fetch_array($result, MYSQLI_ASSOC);
            ?>
            <div class="about-intro-sec">
                <?php echo $arr['Ab_content'];  ?>
            </div>
        </div>
    </div>

    <div name="blogs" class="blog">
        <h3 class="heading">LATEST NEWS</h3>
        <?php
        $con = mysqli_connect('localhost', 'root', '') or die(mysqli_error($con));
        mysqli_select_db($con, 'finance') or die(mysqli_error($con));
        $query = "SELECT * FROM news
                    ORDER BY N_id DESC
                    LIMIT 0, 2 ";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));

        while ($arr = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        ?>
            <div class="about-sec-ab">
                <p class="containt"><?php echo $arr['N_img'];  ?></p>
            </div>
        <?php
        }
        ?>
    </div>

    <div name="blogs" class="link">

        <h3 class="heading">QUICK LINKS</h3>
        <ul>
            <li><a href="aboutus.php">About US</a></li>
            <hr>
            <li><a href="loan.php">Loan</a></li>
            <hr>
            <li><a href="365days.php">Service</a></li>
            <hr>
            <li><a href="">Gallery</a></li>
            <hr>
            <li><a href="">News</a></li>
            <hr>
        </ul>

    </div>

</div>

<div name="main_footer" class="footer-rt d-flex  align-items-center  justify-content-around">
    <p style="float: right">Templates by OS Templates</p>
    <p>Copyright@2013 Domain Name All rights Reserved.</p>
</div>