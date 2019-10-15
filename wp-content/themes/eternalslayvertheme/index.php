<?php
/* Funciones para invocar los archivos del html

# get_header(); 
# get_sidebar();
# get_footer();
# get_template_part($slug, $name); Para invocar cualquier otro archivo

*/

get_header();
if(is_home()) {
    echo '<mark>Estoy en el home</mark>';
} 

if(is_category()) {
    echo '<mark>Estoy mostrando resultado de categorías</mark>';
} 

if(is_category('pequeno')) {
    echo '<mark>Estoy mostrando resultado de la categoría pequeños</mark>';
} 
/*
if (is_tags()) {
    echo '<mark>Estoy mostrando resultado de etiquetas</mark>';
} 
*/



get_template_part('banner');
get_sidebar();
get_template_part('content');
get_footer();


?>




