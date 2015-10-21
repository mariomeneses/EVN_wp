<?php
/**
 * Template Name: Semillas automáticas Template
 */
?>
<?php get_header(); ?>
        <div class="wrapcenter">
                    <div id="menuChicoC">
                <input id="check2" type="checkbox" />
                <label for="check2">
                    MENÚ CATEGORÍAS
                </label>
                <div class="menu_1">
                    <ul>
                        <li ><a href="semillas-feminizadas.php" ><h2 class="seo">SEMILLAS FEMINIZADAS</h2></a></li>
                        <li ><a href="semillas-automaticas.php" ><h2 class="seo">SEMILLAS AUTOMÁTICAS</h2></a></li>
                        <li ><a href="fertilizantez.php" ><h2 class="seo">FERTILIZANTES</h2></a></li>
                        <li ><a href="vestuario.php"     ><h2 class="seo">VESTUARIO Y ACCESORIOS</h2></a></li>
                        <li ><a href="<?php echo $cosmetica->permalink; ?>"><h2 class="seo">COSMÉTICA</h2></a></li>
                    </ul>
                </div>
            </div>
            <div class="cont_aside">
                <aside class="cat">
                    <nav class="cat_1">
                        <ul id="cat-nav">
                            <li class="title_cat">&nbsp;CATEGORÍAS</li>
                            <li><a href="semillas-feminizadas.php"><h2 class="seo">&#43;&nbsp;SEMILLAS FEMINIZADAS</h2></a></li>
                            <li><a href="semillas-automaticas.php"><h2 class="seo">&#43;&nbsp;SEMILLAS AUTOMÁTICAS</h2></a></li>
                            <li><a href="fertilizantes"><h2 class="seo">&#43;&nbsp;FERTILIZANTES</h2></a></li>
                            <li><a href="vestuario.php"><h2 class="seo">&#43;&nbsp;VESTUARIO Y ACCESORIOS</h2></a></li>
                            <li class="li_cos"><a href="<?php echo $cosmetica->permalink; ?>"><h2 class="seo">&#43;&nbsp;COSMÉTICA</h2></a></li>
                        </ul>
                    </nav>
                </aside>
            </div>
            <div class="cont_prod">
                <section class="productos">
                    <div class="title_seccion"><strong class="seo">COSMÉTICA</strong></div>
<?php query_posts('category_name=semillas-automaticas'); ?>
            <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
                    <div class="item_home">
                        <div itemscope itemtype="http://schema.org/Product">
                            <h3 class="item_home_cat"><span itemprop="name"><?php the_title(); ?></span></h3>
                            <div itemprop="image" class="img_productos" src="img/1.png" alt="<?php the_title(); ?>" title="Crema facial de cannabis">
                                <a href="<?php the_permalink(); ?>">
                                    <?php if(has_post_thumbnail()){ the_post_thumbnail('list_articles_thumbs');} ?>
                                </a>
                            </div>
                            <div class="text_home">
                                <h4 class="text_home">
                                    <span itemprop="description">
                                        <?php the_excerpt(); ?>
                                    </span>
                                </h4>
                                    <a href="<?php the_permalink(); ?>" class="btn_vermas"><img src="<?php bloginfo('template_directory'); ?>/img/vermas.jpg" alt="Ver mas"></a>&nbsp;&nbsp;&nbsp;
                                    <a href="#" class="btn_vermas" onclick="add(1, 1, 12900, 'CREMA FACIAL DE CANNABIS')"><img src="<?php bloginfo('template_directory'); ?>/img/agregar.jpg" alt="Agregar"></a>
                            </div>
                        </div>
                    </div>
            <?php endwhile; else: ?>
                <h1>No se encontraron Artículos</h1>
            <?php endif; ?>
                </section>
            </div>
        </div>
<?php get_footer(); ?>