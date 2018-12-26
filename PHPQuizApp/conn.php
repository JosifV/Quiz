<?php
    $serverName = 'localhost';
    $userName = 'id7851047_admin';
    $password = 'proba1234';
    $dbName = 'id7851047_probaqwerty';

// Create connection
$conn = mysqli_connect($serverName, $userName, $password, $dbName);

// Check connection
if (!$conn) {
    die("Connection failed: ");
}
//  echo "Connected successfully";
?>
