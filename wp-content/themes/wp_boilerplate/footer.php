<?php if ( has_nav_menu( 'footer-menu' ) ) { ?>
	<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container_class' => 'header_menu' ) ); ?>
<?php } ?>

<?php wp_footer() ?>

<div class="main-bcolor-1" id="foot">
	<div class="container">

		<div class="row">

			<div class="col-md-12">
				<div class="text-center text-uppercase" id="visit">
					visitanos
				</div>
			</div>

		</div>

		<div class="row" id="finalbox">

			<div class="col-md-offset-3 col-md-3 mapa">
				<div id="map"></div>
				    <script>
				      function initMap() {
				        var lelu = {lat: -33.435296, lng: -70.588634};
				        var map = new google.maps.Map(document.getElementById('map'), {
				          zoom: 18,
				          center: lelu
				        });
				        var marker = new google.maps.Marker({
				          position: lelu,
				          map: map
				        });
				      }
				    </script>
				    <script async defer
				    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjTWWUrhfBsbGFc0o5986FTY7rijsnOac&callback=initMap">
				    </script>
			</div>

			<div class="col-xs-12 col-sm-12 col-lg-3 col-md-6">
				<div id="datoscontacto">
					<i class="fa fa-map-marker fa-1x" aria-hidden="true"></i> av. francisco bilbao 2951<br>
					<i class="fa fa-phone fa-1x" aria-hidden="true"></i> +56 2 2297 3477<br>
					<i class="fa fa-calendar-check-o fa-1x" aria-hidden="true"></i> lunes a sábado<br>
					<i class="fa fa-clock-o fa-1x" aria-hidden="true"></i> 8.00 a 20.00 hrs<br>
					<i class="fa fa-at fa-1x" aria-hidden="true"></i> contacto@lelu.cl
				</div>
				<div id="socialnet">
					<a href=""><i class="fa fa-facebook fa-3x" aria-hidden="true"></i></a>
					<a href=""><i class="fa fa-instagram fa-3x" aria-hidden="true"></i></a>
					<a href=""><i class="fa fa-twitter fa-3x" aria-hidden="true"></i></a>
				</div>
			</div>


		</div>

		<div class="row">
			<div class="col-md-offset-5 col-md-2">
				
			</div>
		</div

	</div>
</div>
<!-- <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjTWWUrhfBsbGFc0o5986FTY7rijsnOac&callback=initMap">
    </script> -->
</body>
</html>