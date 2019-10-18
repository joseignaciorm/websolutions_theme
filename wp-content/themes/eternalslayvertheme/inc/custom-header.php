<?php

if(!function_exists('eternalSlavery_custom_header')):
    function eternalSlavery_custom_header() {
        // Activar cabecera configurable
        // https://developer.wordpress.org/themes/functionality/custom-headers/
        add_theme_support('custom-header', apply_filters('eternalSlavery_custom_header_args', array(
            'default-image'         => get_template_directory_uri() . '/img/header-image.jpeg', // Puede ser png o jpg
            'default-text-color'    => 'F60', // Establece color de texto. Debe estar en HEX
            'width'                 => 450, 
            'height'                => 450,
            'flex-width'            => true,
            'flex-height'           => true,
            'video'                 => true,
            'wp-head-callback' => 'eternalSlavery_wp_header_style'
        )));
    }
endif;
    add_action('after_setup_theme', 'eternalSlavery_custom_header');

    // Definiendo la función eternalSlavery_wp_header_style
    if(!function_exists('eternalSlavery_wp_header_style')):
        function eternalSlavery_wp_header_style() {
            $header_text_color = get_header_textcolor();
        }
?>

    <style>
        .WP-Header-branding * {
            color: #<?php echo esc_attr($header_text_color); ?>
        }
    </style>

<?php
    endif;

    ?>