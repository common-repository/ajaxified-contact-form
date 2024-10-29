jQuery(document).ready(function(){

	var form = jQuery("#ajax-contact");

	var message = jQuery("#form-messages");

	jQuery(form).submit(function(event){
		event.preventDefault();

		var formData =jQuery(form).serialize();

		jQuery.ajax({
			type: 'POST',
			url: jQuery(form).attr('action'),
			data: formData
		}).done(function(responce){
			jQuery(message).removeClass('error');
			jQuery(message).addClass('success');

			jQuery(message).text(responce);

			jQuery('#name').val('');
			jQuery('#email').val('');
			jQuery('#message').val('');
		})fail(function(data){
			jQuery(message).removeClass('success');
			jQuery(message).addClass('error');

			if (data.responceText !== '') {
				jQuery(message).text(data.responceText);
			} else {
				jQuery(message).text('An error occured while submitting form');
			}			
		})
	});


});