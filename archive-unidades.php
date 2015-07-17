<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package fisioforma
 */

get_header(); ?>

    <div class="selected">
      <div class="container">
        <h1><?php post_type_archive_title(); ?></h1>
      </div>
    </div>

    <article class="container">
		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : $firstid = 0; $secndid = 0; $thirdid = 0; the_post(); ?>

        <div class="row">
          <div class="card">
            <?php the_post_thumbnail('list-img'); ?>
            <div class="card_description">
              <h1><?php the_title(); ?></h1>
              <p><?php echo rwmb_meta( 'fisiounidade-end' ); ?><br />
                CEP: <?php echo rwmb_meta( 'fisiounidade-cep' ); ?><br />
                Fone: <?php echo rwmb_meta( 'fisiounidade-tel' ); ?></p>
              <a href="#" id="show_map_<?php the_ID(); ?>"><button class="seeonmap">Ver no mapa<span class="plus"></span></button></a>
            </div>
          </div>
        </div>
      
      <script> 
      $(document).ready(function(){
        var mapclass = $('.unidade-map_<?php the_ID(); ?>');
        function showMap( event ) {
          $(mapclass).animate({ opacity: '1', height:'420px' });
          event.preventDefault();
        }
        function hideMap( event ) {
          $(mapclass).animate({ opacity: '0', height:'0px' });
          event.preventDefault();
        }
        $("#show_map_<?php the_ID(); ?>").clicktoggle(showMap, hideMap);
      });
      </script>
      
      <div class="unidade-map_<?php the_ID(); ?> hiddenMap">
      <?php
        $fisiounidade = '<h3>Fisioforma</h3><p>' . rwmb_meta('fisiounidade-end') . ', CEP: ' . rwmb_meta('fisiounidade-cep') . '</p>';
        $args = array(
          'type'         => 'map',
          'width'        => '100%',
          'height'       => '420px',
          'zoom'         => 0,
          'marker'       => true,
          'marker_title' => '',
          'info_window'  => $fisiounidade,
      );
      echo rwmb_meta( 'fisiounidade-loc', $args ); // For current post
      ?>
      </div>
        
			<?php endwhile; ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>
    
    </article>


<?php get_template_part('facebook'); ?>
<?php get_footer(); ?>
