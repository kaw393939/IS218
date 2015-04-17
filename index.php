<html>
	<title>IS218 Project</title>
		<head>
		<link rel = stylesheet type= "text/css"  href ="table.css">
		</head>
			<body bgcolor="#F0FFFF">
				<h1>
					<div align="center">
						<span title="Home">
							<a align="center" href="index.php">IS218</a>
						</span>
					</div>
				</h1>
			</body>
</html>


<?php
include('core/init.inc.php');

singleton::getInstance();
	if (!isset($_REQUEST['UNITID'])){
		$schoolList = new mainPage();
		$schoolList -> printPage();
		
	}else{
		$schoolList = new infoPage();
		$schoolList -> printPage();
	}

?>