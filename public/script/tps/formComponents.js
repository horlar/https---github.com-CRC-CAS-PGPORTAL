"use strict";

// Class Definition
var KTSample = function() {
    
    // basic
    $('.kt_select2_1').select2({
        placeholder: 'Select a state',
        width: '100%'
    });

    //Multiple
    $('.kt_select2_3').select2({
        placeholder: 'Select a state',
        width: '100%'
    });

    var _handleSampleForm = function() {
        var validation;

        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        validation = FormValidation.formValidation(
			KTUtil.getById('sample_form_name'),
			{
				fields: {
					lastname: { validators: {  notEmpty: { message: 'Lastname is required'} } },
                    firstname: { validators: { notEmpty: { message: 'Firstname is required' } } },
					address: { validators: { notEmpty: { message: 'Address is required' } } },
                    email: {
						validators: {notEmpty: {message: 'Email is required'},
							emailAddress: {message: 'The value is not a valid email address'}
						}
					},
                    phonenumber: {validators: {notEmpty: {message: 'NG phone number is required'},
							phone: {country: 'NG',message: 'The value is not a valid Nigeria phone number'}
						}
					},
                    checkbox: {validators: {choice: {min:1,message: 'Please kindly check this'}}},
                    checkboxes: {validators: {choice: 
                        { min:2,max:5,	message: 'Please check at least 1 and maximum 2 options'}}
					},

					radios: {validators: {choice: {	min:1,message:'Please kindly check this'}}},
                    selectCountry: { validators: { notEmpty: { message: 'Select Country' } } },
                    sampledate: { validators: { notEmpty: { message: 'Select Date' } } },
				},
				plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    submitButton: new FormValidation.plugins.SubmitButton(),
                    //defaultSubmit: new FormValidation.plugins.DefaultSubmit(), // Uncomment this line to enable normal button submit after form validation
					bootstrap: new FormValidation.plugins.Bootstrap()
				}
			}
		);

        $('#sample_button_id').on('click', function (e) {
            e.preventDefault();

            validation.validate().then(function(status) {
		        if (status == 'Valid') {
                    swal.fire({
		                text: "All is cool! Now you submit this form",
		                icon: "success",
		                buttonsStyling: false,
		                confirmButtonText: "Ok, got it!",
                        customClass: {
    						confirmButton: "btn font-weight-bold btn-light-primary"
    					}
		            }).then(function() {
						KTUtil.scrollTop();
					});
				} else {
					swal.fire({
		                text: "Sorry, looks like there are some errors detected, please try again.",
		                icon: "error",
		                buttonsStyling: false,
		                confirmButtonText: "Ok, got it!",
                        customClass: {
    						confirmButton: "btn font-weight-bold btn-light-primary"
    					}
		            }).then(function() {
						KTUtil.scrollTop();
					});
				}
		    });
        });
    }
    // Public Functions
    return {
        // public functions
        init: function() {
            _handleSampleForm();
        }
    };
}();

// Class Initialization
jQuery(document).ready(function() {
    KTSample.init();
});
