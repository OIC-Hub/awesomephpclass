<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "idcard";
if (!$db = new mysqli($hostname, $username, $password, $database)) {
    echo "Unable to connect to database" . $db->connect_error;
}
// if (!$db = mysqli_connect($hostname, $username, $password, $database)) {
//     echo "Not connected";
// }
