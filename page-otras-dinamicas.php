<?php get_header(); ?>
<div id="container" class="pagina teambuilding dinamicas">	
<?php get_template_part( 'include/cabecera', 'paginas' ); ?>
	<?php // Cuerpo . Content - Páginas ?>

	<div class="not-fullscreen background" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/dina_atm_1.jpg');" data-img-width="1600" data-img-height="629" data-diff="100">
	    <div class="content-a">
	        <div class="content-b">
		        <div class="dina-ropes">	        	
		        	<div class="wrap">
		        		<h3>Actividades de Formación</h3>
		        		<h2>Team Building</h2>
		        	</div>
		        	<h2>Otras Dinámicas</h2>
		        </div> <?php // dina-ropes ?>
	        </div> <?php //content b ?>
	    </div> <?php //content a ?>
	</div> <?php //not - fullscreen ?>
	<section class="linea_amarilla"></section>
	<section class="linea_orange"></section>
	<div class="dina_table">

		<div class="head_layout">
			<div class="tabla">

				<?php 
					$args = array(
					'post_type' => 'dinamicas',
					'posts_per_page' => -1
				 	); 

					$posts = get_posts($args);


				 ?>


				<?php if($posts) {  
					foreach($posts as $post)
					{
						$tipo = (get_field('tipo_dinamica'));

						if($tipo[0]==6) {
								// highropes = 4, lowropes = 5, otros = 6
						$image = wp_get_attachment_image_src(get_field('foto'), 'thumbnail');
						$image_large = wp_get_attachment_image_src(get_field('foto'), 'large');
						


				?>
				<div class="fila"> 
					<div class="celda pri"><?php echo get_the_title($post->ID) ?></div>
					<div class="celda ter"><?php the_field('breve') ?></div>
				</div>

				<?php
				
				  } // if tipo high ropes (6)

				 } // for each

				} // if posts ?> 


			</div> <?php //tabla ?>
			
		</div> <?php // head layout ?>

	</div> <?php // dina table ?>


	<div class="second">
		<div class="head_layout">
			<div class="section-wrap informacion">
		 		<h2>¿Necesitas más información sobre nuestras dinámicas?</h2>
				<div class="wrap">
					<ul class="contacto">
						<a href="<?php echo site_url(); ?>/contactar"></a>
						<a href="<?php echo site_url(); ?>/contactar"></a>
						<a href="<?php echo site_url(); ?>/contactar"></a>
					</ul>
					<span>Contacta con nosotros</span>
				</div> <?php //wrap ?>
			</div> <?php //section wrap ?>
		</div>	<?php // head layout ?>	
	</div> <?php //second ?>

	<div class="fourth">
		<div class="section-wrap">
			<ul class="menu-building">
				<li>
					<a href="<?php echo site_url(); ?>/actividades-de-formacion/team-building/dinamicas-high-ropes/">
						<img src="<?php echo get_template_directory_uri(); ?>/images/boton_high.jpg" alt="high res">
						<span class="high">
							<h3>Team Building</h3>
							<h2>High Ropes</h2>
							<figure></figure>
						</span>
					</a>
				</li>
				<li>
					<a href="<?php echo site_url(); ?>/actividades-de-formacion/team-building/dinamicas-low-ropes/">
						<img src="<?php echo get_template_directory_uri(); ?>/images/boton_low.jpg" alt="low res">
						<span class="low">
							<h3>Team Building</h3>
							<h2>Low Ropes</h2>
							<figure></figure>
						</span>
					</a>
				</li>
				<li>
			</ul>	
			<div style="clear:both"></div>
		</div>
	</div>



	
<?php get_footer(); ?>