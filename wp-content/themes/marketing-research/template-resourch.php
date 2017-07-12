
<?php
/**
 * Template Name: Resourch Page Template
 *
 *
 * @package Research
 */

get_header(); 
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
                
                <?php
                    $blog_cats= get_terms('blog_cat'); ?>
                    
                    <?php if(!empty($blog_cats) && ! is_wp_error($blog_cats)): ?>
                        
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <?php foreach($blog_cats as $blog): ?>
                                
                                <li data-filter="<?php  echo $blog->slug ?>"><?php echo $blog->name ?></li>
                    
                            <?php endforeach; ?>
                    
                        </ul>
                <?php endif; ?>
                
                
            </div>
            
            <div class="portfolio-items wow zoomIn">
                <?php
                global $post;
                $args = array( 'posts_per_page' => -1, 'post_type'=> 'blog', 'orderby' => 'menu_order', 'order' => 'ASC' );
                $myposts = get_posts( $args );
                foreach( $myposts as $post ) : setup_postdata($post); ?>

                    <?php 
                       $thin_title= get_post_meta($post->ID, '_theme_metabox_thin_title', true);
                       $blog_link= get_post_meta($post->ID, '_theme_metabox_blog_link', true);
                       $blog_details= get_post_meta($post->ID, '_theme_metabox_blog_details', true);
                   	
				   
				    ?>
                    
                    <figure class="single-portfolio <?php echo $blog->slug ?>">
                        <?php the_post_thumbnail('portfolio', array('class'=>'img-responsive')); ?>
                        <figcaption>
                            <h2><?php the_title(); ?></h2>
                            <p class="icon-links">
                                <a href="<?php echo $blog_link;  ?>"><i class="li_world"></i></a>
                              <!--  <a href="<?php echo get_template_directory_uri(); ?>/img/portfolio_1_big.jpg" class="strip" data-strip-caption="Creative Zoe" data-strip-group="unicorn"><i class="li_search"></i></a>-->
                            </p>
                            
                            <?php if($blog_details): ?>
                            <p class="description"><?php echo $blog_details; ?></p>
                            
                            <?php else: ?>
                            <p class="description"><?php the_excerpt(); ?></p>

                            
                            <?php endif; ?>
                        </figcaption>			
                    </figure>  
                    <?php endforeach; 
                ?>
                
                
                
                
               
           <!--   <figure class="single-portfolio mystery paintings">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio_1.jpg" alt="img25"/>
                    <figcaption>
                        <h2>Creative <span>Zoe</span></h2>
                        <p class="icon-links">
                            <a href="#"><i class="li_world"></i></a>
                            <a href="<?php echo get_template_directory_uri(); ?>/img/portfolio_1_big.jpg" class="strip" data-strip-caption="Creative Zoe" data-strip-group="unicorn"><i class="li_search"></i></a>
                        </p>
                        <p class="description">Zoe never had the patience of her sisters. She deliberately punched the bear in his face.</p>
                    </figcaption>			
                </figure>               
               
               
               
                <figure class="single-portfolio illusion">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio_2.jpg" alt="img25"/>
                    <figcaption>
                        <h2>Another <span>Project</span></h2>
                        <p class="icon-links">
                            <a href="#"><i class="li_world"></i></a>
                            <a href="<?php echo get_template_directory_uri(); ?>/img/portfolio_2_big.jpg" class="strip" data-strip-caption="Another Project" data-strip-group="unicorn"><i class="li_search"></i></a>
                        </p>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod itaque, voluptate consectetur?</p>
                    </figcaption>			
                </figure>               
               
               
               
                  <figure class="single-portfolio mystery">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio_3.jpg" alt="img25"/>
                    <figcaption>
                        <h2>Super <span>Project</span></h2>
                        <p class="icon-links">
                            <a href="#"><i class="li_world"></i></a>
                            <a href="<?php echo get_template_directory_uri(); ?>/img/portfolio_3_big.jpg" class="strip" data-strip-caption="Super Project" data-strip-group="unicorn"><i class="li_search"></i></a>
                        </p>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, iure, sunt.</p>
                    </figcaption>			
                </figure>               
               
               
               
                <figure class="single-portfolio illusion paintings">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio_4.jpg" alt="img25"/>
                    <figcaption>
                        <h2>Second <span>Project</span></h2>
                        <p class="icon-links">
                            <a href="#"><i class="li_world"></i></a>
                            <a href="<?php echo get_template_directory_uri(); ?>/img/portfolio_4_big.jpg" class="strip" data-strip-caption="Second Project" data-strip-group="unicorn"><i class="li_search"></i></a>
                        </p>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil accusamus, sapiente.</p>
                    </figcaption>			
                </figure>               
               
               
               <figure class="single-portfolio art">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio_5.jpg" alt="img25"/>
                    <figcaption>
                        <h2>Long <span>Project title</span></h2>
                        <p class="icon-links">
                            <a href="#"><i class="li_world"></i></a>
                            <a href="<?php echo get_template_directory_uri(); ?>/img/portfolio_5_big.jpg" class="strip" data-strip-caption="Long Project title" data-strip-group="unicorn"><i class="li_search"></i></a>
                        </p>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, quaerat excepturi.</p>
                    </figcaption>			
                </figure>               
               
               
               
                <figure class="single-portfolio mystery illusion">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio_6.jpg" alt="img25"/>
                    <figcaption>
                        <h2>My <span>Project</span></h2>
                        <p class="icon-links">
                            <a href="#"><i class="li_world"></i></a>
                            <a href="<?php echo get_template_directory_uri(); ?>/img/portfolio_6_big.jpg" class="strip" data-strip-caption="My Project" data-strip-group="unicorn"><i class="li_search"></i></a>
                        </p>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, officia, unde.</p>
                    </figcaption>			
                </figure>               
               
               
               
                <figure class="single-portfolio art paintings">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio_7.jpg" alt="img25"/>
                    <figcaption>
                        <h2>Website <span>Project</span></h2>
                        <p class="icon-links">
                            <a href="#"><i class="li_world"></i></a>
                            <a href="<?php echo get_template_directory_uri(); ?>/img/portfolio_7_big.jpg" class="strip" data-strip-caption="Website project" data-strip-group="unicorn"><i class="li_search"></i></a>
                        </p>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, dolore, id.</p>
                    </figcaption>			
                </figure>               
               
               
               
                <figure class="single-portfolio illusion">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio_8.jpg" alt="img25"/>
                    <figcaption>
                        <h2>Clean <span>Project</span></h2>
                        <p class="icon-links">
                            <a href="#"><i class="li_world"></i></a>
                            <a href="<?php echo get_template_directory_uri(); ?>/img/portfolio_8_big.jpg" class="strip" data-strip-caption="Clean Project" data-strip-group="unicorn"><i class="li_search"></i></a>
                        </p>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus, aspernatur labore.</p>
                    </figcaption>			
                </figure>               
               
               
                <figure class="single-portfolio travel art">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio_9.jpg" alt="img25"/>
                    <figcaption>
                        <h2>Awesome <span>project</span></h2>
                        <p class="icon-links">
                            <a href="#"><i class="li_world"></i></a>
                            <a href="<?php echo get_template_directory_uri(); ?>/img/portfolio_9_big.jpg" class="strip" data-strip-caption="Awesome project" data-strip-group="unicorn"><i class="li_search"></i></a>
                        </p>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla, suscipit autem?</p>
                    </figcaption>			
                </figure>               
               
               
               
                <figure class="single-portfolio art paintings">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio_10.jpg" alt="img25"/>
                    <figcaption>
                        <h2>Nice <span>Project</span></h2>
                        <p class="icon-links">
                            <a href="#"><i class="li_world"></i></a>
                            <a href="<?php echo get_template_directory_uri(); ?>/img/portfolio_10_big.jpg" class="strip" data-strip-caption="Nice Project" data-strip-group="unicorn"><i class="li_search"></i></a>
                        </p>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic voluptatibus, corrupti.</p>
                    </figcaption>			
                </figure>               
               
               
               
                <figure class="single-portfolio mystery travel">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio_11.jpg" alt="img25"/>
                    <figcaption>
                        <h2>Superb <span>Project</span></h2>
                        <p class="icon-links">
                            <a href="#"><i class="li_world"></i></a>
                            <a href="<?php echo get_template_directory_uri(); ?>/img/portfolio_11_big.jpg" class="strip" data-strip-caption="Superb project" data-strip-group="unicorn"><i class="li_search"></i></a>
                        </p>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, amet, eveniet.</p>
                    </figcaption>			
                </figure>               
               
               
               
                <figure class="single-portfolio travel">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio_12.jpg" alt="img25"/>
                    <figcaption>
                        <h2>I am too <span>Tired</span></h2>
                        <p class="icon-links">
                            <a href="#"><i class="li_world"></i></a>
                            <a href="<?php echo get_template_directory_uri(); ?>/img/portfolio_12_big.jpg" class="strip" data-strip-caption="I am too tired" data-strip-group="unicorn"><i class="li_search"></i></a>
                        </p>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, possimus suscipit!</p>
                    </figcaption>			
                </figure>               
               -->
               
                
            </div>              
        </div>
            

    </div> <!-- End portfolio area -->    
<div class="clearfix"></div>

<?php get_footer(); ?>