<?php include('php/conn.php'); ?>
<?php include('php/sqlGetVideoPrint.php'); ?>

<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Red Planet Cortometraggi</title>
	<meta name="keywords" content="Video Videomaker Videoclip Cortometraggi">
	<meta name="description" content="Collaboriamo con professionisti che ricoprono tutti i ruoli di una produzione cinematografica, con cui possiamo aiutarti con la realizzazione del tuo cortometraggio">
	
	
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
	<style> nav {background: #f7f7f9; position: sticky !important}</style>
	
	<!-- Responsive Video Slider CSS -->
	<link href="css/rvslider.min.css" rel="stylesheet">

	<!--my js scripts-->
	<script src='js/detectDeviceLink.js'></script>

	<!--Font awsome-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<!-- Material Design Bootstrap (contact) -->
    <link rel="stylesheet" href="css/mdb.css">
	

	
</head>

<body>

<?php
	echo file_get_contents("html/menuPage.html");
?>

<div class="container">

<div class="row text-center">
	<div class="col">
		<h1 class="display-3 titlePage mb-5">Cortometraggi</h1>
	</div>
</div>
		
		
		<!-- Responsive Video Slider HTML: START -->
			<div class="rvs-container mb-5">

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
		
		

</div>



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


</html>