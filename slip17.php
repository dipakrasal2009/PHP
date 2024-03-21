<?php

// Declare an array
$array = array("Dipak", "Pratik", "Omkar", "sohail", "Sachin");

// Reverse the order of elements
$reversedArray = array_reverse($array);

// Print the original array
echo "Original Array:\n";
foreach ($array as $element) 
{
    echo "$element ";
}


// Print the reversed array
echo "\nReversed Array:\n";
foreach ($reversedArray as $element) 
{
    echo "$element ";
}

?>

