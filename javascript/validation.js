
$(document).ready(function(){
	// Fields that must be filled.
	must_fill = ["name", "email", "message"];
	email = $("#email");
	error_message = $(".error");
	// Error messages
	input_empty = "Please fill out this field.";
	email_error = "Please enter a valid e-mail.";

	$("#contactForm").submit(function(){	
		//Validate must_fill fields
		for (i=0;i<must_fill.length;i++) {
			var input = $('#'+must_fill[i]);
			if ((input.val() == "") || (input.val() == input_empty)) {
				input.addClass("incomplete");
				input.val(input_empty);
				error_message.fadeIn(750);
			} else {
				input.removeClass("incomplete");
			}
		}
		// Validate the e-mail.
		if (!/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(email.val())) {
			email.addClass("incomplete");
			email.val(email_error);
		}

		//'Incomplete' fields should not be submitted
		if ($(":input").hasClass("incomplete")) {
			return false;
		} else {
			error_message.hide();
			return true;
		}
	});
	
	// Clears any fields in the form when the user clicks on them
	$(":input").focus(function(){		
	   if ($(this).hasClass("incomplete") ) {
			$(this).val("");
			$(this).removeClass("incomplete");
	   }
	});
});	