<footr>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <form class="news">
                        <input class="newslatter" placeholder="Enter Your Email" type="text" name="Enter Your Email">
                        <button class="submit">Subscribe</button>
                    </form>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 ">
                            <div class="address">
                                <ul class="social_link">
                                    <li><a href="https://www.facebook.com/success.dang.1999"><img src="icon/fb.png"></a></li>
                                    <li><a href="https://twitter.com/AngSuccess"><img src="icon/tw.png"></a></li>
                                     <li><a href="https://www.instagram.com/success_dang/"><img src="icon/instagram.png"></a></li>
                                </ul>
                                <a href="index.html"> <img src="images/logo.png" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="address">
                                <h3>Quick links</h3>
                                <ul class="Menu_footer">
                                    <li class="active"> <img src="images/3.png" alt="#"> <a href="#">Game</a> </li>
                                    <li><img src="images/3.png" alt="#"> <a href="#about">About</a> </li>
                                    <?php
                                        if (isset($_SESSION["username"])) {
                                            echo '<li><img src="images/3.png" alt="#"> <a href="modules/chatbox.php">Chat Box</a> </li>';
                                        }
                                        else {
                                            echo '<li><img src="images/3.png" alt="#"> <a href="modules/login.php">Chat Box</a> </li>';
                                        }    
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="address">
                                <h3>play game</h3>
                                <ul class="Links_footer">
                                    <?php
                                        if (isset($_SESSION["username"])) {
                                            echo '<li class="active"><img src="images/3.png" alt="#"> <a href="Breakout/breakout.html">Brick Breaker </a> </li>';
                                            echo '<li><img src="images/3.png" alt="#"> <a href="TwoCars/TwoCars.html">Two Cars</a> </li>';
                                            echo '<li><img src="images/3.png" alt="#"> <a href="Puzzle/Puzzle.html">Puzzle</a> </li>';
                                        }
                                        else {
                                            echo '<li class="active"><img src="images/3.png" alt="#"> <a href="modules/login.php">Brick Breaker </a> </li>';
                                            echo '<li><img src="images/3.png" alt="#"> <a href="modules/login.php">Two Cars</a> </li>';
                                            echo '<li><img src="images/3.png" alt="#"> <a href="modules/login.php">Puzzle</a> </li>';
                                        }
                                    ?>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 ">
                            <div class="address">
                                <h3>Contact me </h3>
                                <ul class="loca">
                                    <li>
                                        <a href="https://www.google.com/maps/place/%E9%98%B2%E8%A1%9B%E5%A4%A7%E5%AD%A6%E6%A0%A1/@35.2576652,139.7217651,15z/data=!4m5!3m4!1s0x0:0x67e1b527f355bfcd!8m2!3d35.2576652!4d139.7217651"><img src="icon/loc.png" alt="#" /></a>Kanagawa,
                                        <br>Japan</li>
                                    <li>
                                        <a href="https://mail.google.com/"><img src="icon/email.png" alt="#" /></a>dtcong9x@gmail.com</li>
                                   <li>
                                        <a href="http://line.naver.jp/ti/p/fhCMQb6gZo"><img src="icon/call.png" alt="#" /></a>+81 70 2795 4935</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="copyright">
            <div class="container">
                <p>© 2021 All Rights Reserved. Coded by Dang Thanh Cong at<a href="https://www.mod.go.jp/nda/english/"> National Defense Academy</a></p>
            </div>
        </div>
    </div>
</footr>