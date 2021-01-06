<?php

$mysqli_connection = new MySQLi('localhost', 'root', '', 'Final');

if ($mysqli_connection->connect_error) {
   echo "Not connected, error: " . $mysqli_connection->connect_error;
}
else {
   echo "Connected.";
}
?>