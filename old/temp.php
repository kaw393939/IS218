<?php

//This is a temp file to test out random things. DO NOT save important stuff inside here.
header('Content-Type: text/plain');

class Import
{
    public static function getInstance()
    {
        static $instance = null;
        if (null === $instance) 
        {
            $instance = new static();
        }
        return $instance;
    }
    protected function __construct()
    {
   		//imports data
 	   	$data =file('test.csv');
		$datafile = fopen('test.csv', 'r');
		while (($data = fgetcsv($datafile)) !== FALSE) 
		{
			print_r ($data);
			
			
		/* echo "<table border='1' style='width:50%'>";
		echo "<tr>";
			echo "<td>";
			echo "<a href=?UNITID=".$data[0].">".$data[1]."</a>";
			
			//echo "$_GET[".$data."]";
  			//print_r($data[1]);
  			echo "</td>";
  		echo "</tr>"; */
		}
		fclose($datafile);
		
    }
}
$obj = Import::getInstance();   
?>