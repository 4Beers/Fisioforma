<?php

  //response generation function

  $response = "";

  //function to generate response
  function my_contact_form_generate_response($type, $message){

    global $response;

    if($type == "success") $response = "<div class='success'>{$message} <a href='#' class='msgclose'>✖</a></div>";
    else $response = "<div class='error'>{$message} <a href='#' class='msgclose'>✖</a></div>";

  }

  //response messages
  $not_human       = "Código de verificação incorreto!";
  $missing_content = "Por favor preencha todos os dados.";
  $email_invalid   = "Endereço de email inválido!";
  $message_unsent  = "A mensagem não foi enviada. Tente novamente.";
  $message_sent    = "Obrigado! Agradecemos o contato.";

  //user posted variables
  $name = $_POST['message_name'];
  $email = $_POST['message_email'];
  $phone = $_POST['message_phone'];
  $qtd = $_POST['message_qtd'];
  $prod = $_POST['message_prod'];
  $end = $_POST['message_end'];
  $human    = $_POST['message_human'];
  $body = "<b>Nome:</b> $name \n<b>Email:</b> $email \n<b>Telefone:</b> $phone \n<b>Endereço:</b> $end \n<b>Produto:</b> $prod \n<b>Quantidade:</b> $qtd ";

  //php mailer variables
  $to = 'lojavirtual@fisioforma.com.br';
  $subject = "Loja Virtual FISIOFORMA";
  $headers = 'From: '. $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n";
  $headers .= "MIME-Version: 1.0";
  $headers .= "Content-Type: text/html; charset=UTF-8";

  if(!$human == 0){
    if($human != 5) my_contact_form_generate_response("error", $not_human); //not human!
    else {
      
      //validate email
      if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        my_contact_form_generate_response("error", $email_invalid);
      else //email is valid
      {
        //validate presence of name and message
        if(empty($name)){
          my_contact_form_generate_response("error", $missing_content);
        }
        else //ready to go!
        {
          $sent = wp_mail($to, $subject, strip_tags($body), $headers);
          if($sent) my_contact_form_generate_response("success", $message_sent); //message sent!
          else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
        }
      }
    }
  }
  else if ($_POST['submitted']) my_contact_form_generate_response("error", $missing_content);

get_header(); ?>

  <script type="text/javascript">
    $( document ).ready(function() {
      $( ".msgclose" ).click(function() {
        $( ".error" ).fadeOut();
        $( ".success" ).fadeOut();
      });
      $( "#toggleForm" ).click(function( event ) {
        $( ".contact" ).slideToggle();
        event.preventDefault();
      });
    });
  </script>

  <?php echo $response; ?>

    <div class="selected">
      <div class="container">
        <h1>Loja</h1>
      </div>
    </div>

    <div class="clearfix pagetitle"></div>

    <div class="content container">

      <div class="row">

        <?php while ( have_posts() ) : $slideNumber = 0; the_post(); ?>
        
        <div class="col-xs-4 productpreview">
          <?php the_post_thumbnail( 'full' ); ?>
        </div>
        <div class="col-xs-8">
          
          <div class="product_information">
              <h1 class="product_title"><?php echo rwmb_meta( 'fisioprod-nome' ); ?></h1> 
		</br>
		<p>por apenas</p>
              <h2 class="product_amount"><span class="currency">R$</span><?php echo rwmb_meta( 'fisioprod-preco-por' ); ?></h2>
	      <a href="#" id="toggleForm"><button class="buy">Solicite o seu produto</button></a>
<form class="contact" method="POST" action="<?php the_permalink(); ?>" style="margin: 20px 0 0 0; display: none">
            <input type="hidden" name="message_prod" value="<?php the_title(); ?>">
            <input type="hidden" name="submitted" value="1">          
            <div class="primary">
                <input type="text" placeholder="Nome:" name="message_name" value="" required>
                <input type="email" placeholder="E-Mail:" name="message_email" value="" required>
                <input type="phone" placeholder="Telefone:" name="message_phone" value="" required>
                <input type="text" placeholder="Endereço:" name="message_end" value="" required>
                <input type="number" placeholder="Quantidade:" name="message_qtd" value="" required>
                <input type="text" placeholder="2 + 3 = ?" name="message_human" required>
                <input type="submit" class="send" value="Solicitar Produto">
            </div>
        </form>         
	</br>
	</br>
          <?php echo rwmb_meta( 'fisioprod-descr' ); ?>
              
              
          </div>
          
          
          
        </div>

        <?php endwhile; // end of the loop. ?>

      </div>
      <br />
      
      <a href="<?php echo get_post_type_archive_link( 'loja' ); ?>">⟵ Voltar</a>
      
    </div>

<?php get_template_part('facebook'); ?>
<?php get_footer(); ?>