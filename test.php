<?php

include('core/init.inc.php');


print_r(read_csv('test.csv'));

?>

<?php

include('core/init.inc.php');
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
   		print_r(read_csv('test.csv'));
		
    }
}
$obj = Import::getInstance();   
?>