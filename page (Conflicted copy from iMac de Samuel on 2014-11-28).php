<?php get_header(); ?>
<div id="container" class="paginas">
	<div class="fullscreen background">
		<div class="content-a">
			<div class="content-b">
				<header role="banner" itemscope itemtype="http://schema.org/WPHeader">
					<div class="cabecera <?php if (is_home()) echo 'home'; ?>">
						<section class="layout">
							<div class="nav_superior">
								<div class="logo"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php // bloginfo('name'); ?> <img src="<?php echo get_template_directory_uri(); ?>/library/images/logo320.png" alt="Logotipo"></a></div>
								
								<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>
								<ul class="nav">
									<li><a href="#"><i id="menu" class="fa fa-bars animenu__toggle"></i></a>
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
									</li>
								</ul>
							</div>						

						</section>
					</div>
					<!-- cabecera -->
					</header>
					<div id="content" class="paginas">
						<div id="inner-content" class="wrap cf">
							
							<main id="main" class="cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
								<header class="article-header">
									
									<p class="byline vcard">
									<?php printf( __( 'Posted <time class="updated" datetime="%1$s" itemprop="datePublished">%2$s</time> by <span class="author">%3$s</span>', 'bonestheme' ), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), get_the_author_link( get_the_author_meta( 'ID' ) )); ?>
									</p>
								</header> <?php // end article header ?>
								<section class="entry-content cf" itemprop="articleBody">
									<?php
										// the content (pretty self explanatory huh)
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
									
									<ul>
										<?php
										wp_list_pages('title_li=&child_of='.$post->ID); ?>
									</ul>
								</section> <?php // end article section ?>
								<footer class="article-footer cf">
								</footer>
								<?php // comments_template(); ?>
							</article>
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
							</main>
							<?php // get_sidebar(); ?>
						</div>
					</div>
					<?php get_footer(); ?>