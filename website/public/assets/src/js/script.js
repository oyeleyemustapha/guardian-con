$(document).ready(function() {


    if ($('.uploader').length > 0) {
        $('.uploader').filepond({
            allowMultiple: true,
            credits: false
        });
    }


    //GENDER SELECTOR
    $('.gender-selector button.choice').click(function() {
        $('.gender-selector button.choice').removeClass('picked');
        $(this).addClass('picked');
        $('#gender').val($(this).text())
    });


    $('.booking-type-selector button.choice').click(function() {
        $('.booking-type-selector button.choice').removeClass('picked');
        $(this).addClass('picked');
        $('#booking_type').val($(this).text())
    });


    // Hide all steps except the first one
    $('.stages-container').not('#step-1').hide();

    let currentStep = 1;
    const totalSteps = $('.stages-container').length;

    // Handle "Proceed" button clicks
    $('.forward-btn').on('click', function(e) {
        e.preventDefault();

        // Get the current step's container
        const currentStepContainer = $('#step-' + currentStep);

        // Validate the required inputs in the current step
        if (validateStep(currentStepContainer)) {
            // If validation passes, proceed to the next step
            if (currentStep < totalSteps) {
                currentStepContainer.hide();
                currentStep++;
                const nextStepContainer = $('#step-' + currentStep);
                nextStepContainer.show();

            }
        }
    });

    // Handle "Back" button clicks
    $('.back-btn').on('click', function(e) {
        e.preventDefault();
        if (currentStep > 1) {
            $('#step-' + currentStep).hide();
            currentStep--;
            $('#step-' + currentStep).show();
        }
    });


    function validateStep(stepContainer) {
        let isValid = true;
        stepContainer.find('input, select, textarea').removeClass('invalid-input');

        stepContainer.find('input[required], select[required], textarea[required]').each(function() {
            if ($(this).val().trim() === '') {
                isValid = false;
                $(this).addClass('invalid-input');
                $.toast({
                    heading: 'Form Error',
                    text: 'Fill all required input to proceed',
                    icon: 'warning',
                    loader: true,
                    position: 'top-left',
                    stack: false,
                    loaderBg: '#9EC600'
                })
            }
        });

        if (stepContainer.find('input[name=proof]').length > 0) {
            if ($('.filepond--root').val().trim() === '') {
                isValid = false;
                $('input[name=proof]').addClass('invalid-input');
                $.toast({
                    heading: 'Form Error',
                    text: 'Please upload Proof of name change',
                    icon: 'warning',
                    loader: true,
                    position: 'top-left',
                    loaderBg: '#9EC600'
                })
            }
        }

        if (stepContainer.find('#confirm_new_name, #new_name').length > 0) {
            if ($('#new_name').val() !== $('#confirm_new_name').val()) {
                isValid = false;
                $('#confirm_new_name, #new_name').addClass('invalid-input');
                $.toast({
                    heading: 'Form Error',
                    text: 'New Full Name does not match Confirm New Name',
                    icon: 'info',
                    loader: true,
                    position: 'top-left',
                    stack: false,
                    loaderBg: '#9EC600'
                })
            }
        }

        stepContainer.find('.form-group').each(function() {
            const radioGroup = $(this).find('input[type="radio"][required]');
            if (radioGroup.length > 0) {
                const groupName = radioGroup.first().attr('name');
                if ($('input[name="' + groupName + '"]:checked').length === 0) {
                    isValid = false;
                    $(this).find('p').addClass('invalid-input');
                } else {
                    $(this).find('p').removeClass('invalid-input');
                }
            }
        });

        stepContainer.find('input[type="hidden"][required]').each(function() {
            if ($(this).val().trim() === '') {
                isValid = false;
                $(this).prev('.gender-selector, .booking-type-selector').addClass('invalid-input');
            } else {
                $(this).prev('.gender-selector, .booking-type-selector').removeClass('invalid-input');
            }
        });

        return isValid;
    }
    $('head').append('<style>.invalid-input { border: 1px solid red !important; }</style>');
    $('head').append('<style>.choice.selected { background-color: #007bff; color: white; }</style>');

    $('.progress-container').each(function() {
        const progressFill = $(this).find('.progress-fill');
        const progressText = $(this).find('.progress-text');
        const percentage = Number($(this).attr('data-value'));
        const radius = 45;
        const circumference = 2 * Math.PI * radius;
        progressFill.css({
            strokeDasharray: circumference,
            strokeDashoffset: circumference,
            transition: 'stroke-dashoffset 1s ease'
        });
        const clampedPercentage = Math.min(Math.max(percentage, 0), 100);
        const offset = circumference - (clampedPercentage / 100) * circumference;
        progressFill.css('strokeDashoffset', offset);
        progressText.text(`${clampedPercentage}%`);
    });

    $('.contactBtn').attr('disabled', true)

    $('#contactForm').submit(function(e) {
        e.preventDefault();
        $.ajax({
                method: 'POST',
                url: 'contact',
                dataType: 'json',
                data: $(this).serialize(),
                beforeSend: function() {
                    
                    $('.contactBtn').attr('disabled', true).text('Processing your request...');
                },
                complete: function() {
                    $('.contactBtn').attr('disabled', false).text('SEND MESSAGE')
                }
            })
            .done(function(res) {

                $('#contactForm')[0].reset();
                $.toast({
                    heading: res.heading,
                    text: res.data,
                    icon: 'success',
                    loader: true,
                    position: 'top-left',
                    stack: false,
                    loaderBg: '#9EC600'
                });
            })
            .fail(function(xhr, textStatus, error) {
                $.toast({
                    heading: xhr.responseJSON.heading,
                    text: xhr.responseJSON.data,
                    icon: 'warning',
                    loader: true,
                    position: 'top-left',
                    stack: false,
                    loaderBg: '#9EC600'
                });
            })
    })
})