<?php
/**
 * Template Name: Condiciones de compra Template
 */
?>
<?php get_header(); ?>
        <section class="condic">
        <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
            <article >
                <div class="title_condic"><?php the_title(); ?></div>
                <div class="texto_condic">
                <?php the_content(); ?>
                </div>
            </article>
			<?php endwhile; else: ?>
				<h1>No se encontraron Artículos</h1>
			<?php endif; ?>
        </section>

<?php get_footer(); ?>
