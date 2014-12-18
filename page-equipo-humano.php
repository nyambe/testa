<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

    <head>
        <meta charset="utf-8">

        <?php // force Internet Explorer to use the latest rendering engine available ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title><?php wp_title(''); ?></title>

        <?php // mobile meta (hooray!) ?>
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
        <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
        <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
        <!--[if IE]>
            <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
        <![endif]-->
        <?php // or, set /favicon.ico for IE10 win ?>
        <meta name="msapplication-TileColor" content="#f01d4f">
        <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

        <?php // wordpress head functions ?>
        <?php wp_head(); ?>
        <?php // end of wordpress head ?>

        <?php // drop Google Analytics Here ?>
        <?php // end analytics ?>

    </head>

<body class="instalaciones equipo" itemscope itemtype="http://schema.org/WebPage">

<div id="container" class="fondo_verde">  
<?php get_template_part( 'include/cabecera', 'paginas' ); ?> 

 
<div class="fullscreen background parallax" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/fondo_equipo_1.jpg');" data-img-width="1600" data-img-height="897" data-diff="100">
    <div class="content-a">
        <div class="content-b">
          <div class="exper">
	          <section>
	           		<h2>"Ninguno de nosotros es tan bueno<br>como todos nosotros juntos"</h2>
	           </section>
          </div>
        </div>
    </div>
</div>
  
<section class="parallax">
    <div class="content-a">
        <div class="content-b">
        <h2>Equipo Humana</h2>  
            <ul class="listado" >
                <li><a href="#">
                        <span class="nombre">MI Nombre</span>
                        <span class="puesto">mi puesto es este</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/formacion_left.jpg" alt="imagen">
                    </a>
                </li>
                <li><a href="#">
                        <span class="nombre">MI Nombre</span>
                        <span class="puesto">mi puesto es este</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/formacion_left.jpg" alt="imagen">
                    </a>
                </li>
                <li><a href="#">
                        <span class="nombre">MI Nombre</span>
                        <span class="puesto">mi puesto es este</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/formacion_left.jpg" alt="imagen">
                    </a>
                </li>
                <li><a href="#">
                        <span class="nombre">MI Nombre</span>
                        <span class="puesto">mi puesto es este</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/formacion_left.jpg" alt="imagen">
                    </a>
                </li>
                <li><a href="#">
                        <span class="nombre">MI Nombre</span>
                        <span class="puesto">mi puesto es este</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/formacion_left.jpg" alt="imagen">
                    </a>
                </li>
                <li><a href="#">
                        <span class="nombre">MI Nombre</span>
                        <span class="puesto">mi puesto es este</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/formacion_left.jpg" alt="imagen">
                    </a>
                </li>
            </ul>
        </div>
    </div>
    
</section>
  
  
<section class="parallax">
    <div class="content-a">
        <div class="content-b">
           <div class="layout">
                <div class="izq">
                    <img src="http://lorempixel.com/220/100" alt="titulo">
                </div>
                <div class="der">
                    <h2>lorem ipsum</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae officiis rem hic voluptatum incidunt excepturi natus perferendis illum, nisi debitis rerum, aspernatur iure ullam quidem eligendi maiores officia sequi provident.</p>
               </div>
           </div>
        </div>
    </div>
</section>
<section>
    final
</section>
  
<?php get_footer(); ?>

