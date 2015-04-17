<?php

class infoPage {
	
	public function printPage() {
	$somewhere = singleton::getInstance();
	$info = $somewhere[$_REQUEST['UNITID']];
	
		echo "<table id='hor-zebra' class='center'>";
	foreach ($info as $key => $value) {
		
		if ($key == 'CITY'){
			echo "<tbody>";	
			echo "<tr class='odd'>";
			echo "<td><b>$key</b></td>";
			//echo "<td><a href='http://en.wikipedia.org/w/index.php?search=$value'>$value</a></td>";
			echo "<td><a href='https://www.google.com/search?q=$value, City'>$value</a></td>";
			echo "</tr>";
			echo "</tbody>";
			
		}elseif ($key == 'ZIP'){
			echo "<tbody>";	
			echo "<tr class='odd'>";
			echo "<td><b>$key</b></td>";
			echo "<td><a href='https://www.google.com/maps?q=$value'>$value</a></td>";
			echo "</tr>";
			echo "</tbody>";	
			
			
		}elseif ($key == 'GENTELE'){
			echo "<tbody>";	
			echo "<tr class='odd'>";
			echo "<td><b>$key</b></td>";
			echo "<td>";
			echo "(".substr($value, 0, 3).") ".substr($value, 3, 3)."-".substr($value,6);
			echo "</td>";
			echo "</tr>";
			echo "</tbody>";
			
		}elseif ($key == 'FAXTELE'){
			echo "<tbody>";	
			echo "<tr class='odd'>";
			echo "<td><b>$key</b></td>";
			echo "<td>";
			echo "(".substr($value, 0, 3).") ".substr($value, 3, 3)."-".substr($value,6);
			echo "</td>";
			echo "</tr>";
			echo "</tbody>";
			
		}elseif ($key == 'WEBADDR'){
			echo "<tbody>";	
			echo "<tr class='odd'>";
			echo "<td><b>$key</b></td>";
			echo "<td><a href='http://$value'>$value</a></td>";
			echo "</tr>";
			echo "</tbody>";	
		
		}elseif($key == 'ADMINURL' ){
			echo "<tbody>";	
			echo "<tr class='odd'>";
			echo "<td><b>$key</b></td>";
			echo "<td><a href='http://$value'>$value</a></td>";
			echo "</tr>";
			echo "</tbody>";	
		}elseif($key == 'FAIDURL' ){
			echo "<tbody>";	
			echo "<tr class='odd'>";
			echo "<td><b>$key</b></td>";
			echo "<td><a href='http://$value'>$value</a></td>";
			echo "</tr>";
			echo "</tbody>";	
		}elseif($key == 'APPLURL' ){
			echo "<tbody>";	
			echo "<tr class='odd'>";
			echo "<td><b>$key</b></td>";
			echo "<td><a href='http://$value'>$value</a></td>";
			echo "</tr>";
			echo "</tbody>";	
		}elseif($key == 'NPRICURL' ){
			echo "<tbody>";	
			echo "<tr class='odd'>";
			echo "<td><b>$key</b></td>";
			echo "<td><a href='http://$value'>$value</a></td>";
			echo "</tr>";
			echo "</tbody>";	
		}else{
			echo "<tbody>";	
			echo "<tr class='odd'>";
			echo "<td><b>$key</b></td>";
			echo "<td>$value</td>";
			echo "</tr>";
			echo "</tbody>";
			
		}
		
	
	}
		echo "</table>";	
}
}

?>