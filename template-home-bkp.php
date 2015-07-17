<?php

/*
Template Name: Home
*/

get_header(); ?>

    <header class="clearfix">
      <div id="header-c" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#header-c" data-slide-to="0" class="active"></li>
          <li data-target="#header-c" data-slide-to="1"></li>
          <!--<li data-target="#header-c" data-slide-to="2"></li>-->
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner ">

          <div class="item active">
            <div class="s1">
              <div class="slide">
                <img class="image-central" src="<?php bloginfo('template_url'); ?>/images/header/slide1-midia.png" alt="FisioForma Website">
              </div>
              <div class="right-caption">
                <h1>Um novo<br><span>website</span></h1>
                <p>completamente reformulado para você cliente FisioForma.</p>
                <!--<a href="#" class="btn">Saiba mais</a>-->
              </div>
            </div>
          </div>
          
          <div class="item">
            <div class="s1">
              <div class="slide">
                <img class="image-central" src="<?php bloginfo('template_url'); ?>/images/header/slide2-midia.png" alt="FisioForma Website">
              </div>
              <div class="right-caption">
                <h1>Programa<br><span>Fisioforma</span></h1>
                <p>venha curtir as dicas de verão conosco.</p>
                <a href="#" class="btn">Saiba mais</a>
              </div>
            </div>
          </div>

          <!--<div class="item">
            <img src="images/header/slide0.png" alt="...">
            <div class="carousel-caption">
              
            </div>
          </div>

          <div class="item">
            <img src="images/header/slide0.png" alt="...">
            <div class="carousel-caption">
              
            </div>
          </div>-->

        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#header-c" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#header-c" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>
    </header>

   <article class="indexcall container clearfix">
      <div class="list-article">
        
        <div class="single-article treatment">
          <h1><?php echo rwmb_meta( 'fisiohome01block-titulo01' ); ?></h1>
          <a href="<?php echo rwmb_meta( 'fisiohome01block-link01' ); ?>">
            <?php 
            $images = rwmb_meta( 'fisiohome01block-foto01', 'type=plupload_image' );
            foreach ( $images as $image )
            {
                echo "<img src='{$image['full_url']}'>";
            }
            ?>          
          </a>
          <h2><?php echo rwmb_meta( 'fisiohome01block-subtitulo01' ); ?></h2>
          <p><?php echo rwmb_meta( 'fisiohome01block-texto01' ); ?></p>
          <a class="article-btn" href="<?php echo rwmb_meta( 'fisiohome01block-link01' ); ?>"><span>></span> Saiba mais</a>
        </div>
        
        <div class="single-article news">
          <h1><?php echo rwmb_meta( 'fisiohome01block-titulo02' ); ?></h1>
          <a href="<?php echo rwmb_meta( 'fisiohome01block-link02' ); ?>">
            <?php 
            $images = rwmb_meta( 'fisiohome01block-foto02', 'type=plupload_image' );
            foreach ( $images as $image )
            {
                echo "<img src='{$image['full_url']}'>";
            }
            ?>
          </a>
          <h2><?php echo rwmb_meta( 'fisiohome01block-subtitulo02' ); ?></h2>
          <p><?php echo rwmb_meta( 'fisiohome01block-texto02' ); ?></p>
          <a class="article-btn" href="<?php echo rwmb_meta( 'fisiohome01block-link02' ); ?>"><span>></span> Saiba mais</a>
        </div>
        
        <div class="single-article recipe">
          <h1><?php echo rwmb_meta( 'fisiohome01block-titulo03' ); ?></h1>
          <a href="<?php echo rwmb_meta( 'fisiohome01block-link03' ); ?>">
            <?php 
            $images = rwmb_meta( 'fisiohome01block-foto03', 'type=plupload_image' );
            foreach ( $images as $image )
            {
                echo "<img src='{$image['full_url']}'>";
            }
            ?>
          </a>
          <h2><?php echo rwmb_meta( 'fisiohome01block-subtitulo03' ); ?></h2>
          <p><?php echo rwmb_meta( 'fisiohome01block-texto03' ); ?></p>
          <a class="article-btn" href="<?php echo rwmb_meta( 'fisiohome01block-link03' ); ?>"><span>></span> Saiba mais</a>
        </div>
        
      </div>
    </article>

    <article class="indexcall video clearfix">
      <div class="container">
        <div class="latest-video">
          <?php
            $embed_code = wp_oembed_get(rwmb_meta( 'fisiohome02block-video' ),
              array(
                'height' => 316,
                'width'  => 516,
              )
            );
            echo $embed_code;
          ?>
        </div>
        <!--<div class="another-videos">
          <img class="videos" src="images/programa1.png">
          <img class="videos" src="images/program2.png">
          <img class="videos" src="images/programa1.png">
        </div>-->
      </div>
    </article>

    <div class="container bottom-bar clearfix">
      <div class="circle">
        <a href="<?php echo rwmb_meta( 'fisiohome02block-link01' ); ?>">
          <div class="intern">
            <h1><?php echo rwmb_meta( 'fisiohome02block-titulo01' ); ?></h1>
            <hr class="purple">
          </div>
          <?php 
            $images = rwmb_meta( 'fisiohome02block-foto01', 'type=plupload_image' );
            foreach ( $images as $image )
            {
                echo "<img src='{$image['full_url']}' class='img-circle'>";
            }
          ?>
        </a>
      </div>

      <div class="circle">
        <a href="<?php echo rwmb_meta( 'fisiohome02block-link02' ); ?>">
          <div class="intern">
            <h1><?php echo rwmb_meta( 'fisiohome02block-titulo02' ); ?></h1>
            <hr class="orange">
          </div>
          <?php 
            $images = rwmb_meta( 'fisiohome02block-foto02', 'type=plupload_image' );
            foreach ( $images as $image )
            {
                echo "<img src='{$image['full_url']}' class='img-circle'>";
            }
          ?>
        </a>
      </div>
      
      <div class="circle">
        <a href="<?php echo rwmb_meta( 'fisiohome02block-link03' ); ?>">
          <div class="intern">
            <h1><?php echo rwmb_meta( 'fisiohome02block-titulo03' ); ?></h1>
            <hr class="green">
          </div>
          <?php 
            $images = rwmb_meta( 'fisiohome02block-foto03', 'type=plupload_image' );
            foreach ( $images as $image )
            {
                echo "<img src='{$image['full_url']}' class='img-circle'>";
            }
          ?>
        </a>
      </div>
    </div>

    <div class="about">
      <div class="about-content container col-xs-">
        <div class="single-about col-md-4 border">
          <p><?php echo rwmb_meta( 'fisiohome02block-texto01' ); ?></p>
          <a href="<?php echo rwmb_meta( 'fisiohome02block-link01' ); ?>">Saiba Mais</a>
        </div>
        <div class="single-about col-md-4 border">
          <p><?php echo rwmb_meta( 'fisiohome02block-texto02' ); ?></p>
          <a href="<?php echo rwmb_meta( 'fisiohome02block-link02' ); ?>">Saiba Mais</a>
        </div>
        <div class="single-about col-md-4">
          <p><?php echo rwmb_meta( 'fisiohome02block-texto03' ); ?></p>
          <a href="<?php echo rwmb_meta( 'fisiohome02block-link03' ); ?>">Saiba Mais</a>
        </div>
      </div>
    </div>

<?php get_template_part('facebook'); ?>
<?php get_footer(); ?>
