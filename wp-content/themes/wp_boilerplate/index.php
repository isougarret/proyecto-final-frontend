<?php get_header() ?>

<div class="container">
	<div class="jumbotron white-bcolor" id='central-block'>

    <div class="row">
      <div class="col-xs-6 col-md-12 col-sm-6 col-lg-12">

        <div id="slider">
          <div class="flexslider">
            <ul class="slides">
              <li>
                <img src=<?php echo get_parent_theme_file_uri('assets/images/promo.jpg')  ?> />
              </li>
              <li>
                <img src=<?php echo get_parent_theme_file_uri('assets/images/promo.jpg')  ?> />
              </li>
              <li>
                <img src=<?php echo get_parent_theme_file_uri('assets/images/promo.jpg')  ?> />
              </li>
              <li>
                <img src=<?php echo get_parent_theme_file_uri('assets/images/promo.jpg')  ?> />
              </li>
            </ul>
          </div>
        </div>

      </div>

    </div>
  
		
	</div>
</div>

<?php get_footer() ?>

<script type="text/javascript">
      $(window).load(function() {
        $('.flexslider').flexslider({
          animation: "slide"
        });
      }); 
</script>