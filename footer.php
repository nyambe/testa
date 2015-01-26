			
            <footer class="footer background" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/fondo.jpg');" data-img-width="1600" data-img-height="897" data-diff="100" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
            <div class="head_layout">
                <div class="logo"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php // bloginfo('name'); ?> <img src="<?php echo get_template_directory_uri(); ?>/library/images/logo320.png" alt="Logotipo"></a></div>
                <div class="redes">
                    <ul class="nav social">
                        <li><a href="http://www.facebook.com/AmazoniaTeamF/" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
                        <li><a href="https://twitter.com/amazoniateamf/" target="_blank"><i class="fa fa-twitter-square"></i></a></li>
                        <li><a href="http://feeds.feedburner.com/AmazoniaTeamFactory/" target="_blank"><i class="fa fa-rss-square"></i></a></li>
                        <li><a href="http://www.youtube.com/user/AmazoniaTeamFactory/" target="_blank"><i class="fa fa-youtube-square"></i></a></li>
                        <li><a href="https://plus.google.com/118215013063900031459/" target="_blank"><i class="fa fa-google-plus-square"></i></a></li>
                        <li><a href="http://www.linkedin.com/company/amazonia-team-factory/" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>
                    </ul>
                </div>
            <!--redes-->

				<div id="inner-footer" class="wrap cf">
    

					<nav role="navigation">
                    <span class="source-org copyright">&copy; <?php bloginfo( 'name' ); ?>  <?php echo date('Y'); ?></span>
						<?php /*wp_nav_menu(array(
    					'container' => '',                              // remove nav container
    					'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
    					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
    					'menu_class' => 'nav footer-nav cf',            // adding custom nav class
    					'theme_location' => 'footer-links',             // where it's located in the theme
    					'before' => '',                                 // before the menu
        			'after' => '',                                  // after the menu
        			'link_before' => '',                            // before each link
        			'link_after' => '',                             // after each link
        			'depth' => 0,                                   // limit the depth of the nav
    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
						)); */ ?>

                        <?php // menú manual para poder activar el collapse de mapa web ?>
                        <ul class="nav footer-nav cf" id="menu-pie-de-pagina">
                            <li class=
                            "menu-item menu-item-type-post_type menu-item-object-page menu-item-185"
                            id="menu-item-185">
                                <a href="<?php echo site_url(); ?>/aviso-legal/">Aviso Legal</a>
                            </li>

                            <li class=
                            "menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-177 current_page_item menu-item-184"
                            id="menu-item-184">
                                <a href="<?php echo site_url(); ?>/politica-de-privacidad/">Privacidad</a>
                            </li>

                            <li class=
                            "menu-item menu-item-type-post_type menu-item-object-page menu-item-183"
                            id="menu-item-183">
                                <a href="<?php echo site_url(); ?>/uso-de-cookies/">Uso de Cookies</a>
                            </li>

                            <li class=
                            "menu-item menu-item-type-custom menu-item-object-custom menu-item-17" id=
                            "menu-item-17">
                                <a data-toggle="collapse" href="#mapaweb" aria-expanded="false" aria-controls="mapaweb">Mapa Web</a>
                            </li>
                        </ul>
					</nav>

				</div>
            </div> <!-- head layout -->

			</footer>
            <?php  get_template_part( 'include/avisos', 'paginas' ); ?>
		</div>
        <!-- container -->

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>
     <!-- Grunt livereload para desarrollo -->
     <script src="//localhost:35729/livereload.js"></script> 
     <script src='//localhost:3000/socket.io/socket.io.js'></script>
     <script> var ___socket___ = io.connect('http://localhost:3000');</script>
	 <script src='//localhost:3001/client/browser-sync-client.0.8.2.js'></script>
	</body>

</html> <!-- end of site. what a ride! -->
