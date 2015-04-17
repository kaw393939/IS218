<html>
<title>IS218 Project</title>
	<head>
	<link rel = stylesheet type= "text/css"  href ="table.css">
	</head>
	
	<body bgcolor="#F0FFFF">
		<h1>
			<div align="center">
				<span title="Home">
					<a align="center" href="index2.php">IS218</a>
				</span>
			</div>
		</h1>
	</body>
</html>


<?php
include('core/init.inc.php');


//print_r(read_csv('hd2013.csv'));
//print_r(read_csv('test.csv'));

singleton::getInstance();
	if (!isset($_REQUEST['UNITID'])){
		$schoolList = new mainPage();
		$schoolList -> printPage();
		
	}else{
		$schoolList = new infoPage();
		$schoolList -> printPage();
	}

?>