<?php

/*
Template Name: Off page
*/

?><html lang="pt-br">
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

    <![endif]-->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/pl-base.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap-theme.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
	
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/landing_page/landing_page.css">
  	
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
  </head>
  <body>
  	<div class="container">
  		<div class="info">  		
	  		<div class="col-md-9 col-md-offset-3">
	  			<div class="header">
	  				<div class="col-xs-9">
	  					<h1>FISIOFORMA + Fisioterapeuta</h1>
			  			<h2>Empreendedora = $uce$$o garantido.</h2>
	  				</div>
	  				<div class="col-xs-3">
	  					<img src="<?php bloginfo('template_url'); ?>/landing_page/desconto.png">
	  				</div>
	  			</div>
	  			<div class="sub-title col-md-12">
	  				<p>Por darmos preferência a você como nossa franqueada, estamos oferecendo super vantagens como:</p>
	  				<ul>
	  					<li>Prioridade na lista de interessados em abrir uma franquia aí na sua cidade;</li>
	  					<li>Até 10% de desconto na taxa de franquia; </li>
	  					<li>Parcelamento dos equipamentos em até 10X sem juros, diretamente com as fábricas;</li>
	  					<li>Treinamento técnico e comercial exclusivo, direcionado para fisioterapeutas;</li>
	  					<li>Acompanhamento constante e respaldo da franqueadora. Esse suporte garante que todo o trabalho seja feito com excelência e segurança;</li>
	  					<li>A FISIOFORMA é a única franquia do ramo que tem um programa semanal televisivo, com meia hora de duração, disponível GRATUITAMENTE para franqueados.</li>
	  				</ul>

	  			</div>
	  		</div>
	  		<br>
	  	</div>
	  	

  		<div class="video_modal">
  			<!-- Button trigger modal -->
			<a data-toggle="modal" data-target="#video">
			  Launch demo modal
			</a>

			<!-- Modal -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="video">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
			      </div>
			      <div class="modal-body">
			        ...
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        <button type="button" class="btn btn-primary">Save changes</button>
			      </div>
			    </div>
			  </div>
			</div>

  			<script type="text/javascript">
              $('#videomodal_<?php the_ID(); ?>').on('hidden.bs.modal', function () {
                  callPlayer('yt-player', 'stopVideo');
              });
          	</script>
  		</div>
  		
  		<div class="footer">
  			<p>Além, é claro, de adquirir todo o know-how de uma das melhores clínicas do Brasil, especializada em tratamentos corporais e faciais não invasivos.</p>
  			<br>	
  			<p>Essa é a chance que você esperava para ter a sua própria clínica estética, padrão primeiro mundo, com: equipamentos de alta tecnologia, técnicas exclusivas e profissionais altamente capacitadas.</p>
  			<br>
  			<p>A hora de investir em um negócio de alta rentabilidade é agora!	</p>
  			<br>
  			<br>
  			<h1>Entre em contato conosco:</h1>
  			<div class="form_franchise">
  				<?php echo do_shortcode( '[contact-form-7 id="369" title="LandingPage"]' ); ?>
  			</div>
  			
  		</div>

  	</div>
  </body>
