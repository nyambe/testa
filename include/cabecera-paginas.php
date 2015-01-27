	<header role="banner" itemscope itemtype="http://schema.org/WPHeader">
		<div class="cabecera <?php if (is_home()) echo 'home'; ?>">
			<section class="head_layout">
				<div class="nav_superior">
					<div class="logo"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php // bloginfo('name'); ?> <img src="<?php echo get_template_directory_uri(); ?>/library/images/logo320.png" alt="Logotipo"></a></div>
					<div class="title_box">
						<h1  class="page-title" itemprop="headline"><?php the_title(); ?></h1>
						<div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#">

						    <?php 
	 						global $post;     // if outside the loop

								if ( is_page() && $post->post_parent ) {
								    // This is a subpage
								     if(function_exists('bcn_display'))
									    {
									        bcn_display();
									    };

								}
						   ?>
						</div>
						
					</div>
					

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