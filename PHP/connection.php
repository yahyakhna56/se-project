<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from POST data
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Database configuration
    define('DB_SERVER', 'localhost'); // Database server (usually 'localhost')
    define('DB_USERNAME', $username); // Your database username
    define('DB_PASSWORD', $password); // Your database password
    define('DB_NAME', 'earningink'); // Your database name

    // Attempt to connect to MySQL database
    $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    // Check connection
    if ($conn === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    // Print success message
    echo "Connected successfully";
}
?>
