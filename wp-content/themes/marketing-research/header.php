<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Research
 */

?>
    <!DOCTYPE html>
    <html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <link rel="profile" href="http://gmpg.org/xfn/11">

        <?php wp_head(); ?>
        <?php global $theme_options;
    $header_logo_image=$theme_options['header_logo_image'];
    ?>



    </head>
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="header-top">
                    <div class="social-icon col-sm-10">
                        <ul>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-sm-2 hub"><a class="top-link" href="#">4H Hub</a></div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>


        <nav class="navbar navbar-default main_menu clearfix">
            <div class="container">
                <div class="navbar-header navbar-left">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                    <a href="<?php echo get_option(" siteurl "); ?>"><img class="img img-responsive logo" src="<?php echo get_template_directory_uri(); ?>/img/fourth-hurdle.png" alt="4th-hurdle.com"/></a>
                </div>

                <div id="navbar" class="navbar-collapse collapse  navbar-right">
                    <?php 
                                            wp_nav_menu(
                                                array(
                                                    'theme_location'=>'main_menu',
                                                    'menu_class'=>'nav navbar-nav',
                                                
                                                )
                                            
                                            );
                                        
                        ?>
                    <ul class="nav navbar-nav pull-right">
                        <li><a class="search-toggle" href="#search"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
                <div id="search">
                                <button type="button" class="close">×</button>
                                <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>


        

        <!-- End header -->




        <!--new header-->
        <!-- Fixed navbar -->

        <!--/new header-->
    </header>







    <body <?php body_class(); ?>>
