var messageRequred = 'Champs requis'

$("#quote").validate(
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
                    },
                tel:
                    {
                        required: true
                    },
                company:
                    {
                        required: true
                    },
                address:
                    {
                        required: true
                    },
                city:
                    {
                        required: true
                    },
                province:
                    {
                        required: true
                    },
                postal:
                    {
                        required: true
                    },
                industry:
                    {
                        required: true
                    },
                promate:
                    {
                        required: true
                    },


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
                    },
                tel:
                    {
                        required: messageRequred
                    },
                company:
                    {
                        required: messageRequred
                    },
                address:
                    {
                        required: messageRequred
                    },
                city:
                    {
                        required: messageRequred
                    },
                province:
                    {
                        required: messageRequred
                    },
                postal:
                    {
                        required: messageRequred
                    },
                industry:
                    {
                        required: messageRequred
                    },
                promate:
                    {
                        required: messageRequred
                    }
            },

        // True handler
        submitHandler: function(form)
        {
            var data = $("form#quote").serializeArray();
            // console.log(data)
            data.push({name:"action", value:1});

            /* For testing
            data.push({name:"debug", value:1})
            data.push({name:"email_tester", value:'yhagino@cyberpublicity.com'})
            */

            // AJAX
            $.ajax(
                {
                    url: '/sendquote.php',
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

                .done(function(data, textStatus, jqXHR)
                {
                    alert('Merci, votre message a bien été envoyé.');
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