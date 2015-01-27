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
include('library/bajo-equipo-humano.php');
?>

  
<?php get_footer(); ?>

