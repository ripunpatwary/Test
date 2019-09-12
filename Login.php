 <?php
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "ecommerce1";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if(!$conn)
	{
		echo "database connected error!";
	}
	if(!empty($_POST))
	{
		$vname=$_POST['username'];
		$cpass=$_POST['password'];
		$ripun="INSERT INTO login (s_id,name,password) VALUES('','$vname','$cpass')";
		if(mysqli_query($conn, $ripun))
		{
			echo "done" ;
		}	
	}
?> 

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Login Page | UnicShopBD</title>


        <link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="themes/light/light.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="themes/dark/dark.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="themes/bar/bar.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/nivo-slider.css">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/nav.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="font/fontawesome-free-5.10.1-web/css/all.css">
        <link rel="stylesheet" href="css/style.css">


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


        <link rel="shortcut icon" href="img/fav.png">

    </head>


    <body>
    <nav class="top-bar anmte-drpdn">
        <div class="container">
            <div class="col-md-4 col-sm-4 no-margin hidden-xs">
                <ul class="mar-t-5">
                    <li><a target="_blank" href="#" class="fab fa-facebook-f"></a></li>

                    <li><a target="_blank" href="#" class="fab fa-twitter"></a></li>

                    <li><a target="_blank" href="#" class="fab fa-instagram"></a></li>

                    <li><a target="_blank" href="#" class="fab fa-linkedin-in"></a></li>

                    <li><a target="_blank" href="" class="fas fa-rss"></a></li>
                </ul>
            </div>

            <div class="col-md-8 col-sm-8 col-xs-12 no-margin">
                <ul class="right">

                    <li><a href="Login.php"><i class="fa fa-lock fw-r5"></i> Login</a></li>
                    <li><a href="Register.php"><i class="fa fa-book fw-r5"></i> Register</a></li>

                </ul>
            </div>
        </div>
    </nav>

    <header class="no-padding-bottom header-alt">
        <div class="container no-padding">
                <div class="col-md-3 col-sm-6 col-xs-12 logo-holder">
                    <div class="logo">
                       <img src="img/h_logo.gif" alt="UnicShop" />
                    </div>
                </div>
                <div class="col-md-6 hidden-sm hidden-xs top-search-holder no-margin">
                    <div class="search-area">
                        <form id="header_search_form" method="get" action="#">
                            <div class="control-group">
                                <input id="header_search_for" type="hidden" name="a" value="search">
                                <input type="hidden" name="b" value="search">
                                <input class="search-field" name="keyword" placeholder="Search for ..." required>

                                <button role="button" type="submit" class="btn search-button"><i class="fas fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>

            <div class="col-md-3 col-sm-6 col-xs-12 top-cart-row no-margin">
                  <div class="top-cart-row-container">
                    <div class="top-cart-holder dropdown animate-dropdown">

                        <div class="basket">
                            <a class="dropdown-toggle link-secondary" data-toggle="dropdown" href="#">
                                <div class="basket-item-count">
                                    <span class="count">0</span>
                                    <img src="img/icon-cart.png" alt="" />
                                </div>

                                <div class="total-price-basket">
                                    <span class="lbl">Your Cart:</span>
                                    <span class="total-price">
                                        0.00USD
                                    </span>
                                </div>
                            </a>
                            <ul class="dropdown-menu">

                                <li class="checkout">
                                    <div class="basket-item">
                                        <p class="alert text-center text-black font-16">Shopping cart is empty !</p>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <nav id="top-megamenu-nav" class="megamenu-vertical animate-dropdown">
            <div class="container">
                <div class="yamm navbar">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mc-horizontal-menu-collapse">
                            <span class="sr-only">Main Menu</span>
                            <span class=""><i class="fa fa-list fw-r10"></i> Main Menu</span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="mc-horizontal-menu-collapse">
                        <ul class="nav navbar-nav">
                          <li><a href="index.php"><i class="fa fa-home fw-r10"></i> Home</a></li>

                          <li><a href="Shop.php"><i class="fa fa-shopping-cart fw-r10"></i> Shop</a></li>


                          <li><a href="Blog.php"><i class="fab fa-blogger"></i> Blog</a></li>


                          <li><a href="Contact.php"><i class="fa fa-envelope fw-r10"></i> Contact Us</a></li>

                          <li><a href="About.php"><i class="fas fa-info-circle"></i> About Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="wrapper">

        <div class="container">

			<div class="col-md-6 col-sm-12 col-xs-12">
				<div class="section sign-in inner-right-xs">
						<h2 class="border"><i class="fa fa-unlock fw-r10"></i> Login to your account</h2>

					<form role="form" class="login-form cf-style-1" method="post">
						<input type="hidden" name="op" value="login">
						<input type="hidden" name="dfp" value="">


						<div class="field-row">
							<label>Username</label>
							<input name="username" value="Username" type="text" class="le-input" placeholder="Username or Email" required>
						</div>

						<div class="field-row">
							<label>Password</label>
							<input name="password" value="demo" type="password" class="le-input" placeholder="Password" pattern=".{3,32}" required>
						</div>


						<div class="field-row clearfix">
							<span class="pull-left">
								<label class="content-color">
									<input type="checkbox" name="remember_me" value="1" class="le-checbox auto-width inline"> <span class="bold">Remember me</span>
								</label>
							</span>
							<span class="pull-right">
								<a href="#" class="content-color bold">Forgot your Password ?</a>
							</span>
						</div>

						<div class="buttons-holder">
							<button type="submit" class="le-button huge"><i class="fa fa-unlock fw-r10"></i> Login</button>
						</div>
					</form>

				</div>
			</div>

		</div>    

            
    </div>






    <footer id="footer" class="">

                <div class="link-list-row">
                    <div class="container no-padding">
                        <div class="col-xs-12 col-md-4 ">
                            <div class="contact-info">
                                <div class="footer-logo text-center">
                                        <img src="img/f_logo.png" alt="Techno  Shop"/>
                                </div>



                                <div class="social-icons text-center">
                                    <ul>

                                        <li><a target="_blank" href="#" class="fab fa-facebook-f bg-light-blue"></a></li>

                                        <li><a target="_blank" href="#" class="fab fa-twitter bg-aqua"></a></li>

                                        <li><a target="_blank" href="#" class="fab fa-instagram bg-red"></a></li>

                                        <li><a target="_blank" href="#" class="fab fa-linkedin-in bg-black"></a></li>

                                        <li><a target="_blank" href="#" class="fas fa-rss bg-orange"></a></li>

                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="col-xs-12 col-md-8 no-margin">
                            <div class="link-widget">
                                <div class="widget">
                                    <ul>
                                        <li><a href="index.php">Home</a></li>

                                        <li><a href="Shop.php">Shop</a></li>

                                        <li><a href="Blog.php">Blog</a></li>

                                        <li><a href="Contact.php">Contact Us</a></li>

                                        <li><a href="About.php">About Us</a></li>

                                    </ul>
                                </div>
                            </div>

                            <div class="link-widget">
                                <div class="widget">
                                    <ul>
                                        <li><a href="">Terms of Service</a></li>
                                        <li><a href="">Privacy Policy</a></li>
                                        <li><a href="">Return Policy</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="copyright-bar">
                    <div class="container">
                        <div class="col-md-6 col-sm-6 col-xs-12 no-margin">
                            <div class="copyright">
                                <strong>Copyright © 2019 UnicshopBD All Rights Reserved.</strong>	
                                <p>Powered by Strong Signals</p>			
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 no-margin">
                            <div class="payment-methods ">
                                <ul>
                                    <li><img alt="" src="img/bkash.png"></li>
                                    <li><img alt="" src="img/rocket.png"></li>
                                    <li><img alt="" src="img/mastercard.png"></li>
                                    <li><img alt="" src="img/ucash.png"></li>
                                    <li><img alt="" src="img/surecash.png"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
    </footer>



        <script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
        <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
        <script type="text/javascript">
        $(window).load(function() {
            $('#slider').nivoSlider();
        });
        </script>


        <script src="js/owl.carousel.min.js"></script>
        <script src="js/wow-owl.js"></script>


    </body>
</html>
