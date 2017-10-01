<?php get_header() ?>

<div class="container">
	<div class="jumbotron white-bcolor">
		<?php the_post() ?>
		<div class="row">
			<div class="col-md-offset-9 col-md-3" id="pedidobox">
				<div id="pedidos_title"><?php the_title() ?></div>
			</div>
			
		</div>

		<?php the_content(); ?>

		
		
		
		<?php if ( is_active_sidebar( 'contact_widget' ) ) : ?>
			<?php dynamic_sidebar( 'contact_widget' ); ?>            
		<?php endif; ?>

	</div>
</div>

<?php get_footer() ?>