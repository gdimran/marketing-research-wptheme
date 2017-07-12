  <?php global $theme_options; 

$testimonial_section_background= $theme_options['testimonial_section_background'];
$testimonials_iteams= $theme_options['testimonials_iteams'];

?>  
   
   
    <div id="testimonials"  data-parallax="scroll" data-bleed="10" data-speed="0.7" class="section-padding parallax <?php if($testimonial_section_background==1): ?> section-dark <?php endif; ?>">
        <div data-velocity="-.3" class="overlay-bg testimonial-bg"></div>
        <div class="container">
            
            <div class="row">
                              
                <div class="col-md-offset-1 col-md-10 col-md-offset-1">
                    <div id="testimonial-list" class="carousel slide text-center" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <?php $item=0; ?>
                            <?php if($testimonials_iteams): ?>	
                                        <?php foreach($testimonials_iteams as $testimonial) : 
                                $item++
                            ?>
                            <?php if($item==1): ?>
                            <div class="item active">
                            <?php else: ?>
                            <div class="item">

                            <?php endif; ?>
                                <div class="single-testimonial">
                                    <i class="fa fa-quote-left"></i>
                                    <p><?php echo $testimonial['description'];?></p>
                                    <p class="author-name"><?php echo $testimonial['title'];?></p>
                                </div>
                            </div>
                            <?php  endforeach; ?>
                 <?php endif; ?> 
                          

                        <a class="left tc-control" href="#testimonial-list" role="button" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="right tc-control" href="#testimonial-list" role="button" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                        </a>
                    </div>                    
                </div>
            </div>
        </div>
                
                
            </div> 
            
        </div>
</div>            <!-- End testimonials -->                   
