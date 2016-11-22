<section id="consection">
	<div id="contacto" class="col-xs-12 col-sm-10 col-md-10 col-lg-8 center contact">
		<h2>cuentanos sobre tí</h2>
		
		<form id="contact" action="#" method="post" role="form">
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				<div class="form-group">
				    <label for="nombre">Nombre</label>
				    <input type="text" class="form-control required nombre" id="name"  name="name_p"  placeholder="">
				  </div>
				 <div class="form-group">
				    <label for="mail">Email</label>
				    <input type="email" class="form-control required" id="mail" name="mail_p" placeholder="">
				  </div>
				  <div class="form-group">
				    <label for="city">Ciudad</label>
				    <input type="text" class="form-control required city" id="city" name="city" placeholder="">
				  </div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				<div class="form-group">
				    <label for="prof">Profesión</label>
				    <input type="text" class="form-control required prof" id="prof" name="prod" placeholder="">
				  </div>
				<div class="form-group large-form">
				    <label for="mensaje">Comentario</label>
				    <textarea type="text" class="form-control required" id="mensaje" name="mensaje" placeholder=""></textarea>
				  </div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 buton-container">
				 <button type="submit" id="sendb" class="btn btn-default">enviar</button>
				 <input type="hidden" name="form-contact" id="form-contact" value="true" />
			</div>
		</form>
	</div>
</section>

<script>
    jQuery(document).ready(function($){

      $('form').submit(function() {
        var hasError = false;

        $(this).find(".required").each(function() {

          if(!$(this).val()) {
            $(this).addClass("form-error");
            hasError = true;
          }else if($(this).hasClass('nombre')) {
          var nombreReg = /^[á-úa-zA-Z\s]{2,30}$/;
          if(!nombreReg.test($.trim($(this).val()))) {
           $(this).addClass("form-error");
            hasError = true;
            }else{
              $(this).removeClass('form-error');
            }
          }else{
            $(this).removeClass('form-error');
          }
        });
    

        if (hasError) {
         return false;
        }else{
          var bu = $('form').find("#sendb");
          $(bu).attr("disabled", true);

	       var formInput = $(this).serialize();
			$.post($(this).attr('action'),formInput, function(data){
				$('form').slideUp("fast", function() {				   
					$(this).before('<b style="padding-top:1%; display: block; text-align: center; font-family: \'Architects Daughter\', cursive; color: #2a2a2a;">¡Gracias por escribirnos! Pronto te responderemos</b>');
				});
			});

	         return false;
        }

      });
      
    });
  </script>
