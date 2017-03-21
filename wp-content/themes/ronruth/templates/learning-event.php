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
<section class="bestselling">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>best selling product</h4>
                <p class="selling-content">​​(Get FREE SHIPPING Within The Continental U.S.) Celebrate INSPIRAMAGINATIVITY™:The Playful Blending Of Inspiration, Imagination &amp; CreativityTo Produce Profitable Business Solutions For Wedding &amp; DJ Professionals. ​Purchase Via PayPal Below!</p>
            </div>
        </div>
        <div class="row">
                <?php $count = 1; if($product_query->have_posts()):?>

            <?php 
                
            while($product_query->have_posts()):$product_query->the_post();?>
                <?php $pro_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'full');
                $currency = get_woocommerce_currency_symbol();
                $price = get_post_meta( get_the_ID(), '_regular_price', true);
                ?>
            <div class="col-md-3 col-sm-3">
                <div class="book-block">
                    <div class="image">
                        <a href="<?php echo get_permalink();?>">
                            <img src="<?php echo ($pro_image[0]!="")?$pro_image[0]:"";?>" alt="Book" class="img-responsive">
                            <span class="price"><?php echo $currency;?><?php echo $price;?></span>
                        </a>
                        <span class="buynow">
                            <?php $add_to_cart = do_shortcode('[add_to_cart_url id="'.get_the_ID().'"]'); ?>
<a href="<?php echo $add_to_cart;?>" class="blog-title-link">Buy Now</a>
                        </span>
                    </div>
                    <p><?php echo get_the_title();?></p>
                </div>
            </div>
           <?php if ($count%4 == 0)
            {
                echo "<div class='clear'>&nbsp;</div>";
            }
            $count++;
        ?>
        <?php endwhile;?>
        <?php endif;?>

            <!--<div class="col-md-3 col-sm-3">
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
            </div>-->
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