<?php get_header(); ?>
<div id="container" class="pagina teambuilding dinamicas">	
<?php get_template_part( 'include/cabecera', 'paginas' ); ?>
	<?php // Cuerpo . Content - Páginas ?>

	<div class="not-fullscreen background" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/high_atm_1.jpg');" data-img-width="1600" data-img-height="629" data-diff="100">
	    <div class="content-a">
	        <div class="content-b">
		        <div class="high-ropes">	        	
		        	<div class="wrap">
		        		<h3>Actividades de Formación</h3>
		        		<h2>Team Building</h2>
		        	</div>
		        	<h2>High Ropes</h2>
		        </div> <?php // high-ropes ?>
	        </div> <?php //content b ?>
	    </div> <?php //content a ?>
	</div> <?php //not - fullscreen ?>
	<section class="linea_amarilla"></section>
	<section class="linea_azul"></section>
	<div class="high_table">
		<div class="superior">
			<div class="head-layout">
				<div class="section-wrap">
					<p class="p1">Las dinámicas de Team Building High Ropes se desarrollan en altura y en equipo. Son construcciones realizadas con materiales nobles, entre árboles y suponen un reto de superación tanto individual como de equipo.</p>
					<p class="p1">Las experiencias que les hacemos vivir permiten a los participantes explorar sus límites y reflexionar sobre si las actitudes que exhiben impulsan o frenan el desarrollo. El nivel de compromiso de los participantes en las tareas alcanza niveles muy altos. Alto impacto para alto rendimiento. Convierte los equipos de trabajo en "Equipos de Alto Rendimiento".</p>
				</div>
				
			</div>
		</div> <?php //superior ?>
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

						if($tipo[0]==4) {
								// highropes = 4, lowropes = 5, otros = 6
						$image = wp_get_attachment_image_src(get_field('foto'), 'thumbnail');
						$image_large = wp_get_attachment_image_src(get_field('foto'), 'large');
						


				?>
				<div class="fila"> 
					<div class="celda pri"><?php echo get_the_title($post->ID) ?></div>
					<div class="celda seg"><img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title($post->ID) ?>"></div>
					<div class="celda ter"><?php the_field('breve') ?> <a class="mas" data-toggle="modal" data-target="#<?php echo $post->post_name ?>" href="#<?php echo $post->post_name ?>">Leer Más</a></div>
				</div>


				<div id="<?php echo $post->post_name ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
				  <div class="modal-dialog modal-lg">
				  	<div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="myModalLabel"><?php echo get_the_title($post->ID) ?></h4>
				     </div>
				    <div class="modal-content">
				 			<img src="<?php echo $image_large[0]; ?>" alt="<?php echo get_the_title($post->ID) ?>">
				 			<div class="leer_mas">
				 				<?php the_field('breve') ?><br>
				 				<?php the_field('leer_mas');?> 
				 			</div>
				    </div>
				  </div>
				</div> 
				<?php

				  } // if tipo high ropes (4)

				 } // for each

				} // if posts ?> 


			</div> <?php //tabla ?>
			
		</div> <?php // head layout ?>

	</div> <?php // high table ?>

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
					<a href="<?php echo site_url(); ?>/actividades-de-formacion/team-building/otras-dinamicas/">
						<img src="<?php echo get_template_directory_uri(); ?>/images/boton_dinamicas.jpg" alt="dinamicas res">
						<span class="din">
							<h3>Otras</h3>
							<h2>Dinámicas</h2>
							<figure></figure>
						</span>
					</a>
				</li>
			</ul>	
			<div style="clear:both"></div>
		</div>
	</div>



	
<?php get_footer(); ?>