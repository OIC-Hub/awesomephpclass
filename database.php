<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "idcard";
if (!$db = new mysqli($hostname, $username, $password, $database)) {
    echo "Unable to connect to database" . $db->connect_error;
}
$sql = "CREATE DATABASE databasename";

// if (!$db = mysqli_connect($hostname, $username, $password, $database)) {
//     echo "Not connected";
// }
