<?php

// Sample associative array
$associativeArray = array("name" => "Dipak","age" => 21,"city" => "Pune");

// Function to display elements of the array along with keys
function displayArray($array) 
{
	foreach ($array as $key => $value) 
	{
        	echo "$key: $value\n";
    	}
}

// Function to display size of the array
function displaySize($array) 
{
    $size = count($array);
    echo "Size of the array: $size\n";
}
   

displayArray($associativeArray);
displaySize($associativeArray);
?>
