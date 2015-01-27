<?php get_header(); ?>
<style>
/*SLIDER*/
.mientras figcaption{
padding-top: 10px;
}

/* LEER MAS*/
.txtbtncnt{
font-size:14px!important;
}
.eventos-de-empresa .collapse  {
padding-top: 40px;padding-bottom: 40px;min-height: 400px; /*ESTO HACE QUE DE UN SALTITO AL ABRIR*/
}
.eventos-de-empresa .leermas a {
font-size:14px!important;
}
@media (max-width: 768px) {
	.eventos-de-empresa .collapse p {
		width:100%;
	}
}
@media (min-width: 1280px) {
	.eventos-de-empresa .collapse {
	//background:#ff8800!important;
	}
	.eventos-de-empresa .collapse p {
	width:800px
	}
}
</style>

<div id="container" class="pagina eventos-de-empresa">
	<?php get_template_part( 'include/cabecera', 'paginas' ); ?>
	<?php // Cuerpo . Content - Páginas ?>
		<div class="nomovil">
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
							
							<img src="<?php echo get_template_directory_uri(); ?>/images/eventos1.jpg" title="#mientras" alt="slider" />
							<img src="<?php echo get_template_directory_uri(); ?>/images/eventos2.jpg" title="#deporte" alt="slider"  />
							<img src="<?php echo get_template_directory_uri(); ?>/images/eventos3.jpg" title="#cohesionar" alt="slider"  />
							<img src="<?php echo get_template_directory_uri(); ?>/images/eventos4.jpg" title="#querras" alt="slider"  />
						</div>
						<div id="mientras" class="nivo-html-caption">
							<div class="mientras">
							<figure><h1>Eventos de empresa</h1></figure>
							<figure><h2>"mientras me divierto, hago empresa"</h2></figure>
							<figcaption><p>En Amazonia Team Factory consideramos que un evento no es simplemente una ocasión para divertirse, y aportamos un valor añadido aprovechando esa oportunidad para hacer empresa, mejorar la cohesión interna, fortalecer el sentimiento de pertenencia a la empresa y reforzar los lazos de relación. Enmarcados en un entorno natural, ofrecemos claves de motivación de forma divertida e innovadora.</p> </figcaption>
							
						</div>
						<div id="deporte" class="nivo-html-caption">
							<div class="deporte">
								<figure><h1>Eventos de empresa</h1></figure>
								<figure><h2>"el deporte no construye carácter.<br> Lo revela"</h2></figure>
							</div>
						<div id="cohesionar" class="nivo-html-caption">
							<div class="cohesionar">
								<figure><h1>Eventos de empresa</h1></figure>
								<figure><h2>"Cohesionar, integrar, motivar"</h2></figure>
							</div>
						<div id="querras" class="nivo-html-caption">
							<div class="querras">
							<figure><h1>Eventos de empresa</h1></figure>
							<figure><h2>"No querrás reunirte de otra manera"</h2></figure>		
						</div>
					</section> <?php // Slider Container ?>
		</div> <?php // no movil ?>

		<div class="second">	
			
			<h2>Eventos de Empresa</h2> 
	 		<div class="movilbox">
				<img src="<?php echo get_template_directory_uri(); ?>/images/eventos1.jpg" alt="eventos atm movil">
				<h3>"Mientras me divierto, hago empresa"</h3>
			</div>
			<div class="head_layout">
				<div class="section-wrap">
					<div class="izq">
						<h3>Si eres agencia o empresa de eventos y buscas ampliar tu propuesta de actividades.</h3>
						<p>Disponemos de unas instalaciones inmejorables de team building en Madrid, en plena naturaleza y con más de 10 años de experiencia emocionando, divirtiendo y mimando a grupos de empresa. Cuidamos todos los detalles y el nivel de satisfacción es muy alto. Las actividades al aire libre (outdoor training) son originales, los retos estimulan la acción, la colaboración, la cohesión. Nos consta que los efectos son muy positivos y perduran en el tiempo.</p>
					</div>
					<div class="centro nomovil">
						<div class="end">
							<ul class="contacto">
								<a href="<?php echo site_url(); ?>/contactar"></a>
								<a href="<?php echo site_url(); ?>/contactar"></a>
								<a href="<?php echo site_url(); ?>/contactar"></a>
							</ul>
							<span class="txtbtncnt">Contacta con nosotros</span>
						</div>
						<div class="leermas">
							<a data-toggle="collapse" href="#leermasempresa" aria-expanded="false" aria-controls="leermasempresa"><i class="fa fa-list"></i> Leer más</a>
						</div>
						

					</div>
					<div class="der">
						<h3>Si eres empresa y buscas organizar un evento o un encuentro para motivar a los equipos de trabajo.</h3>
						<p>Si estás buscando algo diferente para tu evento de empresa, estás en el sitio adecuado.  En Amazonia Team Factory desarrollamos eventos de ALTURA, originales, divertidos, sorprendentes. Además de la diversión, aportamos un plus a los eventos porque todos los juegos y dinámicas se desarrollan con el objetivo de integrar, motivar y acercar las relaciones de sus miembros. Se sienten más ellos mismos y su nivel de compromiso aumenta.</p>
					</div>
				</div>
			</div> <?php // head layout ?>
			<section class="linea nomovil"></section>
		</div> <?php // second ?>
		<div class="collapse" id="leermasempresa">
					<p class="p1">AMAZONIA TEAM FACTORY está ubicado en un lugar privilegiado, en pleno valle de La Fuenfría y en el corazón de la sierra de Guadarrama, en Cercedilla (Madrid). Un entorno natural y espectacular con 32 Ha. dedicadas a la aventura, la diversión y la emoción.</p>
		<p class="p1">Disponemos del mayor parque de aventura en árboles de España y de las únicas <b>instalaciones de dinámicas de Team Building High y Low Ropes</b> en naturaleza. Desarrollamos los eventos para empresas con el soporte de las instalaciones e inspirados en los valores del deporte, del equipo y de la sana competición fair-play. Nuestro escenario es la naturaleza y la imaginación para hacer del evento una Experiencia inolvidable.</p>
		<p class="p1">Trabajamos tanto con Agencias o Empresas de Eventos que quieran aumentar su portfolio de actividades para sus clientes, como con Empresas que buscan organizar un evento en naturaleza (outdoor training) para premiar resultados, cohesionar, integrar, o motivar a sus equipos.</p>
					</div>

		<div class="not-fullscreen background parallax nomovil" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/landing_event_3.jpg');" data-img-width="960" data-img-height="332" data-diff="10">
		    <div class="content-a">
		        <div class="content-b">
			        <div class="third">
			        	<h2>"aventura, diversión, emoción"</h2>
			        </div> <?php // third ?>
		        </div> <?php //content b ?>
		    </div> <?php //content a ?>
		</div> <?php //not - fullscreen ?>

		<div class="movilbox">
			<img src="<?php echo get_template_directory_uri(); ?>/images/eventos3.jpg" alt="landing3">
			<h3>"cohesionar, integrar, motivar"</h3>
		</div>
		<div class="second movil">
			<div class="head_layout">
				<div class="section-wrap">
					<div class="izq">
						<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci commodi eligendi, maiores labore deleniti</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut aliquid sit quas, dolorum tempora atque adipisci consequuntur dicta ipsam qui, consectetur magni cumque voluptatem enim nostrum. Facilis alias sint iure.</p>
					</div>
					<div class="der">
						<h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci commodi eligendi, maiores labore deleniti</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam quo voluptatibus, obcaecati eligendi. Laboriosam, sint neque aperiam nisi veritatis amet obcaecati in, maiores deleniti sapiente exercitationem excepturi quidem, sit consectetur.</p>
					</div>
				</div> <?php // setion wrap ?>
			</div> <?php // head layout ?>
		</div> <?php // second ?>

		<div class="movilbox">
			<img src="<?php echo get_template_directory_uri(); ?>/images/eventos2.jpg" alt="landing3">
			<h3>"el deporte no construye el carácter. Lo revela"</h3>
		</div>

		<section class="entry-content cf" itemprop="articleBody">
			<h2>Elige tu Evento de Empresa</h2> 
			<div class="head_layout">	
				<div class="eventos-nav">
					<ul class="movil">
						<li><a href="<?php echo site_url(); ?>/eventos-de-empresa/jornada-multiaventura/"><img src="<?php echo get_template_directory_uri(); ?>/images/movil_mutijornada.png" alt="Elige tu evento movil"></a></li>
						<li><a href="<?php echo site_url(); ?>/eventos-de-empresa/kick-off-meeting/"><img src="<?php echo get_template_directory_uri(); ?>/images/movil_kickoff.png" alt="Elige tu evento movil"></a></li>
						<li><a href="<?php echo site_url(); ?>/eventos-de-empresa/team-event/"><img src="<?php echo get_template_directory_uri(); ?>/images/movil_team.png" alt="Elige tu evento movil"></a></li>
						<li><a href="<?php echo site_url(); ?>/eventos-de-empresa/gymkana-tematica/"><img src="<?php echo get_template_directory_uri(); ?>/images/movil_gynkana.png" alt="Elige tu evento movil"></a></li>
					</ul> <?php // movil ?>
					<ul class="nomovil" >
						<?php
						// Títulos de lás subpáginas de la pagina actual.  Jquery para clase activo
						wp_list_pages('title_li=&child_of='.$post->ID .'&depth=1&link_before=<span>&link_after=</span>'); ?>
					</ul> <?php // nomovil ?>
				</div> <?php // eventos-nav ?>
			</div> <?php // head_layout ?>
			<section class="linea"></section>
		</section> <?php // end section ?>

		<div class="movilbox">
			<img src="<?php echo get_template_directory_uri(); ?>/images/event_box_4.jpg" alt="landing3">
			<h3>"alto impacto"</h3>
		</div>

		<div class="not-fullscreen background parallax nomovil" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/event_box_4.jpg');" data-img-width="970" data-img-height="377" data-diff="100">
		    <div class="content-a">
		        <div class="content-b">
			        <div class="third">
			        	<div class="impacto">
			        		<figure>"Alto impacto"</figure>
				        	<figcaption>
				        		<p class="p1">Nuestros programas de Eventos están pensados para hacer de un evento una jornada inolvidable. Naturaleza, Deporte, <b>Creatividad y diversión</b> son las claves para crear un valor añadido a una reunión de empresa, una celebración por resultados, una jornada de motivación, o un kick-off.</p>
								<p class="p1">Amazonia Team Factory te ofrece una amplia gama de <b>Eventos en Naturaleza</b> para Empresas. La diversión está garantizada.</p>
				        	</figcaption>
			        	</div>
			        	
			        </div> <?php //  third ?>
		        </div> 
		    </div> <?php // content a ?>
		</div> <?php //no movil ?>

		<div class="second teal movil">
			<div class="head_layout">
				<div class="section-wrap">
			 		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed nulla, aspernatur atque commodi! Odio quo saepe dolore deserunt qui, dolor explicabo! Eaque blanditiis vero est officiis. Quidem nobis enim doloribus.</p>
			 		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo delectus eveniet nulla quibusdam illo facere, dolores quaerat iure laborum a </p>
				</div>
			</div>		
		</div>

		<div class="second">
			<div class="head_layout">
				<div class="section-wrap informacion">
			 		<h2>¿Necesitas más información sobre nuestros eventos de empresa?</h2>
					<div class="wrap">
						<ul class="contacto">
							<a href="#"></a>
							<a href="#"></a>
							<a href="#"></a>
						</ul>
						<span class="txtbtncnt">Contacta con nosotros</span>
					</div> <?php //wrap ?>
				</div> <?php //section wrap ?>
			</div>	<?php // head layout ?>	
		</div> <?php //second ?>


<?php get_footer(); ?>