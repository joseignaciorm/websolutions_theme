<?php
/**
 * The Eternal Slavery Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Eternal Slavery Theme
 * @since 1.0.0
 * @version 1.0.0
 */

 /* *********** Métodos y funciones usadas en este fichero *********** 
 # wp_register_style(); // Funcion que registra hojas de estilo. Dentro de los parámetros se pone null si no tiene dependencias. Para éste caso vamos a invocar a google fonts por medio de un array para que la cargue primero que la hoja de estilos.
 # get_stylesheet_directory_uri(); // Método que obtiene URL de la hoja de estilo
 # En este caso pasamos como version de la hoja de estilo 1.0.0 para todos los medios 'all'

 # wp_enqueue_style($handle, $src, $deps, $ver, $media) => Función que invoca la hoja de estilo para poner en cola. 

 # Una ves definida la función, debe ser invocada a través de una acción o filtro.
 # add_action(); En esta función se encuentra en la lista de acciones recomendada los métodos para llamar los elementos css y javascrips...
 
 */

 // Creando funciones para nuestra plantilla
 //Buena práctica poner a la funcion mismo nombre del tema: => EternalSlavery
 
 
 if(!function_exists('eternalSlavery_scripts')):
   function eternalSlavery_scripts() {
      wp_register_style('google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat', array(), '1.0.0','all');

       wp_register_style('style', get_stylesheet_uri(), array('google-fonts'), '1.0.0', 'all'); 

       wp_register_script('scripts', get_template_directory_uri().'/scripts.js', array('jquery'), '1.0.0', true);

       wp_enqueue_style('google-fonts');
       wp_enqueue_style('style');
       wp_enqueue_script('jquery');
       wp_enqueue_script('scripts');
    }
 endif;

 add_action( 'wp_enqueue_scripts', 'eternalSlavery_scripts' );


 /* *** Activacion de HTML5 e Imágen destacada *** */
 if(!function_exists('eternalSlavery_setup')):
      function eternalSlavery_setup() {
         add_theme_support('post_thumbnails');

         add_theme_support('html5', array(
            'comment-list',
            'comment-form', // Formulario de comentarios
            'search_form', // Formulario de busqueda
            'gallery',     // Las galerías
            'caption'   // Las etiquetas
         ));
      }
 endif;

 /* *** Alta Menús en Dashborad *** */
 if(!function_exists('eternalSlavery_menus')):
   function eternalSlavery_menus() {
      register_nav_menus(array(
         'main_menu'    => __('Menú Principal', 'EternalSlaveryTheme'),
         'social_menu'  => __('Menú redes sociales', 'EternalSlaveryTheme')
      ));
   }
 endif;

 /* *** Asociación de la acción del menú *** */
 add_action('init', 'eternalSlavery_menus');


  /* *** Registro de WIDGETS *** */
if(!function_exists('eternalSlavery_register_footer')):
   function eternalSlavery_register_footer() {
      register_sidebar(array(
         'name'         => __('Main footer widget', 'EternalSlaveryTheme'),
         'id'           => 'footer_widget',
         'description'  => __('Este es el contenedor de widgets del footer', 'EternalSlaveryTheme'),
         'before_widget' => '<div id"%1$s" class="footer__info col__ %2$s">',
         'after_widget'  => '</div>',
         'before_title'  => '<h4 class="footer__info--tittle">',
         'after_title'   => '</h4>'
      ));
   }
endif;
/* *** Asociación de la acción del FOOTER WIDGETS *** */
 add_action('widgets_init', 'eternalSlavery_register_footer');


