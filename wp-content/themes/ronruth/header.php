<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>RON RUTH</title>

<link href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_template_directory_uri();?>/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/fonts/font-awesome/css/font-awesome.min.css" type="text/css">

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" 
></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/custom.js"></script>
</head>
<body>
<?php
 if(is_front_page()){
    ?>
<header class="home-header">
    <?php
 }else{
?> 
<header>
    
<?php }?>

    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3">
                <div class="logo"><a href="<?php echo site_url();?>"><img src="<?php echo get_template_directory_uri();?>/images/logo.png" class="img-responsive" alt="Ron Ruth"></a></div>
            </div>
            <div class="col-md-9 col-sm-9">
                <ul class="social">
                    <li><a href="https://www.facebook.com/"><i class="fa fa-facebook">&nbsp;</i></a></li>
                        <li><a href="https://twitter.com/"><i class="fa fa-twitter">&nbsp;</i></a></li>
                        <li><a href="https://plus.google.com/"><i class="fa fa-google-plus">&nbsp;</i></a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="navigation">
                   <!--  <ul>
                        <li class="active"><a href="#">home</a></li>
                        <li><a href="#">about us</a></li>
                        <li><a href="#">events calendar</a></li>
                        <li><a href="#">learning resources</a></li>
                    </ul> -->
                    <?php echo wp_nav_menu(array('theme_location' => 'primary'));?>
                </div>
                <div class="mobile-menu">
                  <a href="#" class="menu-icon" style="display: block;">
                    <span class="span bar top" style="background-color: #fff;">&nbsp;</span>
                    <span class="span bar middle" style="background-color: #fff;">&nbsp;</span>
                    <span class="span bar bottom" style="background-color: #fff;">&nbsp;</span>
                  </a>
                  <div class="main-menu">
                    <!-- <ul>
                       <li class="active"><a href="#">home</a></li>
                        <li><a href="#">about us</a></li>
                        <li><a href="#">events calendar</a></li>
                        <li><a href="#">learning resources</a></li>
                    </ul> -->
                    <?php echo wp_nav_menu(array('theme_location' => 'primary'));?>
                  </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="banner-txt">
                    <?php dynamic_sidebar('sidebar-4');?>
                </div>
            </div>
        </div>
    </div>
</header>
<?php wp_head();?>
<div class="clear">&nbsp;</div>
