<?php 
/*
*Template Name:Events calendar Page
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
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/fonts/font-awesome/css/font-awesome.min.css" type="text/css">
    

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" ></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/custom.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery-ui.js"></script>
	<?php wp_head();?>
    <script>
      $( function() {
        $( "#accordion" ).accordion();
      } );
    </script>
</head>
<body>
<header class="event-header">
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
                       <li><a href="<?php echo site_url();?>">home</a></li>
                        <li><a href="<?php echo site_url();?>/about-us">about us</a></li>
                        <li><a href="<?php echo site_url();?>">events calendar</a></li>
                        <li class="active"><a href="<?php echo site_url();?>/learning-resources">learning resources</a></li>
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
                       <li><a href="<?php echo site_url();?>">home</a></li>
                        <li><a href="<?php echo site_url();?>/about-us">about us</a></li>
                        <li><a href="<?php echo site_url();?>">events calendar</a></li>
                        <li class="active"><a href="<?php echo site_url();?>/learning-resources">learning resources</a></li>
                    </ul>
                  </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
            	<div class="prime-event">
            		<span class="event-date">wednesday 5th april</span>
            		<br>
            		<h1>Services</h1>
            	</div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
            	<div class="scroller">
            		<a href="#">
            			<img src="<?php echo get_template_directory_uri();?>/images/arrow-down.png" class="img-responsive" alt="arrow-down">
            		</a>
            		<p>scroll down</p>
            	</div>
            </div>
        </div>
        <div class="clear">&nbsp;</div>
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <img src="<?php echo get_template_directory_uri();?>/images/event1.jpg" class="img-responsive" alt="event">
                </div>
            </div>
            <div class="col-md-6">
                <div class="spring-training text-left">
                    <div class="bold-head">About</div>
                    <h4>spring training</h4>
                    <h5>business training</h5>
                    <span class="event-date">5th april</span>
                    <p>The heat of the wedding season is almost upon us and wedding professionals, just like you, will be swinging for the fences to make it a championship season for their businesses. But, before taking to your field of dreams---you’ll want to sharpen your game, your talent and your skills with a fun day of business training that will make you the heavy hitting wedding professional that every bride & groom wants on their team.</p>
                </div> 
            </div>
        </div>
    </div>
</header>
<section class="coaches">
    <div class="container-fluid">
        <div class='row'>
            <div class="col-md-12 nopadding">
                <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                    <!-- Carousel Slides / Quotes -->
                    <div class="carousel-inner">
                      <!-- Quote 1 -->
                        <div class="item active">
                            <div class="col-sm-6">
                                <div class="coach-descrp">
                                    <span class="title-event">spring training coaches</span>
                                    <span class="coach-name">Peter Merry, WED®</span>
                                    <span class="coach-activity">pitching coach</span>
                                    <p>Peter is a noted wedding business sales trainer and the famed author of “The Best Wedding Reception...Ever!” Peter will help you improve the pitch you make to potential customers with two amazing presentations, “Better Consultations Bring Better Bookings” and “Showcasing Your V-A-L-U-E.”</p>
                                    <a href="#">know more</a>
                                    <strong>You'll learn how to:</strong>
                                    <ul>
                                        <li>Connect more effectively with potential clients during a sales consultation.</li>
                                        <li>Communicate your value in a manner that makes you the most attractive option.  </li>
                                        <li>Develop a game plan that will bring more confidence to your sales conversations.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="coach-img">
                                        <img src="<?php echo get_template_directory_uri();?>/images/event2.jpg" class="img-responsive" alt="event">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-sm-6">
                                <div class="coach-descrp">
                                    <span class="title-event">spring training coaches</span>
                                    <span class="coach-name">Peter Merry, WED®</span>
                                    <span class="coach-activity">pitching coach</span>
                                    <p>Peter is a noted wedding business sales trainer and the famed author of “The Best Wedding Reception...Ever!” Peter will help you improve the pitch you make to potential customers with two amazing presentations, “Better Consultations Bring Better Bookings” and “Showcasing Your V-A-L-U-E.”</p>
                                    <a href="#">know more</a>
                                    <strong>You'll learn how to:</strong>
                                    <ul>
                                        <li>Connect more effectively with potential clients during a sales consultation.</li>
                                        <li>Communicate your value in a manner that makes you the most attractive option.  </li>
                                        <li>Develop a game plan that will bring more confidence to your sales conversations.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="coach-img">
                                        <img src="<?php echo get_template_directory_uri();?>/images/event2.jpg" class="img-responsive" alt="event">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-sm-6">
                                <div class="coach-descrp">
                                    <span class="title-event">spring training coaches</span>
                                    <span class="coach-name">Peter Merry, WED®</span>
                                    <span class="coach-activity">pitching coach</span>
                                    <p>Peter is a noted wedding business sales trainer and the famed author of “The Best Wedding Reception...Ever!” Peter will help you improve the pitch you make to potential customers with two amazing presentations, “Better Consultations Bring Better Bookings” and “Showcasing Your V-A-L-U-E.”</p>
                                    <a href="#">know more</a>
                                    <strong>You'll learn how to:</strong>
                                    <ul>
                                        <li>Connect more effectively with potential clients during a sales consultation.</li>
                                        <li>Communicate your value in a manner that makes you the most attractive option.  </li>
                                        <li>Develop a game plan that will bring more confidence to your sales conversations.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="coach-img">
                                        <img src="<?php echo get_template_directory_uri();?>/images/event2.jpg" class="img-responsive" alt="event">
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    <!-- Carousel Buttons Next/Prev -->
                    <a data-slide="prev" href="#quote-carousel" class="left carousel-control">
                        <img src="<?php echo get_template_directory_uri();?>/images/arrow-left.png" class="img-responsive" alt="arrow-left">
                    </a>
                    <a data-slide="next" href="#quote-carousel" class="right carousel-control">
                        <img src="<?php echo get_template_directory_uri();?>/images/arrow-right.png" class="img-responsive" alt="arrow-right">
                    </a>
                </div>
            </div> 
        </div>
    </div>
</section>
<section class="business">
    <div class="container-fluid">
        <div class="row row-eq-height">
            <div class="col-md-6">
                <div class="row">
                    <div class="business-img">
                        <div class="transparent-dark"></div>
                        <span class="business-title">
                            <p>Business<strong>&</strong></p> 
                            <p><strong>idea</strong></p>
                        </span>
                        <img src="<?php echo get_template_directory_uri();?>/images/event3.jpg" class="img-responsive" alt="event">
                    </div>
                </div>
            </div>
            <div class="col-md-6 dark-bg">
                <div class="row">
                    <div class="bold-head">extra benefits</div>
                    <div class="business-descr">
                        <strong>Players Are Winners</strong>
                        <p>This day of spring training is an opportunity for every wedding professionals to make a notable improvement in their business. But that can’t happen if you’re sitting on the bench. Your participation is the only way to make this a winning event.</p>
                        <br>
                        <p>Every wedding professional in attendance will receive a $20.00 registration discount to attend the <a href="#">Wedding MBA Conference</a> in Las Vegas, October 2 - 4, 2017.</p>
                        <strong>Come To Learn. Laugh. Play. Grow.</strong>
                        <p>What's better than attending a conference like Wedding MBA? How about enjoying a fun day of highly educational content right here in Kansas City, all designed to help you increase sales, referrals and revenue? As a member of a small team of local wedding pros, you’ll learn, laugh, play and grow your business with the helpful guidance of two legendary coaches known for helping wedding professionals make the big plays.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="business faq">
    <div class="container-fluid">
        <div class="row row-eq-height">
            <div class="col-md-6 dark-bg">
                <div class="row">
                    <div class="bold-head">faq</div>
                    <div class="business-descr">
                        <h4>event faqs</h4>
                        <h5>find your answers</h5>
                        <div id="accordion" class="accordion">
                          <h3>How Many People Can I Bring?</h3>
                          <div>
                            <p>Unlike the real game of baseball, the size of your team has no limits. Anybody who wants to play can join us. Registration is only $25.00 for a 2-for-1 ticket, so feel free to bring along as many friends, co-workers or competitors as you’d like. </p>
                          </div>
                          <h3>I Have Questions?</h3>
                          <div>
                            <ul>
                                <li>Call or text Peter Merry directly at (949) 584-5338</li>
                                <li>Call or text Ron Ruth directly at (816) 224-4487</li>
                                <li>Email Ron: Ron@RonRuth.com<br>Email Peter: Peter@PeterMerry.com</li>
                            </ul>
                          </div>
                          <h3>How Do I Register?</h3>
                          <div>
                            <p>Registration fee is only $25.00 for a 2-for1 ticket.
To reserve seats for you and a guest, simply click the "Buy Now" button below. You will be redirected to the PayPal website to complete your payment. Please contact Ron (Ron@RonRuth.com) to be invoiced for groups of 6 or more</p>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="business-img">
                        <img src="<?php echo get_template_directory_uri();?>/images/event4.jpg" class="img-responsive" alt="event">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="register text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="#">Register</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>