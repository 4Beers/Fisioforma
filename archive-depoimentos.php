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

        <div class="row">
          
		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>
          
          <div class="videocard">
            <a href="" class="videoimg" data-toggle="modal" data-target="#videomodal_<?php the_ID(); ?>">
              <img src="http://img.youtube.com/vi/<?php echo rwmb_meta( 'fisioid-depoimento' ); ?>/0.jpg" class="videopreview">
              <span class="maskplay">
                <img src="<?php echo get_template_directory_uri(); ?>/images/play.png" alt="">
              </span>
            </a>
            <h3><?php the_title(); ?></h3>
          </div>

          <!-- Modal -->
          <div class="modal fade" id="videomodal_<?php the_ID(); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content big_modal">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Fechar</span></button>
                  <h4 class="modal-title" id="myModalLabel"><?php the_title(); ?></h4>
                </div>
                <div class="modal-body" id="yt-player">
                   <iframe width="640" height="390" src="https://www.youtube.com/embed/<?php echo rwmb_meta( 'fisioid-depoimento' ); ?>" frameborder="0" allowfullscreen="0"></iframe>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                  <!-- <button type="button" class="btn btn-primary">Compartilhar</button> -->
                </div>
              </div>
            </div>
          </div>

          <script type="text/javascript">
              $('#videomodal_<?php the_ID(); ?>').on('hidden.bs.modal', function () {
                  callPlayer('yt-player', 'stopVideo');
              });
          </script>
          
			<?php endwhile; ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>
          
        </div>
    
    </article>


<?php get_template_part('facebook'); ?>
<?php get_footer(); ?>
