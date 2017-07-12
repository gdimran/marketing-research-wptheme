

<figure id="single-blog" class="single-portfolio mystery paintings">
	<figcaption>
        <h2 id="<?php echo the_slug(); ?>"><?php the_title(); ?></h2>
        <p class="description"><?php  the_content(); ?></p>               
   </figcaption>
    <?php if(has_post_thumbnail()): ?>
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('portfolio', array('class'=>'img-responsive')); ?></a>
    <?php endif; ?>
    
 
</figure>