<?php

//include('core/init.inc.php');
//header('Content-Type: text/plain');


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
		$combined[] = array_combine($ids, $data);
	}
	
	//Removing the first Element, i.e. the headers column
	array_shift($combined);
	//return $finalData;
	return $combined;
	
	

	}
#######-------------------End of read_csv function-------------------------------#######


//print_r(read_csv('test.csv'));
$data_file = read_csv('test.csv');



//-------------the HTML table to show the users starts below----------------------------

//print_r($data_file[0]);
$mehul = ($data_file);
print_r($mehul);

echo $rows[0];
$myArrayLength = count ($mehul);
$i = 0;
	while ($i < $arrayLength)	{
		//Do something here. echo "The number is: $x <br>";
		echo "<table border='1' style='width:50%'>";
		echo "<tr>";
			echo "<td>";
			echo "<a href=?UNITID=".$mehul[UNITID].">".$mehul[INSTNM]."</a>";
			//echo "$_GET[".$myArrayLength."]";
			
		$i++;
	}


?>
