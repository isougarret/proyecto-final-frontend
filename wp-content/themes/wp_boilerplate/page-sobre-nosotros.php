<?php get_header() ?>

<div class="container">
	<div class="jumbotron white-bcolor">
		<?php the_post() ?>
		<div class="row">
			<div class="col-md-offset-8 col-md-4" id="usbox">
				<div id="title-us"><?php the_title(); ?></div>
			</div>
		</div>

		<?php the_content(); ?>
		
		
		
	
	</div>
</div>

	


<?php get_footer() ?>