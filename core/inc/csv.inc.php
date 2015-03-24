<?php

//reads a csv file, returning an array of rows
function read_csv($filename){
	$rows = array ();
	
	//take the CSV fine in and make an array, also ignore the new lines
	$tempRows = file($filename, FILE_IGNORE_NEW_LINES);
	
	//go through each lines in the file
	foreach ($tempRows as $line){
		$rows[] = str_getcsv($line);
		
		
	}
	
	
	return $rows;
}


?>