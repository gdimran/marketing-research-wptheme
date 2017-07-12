<?php
/*
Template Name: Home Page Template
*/
global $theme_options;
 get_header(); ?>
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <div class="logo">
                        <h1><a href="">unicorn</a></h1>
                        
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>                         
                    </div>
                </div>
                
                <div class="col-sm-10">
                         

                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right text-uppercase">
                            <li class="active"><a href="#slider">home</a></li>
                            <li><a href="#about">about</a></li>
                            <li><a href="#our-blog">articles</a></li>
                            <li><a href="#our-clients">clients</a></li>
                            <li><a href="#portfolios">portfolios</a></li>
                            <li><a href="#team-members">team</a></li>
                            <li><a href="#events">events</a></li>
                            <li><a href="#footer">contact us</a></li>
                        </ul>
                    </div>                    
                </div>
            </div>
        </div>
    </header> <!-- End header -->
    
    <section id="slider">
       
        <div data-velocity="-.2" class="overlay-bg slide-bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="slide-text-table">
                        <div class="slide-text-table-cell">
                            <div class="slide-text wow fadeIn">
                                <h1>STORYTELLER</h1>

                                <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. </p>   

                                <a href="" class="learn-more">read the rest</a>                     
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section> <!-- End slider -->
    
<section id="our-clients" class="section-padding section-gray">
        <div class="container">
           
            <div class="row">
                <div class="col-md-8 col-md-offset-2 wow zoomIn">
                    <div class="page-title text-center">
                        <h2>Clients</h2>
                    </div>
                </div>
            </div>
                       
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="client-list wow zoomIn">
                        <div class="single-client">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/baxter.png" alt="">
                        </div>
                        <div class="single-client">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/bayer.png" alt="">
                        </div>
                        <div class="single-client">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/abbott.png" alt="">
                        </div>
                        <div class="single-client">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/bd.png" alt="">
                        </div>
                        <div class="single-client">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/braun.png" alt="">
                        </div>
                        <div class="single-client">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/dexcom.png" alt="">
                        </div>
                        <div class="single-client">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/medtronic.png" alt="">
                        </div>
                        <div class="single-client">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/omron.png" alt="">
                        </div>
                        <div class="single-client">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/philips.png" alt="">
                        </div>
                        <div class="single-client">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/roche.png" alt="">
                        </div>
                        <div class="single-client">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/siemens.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>         <!-- End our clients -->  

    
    
    <section id="about" class="section-padding text-center">
        <div class="container">
            
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="about-text wow bounceIn">
                        <div class="about-icon">
                            <i class="li_lab"></i>
                        </div>
                        
                        <h2>Who & Why</h2>
                        <p>The gentlemen who rented the room would sometimes take their evening meal at home in the living room that was used by everyone, and so the door to this room was often kept closed in the evening. But Gregor found it easy to give up having the door open, he had, after all, often failed to make use of it when it was open and, without the family having noticed it, lain in his room in its darkest corner. One time, though, the charwoman left the door.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- End about -->
    
 <section id="our-services" class="section-gray section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 wow zoomIn" data-wow-delay="100ms" data-wow-duration="700ms">
                    <div class="single-service">
                        <i class="li_fire"></i>
                        <h2>An Wow Feature</h2>
                        <p>The gentlemen who rented the room would sometimes take their evening meal at home in the living.</p>
                    </div>
                </div>
                <div class="col-sm-4 wow zoomIn" data-wow-delay="300ms" data-wow-duration="700ms">
                    <div class="single-service">
                        <i class="li_truck"></i>
                        <h2>A Beautiful Feature</h2>
                        <p>The gentlemen who rented the room would sometimes take their evening meal at home in the living.</p>
                    </div>
                </div>
                <div class="col-sm-4 wow zoomIn" data-wow-delay="500ms" data-wow-duration="700ms">
                    <div class="single-service">
                        <i class="li_clip"></i>
                        <h2>An Amazing Feature</h2>
                        <p>The gentlemen who rented the room would sometimes take their evening meal at home in the living.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
   
    
    <section id="our-blog" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center wow zoomIn">
                    <div class="page-title">
                        <h2>Featured Articles</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum consequuntur officia delectus ex hic nobis maxime. Quasi incidunt blanditiis rem molestiae aut excepturi. Voluptatibus dolor, molestias nostrum ullam ratione odit.</p>
                    </div>
                </div>
            </div>           
            <div class="row">
                <div class="col-md-12">
                    <div class="article-list wow zoomIn">
                        <div class="single-article">
                            <div class="article-header">
                                <a href="">comic</a>
                            </div>
                            
                            <div class="article-title">
                                <h2><a href="">A million ways to die in the wild wild wild west</a></h2>
                            </div>
                            
                            <div class="article-footer">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/author_1.jpg" alt="" class="author-thumb">
                                <p><a href="">jimmy jefferson</a><br/>21/08/2013</p>
                            </div>
                        </div>
                        <div class="single-article">
                            <div class="article-header">
                                <a href="">comic</a>
                            </div>
                            
                            <div class="article-title">
                                <h2><a href="">The most comfortable chair comes with no backpain</a></h2>
                            </div>
                            
                            <div class="article-footer">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/author_2.jpg" alt="" class="author-thumb">
                                <p><a href="">Gail Gutierrez</a><br/>21/08/2013</p>
                            </div>
                        </div>
                        <div class="single-article">
                            <div class="article-header">
                                <a href="">comic</a>
                            </div>
                            
                            <div class="article-title">
                                <h2><a href="">journey to the center of the earth with jefferson </a></h2>
                            </div>
                            
                            <div class="article-footer">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/author_3.jpg" alt="" class="author-thumb">
                                <p><a href="">mason johnston</a><br/>21/08/2013</p>
                            </div>
                        </div>
                        <div class="single-article">
                            <div class="article-header">
                                <a href="">comic</a>
                            </div>
                            
                            <div class="article-title">
                                <h2><a href="">A million ways to die in the wild wild wild west</a></h2>
                            </div>
                            
                            <div class="article-footer">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/author_1.jpg" alt="" class="author-thumb">
                                <p><a href="">jimmy jefferson</a><br/>21/08/2013</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- End our blog -->
    
    
    
      
    <div id="portfolios" class="portfolio-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center wow zoomIn">
                    <div class="page-title">
                        <h2>Portfolio & Screenshots</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas unde itaque iure nesciunt expedita! Beatae consectetur, mollitia nulla, necessitatibus ducimus blanditiis nobis. Quam asperiores molestiae, eum, pariatur officia harum. Sequi.</p>
                    </div>
                </div>
            </div>
        </div>
           
        <div class="portfolio-wrapper">
            <div class="portfolio-menu wow zoomIn">
                <ul>
                    <li class="active" data-filter="*">All</li>
                    <li data-filter=".art">Art</li>
                    <li data-filter=".mystery">Mystery</li>
                    <li data-filter=".illusion">Illusion</li>
                    <li data-filter=".travel">Travel</li>
                    <li data-filter=".paintings">Paintings</li>
                </ul>
            </div>
            
            <div class="portfolio-items wow zoomIn">
               
                <figure class="single-portfolio mystery paintings">
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
               
               
                
            </div>              
        </div>
            

    </div> <!-- End portfolio area -->     
    
         
    <div id="testimonials" class="section-dark">
        <div data-velocity="-.3" class="overlay-bg testimonial-bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div id="testimonial-list" class="carousel slide text-center" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <div class="single-testimonial">
                                    <i class="fa fa-quote-left"></i>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident nisi, esse sit voluptates. Commodi porro dolore consequuntur quod esse quidem minus, obcaecati neque numquam eum dolor, quam eaque fugit in.</p>
                                    <p class="author-name">Jhon Doe</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="single-testimonial">
                                    <i class="fa fa-quote-left"></i>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident nisi, esse sit voluptates. Commodi porro dolore consequuntur quod esse quidem minus, obcaecati neque numquam eum dolor, quam eaque fugit in.</p>
                                    <p class="author-name">Jhon Doe</p>
                                </div>
                            </div>
                        </div>

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
    </div>    <!-- End testimonials -->                   
    
    
    
    <section id="team-members" class="section-padding text-center">
        <div class="container">
           
            <div class="row">
                <div class="col-md-8 col-md-offset-2 wow zoomIn">
                    <div class="page-title">
                        <h2>Our Team</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, tempore.</p>
                    </div>
                </div>
            </div>
            
                                  
            <div class="row">
                <div class="col-sm-3 wow zoomIn">
                    <div class="single-team">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/team_1.png" alt="">
                        <h2>James Philly</h2>
                        <p>Lead Developer</p>
                    </div>
                </div>
                <div class="col-sm-3 wow zoomIn">
                    <div class="single-team">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/team_2.png" alt="">
                        <h2>Cactus Jack</h2>
                        <p>3D Model Designer</p>
                    </div>
                </div>
                <div class="col-sm-3 wow zoomIn">
                    <div class="single-team">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/team_3.png" alt="">
                        <h2>Jack Sparrow</h2>
                        <p>Master of All Trade</p>
                    </div>
                </div>
                <div class="col-sm-3 wow zoomIn">
                    <div class="single-team">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/team_4.png" alt="">
                        <h2>Yaga Squarehead</h2>
                        <p>Manages Money</p>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- End team members -->
    
    
    <section id="facts" class="section-padding text-center">
        <div class="facts-bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 wow zoomIn">
                    <div class="page-title">
                        <h2>Facts</h2>
                    </div>
                    
                    <div class="facts-wrapper wow zoomIn">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="single-fact">
                                    <h2><span class="counter">110</span></h2>
                                    <p>successful projects</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="single-fact">
                                    <h2><span class="counter">25</span></h2>
                                    <p>awesome clients</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="single-fact">
                                    <h2><span class="counter">30</span></h2>
                                    <p>open source plugins</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="single-fact">
                                    <h2><span class="counter">13</span></h2>
                                    <p>open source themes</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- End facts -->
    
   
    
    <section id="events" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center wow zoomIn">
                    <div class="page-title">
                        <h2>Events</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore quisquam harum quidem nobis ipsam, nostrum consequuntur, delectus dolor recusandae asperiores assumenda dignissimos! Illo dolore, deserunt quisquam, vel nisi placeat eligendi.</p>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="single-event wow zoomIn">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="event-title">
                                    <p>Lorem / 21st March, 2014</p>
                                    <h2>Lorem ipsum dolor sit amet. </h2>
                                </div>
                                
                                <div class="event-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In odio aperiam voluptates inventore natus, quis iure, earum officiis eius ipsum repudiandae ab soluta dolore, at saepe nulla laudantium!</p>
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="event-thumb">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/event_1.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-event wow zoomIn">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="event-thumb">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/event_2.jpg" alt="">
                                </div>
                            </div>
                                                       
                            <div class="col-sm-6">
                                <div class="event-title">
                                    <p>Laudantium / 21st March, 2014</p>
                                    <h2>At saepe nulla laudantium!</h2>
                                </div>
                                
                                <div class="event-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, quia pariatur culpa in labore assumenda unde nulla ullam obcaecati ducimus quam non eligendi quasi quos ratione, veritatis numquam.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-event wow zoomIn">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="event-title">
                                    <p>Travel / 21st March, 2014</p>
                                    <h2>What about if he reported sick?</h2>
                                </div>
                                
                                <div class="event-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae soluta sed quas numquam quibusdam autem dolorum in nesciunt ut consequuntur? Atque nihil, sit nemo vitae facere voluptates sint.</p>
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="event-thumb">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/event_3.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- End events -->
    
    
    <section id="more-events" class="section-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="old-event-list wow zoomIn">
                        <div class="single-old-event">
                            <h2><a href="">Lorem ipsum dolor sit amet</a></h2>
                            <p>incidunt / 21st March, 2014</p>
                        </div>
                        <div class="single-old-event">
                            <h2><a href="">Consectetur adipisicing elit. Odit</a></h2>
                            <p>Voluptate / 21st March, 2014</p>
                        </div>
                        <div class="single-old-event">
                            <h2><a href="">Omnis quia, nihil ratione sunt</a></h2>
                            <p>Necessitatibus / 21st March, 2014</p>
                        </div>
                        <div class="single-old-event">
                            <h2><a href="">Quidem praesentium animi, fuga</a></h2>
                            <p>Inventore / 21st March, 2014</p>
                        </div>
                        <div class="single-old-event">
                            <h2><a href="">Temporibus ducimus fugit</a></h2>
                            <p>Ipsam / 21st March, 2014</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- End more events -->
    
    
    <section id="twitter-feed" class="section-padding text-center">
        <div class="container">
            <div class="col-md-8 col-md-offset-2">
                <div class="twitter-feed-wrapper wow zoomIn">
                    <div class="twitter-feed-top">
                        <i class="fa fa-twitter"></i>
                    </div>
                    
                    <div class="single-twitter-feed">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/testimonial_author.jpg" alt="">
                        <div id="tweet"></div>
                        <p class="author-twitter"><a target="_blank" href="http://twitter.com/wpexpand">@wpexpand</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- End twitter feed -->
    
    <footer id="footer" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="footer-contact">
                        <h2>Unicorn</h2>
                        <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his</p>
                        
                        <div class="footer-ct-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <p><input type="text" placeholder="NAME"></p>
                                </div>
                                <div class="col-md-6">
                                    <p><input type="text" placeholder="EMAIL"></p>
                                </div>
                            </div>
                            <p><input type="text" placeholder="SUBJECT"></p>
                            <p><textarea name="message" placeholder="MESSAGE" id="message" cols="30" rows="10"></textarea></p>
                            <p><input type="submit" value="Send"></p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-2 col-md-offset-1 col-sm-4">
                    <div class="footer-widget">
                        <h2>Links</h2>
                        <ul>
                            <li><a href="">Home</a></li>
                            <li><a href="">About</a></li>
                            <li><a href="">Services</a></li>
                            <li><a href="">Menu</a></li>
                            <li><a href="">Restaurants</a></li>
                            <li><a href="">Work Hours</a></li>
                            <li><a href="">Call Hours </a></li>                               
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-2 col-sm-4">
                    <div class="footer-widget">
                        <h2>friends</h2>
                        <ul>
                            <li><a href="">Home</a></li>
                            <li><a href="">About</a></li>
                            <li><a href="">Services</a></li>
                            <li><a href="">Menu</a></li>
                            <li><a href="">Restaurants</a></li>                              
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-2 col-sm-4">
                    <div class="footer-widget">
                        <h2>social</h2>
                        <ul>
                            <li><a href="">Facebook</a></li>
                            <li><a href="">Twitter</a></li>
                            <li><a href="">Github</a></li>
                            <li><a href="">Pinterest</a></li>
                            <li><a href="">Google Plus</a></li>
                            <li><a href="">Dribble</a></li>
                            <li><a href="">Flickr</a></li>                               
                            <li><a href="">Others</a></li>                               
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-sep"></div>
                </div>
                <div class="col-md-7">
                    <div class="footer-copyright">
                        <p>One morning, when Gregor Samsa woke from troubled dreams, he found.<br/> © 2015 Your Awesome Company <span class="seprator">|</span> Designed by <a href="http://hasin.wordpress.com">Hasin</a> <span class="seprator">|</span> Coded with <i class="fa fa-heart"></i> by <a href="http://wpexpand.com" target="_blank">WP Expand</a></p>
                    </div>
                </div>
                
                <div class="col-md-5">
                    <div class="footer-menu">
                        <ul>
                            <li><a href="">TERMS</a></li>
                            <li><a href="">Privacy Policy</a></li>
                            <li><a href="">Contact</a></li>
                            <li><a href="">Job</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer> <!-- End footer -->

<?php get_footer(); ?>