<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package fisioforma
 */
?>

    <footer>
      <div class="container">
        <ul>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Início</a></li>
          <li><a <?php if ( is_post_type_archive ( 'tratamentos' ) || is_singular( 'tratamentos' ) ) { ?>class="ative"<?php } ?> href="<?php echo esc_url( home_url( '/tratamentos/' ) ); ?>">Tratamentos</a></li>
          <li><a <?php if ( is_post_type_archive ( 'unidades' ) || is_singular( 'unidades' ) ) { ?>class="ative"<?php } ?> href="<?php echo esc_url( home_url( '/unidades/' ) ); ?>">Unidades</a></li>
          <li><a <?php if ( is_post_type_archive ( 'cosmeticos' ) || is_singular( 'cosmeticos' ) ) { ?>class="ative"<?php } ?> href="<?php echo esc_url( home_url( '/cosmeticos/' ) ); ?>">Cosméticos</a></li>
          <li><a <?php if ( is_post_type_archive ( 'depoimentos' ) || is_singular( 'depoimentos' ) ) { ?>class="ative"<?php } ?> href="<?php echo esc_url( home_url( '/depoimentos/' ) ); ?>">Depoimentos</a></li>
          <li><a <?php if ( is_page( 'franquias' ) ) { ?>class="ative"<?php } ?> href="<?php echo esc_url( home_url( '/franquias/' ) ); ?>">Franquias</a></li>
          <li><a <?php if ( is_post_type_archive ( 'loja' ) || is_singular( 'loja' ) ) { ?>class="ative"<?php } ?> href="<?php echo esc_url( home_url( '/loja/' ) ); ?>">Loja Virtual</a></li>
          <li><a <?php if ( is_page( 'contato' ) ) { ?>class="ative"<?php } ?> href="<?php echo esc_url( home_url( '/contato/' ) ); ?>">Fale Conosco</a></li>
        </ul>
        <div class="social">
          
          <a href="http://instagram.com/fisioformaesteticaderesultados"><img src="<?php bloginfo('template_url'); ?>/images/insta.png"></a>
          <!--<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/twitter.png"></a>-->
          <a href="https://www.facebook.com/clinicafisioforma"><img src="<?php bloginfo('template_url'); ?>/images/facebook.png"></a>
	  <a href="https://www.youtube.com/criacaobrasil"><img src="<?php bloginfo('template_url'); ?>/images/youtube.png"></a>
          <p>FISIOFORMA nas redes sociais:</p>
        </div>
      </div>
    </footer>

    <div class="copyright">
      <div class="container">
        <p>2014 Copyright © - FISIOFORMA. Todos os Direitos Reservados</p>
        <a class="ibs" href="http://ibsdigital.com" target="_blank" title="">designed by <img src="<?php bloginfo('template_url'); ?>/images/logo_ibs.png" alt=""></a>  
      </div>
    </div>

    <?php if (is_page( 'franquias' )){ ?>
    <script src="<?php bloginfo('template_url'); ?>/js/uikit.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/subnav.js"></script>
    <?php } ?>
	
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-60565974-1', 'auto');
  ga('send', 'pageview');

</script>

<?php wp_footer(); ?>

</body>
</html>