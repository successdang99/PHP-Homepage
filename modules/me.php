<div id="games" class="me">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>My Album Games</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 margin_bottom">
                <div class="row">

                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                        <div class="two-box">
                            <figure><img src="images/brickbreaker.png" alt="#" /></figure>
                        </div>
                    </div>

                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">

                        <div class="Games">
                            <h3>Brick Breaker</h3>
                            <p>Brick Breaker is a classic and exciting game.<br> Your objective is to break all the color bricks on each of the best parts of it is the limit of the ball to tap paddle so the gameplay becomes harder and more all you need to do is break bricks.</p>
                            <?php
                                if (isset($_SESSION["username"])) {
                                    echo '<a href="Breakout/breakout.html">Try it now!</a>';
                                }
                                else {
                                    echo '<a href="modules/login.php">Try it now!</a>';
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 margin_bottom">
                <div class="row">

                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                        <div class="two-box">
                            <figure><img src="images/2cars.png" alt="#" /></figure>
                        </div>
                    </div>

                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">

                        <div class="Games">
                            <h3>Two Cars</h3>
                            <p>Control the Two Cars at the same time!<br> Tap on the right side to move the red car and tap on the left side to move the blue car.</p>
                            <?php
                                if (isset($_SESSION["username"])) {
                                    echo '<a href="TwoCars/TwoCars.html">Try it now!</a>';
                                }
                                else {
                                    echo '<a href="modules/login.php">Try it now!</a>';
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">

                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                        <div class="two-box">
                            <figure><img src="images/puzzle.png" alt="#" /></figure>
                        </div>
                    </div>

                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">

                        <div class="Games">
                            <h3>Puzzle</h3>
                            <p>In this relaxing puzzle game, you can choose whether to use 3*3, 5*5, 7*7 pieces, adjusting the difficulty to the appropriate skill level.</p>
                            <?php
                                if (isset($_SESSION["username"])) {
                                    echo '<a href="Puzzle/Puzzle.html">Try it now!</a>';
                                }
                                else {
                                    echo '<a href="modules/login.php">Try it now!</a>';
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>