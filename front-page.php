<?php  get_header(); ?>	
		<div id="container">

			<div class="background">
				<div class="content-a">
					<div class="content-b">
						<header role="banner" itemscope itemtype="http://schema.org/WPHeader">
							<div class="cabecera <?php if (is_home()) echo 'home'; ?>">
								<section class="layout">
									<div class="logo"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php // bloginfo('name'); ?> <img src="<?php echo get_template_directory_uri(); ?>/library/images/logo320.png" alt="Logotipo"></a></div>
									<div class="navigation">
										<ul class="nav">
											<li><a href="index.html"><i class="fa fa-phone"></i></a></li>
											<li><a href="sobre.html"><i class="fa fa-map-marker"></i></a></li>
											<li><a href="#"><i class="fa fa-envelope-o"></i></a></li>
											<li><a href="#"><i id="menu" class="fa fa-bars animenu__toggle"></i></a></li>
											<nav class="animenu" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">


												<?php wp_nav_menu(array(
						    					         'container' => false,                           // remove nav container
						    					         'container_class' => '',                 // class of container (should you choose to use it)
						    					         'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
						    					         'menu_class' => 'animenu__nav',               // adding custom nav class
						    					         'theme_location' => 'main-nav',                 // where it's located in the theme
						    					         'before' => '',                                 // before the menu
						        			               'after' => '',                                  // after the menu
						        			               'link_before' => '',                            // before each link
						        			               'link_after' => '',                             // after each link
						        			               'depth' => 0,                                   // limit the depth of the nav
						    					         'fallback_cb' => ''                             // fallback function (if there is one)
												)); ?>

			
											</nav>
										</ul>
									</div>
									<!--navigation -->
								</section>
							</div>
							<!-- cabecera -->
						</header>

								
			<div class="main">
				<div class="layout">
					<h2 class="principal">TEAM BUILDING y EVENTOS para Empresas</h2>
					<section>

							<?php

								$walker = new my_nav_walker;

								$defaults = array(
									'theme_location'  => '',
									'menu'            => '2',
									'container'       => 'div',
									'container_class' => '',
									'container_id'    => '',
									'menu_class'      => 'portada',
									'menu_id'         => '',
									'echo'            => true,
									'fallback_cb'     => 'wp_page_menu',
									'before'          => '',
									'after'           => '',
									'link_before'     => '<span class="titular">',
									'link_after'      => '</span>',
									'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
									'depth'           => 0,
									'walker'          => $walker
								);


								wp_nav_menu( $defaults );

								?>

					</section>
					<div class="redes">
						<ul class="nav">
							<li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
							<li><a href="#"><i class="fa fa-rss-square"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube-square"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
						</ul>
					</div>
					<!--redes-->
				</div>
				<!-- layout end -->
			</div>
			<!-- main end -->
			<footer>
				<div class="layout">
					<ul>
						<li><a href="#">Aviso Legal</a></li>
						<li><a href="#">Política de Privacidad</a></li>
						<li><a href="#">Uso de Cookies</a></li>
						<li><a href="#">Mapa Web</a></li>
					</ul>
				</div>
			</footer>
			<!--footer end-->
		</div>
		<!--content b end -->
	</div>
	<!--content a end -->
</div>
<!--content background -->
<script src="_/js/jquery.js"></script>
<script src="_/js/script.js"></script>
<script src="_/js/animenu.js"></script>

	<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

		<div id="inner-footer" class="wrap cf">
            <span class="source-org copyright">&copy; <?php bloginfo( 'name' ); ?>  <?php echo date('Y'); ?> </span>
		</div>

	</footer>

</div>

<?php // all js scripts are loaded in library/bones.php ?>
<?php wp_footer(); ?>
<!-- Grunt livereload para desarrollo -->
<script src="//localhost:35729/livereload.js"></script> 
<script src='//192.168.1.131:3000/socket.io/socket.io.js'></script>
<script>var ___socket___ = io.connect('http://192.168.1.131:3000');</script>
<script src='//192.168.1.131:3001/client/browser-sync-client.0.8.2.js'></script>
</body>

</html> <!-- end of site. what a ride! -->
