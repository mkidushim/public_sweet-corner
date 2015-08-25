<!DOCTYPE html>
<html>

<head>
<?php
$page_links = ['home'=> 'template_home.php', 'contact' => 'template_contact.php', 'services'=> 'template_services.php', 'about'=> 'template_about.php'];

?>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="sweet.js"></script>
    <title>Sweet Corner Home</title>
    
</head>

<body>
    <div class="container">
        <!--
        <div class="row">
             <div class="head_img col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="nav-bar navbar-right">
                    <a class='col-xs-3 icon-bar home'>Home</a>
                    <a class='col-xs-3 icon-bar' href=''>About Us</a>
                    <a class='col-xs-3 icon-bar' href=''>Services</a>
                    <a class='col-xs-3 icon-bar contact'>Contact</a>
                </div>
                -->
        <header class="header col-sm-12">
            <div class="row">
                <img class="col-sm-12 col-xs-12" src="assets/header.png">
                <div class="drop_menu navbar-toggle-con col-xs-2 visible-xs">
                    <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                        <span class="icon-bar iconbar1"></span>
                        <span class="icon-bar iconbar2"></span>
                        <span class="icon-bar iconbar3"></span>
                    </button>
                </div>
                <div class="row visible-xs">
                    <nav class="navbar-collapse bs-navbar-collapse collapse col-xs-12">
                        <ul class="phone_nav nav navbar-nav">
                            <li class="active home"><a href="index.php?page=home" class="home">Home</a></li>
                            <li><a href="index.php?page=about" class="about">About</a></li>
                            <li><a href="index.php?page=services" class="services">Services</a></li>
                            <li><a href="index.php?page=contact" class="contact">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="row hidden-xs">
                    <ul class='nav navbar-nav navbar-collapse pull-right'>
                            <li class="active home"><a href="index.php?page=home" class="home">Home</a></li>
                            <li><a href="index.php?page=about" class="about">About</a></li>
                            <li><a href="index.php?page=services" class="services">Services</a></li>
                            <li><a href="index.php?page=contact" class="contact">Contact</a></li>
                    </ul>
                </div>
                <div class="back_logo col-md-12">
                    <img class="col-md-3 col-md-offset-5" src="assets/logo.png">
                    <p class="back_logo_capt col-md-12">We deliver cupcakes for the important evens in your life!</p>
                </div>
            </div>
        </header>
        <div class="pg_break col-xs-12 col-sm-12 col-md-12 col-lg-12"></div>
        <div id="main_content">
            

        <?php

//include($page_links[$_GET['page']]);
include($page_links[$_GET['page']]);
        ?>

        </div>
        <div class="footer col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <img src="assets/dots-footer.png" class="dots">
            <div class="phone col-xs-6 col-xs-offset-7 col-sm-5 col-sm-offset-7 col-md-5 col-md-offset-7 text-right">
               <span class="fa fa-linkedin-square linkedin"></span><a class="linkedin" href="https://www.linkedin.com/in/mkidushim">mkidushim</a>
            </div>
            <p class="copyright col-xs-12 col-sm-12 col-md-12 text-center"><small>Copyright &#169 2014 Sweet Corner</small></p>
        </div>
    </div>
    </div>
</body>
