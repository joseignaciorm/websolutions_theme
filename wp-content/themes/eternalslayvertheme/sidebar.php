<!--<?php ?>-->
<!-- Sidebar -->
<article class="sidebar_content l-section l-container">
    <aside class="sidebar_content--items">
        <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
        <article class="l-section">
            <?php the_title(); ?>
            <?php the_title('<h1 class="title_post">', '</h1>', 'echo'); ?>
            <?php 
                $titulo = 'Titulo ' . get_the_title() . '<br>';
                echo $titulo;
            ?>

            <?php the_permalink() . '<br><br>'; ?> <br>
            <?php the_post_thumbnail(); ?> <br><br>
            <?php echo get_the_post_thumbnail_url(); ?> <br><br>
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">

            <h2>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

            </h2>
            <?php the_excerpt(); ?>
            
        </article>
  

            <?php endwhile; else: ?>

                <p>El contenido solicitado no existe.</p>
<?php endif; ?>

        <section class="pagination">
            <?php //previous_post_link(); ?>
            <?php //previous_post_link(); ?>
            <?php echo paginate_links(); ?>
        </section>

    </aside>
</article>