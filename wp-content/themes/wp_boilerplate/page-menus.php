<?php get_header() ?>

<div class="container">
	<div class="jumbotron white-bcolor">

		<?php 
			$arg = array(
				'posts_per_page'   => 1,
				'post_type'        => 'menu'
		);
			$get_arg = new WP_Query ( $arg ); 

			while ($get_arg->have_posts()) {
				$get_arg->the_post();
				?>

				<main>
					<div class="row">
						<div class="col-md-offset-1 col-md-10">
							<div id="hoyen" class="text-center"></div>
						</div>
					</div>

					<div class="row" >
						<div class="col-md-offset-3 col-md-6">
							
							<div id='menucito' hidden="hidden" class="text-center">
								<div class="glyphicon glyphicon-leaf icono"></div>
								<div class="title-plat">Platos de Fondo:</div>
									<div class="plat"><?php the_field('nombre1') ?></div>
									<div class="plat"><?php the_field('nombre2') ?></div>
									<div class="plat"><?php the_field('nombre3') ?></div>
								<div class="glyphicon glyphicon-leaf icono"></div>
								<div class="title-plat">Sopas:</div>
									<div class="plat"><?php the_field('sopa') ?></div>
								<div class="glyphicon glyphicon-leaf icono"></div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-offset-1 col-md-10">
							<div id="precio-alm" class="text-center">* Precio referencial menú (sopa + plato + bebida): $4800</div>
						</div>
					</div>

				</main>

				<script type="text/javascript">
					var d = new Date()
					var dia = d.getDate()
					var dia_semana = d.getDay()
					var mes = d.getMonth()+1

					if (dia_semana == 1) {
						var dia_semana_st = 'Lunes'
					} else if (dia_semana == 2) {
						var dia_semana_st = 'Martes'
					} else if (dia_semana == 3) {
						var dia_semana_st = 'Miércoles'
					} else if (dia_semana == 4) {
						var dia_semana_st = 'Jueves'
					} else if (dia_semana == 5) {
						var dia_semana_st = 'Viernes'
					} else if (dia_semana == 6) {
						var dia_semana_st = 'Sábado'
					}

					if (mes == 1) {
						var mes_st = 'Enero'
					} else if (mes == 2) {
						var mes_st = 'Febrero'
					} else if (mes == 3) {
						var mes_st = 'Marzo'
					} else if (mes == 4) {
						var mes_st = 'Abril'
					} else if (mes == 5) {
						var mes_st = 'Mayo'
					} else if (mes == 6) {
						var mes_st = 'Junio'
					} else if (mes == 7) {
						var mes_st = 'Julio'
					} else if (mes == 8) {
						var mes_st = 'Agosto'
					} else if (mes == 9) {
						var mes_st = 'Septiembre'
					} else if (mes == 10) {
						var mes_st = 'Octubre'
					} else if (mes == 11) {
						var mes_st = 'Noviembre'
					} else if (mes == 12) {
						var mes_st = 'Diciembre'
					}

					if (mes < 10) {
						mes = '0'+mes.toString()
					}

					var ano = d.getFullYear()

					var variante = parseInt(ano.toString()+mes+dia.toString())

					var textoppal = document.getElementById('hoyen')
					var fechapub = parseInt(<?php the_field('fecha') ?>)
					var plato1 = document.getElementById('plato1')
					var plato2 = document.getElementById('plato2')
					var plato3 = document.getElementById('plato3')
					var sopitas = document.getElementById('sopitas')

					if (dia_semana == 0) {

						textoppal.innerText= 'Hoy Lelú está cerrado. Encuentranos de lunes a sábado de 8.00 a 20.00 hrs'
						document.getElementById('precio-alm').setAttributeNode(document.createAttribute("hidden"))
					} else if (variante == fechapub) {

						textoppal.innerText='Nuestro menú para este '+dia_semana_st+' '+dia+' de '+mes_st
						document.getElementById('menucito').removeAttribute("hidden")
						
						} else {
							document.getElementById('precio-alm').setAttributeNode(document.createAttribute("hidden"))
							textoppal.innerText='Lo sentimos. No está listo el menú de hoy, regresa más tarde.'
						}
				</script>




				<?php } wp_reset_postdata(); ?>

	</div>
</div>

<?php get_footer() ?>