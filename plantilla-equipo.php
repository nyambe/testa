<?php
/*
 Template Name: Plantilla Equipo
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>
<div id="container" class="pagina instalaciones equipo">
    <?php get_template_part( 'include/cabecera', 'paginas' ); ?>
    <?php // Cuerpo . Content - Páginas ?>
 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="fullscreen background parallax" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/ana_porras.jpg');" data-img-width="1600" data-img-height="897" data-diff="100">
    <div class="content-a">
        <div class="content-b">
          <div class="exper">
	          <section class="wrap" >
                 <div class="contenedor">
                     <div class="nombre">
                        <div class="vcentrar">
                            <?php $custom_fields = get_post_custom(); ?>
                            <h1><?php echo the_title() ?></h1>
                            <h4><?php echo $custom_fields['titulo'][0] ?></h4>                          
                        </div>
                    </div>
                    <div class="historia">
                        <?php the_content(); ?>
                    </div>
                    <div class="telefono">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et voluptatibus dolorem quibusdam adipisci repudiandae excepturi dignissimos quidem sed tempora quasi officiis, numquam eius consectetur consequatur neque tempore, quae fugit accusamus.
                    </div>
                    
                 </div> <?php // contendeor ?>
	           </section>
          </div>
        </div>
    </div>
</div>
<?php endwhile; else : ?>

		<article id="post-not-found" class="hentry cf">
				<header class="article-header">
					<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
			</header>
				<section class="entry-content">
					<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
			</section>
			<footer class="article-footer">
					<p><?php _e( 'This is the error message in the page-custom.php template.', 'bonestheme' ); ?></p>
			</footer>
		</article>

<?php endif; ?>  
<section class="nombres">
    <div class="content-a">
        <div class="content-b">
        <div class="head_layout">
        <h2>Equipo Humano</h2>  
            <ul class="listado" >
                <li>
                    <span class="nombre">ANA PORRAS</span>
                    <span class="puesto">DIRECTORA AMAZONIA TEAM FACTORY</span>
                    <a href="<?php echo site_url(); ?>/equipo-humano/ana-porras"></a>
                </li>
                <li>
                    <span class="nombre">EVA ANDRÉS</span>
                    <span class="puesto">COORDINADORA DE PROYECTOS AMAZONIA TEAM FACTORY</span>
                     <a href="#"></a>
                </li>
                <li>
                    <span class="nombre">FÉLIX ÚBEDA</span>
                    <span class="puesto">RESPONSABLE DE PRODUCCIÓN DE EVENTOS AMAZONIA TEAM FACTORY</span>
                    <a href="#"></a>
                </li>

                <li>
                    <span class="nombre">IVÁN GANDÍA</span>
                    <span class="puesto">CONSULTOR Y  FACILITADOR AMAZONIA TEAM FACTORY</span>
                    <a href="#"></a>
                </li>
                <li>
                    <span class="nombre">CARMEN MARTÍNEZ</span>
                    <span class="puesto">CONSULTORA Y  FACILITADORA AMAZONIA TEAM FACTORY</span>
                    <a href="#"></a>
                </li>
                <li>
                    <span class="nombre">ÁNGELA MORENO</span>
                    <span class="puesto">CONSULTORA Y FACILITADORA AMAZONIA TEAM FACTORY</span>
                    <a href="#"></a>
                </li>
            </ul>            
        </div> <?php //head layout ?>
        
        </div>
    </div>
    
</section>
  
  
<div class="info_equipo">
    <div class="head_layout">
        <div class="izq nomovil">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo_gris.png" alt="white logo">
            <a class="info" href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/contacto_equipo.png" alt="contacto"> </a>
        </div>
        <div class="der">
            <h2>Equipo Humano</h2>
            <p class="p1">AMAZONIA TEAM FACTORY ha creado un espacio inmejorable para el desarrollo humano. Nuestro valor reside, por un lado, en la amplia experiencia desarrollando y explotando programas de Formación Vivencial al aire libre, y de otro, disponemos de unas instalaciones de dinámicas únicas en España, concebidas desde su construcción, para desarrollar las competencias profesionales de los equipos de trabajo. </p> 
            <p>El secreto de nuestro éxito es no tomar al individuo como algo aislado de su profesión: el objetivo no es tanto formar a los profesionales que ya poseen conocimientos con bases sólidas, sino «re-formar» los hábitos emocionales para hacer frente a la espiral de cambio en las empresas.</p>
        </div>
    </div>
</div>
<div style="clear:both"></div>
  
<?php get_footer(); ?>
