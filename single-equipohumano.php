
<?php get_header(); ?>
<div id="container" class="pagina instalaciones equipo">
    <?php get_template_part( 'include/cabecera', 'paginas' ); ?>
    <?php // Cuerpo . Content - Páginas ?>

<?php 

/*

Wordpress Loop para captar los datos

*/ 

 ?>  

<?php while ( have_posts() ) : the_post(); ?>
<div class="fullscreen background parallax" style="background-image:url('<?php the_field('foto'); ?>');" data-img-width="1600" data-img-height="900" data-diff="100">
    <div class="content-a">
        <div class="content-b">
          <div class="exper">
	          <section class="wrap" >
                 <div class="contenedor">
                     <div class="nombre">
                        <div class="vcentrar">
                            <?php $custom_fields = get_post_custom(); ?>
                            <h1><?php echo the_title() ?></h1>
                            <h4><?php the_field('titulo'); ?></h4>                          
                        </div>
                    </div>
                    <div class="historia">
                        <?php the_field('cita'); ?>
                    </div>
                    <div class="telefono">
                        <div class="redes">
                            <ul class="nav social">
                            <?php  // redes sociales - Verificar que existen - solo aparecen las que existen
                                $facebook = get_field('facebook');
                                $twitter = get_field('twitter');
                                $rss = get_field('rss');
                                $youtube = get_field('youtube');
                                $googleplus = get_field('googleplus');
                                $linkedin = get_field('linkedin');
                                $email = get_field('correo_electronico');
                                $telefono = get_field('telefono');

                             ?>
                             <?php if( $facebook ): ?>
                                <li><a href="<?php echo $facebook; ?>" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
                            <?php endif; ?>  
                            <?php if( $twitter ): ?>
                                <li><a href="<?php echo $twitter; ?>" target="_blank"><i class="fa fa-twitter-square"></i></a></li>
                            <?php endif; ?>  
                             <?php if( $rss ): ?>
                                <li><a href="<?php echo $rss; ?>" target="_blank"><i class="fa fa-rss-square"></i></a></li>
                            <?php endif; ?>  
                            <?php if( $youtube ): ?>
                                <li><a href="<?php echo $youtube; ?>" target="_blank"><i class="fa fa-youtube-square"></i></a></li>
                            <?php endif; ?>  
                             <?php if( $googleplus ): ?>
                                <li><a href="<?php echo $googleplus; ?>" target="_blank"><i class="fa fa-google-plus-square"></i></a></li>
                            <?php endif; ?>  
                            <?php if( $linkedin ): ?>
                                <li><a href="<?php echo $linkedin; ?>" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>
                            <?php endif; ?>  
                            </ul>

                            <ul class="mas_info">
                                <li class="email">
                                    <?php if( $email): ?>
                                        <a href="mailto:<?php echo $email ?>"></a>
                                    <?php endif; ?> 
                                </li>
                                 <?php if( $telefono): ?>
                                    <li class="num">
                                        <?php echo $telefono ?>
                                    </li>
                                <?php endif; ?> 
                            </ul>
                        </div>
                    </div>
                    
                 </div> <?php // contendeor ?>
	           </section>
          </div>
        </div>
    </div>
</div>
<?php endwhile; // end of the loop. ?>


<?php 

/* 

Obtener el resto de los miembros del equipo humano

*/
    $args = array(
    'post_type' => 'equipohumano',
    'order' => 'ASC', // cambiar el orden
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
    </div> <?php // head_layout ?>
</div> <?php // info_equipo ?>
<div style="clear:both"></div>
  
<?php get_footer(); ?>
