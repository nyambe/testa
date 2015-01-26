<?php get_header(); ?>
<div id="container" class="pagina quienes-somos">	
	 <?php get_template_part( 'include/cabecera', 'paginas' ); ?> 
	<?php // Cuerpo . Content - Páginas ?>
		<section class="slider_container">
			<div id="slider" class="nivoSlider">
				<?php 
					/*
					*
					*
					* Slider portada con imágenes, mejor que sean del mismo tamaño
					*
					*
					*/
				 ?>
				
				<img src="<?php echo get_template_directory_uri(); ?>/images/fondo_metodologia.jpg" title="#subcategorias" alt="slider" />
				<img src="<?php echo get_template_directory_uri(); ?>/images/fondo_equipo.jpg" title="#subcategorias" alt="slider"  />
				<img src="<?php echo get_template_directory_uri(); ?>/images/fondo_quienes.jpg" title="#subcategorias" alt="slider"  />
			</div>
			<div id="subcategorias" class="nivo-html-caption">
				<ul>
					<?php
					// Títulos de lás subpáginas de la pagina actual.  Jquery para clase activo
					wp_list_pages('title_li=&child_of='.$post->ID); ?>
				</ul>
			</div>
		</section>
		<section class="entry-content cf" itemprop="articleBody">

			<div class="head_layout">
				<div class="izq nomovil">
					<img src="<?php echo get_template_directory_uri(); ?>/images/white_logo.png" alt="white logo">
				</div> <?php //izq ?>
				<div class="der">
				<p>Somos un equipo de personas interdisciplinar con una amplia experiencia en la organización de actividades de Formación Experiencial y en la organización de Eventos, Jornadas de Incentivos y Motivación para Empresas al aire libre (outdoor training).</p>
				<p>Contamos con la gran ventaja de disponer de unas instalaciones fijas de team building, diseñadas y construidas en plena naturaleza, en el Valle de La Fuenfría, en Cercedilla (Madrid), cuyo único objetivo desde su concepción ha sido cubrir las necesidades y expectativas de los equipos de trabajo de las empresas. CONÓCELAS!</p>

				</div> <?php  // der  ?>
			</div>

		</section> <?php // end section ?>
	






<?php get_footer(); ?>