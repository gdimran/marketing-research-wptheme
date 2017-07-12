
<?php
/**
 * Template Name: CaseStudy Page Template
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
           
<?php 



function vb_filter_posts() {



    if( !isset( $_POST['nonce'] ) || !wp_verify_nonce( $_POST['nonce'], 'bobz' ) )

        die('Permission denied');



    /**

     * Default response

     */

    $response = [

        'status'  => 500,

        'message' => 'Something is wrong, please try again later ...',

        'content' => false,

        'found'   => 0

    ];



    $tax  = sanitize_text_field($_POST['params']['tax']);

    $term = sanitize_text_field($_POST['params']['term']);

    $page = intval($_POST['params']['page']);

    $qty  = intval($_POST['params']['qty']);



    /**

     * Check if term exists

     */

    if (!term_exists( $term, $tax) && $term != 'all-terms') :

        $response = [

            'status'  => 501,

            'message' => 'Term doesn\'t exist',

            'content' => 0

        ];



        die(json_encode($response));

    endif;



    /**

     * Tax query

     */

    if ($term == 'all-terms') : 



        $tax_qry[] = [

            'taxonomy' => $tax,

            'field'    => 'slug',

            'terms'    => $term,

            'operator' => 'NOT IN'

        ];

    else :



        $tax_qry[] = [

            'taxonomy' => $tax,

            'field'    => 'slug',

            'terms'    => $term,

        ];

    endif;



    /**

     * Setup query

     */

    $args = [

        'paged'          => $page,

        'post_type'      => 'post',

        'post_status'    => 'publish',

        'posts_per_page' => $qty,

        'tax_query'      => $tax_qry

    ];



    $qry = new WP_Query($args);



    ob_start();

        if ($qry->have_posts()) :

            while ($qry->have_posts()) : $qry->the_post(); ?>



                <article class="loop-item">

                    <header>

                        <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                    </header>

                    <div class="entry-summary">

                        <?php the_excerpt(); ?>

                    </div>

                </article>



            <?php endwhile;



            /**

             * Pagination

             */

            vb_ajax_pager($qry,$page);



            $response = [

                'status'=> 200,

                'found' => $qry->found_posts

            ];



            

        else :



            $response = [

                'status'  => 201,

                'message' => 'No posts found'

            ];



        endif;



    $response['content'] = ob_get_clean();



    die(json_encode($response));



}

add_action('wp_ajax_do_filter_posts', 'vb_filter_posts');

add_action('wp_ajax_nopriv_do_filter_posts', 'vb_filter_posts');















/**
 * Pagination
 */
function vb_ajax_pager( $query = null, $paged = 1 ) {

    if (!$query)
        return;

    $paginate = paginate_links([
        'base'      => '%_%',
        'type'      => 'array',
        'total'     => $query->max_num_pages,
        'format'    => '#page=%#%',
        'current'   => max( 1, $paged ),
        'prev_text' => 'Prev',
        'next_text' => 'Next'
    ]);

    if ($query->max_num_pages > 1) : ?>
        <ul class="pagination">
            <?php foreach ( $paginate as $page ) :?>
                <li><?php echo $page; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif;
}
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