<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Form</title>
</head>
<body>
    <form action="test_form.php" method="post">
        <label for="test">Test Input: </label>
        <input type="text" id="test" name="test">
        <input type="submit" value="Submit">
    </form>

    <?php
    // Enable error reporting for debugging
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    // Debugging: print server variables
    echo '<pre>';
    print_r($_SERVER);
    echo '</pre>';

    // Check if the form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['test'])) {
            echo "Form submitted successfully. Received: " . htmlspecialchars($_POST['test']);
        } else {
            echo "No data received.";
        }
    } else {
        echo "Form not submitted.";
    }
    ?>
</body>
</html>
