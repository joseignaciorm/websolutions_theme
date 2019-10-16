<?php
    if(!function_exists('eternalSlavery_customize_register')):
        function eternalSlavery_customize_register($wp_customize) { // $wp_customize variable global de wp.
            $wp_customize->get_settings('blogname')->transport='postMessage';
            $wp_customize->get_settings('blogdescription')->transport='postMessage';

            if(isset($wp_customize->selective_refresh)) { // función que se activo en el functions.php. 
                //add_theme_support('customize-selective-refresh-widgets');
                // Si existe la funcion, permite que se configure lo siguiente en tiempo real.
                $wp_customize->selective_refresh->add_partial('blogname', array(
                    'selector'          => '.WP-Header-title',
                    'render-callback'   => 'eternalSlavery_customize_blogname' // Render-callback lanza una función de callback que hay que crear y que permitira realizar la modificacion
                ));

                $wp_customize->selective_refresh->add_partial('blogdescription', array(
                    'selector'          => '.WP-Header-description',
                    'render-callback'   => 'eternalSlavery_customize_blogdescription' // Render-callback lanza una función de callback que hay que crear y que permitira realizar la modificacion
                ));

            }

        }
    endif;

    if(!function_exists('eternalSlavery_customize_blogname')):
        function eternalSlavery_customize_blogname() {
            bloginfo('name');
        }
    endif;

    if(!function_exists('eternalSlavery_customize_blogdescription')):
        function eternalSlavery_customize_blogdescription() {
            bloginfo('description');
        }
    endif;

?>