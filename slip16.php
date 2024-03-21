<?php

// Sample associative array
$associativeArray = array( "name" => "Dipak","age" => 21,"city" => "Pune");

// Function to reverse the order of keys and values
function reverseArray($array) 
{
    $reversedArray = array();
    foreach ($array as $key => $value) 
    {
        $reversedArray[$value] = $key;
    }
    return $reversedArray;
}

// Function to traverse the array in random order
function traverseRandom($array) 
{
    $keys = array_keys($array);
    shuffle($keys);
    foreach ($keys as $key) 
    {
        echo "$key: $array[$key]\n";
    }
}

$reversedArray = reverseArray($associativeArray);
echo "Reversed Array:\n";
foreach ($reversedArray as $key => $value) 
{
      echo "$key: $value\n";
}
traverseRandom($associativeArray);
?>

