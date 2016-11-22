<section>
	<div id="nosotros" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sabias-que" style="background:url( <?php echo CFS()->get('bg_about', 5);?>)">
		<?php $loop_about = CFS()->get('loop_about'); 

		foreach ($loop_about as $about) { ?>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<?php echo $about['text']; ?>
				<img src="<?php echo $about['icon'] ?>" alt="">
			</div>
		<?php }?>
	</div>
</section>