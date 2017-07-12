<?php

/**
 * ReduxFramework Sample Config File
 * For full documentation, please visit: http://docs.reduxframework.com/
 */
if (!class_exists('Redux')) {
    return;
}


// This is your option name where all the Redux data is stored.
$opt_name = "theme_options";

// This line is only for altering the demo. Can be easily removed.
$opt_name = apply_filters('redux_demo/opt_name', $opt_name);

/*
 *
 * --> Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
 *
 */

$sampleHTML = '';
if (file_exists(dirname(__FILE__) . '/info-html.html')) {
    Redux_Functions::initWpFilesystem();

    global $wp_filesystem;

    $sampleHTML = $wp_filesystem->get_contents(dirname(__FILE__) . '/info-html.html');
}

// Background Patterns Reader
$sample_patterns_path = ReduxFramework::$_dir . '../sample/patterns/';
$sample_patterns_url = ReduxFramework::$_url . '../sample/patterns/';
$sample_patterns = array();

if (is_dir($sample_patterns_path)) {

    if ($sample_patterns_dir = opendir($sample_patterns_path)) {
        $sample_patterns = array();

        while (( $sample_patterns_file = readdir($sample_patterns_dir) ) !== false) {

            if (stristr($sample_patterns_file, '.png') !== false || stristr($sample_patterns_file, '.jpg') !== false) {
                $name = explode('.', $sample_patterns_file);
                $name = str_replace('.' . end($name), '', $sample_patterns_file);
                $sample_patterns[] = array(
                    'alt' => $name,
                    'img' => $sample_patterns_url . $sample_patterns_file
                );
            }
        }
    }
}

/**
 * ---> SET ARGUMENTS
 * All the possible arguments for Redux.
 * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
 * */
$theme = wp_get_theme(); // For use with some settings. Not necessary.

$args = array(
    // TYPICAL -> Change these values as you need/desire
    'opt_name' => $opt_name,
    // This is where your data is stored in the database and also becomes your global variable name.
    'display_name' => $theme->get('Name'),
    // Name that appears at the top of your panel
    'display_version' => $theme->get('Version'),
    // Version that appears at the top of your panel
    'menu_type' => 'menu',
    //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
    'allow_sub_menu' => true,
    // Show the sections below the admin menu item or not
    'menu_title' => __('Theme Options', 'redux-framework-demo'),
    'page_title' => __('Theme Options', 'redux-framework-demo'),
    // You will need to generate a Google API key to use this feature.
    // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
    'google_api_key' => '',
    // Set it you want google fonts to update weekly. A google_api_key value is required.
    'google_update_weekly' => false,
    // Must be defined to add google fonts to the typography module
    'async_typography' => true,
    // Use a asynchronous font on the front end or font string
    //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
    'admin_bar' => true,
    // Show the panel pages on the admin bar
    'admin_bar_icon' => 'dashicons-portfolio',
    // Choose an icon for the admin bar menu
    'admin_bar_priority' => 50,
    // Choose an priority for the admin bar menu
    'global_variable' => '',
    // Set a different name for your global variable other than the opt_name
    'dev_mode' => false,
    // Show the time the page took to load, etc
    'update_notice' => true,
    // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
    'customizer' => true,
    // Enable basic customizer support
    //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
    //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field
    // OPTIONAL -> Give you extra features
    'page_priority' => null,
    // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
    'page_parent' => 'themes.php',
    // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
    'page_permissions' => 'manage_options',
    // Permissions needed to access the options panel.
    'menu_icon' => '',
    // Specify a custom URL to an icon
    'last_tab' => '',
    // Force your panel to always open to a specific tab (by id)
    'page_icon' => 'icon-themes',
    // Icon displayed in the admin panel next to your menu_title
    'page_slug' => '',
    // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
    'save_defaults' => true,
    // On load save the defaults to DB before user clicks save or not
    'default_show' => false,
    // If true, shows the default value next to each field that is not the default value.
    'default_mark' => '',
    // What to print by the field's title if the value shown is default. Suggested: *
    'show_import_export' => true,
    // Shows the Import/Export panel when not used as a field.
    // CAREFUL -> These options are for advanced use only
    'transient_time' => 60 * MINUTE_IN_SECONDS,
    'output' => true,
    // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
    'output_tag' => true,
    // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
    // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.
    // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
    'database' => '',
    // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
    'use_cdn' => true,
    // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.
    // HINTS
    'hints' => array(
        'icon' => 'el el-question-sign',
        'icon_position' => 'right',
        'icon_color' => 'lightgray',
        'icon_size' => 'normal',
        'tip_style' => array(
            'color' => 'red',
            'shadow' => true,
            'rounded' => false,
            'style' => '',
        ),
        'tip_position' => array(
            'my' => 'top left',
            'at' => 'bottom right',
        ),
        'tip_effect' => array(
            'show' => array(
                'effect' => 'slide',
                'duration' => '500',
                'event' => 'mouseover',
            ),
            'hide' => array(
                'effect' => 'slide',
                'duration' => '500',
                'event' => 'click mouseleave',
            ),
        ),
    )
);

// ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
$args['admin_bar_links'][] = array(
    'id' => 'redux-docs',
    'href' => 'http://docs.reduxframework.com/',
    'title' => __('Documentation', 'redux-framework-demo'),
);

$args['admin_bar_links'][] = array(
    //'id'    => 'redux-support',
    'href' => 'https://github.com/ReduxFramework/redux-framework/issues',
    'title' => __('Support', 'redux-framework-demo'),
);

$args['admin_bar_links'][] = array(
    'id' => 'redux-extensions',
    'href' => 'reduxframework.com/extensions',
    'title' => __('Extensions', 'redux-framework-demo'),
);

// SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
$args['share_icons'][] = array(
    'url' => 'https://github.com/ReduxFramework/ReduxFramework',
    'title' => 'Visit us on GitHub',
    'icon' => 'el el-github'
        //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
);
$args['share_icons'][] = array(
    'url' => 'https://www.facebook.com/pages/Redux-Framework/243141545850368',
    'title' => 'Like us on Facebook',
    'icon' => 'el el-facebook'
);
$args['share_icons'][] = array(
    'url' => 'http://twitter.com/reduxframework',
    'title' => 'Follow us on Twitter',
    'icon' => 'el el-twitter'
);
$args['share_icons'][] = array(
    'url' => 'http://www.linkedin.com/company/redux-framework',
    'title' => 'Find us on LinkedIn',
    'icon' => 'el el-linkedin'
);

