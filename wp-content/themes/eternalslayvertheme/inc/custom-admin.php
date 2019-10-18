<?php
//https://codex.wordpress.org/Widgets_API
//https://codex.wordpress.org/Plugin_API/Admin_Screen_Reference
//https://wordpress.org/support/article/administration-screens/
//https://codex.wordpress.org/Adding_Administration_Menus


/* *** Hook para inyectar en el head los scripts css y js para que apliquen a la página de custom-admin.php *** */

if(!function_exists('eternalSlavery_admin_scripts')):
    function eternalSlavery_admin_scripts() {

        wp_register_style('google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat&display=swap', array(), '1.0.0','all');

        wp_register_style('custom-properties', get_stylesheet_directory_uri() . '/css/custom_properties.css', array(), '1.0.0', 'all');

        wp_register_style('admin-page-style', get_stylesheet_directory_uri() . '/css/admin_page.css', array('google-fonts', 'custom-properties', '1.0.0', 'all'
        ));

        wp_enqueue_style('google-fonts');
        wp_enqueue_style('custom-properties');
        wp_enqueue_style('admin-page-style');

        wp_register_script('admin-page-script', get_template_directory_uri() . '/js/admin_page.js', array('jquery'), '1.0.0', true);

        wp_enqueue_script('jquery');
        wp_enqueue_script('admin-page-script');
    }
endif;

add_action('admin_enqueue_scripts', 'eternalSlavery_admin_scripts');


/* *** Inyectar estilos css al Dashboard de WordPress *** */
// Como no se esta inyectando en la vista front ni en la de login sino en el back (admin de WordPress), no es necesario las dependencias ni id
if(!function_exists('eternalSlavery_add_editor_style')):

    function eternalSlavery_add_editor_style() {

        add_editor_style('https://fonts.googleapis.com/css?family=Montserrat&display=swap');
        add_editor_style('css/custom_properties.css');
        add_editor_style('css/custom_editor_style.css');

    }

endif;

add_action('admin_init', 'eternalSlavery_add_editor_style');


/* *** Remover menus del Dashboard de admin WordPress *** */
if(!function_exists('eternalSlavery_remove_admin_menu')):

function eternalSlavery_remove_admin_menu() {

	//remove_menu_page( 'index.php' );                  //Dashboard
	//remove_menu_page( 'jetpack' );                    //Jetpack* 
	//remove_menu_page( 'edit.php' );                   //Posts / Entradas
	//remove_menu_page( 'upload.php' );                 //Media / Multimedia
	//remove_menu_page( 'edit.php?post_type=page' );    //Pages
	//remove_menu_page( 'edit-comments.php' );          //Comments
	//remove_menu_page( 'themes.php' );                 //Appearance
	//remove_menu_page( 'plugins.php' );                //Plugins
	//remove_menu_page( 'users.php' );                  //Users
	//remove_menu_page( 'tools.php' );                  //Tools
    //remove_menu_page( 'options-general.php' );        //Settings
    
}

endif;

add_action( 'admin_menu', 'eternalSlavery_remove_admin_menu' );


/* *** Eliminar elementos del top menu Dashboard de admin WordPress *** */
if(!function_exists('eternalSlavery_before_admin_bar_render')):

    function eternalSlavery_before_admin_bar_render() {
        global $wp_admin_bar;
        
    /*
      search:para eliminar la caja de búsqueda
      comments:Para eliminar el aviso de comentarios
      updates:Eliminar el aviso de actualizaciones
      edit:Elimina editar entrada y páginas
      get-shortlink:Proporciona un enlace corto a esa página/post
      my-sites:Elimina el menu my sitios, si utilizas la función multisitios de wordpress
      site-name:Elimina el nombre de la web
      wp-logo:Elimina el logo(y el sub Menú)
      my-account:Elimina los enlaces a su cuenta. El ID depende de si usted tiene Avatar habilitado o no.
      view-site:Elimina el sub menú que aparece al pasar el cursor sobre el nombre de la web
      about:Elimina el enlace “Sobre WordPress
      wporg:Elimina el enlace a wordpress.org
      documentation:Elimina el enlace a la documentación oficial(Codex)
      support-forums:Elimina el enlace a los foros de ayuda
      feedback:Elimina el enlace Sugerencias
    */

    	//Remove the WordPress logo...
        //$wp_admin_bar->remove_menu('wp-logo');

        //Remove the WordPress new content...
        //$wp_admin_bar->remove_menu('new-content');

        //Remove the WordPress comments...
    	//$wp_admin_bar->remove_menu('comments');
    }

