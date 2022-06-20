<?php
require_once "database.php";

$name = $email = $nameErr = $emailErr = "";
if (isset($_POST['register'])) {
    if (empty($_POST['name'])) {
        $nameErr = "Your name is required";
    } elseif (!is_string(trim($_POST['name']))) {
        $nameErr = "Please enter a valid name";
    } else {
        $name = $_POST['name'];
    }
    if (empty($_POST['email'])) {
        $emailErr = "Your Email is required";
    } else {
        $email = $_POST['email'];
    }

    if (!empty($name) && !empty($email)) {
        //
        $sql = "INSERT INTO registration(name, email) VALUES('$name', '$email')";
        if (mysqli_query($db, $sql)) {
            echo "Success";
        }
    }
}
