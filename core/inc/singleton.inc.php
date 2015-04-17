<?php

class singleton {
	
	public static function getInstance() {
	static $finalArray = null;
		if($finalArray===null) {
			$finalArray=new static ();
			$tempRows = array ();
			$rows = array ();
			$tempRows = file('test.csv', FILE_IGNORE_NEW_LINES);
			// $header is the array with just the headers
			$header = str_getcsv($tempRows[0]);
			
			foreach ($tempRows as $line){
				$temp = str_getcsv($line);
				$fArray[] = array_combine($header,$temp);
				$array_ID[] = $temp[0];
			}
			
			array_shift($fArray);
			array_shift($array_ID);
			$finalArray = array_combine($array_ID,$fArray);
			//var_dump ($finalArray);
		}
	return $finalArray;
}
	
}

?>