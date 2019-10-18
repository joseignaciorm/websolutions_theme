<?php
// https://codex.wordpress.org/Customizing_the_Login_Form

/* *** Hook para inyectar en el head los scripts css y js para que apliquen a la página de custom-login.php *** */
if(!function_exists('eternalSlavery_login_scripts')):
    function eternalSlavery_login_scripts() {
        wp_register_style('google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat&display=swap', array(), '1.0.0','all');

        wp_register_style('custom-properties', get_stylesheet_directory_uri().'/css/custom_properties.css', array(), '1.0.0', 'all');
        
        wp_register_style('login-page-style', get_template_directory_uri().'/css/login_page.css', array('google-fonts', 'custom-properties'), '1.0.0', 'all'); 

        wp_enqueue_style('google-fonts');
        wp_enqueue_style('custom-properties');
        wp_enqueue_style('login-page-style');
 
        wp_register_script('login-page-script', get_template_directory_uri().'/js/login_page.js', array('jquery'), '1.0.0', true);
 
        wp_enqueue_script('jquery');
        wp_enqueue_script('login-page-script');
     }
  endif;
 
  add_action( 'login_enqueue_scripts', 'eternalSlavery_login_scripts' );


  /* *** Cambiando el logo de la página de login.php *** */
  if(!function_exists('eternalSlavery_login_logo_url')):
    function eternalSlavery_login_logo_url() {
        return home_url();
     }
  endif;

  add_filter('login_headerurl', 'eternalSlavery_login_logo_url');


  /* *** Cambiando título y anchor text del logo de la página de login.php *** */
  if(!function_exists('eternalSlavery_login_logo_title')):
    function eternalSlavery_login_logo_title() {
        return get_bloginfo('title') . '|' . get_bloginfo('description');
     }
  endif;

  add_filter('login_headertitle', 'eternalSlavery_login_logo_title');

?>