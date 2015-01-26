<?php get_header(); ?>
<div id="container" class="pagina formacion">	
	<?php get_template_part( 'include/cabecera', 'paginas' ); ?>
	<?php // Cuerpo . Content - Páginas ?> 

	<div class="nav-formacion">
		<div class="uno">
			<div class="wrap-actividades">
				<h3>Actividades de</h3>
				<h2>Formación</h2>
			</div>
			<div class="wrap-formacion">
				<p>"¿qué aportamos a tu proyecto?"</p>
			</div>
			<div class="wrap-texto">
				<p class="p1">Si estás buscando un programa completo de <span class="s1">actividades de Team Building </span>en Naturaleza, o necesitas soporte de infraestructura para desarrollar tus programas formativos de<span class="s1"> outdoor training </span>en habilidades profesionales, déjanos enseñarte qué puede hacer Amazonia Team Factory por ti.</p>
				<p class="p1">Nos avalan 10 años de trabajo en el ámbito de la Formación Experiencial, tras los cuales, Empresas de todos los sectores y tamaños, Consultoras de Formación, Consultores<span class="s1"> freelance </span>y Especialistas en Outdoor Training han venido a probar nuestros desafíos.</p>
				<p class="p2">Nuestra propuesta se dirige tanto a las Consultoras de Formación como a las Empresas que disponen de recursos internos para desarrollar programas formativos. Disponemos de las primeras y únicas instalaciones fijas para outdoor training en Naturaleza del país para realizar dinámicas de Team Building de impacto, construidas en altura y entre árboles.</p>
				<p class="p3">AYUDA A LA FINANCIACIÓN DE ACTIVIDADES DE FORMACIÓN DE TEAM BUILDING</p>
				<p class="p4">Para que tu inversión en Formación te resulte  mucho más económica y sencilla, te gestionamos los créditos y ponemos a tu alcance todas las ventajas de la <b>formación bonificada</b>, aprovechando así las ayudas concedidas por la Fundación Tripartita para la <i>Formación en el Empleo y el Fondo Social Europeo</i>.</p>
				<p class="p3">La Formación de Team Building Experiencial es 100% bonificable por la Fundación Tripartita. Llámanos y a través de una sencilla comprobación, te informamos de la financiación para Formación disponible para tu empresa, y de cómo puedes beneficiarte de las bonificaciones de la formación continua.</p>
			</div>

		</div> <?php // uno ?>

		<ul>				
			<?php
			// Títulos de lás subpáginas de la pagina actual.  Jquery para clase activo
			wp_list_pages('title_li=&child_of='.$post->ID .'&link_before=<span>&link_after=</span>'); ?>
		</ul>
		
	</div> <?php //nav-formacion ?>

<div class="second">
	<div class="head_layout">
	<h2 class="grey_background">Actividades de <br> Formación</h2>
	<div class="section-wrap">
		<div class="izq">
		<figure>Si eres consultor de formación y buscas mejorar tu propuesta con formación experiencial</figure>
		<p class="p1">Te ofrecemos unas <b>instalaciones fijas de team building y outdoor training</b> en naturaleza para realizar dinámicas de equipo de impacto. Olvídate de hacer localizaciones, solicitar permisos, realizar las instalaciones, verificar su seguridad, desmontarlas… ahorra en tiempo, eficacia y dinero. Somos el aliado perfecto para proveer de infraestructura y personal de seguridad y desarrollar programas de alto impacto para tus clientes.</p>
	</div>
	<div class="der">
		<figure>Si eres loremo pipsun dolor sit amet, consectetur Consequuntur laborum repellat fuga, debitis sequi odit quia.</figure>
		<p class="p1">Te brindamos la posibilidad de realizar tus proyectos formativos de outdoor training a través de Formación Experiencial y Consultores especializados para la adquisición y refuerzo de competencias profesionales de los equipos de trabajo. Abordamos los proyectos de forma global, contando con todos los recursos de infraestructuras, consultores, facilitadores y personal de seguridad con total garantía de éxito del proyecto.</p>
	</div>
		<div class="wrap">
			<h3>Escuchamos tus necesidades</h3>
			<ul class="contacto">
				<a href="<?php echo site_url(); ?>/contactar"></a>
				<a href="<?php echo site_url(); ?>/contactar"></a>
				<a href="<?php echo site_url(); ?>/contactar"></a>
			</ul>
			<span>Contacta con nosotros</span>
		</div> <?php //wrap ?>
	</div>
	</div> <?php // head layout ?>

</div>
 

		







<?php get_footer(); ?>