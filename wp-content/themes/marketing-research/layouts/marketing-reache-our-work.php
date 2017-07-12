    <?php global $theme_options; 

$our_work_section_heading= $theme_options['our_work_section_heading'];

$enable_image_upload= $theme_options['enable_image_upload'];

$our_work_icon_left= $theme_options['our_work_icon_left'];
$our_work_sub_heading_left= $theme_options['our_work_sub_heading_left'];
$our_work_content_left= $theme_options['our_work_content_left'];

$our_work_icon_middle= $theme_options['our_work_icon_middle'];
$our_work_sub_heading_middle= $theme_options['our_work_sub_heading_middle'];
$our_work_content_middle= $theme_options['our_work_content_middle'];

$our_work_icon_right= $theme_options['our_work_icon_right'];
$our_work_sub_heading_right= $theme_options['our_work_sub_heading_right'];
$our_work_content_right= $theme_options['our_work_content_right'];

$our_work_image_left= $theme_options['our_work_image_left'];
$our_work_image_middle= $theme_options['our_work_image_middle'];
$our_work_image_right= $theme_options['our_work_image_right'];
?>
    
    
    <section id="our-services" class="section-padding section-padding" data-parallax="sroll" data-bleed="20" data-speed="0.7" data-image-src="<?php echo get_template_directory_uri(); ?>/img/cmr_background.jpg">
        <div class="container">
            <div id="our-work" class="row">
            	<div class="col-sm-12">
                	<?php if($our_work_section_heading): ?>
            	<h1 align="center"><?php echo $our_work_section_heading; ?> </h1>
                <?php else: ?>
                    <h1 align="center">Our Work</h1>
                <?php endif; ?>
                </div>
                <div class="col-sm-4 wow zoomIn" data-wow-delay="100ms" data-wow-duration="700ms">
                    <div class="single-service">
                        
                        <?php if($enable_image_upload=='0'): ?>
                        <i class="li_<?php echo $our_work_icon_left; ?>"></i>
                         <?php else: ?>
                         <div class="service_image">
                         	<img src="<?php echo $our_work_image_left['thumbnail']; ?>">
                         </div>
                         
                        <?php endif; ?>
                         <?php if($our_work_sub_heading_left): ?>
                        <h2><a href="#"><?php echo $our_work_sub_heading_left; ?></a></h2>
                        <?php else: ?>
                        <h2><a href="#">An Wow Feature</a></h2>
                        <?php endif; ?>
                        
                        <?php if($our_work_content_left): ?>
                         <p><?php echo $our_work_content_left; ?></p>
                        <?php else: ?>
                        <p>The gentlemen who rented the room would sometimes take their evening meal at home in the living.</p>
                        <?php endif; ?>
                        
                    </div>
                </div>
                <div class="col-sm-4 wow zoomIn" data-wow-delay="300ms" data-wow-duration="700ms">
                    <div class="single-service">
                        <?php if($enable_image_upload=='0'): ?>
                        <i class="li_<?php echo $our_work_icon_middle; ?>"></i>
                         <?php else: ?>
                        	<div class="service_image">
                         		<img src="<?php echo $our_work_image_middle['thumbnail']; ?>">
                         </div>
                        <?php endif; ?>
                        
                        <?php if($our_work_sub_heading_middle): ?>
                        <h2><a href="#"><?php echo $our_work_sub_heading_middle; ?></a></h2>
                        <?php else: ?>
                        <h2><a href="#">A Beautiful Feature</a></h2>
                        <?php endif; ?>
                        
                        <?php if($our_work_content_middle): ?>
                         <p><?php echo $our_work_content_middle; ?></p>
                        <?php else: ?>
                        <p>The gentlemen who rented the room would sometimes take their evening meal at home in the living.</p>
                        <?php endif; ?>
                        
                        
                    </div>
                </div>
                <div class="col-sm-4 wow zoomIn" data-wow-delay="500ms" data-wow-duration="700ms">
                    <div class="single-service">
                        <?php if($enable_image_upload=='0'): ?>
                        <i class="li_<?php echo $our_work_icon_right; ?>"></i>
                         <?php else: ?>
                        <div class="service_image">
                         	<img src="<?php echo $our_work_image_right['thumbnail']; ?>">
                         </div>
                        <?php endif; ?>
                        
                        <?php if($our_work_sub_heading_right): ?>
                        <h2><a href="#"><?php echo $our_work_sub_heading_right; ?></a></h2>
                        <?php else: ?>
                        <h2><a href="#">An Amazing Feature</a></h2>
                        <?php endif; ?>
                        
                        <?php if($our_work_content_right): ?>
                         <p><?php echo $our_work_content_right; ?></p>
                        <?php else: ?>
                        <p>The gentlemen who rented the room would sometimes take their evening meal at home in the living.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- End our services -->
