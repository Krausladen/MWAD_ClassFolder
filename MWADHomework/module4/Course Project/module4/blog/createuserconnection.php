<?php
$servername = "localhost";
$username = "create_account_bot";
$password = "#Cab1020!!x!";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error . '<br>');
}
echo 'Connected to server successfully<br>';
?>
