<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? 'Unknown';
    $email = $_POST['email'] ?? 'No email provided';

    echo "Received POST Data:<br>";
    echo "Name: " . htmlspecialchars($name) . "<br>";
    echo "Email: " . htmlspecialchars($email);
} else {
?>
    <form method="POST">
        Name: <input type="text" name="name"><br>
        Email: <input type="text" name="email"><br>
        <input type="submit" value="Submit">
    </form>
<?php
}
?>
