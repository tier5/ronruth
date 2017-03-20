<?php 
/*
*Template Name:Learning event Page
*/

//get_header();
?>

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
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" ></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/custom.js"></script>
	<?php wp_head();?>
	
</head>
<body>
<header class="learning-header">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3">
                <div class="logo"><a href="#"><img src="<?php echo get_template_directory_uri();?>/images/logo.png" class="img-responsive" alt="Ron Ruth"></a></div>
            </div>
            <div class="col-md-9 col-sm-9">
                <ul class="social">
                    <li><a href="#"><i class="fa fa-facebook">&nbsp;</i></a></li>
                    <li><a href="#"><i class="fa fa-twitter">&nbsp;</i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus">&nbsp;</i></a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="navigation">
                    <ul>
                        <li><a href="#">home</a></li>
                        <li><a href="#">about us</a></li>
                        <li><a href="#">events calendar</a></li>
                        <li class="active"><a href="#">learning resources</a></li>
                    </ul>
                </div>
                <div class="mobile-menu">
                  <a href="#" class="menu-icon" style="display: block;">
                    <span class="span bar top" style="background-color: #fff;">&nbsp;</span>
                    <span class="span bar middle" style="background-color: #fff;">&nbsp;</span>
                    <span class="span bar bottom" style="background-color: #fff;">&nbsp;</span>
                  </a>
                  <div class="main-menu">
                    <ul>
                        <li><a href="#">home</a></li>
                        <li><a href="#">about us</a></li>
                        <li><a href="#">events calendar</a></li>
                        <li class="active"><a href="#">learning resources</a></li>
                    </ul>
                  </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="banner-txt text-center">
                    <h1>Grab your <small>#</small>INSPIRAMAGINATIVITY on dvd!</h1><br>
                    <h1>on dvd!</h1>
                    <span>(Get FREE SHIPPING Within The Continental U.S.)</span>
                    <h2>Celebrate INSPIRAMAGINATIVITY</h2><pre>TM</pre>
                    <p>The Playful Blending Of Inspiration, Imagination & Creativity
To Produce Profitable Business Solutions For Wedding & DJ Professionals..</p>
                </div>
            </div>
        </div>
    </div>
</header>
<section class="bestselling">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>best selling product</h4>
                <p class="selling-content">​​(Get FREE SHIPPING Within The Continental U.S.) Celebrate INSPIRAMAGINATIVITY™:The Playful Blending Of Inspiration, Imagination &amp; CreativityTo Produce Profitable Business Solutions For Wedding &amp; DJ Professionals. ​Purchase Via PayPal Below!</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-3">
                <div class="book-block">
                    <div class="image">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri();?>/images/book1.jpg" alt="Book" class="img-responsive">
                            <span class="price">$10</span>
                        </a>
                        <span class="buynow"><a href="<?php echo site_url();?>/add-to-cart=<?php echo get_the_ID();?>" class="blog-title-link">Buy Now</a></span>
                    </div>
                    <p>Product name here</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <div class="book-block">
                    <div class="image">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri();?>/images/book2.jpg" alt="Book" class="img-responsive">
                            <span class="price">$10</span>
                        </a>
                        <span class="buynow"><a href="<?php echo site_url();?>/add-to-cart=<?php echo get_the_ID();?>" class="blog-title-link">Buy Now</a></span>
                    </div>
                    <p>Product name here</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <div class="book-block">
                    <div class="image">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri();?>/images/book3.jpg" alt="Book" class="img-responsive">
                            <span class="price">$10</span>
                        </a>
                        <span class="buynow"><a href="<?php echo site_url();?>/add-to-cart=<?php echo get_the_ID();?>" class="blog-title-link">Buy Now</a></span>
                    </div>
                    <p>Product name here</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <div class="book-block">
                    <div class="image">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri();?>/images/book4.jpg" alt="Book" class="img-responsive">
                            <span class="price">$10</span>
                        </a>
                        <span class="buynow"><a href="<?php echo site_url();?>/add-to-cart=<?php echo get_the_ID();?>" class="blog-title-link">Buy Now</a></span>
                    </div>
                    <p>Product name here</p>
                </div>
            </div>
        </div>
        <div class="clear">&nbsp;</div>
        <div class="row">
            <div class="col-md-3 col-sm-3">
                <div class="book-block">
                    <div class="image">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri();?>/images/book1.jpg" alt="Book" class="img-responsive">
                            <span class="price">$10</span>
                        </a>
                        <span class="buynow"><a href="<?php echo site_url();?>/add-to-cart=<?php echo get_the_ID();?>" class="blog-title-link">Buy Now</a></span>
                    </div>
                    <p>Product name here</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <div class="book-block">
                    <div class="image">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri();?>/images/book2.jpg" alt="Book" class="img-responsive">
                            <span class="price">$10</span>
                        </a>
                        <span class="buynow"><a href="<?php echo site_url();?>/add-to-cart=<?php echo get_the_ID();?>" class="blog-title-link">Buy Now</a></span>
                    </div>
                    <p>Product name here</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <div class="book-block">
                    <div class="image">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri();?>/images/book3.jpg" alt="Book" class="img-responsive">
                            <span class="price">$10</span>
                        </a>
                        <span class="buynow"><a href="<?php echo site_url();?>/add-to-cart=<?php echo get_the_ID();?>" class="blog-title-link">Buy Now</a></span>
                    </div>
                    <p>Product name here</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <div class="book-block">
                    <div class="image">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri();?>/images/book4.jpg" alt="Book" class="img-responsive">
                            <span class="price">$10</span>
                        </a>
                        <span class="buynow"><a href="<?php echo site_url();?>/add-to-cart=<?php echo get_the_ID();?>" class="blog-title-link">Buy Now</a></span>
                    </div>
                    <p>Product name here</p>
                </div>
            </div>
        </div>
        <div class="row">
            <a href="<?php echo site_url();?>/shop" class="view-more">view more</a>
        </div>
        <div class="row">
           <p class="no-paypal">no paypal account? click here to visit my <a href="#">square store</a></p>
        </div>
    </div>
</section>

<?php get_footer();?>