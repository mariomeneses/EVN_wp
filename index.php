<?php get_header(); ?>
			<article class="news">
				
					<div class="noticia" id="slides">
				      <img src="<?php bloginfo('template_directory'); ?>/img/noticia.png" alt="">
				      <img src="<?php bloginfo('template_directory'); ?>/img/noticia.png" alt="">
				      <img src="<?php bloginfo('template_directory'); ?>/img/noticia.png" alt="">
			    	</div>
				
			</article>
<section class="section">
			<article class="ult_prod">
				<div class="ult_prods">
					<h2 class="ult_prods">ÚLTIMOS PRODUCTOS</h2>
				</div>
<?php query_posts('category_name=ultimos-productos'); ?>
			<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
				<div class="item_home_index">
					<div itemscope itemtype="http://schema.org/Product">
						<span itemprop="name"><h3 class="item_home"><?php the_title(); ?></h3></span>
							<div class="item_home_img" itemprop="image" class="item_home_img" alt="<?php the_title(); ?>">
								<a href="<?php the_permalink(); ?>">
									<?php if(has_post_thumbnail()){ the_post_thumbnail('list_articles_thumbs');} ?>
								</a>
							</div>
							<div class="text_home">
								<span itemprop="description">
									<h4 class="text_home"><?php the_excerpt(); ?></h4>
								</span>
		                        <a href="<?php the_permalink(); ?>" class="btn_vermas"><img src="<?php bloginfo('template_directory'); ?>/img/vermas.jpg" alt="Ver mas"></a>&nbsp;&nbsp;&nbsp;
		                        <a href="#" class="btn_vermas" onclick="add(1, 1, 19990, 'Producto destacado 1')"><img src="<?php bloginfo('template_directory'); ?>/img/agregar.jpg" alt="Agregar"></a>
							</div>
					</div>
				</div>
			<?php endwhile; else: ?>
				<h1>No se encontraron Artículos</h1>
			<?php endif; ?>
								
			</article>
		</section>
<?php get_footer(); ?>