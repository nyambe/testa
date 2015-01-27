<?php get_header(); ?>
<style>
.teambuilding .second .third p {
line-height: 1.4em;
}
.heightspecial { height:600px;}
</style>
<div id="container" class="pagina teambuilding">	
<?php get_template_part( 'include/cabecera', 'paginas' ); ?>
	<?php // Cuerpo . Content - Páginas ?>

	<div class=" background parallax heightspecial" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/teambuilding_atm_1.jpg');" data-img-width="1600" data-img-height="1080" data-diff="100">
	    <div class="content-a">
	        <div class="content-b">
		        <div class="first">
		        	<h2>"Estamos listos para crear una diferencia real"</h2>
		        	<div class="wrap">
		        		<h3>Actividades de Formación</h3>
		        		<h2>Team Building</h2>
		        	</div>
		        </div> <?php // first ?>
	        </div> <?php //content b ?>
	    </div> <?php //content a ?>
	</div> <?php //not - fullscreen ?>

	<div class="second">
		<h2>Team Building High and Low Ropes</h2>
		<div class="head_layout">
			<div class="section-wrap">
				<div class="third">
					<p class="p1">En AMAZONIA TEAM FACTORY disponemos de las <b>primeras y únicas instalaciones en España de dinámicas de Team Building High y Low Ropes</b>. Es el campo de entrenamiento en naturaleza especialmente concebido para el mundo de la empresa, cuyo objetivo es desarrollar las competencias y habilidades relacionadas con la construcción de equipos de trabajo.</p>
					<p class="p1">Las<b> dinámicas de Team Building High Ropes y Low Ropes </b>tienen un diseño excepcional, y absolutamente versátiles en cuanto a su orientación a objetivos, ejecución y feed-back. Son construcciones fijas en los árboles para trabajar en equipo y en altura. Están pensadas para que cualquier persona, independientemente de su edad o condición física, puedan desarrollarlas. Cubren todas las necesidades de desarrollo de competencias profesionales de los equipos de trabajo. Nuestro brillante método de diseño y ejecución de las acciones formativas impacta de verdad en las actitudes y comportamientos de las personas, y estos cambios, inciden directamente en los resultados del equipo.</p>
					<p class="p1">Contamos además, con los mejores especialistas en <b>Formación Experiencial</b> y expertos en las dinámicas de Team Building High y Low Ropes.</p>
				</div>
			</div> <?php //section wrap ?>
		</div> <?php // head layout ?>
		<section class="linea"></section>
	</div> <?php //second ?>

	<div class="not-fullscreen background parallax" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/teambuilding_atm_2.jpg');" data-img-width="1600" data-img-height="749" data-diff="100">
	    <div class="content-a">
	        <div class="content-b">
		        <div class="alternativo">
		        	<h2>"Excelentes resultados en la mejora de <br>actitudes y competencias de equipo"</h2>
		        </div> <?php // first ?>
	        </div> <?php //content b ?>
	    </div> <?php //content a ?>
	</div> <?php //not - fullscreen ?>

	<div class="fourth">
		<h3>Conoce Nuestras</h3>
		<h2>Dinámicas Team Building</h2>
		<div class="section-wrap">
			<ul class="menu-building">
				<li>
					<a href="<?php echo site_url(); ?>/actividades-de-formacion/team-building/dinamicas-high-ropes/">
						<img src="<?php echo get_template_directory_uri(); ?>/images/boton_high.jpg" alt="high res">
						<span class="high">
							<h3>Team Building</h3>
							<h2>High Ropes</h2>
							<figure></figure>
						</span>
					</a>
				</li>
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


	<div class="not-fullscreen background parallax" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/teambuilding_atm_3.jpg');" data-img-width="1200" data-img-height="416" data-diff="100">
	    <div class="content-a">
	        <div class="content-b">
		        <div class="alternativo">
		        	<h2>"Primer campo fijo de dinámicas de Team Building en Madrid"</h2>
		        </div> <?php // first ?>
	        </div> <?php //content b ?>
	    </div> <?php //content a ?>
	</div> <?php //not - fullscreen ?>

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

<?php get_footer(); ?>