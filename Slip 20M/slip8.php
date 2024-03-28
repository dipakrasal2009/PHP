<?php

// Declare a multidimensional array
$multiArray = array(
    array("sangram", "shubham", "sanket"),
    array("Omkar", "Pratik", "Suraj"),
    array("Dipak", "sachin", "yash")
);

// Function to display the content of the multidimensional array
function displayArray($array) 
{
    foreach ($array as $subArray) 
    {
        foreach ($subArray as $element) 
        {
            echo "$element ";
        }
        echo "\n";
    }
    echo "\n";
}

// Function to display a specific element from the multidimensional array
function displayElement($array, $row, $col) 
{
    if (isset($array[$row][$col])) 
    {
        echo "Element at position [$row][$col] :".$array[$row][$col];
    } 
    else 
    {
        echo "Invalid position! \n";
    }
}

// Function to delete a given element from the multidimensional array
function deleteElement(&$array, $element) 
{
    foreach ($array as $key => $subArray) 
    {
        $index = array_search($element, $subArray);
        if ($index !== false) 
        {
            unset($array[$key][$index]);
        }
    }
}

// Display the original array
echo "Original Array: \n";
displayArray($multiArray);

// Display a specific element
$row = 1; // Row index
$col = 2; // Column index
echo "Displaying specific element: \n";
displayElement($multiArray, $row, $col);

// Delete a given element
$elementToDelete = "Suraj";
echo "\n\nDeleting element '$elementToDelete': \n";
deleteElement($multiArray, $elementToDelete);
displayArray($multiArray);
?>

