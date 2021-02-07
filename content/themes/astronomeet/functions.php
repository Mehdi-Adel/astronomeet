<?php 

define( 'ASTRONOMEET_THEME_VERSION', '1.0.0' );
/**
 * Je vérifie que la fonction astronomeet_theme_setup n'est pas déjà déclarée
 *
 * @link https://www.php.net/function_exists
 */
if ( ! function_exists( 'astronomeet_theme_setup' ) ) {
    function astronomeet_theme_setup() {
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'html5' );
    }
}

add_action( 'after_setup_theme', 'astronomeet_theme_setup' );

if ( ! function_exists( 'astronomeet_theme_enqueue_scripts' ) ) {
    function astronomeet_theme_enqueue_scripts() {
        wp_enqueue_style(
            'astronomeet-theme-style',
            get_theme_file_uri( 'public/css/style.css' ),
            [],
            ASTRONOMEET_THEME_VERSION
        );
        wp_enqueue_script(
            'astronomeet-theme-script',
            get_theme_file_uri( 'public/js/app.js' ),
            [],
            ASTRONOMEET_THEME_VERSION,
            true
        );
        wp_enqueue_script( 
            'isInViewport', 
            get_bloginfo( 'stylesheet_directory' ) . '/node_modules/is-in-viewport/lib/isInViewport.min.js', array( 'jquery' ), ASTRONOMEET_THEME_VERSION,
            true
        );
    }
}
add_action( 'wp_enqueue_scripts', 'astronomeet_theme_enqueue_scripts' );


/* change the WP logo for the Astronomeet Logo */
function AstronomeetLogin()
{
echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/login/custom-login-style.css" />';
}

add_action('login_head', 'AstronomeetLogin');

// Add Menus

function astronomeet_register_nav_menu() {
    register_nav_menus(
      array(
        'main-menu' => __( 'Menu principal' ),
        'footer-menu' => __( 'Menu footer' )
      )
    );
  }
  add_action( 'init', 'astronomeet_register_nav_menu' );

/* if (! function_exists('astronomeet_register_nav_menu')) {
    function astronomeet_register_nav_menu() {

        register_nav_menu( 'main-menu', __( 'Menu Principal', 'astronomeet' ) );
    
    }
}

add_action( 'init','astronomeet_register_nav_menu');
*/
function astronomeet_theme_nav_menu( $theme_location, $classes = '' ) {

    $classes = rtrim( 'menu ' . $classes );

    wp_nav_menu(
        [
            'menu'            => 'main-menu', 'footer-menu',
            'container'       => '',
            'theme_location'  => $theme_location,
            'container_class' => $classes,
            'menu_class'      => 'menu__links',
            'depth'           => 1,
        ]
    );
}

if ( ! function_exists( 'astronomeet_theme_nav_menu_css_class' ) ) {
    function astronomeet_theme_nav_menu_css_class( $classes ) {
        $classes[] = 'menu__links__item';

        return $classes;
    }
}

add_filter( 'nav_menu_css_class', 'astronomeet_theme_nav_menu_css_class' );


// hook for the link in the login page
function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'Astronomeet';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );
/* 
add_action( 'wp_enqueue_scripts', 'enqueue_bootsrap' );
 if ( ! function_exists('enqueue_bootsrap') ) {
     function enqueue_boostrap {

     }
 } */

 remove_filter( 'the_content', 'wp_make_content_images_responsive' );