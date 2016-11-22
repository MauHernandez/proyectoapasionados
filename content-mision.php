<section>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mision">
		<?php echo CFS()->get('descrip'); ?>
		<div class="social-media">
			<?php 
				$social = CFS()->get('redes_sociales');
			
				foreach ($social as $icon ) {
					$aux = $icon['url']; 
				?>
				<img src="<?php echo $icon['rs_icon']; ?> " usemap="#planetmap-<?php echo $aux?>">
				
				<map name="planetmap-<?php echo $aux;?>">
				  <area shape="circle" coords="25,25,25" alt="redes_sociales" target="_blank" href="<?php echo $icon['url']; ?> ">
				</map>
				
			<?php
			 } ?>
		</div>
	</div>



</section>