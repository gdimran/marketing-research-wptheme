
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
           <?php $args = array(
            'post_type' => 'post',
            'posts_per_page' => -1,
        );

        $query = new WP_Query( $args );

        $tax = 'category';
        $terms = get_terms( $tax );
        $count = count( $terms );

        if ( $count > 0 ): ?>
            <div class="portfolio-menu wow zoomIn animated">
           
                
                 <ul>
                            <li class="active" data-filter="*">All</li>
                             <?php foreach ( $terms as $term ):
                				$term_link = get_term_link( $term, $tax ); ?>
                                
                                <li data-filter=".<?php  echo $term->slug; ?>"><?php echo $term->name; ?></li>
                    
                            <?php endforeach; ?>
                    
                  </ul>
            
            </div>
        <?php endif; ?>
       <div class="portfolio-items wow zoomIn">
        <?php if ( $query->have_posts() ): ?>
        
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
           		<?php 
					$class_post =get_the_terms($post->ID, 'category');
				?>
                <?php if($class_post && ! is_wp_error($class_post)):
                	$category_slug=array();
                    foreach( $class_post as $class){
						$category_slug[]= $class->slug;
					}
					$class_array=join(",",$category_slug);
					$post_class_array=join(" ",$category_slug);
                 endif; 
				 
				 ?>
				
                <div class="single-portfolio  <?php echo $post_class_array; ?>"">
								
								<a href="<?php the_permalink(); ?>">
									<figure>
										<figcaption>
											<div class="text-wrap">
												<div class="inner">
													<h2><?php the_title(); ?></h2>
												</div><!-- .inner -->
											</div><!-- .text-wrap -->
										</figcaption>
										<?php the_post_thumbnail('portfolio', array('class'=>'img-responsive')); ?>																	 									</figure>
								</a>
				</div><!-- .mix -->
				
            <?php endwhile; ?>

		</div>
        <?php else: ?>
            <div class="tagged-posts">
                <h2>No posts found</h2>
            </div>
        <?php endif; ?>
</div> <!-- End portfolio area -->
    
      


<?php get_footer(); ?>