
<?php
/**
 * Template Name: Blogs Page Template
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
			<p><?php the_subtitle(); ?></p>
			</div><!-- .overlay -->
					</div><!-- .site-width -->
	</div><!-- #banner -->	
    
    <?php endwhile;
		endif;
		?>


	<div class="clearfix"></div>
    <div id="portfolios" class="portfolio-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center wow zoomIn">
                    <div class="page-title">
                        <h2>Our Blogs</h2>
                    </div>
                </div>
            </div>
        </div>
           
        <div class="portfolio-wrapper">
            <div class="portfolio-menu wow zoomIn">
                
                
                        
                        <ul class="categories-filtes">
                            <?php
                                $args=array(
                                    'show_option_all'=> 'All',
                                    'exclude'        =>'1',
                                    'title_li'       =>__('')
                                    );
                                wp_list_categories($args);
                            ?>
                    
                        </ul>
               
                
                
            </div>
             
              <?php if(have_posts()): ?>
            <div id="blog-container" class="portfolio-items wow zoomIn">                
                    <figure id="single-blog" class="single-portfolio mystery paintings">
                      <?php while(have_posts()): the_post();?>
                            <?php get_template_part('content'); ?> 
                        <?php /*the_post_thumbnail('portfolio', array('class'=>'img-responsive')); ?>
                        <figcaption>
                            <h2><?php the_title(); ?></h2>
                            <p class="icon-links">
                                <a href=" <?php the_permalink(); ?>"><i class="li_world"></i></a>
                             
                            </p>
                            
                            <p class="description"><?php  the_content();*/ ?></p>
                                                        
                       <!-- </figcaption>	-->
                    </figure>                 
            </div> 
            <?php endwhile;
		endif;
		?>   
        </div>
            

    </div> <!-- End portfolio area -->
    
      


<?php get_footer(); ?>