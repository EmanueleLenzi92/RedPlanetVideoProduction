	$(document).ready(function() {
		
		$(document).on('click', 'input[name="radioname"]', function() {
			
			var radiobutton= $('input[name="radioname"]:checked').val();
		
			$.ajax({  
				type: "GET",
				url: "../php/phpAdm/sqlGetVideoModif.php", 
				dataType: "JSON",					
				data: {selectedradio: radiobutton},
				success: function(resp) { 
					
					$('#ajaxResMod').empty()
					$('input[name="radionameNuovoVid"]').prop('checked', false);
					$('#ajaxResMod').append(resp.html)
					
				},
				error: function (jqXHR, textStatus, errorThrown) {
                            /*
                             * When an HTTP error occurs, errorThrown receives the textual portion of
                             * the HTTP status, such as "Not Found" or "Internal Server Error". This
                             * portion of the HTTP status is also called "reason phrase".
                             */
                            var message = errorThrown;

                            /*
                             * If a response text exists, then set it as message,
                             * instead of the textual portion of the HTTP status.
                             */
                            if (jqXHR.responseText !== null && jqXHR.responseText !== 'undefined' && jqXHR.responseText !== '') {
                                message = jqXHR.responseText;
                            }

                            alert(message);
                    }
			}); 
			
		});
		
	});