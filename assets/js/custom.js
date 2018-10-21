var messageRequred = 'Champs requis'

$("#contact").validate(
{
	errorClass: "error-class",
	
	rules:
	{
		name:
		{
			required: true
		},
		
		email:
		{
			required: true,
			email: true
		},
		
		message:
		{
			required: true
		}
	},
	
	messages:
	{
		name:
		{
			required: messageRequred
		},
		
		email:
		{
			required: messageRequred,
			email: 'Format invalide'
		},
		
		message:
		{
			required: messageRequred
		}
	},
	
	// True handler
	submitHandler: function(form)
	{
		var data = $("form#contact").serializeArray();

		// AJAX
		$.ajax(
		{
			url: '/sendmail.php',
			type: "POST",
			cache: false,
			data: data,
			timeout: 10000,
			beforeSend: function()
			{
				// Disable submit button (avoid flooding)
				$('button[type="submit"]').prop('disabled', true);
				
				// Show spining wheel
				$("#submitSpin").show();
				
				// Message
				$('#invalidHandler').empty();
			}
		})
		
		.done(function(response)
		{
			alert('Merci, votre message a bien été envoyé.');
			console.log(response)
		})
		
		.fail(function(jqXHR, textStatus, errorThrown)
		{
			alert('Un problème est survenu pendant l\'envoi de votre message. Veuillez réessayer ou nous contacter directement à info@lmmanutentions.com.');
		})
		
		.always(function()
		{
			// Re-enable beforeSend submit button (avoid flooding)
			$('button[type="submit"]').prop('disabled', false);
				
			// Hide spining wheel
			$("#submitSpin").hide();
		});
	},
		
	// False handler
	invalidHandler: function (form)
	{
		// Message
		$('#invalidHandler').html('<div class="alert alert-danger">Veuillez vérifier les champs requis</div>');
	}
});