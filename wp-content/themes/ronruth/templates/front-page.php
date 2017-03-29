<?php 
/*
*Template Name:Fornt Page Template
*/
get_header();
$blog_args = array(
    'post_type' => 'post',
    'posts_per_page' => 6,
    'order_by' => 'id',
    'order' => 'DESC'
);
$blog_query = new WP_Query($blog_args);

$page_args = array(
    'post_type' => 'page',
    'page_id' => 27
);
$page_query = new WP_Query($page_args);


$product_args = array(
    'post_type' => 'product',
    'posts_per_page' => 4,
    'order_by' => 'id',
    'order' => 'DESC'

);
$product_query = new Wp_Query($product_args);
?>
<section class="workshop">
    <div class="container">
        <a class="side_events">EVENTS</a>
        <div class="row row-eq-height">
            <div class="col-md-3">
                <div class="workshp-block">
                    <div class="image">
                        <?php $blog_image1 = wp_get_attachment_image_src(get_post_thumbnail_id($blog_query->posts[0]->ID ),'full');?>
                        <a href="<?php echo get_permalink($blog_query->posts[0]->ID);?>"><img src="<?php echo ($blog_image1[0]!="")?$blog_image1[0]:"";?>" alt="workshop" class="img-responsive"></a>
                    </div>
                    <div class="content">
                        <h3><a class="blog-title-link" href="<?php echo get_permalink($blog_query->posts[0]->ID);?>"><?php echo $blog_query->posts[0]->post_title;?></a></h3>
                        <div class="date"><?php echo date('d/m/Y', strtotime($blog_query->posts[0]->post_date));?></div>
                        <p><?php echo (strlen($blog_query->posts[0]->post_content)>130)? substr($blog_query->posts[0]->post_content,0,130)."...":$blog_query->posts[0]->post_content;?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="workshp-middle-block">
                    <div class="content">
                    <?php if($page_query->have_posts()):?>
                        <?php while($page_query->have_posts()):$page_query->the_post();?>
                        <p class="big-text"><?php echo get_the_title();?></p>
                        <p><?php echo get_the_content();?></p>
                    <?php endwhile;?>
                    <?php endif;?>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="workshp-block">
                    <div class="image">
                        <?php $blog_image2 = wp_get_attachment_image_src(get_post_thumbnail_id($blog_query->posts[1]->ID ),'full');?>
                       <a href="<?php echo get_permalink($blog_query->posts[1]->ID);?>"><img src="<?php echo ($blog_image2[0]!="")?$blog_image2[0]:"";?>" alt="workshop" class="img-responsive"></a>
                    </div>
                    <div class="content">
                        <h3><a class="blog-title-link"href="<?php echo get_permalink($blog_query->posts[1]->ID);?>"><?php echo $blog_query->posts[1]->post_title;?></a></h3>
                        <div class="date"><?php echo date('d/m/Y', strtotime($blog_query->posts[1]->post_date));?></div>
                        <p><?php echo (strlen($blog_query->posts[1]->post_content)>130)? substr($blog_query->posts[1]->post_content,0,130)."...":$blog_query->posts[1]->post_content;?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear">&nbsp;</div>
        <div class="row">
            <div class="col-md-3">
                <div class="workshp-block">
                    <div class="image">
                        <?php $blog_image3 = wp_get_attachment_image_src(get_post_thumbnail_id($blog_query->posts[2]->ID ),'full');?>
                        <a href="<?php echo get_permalink($blog_query->posts[2]->ID);?>"><img src="<?php echo ($blog_image3[0]!="")?$blog_image3[0]:"";?>" alt="workshop" class="img-responsive"></a>
                    </div>
                    <div class="content">
                        <h3><a class="blog-title-link" href="<?php echo get_permalink($blog_query->posts[2]->ID);?>"><?php echo $blog_query->posts[2]->post_title;?></a></h3>
                        <div class="date"><?php echo date('d/m/Y', strtotime($blog_query->posts[2]->post_date));?></div>
                        <p><?php echo (strlen($blog_query->posts[2]->post_content)>130)? substr($blog_query->posts[2]->post_content,0,130)."...":$blog_query->posts[2]->post_content;?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="workshp-block">
                    <div class="image">
                        <?php $blog_image4 = wp_get_attachment_image_src(get_post_thumbnail_id($blog_query->posts[3]->ID ),'full');?>
                        <a href="<?php echo get_permalink($blog_query->posts[3]->ID);?>"><img src="<?php echo ($blog_image4[0]!="")?$blog_image4[0]:"";?>" alt="workshop" class="img-responsive"></a>
                    </div>
                    <div class="content">
                        <h3><a class="blog-title-link" href="<?php echo get_permalink($blog_query->posts[3]->ID);?>"><?php echo $blog_query->posts[3]->post_title;?></a></h3>
                        <div class="date"><?php echo date('d/m/Y', strtotime($blog_query->posts[3]->post_date));?></div>
                        <p><?php echo (strlen($blog_query->posts[3]->post_content)>130)? substr($blog_query->posts[3]->post_content,0,130)."...":$blog_query->posts[3]->post_content;?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="workshp-block">
                    <div class="image">
                        <?php $blog_image5 = wp_get_attachment_image_src(get_post_thumbnail_id($blog_query->posts[4]->ID ),'full');?>
                        <a href="<?php echo get_permalink($blog_query->posts[4]->ID);?>"><img src="<?php echo ($blog_image5[0]!="")?$blog_image5[0]:"";?>" alt="workshop" class="img-responsive"></a>
                    </div>
                    <div class="content">
                        <h3><a class="blog-title-link" href="<?php echo get_permalink($blog_query->posts[4]->ID);?>"><?php echo $blog_query->posts[4]->post_title;?></a></h3>
                        <div class="date"><?php echo date('d/m/Y', strtotime($blog_query->posts[4]->post_date));?></div>
                        <p><?php echo (strlen($blog_query->posts[4]->post_content)>130)? substr($blog_query->posts[4]->post_content,0,130)."...":$blog_query->posts[4]->post_content;?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="workshp-block">
                    <div class="image">
                        <?php $blog_image6 = wp_get_attachment_image_src(get_post_thumbnail_id($blog_query->posts[5]->ID ),'full');?>
                       <a href="<?php echo get_permalink($blog_query->posts[5]->ID);?>"> <img src="<?php echo ($blog_image6[0]!="")?$blog_image6[0]:"";?>" alt="workshop" class="img-responsive"></a>
                    </div>
                    <div class="content">
                        <h3><a class="blog-title-link" href="<?php echo get_permalink($blog_query->posts[5]->ID);?>"><?php echo $blog_query->posts[5]->post_title;?></a></h3>
                        <div class="date"><?php echo date('d/m/Y', strtotime($blog_query->posts[5]->post_date));?></div>
                        <p><?php echo (strlen($blog_query->posts[5]->post_content)>130)? substr($blog_query->posts[5]->post_content,0,130)."...":$blog_query->posts[5]->post_content;?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bestselling">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>best selling product</h4>
                <p class="selling-content">​​(Get FREE SHIPPING Within The Continental U.S.) Celebrate INSPIRAMAGINATIVITY™:The Playful Blending Of Inspiration, Imagination &amp; CreativityTo Produce Profitable Business Solutions For Wedding &amp; DJ Professionals. ​Purchase Via PayPal Below!</p>
            </div>
        </div>
        <div class="row">
        <?php if($product_query->have_posts()):?>
            <?php while($product_query->have_posts()):$product_query->the_post();?>
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
                        <span class="buynow"><a href="<?php echo site_url();?>/add-to-cart=<?php echo get_the_ID();?>" class="blog-title-link">Buy Now</a></span>
                    </div>
                    <p><?php echo get_the_title();?></p>
                </div>
            </div>
        <?php endwhile;?>
        <?php endif;?>
        </div>
        <div class="row">
            <a href="<?php echo site_url();?>/shop" class="view-more">view more</a>
        </div>
        <div class="row">
           <p class="no-paypal">no paypal account? click here to visit my <a href="#">square store</a></p>
        </div>
    </div>
</section>


<section class="contact-form">
    <div class="container">
        <div class="row">
            <div class="col-md-2 hidden-xs hidden-sm">&nbsp;</div>
            <div class="col-md-8">
                <h5>don't be shy!</h5>
                <p>I'd Love to hear from u</p>
                <?php echo do_shortcode('[contact-form-7 id="52" title="Contact form 1"]');?>
            </div>
            <div class="col-md-2 hidden-xs hidden-sm">&nbsp;</div>
        </div>
    </div>
</section>
<?php get_footer();?>