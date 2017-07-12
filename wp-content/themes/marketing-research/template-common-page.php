
<?php
/**
 * Template Name: Common Page Template
 *
 *
 * @package Research
 */

get_header(); 
?>

	<div id="banner" data-parallax="scroll" data-speed="0.5" data-image-src="<?php bloginfo('template_url'); ?>/img/cmr_standard_banner.jpg">
		<div class="container">
					<?php
global $post;
$args = array( 'posts_per_page' => 1, 'post_type'=> 'event', 'orderby' => 'menu_order', 'order' => 'ASC' );
$myposts = get_posts( $args );
foreach( $myposts as $post ) : setup_postdata($post); ?>
 
<?php 
   $event_subtitle= get_post_meta($post->ID, 'event_subtitle', true); 
   $event_date= get_post_meta($post->ID, 'event_date', true); 

?>
 
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
<?php endforeach; ?>
			<div class="overlay col-md-12">
					<h1>Who we are</h1>
					<p>Specialists in medical device market research</p>
                    <p><?php echo $event_date; ?></p>
			</div><!-- .overlay -->
					</div><!-- .site-width -->
	</div><!-- #banner -->

	<div class="clearfix"></div>
	<div id="primary" class="page container">
		<div class="site-width">

			
			<div id="main" class="col-md-8">
            
            
				
									<div class="intro-text">
                                    
<p>There aren’t many companies that can claim to have been 
focused solely on medical devices for as long as the team here at 
Creative Medical Research. With over 16 years dedicated to device 
research, we understand what works and what can work for your business 
needs. Watch our short video to learn about how we work - and how we can
 add value to your next research project.</p>
					</div><!-- .intro-text -->
				
				
							<div class="content-blocks">
			
				
															<div class="text">
							<p>That’s not to say that we only focus our work on devices. Our 
research encompasses all of the services, accessories and marketing that
 work to bring your device to market –all wrapped up with the insight 
you need to help you succeed.</p>
<p>At Creative Medical Research we understand the work you’ve already 
committed to create a great medical device. From your initial concept 
right through to commercialisation, we have the experience to empathise 
with you and to help you to overcome any challenges you many face along 
the way.</p>
<p>We understand your market, your audience and the device usability 
issues that may have an impact on them. When it comes to therapies, we 
also have a good understanding of the conditions that are being treated,
 as well as the physical, emotional and logistical challenges faced by 
patients, therapists and the wider market.</p>
						</div><!-- .inner -->
					
				
							
				
														<a class="button page-link" href="http://www.creativemedicalresearch.com/team/">
						Meet our team					</a><!-- .button -->

				
							
				
														<a class="button page-link" href="http://www.creativemedicalresearch.com/global-reach/">
						View our global reach					</a><!-- .button -->

				
							 
		</div><!-- .content-blocks -->
	
			</div><!-- #main -->		

			
			<div id="sidebar" class="class="col-md-4"">
				
							<aside class="sidebar-blocks">
							
															<div class="video">
							<div class="fluid-width-video-wrapper" style="padding-top: 56.5%;"><iframe src="Who%20we%20are%20_%20Creative%20Medical%20Research_files/rtVHaWT_uk0.htm" allowfullscreen="" id="fitvid559408" frameborder="0"></iframe></div>						</div><!-- .video-container -->
								  								
															<div class="big-image">
							<img src="Who%20we%20are%20_%20Creative%20Medical%20Research_files/141105-511-630x419.jpg" class="attachment-big_image size-big_image" alt="" srcset="http://www.creativemedicalresearch.com/wp-content/uploads/2016/01/141105-511-630x419.jpg 630w, http://www.creativemedicalresearch.com/wp-content/uploads/2016/01/141105-511-300x200.jpg 300w, http://www.creativemedicalresearch.com/wp-content/uploads/2016/01/141105-511-768x511.jpg 768w, http://www.creativemedicalresearch.com/wp-content/uploads/2016/01/141105-511-1024x681.jpg 1024w, http://www.creativemedicalresearch.com/wp-content/uploads/2016/01/141105-511-340x226.jpg 340w" sizes="(max-width: 630px) 100vw, 630px" width="630" height="419">						</div><!-- .big-image -->
					
				
							 
		</aside><!-- .sidebar-blocks -->
	
			</div><!-- #sidebar -->
		</div><!-- .site-width -->
	</div><!-- #primary -->



<?php get_footer(); ?>