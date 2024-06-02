<?php
// Database connection parameters
$host = "localhost";
$username = "root"; // default username for localhost
$password = ""; // no password
$database = "earningink";

// Connect to MySQL database
$mysqli = new mysqli($host, $username, $password, $database);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $name = $mysqli->real_escape_string($_POST['name']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $message = $mysqli->real_escape_string($_POST['message']);

    // Insert data into database
    $sql = "INSERT INTO contact (name, email, message) VALUES ('$name', '$email', '$message')";
    if ($mysqli->query($sql) === true) {
        echo "Message sent successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }

    // Close database connection
    $mysqli->close();
}
?>
