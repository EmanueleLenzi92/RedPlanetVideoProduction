<?php include('php/conn.php'); ?>
<?php include('php/sqlGetVideoPrint.php'); ?>

<!doctype html>
<html>
<head>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Red Planet Video Production</title>
	<meta name="keywords" content="Video Videomaker Videoclip Cortometraggi Viareggio Lucca Pisano Versilia">
	<meta name="description" content="La Red Planet Video Production è un gruppo di videomaker specializzato nella creazione di contenuti video per il web e non solo che opera nel territorio della Versilia, nel Pisano, a Lucca e in tante altre realtà contribuendo alla comunicazione delle varie attività con cui collabora. Realiziamo video di eventi, spot, documentari, produzioni cinematografiche, videoclip.">
	
	
	
	
	<link rel="icon" href="img/planetIcon.png">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	<!-- style CSS -->
	<link rel="stylesheet" href="style.css">

	<!--my JS scripts-->
	<script src='js/menu.js'></script>
	<script src='js/scrollTo.js'></script>
	<script src='js/detectDeviceLink.js'></script>
	
	
	<!--Font awsome-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<!-- Responsive Video Slider CSS -->
	<link href="css/rvslider.min.css" rel="stylesheet">
	
	<!-- Material Design Bootstrap (contact) -->
    <link rel="stylesheet" href="css/mdb.css">
	
	<!-- Animate scroll -->
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	
	<!-- set Preloader time -->
	<script>
		// setTimeout(function() {
			// $(".se-pre-con").fadeOut("slow");
		// }, 3000);
		
		
    //after window is loaded completely 
		window.onload = function(){
        //hide the preloader
        //document.querySelector(".preloader").style.display = "none";
		$(".se-pre-con").fadeOut("slow");
    }

	</script>
	

	
	
</head>
<body>
	
	<!-- Preloader -->
	<div class="se-pre-con">
		<img id="planetPreloader" src="img/planetIcon.png">
		
	</div>

	<header>
		<div class="overlay"></div>
	  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
		<source src="video/videoIndex.mp4" type="video/mp4">
	  </video>
	  
	  
	<?php
		echo file_get_contents("html/menuIndex.html");
	?>
	  
	  
	  
	  
	  
	  <div class="container h-100">
		<div class="d-flex h-100 text-center align-items-center">
		  <div class="w-100 text-white">
			<h1 class="display-3">Make it true with a video</h1>
			<p class="lead mb-0">Realizziamo video professionali per ogni vostra esigenza</p>
			
			<div class="icons px-3 py-3"><a id="fbLink" href="" target="_blank"><i class="fa fa-facebook-f mr-2"></i></a> <a id="instLink" href="" target="_blank"><i class="fa fa-instagram"></i></a></div>
			<button type="button" class="btn btn-danger" id="scopriDiPiu">Scopri di più</button>
		 </div>
		</div>
	  </div>
	</header>

	<section class="py-5" id="chiSiamo">
	  <div class="container">
		<div class="row">
		  <div class="col-md-6 col-sm-12" data-aos="fade-right">
			<h2 class="h1-responsive font-weight-bold pb-3">Chi siamo</h2>
			<p>La Red Planet Video Production è un gruppo di videomaker specializzato nella creazione di contenuti video per il web e non solo che opera nel territorio della Versilia, nel Pisano, a Lucca e in tante altre realtà contribuendo alla comunicazione delle varie attività con cui collabora.</p>
			<p>Realizziamo video di eventi, spot, documentari, produzioni cinematografiche, videoclip. Viste le nostre esperienze nel campo multimediale, pensiamo che una copertura video possa valorizzare ogni tipo di attività, e conferirle un respiro più ampio, arrivando al pubblico in maniera più diretta.</p>
		  </div>
		  <div class="col-md-6 col-sm-12" data-aos="fade-up">
		  
		  
			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			  <div class="carousel-inner">
				<div class="carousel-item active">
				  <div class="shadowCarousel"> <img class="d-block w-100 " src="img/1.jpg" alt="First slide"> </div>
				</div>
				<div class="carousel-item">
				  <div class="shadowCarousel"> <img class="d-block w-100 " src="img/2.jpg" alt="Second slide"> </div>
				</div>
				<div class="carousel-item">
				  <div class="shadowCarousel"> <img class="d-block w-100 " src="img/3.jpg" alt="Third slide"> </div>
				</div>
				
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			  </a>
			</div>
			
		  </div>
		</div>
		
		<div class="row">
			<div class="col mt-3 text-center" data-aos="fade-up"> </br></br>
				<i class="display-4">&ldquo;La nostra creatività al vostro servizio&rdquo;</i>
			</div>
		</div>
	  
	  </div>
	</section>
	
	
	
