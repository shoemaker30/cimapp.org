<?php
//database information
$host = "localhost";
$dbUsername = "CIMAdb_PublicUser";
$dbPassword = "";
$dbName = "CIMAdb";
// Create connection
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    header('Location:./error/database-connection-error.html');
    exit;
}
?>