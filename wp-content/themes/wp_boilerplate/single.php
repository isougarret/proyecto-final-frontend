<?php get_header() ?>

<div class="container">
	<div class="jumbotron white-bcolor">
		
		<div class="row">
			<div class="col-md-offset-4 col-md-8">

				<?php if ( have_posts() ) { ?>
					<?php while ( have_posts() ) { ?>
						<?php the_post(); ?>

						<div id="pageposttitle" class="text-uppercase">
							<span ><?php the_title() ?></span><br>
						</div>

			</div>
		</div>

		<div class="row">
			<div class="col-md-offset-1 col-md-3">
				<div id="pagepostdate">
					<i class="fa fa-clock-o fa-1x" aria-hidden="true"></i> <span ><time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('d \d\e F \d\e Y') ?></time></span><br>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-offset-2 col-md-8 text-center" id="pagepostcontent">
				<?php the_post_thumbnail('custom_blog') ?>
				<span><?php the_content() ?></span>
			</div>
		</div>
						
						

					<?php } ?>
				<?php } else { ?>
					<!-- Content -->
				<?php } wp_reset_query(); ?>
			
		

	</div>
</div>

<?php get_footer() ?>