<?php
/**
 * The template for displaying all single posts.
 *
 * @package fisioforma
 */

get_header(); ?>

    <div class="selected">
      <div class="container">
        <h1>Cosméticos</h1>
      </div>
    </div>

    <div class="clearfix pagetitle"></div>

    <div class="content container">

      <div class="row">

        <?php
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
      
      <a href="<?php echo get_post_type_archive_link( 'cosmeticos' ); ?>">⟵ Voltar</a>
      
    </div>

<?php get_template_part('facebook'); ?>
<?php get_footer(); ?>
