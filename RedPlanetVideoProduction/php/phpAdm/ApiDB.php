<?php
include('../conn.php');

//recupero il tipo di pagina in cui inserire il video
function getTable($typeVideo){
	switch ($typeVideo) {
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
	
	return $table;

}
$sqltable= getTable($_POST['radio0']);

//recuper nome cartella dove uploadare il video
function getfolder($typeVideo){
	switch ($typeVideo) {
    case 'radev':
        $folder= 'Eventi/';
        break;
    case 'radspot':
        $folder= 'Spot/';
		break;
    case 'radhome':
        $folder= 'Altro/';
		break;
	case 'radcor':
        $folder= 'Corti/';
		break;
	case 'radspe':
        $folder= 'Spettacoli/';
		break;
	case 'radclip':
        $folder= 'Videoclip/';
		break;
	case 'radpres':
        $folder= 'VideoPresentazione/';
		break;
	}
	
	return $folder;

}
$folder = getfolder($_POST['radio0']);

//recuper il tipo
function get_type($typeVideo){
	switch ($typeVideo) {
    case 'radev':
        $tipo= 'Eventi';
        break;
    case 'radspot':
        $tipo= 'Spot';
		break;
    case 'radhome':
        $tipo= '';
		break;
	case 'radcor':
        $tipo= 'Cortometraggio';
		break;
	case 'radspe':
        $tipo= 'Spettacolo';
		break;
	case 'radclip':
        $tipo= 'Videoclip';
		break;
	case 'radpres':
        $tipo= 'VideoPresentazione';
		break;
	}
	
	return $tipo;

}
$tipo = get_type($_POST['radio0']);

//recupero se è pure in home
$inHome= $_POST['inHome0'];

//vedo se è un aggiunta o una modifica
$add= false; 
$mod= false;
if($_POST['id0'] == "") { $add= true; }
if($_POST['id0'] != "") { $mod= true; }


$messaggioHTMLJson= "";

if($add){

	//recupero tutti gli id per mettere uno nuovo progressivo. Prendo l'ultimo numero di tutti gli id in tutte le tabelle con order by desc
	$sql= "SELECT id FROM videohome UNION SELECT id FROM videoclip UNION SELECT id FROM videocorti UNION SELECT id FROM videoeventi UNION SELECT id FROM videopresentazioni UNION SELECT id FROM videospettacoli UNION SELECT id FROM videospot order by id desc LIMIT 1";
	$result = $conn->query($sql);
	$id;
	while($row = $result->fetch_assoc()) {
		$id = $row['id'] + 1;
	}
	
	//recupero le posizioni di quella tabella per metterlo in fondo
	$sql2= 'SELECT posizione FROM '. $sqltable . ' ORDER BY posizione DESC LIMIT 1';
	$result2 = $conn->query($sql2);
	$posizione;
	if ($result2->num_rows > 0) {
		while($row2 = $result2->fetch_assoc()) {
			$posizione = $row2['posizione'] + 1;
		}
	} else $posizione = 1;
	
	//recupero il titolo
	$title= mysqli_real_escape_string($conn, $_POST['title0']);
	
	// sposto video e immagine nel server
	$urlImgSpostare= '../../video/trailer/'. $folder .  $_FILES['imageFile0']['name'];
	$urlVidSpostare= '../../video/trailer/'. $folder .  $_FILES['video0']['name'];
	$urlImg= 'video/trailer/'. $folder .  $_FILES['imageFile0']['name'];
	$urlVid= 'video/trailer/'. $folder .  $_FILES['video0']['name'];
	move_uploaded_file($_FILES['imageFile0']['tmp_name'], $urlImgSpostare);
	move_uploaded_file($_FILES['video0']['tmp_name'], $urlVidSpostare);

	// inserisco nella tabella giusta
	$sql = "INSERT INTO " . $sqltable . " (id, urlvideo, urlimg, titolo, posizione, tipo) VALUES ('$id', '$urlVid', '$urlImg', '$title', '$posizione', '$tipo')";
	if ($conn->query($sql) === TRUE) {
		
	} else {
		
	}
	// se è in home
	if ($inHome == 1){
		
		//recupero le posizioni diei video in home
		$sql3= 'SELECT posizione FROM videohome ORDER BY posizione DESC LIMIT 1';
		$result3 = $conn->query($sql3);
		if ($result3->num_rows > 0) {
			while($row3 = $result3->fetch_assoc()) {
				$posizione = $row3['posizione'] + 1;
			}
		} else $posizione = 1;
		
		// aggiungo video
		$sql = "INSERT INTO videohome (id, urlvideo, urlimg, titolo, posizione, tipo) VALUES ('$id', '$urlVid', '$urlImg', '$title', '$posizione', '$tipo')";
		if ($conn->query($sql) === TRUE) {
			
		} else {
			
		}
	}
	
	$messaggioHTMLJson= "Video: '"  . $title . "' Aggiunto correttamente; ";

} 


if ($mod){
	
	//conto il numero massimo degli elementi in $POST (7,14,21,28 ecc.), e lo divido per 7 per dividere i singoli oggetti video
	$elementInArray= count($_POST);
	$loop= $elementInArray / 7;
	
	$k=0; //tiene il conto dei DIVERSI oggetti in $POST
	$j= 7; //per scorrere di 7 in 7 gli elementi nell'array POST
	$i=0; // scorre di 1 l'array. Viene poi aumentata a 7 per scorrere gli altri 7
	
	//trasformo gli indici in numeri per usare POST[$i]
	$_POSTvaloriNumerici= array_values($_POST);
	
	while ($k < $loop){
		
		//array contenente il singolo oggetto video
		$singleVideoObject= [];
	
		for($i; $i < $j; $i++){
			
			array_push($singleVideoObject, $_POSTvaloriNumerici[$i]);
			
		}
		
		$sql = 'UPDATE ' . $sqltable . ' SET titolo="' . mysqli_real_escape_string($conn, $singleVideoObject[2]) . '", posizione="'. $singleVideoObject[5] .'" WHERE id= ' . $singleVideoObject[0];
		$result = $conn->query($sql);
		
		$k++; //aumento k di 1
		$i=$j; // i diventa j. cosi riparte a scorrere l'array da j
		$j = $j + 7; //aggiungo 7 a j per scorrere altre 7 posizioni oltre a quelle gia scorse
	}
	
	$messaggioHTMLJson= "Modifiche effettuate correttamente; ";
	
}


$arrayJson= array( "html" => $messaggioHTMLJson);		
$data= json_encode($arrayJson);

echo $data;




?>