<?php get_header(); ?>
<div id="container" class="pagina instalaciones equipo">
    <?php get_template_part( 'include/cabecera', 'paginas' ); ?>
    <?php // Cuerpo . Content - Páginas ?>
 
<div class="fullscreen background parallax" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/fondo_equipo_1.jpg');" data-img-width="1600" data-img-height="897" data-diff="100">
    <div class="content-a">
        <div class="content-b">
          <div class="exper">
	          <section>
	           		<h2>"Ninguno de nosotros es tan bueno<br>como todos nosotros juntos"</h2>
	           </section>
          </div>
        </div>
    </div>
</div>
<?php 

/* 

Obtener el resto de los miembros del equipo humano

*/
    $args = array(
    'post_type' => 'equipohumano',
    'order' => 'ASC',  // cambiar el orden
    'posts_per_page' => 6 /* limitar a 6, cambiar para ampliar */
    ); 

    $posts = get_posts($args);

 ?> 
<section class="nombres">
    <div class="content-a">
        <div class="content-b">
        <div class="head_layout">
        <h2>Equipo Humano</h2>  
            <ul class="listado" >
                 <?php 
                 // Query 
                    if($posts) {
                        foreach ($posts as $key => $post) { ?>
            
                    <li>
                        <span class="nombre"><?php echo $post->post_title ?></span>
                        <span class="puesto"><?php the_field('titulo'); ?></span>
                        <a href="<?php echo site_url(); ?>/equipo/<?php echo $post->post_name ?>"></a>
                    </li>

                     <?php } // foreach
                    } // if posts

                  ?> 
            </ul>            
        </div> <?php //head layout ?>
        
        </div>
    </div> <?php // content-a ?>
    
</section> <?php // nombres ?>
  
<div class="info_equipo">
    <div class="head_layout">
        <div class="izq nomovil">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo_gris.png" alt="white logo">
            <a class="info" href="<?php echo site_url(); ?>/contactar"><img src="<?php echo get_template_directory_uri(); ?>/images/contacto_equipo.png" alt="contacto"> </a>
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

