$(document).ready(function (){

	$("#MenuChiSiamo").click(function() {
		var offset = -60; //Offset of 60px
		/* $('#liContatti').removeClass("active");
		$("#liVideo").removeClass("active");
		$('#liCosaFacc').removeClass('active')
		
		$('#liChiSiamo').addClass('active'); */
		
		$([document.documentElement, document.body]).animate({
			scrollTop: $("#chiSiamo").offset().top + offset
		}, 2000);
	});
	
	$("#MenuVideo").click(function() {
		var offset = -60; //Offset of 60px
		/* $('#liChiSiamo').removeClass('active');
		$('#liContatti').removeClass("active");
		$('#liCosaFacc').removeClass('active')
		
		$('#liVideo').addClass('active'); */
		
		$([document.documentElement, document.body]).animate({
			scrollTop: $("#nostriVideo").offset().top + offset
		}, 2000);
	});

	$("#MenuContatti").click(function() {
		var offset = -60; //Offset of 60px
		/* $('#liChiSiamo').removeClass('active');
		$('#liVideo').removeClass('active');
		$('#liCosaFacc').removeClass('active')
		
		$('#liContatti').addClass('active'); */
		
		$([document.documentElement, document.body]).animate({
			scrollTop: $("#contatti").offset().top + offset
		}, 2000);
	});
	
	$("#MenuCosaFacc").click(function() {
		var offset = -60; //Offset of 60px
		/* $('#liChiSiamo').removeClass('active');
		$('#liVideo').removeClass('active');
		$('#liContatti').removeClass("active");
		
		$('#liCosaFacc').addClass('active'); */
		
		$([document.documentElement, document.body]).animate({
			scrollTop: $("#cosaFacciamo").offset().top + offset
		}, 2000);
	});
	
	// Buttons
	$("#scopriDiPiu").click(function() {
		var offset = -60; //Offset of 60px
		/* $('#liContatti').removeClass("active");
		$("#liVideo").removeClass("active");
		$('#liCosaFacc').removeClass('active')
		
		
		$('#liChiSiamo').addClass('active'); */
		
		$([document.documentElement, document.body]).animate({
			scrollTop: $("#chiSiamo").offset().top + offset
		}, 2000);
	});
	

});