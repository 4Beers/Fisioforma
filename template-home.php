<?php

/*
Template Name: Home
*/

get_header(); ?>

    <header>
      <div id="header-c" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ol class="carousel-indicators">

          <?php
            $banner01 = rwmb_meta( 'fisiohomebanner-img01', 'type=image' );
            $banner02 = rwmb_meta( 'fisiohomebanner-img02', 'type=image' );
            $banner03 = rwmb_meta( 'fisiohomebanner-img03', 'type=image' );
            $banner04 = rwmb_meta( 'fisiohomebanner-img04', 'type=image' );
            $banner05 = rwmb_meta( 'fisiohomebanner-img05', 'type=image' );
            $banner06 = rwmb_meta( 'fisiohomebanner-img06', 'type=image' );
            $link01 = rwmb_meta( 'fisiohomebanner-link01' );
            $link02 = rwmb_meta( 'fisiohomebanner-link02' );
            $link03 = rwmb_meta( 'fisiohomebanner-link03' );
            $link04 = rwmb_meta( 'fisiohomebanner-link04' );
            $link05 = rwmb_meta( 'fisiohomebanner-link05' );
            $link06 = rwmb_meta( 'fisiohomebanner-link06' );
          ?>

          <?php if( ($banner01)) { ?>
              <li data-target="#header-c" data-slide-to="0" class="active"></li>
          <?php } ?>
          <?php if( ($banner02)) { ?>
              <li data-target="#header-c" data-slide-to="1"></li>
          <?php } ?>
          <?php if( ($banner03)) { ?>
              <li data-target="#header-c" data-slide-to="2"></li>
          <?php } ?>
          <?php if( ($banner04)) { ?>
              <li data-target="#header-c" data-slide-to="3"></li>
          <?php } ?>
          <?php if( ($banner05)) { ?>
              <li data-target="#header-c" data-slide-to="4"></li>
          <?php } ?>
          <?php if( ($banner06)) { ?>
              <li data-target="#header-c" data-slide-to="5"></li>
          <?php } ?>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">

          <?php if( ($banner01)) {
            foreach ( $banner01 as $image )
            {
                echo "<div class='item active'>";
                if ( ($link01)) {
                  echo "<a href='{$link01}'><img src='{$image['full_url']}'></a>";
                } else {
                  echo "<img src='{$image['full_url']}'>";
                }
                echo "</div>";
            }
          } ?>
          <?php if( ($banner02)) {
            foreach ( $banner02 as $image )
            {
                echo "<div class='item'>";
                if ( ($link02)) {
                  echo "<a href='{$link02}'><img src='{$image['full_url']}'></a>";
                } else {
                  echo "<img src='{$image['full_url']}'>";
                }
                echo "</div>";
            }
          } ?>
          <?php if( ($banner03)) {
            foreach ( $banner03 as $image )
            {
                echo "<div class='item'>";
                if ( ($link03)) {
                  echo "<a href='{$link03}'><img src='{$image['full_url']}'></a>";
                } else {
                  echo "<img src='{$image['full_url']}'>";
                }
                echo "</div>";
            }
          } ?>
          <?php if( ($banner04)) {
            foreach ( $banner04 as $image )
            {
                echo "<div class='item'>";
                if ( ($link04)) {
                  echo "<a href='{$link04}'><img src='{$image['full_url']}'></a>";
                } else {
                  echo "<img src='{$image['full_url']}'>";
                }
                echo "</div>";
            }
          } ?>
          <?php if( ($banner05)) {
            foreach ( $banner05 as $image )
            {
                echo "<div class='item'>";
                if ( ($link05)) {
                  echo "<a href='{$link05}'><img src='{$image['full_url']}'></a>";
                } else {
                  echo "<img src='{$image['full_url']}'>";
                }
                echo "</div>";
            }
          } ?>
          <?php if( ($banner06)) {
            foreach ( $banner06 as $image )
            {
                echo "<div class='item'>";
                if ( ($link06)) {
                  echo "<a href='{$link06}'><img src='{$image['full_url']}'></a>";
                } else {
                  echo "<img src='{$image['full_url']}'>";
                }
                echo "</div>";
            }
          } ?>

        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#header-c" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#header-c" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>
    <br class="clearfix" />
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

    <article class="video clearfix">
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
      </div>
    </article>

    <div class="programa-info">
      <div class="container">
        <?php $info = rwmb_meta( 'fisiohome02block-info' );
        echo "{$info}";?>
      </div>
    </div>

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
