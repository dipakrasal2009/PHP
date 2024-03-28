<?php

// function to check the number is Prime or Not
function primeCheck($number)
{
    if ($number == 1)
    {
        return 0;
    }

    for ($i = 2; $i <= $number; $i++)
    {
        if ($number % $i == 0)
        {
            return 0;
        }
        else
        {
            return 1;
        }
    }
    return 1;
}
 
// execution start here
$number = 22;

$flag = primeCheck($number);

if ($flag == 1)
{
    echo "Prime";
}
else
{
    echo "Not Prime";
}
?>
