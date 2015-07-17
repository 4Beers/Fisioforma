<?php

/*
Template Name: Contato
*/

  //response generation function

  $response = "";

  //function to generate response
  function my_contact_form_generate_response($type, $message){

    global $response;

    if($type == "success") $response = "<div class='success'>{$message} <a href='#' class='msgclose'>✖</a></div>";
    else $response = "<div class='error'>{$message} <a href='#' class='msgclose'>✖</a></div>";

  }

  //response messages
  $not_human       = "Faltou na aula de matemática? Valor incorreto!";
  $missing_content = "Por favor preencha todos os dados.";
  $email_invalid   = "Endereço de email inválido!";
  $message_unsent  = "A mensagem não foi enviada. Tente novamente.";
  $message_sent    = "Obrigado! Agradecemos o contato.";

  //user posted variables
  $name = $_POST['message_name'];
  $email = $_POST['message_email'];
  $phone = $_POST['message_phone'];
  $message = $_POST['message_text'];
  $human = $_POST['message_human'];
  $body = "<b>Nome:</b> $name \n<b>Email:</b> $email \n<b>Telefone:</b> $phone \n\n$message";

  //php mailer variables
  $to = get_option('admin_email');
  $subject = "Fale Conosco FISIOFORMA";
  $headers = 'From: '. $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n";

  if(!$human == 0){
    if($human != 5) my_contact_form_generate_response("error", $not_human); //not human!
    else {

      //validate email
      if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        my_contact_form_generate_response("error", $email_invalid);
      else //email is valid
      {
        //validate presence of name and message
        if(empty($name) || empty($message)){
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
    });
  </script>

  <?php echo $response; ?>
            
   <div class="selected">
      <div class="container">
        <h1>Fale Conosco</h1>
      </div>
    </div>

    <div class="clearfix pagetitle"></div>

    <article class="container">
      
      <div class="row">
        <div class="card wharebuy">
          <h2><?php echo rwmb_meta( 'fisiocontato-titulo' ); ?></h2>
          <?php echo rwmb_meta( 'fisiocontato-texto' ); ?>
        </div>   
      </div>
 
        <form class="contact" method="POST" action="<?php the_permalink(); ?>">
          
            <div class="primary">
                <input type="text" placeholder="Nome:" name="message_name" value="" required>
                <input type="email" placeholder="E-Mail:" name="message_email" value="" required>
                <input type="phone" placeholder="Telefone:" name="message_phone" value="" required>
                <input type="text" placeholder="2 + 3 = ?" name="message_human" required>
            </div>
            <div class="secondary">
                <textarea name="message_text" rows="3" placeholder="Mensagem:" required></textarea>
            </div>
            <input type="hidden" name="submitted" value="1">
            <input type="submit" class="send" value="Enviar">
        </form>
    </article>


<?php get_template_part('facebook'); ?>    
<?php get_footer(); ?>