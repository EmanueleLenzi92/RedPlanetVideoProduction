<?php
//functions for create html videos strings  
function createHtmlVideo($urlImg, $urlVideo, $title, $tipo){
	
	$res = '
		<!-- The below is a single item, simply duplicate this layout for each item -->
		<div class="rvs-item" style="background-image: url(&quot;' . $urlImg . '&quot;)">
			<p class="rvs-item-text">' . $title . '<small>' . $tipo. '</small></p>
			<a href="' . $urlVideo . '" class="rvs-play-video"></a>
		</div>
	';
		
	return $res;
}

function createHtmlVideo2($urlImg, $urlVideo, $title, $tipo){
	
	$res = '
		<!-- The below is the corresponding nav item for the single item, simply duplicate this layout for each item -->
		<a class="rvs-nav-item">
			<span class="rvs-nav-item-thumb" style="background-image: url(&quot;' . $urlImg . '&quot;)"></span>
			<h4 class="rvs-nav-item-title">' . $title . '</h4>
			<small class="rvs-nav-item-credits">' . $tipo. '</small>
		</a>
	';
	
	return $res;
}



//query for actual video page with previous functions
$actualPage= basename($_SERVER['REQUEST_URI']);
$table="";

switch ($actualPage) {
    case 'eventi.php':
        $table= 'videoeventi';
        break;
    case 'spot.php':
        $table= 'videospot';
		break;
	case 'cortometraggi.php':
        $table= 'videocorti';
        break;
	case 'spettacoli.php':
        $table= 'videospettacoli';
        break;
	case 'videoclip.php':
        $table= 'videoclip';
        break;
	case 'videopresentazioni.php':
        $table= 'videopresentazioni';
        break;
    default:
        $table= 'videohome';
}



$sql = "SELECT * FROM " . $table . " order by posizione";
$result = $conn->query($sql);
$html1=""; $html2="";
if ($result->num_rows > 0) {
					
	while($row = $result->fetch_assoc()) {
		$html1 .= createHtmlVideo($row['urlimg'], $row['urlvideo'], $row['titolo'], $row['tipo']);
		$html2 .= createHtmlVideo2($row['urlimg'], $row['urlvideo'], $row['titolo'], $row['tipo']);
	}
}

?>