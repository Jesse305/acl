$(document).ready(function(){

	var valida = $('#form').validate({
		rules: {
			cpf: {
				required: true,
				minlength: 14,
			},
			password: {
				required: true,
				minlength: 6
			}
		}
	});

	$('#form').on('submit', function(){
		if(valida.form()){
			$('#btn_entrar').attr('disabled', true);
			return true;
		}
		return false;
	});
});