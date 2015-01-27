<?php get_header(); ?>
<style>
/*PRIMER BLOQUE*/
.background.parallax {
	height:300px;
}

@media (min-width: 768px) {
	.background.parallax {
		height:600px;
	}
}

/*SLIDER*/
.instalaciones p {
font-size: 14px;
line-height: 1.6em;
}
.instalaciones .exper li > span {
max-width: 800px;
}

.tabla li {padding: 12px; font-size: .7em; line-height: 1.2em;}

.instalaciones .exper section.sub {
padding-left: 5%; padding-right: 5%; height: 420px; padding-top: 3%;
}
.sub{width:auto;}
@media (min-width: 1024px) {
.instalaciones .exper section.sub {
padding-left: 30%; padding-right: 30%; height: 420px; padding-top: 3%;
}
	.subdiv{width:800px;}
		.sub1{float: left;width: 400px;}
		.sub2{float: left;width: 400px;}

}

</style>
<div id="container" class="pagina instalaciones metodo-experiencial">   
<?php //<div id="container" class="fondo_verde metodo-experiencial ">   ?>
<?php  get_template_part( 'include/cabecera', 'paginas' ); ?> 
    <?php // Cuerpo . Content - Páginas ?>

<div class="background parallax" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/metodo_paralax_1.jpg');" data-img-width="1600" data-img-height="897" data-diff="100">
    <div class="content-a">
        <div class="content-b">
          <div class="exper">
	          <section>
	           		<h2>"Convertimos tu equipo en un<br>equipo de alto rendimiento"</h2>
	           </section>
          </div>
        </div>
    </div>
</div>
  

