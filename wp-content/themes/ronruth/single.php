<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

		 <div class="row">
            <div class="col-md-12">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
		$thumbnail = get_the_post_thumbnail_url();
		?>
	<section class="single-blog business bestselling" id="services">
    <div class="container-fluid">
    	<div class="row row-eq-height">
		<div class="col-md-6 col-sm-4">
                <div class="row">
                    <div class="business-img">
                        <?php 
                            if ( has_post_thumbnail() ) { ?>
                        <img src="<?php echo $thumbnail;?>" class="img-responsive" alt="event">
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-8">
                <div class="row">
                    <div class="single_blog bold-head"><?php echo get_the_title();?></div>
                    <div class="single_blog business-descr">
                        <?php the_content();?>
                    </div>
                </div>
            </div>
        </div></div></section>
			<div class="col-md-12 col-sm-8 dark-bg">
			<div class="col-md-3 col-sm-8 dark-bg">	</div>
			<div class="col-md-6 col-sm-8 dark-bg single-blog_pagination">	
				<div class="page_nav_links">  
                           <div class="prev_next">
                              <div class="nav_left" style="width: 50%;float: left;">
                                  <span class="prev nav_link"> < Previous Event</span>
                                  <div class="prev_post"><?php previous_post_link('%link', '%title'); ?></div>
                              </div>
                               <div class="nav_right" style="width: 50%;float: right;text-align: right;">
                                  <span class="next nav_link">Next Event > </span>
                                  <div class="prev_post"><?php next_post_link('%link', '%title'); ?></div>
                              </div>
                          </div>
                </div></div>
			<div class="col-md-3 col-sm-8 dark-bg">	</div>
            </div>
            <div class="col-md-12 col-sm-8 dark-bg">
            	<div class="col-md-3 col-sm-8 dark-bg">	</div>
            <div class="col-md-6 col-sm-8 dark-bg single_blog_comment">
        			<?php 
        			// If comments are open or we have at least one comment, load up the comment template.
        			if ( comments_open() || get_comments_number() ) :
        				comments_template();
        			endif;?>
			     </div>
				<div class="col-md-3 col-sm-8 dark-bg">	</div>
            </div>
			<?php endwhile; ?>
		
<div class="col-md-6 col-sm-8 dark-bg">
		</main><!-- .site-main -->
	</div><!-- .content-area -->
</div></div></div>
<?php get_footer(); ?>
