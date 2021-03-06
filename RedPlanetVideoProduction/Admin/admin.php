<?php include('login/session.php'); ?>

<html>

<head>
	

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	
	<!-- ajax and others scripts -->
	<script src="../js/jsAdm/ajaxGetModifiedVideo.js"></script>
	<script src="../js/jsAdm/ajaxApiDB.js"></script>
	<script src="../js/jsAdm/GetNewVideo.js"></script>
	<script src="../js/jsAdm/ajaxDeleteVideo.js"></script>
	
	<script>
	// setta per forza "in home" se si clicca su "senza categoria"
	$(document).ready(function() {
		$(document).on('change', '#radionoCat', function() {
			$('#inHome').prop('checked', true); 
			$('#inHome').prop('required', true);			

		});
		

	})
	</script>
	
</head>

<body>
<!--<b id="welcome">Welcome : <i><?php //echo $login_session; ?></i></b>-->

<div class="container pt-4">
	
	<div class="row text-center mb-4">
		<div class="col">
			
			<div class="form-check form-check-inline">
				<label for="radioHome"><strong>Aggiungi video</strong> in: </label>
			</div>
				
				<span>
				<div class="form-check form-check-inline">
					<input name="radionameNuovoVid" value="radev" type="radio" id="radioEventi">
					<label for="radioEventi">Eventi</label>
				</div>
				<div class="form-check form-check-inline">
					<input name="radionameNuovoVid" value="radspot" type="radio" id="radioSpot">
					<label for="radioSpot">Spot</label>
				</div>
				<div class="form-check form-check-inline">
					<input name="radionameNuovoVid" value="radcor" type="radio" id="radioCorti">
					<label for="radioCorti">Corti</label>
				</div>
				<div class="form-check form-check-inline">
					<input name="radionameNuovoVid" value="radspe" type="radio" id="radioSpettac">
					<label for="radioSpettac">Spettacoli</label>
				</div>
				<div class="form-check form-check-inline">
					<input name="radionameNuovoVid" value="radclip" type="radio" id="radioClip">
					<label for="radioClip">Videoclip</label>
				</div>
				<div class="form-check form-check-inline">
					<input name="radionameNuovoVid" value="radpres" type="radio" id="radioPresentazione">
					<label for="radioPresentazione">VideoPresentazioni</label>
				</div>
				<div class="form-check form-check-inline">
					<input name="radionameNuovoVid" value="radhome" type="radio" id="radionoCat">
					<label for="radionoCat">Senza categoria</label>
				</div>
				</span>

		</div>
	</div>
	
	
	<div class="row text-center">
		<div class="col">
				<div class="form-check form-check-inline">
				<label for="radioHome"><strong>Modifica video</strong> in: </label>
				</div>
				
				<div class="form-check form-check-inline">
					<input name="radioname" value="radhome" type="radio" id="radioHome">
					<label for="radioHome">Home</label>
				</div>
				<div class="form-check form-check-inline">
					<input name="radioname" value="radev" type="radio" id="radioEventi">
					<label for="radioEventi">Eventi</label>
				</div>
				<div class="form-check form-check-inline">
					<input name="radioname" value="radspot" type="radio" id="radioSpot">
					<label for="radioSpot">Spot</label>
				</div>
				<div class="form-check form-check-inline">
					<input name="radioname" value="radcor" type="radio" id="radioCorto">
					<label for="radioCorto">Corti</label>
				</div>
				<div class="form-check form-check-inline">
					<input name="radioname" value="radspe" type="radio" id="radioSpettacolo">
					<label for="radioSpettacolo">Spettacoli</label>
				</div>
				<div class="form-check form-check-inline">
					<input name="radioname" value="radclip" type="radio" id="radioClip">
					<label for="radioClip">Videoclip</label>
				</div>
				<div class="form-check form-check-inline">
					<input name="radioname" value="radpres" type="radio" id="radioPresentazione">
					<label for="radioPresentazione">VideoPresentazioni</label>
				</div>
		</div>
	</div>
	
	<div class='text-center' id="loadingContainer" style="display: none"><img src="giphy.gif" id="loadGif"/> Loading ...</div>
	<div class='text-center' id="msgOk" style="display: none"></div>
	<div id="ajaxResMod"></div>
	
</div>

</body>

</html>
