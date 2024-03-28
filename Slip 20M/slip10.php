<!-- slip 10 Insert and delete the element from queue -->

<?php

// Initialize an empty queue array
$queue = [];

// Function to insert an element into the queue
function insertElement(&$queue, $element) 
{
    array_push($queue, $element);
}

// Function to delete an element from the queue
function deleteElement(&$queue) 
{
    if (!empty($queue)) 
    {
        return array_shift($queue);
    } 
    else 
    {
        echo "Queue is empty. Nothing to delete.\n";
    }
}

// Function to display the contents of the queue
function displayQueue($queue) 
{
    if (!empty($queue)) 
    {
        echo "Contents of the queue: " . implode(', ', $queue) . "\n";
    } 
    else 
    {
        echo "Queue is empty.\n";
    }
}

// Menu-driven program
do 
{
    echo "MENU:\n";
    echo "a) Insert an element in queue\n";
    echo "b) Delete an element from queue\n";
    echo "c) Display the contents of queue\n";
    echo "d) Exit\n";

    $choice = readline("Enter your choice (a, b, c, d): ");

    switch ($choice) 
    {
        case 'a':
            $element = readline("Enter the element to insert: ");
            insertElement($queue, $element);
            echo "Element '$element' inserted into the queue.\n";
            break;
        case 'b':
            $deletedElement = deleteElement($queue);
            if ($deletedElement !== null) 
            {
                echo "Element '$deletedElement' deleted from the queue.\n";
            }
            break;
        case 'c':
            displayQueue($queue);
            break;
        case 'd':
            echo "Exiting...\n";
            break;
        default:
            echo "Invalid choice. Please enter 'a', 'b', 'c', or 'd'.\n";
    }
} while ($choice !== 'd');

?>
