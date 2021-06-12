	$(document).ready(function() {
		
		// submit (e NON click) sul form con id #form (creato uno da un file PHP e un altro da un JS) e 'e.preventDefault()' per applicare i required HTML anche con AJAX
		$(document).on('submit', '#form', function(e) {
			e.preventDefault();
			
			
			// creo formData e ci attacco i dati da passare al PHP. Incremento sempre i di 1 per avere piu titoli, piu video ecc.
			var i=0;
			var formData = new FormData();
			
			$(".colRes").each(function() {
				

				//Se esistono nella pagina, appendo gli elementi al formData.
				//Altrimenti appendo al formData stringhe vuote
				
				//id
				if ( $('.idHidd').val() != undefined ){
					var id= $(this).find($('.idHidd')).val();
					formData.append('id' + i, id);
				} else {
					var id="";
					formData.append('id' + i, id);
				}
				
				//tipo pagina
				if( $('input[name="radionameNuovoVid"]:checked').val() != undefined ) {
					var radiobutton= $('input[name="radionameNuovoVid"]:checked').val();
					formData.append('radio' + i, radiobutton);
				} else if ( $('input[name="radioname"]:checked').val() != undefined ) {
						var radiobutton= $('input[name="radioname"]:checked').val()
						formData.append('radio' + i, radiobutton);
					} else {
						var radiobutton= "";
						formData.append('radio' + i, radiobutton);
					}
				
				//titolo
				if ( $('.inputTitle').val() != undefined ){
					var title= $(this).find($('.inputTitle')).val();
					formData.append('title' + i, title);
				} else {
					var title= "";
					formData.append('title' + i, title);
				}
				
				//video
				if ( $('#inputVideo')[0] != undefined ){
					var video= $('#inputVideo')[0].files[0]
					formData.append('video' + i, video);
				} else {
					var video="";
					formData.append('video' + i, video);
				}
				
				//immagine
				if ( $('#inputImg')[0] != undefined ){
					var img = $('#inputImg')[0].files[0];
					formData.append('imageFile' + i, img)
				} else {
					var img ="";
					formData.append('imageFile' + i, img);
				}
				
				//posizione
				if ( $('.inputPosizione').val() != undefined ){
					var posizione= $(this).find($('.inputPosizione')).val();
					formData.append('posizione' + i, posizione)
				} else {
					var posizione= "";
					formData.append('posizione' + i, posizione);
				}
				
				//in Home?
				if ( $("#inHome") != undefined ){
					var checked;
					if($("#inHome").is(':checked')){
						checked= 1
					} else checked=0
					if(($("#inHome").is(':checked')) && ($('input[name="radionameNuovoVid"]:checked').val() == 'radhome')){
						checked=0
					}
					formData.append('inHome' + i, checked); 
				}
				
				// incremento i e ciclo un altro nodo HTML
				i++
				
			});
			
			///////////////////////////////////////////////////////////
			//per visualizzare il formData con querystring nella console
			/* const queryString = new URLSearchParams(formData).toString()
			console.log(queryString) 
			
			for(var pair of formData.entries()) {
				console.log(pair[0]+ ', '+ pair[1]); 
			} */
			
			//display loading
			$("#loadingContainer").css('display','block');
		
			$.ajax({  
				type: "POST",
				url: "../php/phpAdm/ApiDB.php", 
				dataType: "JSON",	
				processData: false,
				contentType: false,
				cache: false,
				data: /*formData*/ formData,
				success: function(resp) { 
				
					$("#loadingContainer").css('display','none');
					var msg= resp.html
					
					$("#msgOk").append('<p class="text-success">' + msg + "; <u>Attendi 5 secondi</u> </p>");
					$("#msgOk").css('display','block');
					setTimeout(
					  function() 
					  {
						window.location.href = "https://redplanetvideo.it/Admin/admin.php";
					  }, 5000);
					
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