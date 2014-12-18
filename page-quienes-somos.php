<?php get_header(); ?>
<div id="container" class="paginas quienes-somos">	
	 <?php get_template_part( 'include/cabecera', 'paginas' ); ?> 


	<?php // Cuerpo . Content - Páginas ?>
	<div id="content" class="paginas">
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

			<div class="layout">
				<div class="izq">
					<img src="<?php echo get_template_directory_uri(); ?>/images/white_logo.png" alt="white logo">
				</div>
				<div class="der">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php //Aquí va el contenido del artículo 
				the_content();
				/*
				* Link Pages is used in case you have posts that are set to break into
				* multiple pages. You can remove this if you don't plan on doing that.
				*
				* Also, breaking content up into multiple pages is a horrible experience,
				* so don't do it. While there are SOME edge cases where this is useful, it's
				* mostly used for people to get more ad views. It's up to you but if you want
				* to do it, you're wrong and I hate you. (Ok, I still love you but just not as much)
				*
				* http://gizmodo.com/5841121/google-wants-to-help-you-avoid-stupid-annoying-multiple-page-articles
				*
				*/
				global $id;
				wp_link_pages( array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
				) );


				?>
				<?php endwhile; else : ?>
					<article id="post-not-found" class="hentry cf">
						<header class="article-header">
							<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
						</header>
						<section class="entry-content">
							<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
						</section>
						<footer class="article-footer">
							<p><?php _e( 'This is the error message in the page.php template.', 'bonestheme' ); ?></p>
						</footer>
					</article>
				<?php endif; ?>
				</div>
			</div>

		</section> <?php // end section ?>
	</div>






<?php get_footer(); ?>