<?php get_header() ?>

<div class="container">

	<div class="jumbotron white-bcolor">

		<div class="row">
			<div class="col-md-offset-9 col-md-3" id="blogbox">
				<div id="blog-title">Lelú Blog</div>
			</div>
			
		</div>

		
			<?php 
			$arg = array(
				'posts_per_page'   => 10,
				'post_type'        => 'post'
		);
			$get_arg = new WP_Query ( $arg ); 

			while ($get_arg->have_posts()) {
				$get_arg->the_post();
				?>

				<div class="post-box">
					<div class="row">

							<div class="col-md-6 col-md-offset-4">
								<div class="time-title">
									<span class="post-title"><?php the_title() ?></span> 
									<i class="fa fa-coffee fa-1x" aria-hidden="true"></i> 
									<span class="post-time"><time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('d \d\e F \d\e Y') ?></time></span> 
									</div> 
							</div>

					</div>
				

					<div class="row">
						<div class="col-md-6 col-md-offset-1">
							<div class="post-img img-responsive"><span class="imagen-blog"><?php the_post_thumbnail('custom_logo') ?></span></div>
						</div>

						<div class="col-md-offset-1 col-md-3">
							<div class="post-res"><?php the_excerpt() ?></div>
						</div>
					</div>

					<div class="row">
						
					</div>

					<div class="row">
						<div class="col-md-offset-8 col-md-2">
							<a href="<?php the_permalink() ?>"><button type="button" class="btn colorboton">Leer más</button></a>
						</div>
					</div>

				</div>

				<span class="separador">❋</span>
							

							
			<?php } wp_reset_postdata(); ?>				
						
				
					

	</div>
		
</div>


<?php get_footer() ?>