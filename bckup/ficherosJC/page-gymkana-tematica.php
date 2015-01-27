<?php get_header(); ?>
<style>
@media (max-width: 768px) {
	.gynkana .ingenio .section-wrap section:nth-of-type(1) {
		width: 0%;
		float: left;
		margin-right: 0%;
		height:auto;
	}
		.gynkana .ingenio .section-wrap section:nth-of-type(2) {
		width: 100%;
		float: left;
		margin-right: 0%;
		}
	.gynkana .ingenio .section-wrap article {
	 padding: 5%;
	 /*padding-bottom: 6px;*/
	}
	.gynkana .second .section-wrap {
		 padding: 1% 5%; 
	}
	.head_layout {
		padding: 0;
	}
	
	.gynkana .eventos-nav {
	 height: auto;
	}	
	.gynkana .eventos-nav ul {
		width: 100%;min-width: 0px;
	}
	.gynkana .eventos-nav li {
		width: 100%;margin-top: 20px;
	}
}
</style>
<div id="container" class="pagina gynkana">	
	 <?php get_template_part( 'include/cabecera', 'paginas' ); ?> 

<div class="fullscreen background parallax" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/gynkana_atm_1.jpg');" data-img-width="1600" data-img-height="787" data-diff="100">
    <div class="content-a">
        <div class="content-b">
        	<div class="section-wrap first">
        		<h1>Gymkana Temática</h1>
        		<h2>"El hombre que no tiene imaginación, no tiene alas"</h2>
        	</div>

        </div>
    </div>
</div>


<div class="ingenio">
	<div class="section-wrap">
		<section>
			<?php // imagen en el fondo ?>
		</section>
		<section>
      		<article>
      			<h3 class="fondo_blanco">"Ingenio y destreza"</h3>
	       		<p class="p1">La actividad que proponemos como <b>Gymkana Temática y Teatra</b>l es la más elaborada de nuestro portfolio de eventos. Se constituye como el <b>evento estrella para empresas</b>, tanto por su genialidad y singularidad en cuanto a diseño, como por la creatividad e imaginación en su desarrollo.</p>
				<p class="p1">Las <b>gymkanas temáticas</b> son un conjunto de actividades de ingenio, destreza y orientación. Los participantes se dividen por equipos y siguiendo un hilo conductor basado en una leyenda, una película o historia fabulada, tienen que competir superando una serie de pruebas para conseguir un objetivo.</p>
      		</article>
       </section>
	</div>
</div>

<div class="not-fullscreen background parallax" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/gyncana_atm_4.jpg');" data-img-width="1600" data-img-height="1111" data-diff="100">
    <div class="content-a">
        <div class="content-b">
	        <div class="third">
	        	<h2>"rienda suelta a tu imaginación"</h2>
	        </div>
        </div>
    </div>
</div>


<div class="second">
	<div class="head_layout">
		<div class="section-wrap"> 
	        
          <section>
          		<h3 class="fondo_blanco big">Gynkana Temática</h3>
           		<p class="p1">Les hacemos vivir una aventura desternillante en la que no falta ningún elemento de diversión: <b>actores, vestuarios, atrezzo, intriga, secretos, revelaciones, sorpresas, giros inesperados en las historias,…</b> Se desarrollan como si fueran una película u obra de teatro. Están dinamizadas por un equipo de profesionales que disponen del valiosísimo recurso de la interpretación para<span class="Apple-converted-space">  </span>realizar las escenificaciones. Diseñamos las gymkanas siguiendo el esquema básico del mundo de la interpretación: Presentación-Nudo-Desenlace.</p>
				<p class="p1">Son eventos de empresa orientados a proporcionar un ambiente de diversión y entretenimiento, en plena naturaleza y alejados del asfalto urbano, creando escenarios ficticios y fantásticos, donde los participantes no pueden dejar de ser “ellos mismos”, pero tendrán que convertirse también en personajes de una de nuestras aventuras.</p>

	       </section>
        </div>

        <div class="end">
			<ul class="contacto">
				<a href="<?php echo site_url(); ?>/contactar"></a>
				<a href="<?php echo site_url(); ?>/contactar"></a>
				<a href="<?php echo site_url(); ?>/contactar"></a>
			</ul>
			<span>Contacta con nosotros</span>
		</div>
	</div>
</div>


<div class="not-fullscreen background parallax" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/gynkana_atm_3.jpg');" data-img-width="1600" data-img-height="1080" data-diff="100">
    <div class="content-a">
        <div class="content-b">
	        <div class="third">
	        	<h2>"¿hasta dónde eres capaz de llegar?"</h2>
	        </div>
        </div>
    </div>
</div>



<div class="fourth">
	<h2>Elige tu evento de empresa</h2>
	<div class="head_layout">

		<div class="eventos-nav">
			<ul>
				<li class="page_item page-item-26"><a href="<?php echo site_url(); ?>/eventos-de-empresa/kick-off-meeting/"><span>Kick-off Meeting</span></a></li>
				<li class="page_item page-item-30"><a href="<?php echo site_url(); ?>/eventos-de-empresa/team-event/"><span>Team Event</span></a></li>
				<li class="page_item page-item-32"><a href="<?php echo site_url(); ?>/eventos-de-empresa/gymkana-tematica/"><span>Gymkana Temática</span></a></li>
			</ul>
		</div>
	</div>
</div>



<?php get_footer(); ?>