<?php get_header(); ?>
<section>
    <article class="detalle">
    <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
        <div class="img_detalle"><?php if(has_post_thumbnail()){ the_post_thumbnail('list_articles_thumbs');} ?></div>
        <div class="det_producto">
            <div class="nombre_item"><?php the_title(); ?></div>
            <select id="region">
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
                <option value="mercedes">Mercedes</option>
                <option value="audi">Audi</option>
            </select>
            <br><br><a href="#" onclick="add(1, 1, 19990, 'Producto destacado 1')"><img src="<?php bloginfo('template_directory'); ?>/img/agregar.jpg" alt="Agregar"></a>
            <h3 class="text_descrip"></h3>
            <div class="text_descrip"><?php the_content(); ?></div>
        </div>
		<?php endwhile; else: ?>
				<h1>No se encontraron Artículos</h1>
			<?php endif; ?>
    </article>
</section>
<?php get_footer(); ?>