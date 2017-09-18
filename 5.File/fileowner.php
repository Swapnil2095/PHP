<?php
class FileOwners
{
    public static function groupByOwners($files)
    {
        echo 'Length of Array = '.count($files) . '<br>';
		echo 'Array -> '. $files["Input.txt"]  . '<br>';
		print_r ($files);
		echo '</br>'; 
	
	    $fileOwner = array("Randy" =>array("Input.txt","Output.txt"),
				           "Stan"=>array("Code.py")
				      );

		print_r ($fileOwner);
		echo '</br>'; 
		
		return NULL;
    }
}

$files = array
(
    "Input.txt" => "Randy",
    "Code.py" => "Stan",
    "Output.txt" => "Randy"
);

FileOwners::groupByOwners($files);

?>