<?php
//I made this PHP file to understand how the combine function works.
//I also learned how to change the arrays to your requirements so it can be combined.


header('Content-Type: text/plain');
$c = array ('UNITID','INSTNM','ADDR','CITY','STABBR');
$mehul = array ('Mehul', '22', 'M', 'NJIT', 'Nutley');
$savan = array ('Savan', '22', 'M', 'Rutgers', 'Brunswick');
$akash = array ('akash', '22', 'M', 'Essex', 'Bloomfield');
$test1 = array ('asdasd', '22', 'F', 'dfhfhfghfgh', 'jshdgfbujsyhdf');
$test2 = array ('asdasd', '22', 'F', 'dfhfhfghfgh', 'jshdgfbujsyhdf');
$test3 = array ('asdasd', '22', 'F', 'dfhfhfghfgh', 'jshdgfbujsyhdf');
$test3 = array ('asdasd', '22', 'F', 'dfhfhfghfgh', 'jshdgfbujsyhdf');



$a = array(Name, Age, Sex, School, Address);
$b = array($mehul, $c, $savan, $c, $savan, $test1, $test2, $test3, $test4);



foreach ($b as $names) {
	//print_r ($names);
	$combined[] = array_combine($a, $names);
}


print_r($a);
//print_r($b);
print_r($combined);

?>