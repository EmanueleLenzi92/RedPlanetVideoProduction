$(document).ready(function() {
		
		$(document).on('click', '.elimin', function() {
			
			var radiobutton= $('input[name="radioname"]:checked').val();
			var id= $(this).attr('id');

			
		
			$.ajax({  
				type: "GET",
				url: "../php/phpAdm/deleteVideo.php", 
				dataType: "JSON",					
				data: {idVid: id, selectedradio: radiobutton},
				success: function(resp) { 
					

					
				},
				error: function (jqXHR, textStatus, errorThrown) {

                            var message = errorThrown;

                            if (jqXHR.responseText !== null && jqXHR.responseText !== 'undefined' && jqXHR.responseText !== '') {
                                message = jqXHR.responseText;
                            }

                            alert(message);
                    }
			});  
			
		});
		
	});