
<?php
/**
 * Template Name: Blog Page Template
 *
 *
 * @package Research
 */

get_header(); 

	
global $post;
?>
<?php if(have_posts()):
		while(have_posts()): the_post();?>
	<div id="banner" data-parallax="scroll" data-speed="0.5" data-image-src="<?php bloginfo('template_url'); ?>/img/cmr_standard_banner.jpg">
        
		<div class="container">
			
			<div class="overlay col-md-12">
                <<h1><a href="<?php the_permalink(); ?>">  <?php the_title(); ?></a></h1>
			<p><?php the_subtitle(); ?></p>
			</div><!-- .overlay -->
					</div><!-- .site-width -->
	</div><!-- #banner -->	
    
    
	<div class="clearfix"></div>
	<div id="primary" class="page container">


			
			<div id="main" class="col-md-6">
            
            
				<?php the_content(); ?>
							
				
							 
		</div><!-- .content-blocks -->
		

			
			<div id="sidebar" class="col-md-6">
                <div class="thumbnail_video"><?php echo do_shortcode('[featured-video-plus]'); ?></div>
                
                <div class="thumbnail_image"><?php the_post_thumbnail(); ?></div>
				
                <?/*php get_sidebar();*/ ?>
	
			</div><!-- #sidebar -->
	</div><!-- #primary -->

<?php endwhile;
		endif;
		?>

<?php get_footer(); ?>