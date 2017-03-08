<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

$blog_args = array(
	'post_type' => 'post',
	'posts_per_page' => 3,
	'order_by' => 'id',
	'order' => 'DESC'
);
$blog_query = new WP_Query($blog_args);


$about_page_args = array(
	'post_type' => 'page',
	'page_id' => 29
);
$about_page_query = new WP_Query($about_page_args); 
?>

	<footer>
    <div class="footer">
        <div class="container">



            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="call">
                        <a href="javascript:void(0);">
                            <i class="fa fa-phone">&nbsp;</i>
                            <span><?php dynamic_sidebar('sidebar-2');?></span>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="footer-logo">
                        <a href="<?php echo site_url();?>">ron ruth.com</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="address">
                        <ul>
                            <li><img src="<?php echo get_template_directory_uri();?>/images/envelope.jpg" alt="envelope" class="img-responsive"></li>
                            <li>Mail: <a href="mailto:ron@ronruth.com">ron@ronruth.com</a></li>
                        </ul>
                        <ul>
                            <li><img src="<?php echo get_template_directory_uri();?>/images/location.png" alt="location" class="img-responsive"></li>
                            <li><?php dynamic_sidebar('sidebar-3');?></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="clear">&nbsp;</div>


            <div class="row">
            <?php if($about_page_query->have_posts()):?>
            	<?php while($about_page_query->have_posts()):$about_page_query->the_post();?>
            		<?php $about_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()));
                        	?>
                <div class="col-md-2 col-sm-2">

                    <h6><?php echo get_the_title();?></h6>
                    <img src="<?php echo($about_image[0]!="")?$about_image[0]:""; ?>" class="img-responsive" alt="aboutus">
                </div>
                <div class="col-md-3 col-sm-3">
                    <p class="about-txt"><?php echo get_the_content();?></p>
                    <ul class="social">
                        <li><a href="https://www.facebook.com/"><i class="fa fa-facebook">&nbsp;</i></a></li>
                        <li><a href="https://twitter.com/"><i class="fa fa-twitter">&nbsp;</i></a></li>
                        <li><a href="https://plus.google.com/"><i class="fa fa-google-plus">&nbsp;</i></a></li>
                    </ul>
                </div>
            <?php endwhile;?>
            <?php endif;?>
                <div class="col-md-3 col-sm-3">
                    <h6>newsletter</h6>
                    <p class="newletter-head">Signup for our weekly newsletter and get the latest updtaes</p>
                    <?php echo do_shortcode('[mc4wp_form id="55"]');?>
                 </div>
                <div class="col-md-4 col-sm-4">
                    <h6>From blog</h6>
                    <div class="blog">
                    <?php if($blog_query->have_posts()):?>
                        <ul>
                        <?php while($blog_query->have_posts()):$blog_query->the_post();?>
                        	<?php $blog_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()));
                        	?>
                            <li>
                                <a href="<?php echo get_permalink();?>">
                                    <img src="<?php echo ($blog_image[0]!="")?$blog_image[0]:"";?>" alt="Blog" class="img-responsive">
                                    ><?php echo get_the_title();?>
                                    <span class="date"><?php echo get_the_date('M j Y');?></span>
                                </a>
                            </li>
                           
                        <?php endwhile;?>
                        </ul>
                    <?php endif;?>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12">
                    <p class="copyright">Copyright &copy; RonRuth. All rights reserved</p>
                </div>
            </div>


        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
