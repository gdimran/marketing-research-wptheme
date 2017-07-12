
<?php
/**
 * Template Name: Contact Page Template
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
			<h1><a href="<?php the_permalink(); ?>">  <?php the_title(); ?></a></h1>
			<p><?php the_subtitle(); ?></p>
			</div><!-- .overlay -->
					</div><!-- .site-width -->
	</div><!-- #banner -->
<?php endwhile;
		endif;
		?>
	<div class="clearfix"></div>
<div id="primary" class="contact-page container">
		<div id="main" class="col-md-6 col-xm-12">

			
			<div class="intro-text">
					<p></p><p>At Creative Medical Research, we’re here to help with all your medical device market research needs. </p>
<p>If you have a specific project in mind, or would like to find out 
more about our market research services, just drop us a message on the 
Contact Form below.</p>
<p>If you are interested in taking part in an advertised study, please email recruitment@creativemedicalresearch.com</p>
<p></p>
				</div><!-- .intro-text -->
			
			
			<div class="form-wrap">
            	<?php echo do_shortcode ('[contact-form-7 id="60" title="Contact form"]'); ?>
				
            </div><!-- .form-wrap -->
		</div><!-- #main -->		

		
		<div class="col-md-6 col-xm-12">
			<div class="map">
            	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6701.800246025324!2d-117.2073057!3d32.8743619!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dc073244120117%3A0x16f7406c1613a535!2sLa+Jolla+Centre+I%2C+4660+La+Jolla+Village+Dr%2C+San+Diego%2C+CA+92121%2C+USA!5e0!3m2!1sen!2sau!4v1492848293966" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
			
			<aside class="contact-info">
				
									<address class="address col-md-6">
						<h3>Address</h3>
						9 Pegasus<br>
Orion Court<br>
Gt Blakenham<br>
Ipswich<br>
Suffolk IP6 0LW, UK					</address><!-- .address -->
				
				<ul class="col-md-6">
					
											<li>
							<h3>Telephone</h3>
							<p>+44(0)1473 832211</p>
						</li>
					
					
											<li>
							<h3>Email</h3>
							<p>
								<a href="mailto:enquiries@creativemedicalresearch.com">enquiries@creativemedicalresearch.com</a>
							</p>
						</li>
									</ul>
			</aside><!-- .contact-info -->
		</div><!-- #sidebar -->
	</div><!-- .site-width -->
</div><!-- #primary -->



<?php get_footer(); ?>