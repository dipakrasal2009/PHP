<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Text File</title>
</head>
<body>
    <h2>Click the button to print the contents of the file:</h2>
    <button id="printButton">Print</button>
    <div id="fileContent"></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // Define click event for the print button
            $('#printButton').click(function() {
                // AJAX request to read the contents of the text file
                $.ajax({
                    url: '<?= $_SERVER['PHP_SELF'] ?>', // PHP script to handle file reading
                    type: 'POST',
                    data: { action: 'readFile' },
                    success: function(response) {
                        // Display the contents of the file in the fileContent div
                        $('#fileContent').text(response);
                    },
                    error: function(xhr, status, error) {
                        // Handle error if file reading fails
                        console.error(xhr.responseText);
                    }
                });
            });
        });
    </script>

    <?php
    // Check if the action is to read the file
    if (isset($_POST['action']) && $_POST['action'] === 'readFile') {
        // File path of the text file to be read
        $filePath = 'example.txt'; // Update this with the actual file path

        // Check if the file exists
        if (file_exists($filePath)) {
            // Read the contents of the file
            $fileContent = file_get_contents($filePath);
            // Return the contents
            echo $fileContent;
        } else {
            // If file does not exist, return an error message
            header("HTTP/1.1 404 Not Found");
            echo "File not found.";
        }
    }
    ?>
</body>
</html>
