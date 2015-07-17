<?php 

/*
Template Name: Franquias
*/
get_header(); ?>

<script type="text/javascript">

/* Máscaras TELEFONE */
function mascara(o,f){
    v_obj=o
    v_fun=f
    setTimeout("execmascara()",1)
}
function execmascara(){
    v_obj.value=v_fun(v_obj.value)
}
function mtel(v){
    v=v.replace(/\D/g,"");             //Remove tudo o que não é dígito
    v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
    v=v.replace(/(\d)(\d{4})$/,"$1-$2");    //Coloca hífen entre o quarto e o quinto dígitos
    return v;
}
function mtel_tel(v){
    v=v.replace(/\D/g,"");             //Remove tudo o que não é dígito
    v=v.replace(/^(\d{2})(\d{2})/g,"$1/$2/"); //Coloca divide a data em dd/mm/yy
    return v;
}
function id( el ){
    return document.getElementById( el );
}
window.onload = function(){
    id('telefone').onkeypress = function(){
        mascara( this, mtel );
    }
    id('celular').onkeypress = function(){
        mascara( this, mtel );
    }
    id('data').onkeypress = function(){
        mascara( this, mtel_tel );
    }
}



</script>
      
   <div class="selected subfixed">
      <div class="container">
        <div class="subnav">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="small_logo" src="<?php bloginfo('template_url'); ?>/images/logo2.png"></a>
          <ul>
            <li><a href="#historico" data-uk-smooth-scroll="{offset: 80}"><?php echo rwmb_meta( 'fisiotitulo01' ); ?></a></li>
            <li><a href="#sistemadefranquias" data-uk-smooth-scroll="{offset: 80}"><?php echo rwmb_meta( 'fisiotitulo02' ); ?></a></li>
            <li><a href="#afranquia" data-uk-smooth-scroll="{offset: 80}"><?php echo rwmb_meta( 'fisiotitulo03' ); ?></a></li>
            <li><a href="#sobreosetor" data-uk-smooth-scroll="{offset: 80}"><?php echo rwmb_meta( 'fisiotitulo04' ); ?></a></li>
            <li><a href="#perfildoinvestidor" data-uk-smooth-scroll="{offset: 80}"><?php echo rwmb_meta( 'fisiotitulo05' ); ?></a></li>
            <li><a href="#faleconosco" data-uk-smooth-scroll="{offset: 80}">Fale Conosco</a></li>
            <li><a href="#mapa" data-uk-smooth-scroll="{offset: 80}">Mapa</a></li>
          </ul>          
        </div>
      </div>
    </div>

    <div id="historico" class="history" data-uk-scrollspy="{cls:'uk-animation-fade'}">
      <div class="texts" data-uk-scrollspy="{cls:'uk-animation-fade', delay:600}">
        <h1><?php echo rwmb_meta( 'fisiotitulo01' ); ?></h1>
        <?php echo rwmb_meta( 'fisiotexto01' ); ?>
      </div>
    </div>

     <div id="sistemadefranquias" class="system_franchise" data-uk-scrollspy="{cls:'uk-animation-fade'}">
      <div class="texts" data-uk-scrollspy="{cls:'uk-animation-fade', delay:900}">
        <h1><?php echo rwmb_meta( 'fisiotitulo02' ); ?></h1>
        <?php echo rwmb_meta( 'fisiotexto02' ); ?>
      </div>
    </div>

    <div id="afranquia" class="the_franchise" data-uk-scrollspy="{cls:'uk-animation-fade'}">
      <div class="texts" data-uk-scrollspy="{cls:'uk-animation-fade', delay:600}">
        <h1><?php echo rwmb_meta( 'fisiotitulo03' ); ?></h1>
        <?php echo rwmb_meta( 'fisiotexto03' ); ?>
      </div>
    </div>

    <div id="sobreosetor" class="about_section">
      <div class="graphic">
        <img class="pg1" src="<?php bloginfo('template_url'); ?>/images/franchise/graphic1.png" alt="" data-uk-scrollspy="{cls:'uk-animation-fade', delay:300}">
        <img class="pg2" src="<?php bloginfo('template_url'); ?>/images/franchise/graphic2.png" alt="" data-uk-scrollspy="{cls:'uk-animation-fade', delay:500}">
        <img class="pg3" src="<?php bloginfo('template_url'); ?>/images/franchise/graphic3.png" alt="" data-uk-scrollspy="{cls:'uk-animation-fade', delay:900}">
      </div>
      <div class="texts" style="margin-top:50px;">
        <h1><?php echo rwmb_meta( 'fisiotitulo04' ); ?></h1>
        <?php echo '<p style="text-align:center;">' . rwmb_meta( 'fisiotexto04' ) . '</p>'; ?>
	<br>
      </div>
    </div>

    <div id="perfildoinvestidor" class="profile" data-uk-scrollspy="{cls:'uk-animation-fade'}">
      <div class="texts" data-uk-scrollspy="{cls:'uk-animation-fade', delay:600}">
        <h1><?php echo rwmb_meta( 'fisiotitulo05' ); ?></h1>
        <?php echo rwmb_meta( 'fisiotexto05' ); ?>
      </div>
    </div>

    <div id="faleconosco" class="form_franchise">
      
      <h1>Seja um franqueado</h1>
	
      <div class="texts" data-uk-scrollspy="{cls:'uk-animation-fade'}">
	<?php $my_date = the_date('', '<h2>', '</h2>', FALSE); echo $my_date; ?>
        <?php echo do_shortcode( '[contact-form-7 id="328" title="Franquias Contato"]' ); ?>
      </div>

      <br class="clear" />
    </div>

    <div id="mapa" class="place" data-uk-scrollspy="{cls:'uk-animation-fade'}">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7439.751311342244!2d-47.807682!3d-21.197098!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94b9bed9857131ad%3A0xd15381297bd57c63!2sAv.+Pres.+Vargas%2C+997+-+Jardim+Am%C3%A9rica%2C+Ribeir%C3%A3o+Preto+-+SP%2C+Brasil!5e0!3m2!1spt-BR!2sbr!4v1416593255094" id="map" frameborder="0" style="border:0"></iframe>
    </div>
      <br class="clear" />

<?php get_template_part('facebook'); ?>    
<!-- Facebook Conversion Code for Cadastros - Franquias -->

<?php get_footer(); ?>