<!-- 	<section class="my-5">
		
		<div class="parallax">
			<div class="container">
				<div class="row">
				<div class="col">
					<h3 class="display-2">Contattaci con un click</h3>
				</div>
				</div>
			</div>
		</div>
		
	</section> -->

	<section class="py-5" id="cosaFacciamo" data-aos="fade-right">
		<div class="container">	
			<div class="row">
				<div class="col">
				<h2 class="h1-responsive font-weight-bold ">Servizi</h2>
				
				</div>
			</div>
		</div>
		
		<div class="container pt-4">
		  <div class="row text-center">
				
					
					<div class="col-xl-4 col-md-6 mb-5">
					<div class="imgContainer"><a href="videopresentazioni.php"><img src="img/servizi/Michele Bertellotti - Smile Art.png" class="img-fluid rounded-circle" alt="..."></a></div>
					<a href="videopresentazioni.php"><p class="titoliServizi mt-3">Video Presentazioni</p></a>
					<p>Racconta la tua storia e quella della tua attività tramite un video personalizzato di 3/5 minuti, perfetto per i social, con il quale potrai presentarti in modo più diretto al pubblico</p>
					</div>
					
					<div class="col-xl-4 col-md-6 mb-5">
					<div class="imgContainer"><a href="eventi.php"><img src="img/servizi/nikki beavh.png" class="img-fluid" alt="servizio"></a></div>
					<a href="eventi.php"><p class="titoliServizi mt-3">Eventi</p></a>
					<p>Brevi video che riassumono in pochi secondi l'anima e i momenti principali dei tuoi eventi. Può essere adattato a qualsiasi situazione</p>
					</div>
					
					<div class="col-xl-4 col-md-6 mb-5">
					<div class="imgContainer"><a href="videoclip.php"><img src="img/servizi/NOAH - Noahvember Rain Final EXP.png" class="img-fluid" alt="servizio"></a></div>
					<a href="videoclip.php"><p class="titoliServizi mt-3">Videoclip</p></a>
					<p>Trasforma la tua musica in immagini attraverso un videoclip musicale. Possiamo aiutarti dalla fase creativa alla realizzazione</p>
					</div>
					
					<div class="col-xl-4 col-md-6 mb-5">
					<div class="imgContainer"><a href="spettacoli.php"><img src="img/servizi/savepla.png" class="img-fluid" alt="servizio"></a></div>
					<a href="spettacoli.php"><p class="titoliServizi mt-3">Spettacoli</p></a>
					<p>Rendi indelebile nella tua mente il ricordo del tuo spettacolo grazie ad un video integrale, ripreso anche da più punti di vista</p>
					</div>
					
					<div class="col-xl-4 col-md-6 mb-5">
					<div class="imgContainer"><a href="spot.php"><img src="img/servizi/Video Natale Italia gas e luce.png" class="img-fluid" alt="servizio"></a></div>
					<a href="spot.php"><p class="titoliServizi mt-3">Spot</p></a>
					<p>Racconta un tuo prodotto o la tua attività attraverso uno spot pubblicitario. Realizziamo ogni tipo di spot in base alle tue esigenze</p>
					</div>
					
					<div class="col-xl-4 col-md-6 mb-5">
					<div class="imgContainer"><a href="cortometraggi.php"><img src="img/servizi/That Nice Clan.png" class="img-fluid" alt="servizio"></a></div>
					<a href="cortometraggi.php"><p class="titoliServizi mt-3">Documentari e cortometraggi</p></a>
					<p>Collaboriamo con professionisti che ricoprono tutti i ruoli di una produzione cinematografica, con cui possiamo aiutarti nella realizzazione del tuo cortometraggio</p>
					</div>
					
					
					
				
				
		  </div>
		</div>
	
	</section>
	
	
	<section class="py-5" id="nostriVideo" data-aos="fade-right">
	
		<div class="container">	
			<div class="row">
				<div class="col">
				<h2 class="h1-responsive font-weight-bold ">I nostri video</h2>
				</div>
			</div>
		
	
		
			<!-- Responsive Video Slider HTML: START -->
			<div class="rvs-container">

				<div class="rvs-item-container">
					<div class="rvs-item-stage">

						<?php echo $html1; ?>

					</div>
				</div>

				<div class="rvs-nav-container">
					<a class="rvs-nav-prev"></a>
					<div class="rvs-nav-stage">

						<?php echo $html2; ?>

					</div>
					<a class="rvs-nav-next"></a>
				</div>

			</div>
			<!-- Responsive Video Slider HTML: END -->
			
		</div> <!-- end container -->
		
		
		<div class="container py-5" id="nostriClienti">
			<h2 class="h1-responsive font-weight-bold ">I nostri clienti</h2>
			<div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
				<div class="carousel-inner w-100" role="listbox">
					<div class="carousel-item row no-gutters active">
						<div class="col-sm-3 col-xs-6 float-left"><a href="http://www.istitutoitalianodonazione.it/it/" target="a_blank"><img class="img-fluid px-3 py-3" src="img/clienti/donare.jpg" alt="cliente"></a></div>
						<div class="col-sm-3 col-xs-6 float-left"><img class="img-fluid px-3 py-3" src="img/clienti/im.jpg" alt="cliente"></div>
						<div class="col-sm-3 col-xs-6 float-left"><a href="https://nikkibeach.com/" target="a_blank"><img class="img-fluid px-3 py-3" src="img/clienti/niki.jpg" alt="cliente"></a></div>
						<div class="col-sm-3 col-xs-6 float-left"><a href="http://www.lauratartarelli.it/" target="a_blan"><img class="img-fluid px-3 py-3" src="img/clienti/laura.jpg" alt="cliente"></a></div>
					</div>
					<div class="carousel-item row no-gutters">
						<div class="col-sm-3 col-xs-6 float-left"><a href="https://www.italiagaseluce.it/" target="a_blank"><img class="img-fluid px-3 py-3" src="img/clienti/itagas.jpg" alt="cliente"></a></div>
						<div class="col-sm-3 col-xs-6 float-left"><a href="https://majida.com/it/" target="a_blank"><img class="img-fluid px-3 py-3" src="img/clienti/majida.jpg" alt="cliente"></a></div>
						<div class="col-sm-3 col-xs-6 float-left"><a href="https://5-15globalenergy.it/" target="a_blank"><img class="img-fluid px-3 py-3" src="img/clienti/5-15.jpg" alt="cliente"></a></div>
						<div class="col-sm-3 col-xs-6 float-left"><a href="http://www.styldecor.it" target="a_blank"><img class="img-fluid px-3 py-3" src="img/clienti/decor.jpg" alt="cliente"></a></div>
					</div>
					<div class="carousel-item row no-gutters">
						<div class="col-sm-3 col-xs-6 float-left"><a href="http://www.giselletorredelagopuccini.it/" target="a_blank"><img class="img-fluid px-3 py-3" src="img/clienti/giselle.jpg" alt="cliente"></a></div>
						<div class="col-sm-3 col-xs-6 float-left"><a href="https://www.clubipini.com/index.asp" target="a_blank"><img class="img-fluid px-3 py-3" src="img/clienti/hotel.jpg" alt="cliente"></a></div>
						<div class="col-sm-3 col-xs-6 float-left"><a href="http://www.fotoone.it/" target="a_blank"><img class="img-fluid px-3 py-3" src="img/clienti/one.jpg" alt="cliente"></a></div>
						<div class="col-sm-3 col-xs-6 float-left"><a href="https://it-it.facebook.com/fotobertini/" target="a_blank"><img class="img-fluid px-3 py-3" src="img/clienti/fb.jpg" alt="cliente"></a></div>
					</div>
					<div class="carousel-item row no-gutters">
						<div class="col-sm-3 col-xs-6 float-left"><a href="https://www.thelongevitysuite.com/" target="a_blank"><img class="img-fluid px-3 py-3" src="img/clienti/long.jpg" alt="cliente"></a></div>
						<div class="col-sm-3 col-xs-6 float-left"><a href="https://www.facebook.com/caritaslucca/" target="a_blank"><img class="img-fluid px-3 py-3" src="img/clienti/caritas.jpg" alt="cliente"></a></div>
						<div class="col-sm-3 col-xs-6 float-left"><a href="https://www.esterina.it/" target="a_blank"><img class="img-fluid px-3 py-3" src="img/clienti/esterina.jpg" alt="cliente"></a></div>
						<div class="col-sm-3 col-xs-6 float-left"><a href="https://www.divinoconsulenze.it/" target="a_blank"><img class="img-fluid px-3 py-3" src="img/clienti/vino.jpg" alt="cliente"></a></div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#recipeCarousel" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#recipeCarousel" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</section>
	
	
	<!--Section: Contact v.2-->
	<section class="py-4" id="contatti" data-aos="fade-right">
		
		<div class="container">

		<!--Section heading-->
		<h2 class="h1-responsive font-weight-bold ">Contattaci</h2>
		<!--Section description-->
		<p class="mb-5">Hai delle domande o vuoi un preventivo? Non esitare a contattarci. Ti risponderemo al più presto</p>

		<div class="row">

			<!--Grid column-->
			<div class="col-md-9 mb-md-0 mb-5">
				<form id="contact-form" name="contact-form" action="mail.php" method="POST">

					<!--Grid row-->
					<div class="row">

						<!--Grid column-->
						<div class="col-md-6">
							<div class="md-form mb-0">
								<input type="text" id="name" name="name" class="form-control">
								<label for="name" class="">Nome</label>
							</div>
						</div>
						<!--Grid column-->

						<!--Grid column-->
						<div class="col-md-6">
							<div class="md-form mb-0">
								<input type="text" id="email" name="email" class="form-control">
								<label for="email" class="">Email</label>
							</div>
						</div>
						<!--Grid column-->

					</div>
					<!--Grid row-->

					<!--Grid row-->
					<div class="row">
						<div class="col-md-12">
							<div class="md-form mb-0">
								<input type="text" id="subject" name="subject" class="form-control">
								<label for="subject" class="">Oggetto</label>
							</div>
						</div>
					</div>
					<!--Grid row-->

					<!--Grid row-->
					<div class="row">

						<!--Grid column-->
						<div class="col-md-12">

							<div class="md-form">
								<textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
								<label for="message">Messaggio</label>
							</div>

						</div>
					</div>
					<!--Grid row-->

				</form>
				
				<div id="status"></div>

				<div class="text-center text-md-left">
					<a class="btn btn-primary" onclick="validateForm()">Invia</a>
				</div>
				
			</div>
			<!--Grid column-->

			<!--Grid column-->
			<div class="col-md-3 text-center" id="col-phone-email">
				<ul class="list-unstyled mb-0">

					<li><i class="fa fa-phone mt-4 fa-2x"></i>
						<p><a href="tel:+ 393406723714">+ 39 3406723714<a></p>
						<p><a href="tel:+ 393382328936">+ 39 3382328936</a></p>
					</li>

					<li><i class="fa fa-envelope mt-4 fa-2x"></i>
						<p><a href="mailto:redplanetvideoproduction@gmail.com">redplanetvideoproduction@gmail.com</a></p>
					</li>
				</ul>
			</div>
			<!--Grid column-->

		</div>
		
		</div> <!--end container-->

	</section>
	<!--Section: Contact v.2-->
	
	
	
	
	<?php
		echo file_get_contents("html/footer.html");
	?>


</body>

<!-- Responsive Video Slider JS -->
<script src="js/rvslider.min.js"></script>
<script>
	jQuery(function($){
		$('.rvs-container').rvslider();
	});
</script>

 <!-- MDB core JavaScript (contact) -->
<script type="text/javascript" src="js/mdb.js"></script>

<!-- Validate form -->
<script type="text/javascript" src="js/email.js"> </script>

<!-- Call to animate scroll script-->
<script>
		
			AOS.init({
				disable: 'phone', // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
				delay: 0, // values from 0 to 3000, with step 50ms
				duration: 700, // values from 0 to 3000, with step 50ms
				easing: 'ease', // default easing for AOS animations
				once: true, // whether animation should happen only once - while scrolling down
			});
		
</script>




</html>