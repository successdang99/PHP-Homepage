<header>
    <div class="header-top">
        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="index.php"><img src="images/logo.png" alt="#" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <ul class="top_icon">
                            <?php
                                if (isset($_SESSION["username"])) {
                                    echo '<p style = "margin-bottom : 15px; color : white; font-size : 20px;"> Hello, '.$_SESSION["username"].'</p>';
                                    echo '<li class="button_login"> <a href="modules/logout.php">Logout</a> </li>';
                                }
                                else {
                                    echo '<li class="button_login"> <a href="modules/login.php">Login</a> </li>';
                                    echo '<li> <a href="modules/signup.php">Signup</a> </li>';
                                }    
                            ?>
                            <li class="mean-last">
                                <a href="#"><img src="images/search_icon.png" alt="#footer" /></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <section class="slider_section">

            <div class="banner_main">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-2 padding_left0">
                            <div class="menu-area">
                                <div class="limit-box">
                                    <nav class="main-menu">
                                        <ul class="menu-area-main">
                                            <li> <a href="#game">Game</a> </li>
                                            <li> <a href="#about">About</a> </li>
                                            <?php
                                                if (isset($_SESSION["username"])) {
                                                    echo '<li> <a href="modules/chatbox.php">Chat Box</a> </li>';
                                                }
                                                else {
                                                    echo '<li> <a href="modules/login.php">Chat Box</a> </li>';
                                                }    
                                            ?>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 ">
                            <div class="text-bg">
                                <h1>amazing<br> 2d game</h1>
                                <span>Welcome to play my Games<br> Let's have fun!</span>
                                <a href="#">download</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

        </section>
    </div>
</header>