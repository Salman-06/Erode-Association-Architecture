<?php
// Database configuration
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'u648102058_lmsusr');
define('DB_PASSWORD', 'Lum0us!23');
define('DB_NAME', 'u648102058_lumous');

// Create database connection
$conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set charset to utf8
$conn->set_charset("utf8");

// Function to sanitize input data
function sanitizeInput($data) {
    global $conn;
    return htmlspecialchars(strip_tags(trim($conn->real_escape_string($data))));
}
?>