<?php
/**
 * The Eternal Slavery Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage eternalslayvertheme
 * @since 1.0.0
 * @version 1.3.0
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
      wp_register_style('google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat&display=swap', array(), '1.0.0','all');

       wp_register_style('style', get_stylesheet_uri(), array('google-fonts'), '1.0.0', 'all'); 
       wp_register_style('custom-properties', get_stylesheet_directory_uri().'/css/custom_properties.css', array(), '1.0.0', 'all');
       wp_register_script('scripts', get_template_directory_uri().'/scripts.js', array('jquery'), '1.0.0', true);

       wp_enqueue_style('google-fonts');
       wp_enqueue_style('style');
       wp_enqueue_style('custom-properties');
       wp_enqueue_script('jquery');
       wp_enqueue_script('scripts');
    }
 endif;

 add_action( 'wp_enqueue_scripts', 'eternalSlavery_scripts' );


 /* *** Activacion de HTML5 e IMAGEN DESTACADA *** */
 if(!function_exists('eternalSlavery_setup')):
      function eternalSlavery_setup() {

         //Soporte para traducciones
            //https://developer.wordpress.org/themes/functionality/internationalization/
            //https://make.wordpress.org/polyglots/handbook/
         //Herramientas
            //https://www.icanlocalize.com/tools/php_scanner
            //https://poedit.net/
         load_theme_textdomain( 'EST', get_template_directory() . '/languages' );

         // https://developer.wordpress.org/reference/functions/add_theme_support/
         // add_theme_support(); => Función que activa y desactiva funcionalidades de WordPress
         // Personalización imágen destacada
         add_theme_support('post-thumbnails');

         add_theme_support('html5', array(
            'comment-list',
            'comment-form', // Formulario de comentarios
            'search_form', // Formulario de busqueda
            'gallery',     // Las galerías
            'caption'   // Las etiquetas
         ));

         // Configuración logo personalizado
         add_theme_support('custom-logo', array(
            // Establecemos altura y anchura
            'height'       => 100,
            'width'        => 100,
            'flex-height'  => true, // Con esta opción damos flexibilidad para customizar tamaño desde el dashboard
            'flex-width'   => true  // Con esta opción damos flexibilidad para customizar tamaño desde el dashboard
         ));

         // Fondo y cabecera multimedia
         add_theme_support('custom-background', array(
            // Establecemos propiedades
            // get_template_directory_uri(); Deuelve Url desde instalación de WordPress hasta la carpeta del theme
            'default-color'  => 'DDD', // Establece color de fonde. Debe estar en HEX
            'default-image'  => get_template_directory_uri() . '/img/Diseño-web.jpg', // Puede ser png o jpg
            'default-repeat' => 'not-repeat', 
            'default-position-x' => "",
            'default-position-y' => "",
            'default-size' => "",
            'default-attachment' => 'fixed'
         ));

         // Activa la actualización selectiva de widgets desde el personalizador
         add_theme_support('customize-selective-refresh-widgets');

      }
 endif;

 add_action('after_setup_theme', 'eternalSlavery_setup'); // Evento after_setup_theme ocurre cuando WordPress ha terminado de cargar la plantilla

  /* *** END Activacion de HTML5 e IMAGEN DESTACADA *** */



 /* *** Alta Menús en Dashborad *** */
 if(!function_exists('eternalSlavery_menus')):
   function eternalSlavery_menus() {
      register_nav_menus(array(
         'main_menu'    => __('Menú Principal', 'EST'),
         'social_menu'  => __('Menú redes sociales', 'EST')
      ));
   }
 endif;

 /* *** Asociación de la acción del menú *** */
 add_action('init', 'eternalSlavery_menus');


/* *** Registro de WIDGETS *** */
if(!function_exists('eternalSlavery_register_footer')):
   function eternalSlavery_register_footer() {
      register_sidebar(array(
         'name'         => __('Main footer widget', 'EST'),
         'id'           => 'footer_widget',
         'description'  => __('Este es el contenedor de widgets del footer', 'EST'),
         'before_widget' => '<article id"%1$s" class="footer__info col__ %2$s">',
         'after_widget'  => '</article>',
         'before_title'  => '<h4 class="footer__info--title">',
         'after_title'   => '</h4>'
      ));

      register_sidebar(array(
         'name'         => __('Second footer widget', 'EST'),
         'id'           => 'second_footer_widget',
         'description'  => __('Este es el contenedor de widgets del footer secundario', 'EST'),
         'before_widget' => '<article id"%1$s" class="footer__info col__ %2$s">',
         'after_widget'  => '</article>',
         'before_title'  => '<h4 class="footer__info--title">',
         'after_title'   => '</h4>'
      ));
   }
endif;
/* *** Asociación de la acción del FOOTER WIDGETS *** */
 add_action('widgets_init', 'eternalSlavery_register_footer');

/* *** END Registro de WIDGETS *** */

// Carpeta inc es por convensión donde se incluyen archivos desde el functions.php
require_once get_template_directory().'/inc/custom-header.php';

require_once get_template_directory().'/inc/customizer.php';

require_once get_template_directory().'/inc/custom-login.php';

require_once get_template_directory().'/inc/custom-admin.php';


?>