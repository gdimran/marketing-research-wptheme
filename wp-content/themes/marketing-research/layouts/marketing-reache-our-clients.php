 <?php global $theme_options; 

$client_section_background= $theme_options['client_section_background'];
$client_title= $theme_options['client_title'];
$clients_iteams= $theme_options['clients_iteams'];


?>

<section id="our-clients" class="section-padding <?php if($client_section_background==1): ?> section-gray  <?php endif; ?>">
        <div class="container">
           
            <?php if($client_title): ?>
            <div class="row">
                <div class="col-md-8 col-md-offset-2 wow zoomIn">
                    <div class="page-title text-center">
                        <h2><?php echo $client_title; ?> </h2>
                    </div>
                </div>
            </div>
            <?php endif; ?>           
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="client-list wow zoomIn">
						<?php if($clients_iteams): ?>	
                            <?php foreach($clients_iteams as $client_logo) : ?>
                            <div class="single-client">
                                <img src="<?php echo $client_logo['image']; ?>" alt="<?php echo $client_logo['title']; ?>">
                            </div>
                            <?php  endforeach; ?>
                         <?php endif; ?>   
                        
                       
                    </div>
                </div>
            </div>
        </div>
    </section>         <!-- End our clients -->  
