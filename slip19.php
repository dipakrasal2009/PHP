<!-- slip 9 Insert and delete the element from stack -->

<?php

// Initialize an empty stack array
$stack = [];

// Function to insert an element into the stack
function insertElement(&$stack, $element) 
{
    array_push($stack, $element);
}

// Function to delete an element from the stack
function deleteElement(&$stack) 
{
    if (!empty($stack)) 
    {
        return array_pop($stack);
    } 
    else 
    {
        echo "Stack is empty. Nothing to delete.\n";
    }
}

// Menu-driven program
do 
{
    echo "MENU:\n";
    echo "a) Insert an element in stack\n";
    echo "b) Delete an element from stack\n";
    echo "c) Exit\n";

    $choice = readline("Enter your choice (a, b, c): ");

    switch ($choice) 
    {
        case 'a':
            $element = readline("Enter the element to insert: ");
            insertElement($stack, $element);
            echo "Element '$element' inserted into the stack.\n";
            break;
        case 'b':
            $deletedElement = deleteElement($stack);
            if ($deletedElement !== null) {
                echo "Element '$deletedElement' deleted from the stack.\n";
            }
            break;
        case 'c':
            echo "Exiting...\n";
            break;
        default:
            echo "Invalid choice. Please enter 'a', 'b', or 'c'.\n";
    }
} while ($choice !== 'c');

?>
