$('#datetimepicker1')
	.on('changeDate', function(e) {
	// Revalidate the start date field
	$('#valForm').bootstrapValidator('revalidateField', 'start_date');
	});
$('#datetimepicker2')
	.on('changeDate', function(e) {
	// Revalidate the start date field
	$('#valForm').bootstrapValidator('revalidateField', 'end_date');
	});
$('#valForm')
.bootstrapValidator({
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
		 start_date: {
		 	validators: {
		 		notEmpty: {
					 message: 'La fecha de inicio es requerida y no puede ser vacia'
				 },
				 date: {
				 	max: 'end_date',
				 	 format: 'YYYY/MM/DD',
					 message: 'La fecha de inicio no es valida'
				 }
		 	}
		 },
		 end_date: {
		 	validators: {
				 date: {
				 	min: 'start_date',
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
})
.on('success.field.fv', function(e, data) {
// The success.field.fv is triggered when a field is valid
// data.field ---> the field name
// data.fv    ---> the plugin instance which you can call some APIs on

if (data.field === 'start_date' && !data.fv.isValidField('end_date')) {
    // We need to revalidate the end date
    data.fv.revalidateField('end_date');
}
if (data.field === 'end_date' && !data.fv.isValidField('start_date')) {
	// We need to revalidate the start date
	data.fv.revalidateField('start_date');
}
// Do the same check for the end date
// ...
});