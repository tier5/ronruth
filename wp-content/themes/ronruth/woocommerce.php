<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

//get_header(); ?>
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
	<?php wp_head();
    $product_args = array(
    'post_type' => 'product',
    'posts_per_page' => 8,
    'order_by' => 'id',
    'order' => 'DESC'

    );
    $product_query = new Wp_Query($product_args);

    ?>
	
</head>
<body <?php body_class( 'woocommerce' ); ?>>
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
                <div class="banner-txt text-center">
                    <?php if ( is_active_sidebar( 'sidebar-5' ) ) : ?>
    <div id="secondary" class="widget-area" role="complementary">
    <?php dynamic_sidebar( 'sidebar-6' ); ?>
     </div>
<?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</header>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="woocommerce">
		<?php woocommerce_content(); ?>
			</div>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
