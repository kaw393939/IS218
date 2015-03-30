<?php

//include('core/init.inc.php');
header('Content-Type: text/plain');


function read_csv($filename){
	$tempRows= array ();//Just here to read in the data from the CSV
	$rows = array ();//Will take data from tempRows and make it into an array
	
	
	//take the CSV fine in and make an array, also ignore the new lines
	$tempRows = file($filename, FILE_IGNORE_NEW_LINES);

	//Resets the array and returns only the first element
	reset($tempRows);
	$id = current($tempRows);
	
	$firstElement[] = str_getcsv($id);
	
	//Resets the array and returns only the first element
	reset($firstElement);
	$ids = current($firstElement);
	
	//print_r($ids);
	
	//Shorthand to count the array
	//print_r(count ($ids));
	
	
	
	//go through each lines in the file
	foreach ($tempRows as $line){
		$rows[] = str_getcsv($line);
		}
	
	foreach ($rows as $data) {
		//print_r ($rows);
		//print_r ($data);
		//print_r ($ids);
		
		$combined[] = array_combine($ids, $data);
		
	}
	
	return $combined;
	
	
}

print_r(read_csv('test.csv'));

?>
