<?php
/*
Template Name: Home Page Template
*/

 get_header(); 
global $theme_options; 

?>
    <!--    <section id="slider">
			 <?/*php global $theme_options; 

				$client_section_background= $theme_options['client_section_background'];
				$slider_iteams= $theme_options['slider_iteams'];
				
				
				?>
                
                <?/*php if($slider_iteams): ?>	
                            <?/*php foreach($slider_iteams as $slider) : ?>
                            
					<div class="single-slider" style="background:url(<?/*php echo $slider['image']; ?>)">
                        <div class="col-md-10 col-md-offset-1">
                                <div class="slider wow zoomIn">
                                    <h1><?/*php echo $slider['title']; ?></h1>
                                    <p><?/*php echo $slider['description']; ?></p>
                                    <a href="<?/*php echo $slider['url']; ?>"><?/*php echo $slider['subtitle']; ?></a>

                            </div>
                            <?php/*  endforeach; ?>
                         <?php/* endif; */?>   
                    </div>
                </div>

    </section>-->
    <!-- End slider 
    <header id="myCarousel" class="carousel slide">
        <div class="carousel-inner">
            <?php /*
				$slider= new WP_Query(array(
					'post_type'=>'bcarousel',
				
				));
				
				$item=0;
        	 	while( $slider-> have_posts()): $slider->the_post(); $item++ ?>
            <?php if($item==1): ?>
            <div class="item active">
                <?php else: ?>
                <div class="item">
                    <?php endif; ?>
                    <!-- Set the first background image using inline CSS below. 
                    <div class="fill">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="carousel-caption">
                        <h2>
                            <?php the_title(); ?>
                        </h2>
                        <p>
                            <?php the_content(); ?>
                        </p>
                        <button><a href="#">Read More</a></button>
                    </div>
                </div>
                <?php endwhile; */?>
                <!-- Controls 
                <a class="left carousel-control" href="#myCarousel" data-slide="prev"> <span class="prev"><i class="fa fa-angle-left"></i></span> </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next"> <span class="next"><i class="fa fa-angle-right"></i></span> </a>
            </div>
    </header>-->
  

    <section class="home_slider owl-carousle" id="home_slider">
         <?php 
				$slider= new WP_Query(array(
					'post_type'=>'bcarousel',
				
				));
                $item=0;
        	 	while( $slider-> have_posts()): $slider->the_post(); $item++ ?>
       <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'Full');?>
       <?php if($item==1): ?>
            <div class="single_slide active" style="background: url(<?php echo $thumb[0]; ?>) no-repeat;">
                <?php else: ?>
                <div class="single_slide" style="background: url(<?php echo $thumb[0]; ?>) no-repeat;">
                    <?php endif; ?>
        
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-12">
                        <div class="slide_content">
                            <h1><?php the_title(); ?></h1>
                            <p><?php the_content(); ?></p>
                            <?php
								global $post;
								$args = array( 'posts_per_page' => -1, 'post_type'=> 'bcarousel', 'orderby' => 'menu_order', 'order' => 'ASC' );
								$myposts = get_posts( $args );
 
									   $slider_link= get_post_meta($post->ID, '_theme_metabox_slider_link', true);
									?>
									
                            <a href="<?php echo $slider_link; ?>">Read More <i class="fa fa-arrow-right"></i></a>
                            
                        </div>
                    </div>
                    <!--/row-->
                </div>
            </div>
        </div>
       <?php endwhile; ?> 
       
    </section>
    <?php
	
	/*$layout = $theme_options['homepage-layout-manager']['enabled'];
 
if ($layout): foreach ($layout as $key=>$value) {
 
    switch($key) {
 
        case 'our_clients': get_template_part( 'layouts/marketing-reache-our-clients', 'our_clients' );
        break;
 
        case 'testimonals': get_template_part( 'layouts/marketing-reache-testimonials', 'testimonals' );
        break;
 
        case 'device': get_template_part( 'layouts/marketing-reache-device', 'device' );
        break;
 
        case 'our_work': get_template_part( 'layouts/marketing-reache-our-work', 'our_work' );    
        break;  
		
		case 'case_studies': get_template_part( 'layouts/marketing-reache-case-studies', 'case_studies' );    
        break; 
 
    }
 
}
 
endif;
*/
echo get_template_part( 'layouts/marketing-reache-our-clients', 'our_clients' );

echo get_template_part( 'layouts/marketing-reache-testimonials', 'testimonals' );

echo get_template_part( 'layouts/marketing-reache-device', 'device' );

echo get_template_part( 'layouts/marketing-reache-our-work', 'our_work' );    

echo get_template_part( 'layouts/marketing-reache-case-studies', 'case_studies' );    
      
 
/*}
 
endif;*/


	?>
        <!-- End testimonials -->
        <!-- End facts -->
       <section class="home_slider owl-carousle" id="footer_slider">
         <?php 
				$slider= new WP_Query(array(
					'post_type'=>'bcarousel',
				
				));
                $item=0;
        	 	while( $slider-> have_posts()): $slider->the_post(); $item++ ?>
       <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'Full');?>
       <?php if($item==1): ?>
            <div class="single_slide active" style="background: url(<?php echo $thumb[0]; ?>) no-repeat;">
                <?php else: ?>
                <div class="single_slide" style="background: url(<?php echo $thumb[0]; ?>) no-repeat;">
                    <?php endif; ?>
        
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-4 col-sm-12 clearfix">
                       <a href="#" id="view_case_studies">view all case studies</a>
                        <div class="slide_content">
                            <h1><?php the_title(); ?></h1>
                            <p><?php the_content(); ?></p>
                            <?php
								global $post;
								$args = array( 'posts_per_page' => -1, 'post_type'=> 'scarousel', 'orderby' => 'menu_order', 'order' => 'ASC' );
								$myposts = get_posts( $args );
 
									   $slider_link2= get_post_meta($post->ID, '_theme_metabox_slider2_link', true);
									?>
									
                            <a href="<?php echo $slider_link2; ?>">Read More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <!--/row-->
                </div>
            </div>
        </div>
       <?php endwhile; ?> 
       
    </section>
        <?php get_footer(); ?>
