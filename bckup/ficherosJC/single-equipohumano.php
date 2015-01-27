
<?php get_header(); ?>
<style>
/*PRIMER BLOQUE*/

h1.nombrepersona{ text-transform:capitalize;}
.equipo p { font-size: 14px; line-height: 1.6em; }
.equipo .listado {
width: 100%;
}
@media (max-width: 768px) {
	div.nombre {width:100%!important; margin-left:0px; margin-right:0px!important;}
	.historia {width:100%!important; margin-left:0px; margin-right:0px!important;}
	.telefono {width:100%!important;}
}
@media (min-width: 769px) and (max-width: 1279px) {
	div.nombre {width:50%!important; margin-left:0px; margin-right:0px!important;}
	.historia {width:50%!important; margin-left:0px; margin-right:0px!important;}
	.telefono {width:100%!important;}
}

.telefono {
margin: 0 auto;
text-align: center;
}
.redes{width: 280px;margin: 0 auto;}
</style>
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
                            <h1 class="nombrepersona"><?php echo the_title() ?></h1>
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
include('library/bajo-equipo-humano.php');
?>
  
<?php get_footer(); ?>
