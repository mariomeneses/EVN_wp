<?php
/**
 * Template Name: Contacto Template
 */
?>

<?php get_header(); ?>

        <section class="sec_contacto">
            <article class="art_contacto">
                <fieldset id="contact_form">
                    <legend>Contacto</legend>
                    <div id="result"></div>
                    <label for="name"><span>Nombre</span>
                        <input type="text" name="name" id="name"  />
                    </label>
                    
                    <label for="email"><span>E-mail</span>
                        <input type="email" name="email" id="email" />
                    </label>
                    
                    <label for="phone"><span>Tel&eacute;fono</span>
                        <input type="text" name="phone" id="phone"/>
                    </label>
                    
                    <label for="message"><span>Mensaje</span>
                        <textarea name="message" id="message" ></textarea>
                    </label>
                    
                    <label><span>&nbsp;</span>
                        <button class="submit_btn" id="submit_btn">Enviar</button>
                    </label>
                </fieldset>
            </article>
        </section>
<?php get_footer(); ?>
