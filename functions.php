<?php 

function wordpress_theme_theme_support() {
//add title tag dynamically
add_theme_support('title-tag');
//gives you the ability to add custom logo which you can selecy via customise => logo
add_theme_support('custom-logo')
//enables users to upload thumbnail images to posts. You can edit the thumbnail size in settings => media.
add_theme_support('post-thumbnails')
}

add_action('after_theme_setup', 'wordpress_theme_theme_support')

//adds menu option in Appearance allowing you to create menus. Primary menu will be imported dynamically from header.php
function wordpress_theme_menus () {
    $locations = array(
        'primary' => "Destop Primary Left Sidebar",
        'footer' => "Footer Menu Items"
    );

    register_nav_menus($locations);
}

add_action('init', 'wordpress_theme_menus');


function wordpress_theme_register_styles() {
// grabs style sheet - create a anme-variable, the directory of the stylesheet, an empty array, the version, and what pages to apply the css too, in this case, all pages.

    //dynamically pulls the css version from the Version comment set in the styles.css.
    $version = wp_get_theme()->get( 'Version' );
    //passing your boostrap file into your stylesheet array, tells WP that your style file is dependant on the bootstrap css.
    wp_enqueue_style('wordpresstheme-style', get_template_directory_uri()."/style.css", array('wordpresstheme-bootstrap'), $version, 'all');
    wp_enqueue_style('wordpresstheme-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
    wp_enqueue_style('wordpresstheme-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
}

//calls function with 'wp_enqueue_scripts'.
add_action( 'wp_enqueue_scripts', 'wordpress_theme_register_styles');



function wordpress_theme_register_scripts() {
    // by default scripts are inqueued to head and are set as false. Setting as true puts in footer.
    wp_enqueue_script('wordpresstheme-jquery', "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), '3.4.1', true);
    wp_enqueue_script('wordpresstheme-popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), '1.16.0', true);
    wp_enqueue_script('wordpresstheme-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), '4.4.1', true);
    wp_enqueue_script('wordpresstheme-script', get_template_directory_uri()."assets/js/main.js", array(), '1.0', true);
       
    }
    
    add_action( 'wp_enqueue_scripts', 'wordpress_theme_register_scripts');

    //Below you can create widgets areas.
    //the sidebar-1 widget would then be added to header.php
    //From the below you can now access widgets via Appearance => widgets and you should see sidebar-1 in there.
    //With the widget you can then select the text widget and drop in your list html, so you can effectly make a social links widget.

    function wordpress_theme_widget_areas () {
        register_sidebar(
            array(
                'before_title' => '',
                'after_title' => '',
                'before_widget' => '<ul class="social-list list-inline py-3 mx-auto">',
                'after_widget' => '</ul>',
                'name' => 'Sidebar Area',
                'id' => 'sidebar-1',
                'description' => 'Sidebar Widget Area'

            )
       ); 

       register_sidebar(
        //just like above you can drop a widget into the footer.
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '<ul class="social-list list-inline py-3 mx-auto">',
            'after_widget' => '</ul>',
            'name' => 'Footer Area',
            'id' => 'footer-1',
            'description' => 'Footer Widget Area'
            )
        ); 
    }

    add_action( 'widgets_init', 'wordpress_theme_widget_areas');


?>