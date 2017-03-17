<?php 
/*
*Template Name:About Us Page
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
<div class="page-scroll-buttons">
	<ul>
		<li class="current"><a href="#about-header">&nbsp;</a></li>
		<li><a href="#wedding-planner">&nbsp;</a></li>
		<li><a href="#performer">&nbsp;</a></li>
		<li><a href="#mentor">&nbsp;</a></li>
		<li><a href="#teacher">&nbsp;</a></li>
		<li><a href="#contact">&nbsp;</a></li>
	</ul>
</div>
<header class="about-header" id="about-header">
	<div class="transparent-blue"></div>
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
                        <li class="active"><a href="#">about us</a></li>
                        <li><a href="#">events calendar</a></li>
                        <li><a href="#">learning resources</a></li>
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
                        <li class="active"><a href="#">about us</a></li>
                        <li><a href="#">events calendar</a></li>
                        <li><a href="#">learning resources</a></li>
                    </ul>
                  </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="banner-txt text-center">
                	<h1>Creator of</h1>
                    <h2>"INSPIRAMAGINATIVITY.<pre>TM</pre>"</h2>
                	<?php $my_post = get_page_by_title( 'About Us', OBJECT, 'post' );
						$id=$my_post->ID; 
						$post = get_post($id); 
						$content = apply_filters('the_content', $post->post_content); 
						echo $content;  
                	?>

                    <!--<h1>Creator of</h1>
                    <h2>"INSPIRAMAGINATIVITY.<pre>TM</pre>"</h2>
                    <p>I'm a storyteller, performer, wish granter, mentor, teacher, entrepreneur, innovator, writer, husband, grandpa, friend to all, and unabashed Disney geek (don't judge me).</p>-->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="scroller">
            	<span>scroll to discover my <br>story</span>
            	<a href="#about-block"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</header>
<section class="about-block" id="about-block">
	<div class="container">
		<?php global $post;
$args = array( 'numberposts' => 4, 'category_name' => 'about-us' ,'orderby'=>'DESC');
$q = new WP_Query( $args);

if ( $q->have_posts() ) {
    while ( $q->have_posts() ) {
    $q->the_post(); ?>
    <div class="row">
			<div class="each-block" id="<?php the_title();?>">
				<div class="animation-element slide-bottom">
					<h3><?php the_title();?></h3>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="animation-element slide-left">
							<img src="<?php echo get_template_directory_uri();?>/images/about1.jpg" class="img-responsive">
						</div>
					</div>
					<div class="col-md-6">
						<div class="animation-element slide-right">
							<?php the_content();?>
						</div>
					</div>
				</div>
			</div>
		</div>
       <?php  the_title();?>
    <?php }
    wp_reset_postdata();
}?>
		
		<!--<div class="row">
			<div class="each-block" id="performer">
				<div class="animation-element slide-bottom">
					<h3>performer</h3>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="animation-element slide-left">
							<p>I love living the dream of making positive changes in people's lives. With 45+ years in business management, including 25+ years of on the front lines of the wedding industry as a certified, Wedding Entertainment Director,® there's no greater thrill than being able to share my experience, expertise and passion to help other small business owners and entrepreneurs succeed.</p>
							<p>Although I never planned to find myself in the wedding industry, I'm glad I arrived. As the owner of Ron Ruth Wedding Entertainment, my clients enjoyed the experience of my passionate, collaborative and very personal approach to helping them design and create unforgettably fun wedding receptions. </p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="animation-element slide-right">
							<img src="<?php echo get_template_directory_uri();?>/images/about2.jpg" class="img-responsive">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="each-block" id="mentor">
				<div class="animation-element slide-bottom">
					<h3>mentor</h3>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="animation-element slide-left">
							<img src="<?php echo get_template_directory_uri();?>/images/about3.jpg" class="img-responsive">
						</div>
					</div>
					<div class="col-md-6">
						<div class="animation-element slide-right">
							<p>I consider it an honor to share my talent and expertise  as a mentor and personal wedding business coach and I appreciate being able to share my passion as speaker at regional and national wedding conferences; including the international, Wedding MBA Conference in Las Vegas, the Association of Bridal Consultants, the National Association of Catering Executives,  the American Disc Jockey Association, the Wedding Marketing Expo and more. I've also has been a featured speaker at Mobile Beat Magazine’s MBLV international Disc Jockey conference on three occasions and will be making a 4th appearance in March of 2017.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="each-block" id="teacher">
				<div class="animation-element slide-bottom">
					<h3>teacher</h3>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="animation-element slide-left">
							<p>I feel fortunate that my highly informative, engaging and entertaining workshops and personalized training programs on delivering extraordinary client experiences have been well-reviewed by hundreds of wedding professionals nation wide. The success of those interactive programs led to has become a six-year+ stint as a contributor to  Disc Jockey News, a national, monthly periodical for professional entertainers. I also edited and contributed with credit to wedding industry luminary Peter Merry’s highly acclaimed, top-selling book about wedding fun, “The Best Wedding Reception…Ever!, which is now in its second edition as an e-book.” Currently I'm working on a new book of my own  for wedding professionals on the art of exceeding expectations through unexpected wedding magic.</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="animation-element slide-right">
							<img src="<?php echo get_template_directory_uri();?>/images/about3.jpg" class="img-responsive">
						</div>
					</div>
				</div>
			</div>
		</div>-->
		<div class="row">
			<div class="each-block" id="contact">
				<div class="animation-element slide-bottom">
					<h3>contact</h3>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="animation-element slide-left">
							<img src="<?php echo get_template_directory_uri();?>/images/desktop-icon.png" class="img-responsive">
						</div>
					</div>
					<div class="col-md-6">
						<div class="animation-element slide-right">
							<p>For speaking or consulting information,</p> 
							<p>please contact me via email,</p> 
							<p>Ron@RonRuth.com or</p> 
							<p>by phone/text (816) 224-4487</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
            <div class="scroller scrollTop">
            	<a href="#about-header"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
            	<span>back to top</span>
            </div>
        </div>
		<div class="clear">&nbsp;</div>
	</div>
</section>
<script type="text/javascript">
	jQuery(function ($){
		$(window).resize(function(){
			var windowHeight = $(this).height();
			$(".about-header").height(windowHeight);
		});

		var windowHeight = $(window).height();
		$(".about-header").height(windowHeight);

		$('a[href*=#]:not([href=#])').click(function() {
	        var target = $(this.hash);
	        target = target.length ? target : $('[name=' + this.hash.substr(1) +']');
	        if (target.length) {
	            $('html,body').animate({
	              scrollTop: target.offset().top
	            }, 1000);
	            return false;
	        }
	    });

	    /**********Page-scroll***********/
	    $(".page-scroll-buttons ul li a").click(function(){
	    	
	    	if($(".page-scroll-buttons ul li a").not($(this))){
	    		$(".page-scroll-buttons ul li a").parent().removeClass("current");
	    	}
	    	$(this).parent().addClass("current");
	    });
	});
</script>

<script type="text/javascript">
	jQuery(function($) {

	  //window and animation items
	  var animation_elements = $.find('.animation-element');
	  var web_window = $(window);

	  //check to see if any animation containers are currently in view
	  function check_if_in_view() {
	    //get current window information
	    var window_height = web_window.height();
	    var window_top_position = web_window.scrollTop();
	    var window_bottom_position = (window_top_position + window_height);

	    //iterate through elements to see if its in view
	    $.each(animation_elements, function() {

	      //get the element sinformation
	      var element = $(this);
	      var element_height = $(element).outerHeight();
	      var element_top_position = $(element).offset().top;
	      var element_bottom_position = (element_top_position + element_height);

	      //check to see if this current container is visible (its viewable if it exists between the viewable space of the viewport)
	      if ((element_bottom_position >= window_top_position) && (element_top_position <= window_bottom_position)) {
	        element.addClass('in-view');
	      } else {
	        element.removeClass('in-view');
	      }
	    });

	  }

	  //on or scroll, detect elements in view
	  $(window).on('scroll resize', function() {
	      check_if_in_view()
	    })
	    //trigger our scroll event on initial load
	  $(window).trigger('scroll');

	});
</script>


<?php get_footer();?>