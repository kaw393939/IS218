<head>
<link rel = stylesheet type= "text/css"  href = "table.css">
</head>
<body>
<?php

//include('core/init.inc.php');
header('Content-Type: text/plain');


function read_csv($filename){
	$tempRows= array ();//Just here to read in the data from the CSV
	$rows = array ();//Will take data from tempRows and make it into an array
	
	
	//take the CSV fine in and make an array, also ignore the new lines
	$tempRows = file($filename, FILE_IGNORE_NEW_LINES);
	//print_r($tempRows);
	
	foreach ($tempRows as $line){
		$rows[] = str_getcsv($line);
		//print_r($rows);
	}
	
	$removedRow = array_shift($rows);
	
	//var_dump ($removedRow);
	//print_r($rows);
	
	//Get the UNITID from the URL
	if (isset($_REQUEST['UNITID'])) {
    $UNITID = $_REQUEST['UNITID'];
  } else {
    $UNITID = "";
  }
  
  echo $UNITID;
  
  //Stuff to do once I have the UNITID
	
	
print("<table id='hor-zebra'>");	
//print("<tr><th colspan =2> Institution Name </th></tr>");

print("<th scope='col'>Institution Name</th>");	
	
	foreach ($rows as $row){
		$data = ($row);
		//echo $data[0];
		print_r($data);
	
	echo "<tbody>";	
		echo "<tr class='odd'>";
			echo "<td>";
			echo "<a href=?UNITID=".$data[0].">".$data[1]."</a>";
			
			//echo "$_GET[".$data."]";
  			//print_r($data[1]);
  			echo "</td>";
  		echo "</tr>";
	echo "</tbody>";		
		
		
		}
	
	
	//print_r($rows);
	
	//return $rows;
	
	

	}
#######-------------------End of read_csv function-------------------------------#######


print_r(read_csv('test.csv'));
//print_r(read_csv('hd2013.csv'));
//read_csv('test.csv');
?>
