$('#valForm').bootstrapValidator({
	 message: 'Este valor no es valido',
	 feedbackIcons: {
		 valid: 'glyphicon glyphicon-ok',
		 invalid: 'glyphicon glyphicon-remove',
		 validating: 'glyphicon glyphicon-refresh'
	 },
	 fields: {
	 	message: {
	 		validators: {
				 notEmpty: {
					 message: 'El mensaje no puede estar vacío'
				 }
			}
	 	},
		 username: {
			 validators: {
				 notEmpty: {
					 message: 'El nombre de usuario es requerido'
				 },
				 stringLength: {
					 min: 4,
					 message: 'El nombre de usuario debe contener al menos 4 caracteres'
				 }
			 }
		 },
		 fullname: {
			 validators: {
				 notEmpty: {
					 message: 'Los nombres y apellidos son requeridos'
				 }
			 }
		 },
		 email: {
			 validators: {
				 notEmpty: {
					 message: 'El correo es requerido y no puede ser vacio'
				 },
				 emailAddress: {
					 message: 'El correo electronico no es valido'
				 }
			 }
		 },
		 password: {
			 validators: {
				 notEmpty: {
					 message: 'La contraseña es requerida'
				 },
				 stringLength: {
					 min: 6,
					 message: 'La contraseña debe contener al menos 6 caracteres'
				 },
				 different: {
                    field: 'username',
                    message: 'El nombre de usuario y la contraseña no pueden ser el mismo'
                }
			 }
		 },
		 password_confirmation: {
		 	validators: {
		 		identical: {
		 			field: 'password',
		 			message: 'Las contraseñas no coinciden'
		 		}
		 	}
		 },
		 phone: {
		 	message: 'El teléfono no es valido',
			 validators: {
				 regexp: {
					 regexp: /^[0-9]+$/,
					 message: 'El teléfono celular solo puede contener números'
				 }
			 }
		 },
		 name: {
			 validators: {
				 notEmpty: {
					 message: 'El nombre de la actividad es requerido'
				 }
			 }
		 },
		 date_publication: {
		 	validators: {
		 		notEmpty: {
					 message: 'La fecha de publicación es requerida y no puede ser vacia'
				 },
				 date: {
					 format: 'YYYY/MM/DD',
					 message: 'La fecha no es valida'
				 }
		 	}
		 },
		 start_date: {
		 	validators: {
		 		notEmpty: {
					 message: 'La fecha de inicio es requerida y no puede ser vacia'
				 },
				 date: {
					 format: 'YYYY/MM/DD',
					 message: 'La fecha de inicio no es valida'
				 }
		 	}
		 },
		 end_date: {
		 	validators: {
				 date: {
					 format: 'YYYY/MM/DD',
					 message:  'La fecha de finalización no es valida'
				 }
		 	}
		 },
		 url: {
		 	validators: {
		 		notEmpty: {
		 			message: 'La url es requerida'
		 		}, 	
		 		uri: {
		 			message: 'La url no es valida'
		 		}
		 	}
		 },
		 position: {
		 	validators: {
		 		notEmpty: {
		 			message: 'El cargo es un campo requerido'
		 		}
		 	}
		 }
	 }
});