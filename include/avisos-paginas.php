<div class="mapaweb">	
	<div class="collapse panel" id="mapaweb">
		<div class="head_layout">
			<div class="map_container">
				<div class="mapa">
					<div class="maps-content">
						<?php wp_nav_menu( array('menu' => 'Mapa1' )); ?>
					</div> <?php // maps ?>
				</div> <?php // mapa ?>
				<div class="mapa">
					<div class="maps-content">
						<?php wp_nav_menu( array('menu' => 'Mapa2' )); ?>
					</div> <?php // maps ?>
					<img src="<?php echo get_template_directory_uri(); ?>/images/logo_mapa_web.png" alt="logo mapa web">
					<a class="cerrar" data-toggle="collapse" href="#mapaweb"></a>
				</div> <?php // mapa ?>			
				<div class="mapa">
					<div class="maps-content">
						<?php wp_nav_menu( array('menu' => 'Mapa3' )); ?>
					</div> <?php // maps ?>
				</div> <?php // mapa ?>

				
			</div> <?php // map _container ?>
			
		</div> <?php // head ma ?>

		
	</div> <?php // collapse ?>

</div>