<?php
// Check if 'name' and 'age' are set in the GET request
if (isset($_GET['name']) && isset($_GET['age'])) {
    // Retrieve the values and sanitize them
    $name = htmlspecialchars($_GET['name'], ENT_QUOTES, 'UTF-8');
    // Cast age to an integer to ensure it's numeric
    $age = (int) $_GET['age'];
    
    // Display the submitted information
    echo "<h1>Hello, $name!</h1>";
    echo "<p>You are $age years old.</p>";
} else {
    // If the form hasn't been submitted, show the input form
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>Enter Your Details</title>
    </head>
    <body>
        <form method="get" action="">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>
            <br><br>
            <label for="age">Age:</label>
            <input type="number" name="age" id="age" required>
            <br><br>
            <input type="submit" value="Submit">
        </form>
    </body>
    </html>
    <?php
}
?>
