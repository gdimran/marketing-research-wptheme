
<?php global $theme_options; 

$device_section_heading= $theme_options['device_section_heading'];
$device_section_sub_heading_left= $theme_options['device_section_sub_heading_left'];
$device_section_sub_heading_right= $theme_options['device_section_sub_heading_right'];
$device_content_left= $theme_options['device_content_left'];
$device_content_right= $theme_options['device_content_right'];
?>

<section id="device-area" class="section-padding"  data-parallax="scroll" data-bleed="20" data-speed="0.7" data-image-src="<?php echo get_template_directory_uri(); ?>/img/cmr_device_areas_bg.jpg">
        <div class="container">
            <div class="row">
            	 <?php if($device_section_heading): ?>
            	<h1><?php echo $device_section_heading; ?> </h1>
                <?php else: ?>
                <h1>Therapy and Device Specialisms</h1>
                <?php endif; ?>
                <div class="col-sm-6 wow zoomIn" data-wow-delay="100ms" data-wow-duration="700ms">
                	<div class="single-service">
                    <?php if($device_section_sub_heading_left): ?>
                        <h2><a href="#"><?php echo $device_section_sub_heading_left; ?></a></h2>
                        <?php else: ?>
                        <h2><a href="#">Therapy Areas</a></h2>
                        <?php endif; ?>
                        
                        <?php if($device_content_left): ?>
                         <p><?php echo $device_content_left; ?></p>
                        <?php else: ?>
                        <p>Focusing on diabetes, immunology, pulmonology and anaesthesiology, as well as cardiovascular, dermatology, neurology and haematology: CMR's experts tailor the methodologies they use to deliver tangible ROI on your medical device research needs.</p>
                        <?php endif; ?>

                    </div>
                    
                </div>
               
                <div class="col-sm-6 wow zoomIn" data-wow-delay="500ms" data-wow-duration="700ms">
                    <div class="single-service">

                        <?php if($device_section_sub_heading_right): ?>
                        <h2><a href="#"><?php echo $device_section_sub_heading_right; ?></a></h2>
                        <?php else: ?>
                        <h2><a href="#">Device Areas</a></h2>
                        <?php endif; ?>
                        
                        <?php if($device_content_right): ?>
                         <p><?php echo $device_content_right; ?></p>
                        <?php else: ?>
                        <p>CMR's market research covers the spectrum of medical device areas. While we specialize in hand held and consumable devices, we've also worked with a full range of devices. We have proven expertise in infusion, vascular access, diagnostics and monitoring, surgical consumables and more.</p>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </section> <!-- End our services -->