endif;

add_action( 'wp_before_admin_bar_render', 'eternalSlavery_before_admin_bar_render' ); 


/* *** Hook admin_bar_menu: Para crear nuevos menus en el dashboard *** */
if ( !function_exists( 'eternalSlavery_admin_bar_menu' ) ):
    function eternalSlavery_admin_bar_menu () {
      global $wp_admin_bar;
      $wp_admin_bar->add_menu( array(
        'id' => 'mi_menu', // El que detectará WP
        'title' => __('Mi menu', 'eternalSlavery'), // Texto visualizará el usuario. Usamos la función de traducción del texto
        'href' => false // False para permitir acceder a otras opciones como submenus
      ) );
      $wp_admin_bar->add_menu( array(
        'parent' => 'mi_menu', // parent para indicar que su padre es mi_menu
        'id' => 'link-nacho',
        'title' => __('Nacho-GitHub', 'eternalSlavery'),
        'href' => __('https://github.com/joseignaciorm/')
      ) );
      $wp_admin_bar->add_menu( array(
        'parent' => 'mi_menu',
        'id' => 'link-facebook',
        'title' => __('Facebook', 'eternalSlavery'),
        'href' => __('https://facebook.com/')
      ) );
      $wp_admin_bar->add_menu( array(
        'parent' => 'mi_menu',
        'id' => 'link-twitter',
        'title' => __('Twitter', 'eternalSlavery'),
        'href' => __('https://twitter.com/')
      ) );
    }

endif;
    add_action( 'admin_bar_menu', 'eternalSlavery_admin_bar_menu' );


/* *** Hook Filter user_contactmethods: Para insertar campos nuevos al menu usuarios en el dashboard. *** */
if ( !function_exists( 'eternalSlavery_user_contactmethods' ) ):
  function eternalSlavery_user_contactmethods ($data_user) {
    $data_user['facebook']=__('Facebook');
    $data_user['twitter']=__('Twitter');
    return $data_user;
  }
endif;
add_filter( 'user_contactmethods', 'eternalSlavery_user_contactmethods' );


/* *** Hook Filter admin_footer_text: Para cambiar el texto del footer del admin de usuarios de WP. *** */
if ( !function_exists( 'eternalSlavery_admin_footer_text' ) ):
    function eternalSlavery_admin_footer_text () {
      return '<i>
        Sitio creado por
        <a href="https://github.com/joseignaciorm/" target="_blank">@nacho</a>.
      </i>';
    }
endif;
add_filter('admin_footer_text', 'eternalSlavery_admin_footer_text');


/* *** Hook wp_dashboard_setup : Para quitar los metaboxes del dashboard principal. *** */
if ( !function_exists( 'eternalSlavery_wp_dashboard_setup' ) ):
    function eternalSlavery_wp_dashboard_setup () {
      //Actividad
        //remove_meta_box( 'dashboard_activity', 'dashboard', 'normal' );
      //De un vistazo
        //remove_meta_box('dashboard_right_now', 'dashboard', 'normal');
      // Comentarios recientes
        //remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
      // Enlaces entrantes
        //remove_meta_box('dashboard_incoming_links', 'dashboard', 'normal');
      // Plugins
        //remove_meta_box('dashboard_plugins', 'dashboard', 'normal');
      //Publicación rápida
        //remove_meta_box('dashboard_quick_press', 'dashboard', 'side');
      // Borradores recientes
        //remove_meta_box('dashboard_recent_drafts', 'dashboard', 'side');
      //Noticas del blog de WordPress
        //remove_meta_box('dashboard_primary', 'dashboard', 'side');
      //Otras noticias de WordPress
        //remove_meta_box('dashboard_secondary', 'dashboard', 'side');
    }
endif;
  add_action( 'wp_dashboard_setup', 'eternalSlavery_wp_dashboard_setup' );
  ?>