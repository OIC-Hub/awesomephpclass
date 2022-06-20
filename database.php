<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "idcard";
if (!$db = mysqli_connect($hostname, $username, $password, $database)) {
    echo "Not connected";
}
