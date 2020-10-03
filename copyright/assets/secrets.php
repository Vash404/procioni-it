<?php
$servername = "89.46.66.13";
$username = "pr_copyright";
$password = "es05N3x!";
$dbname = "pr_copyright";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "<!--Connesso al database-->";

?>