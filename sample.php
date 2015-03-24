<?php
  echo '<a href="?page=soap&soapType=good">Good Soap Menu</a></br>';
  echo '<a href="?page=soap&soapType=bad">bad Soap Menu</a></br>';
  echo '<a href="?page=soap&soapType=green">green Soap Menu</a></br>';
  echo '<a href="?page=soap&soapType=red">red Soap Menu</a></br>';
  echo '<a href="?page=xml">XML Menu</a></br>';
  echo '<a href="?page=python">Python Menu</a></br>';
  echo '<a href="?page=java">Java Menu</a></br>';
  echo '<a href="?page=login">login Menu</a></p>';
  $obj = new $_REQUEST['page'];
  class page {
      function __construct() {
 
         echo 'I am the: ' . $_REQUEST['page'] . 'page';
      }
  }
  class soap extends page {
  
      function __construct() {
        echo 'Type of soap requested: ' . $_REQUEST['soapType'];
      }
  
  }
  class xml extends page {
     function __construct() {
      
               echo 'this is an object: ' . $_REQUEST['page'] . 'page';
	             }
  }
  class java extends page {}
  class python extends page {}
class login extends page {
     function __construct() {
                    echo 'this is an object: ' .
		    $_REQUEST['page'] . 'page';
		                         }
					   }
?>