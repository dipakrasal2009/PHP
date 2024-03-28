<?php

// Function to merge two arrays
function mergeArrays($array1, $array2) 
{
    return array_merge($array1, $array2);
}

// Function to find the intersection of two arrays
function intersectionOfArrays($array1, $array2) 
{
    return array_intersect_assoc($array1, $array2);
}

// Function to find the union of two arrays
function unionOfArrays($array1, $array2) 
{
    return array_unique(array_merge($array1, $array2), SORT_REGULAR);
}

// Function to find set difference of two arrays
function setDifferenceOfArrays($array1, $array2) 
{
    return array_diff_assoc($array1, $array2);
}


$array1 = ['a' => 1, 'b' => 2, 'c' => 3];
$array2 = ['d' => 4, 'e' => 5, 'f' => 6];
$mergedArray = mergeArrays($array1, $array2);
print_r($mergedArray);

$intersection = intersectionOfArrays($array1, $array2);
print_r($intersection);
           
$union = unionOfArrays($array1, $array2);
print_r($union);
          
$difference = setDifferenceOfArrays($array1, $array2);
print_r($difference);
