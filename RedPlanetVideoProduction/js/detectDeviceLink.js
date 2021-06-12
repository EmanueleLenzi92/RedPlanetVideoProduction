$(document).ready(function (){
	
	// se è android
	if((/Mobi|Android/i.test(navigator.userAgent))){
        // window.location.href = 'android url ';
		$("#fbLink").attr("href", "fb://page/238633212966482") 
		$("#instLink").attr("href", "instagram://user?username=red_planet_video")
		
		$("#fbFooterLink").attr("href", "fb://page/238633212966482") 
		$("#instFooterLink").attr("href", "instagram://user?username=red_planet_video")
    } 
	// se è IOS
	else if(/Mobi|iPad|iPhone|iPod/i.test(navigator.userAgent)){
        // window.location.href = 'ios url ';
		$("#fbLink").attr("href", "fb://profile/238633212966482")
		$("#instLink").attr("href", "instagram://user?username=red_planet_video")

		$("#fbFooterLink").attr("href", "fb://profile/238633212966482") 
		$("#instFooterLink").attr("href", "instagram://user?username=red_planet_video")		
    } 
	// se è qualsiasi altro
	else { 
	$("#fbLink").attr("href", "https://it-it.facebook.com/RedPlanetProduction") 
	$("#instLink").attr("href", "http://instagram.com/_u/red_planet_video")	
	
	$("#fbFooterLink").attr("href", "https://it-it.facebook.com/RedPlanetProduction") 
	$("#instFooterLink").attr("href", "http://instagram.com/_u/red_planet_video")	
	
	
	}


});