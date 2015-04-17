<?php

class infoPage {
	
	public function printPage() {
	$somewhere = singleton::getInstance();
	$info = $somewhere[$_REQUEST['UNITID']];
	
		echo "<table id='hor-zebra' class='center'>";
	foreach ($info as $key => $value) {
		
		if ($key == 'WEBADDR'){
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