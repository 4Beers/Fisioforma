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

			<?php while ( have_posts() ) : the_post(); ?>

        <div class="row">
          <div class="card">
            <?php the_post_thumbnail('list-img'); ?>
            <div class="card_description">
              <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
              <p><?php
              $content = get_the_content();
              $trimmed_content = wp_trim_words( $content, 54, '...' );
              echo $trimmed_content;
                ?></p>
              <a href="<?php the_permalink(); ?>"><button class="seemore">Veja mais<span class="plus"></span></button></a>
            </div>
          </div>
        </div>

			<?php endwhile; ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>
    
    </article>


<?php get_template_part('facebook'); ?>
<?php get_footer(); ?>
