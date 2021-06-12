	$(document).ready(function() {
		
		$(document).on('click', 'input[name="radionameNuovoVid"]', function() {
				
				//costruisce la stringa html col form per aggiungere un nuovo video. Il bottone è submit, e non button per gestire i required HTML
				var html= '<form id="form" enctype="multipart/form-data"> <div class="row text-center mt-4">' +
					'<div class="col-xl-3 col-md-3 mb-2 ml-auto mr-auto bg-light px-4 py-4 colRes">' +
						'<label for="inputTitle">Titolo</label> </br>' +
						'<input class="inputTitle" id="titleID" type="text" value="" required /> </br></br>' +
						'<label for="inputimg">Immagine</label>' +
						'<input type="file" name="immagine" id="inputImg" required /> </br></br>' +
						'<label for="inputVideo">Video</label>' +
						'<input type="file" id="inputVideo" required /> </br></br>' +
						'<input type="checkbox" id="inHome" name="inHome" value="1">' +
						'<label for="inHome">Video in HOME</label><br>' +
					'</div>' + 
				'</div>' +
				'<div class="row text-center pt-4"> <div class="col"> <input type="submit" id="buttonaddVideo" value="AGGIUNGI"> </div> </div></form>';
						
		$('#ajaxResMod').empty()
		$('input[name="radioname"]').prop('checked', false);
		$('#ajaxResMod').append(html)
		});
		   
	});