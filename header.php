<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package fisioforma
 */
?>
<html lang="pt-br">
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1170px, maximum-scale=1">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
    <?php wp_head(); ?>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<script>(function() {
  var _fbq = window._fbq || (window._fbq = []);
  if (!_fbq.loaded) {
    var fbds = document.createElement('script');
    fbds.async = true;
    fbds.src = '//connect.facebook.net/en_US/fbds.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(fbds, s);
    _fbq.loaded = true;
  }
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', '6023219736568', {'value':'0.00','currency':'BRL'}]);
</script>
    <![endif]-->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/pl-base.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap-theme.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
		<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
    <?php if (is_post_type_archive( 'unidades' )){ ?>
    <script>
        $.fn.clicktoggle = function(a, b) {
            return this.each(function() {
                var clicked = false;
                $(this).bind("click", function() {
                    if (clicked) {
                        clicked = false;
                        return b.apply(this, arguments);
                    }
                    clicked = true;
                    return a.apply(this, arguments);
                });
            });
        };
    </script>
    <?php } ?>
    <?php if (is_page( 'franquias' )){ ?>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/franquias.css">
    <?php } ?>
    
  </head>

  <body>
    <nav class="clearfix">
      <div class="container">
        <ul>
          <li><a <?php if ( is_post_type_archive ( 'tratamentos' ) || is_singular( 'tratamentos' ) ) { ?>class="ative"<?php } ?> href="<?php echo esc_url( home_url( '/tratamentos/' ) ); ?>">Tratamentos</a></li>
          <li><a <?php if ( is_post_type_archive ( 'unidades' ) || is_singular( 'unidades' ) ) { ?>class="ative"<?php } ?> href="<?php echo esc_url( home_url( '/unidades/' ) ); ?>">Unidades</a></li>
          <li><a <?php if ( is_post_type_archive ( 'cosmeticos' ) || is_singular( 'cosmeticos' ) ) { ?>class="ative"<?php } ?> href="<?php echo esc_url( home_url( '/cosmeticos/' ) ); ?>">Cosméticos</a></li>
          <li><a <?php if ( is_post_type_archive ( 'depoimentos' ) || is_singular( 'depoimentos' ) ) { ?>class="ative"<?php } ?> href="<?php echo esc_url( home_url( '/depoimentos/' ) ); ?>">Depoimentos</a></li>
          <li><a <?php if ( is_page( 'franquias' ) ) { ?>class="ative"<?php } ?> href="<?php echo esc_url( home_url( '/franquias/' ) ); ?>">Franquias</a></li>
          <li><a <?php if ( is_post_type_archive ( 'loja' ) || is_singular( 'loja' ) ) { ?>class="ative"<?php } ?> href="<?php echo esc_url( home_url( '/loja/' ) ); ?>">Loja Virtual</a></li>
          <li><a <?php if ( is_page( 'contato' ) ) { ?>class="ative"<?php } ?> href="<?php echo esc_url( home_url( '/contato/' ) ); ?>">Fale Conosco</a></li>
        </ul>
      </div>
    </nav>
    <?php if (!is_page( 'franquias' )){ ?>
    <div class="logo-box">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.png"></a>
    </div>
    <?php } ?>