// Panel Intro text -> before the form
if (!isset($args['global_variable']) || $args['global_variable'] !== false) {
    if (!empty($args['global_variable'])) {
        $v = $args['global_variable'];
    } else {
        $v = str_replace('-', '_', $args['opt_name']);
    }
    $args['intro_text'] = sprintf(__('<p>Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: <strong>$%1$s</strong></p>', 'redux-framework-demo'), $v);
} else {
    $args['intro_text'] = __('<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'redux-framework-demo');
}

// Add content after the form.
$args['footer_text'] = __('<p>This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.</p>', 'redux-framework-demo');

Redux::setArgs($opt_name, $args);

/*
 * ---> END ARGUMENTS
 */


/*
 * ---> START HELP TABS
 */

$tabs = array(
    array(
        'id' => 'redux-help-tab-1',
        'title' => __('Theme Information 1', 'redux-framework-demo'),
        'content' => __('<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo')
    ),
    array(
        'id' => 'redux-help-tab-2',
        'title' => __('Theme Information 2', 'redux-framework-demo'),
        'content' => __('<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo')
    )
);
Redux::setHelpTab($opt_name, $tabs);

// Set the help sidebar
$content = __('<p>This is the sidebar content, HTML is allowed.</p>', 'redux-framework-demo');
Redux::setHelpSidebar($opt_name, $content);


/*
 * <--- END HELP TABS
 */


/*
 *
 * ---> START SECTIONS
 *
 */

/*

  As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


 */

// -> START Basic Fields
Redux::setSection($opt_name, array(
    'title' => __('General Settings', 'redux-framework-demo'),
    'id' => 'general_settings',
    'desc' => __('Change website General Settings here', 'redux-framework-demo'),
    'customizer_width' => '400px',
    'icon' => 'el el-home'
));
/****Logo change*****
Redux::setSection( $opt_name, array(
'title' => __( 'Header Logo', 'redux-framework-demo' ),
 'id' => 'header_logo',
 'subsection' => true,
 'fields' =>array(
 	 
		 array(
        'id' => 'header_logo_image',
         'type' => 'media',
         'title' =>__( 'Upload Header Logo Image', 'redux-framework-demo' ),
         'subtitle' =>  __('Logo alter Tag here.', 'redux-framework-demo' ),
		 'desc' =>	__('You should upload your logo here as png image.' , 'redux-framework-demo' ),
        'image_size' => 'full',
		 /*'default' => 'lab',
		 //'required' => array('enable_image_upload', '=', 1)
		 ),	 

)));
/*Redux::setSection( $opt_name, array(
'title' => __( 'Homepage Layout Manager', 'redux-framework-demo' ),
 'id' => 'homepage_layout_manager',
 'subsection' => true,
 'fields' =>array(
     array(
        'id' => 'homepage-layout-manager',
         'type' => 'sorter',
         'title' =>__( 'Homepage Layout', 'redux-framework-demo' ),
         'subtitle' =>  __('Change homepage layout from here. You can drag and drop.', 'redux-framework-demo' ),
         'options' => array(
            'enabled'  => array(
                'slider'   => 'Slider',
                'our_clients' => 'Our Clients',
                'testimonals' => 'Testimonials',
                'device'   => 'Device Area',
                'our_work'   => 'Our Work',
                'case_studies'   => 'Case Studies',
                ),
				
		'disabled' => array(
		)
    ),
))));



/****device area content change*****/
Redux::setSection( $opt_name, array(
'title' => __( 'Device Section', 'redux-framework-demo' ),
 'id' => 'device_section',
 'subsection' => true,
 'fields' =>array(
 	 
	 array(
        'id' => 'device_section_heading',
         'type' => 'text',
         'title' =>__( 'Device section main headeing', 'redux-framework-demo' ),
         'subtitle' =>  __('Change the section heading text..', 'redux-framework-demo' ),
		 'desc' =>	__('You can change your title as you like.' , 'redux-framework-demo' ),
		 'default' => 'Therapy and Device Specialisms',	
		 ),
		 
	array(
        'id' => 'device_section_sub_heading_left',
         'type' => 'text',
         'title' =>__( 'Device Section Sub Headeing Left', 'redux-framework-demo' ),
         'subtitle' =>  __('Change the section Sub heading text..', 'redux-framework-demo' ),
		 'desc' =>	__('You can change your sub heading title as you like.' , 'redux-framework-demo' ),
		 'default' => 'Therapy Areas',	
		 ),
		 
	array(
        'id' => 'device_section_sub_heading_right',
         'type' => 'text',
         'title' =>__( 'Device Section Sub Headeing Right', 'redux-framework-demo' ),
         'subtitle' =>  __('Change the section Sub heading text..', 'redux-framework-demo' ),
		 'desc' =>	__('You can change your sub heading title as you like.' , 'redux-framework-demo' ),
		 'default' => 'Device Areas',	
		 ),
		 
     /*array(
        'id' => 'device_icon_1',
         'type' => 'text',
         'title' =>__( 'Device icon code', 'redux-framework-demo' ),
         'subtitle' =>  __('Write your icon name here.', 'redux-framework-demo' ),
		 'desc' =>	__('Get all icon name <a href="http://fontawesome.io/cheatsheet/" target="_blank">here.</a>' , 'redux-framework-demo' ),
		 'default' => 'lab',	
		 ),
		 
	array(
        'id' => 'device_icon_2',
         'type' => 'text',
         'title' =>__( 'Device icon code', 'redux-framework-demo' ),
         'subtitle' =>  __('Write your icon name here.', 'redux-framework-demo' ),
		 'desc' =>	__('Get all icon name <a href="http://fontawesome.io/cheatsheet/" target="_blank">here.</a>' , 'redux-framework-demo' ),
		 'default' => 'lab',	
		 ),*/
	
	array(
        'id' => 'device_content_left',
         'type' => 'editor',
         'title' =>__( 'Device section content', 'redux-framework-demo' ),
         'subtitle' =>  __('Write your content.', 'redux-framework-demo' ),
		 'desc' =>	__('Write and style as you like. or you can link, insert and upload video here.' ),
		 'default' => '<p> Focusing on diabetes, immunology, pulmonology and anaesthesiology, as well as cardiovascular, dermatology, neurology and haematology: CMRs experts tailor the methodologies they use to deliver tangible ROI on your medical device research needs.</p>',	
		 ),

	array(
        'id' => 'device_content_right',
         'type' => 'editor',
         'title' =>__( 'Device section content', 'redux-framework-demo' ),
         'subtitle' =>  __('Write your content.', 'redux-framework-demo' ),
		 'desc' =>	__('Write and style as you like. or you can link, insert and upload video here.' , 'redux-framework-demo' ),
		 'default' => '<P>CMRs market research covers the spectrum of medical device areas. While we specialize in hand held and consumable devices, we have also worked with a full range of devices. We have proven expertise in infusion, vascular access, diagnostics and monitoring, surgical consumables and more.</p>',	
		 ),	 

		 
)));

/****our work content change*****/
Redux::setSection( $opt_name, array(
'title' => __( 'Our Work', 'redux-framework-demo' ),
 'id' => 'our_work',
 'subsection' => true,
 'fields' =>array(
 	 
	 array(
        'id' => 'our_work_section_heading',
         'type' => 'text',
         'title' =>__( 'Our Work main headeing', 'redux-framework-demo' ),
         'subtitle' =>  __('Change the section heading text..', 'redux-framework-demo' ),
		 'desc' =>	__('You can change your title as you like.' , 'redux-framework-demo' ),
		 'default' => 'Our Work',	
		 ),
		 
	array(
        'id' => 'enable_image_upload',
         'type' => 'switch',
         'title' =>__( 'enable image icon uploader.', 'redux-framework-demo' ),
         'subtitle' =>  __('If you want to enable image icon, turn this on.', 'redux-framework-demo' ),
		 'default' => false,
		 ),
		 	 
	array(
        'id' => 'our_work_icon_left',
         'type' => 'text',
         'title' =>__( 'Work icon code Left', 'redux-framework-demo' ),
         'subtitle' =>  __('Write your icon name here.', 'redux-framework-demo' ),
		 'desc' =>	__('Get all icon name <a href="http://fontawesome.io/cheatsheet/" target="_blank">here.</a>' , 'redux-framework-demo' ),
		 'default' => 'lab',
		 'required' => array('enable_image_upload', '=', 0)
		 ),
		 
		 array(
        'id' => 'our_work_image_left',
         'type' => 'media',
         'title' =>__( 'Upload Work icon Image', 'redux-framework-demo' ),
         'subtitle' =>  __('Upload Work icon name here.', 'redux-framework-demo' ),
		 'desc' =>	__('You should upload your icon here as png image.' , 'redux-framework-demo' ),
		 /*'default' => 'lab',*/
		 'required' => array('enable_image_upload', '=', 1)
		 ),
		 
	array(
        'id' => 'our_work_sub_heading_left',
         'type' => 'text',
         'title' =>__( 'Work Section Sub Headeing Left', 'redux-framework-demo' ),
         'subtitle' =>  __('Change the section Sub heading text..', 'redux-framework-demo' ),
		 'desc' =>	__('You can change your sub heading title as you like.' , 'redux-framework-demo' ),
		 'default' => 'Therapy Areas',	
		 ),
		 
	array(
        'id' => 'our_work_content_left',
         'type' => 'editor',
         'title' =>__( 'Work section content', 'redux-framework-demo' ),
         'subtitle' =>  __('Write your content.', 'redux-framework-demo' ),
		 'desc' =>	__('Write and style as you like. or you can link, insert and upload video here.' ),
		 'default' => '<p> Focusing on diabetes, immunology, pulmonology and anaesthesiology, as well as cardiovascular, dermatology, neurology and haematology: CMRs experts tailor the methodologies they use to deliver tangible ROI on your medical device research needs.</p>',	
		 ),
		 
	array(
        'id' => 'our_work_icon_right',
         'type' => 'text',
         'title' =>__( 'Work icon code Right', 'redux-framework-demo' ),
         'subtitle' =>  __('Write your icon name here.', 'redux-framework-demo' ),
		 'desc' =>	__('Get all icon name <a href="http://fontawesome.io/cheatsheet/" target="_blank">here.</a>' , 'redux-framework-demo' ),
		 'default' => 'lab',
		 'required' => array('enable_image_upload', '=', 0)	
		 ),
	 
	 array(
        'id' => 'our_work_image_right',
         'type' => 'media',
         'title' =>__( 'Upload Work icon Image', 'redux-framework-demo' ),
         'subtitle' =>  __('Upload Work icon name here.', 'redux-framework-demo' ),
		 'desc' =>	__('You should upload your icon here as png image.' , 'redux-framework-demo' ),
		 /*'default' => 'lab',*/
		 'required' => array('enable_image_upload', '=', 1)
		 ),	 
	array(
        'id' => 'our_work_sub_heading_right',
         'type' => 'text',
         'title' =>__( 'Work Section Sub Headeing Right', 'redux-framework-demo' ),
         'subtitle' =>  __('Change the section Sub heading text..', 'redux-framework-demo' ),
		 'desc' =>	__('You can change your sub heading title as you like.' , 'redux-framework-demo' ),
		 'default' => 'Device Areas',	
		 ),
	
	array(
        'id' => 'our_work_content_right',
         'type' => 'editor',
         'title' =>__( 'Device section content', 'redux-framework-demo' ),
         'subtitle' =>  __('Write your content.', 'redux-framework-demo' ),
		 'desc' =>	__('Write and style as you like. or you can link, insert and upload video here.' , 'redux-framework-demo' ),
		 'default' => '<P>CMRs market research covers the spectrum of medical device areas. While we specialize in hand held and consumable devices, we have also worked with a full range of devices. We have proven expertise in infusion, vascular access, diagnostics and monitoring, surgical consumables and more.</p>',	
		 ),	 
		 
	
	array(
        'id' => 'our_work_icon_middle',
         'type' => 'text',
         'title' =>__( 'Work icon code middle', 'redux-framework-demo' ),
         'subtitle' =>  __('Write your icon name here.', 'redux-framework-demo' ),
		 'desc' =>	__('Get all icon name <a href="http://fontawesome.io/cheatsheet/" target="_blank">here.</a>' , 'redux-framework-demo' ),
		 'default' => 'lab',
		 'required' => array('enable_image_upload', '=', 0)	
		 ),
		 	
	 array(
        'id' => 'our_work_image_middle',
         'type' => 'media',
         'title' =>__( 'Upload Work icon Image', 'redux-framework-demo' ),
         'subtitle' =>  __('Upload Work icon name here.', 'redux-framework-demo' ),
		 'desc' =>	__('You should upload your icon here as png image.' , 'redux-framework-demo' ),
		 /*'default' => 'lab',*/
		 'required' => array('enable_image_upload', '=', 1)
		 ),
		 	 	 
	array(
        'id' => 'our_work_sub_heading_middle',
         'type' => 'text',
         'title' =>__( 'Work Section Sub Headeing Right', 'redux-framework-demo' ),
         'subtitle' =>  __('Change the section Sub heading text..', 'redux-framework-demo' ),
		 'desc' =>	__('You can change your sub heading title as you like.' , 'redux-framework-demo' ),
		 'default' => 'Device Areas',	
		 ),

	 array(
        'id' => 'our_work_content_middle',
         'type' => 'editor',
         'title' =>__( 'Work section content', 'redux-framework-demo' ),
         'subtitle' =>  __('Write your content.', 'redux-framework-demo' ),
		 'desc' =>	__('Write and style as you like. or you can link, insert and upload video here.' ),
		 'default' => '<p> Focusing on diabetes, immunology, pulmonology and anaesthesiology, as well as cardiovascular, dermatology, neurology and haematology: CMRs experts tailor the methodologies they use to deliver tangible ROI on your medical device research needs.</p>',	
		 ),
		 

)));


/**---Our Client options----*/

Redux::setSection( $opt_name, array(
'title' => __( 'Clients Section', 'redux-framework-demo' ),
 'id' => 'our_clients',
 'subsection' => true,
 'fields' =>array(
     array(
        'id' => 'client_section_background',
         'type' => 'select',
         'title' =>__( 'Homepage client Slider', 'redux-framework-demo' ),
         'subtitle' =>  __('You can easily change your slider from here.', 'redux-framework-demo' ),
		 'options' => array(
                '1'   => 'Black',
                '2' => 'Gray',
                ),
         'default' => '1',
	),
	
	array(
        'id' => 'client_title',
         'type' => 'text',
         'title' =>__( 'Client Section headeing', 'redux-framework-demo' ),
         'subtitle' =>  __('Change the section heading text..', 'redux-framework-demo' ),
		 'desc' =>	__('You can change your title as you like.' , 'redux-framework-demo' ),
		 'default' => 'Our Clients',	
		 ),
	
	array(
		'id' => 'clients_iteams',
         'type' => 'slides',
         'title' =>__( 'Client Item', 'redux-framework-demo' ),
		 'subtitle' =>  __('Add client iteam', 'redux-framework-demo' ),
		 'desc' =>	__('You can add unlimited numbers of client item here. You can drag and drop here too.' , 'redux-framework-demo' ),
		 'placeholder'=>array(
		 		'url'		=>__('Client Link','redux-framework-demo'),
				'title'		=>__('Client Title','redux-framework-demo'),
				'desc'		=>__('Client Description','redux-framework-demo'),
		 ),
	),
)
)
);


/**---homeslider options----*/

Redux::setSection( $opt_name, array(
'title' => __( 'Homepage main Slider', 'redux-framework-demo' ),
 'id' => 'homepage_slider',
 'subsection' => true,
 'fields' =>array(
     array(
        'id' => 'client_section_background',
         'type' => 'select',
         'title' =>__( 'Homepage main Slider', 'redux-framework-demo' ),
         'subtitle' =>  __('You can easily change your slider from here.', 'redux-framework-demo' ),
		 'options' => array(
                '1'   => 'Black',
                '2' => 'Gray',
                ),
         'default' => '1',
	),
	

	
	array(
		'id' => 'slider_iteams',
         'type' => 'slides',
         'title' =>__( 'Slider Title', 'redux-framework-demo' ),
		 'subtitle' =>  __('Add slider iteam', 'redux-framework-demo' ),
		 'desc' =>	__('You can add unlimited numbers of slider item here. You can drag and drop here too.' , 'redux-framework-demo' ),
		 'placeholder'=>array(
		 		'title'		=>__('Slider Title','redux-framework-demo'),
				'subtitle' =>  __('Add button text like read more', 'redux-framework-demo' ),
				'description'		=>__('Slider Description','redux-framework-demo'),
				'url'		=>__('slider url','redux-framework-demo'),
		 ),
	),
)
)
);



/**---slider options----

Redux::setSection( $opt_name, array(
'title' => __( 'Homepage Slider', 'redux-framework-demo' ),
 'id' => 'slider_main',
 'fields' =>array(
     /*array(
        'id' => 'client_section_background',
         'type' => 'select',
         'title' =>__( 'Homepage Slider', 'redux-framework-demo' ),
         'subtitle' =>  __('You can easily change your slider from here.', 'redux-framework-demo' ),
		 'options' => array(
                '1'   => 'Black',
                '2' => 'Gray',
                ),
         'default' => '1',
	),
	
	
	array(
		'id' => 'slider_iteams',
         'type' => 'slides',
         'title' =>__( 'Slider Iteam', 'redux-framework-demo' ),
		 'desc' =>	__('You can add unlimited numbers of sliders item here. You can drag and drop here too.' , 'redux-framework-demo' ),
		 'placeholder'=>array(
		 		'title'		=>__('Title Title','redux-framework-demo'),
				'subtitle' =>  __('Add subtitle like read more', 'redux-framework-demo' ),
				'description'		=>__('Slider Description','redux-framework-demo'),
				'url'		=>__('slider url','redux-framework-demo'),
		 ),
	),
)
)
);

/**---testimonials options----*/

Redux::setSection( $opt_name, array(
'title' => __( 'Testimonial Section', 'redux-framework-demo' ),
 'id' => 'testimonial',
 'subsection' => true,
 'fields' =>array(
     array(
        'id' => 'testimonial_section_background',
         'type' => 'select',
         'title' =>__( 'Testimonial Slider', 'redux-framework-demo' ),
         'subtitle' =>  __('You can easily change your slider from here.', 'redux-framework-demo' ),
		 'options' => array(
                '1'   => '',
                '2' => 'Gray',
                ),
         'default' => '1',
	),

	array(
		'id' => 'testimonials_iteams',
         'type' => 'slides',
         'title' =>__( 'Testimonial Item', 'redux-framework-demo' ),
		 'subtitle' =>  __('Add client iteam', 'redux-framework-demo' ),
		 'placeholder'=>array(
		 		'url'		=>__('Url Link','redux-framework-demo'),
				'title'		=>__('Woner name','redux-framework-demo'),
				'description'		=>__('Testimonial Description','redux-framework-demo'),
		 ),
	),
)
)
);




/*
 * <--- END SECTIONS
 */


/*
 *
 * YOU MUST PREFIX THE FUNCTIONS BELOW AND ACTION FUNCTION CALLS OR ANY OTHER CONFIG MAY OVERRIDE YOUR CODE.
 *
 */

/*
 *
 * --> Action hook examples
 *
 */

// If Redux is running as a plugin, this will remove the demo notice and links
//add_action( 'redux/loaded', 'remove_demo' );
// Function to test the compiler hook and demo CSS output.
// Above 10 is a priority, but 2 in necessary to include the dynamically generated CSS to be sent to the function.
//add_filter('redux/options/' . $opt_name . '/compiler', 'compiler_action', 10, 3);
// Change the arguments after they've been declared, but before the panel is created
//add_filter('redux/options/' . $opt_name . '/args', 'change_arguments' );
// Change the default value of a field after it's been set, but before it's been useds
//add_filter('redux/options/' . $opt_name . '/defaults', 'change_defaults' );
// Dynamically add a section. Can be also used to modify sections/fields
//add_filter('redux/options/' . $opt_name . '/sections', 'dynamic_section');

/**
 * This is a test function that will let you see when the compiler hook occurs.
 * It only runs if a field    set with compiler=>true is changed.
 * */
if (!function_exists('compiler_action')) {

    function compiler_action($options, $css, $changed_values) {
        echo '<h1>The compiler hook has run!</h1>';
        echo "<pre>";
        print_r($changed_values); // Values that have changed since the last save
        echo "</pre>";
        //print_r($options); //Option values
        //print_r($css); // Compiler selector CSS values  compiler => array( CSS SELECTORS )
    }

}

/**
 * Custom function for the callback validation referenced above
 * */
if (!function_exists('redux_validate_callback_function')) {

    function redux_validate_callback_function($field, $value, $existing_value) {
        $error = false;
        $warning = false;

        //do your validation
        if ($value == 1) {
            $error = true;
            $value = $existing_value;
        } elseif ($value == 2) {
            $warning = true;
            $value = $existing_value;
        }

        $return['value'] = $value;

        if ($error == true) {
            $field['msg'] = 'your custom error message';
            $return['error'] = $field;
        }

        if ($warning == true) {
            $field['msg'] = 'your custom warning message';
            $return['warning'] = $field;
        }

        return $return;
    }

}

/**
 * Custom function for the callback referenced above
 */
if (!function_exists('redux_my_custom_field')) {

    function redux_my_custom_field($field, $value) {
        print_r($field);
        echo '<br/>';
        print_r($value);
    }

}

/**
 * Custom function for filtering the sections array. Good for child themes to override or add to the sections.
 * Simply include this function in the child themes functions.php file.
 * NOTE: the defined constants for URLs, and directories will NOT be available at this point in a child theme,
 * so you must use get_template_directory_uri() if you want to use any of the built in icons
 * */
if (!function_exists('dynamic_section')) {

    function dynamic_section($sections) {
        //$sections = array();
        $sections[] = array(
            'title' => __('Section via hook', 'redux-framework-demo'),
            'desc' => __('<p class="description">This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.</p>', 'redux-framework-demo'),
            'icon' => 'el el-paper-clip',
            // Leave this as a blank section, no options just some intro text set above.
            'fields' => array()
        );

        return $sections;
    }

}

/**
 * Filter hook for filtering the args. Good for child themes to override or add to the args array. Can also be used in other functions.
 * */
if (!function_exists('change_arguments')) {

    function change_arguments($args) {
        //$args['dev_mode'] = true;

        return $args;
    }

}

/**
 * Filter hook for filtering the default value of any given field. Very useful in development mode.
 * */
if (!function_exists('change_defaults')) {

    function change_defaults($defaults) {
        $defaults['str_replace'] = 'Testing filter hook!';

        return $defaults;
    }

}

/**
 * Removes the demo link and the notice of integrated demo from the redux-framework plugin
 */
if (!function_exists('remove_demo')) {

    function remove_demo() {
        // Used to hide the demo mode link from the plugin page. Only used when Redux is a plugin.
        if (class_exists('ReduxFrameworkPlugin')) {
            remove_filter('plugin_row_meta', array(
                ReduxFrameworkPlugin::instance(),
                'plugin_metalinks'
                    ), null, 2);

            // Used to hide the activation notice informing users of the demo panel. Only used when Redux is a plugin.
            remove_action('admin_notices', array(ReduxFrameworkPlugin::instance(), 'admin_notices'));
        }
    }

}
