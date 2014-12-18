<?php get_header(); ?>
<div id="container" class="paginas formacion">	
	<header role="banner" itemscope itemtype="http://schema.org/WPHeader">
		<div class="cabecera <?php if (is_home()) echo 'home'; ?>">
			<section class="layout">
				<div class="nav_superior">
					<div class="logo"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php // bloginfo('name'); ?> <img src="<?php echo get_template_directory_uri(); ?>/library/images/logo320.png" alt="Logotipo"></a></div>
					
					<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>
					<div class="nav">
						<ul>
							<li><a href="#"><i id="menu" class="fa fa-bars animenu__toggle"></i></a>
							
							<?php wp_nav_menu(array(
							'container' => false,                           // remove nav container
							'container_class' => '',                 // class of container (should you choose to use it)
							'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
							'menu_class' => 'animenu2',               // adding custom nav class
							'theme_location' => 'main-nav',                 // where it's located in the theme
							'before' => '',                                 // before the menu
							'after' => '',                                  // after the menu
							'link_before' => '',                            // before each link
							'link_after' => '',                             // after each link
							'depth' => 0,                                   // limit the depth of the nav
							'fallback_cb' => ''                             // fallback function (if there is one)
							)); ?>
							</li>
						</ul>
					</div>
				</div>
			</section>
		</div>
		<!-- cabecera -->
	</header> <?php //header ?>


	<?php // Cuerpo . Content - Páginas ?>
	<div id="content" class="paginas">
<div class="nav-formacion">
	<div class="uno">

	</div>

	<ul>				
		<?php
		// Títulos de lás subpáginas de la pagina actual.  Jquery para clase activo
		wp_list_pages('title_li=&child_of='.$post->ID .'&link_before=<span>&link_after=</span>'); ?>
	</ul>
	
</div>
		
		<section class="entry-content cf" itemprop="articleBody">

			<h2>Lorem ipsum dolor sit amet, consectetur</h2>

			<div class="layout">
			
				<div class="izq">
					<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci commodi eligendi, maiores labore deleniti</h3>

					<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis sunt cupiditate tempora autem cumque tenetur impedit quo distinctio, sed, enim dignissimos neque quod doloremque, velit deleniti optio magni, repudiandae in.</span></p>
				</div>

				<div class="der">
				<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci commodi eligendi, maiores labore deleniti</h3>
					<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis sunt cupiditate tempora autem cumque tenetur impedit quo distinctio, sed, enim dignissimos neque quod doloremque, velit deleniti optio magni, repudiandae in.</span></p>
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
				</div> <?php //div derecha ?>
			</div> <?php //div layout ?>
	

			
	

			<div class="layout">

			<div class="centro">
				<ul class="nav">
					<li><a href="index.html"><i class="fa fa-phone"></i></a></li>
					<li><a href="sobre.html"><i class="fa fa-map-marker"></i></a></li>
					<li><a href="#"><i class="fa fa-envelope-o"></i></a></li>

				</ul>
			</div>
				
			</div>
			

		</section> <?php // end section ?>
	</div>






<?php get_footer(); ?>