<?php
include('../conn.php');

$buttonselected= $_GET['selectedradio'];
$id= $_GET['idVid'];
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

$posizione;
$sql= 'SELECT posizione FROM '.$table .' WHERE id = ' . $id;;
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
	$posizione= strval($row['posizione']);
}

$sql2= 'DELETE FROM '.$table.' WHERE id = ' . $id;
$result2 = $conn->query($sql2);

$sql1= 'SELECT posizione, id FROM '.$table;
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) {
		while($row = $result1->fetch_assoc()) {
			if (strval($row['posizione']) >  $posizione){
				$sql3= 'UPDATE FROM '.$table.' SET posizione= "'. (strval($row['posizione']) - 1) .'" WHERE id = ' . $row['id'];
				$result3 = $conn->query($sql3);
			
			}
		}
}



$arrayJson= array( "html" => "Video eliminato; ");		
$data= json_encode($arrayJson);

echo $data;
?>