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
        <h1>Loja Virtual</h1>
      </div>
    </div>

    <article class="container">
      
        <div class="product_display">
		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>
          
          <div class="product">
            <div class="product_image">
              <?php the_post_thumbnail( 'full' ); ?>
            </div>
            <div class="product_information">
              <h1 class="product_title"><?php echo rwmb_meta( 'fisioprod-nome' ); ?></h1>
              <p>por apenas</p>
              <h2 class="product_amount"><span class="currency">R$</span><?php echo rwmb_meta( 'fisioprod-preco-por' ); ?></h2>
              <a href="<?php the_permalink(); ?>"><button type="" class="buy">Saiba Mais</button></a>
            </div>
          </div>

			<?php endwhile; ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>
    
        </div>
    </article>


<?php get_template_part('facebook'); ?>
<?php get_footer(); ?>
