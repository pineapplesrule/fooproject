<?php
    session_start();
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Volton - Responsive Mobile Template</title>
        <meta name="description" content="">
        <!-- 
    	Volton Template
    	http://www.templatemo.com/preview/templatemo_441_volton
        -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/templatemo-style.css">

        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                
                $("#login").click(function(){
                    
                    $("#login").fadeOut(1000);
                    
                    $(".banner-bg").prepend($("<form id = 'login' method = 'post' action = 'serverside/checklogin.php'>Username: <input type = 'text' name = 'myusername'><br>Password: <input type = 'text' name = 'mypassword'><br><input type = 'submit' value = 'Submit'></form>").fadeIn(1000));
                    
                });

            });


        </script>
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    
        <div class="responsive-header visible-xs visible-sm">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="top-section">
                            <div class="profile-image">
                                <img src="img/profile.jpg" alt="Volton">
                            </div>
                            <div class="profile-content">
                                <h3 class="profile-title">Philip Foo</h3>
                                <p class="profile-description">Student at Duke University</p>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#" class="toggle-menu"><i class="fa fa-bars"></i></a>
                <div class="main-navigation responsive-menu">
                    <ul class="navigation">
                        <li><a href="#top"><i class="fa fa-home"></i>Home</a></li>
                        <li><a href="#about"><i class="fa fa-user"></i>About Me</a></li>
                        <li><a href="#projects"><i class="fa fa-newspaper-o"></i>My Projects</a></li>
                        <li><a href="#contact"><i class="fa fa-envelope"></i>Contact Me</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- SIDEBAR -->
        <div class="sidebar-menu hidden-xs hidden-sm">
            <div class="top-section">
                <div class="profile-image">
                    <img src="img/profile.jpg" alt="Volton">
                </div>
                <h3 class="profile-title">Philip Foo</h3>
                <p class="profile-description">Student at Duke University</p>
            </div> <!-- top-section -->
            <div class="main-navigation">
                <ul class="navigation">
                    <li><a href="#top"><i class="fa fa-globe"></i>Welcome</a></li>
                    <li><a href="#about"><i class="fa fa-pencil"></i>About Me</a></li>
                    <li><a href="#projects"><i class="fa fa-paperclip"></i>My Projects</a></li>
                    <li><a href="#contact"><i class="fa fa-link"></i>Contact Me</a></li>
                </ul>
            </div> <!-- .main-navigation -->
            <div class="social-icons">
                <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                </ul>
            </div> <!-- .social-icons -->
        </div> <!-- .sidebar-menu -->
        

        <div class="banner-bg" id="top">
            <?php
                if (!isset($_SESSION["username"])){
                    echo '<input type = "button" id = "login" value = "Login">';
                }
                else{
                    $name = $_SESSION["username"];
                    echo '<div class ="loggedIn">Hello, ' .$name. '<a href = "serverside/logout.php"><input type = "button" id = "logout" value = "Log out"></a></div>';   
                }
            
            ?>

            <div class="banner-overlay"></div>
            <div class="welcome-text">
                <h2>Philip Foo</h2>
                <h5>Student of the Game</h5>
                <h6>Duke | ECE | Econ | Basketball</h6>
            </div>
        </div>

        <!-- MAIN CONTENT -->
        <div class="main-content">
            <div class="fluid-container">

                <div class="content-wrapper">
                
                    <!-- ABOUT -->
                    <div class="page-section" id="about">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="widget-title">About Me</h4>
                            <div class="about-image">
                                <img src="img/8.jpg" alt="about me">
                            </div>
                            <p>
                                Welcome to my personal website! It was built to tell you a little bit more about myself and serve as a place for me to drop
                                a couple of my projects. I'm currently a junior at Duke University 
                            </p>
                            <hr>
                        </div>
                    </div> <!-- #about -->
                    </div>
                    
                    <!-- PROJECTS -->
                    <div class="page-section" id="projects">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="widget-title">PHOTOS OF WHAT I DO</h4>
                            <p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Maecenas et lorem molestie, maximus justo dignissim, cursus nisl. Nullam at ante quis ex pharetra pulvinar quis id dolor. Integer lorem odio, euismod ut sem sit amet, imperdiet condimentum diam.</p>
                        </div>
                    </div>
                    <div class="row projects-holder">
                        <div class="col-md-4 col-sm-6">
                            <div class="project-item">
                                <img src="img/1.jpg" alt="">
                                <div class="project-hover">
                                    <div class="inside">
                                        <h5><a href="#">Pellentesque porta ligula</a></h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam cursus</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="project-item">
                                <img src="img/2.jpg" alt="">
                                <div class="project-hover">
                                    <div class="inside">
                                        <h5><a href="#">Pellentesque porta ligula</a></h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam cursus</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="project-item">
                                <img src="img/3.jpg" alt="">
                                <div class="project-hover">
                                    <div class="inside">
                                        <h5><a href="#">Pellentesque porta ligula</a></h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam cursus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="project-item">
                                <img src="img/4.jpg" alt="">
                                <div class="project-hover">
                                    <div class="inside">
                                        <h5><a href="#">Pellentesque porta ligula</a></h5>
                                        <p>Quisque mattis sit amet dolor eu scelerisque. Vivamus bibendum massa et nisl tempus commodo.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="project-item">
                                <img src="img/5.jpg" alt="">
                                <div class="project-hover">
                                    <div class="inside">
                                        <h5><a href="#">Pellentesque porta ligula</a></h5>
                                        <p>Quisque mattis sit amet dolor eu scelerisque. Vivamus bibendum massa et nisl tempus commodo.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="project-item">
                                <img src="img/6.jpg" alt="">
                                <div class="project-hover">
                                    <div class="inside">
                                        <h5><a href="#">Pellentesque porta ligula</a></h5>
                                        <p>Quisque mattis sit amet dolor eu scelerisque. Vivamus bibendum massa et nisl tempus commodo.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- .projects-holder -->
                    </div>
                    <hr>

                    <!-- CONTACT -->
                    <div class="page-section" id="contact">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="widget-title">PLACE TO TALK WITH ME</h4>
                            <p>Vestibulum ac iaculis erat, in semper dolor. Maecenas et lorem molestie, maximus justo dignissim, cursus nisl. Nullam at ante quis ex pharetra pulvinar quis id dolor. Integer lorem odio, euismod ut sem sit amet, imperdiet condimentum diam.</p>
                        </div>
                    </div>
                    <div class="row">
                        <form action="#" method="post" class="contact-form">
                            <fieldset class="col-md-4 col-sm-6">
                                <input type="text" id="your-name" placeholder="Your Name...">
                            </fieldset>
                            <fieldset class="col-md-4 col-sm-6">
                                <input type="email" id="email" placeholder="Your Email...">
                            </fieldset>
                            <fieldset class="col-md-4 col-sm-12">
                                <input type="text" id="your-subject" placeholder="Subject...">
                            </fieldset>
                            <fieldset class="col-md-12 col-sm-12">
                                <textarea name="message" id="message" cols="30" rows="6" placeholder="Leave your message..."></textarea>
                            </fieldset>
                            <fieldset class="col-md-12 col-sm-12">
                                <input type="submit" class="button big default" value="Send Message">
                            </fieldset>
                        </form>
                    </div> <!-- .contact-form -->
                    </div>
                    <hr>

                    <div class="row" id="footer">
                        <div class="col-md-12 text-center">
                            <p class="copyright-text">Copyright &copy; 2084 Company Name</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <script src="js/vendor/jquery-1.10.2.min.js"></script>
        <script src="js/min/plugins.min.js"></script>
        <script src="js/min/main.min.js"></script>

    </body>
</html>