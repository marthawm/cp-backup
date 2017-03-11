  $(document).ready(function() {
    $('#contact_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            first_name: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Please enter your first name'
                    }
                }
            },
             last_name: {
                validators: {
                     stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'Please enter your last name'
                    }
                }
            },
            ID: {
                validators: {
                    stringLength: {
                        min: 6,

                    },
                    notEmpty: {
                        message: 'Please supply your ID number'
                    },
                    ID: {
                        message: 'Please supply a valid ID number'
                    }
                }
            },
            phone: {
                validators: {
                    notEmpty: {
                        message: 'Please enter your phone number'
                    },
                    phone: {
                        country: 'KE',
                        message: 'Please enter a vaild phone number with area code'
                    }
                }
            },
            address: {
                validators: {
                     stringLength: {
                        min: 6,
                    },
                    notEmpty: {
                        message: 'Please enter your address'
                    }
                }
            },
            county: {
                validators: {
                     stringLength: {
                        min: 4,
                    },
                    notEmpty: {
                        message: 'Please select your county'
                    }
                }
            },
            constituency: {
                validators: {
                    notEmpty: {
                        message: 'Please select your constituency'
                    }
                }
            },
            scheme: {
                validators: {
                    notEmpty: {
                        message: 'Please enter your scheme no'
                    },
                    
                }
            },
            schemerefno: {
                validators: {
                    notEmpty: {
                        message: 'Please enter your scheme ref no '
                    },
                    
                }
            },
            substation: {
                validators: {
                    notEmpty: {
                        message: 'Please enter your substation'
                    },
                    
                }
            },
            
            }
        })
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#contact_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
});