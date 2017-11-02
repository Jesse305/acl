$('document').ready(function(){
	var valida = $('#form').validate({
		rules: {
			name: {
				required: true,
				minlength: 3
			},
			cpf: {
				required: true,
				minlength: 14
			},
			email: {
				required: true,
				email: true
			},
			password: {
				required: true,
				minlength: 6,
			},
			c_password: {
				required: true,
				equalTo: password
			},
		}
	});

	$('#form').on('submit', function(){
		if(valida.form()){
			$('#btn_salvar').attr('disabled', true);
			return true;
		}
		return false;
	});
});