<div class="exper border">
    <ul class="bxslider">
        <li>
            <span class="marco">
                <h3>Método Experiencial</h3>
                <figure class="columnas">
                    <p class="p1"><b>Team Building</b> engloba métodos y técnicas orientadas a desarrollar a los equipos de trabajo. En nuestro caso, desarrollamos programas de Team Building en un entorno vivencial, en plena naturaleza, y sobre una infraestructura de dinámicas que permiten <b>impactar directamente sobre las actitudes y los comportamientos de los participantes.</b></p>
                    <p class="p1">La base metodológica es la <b>Formación Experiencial</b>, un método de trabajo para el entrenamiento de habilidades profesionales, que se desarrolla al aire libre y está basado en el aprendizaje a través de la experiencia directa, de la cual extraer conclusiones relevantes para nuestro día a día laboral.</p>
					<p class="p1">Nuestros programas están diseñados con el objetivo de movilizar distintos niveles de conciencia <b>(ser, pensar, sentir, hacer), </b>y fomentan el aprendizaje basado en vivencias antes que la transmisión cognitiva de conceptos.</p>
                    <p class="p1">El objetivo que perseguimos con nuestro método es convertir a los equipos en <b>«equipos de alto rendimiento»</b>, trabajando desde una perspectiva única y eficiente, además de los aspectos comunes que trabajaría cualquier programa de entrenamiento de habilidades (liderazgo, solución de conflictos, toma de decisiones, planificación, gestión del tiempo, etc), aspectos relevantes como son <b>la cohesión, la confianza, la colaboración, la comunicación, el liderazgo, y la motivación individual y grupal, características propias de los equipos de alto rendimiento</b>. Este refuerzo sólo se consigue a través de la experiencia directa, haciendo que el equipo salga de su «zona de confort» y se enfrente a los retos que les proponemos.</p>
                </figure>

            </span>
        </li>
        <li>
            <span class="marco">
                <h3>Método Experiencial</h3>
                <figure class="columnas">
                    <p class="p1">Para ello, generamos escenarios que son aprovechados por los consultores para producir mejoras a nivel organizativo, individual y de equipo. Este método de trabajo proporciona un entorno vivencial de entrenamiento de habilidades profesionales idóneo, y sobre todo, resulta muy eficaz para el tratamiento de actitudes personales y grupales.</p>
                    <p class="p1">Desafiamos a los participantes, facilitando que exploren y descubran por sí mismos sus propias actitudes, habilidades y comportamientos. A través de este descubrimiento,<span class="Apple-converted-space">  </span><b>impulsamos el cambio y la acción.</b></p>
                    <p class="p2"><i>Esta metodología es tan poderosa, que destruye para siempre las barreras que impiden incorporar nuevos repertorios de conducta positiva. En este sentido, los consultores o facilitadores juegan un papel crucial creando el marco y guiando la experiencia a través de preguntas y feed-back. Su labor, a diferencia de otros métodos de Formación, no es dirigir lo que sucede, simplemente, dejan que las cosas pasen. Inducen un aprendizaje basado en el descubrimiento, la reflexión y el compromiso de cambio.</i></p>
                </figure>

            </span>
        </li>
        <li>
            <span class="marco">
                <h3>¿Sabías que através de nuestro método?</h3>
                <ul class="tabla">
                    <li class="li1">Los participantes viven en primera persona las dificultades para resolver problemas. Es decir, experimentan en su propia piel lo que, de otro modo, tendría que transmitirse de forma teórica. Así el impacto es mayor y se interioriza con mayor facilidad.</li>
                    <li class="li1">La vivencia genera una oportunidad única para que afloren los conflictos y las corrientes emocionales internas al grupo. La propia actividad y la orientación de los consultores hace que estas disputas se resuelvan de forma positiva y constructiva.</li>
                    <li class="li1">Los participantes asumen sus fortalezas y debilidades. Aprenden sobre ellos mismos y su equipo. Descubren que tienen un potencial mayor para superar los obstáculos y ganan mayor confianza, tanto individual como colectivamente. Identifican sus resistencias y el esfuerzo que realizan para neutralizarlas.</li>
                    <li class="li1">Los resultados son inmediatos. A lo largo del día cambia la percepción personal y la del equipo. El entusiasmo va creciendo y, al final de la jornada, las relaciones dentro del equipo han evolucionado positivamente hacia una mayor cohesión.</li>
                    <li class="li1">Los participantes experimentan emociones reales, no pudiendo esconderlas ni enmascararlas. El grado de sinceridad resultante potencia un análisis objetivo y sin disfraces.</li>
                    <li class="li1">Al ser una actividad física y lúdica, cada participante debe comprometerse activamente con su aprendizaje.</li>
                    <li class="li1">Por ser actividades diferentes a las habituales del entorno de trabajo, es más fácil romper con patrones antiguos o modelos de pensamiento obsoletos. De este modo el participante se prepara mejor para contextos cambiantes.</li>
                </ul>
            </span>
        </li>
        <li class="not-fullscreen background" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/metodo_paralax_3.jpg');" data-img-width="1600" data-img-height="674" data-diff="20">
        <section class="sub">
			<div class="subdiv">
		   <div class="sub1">
				<p class="p1">AMAZONIA TEAM FACTORY ha creado un espacio inmejorable para el desarrollo humano. Nuestro valor reside, por un lado, en la amplia experiencia desarrollando y explotando programas de Formación Vivencial al aire libre, y de otro, disponemos de unas instalaciones de dinámicas únicas en España, concebidas desde su construcción, para desarrollar las competencias profesionales de los equipos de trabajo. El secreto de nuestro éxito es no tomar al individuo como algo aislado de su profesión: el objetivo no es tanto formar a los profesionales que ya poseen conocimientos con bases sólidas, sino «re-formar» los hábitos emocionales para hacer frente a la espiral de cambio en las empresas.</p>                
			</div>
		   <div class="sub2">

		    <div class="head_layout">
		        <div class="section-wrap informacion">
		            <div class="wrap">
		                <ul class="contacto">
		                    <a href="<?php echo site_url(); ?>/contactar"></a>
		                    <a href="<?php echo site_url(); ?>/contactar"></a>
		                    <a href="<?php echo site_url(); ?>/contactar"></a>
		                </ul>
		                <span>Contacta con nosotros</span>
		            </div> <?php //wrap ?>
		        </div> <?php //section wrap ?>
		    </div>  <?php // head layout ?> 
		   </div>

			</div>
        </section>
  
        </li>
    </ul>
   
</div>
  
<div class="not-fullscreen background parallax"style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/metodo_paralax_2.jpg');" data-img-width="1600" data-img-height="970" data-diff="100" data-oriz-pos="100%">
    <div class="content-a">
        <div class="content-b">
            <div class="exper">
              <section>
                    <h2>"Un espacio inmejorable para<br>el desarrollo humano"</h2>
               </section>
            </div>
        </div>
    </div>
</div>
  
<div class="info_box">
    <div class="head_layout">
        <div class="section-wrap informacion">
            <h2>¿Necesitas más información sobre nuestros métodos?</h2>
            <div class="wrap">
                <ul class="contacto">
                    <a href="<?php echo site_url(); ?>/contactar"></a>
                    <a href="<?php echo site_url(); ?>/contactar"></a>
                    <a href="<?php echo site_url(); ?>/contactar"></a>
                </ul>
                <span>Contacta con nosotros</span>
            </div> <?php //wrap ?>
        </div> <?php //section wrap ?>
    </div>  <?php // head layout ?> 
</div> <?php //info box ?>
  
<?php get_footer(); ?>


