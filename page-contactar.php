<?php get_header(); ?>
<div id="container" class="pagina contactar">	
<?php get_template_part( 'include/cabecera', 'paginas' ); ?>
	<?php // Cuerpo . Content - Páginas ?>

<div class="fullscreen background parallax" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/fondo_contacta.jpg');" data-img-width="1600" data-img-height="897" data-diff="100">
    <div class="content-a">
        <div class="content-b">
	        <div class="head_layout">
	        	<div class="formulario">
					<?php echo do_shortcode( '[contact-form-7 id="85" title="Formulario de contacto 1"]' ); ?>
					
				</div> <?php //formulario ?>

		        <div class="datos_contacto">
		        	<div class="wrapper-datos">
		        	<img src="<?php echo get_template_directory_uri(); ?>/images/logo_contacto.png" alt="contacto">
		        		<h3>918 523 808</h3>
		        		<p>Carretera de Fuenfría Km 3.9</p>
		        		<p>28470 Cercedilla</p>
		        	</div>
		        	
		        </div> <?php // datos contacto ?>
		        <div class="cl"></div>
	        </div> <?php // head klayout ?>

        </div>
    </div>
</div>

<?php get_footer(); ?>