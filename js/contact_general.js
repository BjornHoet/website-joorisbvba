/*
  Jquery Validation using jqBootstrapValidation
   example is taken from jqBootstrapValidation docs 
  */
$(function() {

    $("#contactGeneral input,#contactGeneral textarea").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // something to have when submit produces an error ?
            // Not decided if I need it yet
        },
        submitSuccess: function($form, event) {
            event.preventDefault(); // prevent default submit behaviour
            // get values from FORM
            $.ajax({
                url: "../bin/contact_general.php",
                type: "POST",
                data: $('form').serialize(),
                cache: false,
                success: function(data) {
                    // Success message
                    $('#success').html("<div class='alert alert-success'>");
                    $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-success')
                        .append("<strong>Je bericht is verzonden. We nemen zo spoedig mogelijk contact met je op</strong>");
                    $('#success > .alert-success')
                        .append('</div>');

                    //clear all fields
                    $('#contactGeneral').trigger("reset");
                },
                error: function(data) {
					console.log(data);
                    // Fail message
                    $('#success').html("<div class='alert alert-danger'>");
                    $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-danger').append("<strong>Sorry, er is iets misgegaan tijdens het versturen van je bericht...</strong> Is het mogelijk om een e-mail te versturen naar <a href='mailto:joorisbvba@gmail.com?Subject=Contact vanaf de website'>joorisbvba@gmail.com</a>? Excuses voor het ongemak!");
                    $('#success > .alert-danger').append('</div>');
                    //clear all fields
                    $('#contactGeneral').trigger("reset");
                },
            })
        },
        filter: function() {
            return $(this).is(":visible");
        },
    });

    $("a[data-toggle=\"tab\"]").click(function(e) {
        e.preventDefault();
        $(this).tab("show");
    });
	
	$("input[class='checkboxAndere']").change(function() {
		if(this.checked) {
			$(this).parent().parent().find('.form-control').prop('disabled', false);
		}
		else {
			$(this).parent().parent().find('.form-control').prop('disabled', true);
			$(this).parent().parent().find('.form-control').val('');
		}
	});
});


/*When clicking on Full hide fail/success boxes */
$('#name').focus(function() {
    $('#success').html('');
});
