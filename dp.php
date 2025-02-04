<?php
$serverName = "YOUR_SERVER_NAME"; // E.g., "localhost\SQLEXPRESS" or just "localhost"
$connectionOptions = array(
    "Database" => "NotepadApp",
    "Uid" => "YOUR_USERNAME", // Replace with your SQL Server username
    "PWD" => "YOUR_PASSWORD"  // Replace with your SQL Server password
);

// Connect to the database
$conn = sqlsrv_connect($serverName, $connectionOptions);

// Check if the connection was successful
if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}
?>
