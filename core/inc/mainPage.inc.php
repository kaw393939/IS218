<?php

class mainPage {
	
	public function printPage() {
	$somewhere = singleton::getInstance();
	
		echo "<table id='hor-zebra' class='center'>";	
		echo "<th scope='col'>Institution Name</th>";
	foreach ($somewhere as $schoolNames){
		
		//var_dump($somewhere);

		echo"<title>IS218 Project 1</title>";
		echo "<tbody>";	
		echo "<tr class='odd'>";
		echo "<td>";
		
		echo "<a href=?UNITID=".$schoolNames['UNITID'].">".$schoolNames['INSTNM']."</a><br>";
		
		//echo "$_GET[".$data."]";
		//print_r($data[1]);
		echo "</td>";
		echo "</tr>";
		echo "</tbody>";
		
		
	}
	echo "</table>";
	//$INFO = $somwhere[$_REQUEST['UCID']];
}
	
}
	
?>