<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package fisioforma
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
                <a href="#" title=""><img class="image-central" src="<?php bloginfo('template_url'); ?>/images/header/Banner2.jpg" alt="FisioForma Website"></a>
              </div>
            </div>
          </div>
          
          <div class="item">
            <div class="s1">
              <div class="slide">
                <a href="#" title=""><img class="image-central" src="<?php bloginfo('template_url'); ?>/images/header/Banner3.jpg" alt="FisioForma Website"></a>
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
          <h1>Tratamentos</h1>
          <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/article-treatment.png"></a>
          <h2>Tratamento Crystak Clear</h2>
          <p>Donec eget dui aliquet, porttitor quam sit amet, vehicula enim. Nunc sodales iaculis est eu auctor.</p>
          <a class="article-btn" href="#"><span>></span> Saiba mais</a>
        </div>
        <div class="single-article news">
          <h1>Cosméticos</h1>
          <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/article-news.png"></a>
          <h2>FisioForma na Mídia</h2>
          <p>Donec eget dui aliquet, porttitor quam sit amet, vehicula enim. Nunc sodales iaculis est eu auctor.</p>
          <a class="article-btn" href="#"><span>></span> Saiba mais</a>
        </div>
        <div class="single-article recipe">
          <h1>Depoimentos</h1>
          <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/article-chocolate.png"></a>
          <h2>Chocolate Quente</h2>
          <p>Donec eget dui aliquet, porttitor quam sit amet, vehicula enim. Nunc sodales iaculis est eu auctor.</p>
          <a class="article-btn" href="#"><span>></span> Saiba mais</a>
        </div>
      </div>
    </article>

    <article class="indexcall video clearfix">
      <div class="container">
        <div class="latest-video">
          <iframe width="516" height="316" src="//www.youtube.com/embed/videoseries?list=PLCD2CCCA97D92DC3B" frameborder="0" allowfullscreen></iframe>
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
        <a href="">
          <div class="intern">
            <h1>Seja um Franqueado</h1>
            <hr class="purple">
          </div>
          <img src="<?php bloginfo('template_url'); ?>/images/women.png" class="img-circle">
        </a>
      </div>

      <div class="circle">
        <a href="">
          <div class="intern">
            <h1>Loja Virtual</h1>
            <hr class="orange">
          </div>
          <img src="<?php bloginfo('template_url'); ?>/images/cosmetics.png" class="img-circle">
        </a>
      </div>
      
      <div class="circle">
        <a href="">
          <div class="intern">
            <h1>Unidades</h1>
            <hr class="green">
          </div>
          <img src="<?php bloginfo('template_url'); ?>/images/clinic.png" class="img-circle">
        </a>
      </div>
    </div>

    <div class="about">
      <div class="about-content container col-xs-">
        <div class="single-about col-md-4 border">
          <p>Sed vulputate, elit vel pulvinar lacinia, lorem sem porta eros, ut posuere nibh metus sit amet felis. Proin sodales odio congue scelerisque molestie. Praesent ut pulvinar urna, ut egestas metus. In luctus est id ligula blandit, at aliquam tortor vestibulum. </p>
          <a href="">Saiba Mais</a>
        </div>
        <div class="single-about col-md-4 border">
          <p>Sed vulputate, elit vel pulvinar lacinia, lorem sem porta eros, ut posuere nibh metus sit amet felis. Proin sodales odio congue scelerisque molestie. Praesent ut pulvinar urna, ut egestas metus. In luctus est id ligula blandit, at aliquam tortor vestibulum. </p>
          <a href="">Saiba Mais</a>
        </div>
        <div class="single-about col-md-4">
          <p>Sed vulputate, elit vel pulvinar lacinia, lorem sem porta eros, ut posuere nibh metus sit amet felis. Proin sodales odio congue scelerisque molestie. Praesent ut pulvinar urna, ut egestas metus. In luctus est id ligula blandit, at aliquam tortor vestibulum. </p>
          <a href="">Saiba Mais</a>
        </div>
      </div>
    </div>

<?php get_template_part('facebook'); ?>
<?php get_footer(); ?>
