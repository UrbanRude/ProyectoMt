$('#nick').change(function(){
		$.post('ajax_validacion_nick.php',{
			nick:$('#nick').val(),
			beforeSend: function(){
				$('.validacion').html("Espere un momento por favor..");
			}
		},function(respuesta){
				$('.validacion').html(respuesta);
			}
		);
	});

	$('#btnGuardar').hide();

	$('#pass2').change(function(event){
		if ($('#pass1').val() == $('#pass2').val()) {
			swal('Bien echo ..','Los password considen','success');
			$('#btnGuardar').show();
		}else{
			$('#btnGuardar').hide();			
			swal('Opps..','Los password no considen','error');
		}
	});

	$('.form').keypress(function(e){
		if(e.which == 13){
			return false;
		}
	});