
<?php include('server.php') ?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="img/logo.png"  />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>ChoiceMate</title>

        <!-- Icon css link -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Rev slider css -->
        
        <link href="vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
        
        <link href="css/login.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="main_menu_area">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#"><img src="img/logo.png" alt="" height="150" width="170"></a>
                <div class="compname">C h o i c e M a t e</div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="searchbarcol">
                    <div class="lefttags"> 

                    </div>

                    <div class="searchbar">  
                        <span class="las la-search"></span> 
                        <input type="search" placeholder="Search here" > </div>

                        <div class="lefttags">
                       
                            
                            <a class="btn2" href="signup.php"><b>Signup</b></a> 
                            <a class="btn3" href="signup.html"><b>Language<i class="arrow-down-lan"></i></b></a>
                            
                         </div> 
                         <div class="righttags">
                            <a class="btn4" href="signup.html"><b>Wishlist   <i class="fa fa-heart" style="color: red;"></i></b></a> 
                            <a class="btn5" href="signup.html"><b>Cart    <i class="fa fa-shopping-cart" style="font-size:18px;color:black"></i></b></a>
                            <a class="btn6" href="signup.html"><b>Contact Us</b></a>
    
                        </div>
                       </div>
                       
                       




                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item active"><a class="nav-link" href="home.php"><b>Home</b></a></li>
                      
                        <li class="nav-item"><a class="nav-link" href="categories/electronics.html">Electronics<i class="arrow down"></i></a></li>
                       
                        <li class="nav-item"><a class="nav-link" href="categories/Mobile.html">Mobiles<i class="arrow down"></i></a></li> 

                        <li class="nav-item"><a class="nav-link" href="categories/Fashion.html">Fashion<i class="arrow down"></i></a></li>
                 
                        <li class="nav-item"><a class="nav-link" href="categories/Beauty.html">Beauty<i class="arrow down"></i></a></li>

                        <li class="nav-item"><a class="nav-link" href="categories/Homes&Decor.html">Homes & Decor<i class="arrow down"></i></a></li>
                        
                        <li class="nav-item"><a class="nav-link" href="categories/Appliances.html">Appliances<i class="arrow down"></i></a></li>
                        
                        <li class="nav-item"><a class="nav-link" href="categories/Sneakers.html">Sneakers<i class="arrow down"></i></a></li>

                        <li class="nav-item"><a class="nav-link" href="categories/Gadgets.html">Gadgets<i class="arrow down"></i></a></li>

                        <li class="nav-item"><a class="nav-link" href="categories/Travel.html">Travel<i class="arrow down"></i></a></li>

                    </ul>
                </div>
            </nav>
        </header>
        <!--================End Header Menu Area =================-->
       
        <!--================Slider Area =================-->
        <section class="main_slider_area">
            <div id="main_slider" class="rev_slider" data-version="5.3.1.6">
                
                   
        <!--================End Footer Area =================-->
       

        <div class="Logindiv">


            
            <div class="container">
            <h1>
                C H O I C E M A T E  
            </h1>
                <form method="post" action="login.php" style="margin-top: 5%;">
                    <?php include('errors.php'); ?>
                    
                    <div class="input-group">
          
                        <input class="uname" type="text" name="username" placeholder="Username">
                        <div class="mailicondiv"><i class="fa fa-envelope" style="font-size:27px;color: rgba(41,128,185,255);margin-left: 1px;"></i></div>
                    </div>
                    <div class="input-group">
                        <input class="pname" type="password" name="password" placeholder="password">
                    </div>
                    <input type="submit" type="submit" value="login" class="btn-login" style="margin-top: 4%;"/>
                </form>

                <div class="remembermediv"> <input type="checkbox" id="rememberme" checked><b> Remember me </b></div>
                <div class="forgotpassdiv"> <a class="btn8" href="signup.php"><b>Forgot Password ?</b></a> </div>
                
                <div class="signuplink"><h2>Don't Have an Account ?</h2>  <div class="indirectsignuplink"><a class="btn7" href="signup.php"><b>Signup</b></a></div> 
                </div>
            </div>
        </div>
        
        
        <ul>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- Rev slider js -->
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script> 
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script> 
        <script src="vendors/counterup/jquery.waypoints.min.js"></script>
        <script src="vendors/counterup/jquery.counterup.min.js"></script> 
        <script src="vendors/counterup/apear.js"></script>
        <script src="vendors/counterup/countto.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/magnify-popup/jquery.magnific-popup.min.js"></script>
        <script src="js/smoothscroll.js"></script>
        
        <script src="js/theme.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>