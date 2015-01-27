<?php get_header(); ?>
<style>
	.fondonegroopac {padding-left: 30%;
width:100%; padding:20px 10%;
clear: both;
background: rgba(0, 0, 0, 0.4);
text-align-center;
}
	.fondonegrotexto {width: 600px; margin:0 auto;}

.teamevent .content-b p {
color: #ffffff;
text-align: justify;
font-size: .9em;
line-height: 1.4em;
}
@media (max-width: 768px) {

	.fondonegrotexto {width: 100% }
	
	.section-wrap section{.padding: 20px; width:100%!important; float:left;}
	.teamevent .vuela {
	padding:5%;
	}
	.teamevent .eventos-nav {
	height: auto;
	}
	.teamevent .descubre .section-wrap section:nth-child(2n + 1) {
		margin-left: 0;margin-right: 0;
	}
	.teamevent .descubre .section-wrap section:nth-child(2n + 2) {
		margin-left: 0;margin-right: 0;
	}
	.head_layout {
		padding: 0;
	}
	
	.teamevent .eventos-nav {
	 height: auto;
	}	
	.teamevent .eventos-nav ul {
		width: 100%;min-width: 0px;
	}
	.teamevent .eventos-nav li {
		width: 100%;margin-top: 20px;
	}

}

</style>
<div id="container" class="pagina teamevent">	
	 <?php get_template_part( 'include/cabecera', 'paginas' ); ?> 

<div class="fullscreen background parallax" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/team_atm_1.jpg');" data-img-width="1600" data-img-height="713" data-diff="100">
    <div class="content-a">
        <div class="content-b">
        	<div class="section-wrap first">
        		<h1>Team Event</h1>
        		<h2>"los individuos marcan goles, los equipos ganan partidos"</h2>
        	</div>

        </div>
    </div>
</div>

<div class="descubre">
	<div class="head_layout">
		<div class="section-wrap"> 
	        <section>
          		<h3>"descubre tus posibilidades"</h3>
				<p class="p1"><b>Team Event©</b> son <b>eventos de empresa </b>inspirados y diseñados para los equipos de trabajo. Se trabaja al aire libre y en naturaleza (outdoor training) fundamentalmente con las dinámicas de Team Building High y Low Ropes para generar una experiencia de alto impacto.</p>
				<p class="p1">Desafiamos a los participantes, facilitando que exploren y descubran por sí mismos sus propias actitudes, habilidades y comportamientos. A través de este descubrimiento,<span class="Apple-converted-space">  </span>impulsamos el <b>cambio y la acción.</b></p>
           </section>
          <section>
          		<h3 class="fondo_team big">Team Event</h3>
           		<p class="p1">Cada dinámica de team building <span class="s1">[link a dinámicas]</span> constituye uno o muchos retos, y se desarrollan en un medio desconocido para los participantes, en los árboles, donde las reglas son diferentes. Para superar nuestros desafíos, los participantes tendrán que cambiar de perspectiva, salir de la zona de confort, esgrimir nuevas estrategias de solución y alinearse con los objetivos del equipo.</p>
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


<div class="not-fullscreen background parallax" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/team_atm_2.jpg');" data-img-width="1600" data-img-height="740" data-diff="100">
    <div class="content-a">
        <div class="content-b">
        <h2>“El mejor trabajo individual es el que realizo en equipo”</h2>
		<div class="fondonegroopac">
		<div  class="fondonegrotexto">
        <p>Desde una perspectiva lúdica, trabajamos, impulsamos y facilitamos el desarrollo del equipo, estableciendo una experiencia de referencia y transformación. Un evento de empresa que, además de ser una vivencia tremendamente divertida, de forma sutil, se transmiten valores corporativos de trabajo, se mejoran las relaciones interpersonales, se fomenta la reflexión, la toma de conciencia de nuestras fortalezas y debilidades, de cuál es nuestro nivel de aportación al equipo, de compromiso y emocionalidad ante el cambio.</p>
		</div>
		</div>

        </div>
    </div>
</div>



<div class="fourth">
	<h2>Elige tu evento de empresa</h2>
	<div class="head_layout">

		<div class="eventos-nav">
			<ul>
				<li class="page_item page-item-26"><a href="<?php echo site_url(); ?>/eventos-de-empresa/jornada-multiaventura/"><span>Kick-off Meeting</span></a></li>
				<li class="page_item page-item-30"><a href="<?php echo site_url(); ?>/eventos-de-empresa/team-event/"><span>Team Event</span></a></li>
				<li class="page_item page-item-32"><a href="<?php echo site_url(); ?>/eventos-de-empresa/gymkana-tematica/"><span>Gymkana Temática</span></a></li>
			</ul>
		</div>
	</div>
</div>



<?php get_footer(); ?>