<?php
/**
 * The template for displaying all single posts.
 *
 * @package fisioforma
 */

get_header(); ?>

    <div class="selected">
      <div class="container">
        <h1>Tratamentos</h1>
      </div>
    </div>

    <div class="clearfix pagetitle"></div>

    <div class="content container">

      <div class="row">

        <?php
          $images = rwmb_meta( 'fisiofotos', 'type=image' );
          $slideNumber = 0;
          while ( have_posts() ) : the_post();
        ?>

          <h2 class="simple-title"><?php the_title(); ?></h2>
        
          <?php if ( has_post_thumbnail() ) { ?>

            <div class="col-xs-4">
              <?php the_post_thumbnail( 'full' ); ?>
            </div>
            <div class="col-xs-8">
              <?php the_content(); ?>
            </div>

          <?php } else { ?>

            <div class="col-xs-12">
              <?php the_content(); ?>
            </div>

          <?php } ?>

        <?php endwhile; // end of the loop. ?>

      </div>
      <br />
      
      <script>
        $( document ).ready(function() {
          $( ".carousel-inner > .item:first-child" ).addClass( "active" );
          $( ".carousel-indicators > li:first-child" ).addClass( "active" );
        });
      </script>
      
      <?php if ( $images ) { ?>
      
      <div class="row">
        
        <h2 class="simple-title">Antes e Depois</h2>
        
        <div class="col-xs-12 center">
          
          <div id="intern" class="carousel slide beforeafter" data-ride="carousel">
            <!-- Indicators -->
            
            <ol class="carousel-indicators">
              
              <?php 
              foreach ( $images as $image )
              {
                  echo "<li data-target='#intern' data-slide-to='0";
                  echo $slideNumber++;
                  echo "'></li>";
              }
              ?>
            
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              
            <?php 
            foreach ( $images as $image )
            {
                echo "<div class='item'><img src='{$image['full_url']}'></div>";
            }
            ?>
              
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#intern" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#intern" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          
        </div>
      </div>
      <br />
      
      <?php } ?>
      
      <a href="<?php echo get_post_type_archive_link( 'tratamentos' ); ?>">⟵ Voltar</a>
      
    </div>

<?php get_template_part('facebook'); ?>
<?php get_footer(); ?>
