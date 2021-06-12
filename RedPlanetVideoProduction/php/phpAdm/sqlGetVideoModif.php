<?php

include('../conn.php');

//A seconda del bottone premuto, fa la query sulla giusta tabella
$buttonselected= $_GET['selectedradio'];
$table="";

switch ($buttonselected) {
    case 'radev':
        $table= 'videoeventi';
        break;
    case 'radspot':
        $table= 'videospot';
		break;
    case 'radhome':
        $table= 'videohome';
		break;
	case 'radspe':
        $table= 'videospettacoli';
        break;
	case 'radclip':
        $table= 'videoclip';
        break;
	case 'radpres':
        $table= 'videopresentazioni';
        break;
	case 'radcor':
        $table= 'videocorti';
        break;
	}


//costruisco la stringa html col form, con tutti i video recuperati del tipo giusto. Il bottone è submit (non button) per i required HTML dei nuovi video
$htmlString = "";
$sql = "SELECT * FROM " . $table . " order by posizione";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	$htmlString .= '<form id="form"><div class="row text-center mt-4">';		
	while($row = $result->fetch_assoc()) {
		$htmlString .= '
		<div class="col-xl-3 col-md-3 mb-2 colRes">
			<div class="card">
				<img class="card-img-top" src="../' . $row['urlimg'] . '" alt="Card image cap">
				<div class="card-body">
				<label for="inputTitle">Titolo</label> </br>
				<input class="inputTitle" type="text" value="' . $row['titolo'] . '" /> </br>
				<label for="inputPosizione">Posizione</label>
				<input class="inputPosizione" type="number" value="' . $row['posizione'] . '" min="1" max="' . $result->num_rows . '"> </br>
				<button class="elimin" id="'. $row['id'] .'">Elimina</button>
				<input type="hidden" class="idHidd" value="'. $row['id'] .'">
				</div>
			</div>
		</div>
		';
	}
	$htmlString .= '</div>';
	$htmlString .= '<div class="row text-center pt-4">
					<div class="col">
					<input type="submit" id="buttonaddVideo" value="MODIFICA">
					</div>
				</div></form>';
	
}

// create a arrey json
$arrayJson= array( "html" => $htmlString);		
$data= json_encode($arrayJson);

echo $data;

?>