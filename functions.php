<?php 

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

function menu_mh(){ ?>

	<nav class="navbar navbar-default">
    <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#apa_collapse">
          <span class="sr-only"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">apasionados</a>
      </div>
    
    <?php 
      $args = array('menu_class' => 'nav navbar-nav', 'theme_location' => 'primary', 'container_class' => 'collapse navbar-collapse' , 'container_id' => 'apa_collapse');
      wp_nav_menu( $args );
    ?>
    </div>
  </nav>

  <script>
    $(document).ready(function(){

      $( ".navbar-toggle" ).on( "click", function() {
        if($(this).hasClass("collapsed")){
          $("iframe").css("visibility", "hidden");
        }else{
          $("iframe").css("visibility", "visible");
        }
      });

      var startY = $('.pre-header').position().top + $('.pre-header').outerHeight();
 
      $(window).scroll(function(){
        checkY();
      });

      function checkY(){
          if( $(window).scrollTop() > startY ){
             $('.navbar-default').addClass("fixed-sidebar");
          }else{
            $('.navbar-default').removeClass("fixed-sidebar");
          }
      }
      // Do this on load just in case the user starts half way down the page
      checkY();
    });
  </script>


<?php } 

function contact_form(){
error_reporting(E_ALL ^ E_NOTICE); // hide all basic notices from PHP
  
  //If the form is submitted
  if(isset($_POST['form-contact'])) {

    $name_p = $_POST['name_p'];

    $mail_p = $_POST['mail_p'];

    $city = trim($_POST['city']);

    $prod = trim($_POST['prod']);

    $mensaje = trim($_POST['mensaje']);

      $emailTo = get_option( 'admin_email' );
      $subject = '[PROYECTO APASIONADOS] Contact from '.$name ;
      $message = '<html><body><br />';
      $message .= '<table border="0" cellpadding="10" width="600px">';
      $message .= '<tr style="'.$tr_style.'"><td>Data:</td></tr>';
      $message .= '<tr style="'.$tr_style.'"><td>Nombre: '.$name_p.'</td></tr>';
      $message .= '<tr style="'.$tr_style.'"><td>Email: '.$mail_p.'</td></tr>';
      $message .= '<tr style="'.$tr_style.'"><td>Profesion: '.$prod.'</td></tr>';
      $message .= '<tr style="'.$tr_style.'"><td>Mensaje: '.$mensaje.'</td></tr>';
      $message .= '<tr style="'.$tr_style.'"><td>Ciudad: '.$city.'</td></tr>';
      $message .= '<tr style="'.$tr_style.'"><td></td></tr>';
      $message .= '</table>';
      $message .= '</body></html>';

      $headers = 'From: PROYECTO APASIONADOS' .' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $emailTo;
      
      add_filter('wp_mail_content_type',create_function('', 'return "text/html"; '));
      
       wp_mail( $emailTo, $subject, $message, $headers);

      // if ( $lang === 'contact' ) {
      // auto_respond_english($name, $email);
      //  }else{ //entonces es "contacto" -> un formulario en espanol
      // auto_respond_spanish($name, $email);
      //  }  

  }

} ?>