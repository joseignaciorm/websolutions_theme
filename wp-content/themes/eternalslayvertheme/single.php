<?php get_header(); ?>
<?php while(have_posts()): the_post(); ?>
    <section> 
        <?php the_title(); ?>
        <?php the_content(); ?>  <!-- Inserta el contenido de la entrada -->
    </section> 
    <!-- Comments -->
    <?php comments_template(); ?> <!-- Llama al archivo comments.php -->
        <hr>
<?php endwhile; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>